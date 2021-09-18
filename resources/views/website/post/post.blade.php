@extends('layouts.app')

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
        <div class="col-12">
            <div class="card shadow-sm mb-4">
                {{-- <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Post Table</h6>
                </div> --}}
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Title</th>
                                    <th>Image</th>
                                    <th>Body</th>
                                    <th>Updated Date</th>
                                    <th>Created Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $post)
                                    <tr>
                                        <td>{{ $post->id }}</td>
                                        <td>{{ $post->title }}</td>
                                        <td><img class="img-fluid" style="width: 10rem" src="{{ $post->post_image }}"
                                                alt="{{ $post->title }}"></td>
                                        <td>{{ $post->body }}</td>
                                        <td>{{ $post->updated_at }}</td>
                                        <td>{{ $post->created_at }}</td>
                                        <td>
                                            <div class="dropdown no-arrow">
                                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                                    aria-labelledby="dropdownMenuLink">
                                                    <a class="dropdown-item"
                                                        href="{{ route('post.root') . '/' . $post->id }}">View Post</a>
                                                    <a class="dropdown-item"
                                                        href="{{ route('post.create') . '/' . $post->id }}">Edit Post</a>
                                                    <form action="{{ route('post.root') . '/' . $post->id }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="dropdown-item">Delete Post</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
