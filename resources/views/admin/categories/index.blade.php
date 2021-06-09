@extends('layouts.app')
@section('main')
    <div class="page-content">


        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Add Category</h6>

                        <form class="forms-sample">
                            <div class="form-group row">
                                <label for="exampleInputUsername2" class="col-md-2 col-form-label">Category Name</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" id="exampleInputUsername2"
                                        placeholder="Category Name">
                                </div>
                                <div class="col-md-2">
                                    <button type="submit" class="btn btn-primary form-control">Create</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>




            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Category List</h6>
                        <div class="table-responsive cell-border">
                            <table id="dataTableExample" class="table cell-border">
                                <thead>
                                    <tr>
                                        <th>Category ID</th>
                                        <th>Category Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>ghd3234</td>
                                        <td>Apple</td>
                                        <td>
                                            <div class="rapid_action">
                                                <button class="btn btn-outline-primary"> <i data-feather="edit"
                                                        style="height: 15px;width: 15px;"></i></button>
                                                <button class="btn btn-outline-danger"><i data-feather="trash"
                                                        style="height: 15px;width: 15px;"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>nji0987</td>
                                        <td>Samsung</td>
                                        <td>
                                            <div class="rapid_action">
                                                <button class="btn btn-outline-primary"> <i data-feather="edit"
                                                        style="height: 15px;width: 15px;"></i></button>
                                                <button class="btn btn-outline-danger"><i data-feather="trash"
                                                        style="height: 15px;width: 15px;"></i></button>
                                            </div>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection
