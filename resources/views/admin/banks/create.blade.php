@extends('layouts.app')

@section('main')
    <div class="page-content">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Add Bank Account</h6>
                        @include('admin.components.errors')
                        <form action="{{ route('admin.banks.store') }}" method="POST" class="forms-sample needs-validation row" novalidate>
                            @csrf
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Name:</label>
                                    <div class="col-sm-9">
                                        <input name="name" type="text" required class="form-control" placeholder="Bank Name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Branch:</label>
                                    <div class="col-sm-9">
                                        <input name="branch" type="text" required class="form-control" placeholder="Branch">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">A/C No:</label>
                                    <div class="col-sm-9">
                                        <input name="account_no" type="number" required class="form-control"
                                            placeholder="Account Number">
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Address:</label>
                                    <div class="col-sm-9">
                                        <input name="address" type="text" class="form-control" placeholder="Address">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">A/C Name:</label>
                                    <div class="col-sm-9">
                                        <input name="account_name" required type="text" class="form-control"
                                            placeholder="Account Name">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 text-right">
                                <button type="submit" class="btn btn-primary mr-2">Add</button>
                                <a href="{{ route('admin.banks.index') }}" class="btn btn-danger">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('page-js')
    @include('admin.components.form-validation-js')
@endpush
