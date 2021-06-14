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
                            <button class="btn btn-success" data-toggle="modal" data-target="#addModal">Add New
                                Unit</button>
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
                                            <td>{{ $unit->unit_name }}</td>
                                            <td class="{{ $unit->status ? 'text-success' : 'text-danger' }}">
                                                {{ $unit->status ? 'Active' : 'Inactive' }}</td>
                                            <td>
                                                <div class="rapid_action">
                                                    <button onclick="updateItem({{ $unit->id }},null,'toogle')"
                                                        class="btn {{ $unit->status ? 'btn-outline-danger' : 'btn-outline-success' }}">
                                                        <i data-feather="{{ $unit->status ? 'eye-off' : 'eye' }}"
                                                            style="height: 15px;width: 15px;"></i>
                                                    </button>
                                                    <button onclick="updateItem({{ $unit->id }},'{{ $unit->name }}')"
                                                        class="btn btn-outline-primary" data-toggle="modal"
                                                        data-target="#editModal"><i data-feather="edit"
                                                            style="height: 15px;width: 15px;"></i>
                                                    </button>
                                                    <button
                                                        onclick="confirm('Are you sure want to delete this item?') ? deleteItem({{ $unit->id }}):false"
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

    @include('admin.components.create-modal',['module' => 'unit'])
    @include('admin.components.delete-modal')
    
@endsection
