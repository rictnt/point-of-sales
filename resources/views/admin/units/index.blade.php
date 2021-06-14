@extends('layouts.app')

@section('main')
    <div class="page-content">

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Add New Unit</h6>
                        @include('admin.components.errors')
                        <form action="{{ route('admin.units.store') }}" method="POST" class="needs-validation" novalidate>
                            @csrf
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label">Unit Name</label>
                                <div class="col-md-4">
                                    <input type="text" name="name" class="form-control" placeholder="Ex: New Brand" required>
                                </div>
                                <div class="col-md-2">
                                    <button type="submit" class="btn btn-primary">Add Unit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Unites List</h6>
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
                                    @foreach ($units as $unit)
                                        <tr>
                                            <td>{{ $unit->id }}</td>
                                            <td>{{ $unit->name }}</td>
                                            <td class="{{ $unit->status ? 'text-success' : 'text-danger' }}">
                                                {{ $unit->status ? 'Active' : 'Inactive' }}</td>
                                            <td>
                                                <div class="rapid_action">
                                                    <button onclick="updateItem({{ $unit->id }},null,'toogle')"
                                                        class="btn {{ $unit->status ? 'btn-outline-danger' : 'btn-outline-success' }}">
                                                        <i data-feather="{{ $unit->status ? 'eye-off' : 'eye' }}"
                                                            style="height: 15px;width: 15px;"></i>
                                                    </button>
                                                    <button
                                                        onclick="updateItem({{ $unit->id }},'{{ $unit->name }}')"
                                                        class="btn btn-outline-primary" data-toggle="modal"
                                                        data-target="#editModal"><i data-feather="edit"
                                                            style="height: 15px;width: 15px;"></i>
                                                    </button>
                                                    <button
                                                        data-toggle="modal"
                                                        data-target="#deleteModal"
                                                        onclick="setDeleteForm({{ $unit->id }})"
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

    {{-- #editForm --}}
    @include('admin.brands.inc.edit-modal')
    {{-- #deleteForm --}}
    {{-- @include('admin.components.delete-modal',['item' => 'brand']) --}}

    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModal" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Delete {{ $item ?? 'item' }}</h6>
                        <form id="deleteForm" method="POST">
                            @csrf
                            @method('delete')
                            <p>Are you sure want to delete this {{ $item ?? 'item' }}?</p>
                            <div class="form-group text-right">
                                <button data-dismiss="modal" class="btn btn-secondary">Cancel</button>
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('page-js')
    <script>
        function makeUrl(id) {
            return `{{ route('admin.units.index') }}/${id}`;
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
