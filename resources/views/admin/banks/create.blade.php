@extends('layouts.app')
@section('main')
    <div class="page-content">

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Add Bank</h6>
                        <form  action="{{ route('admin.banks.store') }}" method="POST" class="forms-sample row">
                            @csrf
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Bank Name:</label>
                                    <div class="col-sm-9">
                                        <input name="name" type="text" class="form-control" placeholder="Bank Name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Branch:</label>
                                    <div class="col-sm-9">
                                        <input name="branch" type="text" class="form-control" placeholder="Branch">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">A/C No:</label>
                                    <div class="col-sm-9">
                                        <input name="account_no" type="number" class="form-control" placeholder="Account Number">
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
                                        <input name="account_name" type="text" class="form-control" placeholder="Account Name">
                                    </div>
                                </div>
                            </div>


                            <button type="submit" class="btn btn-primary mr-2">Save</button>
                            <button class="btn btn-danger">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
