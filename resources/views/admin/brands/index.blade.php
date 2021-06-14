@extends('layouts.app')

@section('main')
    <div class="page-content">

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Add New Brand</h6>
                        @include('admin.components.errors')
                        <form action="{{ route('admin.brands.store') }}" method="POST" class="needs-validation"
                            novalidate>
                            @csrf
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label">Brand Name</label>
                                <div class="col-md-4">
                                    <input type="text" name="name" class="form-control" placeholder="Ex: Toyota" required>
                                </div>
                                <div class="col-md-2">
                                    <button type="submit" class="btn btn-primary px-3">Add Brand</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Brands List</h6>
                        <div class="table-responsive cell-border">
                            <table id="dataTableExample" class="table cell-border">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($brands as $brand)
                                        <tr>
                                            <td>{{ $brand->id }}</td>
                                            <td>{{ $brand->name }}</td>
                                            <td class="{{ $brand->status ? 'text-success' : 'text-danger' }}">
                                                {{ $brand->status ? 'Active' : 'Inactive' }}</td>
                                            <td>
                                                <div class="rapid_action">
                                                    <button onclick="setEditForm({{ $brand->id }},null,'toogle')"
                                                        class="btn {{ $brand->status ? 'btn-outline-danger' : 'btn-outline-success' }}">
                                                        <i data-feather="{{ $brand->status ? 'eye-off' : 'eye' }}"
                                                            style="height: 15px;width: 15px;"></i>
                                                    </button>
                                                    <button
                                                        onclick="setEditForm({{ $brand->id }},'{{ $brand->name }}')"
                                                        class="btn btn-outline-primary" data-toggle="modal"
                                                        data-target="#editModal"><i data-feather="edit"
                                                            style="height: 15px;width: 15px;"></i>
                                                    </button>
                                                    <button data-toggle="modal" data-target="#deleteModal"
                                                        onclick="setDeleteForm({{ $brand->id }})"
                                                        class=" btn btn-outline-danger"><i data-feather="trash"
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
@include('admin.components.edit-modal', ['module'=>'brand'])
@include('admin.components.delete-modal', ['module' =>'brand'])

@push('page-js')
    <script>
        function makeUrl(id) {
            return `{{ route('admin.brands.index') }}/${id}`;
        }

        function setDeleteForm(id) {
            $('#deleteForm').attr('action', makeUrl(id));
        }

        function setEditForm(id, name, status) {
            $('#editForm').attr('action', makeUrl(id));
            if (name) {
                $('#editForm input[name=name]').val(name);
            }
            if (status == 'toogle') {
                $('#editForm input[name=status]').val(status);
                $('#editForm').submit();
            }
        }

    </script>
    @include('admin.components.form-validation-js')
@endpush
