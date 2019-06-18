@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Area</div>

                <div class="card-body">
                    <form action="{{ route('areas.store') }}" method="post">
                        @csrf
                        @include('areas.partials._form')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
