@extends('layouts.app')

@section('main')
    <div class="page-content">
        <!-- Manage User -->
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Manage User</h6>
                        <div class="table-responsive cell-border">
                            <table id="dataTableExample" class="table cell-border">
                                <thead>
                                    <tr>
                                        <th>Sl No</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Mobile</th>
                                        <th>Username</th>
                                        <th>Role</th>
                                        <th>Permission</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $user->id }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->mobile }}</td>
                                            <td>{{ $user->username }}</td>
                                            <td>Admin</td>
                                            <td>All Permission</td>
                                            <td>
                                                <div class="rapid_action">
                                                    <a href="{{ route('admin.users.edit', $user->id) }}"
                                                        class="btn btn-outline-primary"> <i data-feather="edit"
                                                            style="height: 15px;width: 15px;"></i></a>
                                                    <button
                                                        onclick="confirm('Are you sure want to delete this item?') ? deleteItem({{ $user->id }}):false"
                                                        class="btn btn-outline-danger"><i data-feather="trash"
                                                            style="height: 15px;width: 15px;"></i>
                                                    </button>
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
    </div>
@endsection

@include('admin.components.delete-modal')

@push('page-js')
    <script>
        function makeUrl(id) {
            return `{{ route('admin.users.index') }}/${id}`;
        }

        function deleteItem(id) {
            $('#deleteForm').attr('action', makeUrl(id)).submit();
        }

    </script>
@endpush
