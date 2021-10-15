@extends('layouts.admin')

@section('content')

    {{-- <div class="row">
        <div class="col-12">
            @if (session('status'))
                <div class="alert alert-{{ session('status') }}" role="alert">
                    {{ session('message') }}
                </div>
            @endif
        </div>
    </div> --}}

    <div class="row mb-4 text-right">
        <div class="col-md-12">
            <button class="btn btn-primary" data-toggle="open-right-sidebar">Add Task</button>
        </div>
    </div>

    <div class="row g-4">
        @foreach ($status as $state)
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header bg-transparent text-capitalize">{{ $state->name }}</div>
                    <div class="card-body">
                        Data
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    {{-- <div class="row">
        <div class="col-12">
            <div class="card shadow-sm mb-4">
                <div class="row">
                    <div class="col-md-3">
                        <div class="p-3">
                            <button class="btn btn-primary w-100">Add Task</button>
                            <ul class="list-group mt-3">
                                @foreach ($status as $stats)
                                    <li class="list-group-item h5 mb-0 border-0 text-capitalize">
                                        {{ $stats->name }}
                                    </li>
                                @endforeach
                            </ul>
                            <div class="h5 mt-4">Tags</div>
                            <ul class="list-group mt-3">
                                @foreach ($tags as $tag)
                                    <li class="list-group-item h5 mb-0 border-0 text-capitalize">
                                        {{ $tag->name }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-9">
                        @foreach ($tasks as $task)
                            @if (count($tasks) === 0)
                                <div class="h4 mb-0">No Posts Available</div>
                            @else
                                <div
                                    class="border-left border-bottom d-flex justify-content-between align-items-center p-3">
                                    <div class="h5 mb-0">{{ $task->title }}</div>
                                    <div class="d-flex align-items-center h5 mb-0">
                                        <span
                                            class="px-3 py-2 text-light badge bg-info mr-2">{{ $task->priorityList->name }}</span>
                                        <span class="px-3 py-2 h6 mb-0">{{ $task->due_at }}</span>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
@endsection

@section('scripts')
    @include ('admin.task.scripts.add-task-sidebar')
    <!-- Page level custom scripts -->
    {{-- <script src="{{ asset('js/demo/datatables-demo.js') }}"></script> --}}

@endsection
