@extends('layouts.app')
@section('main')
<div class="page-content">
 	<div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Add New Product</h6>
                    <form class="forms-sample row" action="{{ Route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Product Name:</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Product Name" name="product_name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Model:</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Model" name="product_model">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Purchase Price:</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Purchase Price" name="purchase_price">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Selling Price:</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Selling Price" name="selling_price">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Serial Number:</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control"placeholder="Serial Number" name="serial_number">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Category:</label>
                                <div class="col-sm-9">
                                    <div class="form-group">
                                        <select class="js-example-basic-single w-100" name="category_id">
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Unit:</label>
                                <div class="col-sm-9">
                                    <div class="form-group">
                                        <select class="js-example-basic-single w-100" name="product_unit">
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
                                    <input type="text" class="form-control"placeholder="Enter Vat" name="tax_vat">
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Product Details:</label>
                            <textarea class="form-control" rows="13" placeholder="Product Details" name="product_details"></textarea>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Upload Product Image:</label>
                            <input type="file" id="myDropify" class="border" name="product_image">
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Save</button>
                        <a href="{{ route('admin.products.index') }}" class="btn btn-danger">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection