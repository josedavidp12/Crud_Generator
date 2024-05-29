<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Producto;
use Illuminate\Http\Request;

class ClienteProductoController extends Controller
{
    public function asociar(){

        $clientes = Cliente::all(['id', 'nombre']); // Asegúrate de incluir 'name'
        $productos = Producto::all(['id', 'descripcion']); // Asegúrate de incluir 'name'

        return view('cliente_producto.asociar',compact('clientes','productos'));

    }

    public function store(Request $request){

        $cliente=Cliente::find($request->cliente_id);
        $cliente->productos()->attach($request->producto_id);
        return redirect()->route('producto.index')->with('success', 'Producto asociado correctamente.');

    }
}
