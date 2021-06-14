@extends('layouts.app')

@section('main')
    <div class="page-content">
        @include('admin.components.errors')
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-3">
                            <h6 class="card-title">Unit List</h6>
                            <button class="btn btn btn-success" data-toggle="modal" data-target="#addModal"><i
                                    data-feather='plus'></i> Add New</button>
                        </div>

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
                                                    @include('admin.components.table-buttons', ['item' => $unit])
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

    @include('admin.components.create-modal', ['module' => 'unit'])
    @include('admin.components.edit-modal', ['module' => 'unit'])
    @include('admin.components.delete-modal', ['module' => 'unit'])
@endsection

@push('page-js')
    @include('admin.components.crud-js')
    @include('admin.components.form-validation-js')
@endpush
    
