@extends('layouts.app')
@section('main')
@push('page-css')
<link rel="stylesheet" href="{{ asset('admin/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css') }}">
@endpush
<div class="page-content">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Edit Expense</h6>
                    <form action="{{ route('admin.expenses.update', $expense->id) }}" method="POST" class="forms-sample row">
                        @csrf
                        @method('put')

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Select Category:</label>
                                <div class="col-sm-9">
                                    <select name="category_id" class="js-example-basic-single w-100">
                                        <option value="">--SELECT--</option>
                                        @foreach ($categories as $category)
                                            <option {{ $category->id == $expense->category_id ? 'selected':'' }} value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Select Schedule:</label>
                                <div class="col-sm-9">
                                    <select name="schedule" class="js-example-basic-single w-100">
                                        <option {{ $expense->schedule == 'Hourly' ? 'selected':'' }} value="Hourly">Hourly</option>
                                        <option {{ $expense->schedule == 'Daily' ? 'selected':'' }} value="Daily">Daily</option>
                                        <option {{ $expense->schedule == 'Weekly' ? 'selected':'' }} value="Weekly">Weekly</option>
                                        <option {{ $expense->schedule == 'Monthly' ? 'selected':'' }} value="Monthly">Monthly</option>
                                        <option {{ $expense->schedule == 'Yearly' ? 'selected':'' }} value="Yearly">Yearly</option>
                                        <option {{ $expense->schedule == 'Once' ? 'selected':'' }} value="Once">Once</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Transaction Mood:</label>
                                <div class="col-sm-9">
                                    <select name="transaction_method" class="js-example-basic-single w-100">
                                        <option {{ $expense->transaction_method == 'Cash' ? 'selected':'' }} value="Cash">Cash</option>
                                        <option {{ $expense->transaction_method == 'Cheque' ? 'selected':'' }} value="Cheque">Cheque</option>
                                        <option {{ $expense->transaction_method == 'Pay Order' ? 'selected':'' }} value="Pay Order">Pay Order</option>
                                        <option {{ $expense->transaction_method == 'Card' ? 'selected':'' }} value="Card">Card</option>
                                        <option {{ $expense->transaction_method == 'Mobile Banking' ? 'selected':'' }} value="Mobile Banking">Mobile Banking</option>
                                        <option {{ $expense->transaction_method == 'Agency' ? 'selected':'' }} value="Agency">Agency</option>
                                    </select>
                                </div>
                            </div>
                            
                            
                            
                            
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Date:</label>
                                <div class="col-sm-9">
                                    <div class="input-group date datepicker" id="datePickerExample">
                                        <input value="{{ $expense->expense_date }}" name="expense_date" type="text" class="form-control"><span class="input-group-addon"><i data-feather="calendar"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Expense By:</label>
                                <div class="col-sm-9">
                                    <div class="form-group">
                                        <select name="expense_by" class="js-example-basic-single w-100">
                                            <option value="">--SELECT--</option>
                                            @foreach ($users as $user)
                                                <option {{ $user->id == $expense->expense_by ? 'selected':'' }} value="{{ $user->id }}">{{ $user->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Payment Amount:</label>
                                <div class="col-sm-9">
                                    <input value="{{ $expense->amount }}" name="amount" type="text" class="form-control"placeholder="Payment Amount">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Description:</label>
                                <textarea name="description" class="form-control" rows="5" placeholder="Description">{{ $expense->description }}</textarea>
                            </div>
                        </div>
                        
                        <button type="submit" class="btn btn-primary mr-2">Edit Expense</button>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
