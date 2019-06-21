@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Solicitudes
                    @can('solicitudes.create')
                        <a href="{{ route('solicitudes.create') }}" class="btn btn-sm btn-primary float-right">Crear</a>
                    @endcan
                </div>

                <div class="card-body">
                    <table class="table table-sm table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">#</th>
                                <th>Nombre</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($solicitudes as $solicitud)
                                <tr>
                                    <td>{{ $solicitud->id }}</td>
                                    <td>{{ $solicitud->asunto }}</td>
                                    <td width="10px">
                                        @can('solicitudes.show')
                                            <a href="{{ route('solicitudes.show', $solicitud->id) }}" class="btn btn-sm btn-outline-secondary">Ver</a>
                                        @endcan
                                    </td>
                                    <td width="10px">
                                        @can('solicitudes.edit')
                                            <a href="{{ route('solicitudes.edit', $solicitud->id) }}" class="btn btn-sm btn-outline-secondary">Editar</a>
                                        @endcan
                                    </td>
                                    <td width="10px">
                                        @can('solicitudes.destroy')
                                            <form method="POST" action="{{ route('solicitudes.destroy', $solicitud->id) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                                            </form>
                                        @endcan
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {{-- Pagination showed --}}
                    {{ $solicitudes->links() }}
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
