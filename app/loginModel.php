<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class loginModel extends Model {

    public function cadastrar($dados) {
        $query = DB::table('tb_user')->insert($dados);
        return $query;
    }

}
