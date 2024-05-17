<?php

namespace App\Http\Controllers;

use App\Models\Camionero;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\CamioneroRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class CamioneroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $camioneros = Camionero::paginate();

        return view('camionero.index', compact('camioneros'))
            ->with('i', ($request->input('page', 1) - 1) * $camioneros->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $camionero = new Camionero();

        return view('camionero.create', compact('camionero'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CamioneroRequest $request): RedirectResponse
    {
        Camionero::create($request->validated());

        return Redirect::route('camionero.index')
            ->with('success', 'Camionero created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $camionero = Camionero::find($id);

        return view('camionero.show', compact('camionero'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $camionero = Camionero::find($id);

        return view('camionero.edit', compact('camionero'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CamioneroRequest $request, Camionero $camionero): RedirectResponse
    {
        $camionero->update($request->validated());

        return Redirect::route('camioneros.index')
            ->with('success', 'Camionero updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Camionero::find($id)->delete();

        return Redirect::route('camioneros.index')
            ->with('success', 'Camionero deleted successfully');
    }
}
