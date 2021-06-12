@extends('layouts.app')
@section('main')
    <div class="page-content">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Add New Product</h6>
                        <form class="forms-sample row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Product Name:</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" placeholder="Product Name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Model:</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" placeholder="Model">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Purchase Price:</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" placeholder="Purchase Price">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Selling Price:</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" placeholder="Selling Price">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Serial Number:</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" placeholder="Serial Number">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Category:</label>
                                    <div class="col-sm-9">
                                        <div class="form-group">
                                            <select class="js-example-basic-single w-100">
                                                <option value="TX">Texas</option>
                                                <option value="NY">New York</option>
                                                <option value="FL">Florida</option>
                                                <option value="KN">Kansas</option>
                                                <option value="HW">Hawaii</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Unit:</label>
                                    <div class="col-sm-9">
                                        <div class="form-group">
                                            <select class="js-example-basic-single w-100">
                                                <option value="TX">Cash</option>
                                                <option value="NY">Meter</option>
                                                <option value="FL">Inch</option>
                                                <option value="KN">kg</option>
                                                <option value="HW">Piece</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Tax / Vat(%):</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" placeholder="Enter Vat">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Product Details:</label>
                                <textarea class="form-control" rows="13" placeholder="Product Details"></textarea>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Upload Product Image:</label>
                                <input type="file" id="myDropify" class="border">
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
