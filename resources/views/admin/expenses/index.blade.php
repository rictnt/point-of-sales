@extends('layouts.app')

@push('page-css')
    <link rel="stylesheet" href="{{ asset('admin/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css') }}">
@endpush

@section('main')
    <div class="page-content">
        <!-- Manage Expense -->
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Manage Expense</h6>
                        <div class="table-responsive cell-border">
                            <table id="dataTableExample" class="table cell-border">
                                <thead>
                                    <tr>
                                        <th>Sl No</th>
                                        <th>Name</th>
                                        <th>Date</th>
                                        <th>Schedule</th>
                                        <th>Amount</th>
                                        <th>Transaction Method</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($expenses as $expense)
                                        <tr>
                                            <td>{{ $expense->index + 1 }}</td>
                                            <td>{{ $expense->id }}</td>
                                            <td>{{ $expense->expense_date }}</td>
                                            <td>{{ $expense->schedule }}</td>
                                            <td>{{ $expense->amount }}</td>
                                            <td>{{ $expense->transaction_method }}</td>
                                            <td>
                                                <div class="rapid_action">
                                                    <a href="{{ route('admin.expenses.show', $expense->id) }}"
                                                        class="btn btn-outline-primary"> <i data-feather="edit"
                                                            style="height: 15px;width: 15px;"></i></a>

                                                    <button
                                                        onclick="confirm('Are you sure want to delete this item?') ? deleteItem({{ $expense->id }}):false"
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
    @include('admin.components.common-crud.delete-modal')
@endsection

@push('page-js')
    @include('admin.components.common-crud.crud-js')
@endpush
