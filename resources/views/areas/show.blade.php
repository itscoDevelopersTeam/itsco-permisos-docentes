@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Area</div>
                
                <div class="card-body">
                    <dl>
                        <dt class="col-sm-3">Nombre del area</dt>
                        <dd class="col-sm-9">{{ $area->name }}</dd>
                        
                        <dt class="col-sm-3">Jefe del area</dt>
                        <dd class="col-sm-9">{!! isset($area->user) ? $area->user->name : 'No asignado' !!}</dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
