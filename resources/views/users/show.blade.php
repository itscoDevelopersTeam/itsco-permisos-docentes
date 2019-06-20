@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Usuario</div>
                
                <div class="card-body">
                    <dl>
                        <dt class="col-sm-3">Nombre del usuario</dt>
                        <dd class="col-sm-9">{{ $user->name }}</dd>
                        
                        <dt class="col-sm-3">Email del usuario</dt>
                        <dd class="col-sm-9">{{ $user->email }}</dd>

                        <dt class="col-sm-3">Área</dt>
                        <dd class="col-sm-9">{{ $user->area->name }}</dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
