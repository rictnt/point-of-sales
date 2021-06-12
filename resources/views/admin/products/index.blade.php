@extends('layouts.app')
@section('main')
    <div class="page-content">
        <!-- Manage Product -->
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Product List</h6>
                        <div class="table-responsive cell-border">
                            <table id="dataTableExample" class="table cell-border">
                                <thead>
                                    <tr>
                                        <th>Sl No</th>
                                        <th>Category</th>
                                        <th>Name</th>
                                        <th>Model</th>
                                        <th>Serial Number</th>
                                        <th>Buy Price</th>
                                        <th>Sell Price</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td><a href="Product-Details.html">Apple</a></td>
                                        <td><a href="Product-Details.html">iphone</a></td>
                                        <td>678</td>
                                        <td>de456</td>
                                        <td>$879</td>
                                        <td>$950</td>
                                        <td>
                                            <div class="figure mb-3">
                                                <img src="assets/images/faces/face1.jpg" alt="">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="rapid_action">
                                                <button class="btn btn-outline-primary" data-toggle="modal"
                                                    data-target=".bd-example-modal-xl"> <i data-feather="edit"
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
