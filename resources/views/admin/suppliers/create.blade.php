@extends('layouts.app')
@section('main')
<div class="page-content">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Add Supplier</h4>
                    @include('admin.components.errors')
                    <form action="{{ route('admin.suppliers.store') }}" method="POST" class="needs-validation" novalidate>
                        @csrf
                        <div class="form-group row">
                            <div class="col-lg-3">
                                <label class="col-form-label">Name</label>
                            </div>
                            <div class="col-lg-6">
                                <input name="name" required class="form-control" maxlength="25" type="text" placeholder="Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-3">
                                <label class="col-form-label">Email</label>
                            </div>
                            <div class="col-lg-6">
                                <input name="email" required class="form-control" maxlength="20" type="email" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-3">
                                <label class="col-form-label">Mobile</label>
                            </div>
                            <div class="col-lg-6">
                                <input name="mobile" required class="form-control" maxlength="11" type="number" placeholder="Mobile	">
                            </div>
                        </div>
                        <div class="form-group mb-0 row">
                            <div class="col-lg-3">
                                <label class="col-form-label">Address</label>
                            </div>
                            <div class="col-lg-6">
                                <textarea name="address" id="maxlength-textarea" class="form-control" maxlength="100" rows="4"
                                    placeholder="Address"></textarea>
                            </div>
                        </div>
                        <div class="form-group mb-0 row">
                            <div class="col-lg-3">
                                <label class="col-form-label">Supplier Details</label>
                            </div>
                            <div class="col-lg-6">
                                <textarea name="details" id="maxlength-textarea" class="form-control" maxlength="100" rows="4" placeholder="Details"></textarea>
                            </div>
                        </div>
                        <div class="form-group mb-0 row">
                            <div class="col-lg-4 m-auto">
                                <button type="submit" class="btn btn-primary">Save</button>
                                <a href="{{ route('admin.suppliers.index') }}" class="btn btn-danger">Cancel</a>
                            </div>
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