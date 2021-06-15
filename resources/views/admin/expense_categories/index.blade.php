@extends('layouts.app')
@section('main')
<div class="page-content">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-3">
                        <h6 class="card-title">Expense Category List</h6>
                        <button class="btn btn btn-success" data-toggle="modal" data-target="#addModal"><i
                                data-feather='plus'></i> Add New</button>
                    </div>
                    <div class="table-responsive cell-border">
                        <table id="dataTableExample" class="table cell-border">
                            <thead>
                                <tr>
                                    <th>Sl No</th>
                                    <th>Date</th>
                                    <th>Name</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($expense_categories as $expense_category)
                                    <tr>
                                        <td>{{ $expense_category->id }}</td>
                                        <td>{{ date('d-m-Y', strtotime($expense_category->created_at)) }}</td>
                                        <td>{{ $expense_category->name }}</td>
                                        <td class="{{ $expense_category->status ? 'text-success' : 'text-danger' }}">
                                            {{ $expense_category->status ? 'Active' : 'Inactive' }}</td>
                                        <td>
                                            <div class="rapid_action">
                                                @include('admin.components.table-buttons', ['item' => $expense_category])
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


@include('admin.components.create-modal', ['module' => 'category'])
@include('admin.components.edit-modal', ['module' => 'category'])
@include('admin.components.delete-modal', ['module' => 'category'])


@push('page-js')
    @include('admin.components.crud-js')
    @include('admin.components.form-validation-js')
@endpush