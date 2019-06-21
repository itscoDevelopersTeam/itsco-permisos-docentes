@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Solicitud
                </div>

                <div class="card-body">
                    <p><strong>Estado:</strong> {{ $solicitudPermiso->status }}</p>
                    <p><strong>Docente:</strong> {{ $solicitudPermiso->user->name }}</p>
                    <p><strong>Asunto:</strong> {{ $solicitudPermiso->asunto }}</p>
                    <p><strong>Descripción:</strong> {{ $solicitudPermiso->descripcion }}</p>
                    <p><strong>Fecha:</strong> {{ $solicitudPermiso->fecha }}</p>
                    <p><strong>Hora de inicio:</strong> {{ $solicitudPermiso->hora_inicio }}</p>
                    <p><strong>Cantidad de horas:</strong> {{ $solicitudPermiso->cantidad_horas }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
