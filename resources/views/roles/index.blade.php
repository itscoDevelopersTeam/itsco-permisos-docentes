@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Productos
                    @can('roles.create')
                        <a href="{{ route('roles.create') }}" class="btn btn-sm btn-primary float-right">Crear</a>
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
                            @foreach ($roles as $role)
                                <tr>
                                    <td>{{ $role->id }}</td>
                                    <td>{{ $role->name }}</td>
                                    <td width="10px">
                                        @can('roles.show')
                                            <a href="{{ route('roles.show', $role->id) }}" class="btn btn-sm btn-outline-secondary">Ver</a>
                                        @endcan
                                    </td>
                                    <td width="10px">
                                        @can('roles.edit')
                                            <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-sm btn-outline-secondary">Editar</a>
                                        @endcan
                                    </td>
                                    <td width="10px">
                                        @can('roles.destroy')
                                            <form method="POST" action="{{ route('roles.destroy', $role->id) }}">
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
                    {{ $roles->links() }}
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
