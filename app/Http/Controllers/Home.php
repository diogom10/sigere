<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

}
