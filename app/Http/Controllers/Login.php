<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\loginModel;
use App\Libraries\Lib_login;

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
            "user_password" => $dados->senha . Config::HASH,
        ];

        $validate = Lib_login::validateCadastro($insert["user_email"]);

        if (count($validate) < 1) {
            $Response['success'] = $model->cadastrar($insert);
            $Response['msg'] = 'Usuario cadastrado com sucesso';
        } else {
            $Response['success'] = false;
            $Response['msg'] = 'Email ja existe';
        }
        echo json_encode($Response);
    }

    public function getLogin(Request $dados) {
        $Response = [];

        $user = Lib_login::validateLogin($dados);
        switch ($user["validate"]) {
            case 1:
                print_r('USUARIO NÃO EXISTE') . die();
                break;

            case 2:
                print_r('SENHA INCORRETA') . die();
                break;

            case 3:
                print_r('APROVADO');
                  print_r($user['data']) . die();
                break;
        }
    }

}
