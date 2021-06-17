@extends('layouts.app')
@push('page-css')
    <link rel="stylesheet" href="{{ asset('admin/vendors/select2/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css') }}">
@endpush


@section('main')
    <div class="page-content">

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Bank Transaction</h6>
                        <form action="{{ route('admin.transactions.store') }}" method="POST" class="forms-sample needs-validation row" novalidate>
                            @csrf
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Date:</label>
                                    <div class="col-sm-9">
                                        <div class="input-group date datepicker" id="datePickerExample">
                                            <input name="date" type="text" required class="form-control"><span class="input-group-addon"><i
                                                    data-feather="calendar"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Account Type:</label>
                                    <div class="col-sm-9">
                                        <select name="transaction_type" required class="js-example-basic-single w-100">
                                            <option value="" selected>SELECT</option>
                                            <option value="debit">Debit</option>
                                            <option value="credit">Credit</option>
                                        </select>
                                    </div>
                                </div>


                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Bank Name:</label>
                                    <div class="col-sm-9">
                                        <div class="form-group">
                                            <select name="bank_id" required class="js-example-basic-single w-100">
                                                <option value="" selected>SELECT</option>
                                                @foreach ($banks as $bank)
                                                    <option value="{{ $bank->id }}">{{ $bank->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Amount:</label>
                                    <div class="col-sm-9">
                                        <input name="amount" type="number" required class="form-control" placeholder="Amount">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Description:</label>
                                    <textarea name="description" class="form-control" rows="4" placeholder="Description"></textarea>
                                </div>
                            </div>

                            <div class="col-md-12 text-right">
                                <button type="submit" class="btn btn-primary">Add Transaction</button>
                            </div>

                        </form>
                    </div>
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
    @include('admin.components.form-validation-js')
@endpush
