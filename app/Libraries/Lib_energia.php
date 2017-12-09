<?php
namespace App\Libraries;
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


    public static function getDataEnergia($user_id  , $eletronics){

        $query = DB::table("tb_data as d")
            ->join('tb_eletronic as e' ,'e.eletronic_id', '=' , 'd.data_eletronic_id_fk')
            ->select('d.data_arduino' , 'd.data_user_id_fk' , 'd.data_eletronic_id_fk', 'd.data_hora', 'd.data_valor_real', 'e.eletronic_type')
            ->where('d.data_user_id_fk' , $user_id)
            ->wherein('d.data_eletronic_id_fk' ,  $eletronics)
            ->groupby('data_eletronic_id_fk')
            ->get();


        print_r($query).die();
    }
}