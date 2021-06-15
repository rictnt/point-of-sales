@extends('layouts.app')

@push('page-css')
    <link rel="stylesheet" href="{{ asset('admin/vendors/select2/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css') }}">
@endpush

@section('main')
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
                                        <input name="expense_date" type="text" class="form-control"><span
                                            class="input-group-addon"><i data-feather="calendar"></i></span>
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
                                    <input value="{{ old('amount') }}" name="amount" type="text" class="form-control"
                                        placeholder="Payment Amount">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Description:</label>
                                <textarea name="description" class="form-control" rows="5"
                                    placeholder="Description">{{ old('description') }}</textarea>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary mr-2">Add Expense</button>

                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('page-js')
    <script src="{{ asset('admin/vendors/select2/select2.min.js') }}"></script>
    <script src="{{ asset('admin/js/select2.js') }}"></script>
    <script src="{{ asset('admin/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('admin/js/datepicker.js') }}"></script>
@endpush
