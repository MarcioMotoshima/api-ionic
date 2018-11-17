<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    public $timestamps = false;
    protected $hidden = ['tentativa','loja','perfil','id_usuario','senha',];
}
