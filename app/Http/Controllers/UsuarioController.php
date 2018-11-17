<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Http\Models\Usuario;

class UsuarioController extends Controller
{
   
    public function index(Usuario $dados)
    {
        return $dados->all()->where('perfil',0);
    }

   
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        //
    }

    
    public function show($cpf)
    {
        return Usuario::where('cpf', $cpf)->get();
    }

   
    public function edit($cpf)
    {
        //
    }

   
    public function update(Request $request, $cpf)
    {
        //
    }

   
    public function destroy($cpf)
    {
        //
    }
}
