@extends('layouts.app')
@section('main')
<div class="page-content">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Add Supplier</h4>
                    <form action="{{ route('admin.suppliers.store') }}" method="POST">
                        @csrf
                        <div class="form-group row">
                            <div class="col-lg-3">
                                <label class="col-form-label">Name</label>
                            </div>
                            <div class="col-lg-6">
                                <input name="name" class="form-control" maxlength="25" type="text" placeholder="Supplier Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-3">
                                <label class="col-form-label">Email</label>
                            </div>
                            <div class="col-lg-6">
                                <input name="email" class="form-control" maxlength="20" type="email" placeholder="Supplier Email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-3">
                                <label class="col-form-label">Mobile</label>
                            </div>
                            <div class="col-lg-6">
                                <input name="mobile" class="form-control" maxlength="11" type="number" placeholder="Supplier Mobile	">
                            </div>
                        </div>
                        <div class="form-group mb-0 row">
                            <div class="col-lg-3">
                                <label class="col-form-label">Address</label>
                            </div>
                            <div class="col-lg-6">
                                <textarea name="address" id="maxlength-textarea" class="form-control" maxlength="100" rows="4"
                                    placeholder="Supplier Address"></textarea>
                            </div>
                        </div>
                        <div class="form-group mb-0 row">
                            <div class="col-lg-3">
                                <label class="col-form-label">Supplier Details</label>
                            </div>
                            <div class="col-lg-6">
                                <textarea name="details" id="maxlength-textarea" class="form-control" maxlength="100" rows="4" placeholder="Supplier Details"></textarea>
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
