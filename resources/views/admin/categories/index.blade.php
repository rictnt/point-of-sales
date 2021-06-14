@extends('layouts.app')

@section('main')
    <div class="page-content">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Add New Category</h6>

                        @include('admin.components.errors')

                        <form action="{{ route('admin.categories.store') }}" method="POST" class="needs-validation"
                            novalidate>
                            @csrf
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label">Category Name</label>
                                <div class="col-md-4">
                                    <input type="text" name="name" value="{{ old('name') }}" class="form-control"
                                        placeholder="Ex: Man Fashion" required>
                                </div>
                                <div class="col-md-2">
                                    <button type="submit" class="btn btn-primary">Add Category</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Category List</h6>
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
                                    @foreach ($categories as $category)
                                        <tr>
                                            <td>{{ $category->id }}</td>
                                            <td>{{ $category->name }}</td>
                                            <td class="{{ $category->status ? 'text-success' : 'text-danger' }}">
                                                {{ $category->status ? 'Active' : 'Inactive' }}</td>
                                            <td>
                                                <div class="rapid_action">
                                                    <button onclick="setEditForm({{ $category->id }},null,'toogle')"
                                                        class="btn {{ $category->status ? 'btn-outline-danger' : 'btn-outline-success' }}">
                                                        <i data-feather="{{ $category->status ? 'eye-off' : 'eye' }}"
                                                            style="height: 15px;width: 15px;"></i>
                                                    </button>
                                                    <button
                                                        onclick="setEditForm({{ $category->id }},'{{ $category->name }}')"
                                                        class="btn btn-outline-primary"
                                                        data-toggle="modal"
                                                        data-target="#editModal"><i data-feather="edit"
                                                        style="height: 15px;width: 15px;"></i>
                                                    </button>
                                                    <button
                                                        data-toggle="modal"
                                                        data-target="#deleteModal"
                                                        onclick="setDeleteForm({{ $category->id }})"
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

    {{-- #editForm --}}
    @include('admin.components.edit-modal', ['module' => 'category'])
    {{-- #deleteForm --}}
    @include('admin.components.delete-modal', ['module' => 'category'])

@endsection

@push('page-js')
    <script>
        function makeUrl(id) {
            return `{{ route('admin.categories.index') }}/${id}`;
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
