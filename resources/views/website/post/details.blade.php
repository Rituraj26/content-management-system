@extends('layouts.app')

@section('content')

    <div class="container-fluid bg-dark py-5">
        <div class="container">
            <div class="row justify-content-center text-light text-center">
                <div class="col-12 col-md-10 col-lg-8">
                    <h1 class="display-4 mb-0">{{ $title }}</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-4 justify-content-center">
                <div class="col-12 col-md-10 col-lg-8">
                    <img class="img-fluid w-100 mb-5" src="{{ $image }}" alt="{{ $title }}">
                    <p>
                        {{ $body }}
                    </p>
                </div>
            </div>
        </div>
    </div>

@endsection
