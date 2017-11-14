<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\loginModel;

class Login extends Controller {

    public function setLogin() {
        return view('view_login');
    }

    public function setCadastro(Request $dados) {
        $model = new loginModel();
        $Response = [];

        $insert = [
            "user_name" => $dados->nome,
            "user_email" => $dados->email,
            "user_password" => $dados->senha,
        ];
        
        $Response['success'] = $model->cadastrar($insert);

        if ($Response['success']) {
            $Response['msg'] = 'deu certo';
        } else {
            $Response['msg'] = 'deu errado';
        }

        echo json_encode($Response);
    }

}
