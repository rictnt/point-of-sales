@extends('layouts.app')

@section('main')
    <div class="page-content">
        <!-- Manage Supplier -->
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Manage Supplier</h6>
                        <div class="table-responsive cell-border">
                            <table id="dataTableExample" class="table cell-border">
                                <thead>
                                    <tr>
                                        <th>Sl No</th>
                                        <th>Name</th>
                                        <th>E-mail</th>
                                        <th>Mobile</th>
                                        <th>Address</th>
                                        <th>Details</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($suppliers as $supplier)
                                        <tr>
                                            <td>{{ $supplier->id }}</td>
                                            <td>{{ $supplier->name }}</td>
                                            <td>{{ $supplier->email }}</td>
                                            <td>{{ $supplier->mobile }}</td>
                                            <td>{{ $supplier->address }}</td>
                                            <td>{{ $supplier->details }}</td>
                                            <td>
                                                <div class="rapid_action">
                                                    <a href="{{ route('admin.suppliers.edit', $supplier->id) }}"
                                                        class="btn btn-outline-primary"> <i data-feather="edit"
                                                            style="height: 15px;width: 15px;"></i></a>
                                                            <button
                                                            data-toggle="modal"
                                                            data-target="#deleteModal"
                                                            onclick="setDeleteForm({{ $supplier->id }})"
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

@include('admin.components.delete-modal')

@push('page-js')
    <script>
        function makeUrl(id) {
            return `{{ route('admin.suppliers.index') }}/${id}`;
        }

        
        function setDeleteForm(id) {
            $('#deleteForm').attr('action', makeUrl(id));

        }
    </script>
@endpush
