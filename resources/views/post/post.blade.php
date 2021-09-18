@extends('layouts.master')

@section('content')

    <div class="row mb-4">
        <div class="col-12">
            <h1>Posts</h1>
        </div>
    </div>
    @if (count($posts) === 0)
        <p>No Posts Available</p>
    @endif

    <div class="row">
        @foreach ($posts as $post)
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">{{ $post->title }}</h6>
                        <div class="dropdown no-arrow">
                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="{{ route('post.create') . '/' . $post->id }}">Edit
                                    Post</a>
                                <form action="{{ route('post.root') . '/' . $post->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="dropdown-item">Delete Post</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        {{ $post->body }}
                    </div>
                    <div class="card-footer bg-transparent">
                        <a href="{{ route('post.root') . '/' . $post->id }}" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>


@endsection
