@extends('layouts.app')

@section('main')
    @if (isset($items) && isset($module))
        <div class="page-content">
            @include('admin.components.errors')
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-3">
                                <h6 class="card-title">{{ $module ?? 'Item' }} List</h6>
                                <button class="btn btn btn-success" data-toggle="modal" data-target="#addModal"><i
                                        data-feather='plus'></i> Add New</button>
                            </div>
                            <div class="table-responsive cell-border">
                                <table id="dataTableExample" class="table cell-border">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($items as $item)
                                            <tr>
                                                <td>{{ $item->id }}</td>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->description }}</td>
                                                <td class="{{ $item->status ? 'text-success' : 'text-danger' }}">
                                                    {{ $item->status ? 'Active' : 'Inactive' }}</td>
                                                <td>
                                                    <div class="rapid_action">
                                                        <button onclick="setEditForm({{ $item->toJson() }})"
                                                            class="btn btn-outline-primary" data-toggle="modal"
                                                            data-target="#editModal"><i data-feather="edit"
                                                                style="height: 15px;width: 15px;"></i>
                                                        </button>
                                                        <button data-toggle="modal" data-target="#deleteModal"
                                                            onclick="setDeleteForm({{ $item->toJson() }})"
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
        @include('admin.components.common-crud.create-modal', ['module'=> $module])
        @include('admin.components.common-crud.edit-modal', ['module'=> $module])
        @include('admin.components.common-crud.delete-modal', ['module' => $module])
    @else
        <div class="page-content">
            <h4>Components need at least 2 params ($items and $module) not found</h4>
        </div>
    @endisset
@endsection

@push('page-js')
    @include('admin.components.form-validation-js')
    @include('admin.components.common-crud.crud-js')
@endpush
