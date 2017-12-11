<?php
namespace App\Libraries;

use App\Libraries\Lib_global;
use Illuminate\Support\Facades\DB;

class Lib_energia{

  public static function getEletronic($Data){

      $query = DB::table("tb_user_x_tb_eletronic")
          ->select("id_eletronic_fk")
          ->where('id_user_fk' , $Data)
          ->get();

     foreach($query as $key => $q){
         $query[$key] =  $q->id_eletronic_fk;
     }

     return $query;
  }

    public static function OrganizaDataEnergia($user_id  , $eletronics){

      $Resposta = [];
      foreach($eletronics as $key => $e){
          $Resposta[$key] = self::getDataEnergia($user_id,$e);
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

              $query[$key]->energia =
                  DB::table("tb_data as d")
                  ->where('d.data_user_id_fk' , $user_id)
                  ->where('d.data_eletronic_id_fk' ,  $eletronics)
                      ->where('d.data_hora', 'like', $q->data_hora.'%')
                //  ->where('d.data_hora' , '2017-12-08 21:53:17')
                      ->sum('d.data_arduino');

              $query[$key]->reais =
                  DB::table("tb_data as d")
                      ->where('d.data_user_id_fk' , $user_id)
                      ->where('d.data_eletronic_id_fk' ,  $eletronics)
                      ->where('d.data_hora', $q->data_hora)
                      //->where('d.data_hora' , '2017-12-08 21:53:17')
                      ->sum('d.data_valor_real');

          }


        return $query;
    }
}