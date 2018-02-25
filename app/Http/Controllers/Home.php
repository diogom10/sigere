<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Libraries\Lib_Energia;

class Home extends Controller
{

    public function homeUser()
    {
        return view('home/home_view');
    }

    public function logout(Request $Dados)
    {

        $Response['success'] = false;
        if ($Dados->destroy == 1) {
            session()->flush();
            $Response['success'] = true;
        }

        echo json_encode($Response);
    }

    public function getEnergia(Request $Dados)
    {

        $Response = [];

        $eletronics = Lib_energia::getEletronic($Dados["user_id"]);
        // print_r($eletronics).die();
        if (count($eletronics) > 0) {
            $energia_data = Lib_energia::OrganizaDataEnergia($Dados["user_id"], $eletronics);
            if (count($energia_data > 0)) {
                $Response['success'] = true;
                $Response['energia'] = $energia_data;
            }
        } else {
            $Response['success'] = false;
            $Response['msg'] = "Usuario Não Cadastrou Nenhum Aparelho";
        }

        echo json_encode($Response);

    }


    public function setEnergia(Request $Dados)
    {
        $Response = [];


        date_default_timezone_set('America/Sao_Paulo');
        $dataLocal = date('Y-m-d ', time());

        $data = [
            'data_arduino' => $Dados['data_arduino'],
            'data_user_id_fk' => $Dados['data_user_id_fk'],
            'data_eletronic_id_fk' => $Dados['data_eletronic_id_fk'],
               'data_valor_real' => 0,
            'data_hora' =>  $dataLocal
        ];
        $Response['success'] = Lib_Energia::setDataEnergia($data);

        return $Response;

    }

}
