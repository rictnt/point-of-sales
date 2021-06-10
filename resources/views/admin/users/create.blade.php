@extends('layouts.app')

@section('main')
    <div class="page-content">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Add User</h6>
                        <form action="{{ route('admin.users.store') }}" method="POST" class="forms-sample row">
                            @csrf
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Name:</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="name" class="form-control" placeholder="Name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Mobile Number:</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="mobile" class="form-control" placeholder="Mobile Number">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Password:</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="password" class="form-control" placeholder="Password">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Select Group:</label>
                                    <div class="col-sm-9">
                                        <select name="role" class="js-example-basic-single w-100">
                                            <option value="TX">Staff</option>
                                            <option value="NY">User</option>
                                            <option value="FL">Play Boy</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Email:</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="email" class="form-control" placeholder="E@mail">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Username:</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="username" class="form-control" placeholder="Username">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Login Permission:</label>
                                    <div class="col-sm-9">
                                        <div class="form-group">
                                            <select name="status" class="js-example-basic-single w-100">
                                                <option value="1">Enable</option>
                                                <option value="0">Disable</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary mr-2">Create</button>
                            <a href="{{ route('admin.users.index') }}" class="btn btn-danger">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
