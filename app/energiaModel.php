<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class energiaModel extends Model
{
    public function cadastrarAparelho($dados) {
        $query = DB::table('tb_user_x_tb_eletronic')->insert($dados);
        return $query;
    }
}
