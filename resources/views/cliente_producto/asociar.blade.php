@extends('layouts.app')

@section('template_title')
{{ __('Asociar Cliente con Producto') }}
@endsection

@section('content')
<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span id="card_title">
                        {{ __('Asociar Clientes y Productos') }}
                    </span>
                    <a class="btn btn-primary btn-sm" href="{{ route('producto.index') }}"> {{ __('Volver') }}</a>
                </div>
                <div class="card-body bg-white">
                    <form action="{{route('cliente_producto.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="cliente_id" class="form-label">
                                <h4>Clientes:</h4>
                            </label>
                            <select name="cliente_id" id="cliente_id" class="form-control">
                                @foreach($clientes as $cliente)
                                    <option value="{{ $cliente->id }}">{{ $cliente->id }} - {{ $cliente->nombre }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mt-3">
                            <label for="producto_id" class="form-label">
                                <h4>Productos:</h4>
                            </label>
                            <select name="producto_id" id="producto_id" class="form-control">
                                @foreach($productos as $producto)
                                    <option value="{{ $producto->id }}">{{ $producto->id }} - {{ $producto->descripcion }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mt-4">
                            <button class="btn btn-primary" type="submit">Enviar Formulario</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection