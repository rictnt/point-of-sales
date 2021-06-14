@extends('layouts.app')
@push('page-css')
    <link rel="stylesheet" href="{{ asset('admin/vendors/dropzone/dropzone.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/dropify/dist/dropify.min.css') }}">
@endpush
@section('main')
    <div class="page-content">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Add New Product</h6>
                        
                        @include('admin.components.errors')

                        <form class="needs-validation row" action="{{ Route('admin.products.store') }}" method="POST" enctype="multipart/form-data" novalidate>
                            @csrf
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Name:</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" placeholder="Ex: Apple" name="name" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">SKU:</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" placeholder="123" name="sku" required>
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Purchase Price:</label>
                                    <div class="col-sm-9">
                                        <input type="number" class="form-control" placeholder="Ex: 20"
                                            name="cost_price" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Sell Price:</label>
                                    <div class="col-sm-9">
                                        <input type="number" class="form-control" placeholder="Ex: 25"
                                            name="sell_price" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                               
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Category:</label>
                                    <div class="col-sm-9">
                                        <div class="form-group">
                                            <select class="js-example-basic-single w-100" name="category_id" required>
                                                <option value="">Select Category</option>
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Brand:</label>
                                    <div class="col-sm-9">
                                        <div class="form-group">
                                            <select class="js-example-basic-single w-100" name="brand_id" required>
                                                <option value="">Select Brand</option>
                                                @foreach ($brands as $brand)
                                                <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Unit:</label>
                                    <div class="col-sm-9">
                                        <div class="form-group">
                                            <select class="js-example-basic-single w-100" name="unit_id" required>
                                                <option value="">Select Unit</option>
                                                @foreach ($units as $unit)
                                                    <option value="{{ $unit->id }}">{{ $unit->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Tax / Vat(%):</label>
                                    <div class="col-sm-9">
                                        <input type="number" class="form-control" placeholder="Ex: 10" name="tax" value="0">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Product Details:</label>
                                <textarea class="form-control" rows="13" placeholder="Describe your product details here"
                                    name="details"></textarea>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Upload Product Image:</label>
                                <input type="file" id="myDropify" class="border" name="image">
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
@push('page-js')
    <script src="{{ asset('admin/vendors/dropzone/dropzone.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/dropify/dist/dropify.min.js') }}"></script>
    <script src="{{ asset('admin/js/dropzone.js') }}"></script>
    <script src="{{ asset('admin/js/dropify.js') }}"></script>
    @include('admin.components.form-validation-js')
@endpush
