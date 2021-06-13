@extends('layouts.app')

@section('main')
    <div class="page-content">

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Add New Brand</h6>
                        <form action="{{ route('admin.brands.store') }}" method="POST" class="forms-sample">
                            @csrf
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label">Brand Name</label>
                                <div class="col-md-4">
                                    <input type="text" name="brand_name" class="form-control" placeholder="Ex: Toyota">
                                </div>
                                <div class="col-md-2">
                                    <button type="submit" class="btn btn-primary form-control">Add</button>
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
                                            <td>{{ $brand->brand_name }}</td>
                                            <td class="{{ $brand->status ? 'text-success' : 'text-danger' }}">
                                                {{ $brand->status ? 'Active' : 'Inactive' }}</td>
                                            <td>
                                                <div class="rapid_action">
                                                    <button onclick="updateItem({{ $brand->id }},null,'toogle')"
                                                        class="btn {{ $brand->status ? 'btn-outline-danger' : 'btn-outline-success' }}">
                                                        <i data-feather="{{ $brand->status ? 'eye-off' : 'eye' }}"
                                                            style="height: 15px;width: 15px;"></i>
                                                    </button>
                                                    <button
                                                        onclick="updateItem({{ $brand->id }},'{{ $brand->name }}')"
                                                        class="btn btn-outline-primary" data-toggle="modal"
                                                        data-target="#editModal"><i data-feather="edit"
                                                            style="height: 15px;width: 15px;"></i>
                                                    </button>
                                                    <button
                                                        onclick="confirm('Are you sure want to delete this item?') ? deleteItem({{ $brand->id }}):false"
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

    {{-- Edit modal --}}
    {{-- <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModal" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="card">
                    <div class="card-header">
                        <h6>Edit Category</h6>
                    </div>
                    <div class="card-body">
                        <form id="updateForm" method="POST">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <input type="hidden" name="status">
                            <div class="form-group text-right">
                                <button class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
@endsection

@include('admin.components.delete-form')

{{-- @push('page-scripts')
    <script>
        function makeUrl(id) {
            return `{{ route('admin.categories.index') }}/${id}`;
        }

        function deleteItem(id) {
            $('#deleteForm').attr('action', makeUrl(id)).submit();
        }

        function updateItem(id, name, status) {

            // set action on the form 
            $('#updateForm').attr('action', makeUrl(id));

            // set forms input values 
            if (name) {
                $('#updateForm input[name=name]').val(name);
            }

            if (status == 'toogle') {
                $('#updateForm input[name=status]').val(status);
                $('#updateForm').submit();
            }
        }

    </script>
@endpush --}}
