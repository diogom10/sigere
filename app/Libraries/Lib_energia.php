<?php
namespace App\Libraries;

use App\Libraries\Lib_global;
use Illuminate\Support\Facades\DB;
use App\energiaModel;

class Lib_energia{

    public static function getEletronic($Data){

        $query = DB::table("tb_user_x_tb_eletronic as r")
            ->join('tb_eletronic as e' ,'e.eletronic_id', '=' , 'r.id_eletronic_fk')
            ->select('r.id_eletronic_fk' , 'e.eletronic_type')
            ->where('id_user_fk' , $Data)
            ->get();


        return $query;
    }

    public static function OrganizaDataEnergia($user_id  , $eletronics){

        // print_r($eletronics).die();
        $Resposta = [];
        foreach($eletronics as $key => $e){
            $Resposta[$key] = self::getDataEnergia($user_id,$e->id_eletronic_fk);
            $Resposta[$key]->type = $e->eletronic_type;
        }

        return $Resposta;

    }


    public static function getDataEnergia($user_id  , $eletronics){


        $query = DB::table("tb_data as d")
            ->join('tb_eletronic as e' ,'e.eletronic_id', '=' , 'd.data_eletronic_id_fk')
            ->select('d.data_user_id_fk' , 'd.data_eletronic_id_fk', 'd.data_hora', 'e.eletronic_type')
            ->where('d.data_user_id_fk' , $user_id)
            ->where('d.data_eletronic_id_fk' ,  $eletronics)
            ->distinct('d.data_hora')
            ->get();



        foreach ($query as $key => $q){
          //  $query[$key]->data_hora = lib_Global::date( $query[$key]->data_hora);
            $query[$key]->uniMedidaK = 'KW/H:';
            $query[$key]->uniMedidaR = 'R$:';
            $query[$key]->energia =
                DB::table("tb_data as d")
                    ->where('d.data_user_id_fk' , $user_id)
                    ->where('d.data_eletronic_id_fk' ,  $eletronics)
                    ->where('d.data_hora',  $q->data_hora)
                    //  ->where('d.data_hora' , '2017-12-08 21:53:17')
                    ->sum('d.data_arduino');

            $query[$key]->reais =
                DB::table("tb_data as d")
                    ->where('d.data_user_id_fk' , $user_id)
                    ->where('d.data_eletronic_id_fk' ,  $eletronics)
                    ->where('d.data_hora', $q->data_hora)
                    //->where('d.data_hora' , '2017-12-08 21:53:17')
                    ->sum('d.data_valor_real');

            $query[$key]->data_hora = lib_Global::date( $query[$key]->data_hora);

        }

        return $query;
    }

    public static function setDataEnergia($data){
        $model = new energiaModel();
        $model->cadastrarEnergia($data);
        return true;
    }

    public static function convertToReal($data){

    }
}