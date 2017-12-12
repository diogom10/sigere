<?php

namespace App\Libraries;


class Lib_global{

    public static function dateTimeToDate($Data)
    {
        $date = explode(" ", $Data);

        return $date[0];
    }



}
