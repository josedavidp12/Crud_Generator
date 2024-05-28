<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Producto;
use Illuminate\Http\Request;

class ClienteProductoController extends Controller
{
    public function asociar(){

        $users = Cliente::all();
        $roles = Producto::all();

        return view('cliente_producto.asociar',compact('cliente','producto'));

    }

    public function store(Request $request){

        $user=Cliente::find($request->user_id);
        $user->roles()->attach($request->role_id);

    }
}
