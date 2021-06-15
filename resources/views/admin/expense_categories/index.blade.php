@extends('layouts.app')
@section('main')
    <div class="page-content">
        <!-- Manage Expense Category` -->
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
                                                @include('admin.components.table-buttons', ['item' => $expense_category])
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
    @include('admin.components.create-modal')
    @include('admin.components.edit-modal')
    @include('admin.components.delete-modal')
@endsection
@push('page-js')
    @include('admin.components.crud-js')
@endpush
