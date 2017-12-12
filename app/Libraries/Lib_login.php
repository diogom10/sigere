<?php
namespace App\Libraries;
use Illuminate\Support\Facades\DB;

class Lib_login{

  public static function validateLogin($Data){
      $Retorno = [];
      $validate = true;
       $query = DB::table('tb_user')
                 ->where('user_email' , $Data['email'])
                 ->get();

       if(count($query) < 1 ){
             $Retorno['validate'] = 1;
             $validate = false;
       }else if($query[0]->user_password !=  md5($Data['senha'] . HASH)){
           $Retorno['validate'] = 2;
              $validate = false;
       }else if($validate){
             $Retorno['validate'] = 3;
             $Retorno['data'] = $query[0];
       }
           
       return $Retorno;
  }

  
   public static function validateCadastro($Data){
       
         $query = DB::table('tb_user')
                 ->select('user_email')
                 ->where('user_email' , $Data)
                 ->get();
        return $query;
  }
}