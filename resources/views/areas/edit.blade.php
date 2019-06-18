@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Area</div>

                <div class="card-body">
                    <form action="{{ route('areas.update', ['id' => $area->id]) }}" method="post">
                        @csrf
                        @method('PUT')
                        @include('areas.partials._form')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
