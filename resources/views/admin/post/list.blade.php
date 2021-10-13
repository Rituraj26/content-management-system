@extends('layouts.admin')

@section('content')

    <div class="row">
        <div class="col-12">
            @if (session('status'))
                <div class="alert alert-{{ session('status') }}" role="alert">
                    {{ session('message') }}
                </div>
            @endif
        </div>
    </div>


    <div class="row">
        <div class="col-12">
            <div class="card shadow-sm mb-4">
                {{-- <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Post Table</h6>
                </div> --}}
                <div class="card-body">
                    <div class="table-responsive-md">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th class="align-middle">Name</th>
                                    <th class="align-middle">Title</th>
                                    <th class="align-middle">Image</th>
                                    <th class="align-middle">Updated Date</th>
                                    <th class="align-middle">Created Date</th>
                                    <th class="align-middle">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $post)
                                    @if (count($posts) === 0)
                                        <p>No Posts Available</p>
                                    @endif
                                    <tr>
                                        <td class="text-center align-middle text-wrap">{{ $post->id }}</td>
                                        <td class="align-middle text-wrap">{{ $post->title }}</td>
                                        <td class="align-middle">
                                            <img class="img-fluid" src="{{ $post->post_image }}"
                                                alt="{{ $post->title }}">
                                        </td>
                                        <td class="align-middle text-wrap">{{ $post->updated_at->diffForHumans() }}</td>
                                        <td class="align-middle text-wrap">{{ $post->created_at->diffForHumans() }}</td>
                                        <td class="text-center align-middle text-wrap">
                                            <div class="dropdown no-arrow">
                                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                                    aria-labelledby="dropdownMenuLink">
                                                    <a class="dropdown-item"
                                                        href="{{ route('admin.post.root') . '/' . $post->id }}">View
                                                        Post</a>
                                                    <a class="dropdown-item"
                                                        href="{{ route('admin.post.create') . '/' . $post->id }}">Edit
                                                        Post</a>
                                                    <form action="{{ route('admin.post.root') . '/' . $post->id }}"
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

    <div class="row text-center">
        <div class="col-12">
            {{ $posts->links() }}
        </div>
    </div>
@endsection

@section('scripts')
@endsection
