@extends('layouts.admin')

@section('content')

    <div class="row">
        <div class="col-12 col-md-10 col-lg-8">
            <div class="card shadow-sm mb-4">
                <div class="card-header py-3">
                    <h1 class="m-0 font-weight-bold text-primary">{{ $title }}</h1>
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" src="{{ $image }}" alt="{{ $title }}">
                    </div>
                    <p>{{ $body }}</p>
                </div>
            </div>
        </div>
    </div>

@endsection
