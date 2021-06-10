@extends('layouts.app')
@section('main')
<div class="page-content">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Customer</h4>
                    <form action="{{ route('admin.customers.update', $customer->id) }}" method="POST">
                        @csrf
                        @method('put')
                        <div class="form-group row">
                            <div class="col-lg-3">
                                <label class="col-form-label">Name</label>
                            </div>
                            <div class="col-lg-6">
                                <input name="name" value="{{ $customer->name }}" class="form-control" maxlength="25" type="text" placeholder="Customer Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-3">
                                <label class="col-form-label">Email</label>
                            </div>
                            <div class="col-lg-6">
                                <input name="email" value="{{ $customer->email }}" class="form-control" maxlength="20" type="email" placeholder="Customer Email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-3">
                                <label class="col-form-label">Mobile</label>
                            </div>
                            <div class="col-lg-6">
                                <input name="mobile" value="{{ $customer->mobile }}" class="form-control" maxlength="11" type="number" placeholder="Customer Mobile	">
                            </div>
                        </div>
                        <div class="form-group mb-0 row">
                            <div class="col-lg-3">
                                <label class="col-form-label">Address</label>
                            </div>
                            <div class="col-lg-6">
                                <textarea name="address" id="maxlength-textarea" class="form-control" maxlength="100" rows="4"
                                    placeholder="Customer Address">{{ $customer->address }}</textarea>
                            </div>
                        </div>
                        <div class="form-group mb-0 row">
                            <div class="col-lg-4 m-auto">
                                <button type="submit" class="btn btn-primary">Save</button>
                                <a href="{{ route('admin.customers.index') }}" class="btn btn-danger">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
