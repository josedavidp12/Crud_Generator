@extends('layouts.app')

@section('template_title')
    Camioneros
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Camioneros') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('camionero.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>

									<th >Nombre</th>
									<th >Poblacion</th>
									<th >Dni</th>
									<th >Telefono</th>
									<th >Direccion</th>
									<th >Salario</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($camioneros as $camionero)
                                        <tr>
                                            <td>{{ ++$i }}</td>

										<td >{{ $camionero->nombre }}</td>
										<td >{{ $camionero->poblacion }}</td>
										<td >{{ $camionero->dni }}</td>
										<td >{{ $camionero->telefono }}</td>
										<td >{{ $camionero->direccion }}</td>
										<td >{{ $camionero->salario }}</td>

                                            <td>
                                                <form action="{{ route('camionero.destroy', $camionero->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('camionero.show', $camionero->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('camionero.edit', $camionero->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $camioneros->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
