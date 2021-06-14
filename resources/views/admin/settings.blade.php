@extends('layouts.app')

@push('page-css')
    {{-- <link rel="stylesheet" href="{{ asset('admin/vendors/dropzone/dropzone.min.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('admin/vendors/dropify/dist/dropify.min.css') }}">
@endpush
@section('main')
    <div class="page-content">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Settings</h6>
                        <form class="forms-sample row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="colFormLabelSm">Company Name</label>
                                    <input type="text" class="form-control form-control-sm" id="colFormLabelSm">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="colFormLabelSm">Company Address</label>
                                    <input type="text" class="form-control form-control-sm" id="colFormLabelSm">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="colFormLabelSm">Company Address 2</label>
                                    <input type="text" class="form-control form-control-sm" id="colFormLabelSm">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="colFormLabelSm">Company Phone</label>
                                    <input type="number" class="form-control form-control-sm" id="colFormLabelSm">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="colFormLabelSm">Company Email</label>
                                    <input type="email" class="form-control form-control-sm" id="colFormLabelSm">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="colFormLabelSm">Company Website</label>
                                    <input type="text" class="form-control form-control-sm" id="colFormLabelSm">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="colFormLabelSm">Company Logo</label>
                                    <input type="file" class="dropify" data-default-file="Upload Image" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="colFormLabelSm">Company Invoice Logo</label>
                                    <input type="file" class="dropify" data-default-file="Upload Image" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="colFormLabelSm">Company Fav-Icon Logo</label>
                                    <input type="file" class="dropify" data-default-file="Upload Image" />
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('page-js')
    {{-- <script src="{{ asset('admin/vendors/dropzone/dropzone.min.js') }}"></script> --}}
    <script src="{{ asset('admin/vendors/dropify/dist/dropify.min.js') }}"></script>
    {{-- <script src="{{ asset('admin/js/dropzone.js') }}"></script> --}}
    <script src="{{ asset('admin/js/dropify.js') }}"></script>
    <script>
        $('.dropify').dropify();
      </script>

    @include('admin.components.form-validation-js')
@endpush
