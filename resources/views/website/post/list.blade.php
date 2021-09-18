@extends('layouts.app')

@section('content')

    <div class="container-fluid bg-dark py-5">
        <div class="container">
            <div class="row text-light text-center">
                <div class="col-12">
                    <h1 class="display-4 mb-0">Posts</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12">
                    @if (count($posts) === 0)
                        <p>No Posts Available</p>
                    @endif
                </div>
            </div>

            <div class="row g-4 justify-content-center">
                @foreach ($posts as $post)
                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="card shadow-sm mb-4">
                            <img class="card-img-top" src="{{ $post->post_image }}" alt="{{ $post->title }}">
                            <div class="card-body">
                                <h5 class="font-weight-bold text-primary">{{ $post->title }}</h5>
                                <p>
                                    {{ $post->body }}
                                </p>
                            </div>
                            <div class="card-footer bg-transparent">
                                <a href="{{ route('website.post.root') . '/' . $post->id }}" class="btn btn-primary">View
                                    Details</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
