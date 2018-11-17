<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    public $timestamps = false;
    protected $hidden = ['usuario'];
}
