<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Libraries\Lib_Energia;

class Home extends Controller {

    public function homeUser() {
        return view('home/home_view');
    }

    public function logout(Request $Dados) {
        
        $Response['success'] = false;
        if ($Dados->destroy == 1) {
            session()->flush();
            $Response['success'] = true;
        }
        
         echo json_encode($Response);
    }

    public function getEnergia(Request $Dados) {

        $Response = [];

        $eletronics = Lib_energia::getEletronic($Dados["user_id"]);

        if(count($eletronics) > 0){
            $energia_data = Lib_energia::OrganizaDataEnergia($Dados["user_id"] ,  $eletronics );
            print_r( $energia_data).die();
        }else{
            $Response['success'] = false;
            $Response['msg'] = "Usuario Não Cadastrou Nenhum Aparelho";
        }

    }

}
