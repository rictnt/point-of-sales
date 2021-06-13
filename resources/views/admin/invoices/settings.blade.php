@extends('layouts.app')
@section('main')
    <div class="page-content">

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Invoice Settings</h6>
                        <form class="forms-sample row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="colFormLabelSm">Invoice Barcode Font Size</label>
                                    <input type="number" class="form-control form-control-sm" id="colFormLabelSm">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="colFormLabelSm">Invoice Barcode Width</label>
                                    <input type="number" class="form-control form-control-sm" id="colFormLabelSm">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="colFormLabelSm">Invoice Barcode Height</label>
                                    <input type="number" class="form-control form-control-sm" id="colFormLabelSm">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="colFormLabelSm">Invoice Align</label>
                                    <select class="js-example-basic-single w-100">
                                        <option value="TX">Center</option>
                                        <option value="NY">Left</option>
                                        <option value="FL">Right</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="colFormLabelSm">Invoice Size</label>
                                    <select class="js-example-basic-single w-100">
                                        <option value="TX">4</option>
                                        <option value="NY">5</option>
                                        <option value="FL">6</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="colFormLabelSm">Return Page Align</label>
                                    <select class="js-example-basic-single w-100">
                                        <option value="TX">Center</option>
                                        <option value="NY">Left</option>
                                        <option value="FL">Right</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="colFormLabelSm">Return Page Size</label>
                                    <select class="js-example-basic-single w-100">
                                        <option value="TX">4</option>
                                        <option value="NY">5</option>
                                        <option value="FL">6</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Invoice Terms & Conditions:</label>
                                    <textarea class="form-control" rows="6" placeholder="Description"></textarea>
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
