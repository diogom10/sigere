<?php

namespace App\Libraries;


class Lib_global{

    public static function dateTimeToDate($Data)
    {
        $date = explode(" ", $Data);

        return $date[0];
    }
    
    public static function date($data)
  {
      $formatoDataHora = date("d/m/Y" , strtotime($data));
      return $formatoDataHora;



  }


}
