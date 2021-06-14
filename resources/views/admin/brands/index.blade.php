@extends('layouts.app')

@section('main')
    <div class="page-content">

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-3">
                            <h6 class="card-title">Brand List</h6>
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
                                    @foreach ($brands as $brand)
                                        <tr>
                                            <td>{{ $brand->id }}</td>
                                            <td>{{ $brand->name }}</td>
                                            <td class="{{ $brand->status ? 'text-success' : 'text-danger' }}">
                                                {{ $brand->status ? 'Active' : 'Inactive' }}</td>
                                            <td>
                                                @include('admin.components.table-buttons', ['item' => $brand])
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
@include('admin.components.create-modal', ['module'=>'brand'])
@include('admin.components.edit-modal', ['module'=>'brand'])
@include('admin.components.delete-modal', ['module' =>'brand'])

@push('page-js')
   
    @include('admin.components.form-validation-js')
@endpush