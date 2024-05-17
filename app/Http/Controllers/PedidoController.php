<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Pedido;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\PedidoRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $pedidos = Pedido::paginate();

        return view('pedido.index', compact('pedidos'))
            ->with('i', ($request->input('page', 1) - 1) * $pedidos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $pedido = new Pedido();
        $clientes = Cliente::pluck('name','id');
        return view('pedido.create', compact('pedido' , 'clientes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PedidoRequest $request): RedirectResponse
    {
        Pedido::create($request->validated());

        return Redirect::route('pedidos.index')
            ->with('success', 'Pedido created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $pedido = Pedido::find($id);

        return view('pedido.show', compact('pedido'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $pedido = Pedido::find($id);

        return view('pedido.edit', compact('pedido'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PedidoRequest $request, Pedido $pedido): RedirectResponse
    {
        $pedido->update($request->validated());

        return Redirect::route('pedidos.index')
            ->with('success', 'Pedido updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Pedido::find($id)->delete();

        return Redirect::route('pedidos.index')
            ->with('success', 'Pedido deleted successfully');
    }
}
