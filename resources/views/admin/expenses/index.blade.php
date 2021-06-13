@extends('layouts.app')

@push('page-css')
<link rel="stylesheet" href="{{ asset('admin/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css') }}">
@endpush

@section('main')
<div class="page-content">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Add Expense</h6>
                    <form action="{{ route('admin.expenses.store') }}" method="POST" class="forms-sample row">
                        @csrf
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Select Category:</label>
                                <div class="col-sm-9">
                                    <select name="category_id" class="js-example-basic-single w-100">
                                        <option value="">--SELECT--</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Select Schedule:</label>
                                <div class="col-sm-9">
                                    <select name="schedule" class="js-example-basic-single w-100">
                                        <option value="Hourly">Hourly</option>
                                        <option value="Daily">Daily</option>
                                        <option value="Weekly">Weekly</option>
                                        <option value="Monthly">Monthly</option>
                                        <option value="Yearly">Yearly</option>
                                        <option value="Once">Once</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Transaction Mood:</label>
                                <div class="col-sm-9">
                                    <select name="transaction_method" class="js-example-basic-single w-100">
                                        <option value="Cash">Cash</option>
                                        <option value="Cheque">Cheque</option>
                                        <option value="Pay Order">Pay Order</option>
                                        <option value="Card">Card</option>
                                        <option value="Mobile Banking">Mobile Banking</option>
                                        <option value="Agency">Agency</option>
                                    </select>
                                </div>
                            </div>
                            
                            
                            
                            
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Date:</label>
                                <div class="col-sm-9">
                                    <div class="input-group date datepicker" id="datePickerExample">
                                        <input name="expense_date" type="text" class="form-control"><span class="input-group-addon"><i data-feather="calendar"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Expense By:</label>
                                <div class="col-sm-9">
                                    <div class="form-group">
                                        <select name="expense_by" class="js-example-basic-single w-100">
                                            <option value="">--SELECT--</option>
                                            {{-- @foreach ($users as $user)
                                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                                            @endforeach --}}
                                        </select>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Payment Amount:</label>
                                <div class="col-sm-9">
                                    <input value="{{ old('amount') }}" name="amount" type="text" class="form-control"placeholder="Payment Amount">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Description:</label>
                                <textarea name="description" class="form-control" rows="5" placeholder="Description">{{ old('description') }}</textarea>
                            </div>
                        </div>
                        
                        <button type="submit" class="btn btn-primary mr-2">Add Expense</button>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>

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
                                                <a href="{{ route('admin.expenses.show', $expense->id) }}" class="btn btn-outline-primary"> <i data-feather="edit" style="height: 15px;width: 15px;"></i></a>

                                                <button onclick="confirm('Are you sure want to delete this item?') ? deleteItem({{ $expense->id }}):false"
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
@endsection


@include('admin.components.delete-form')


@push('page-scripts')
<script src="{{ asset('admin/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('admin/js/datepicker.js') }}"></script>


    <script>
        function makeUrl(id) {
            return `{{ route('admin.expenses.index') }}/${id}`;
        }

        function deleteItem(id) {
            $('#deleteForm').attr('action', makeUrl(id)).submit();
        }

    </script>
    <script>
        $('.datepick').each(function(){
            $(this).datepicker();
        });
    </script>
@endpush