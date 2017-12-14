<?php
namespace App\Libraries;


class Lib_global{

  public static function dateTimeToDate($Data)
  {
      $date = explode(" ", $Data);

      return $date[0];
  }
  
  public static function dateTime($data)
  {
      $data = new DateTime();
      $formatoDataHora = $data->format('d-m-Y H:i:s');
      return $formatoDataHora;      
       
  }

}