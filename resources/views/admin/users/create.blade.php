@extends('layouts.app')

@section('main')
    <div class="page-content">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Add User</h6>
                        @include('admin.components.errors')
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
                                    <div class="col-md-3"></div>
                                    <div class="col-md text-right">
                                        <button type="submit" class="btn btn-primary mr-2">Add</button>
                                    <a href="{{ route('admin.users.index') }}" class="btn btn-danger">Cancel</a>
                                    </div>
                                </div>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
