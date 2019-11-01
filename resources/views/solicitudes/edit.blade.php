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
                    <form method="POST" action="{{ route('solicitudes.update', $solicitudPermiso->id) }}">
                        @csrf
                        @method('PUT')
                        @include('solicitudes.partials._form')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection