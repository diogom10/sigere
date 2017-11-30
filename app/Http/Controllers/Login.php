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
            "user_password" => md5($dados->senha . HASH)
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
                $Response['success'] = false;
                $Response['msg'] = 'Usuario não existe';
                break;

            case 2:
                $Response['success'] = false;
                $Response['msg'] = 'Senha incorreta';
                break;

            case 3:
                
                $Response['success'] = true;
                session([
                    'user_id' => $user['data']->user_id,
                    'user_name' => $user['data']->user_name,
                    'user_status_login' => true
                ]);
                break;
        }
        
        
        echo json_encode($Response);
    }

}
