@extends('layouts.admin')

@section('content')

    {{-- <div class="row mb-4">
        <div class="col-12">
            <h1>Posts</h1>
        </div>
    </div> --}}


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
                                    <th class="text-center align-middle">Id</th>
                                    <th class="text-center align-middle">Name</th>
                                    <th class="text-center align-middle">Email</th>
                                    <th class="text-center align-middle">Updated Date</th>
                                    <th class="text-center align-middle">Created Date</th>
                                    <th class="text-center align-middle">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    @if (count($users) === 0)
                                        <p>No Users Available</p>
                                    @endif
                                    <tr>
                                        <td class="text-center align-middle">{{ $user->id }}</td>
                                        <td class="align-middle">{{ $user->name }}</td>
                                        <td class="align-middle">{{ $user->email }}</td>
                                        <td class="align-middle">{{ $user->updated_at }}</td>
                                        <td class="align-middle">{{ $user->created_at }}</td>
                                        <td class="text-center align-middle">
                                            <div class="dropdown no-arrow">
                                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                                    aria-labelledby="dropdownMenuLink">
                                                    <a class="dropdown-item"
                                                        href="{{ route('admin.post.root') . '/' . $user->id }}">View
                                                        User</a>
                                                    <a class="dropdown-item"
                                                        href="{{ route('admin.post.create') . '/' . $user->id }}">Edit
                                                        User</a>
                                                    <form action="{{ route('admin.post.root') . '/' . $user->id }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="dropdown-item">Delete User</button>
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

@section('scripts')

    <!-- Page level plugins -->
    <script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('js/demo/datatables-demo.js') }}"></script>

@endsection
