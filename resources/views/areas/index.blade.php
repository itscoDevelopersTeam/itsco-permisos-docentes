@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Areas
                    <a href="{{ route('areas.create') }}" class="btn btn-sm btn-primary float-right">
                        crear
                    </a>
                </div>

                <div class="card-body">
                    <table class="table table-sm table-striped table-hover">
                        <thead>
                            <tr>
                                <th whidth="10px">#</th>
                                <th>Nombre</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($areas as $area)
                                <tr>
                                    <td>{{ $area->id }}</td>
                                    <td>{{ $area->name }}</td>

                                    {{-- Ver detalle del area --}}
                                    <td width="10px">
                                        @can('areas.show')
                                        <a href="{{ route('areas.show', ['id'=>$area->id]) }}" class="btn btn-sm btn-outline-secondary">Ver</a>
                                        @endcan
                                    </td>

                                    {{-- Editar el area --}}
                                    <td width="10px">
                                        @can('areas.edit')
                                        <a href="{{ route('areas.edit', ['id'=>$area->id]) }}" class="btn btn-sm btn-outline-secondary">Editar</a>
                                        @endcan
                                    </td>

                                    {{-- Eliminar el area --}}
                                    <td width="10px">
                                        @can('areas.destroy')
                                        <form action="{{ route('areas.destroy', ['id'=>$area->id]) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">
                                                Eliminar
                                            </button>
                                        </form>
                                        @endcan
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {{-- Muestra la paginación --}}
                    {{ $areas->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
