@extends('layouts.admin')

@section('content')

    <div class="row mb-4">
        <div class="col-12">
            <h1>Create Post</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-md-10 col-lg-8">
            @php
                $formType = $id ? route('admin.post.root') . '/' . $id : route('admin.post.store');
            @endphp

            <form action="{{ $formType }}" method="POST">
                @if ($id)
                    @method('PUT')
                @endif
                @csrf

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" id="title" placeholder="Enter title"
                        value="{{ $title }}">
                </div>
                <div class="form-group">
                    <label for="body">Body</label>
                    <textarea class="form-control" name="body" id="body" cols="30" rows="10"
                        placeholder="Enter post body">{{ $body }}</textarea>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

@endsection
