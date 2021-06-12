@extends('layouts.app')
@section('main')
    <div class="page-content">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Add Invoice</h4>



                        <form>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="control-label">Barcode</label>
                                        <input type="text" class="form-control" placeholder="Barcode">
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="control-label">Customer Name</label>
                                        <input type="text" class="form-control" placeholder="Customer Name">
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="control-label">Date</label>
                                        <div class="input-group date datepicker" id="datePickerExample">
                                            <input type="text" class="form-control"><span class="input-group-addon"><i
                                                    data-feather="calendar"></i></span>
                                        </div>
                                    </div>
                                </div><!-- Col -->
                            </div><!-- Row -->
                            <div class="row">

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <table id="myTable" class="table-responsive">
                                            <thead>
                                                <tr>
                                                    <th>Item Information</th>
                                                    <th>Unit</th>
                                                    <th>Quantity</th>
                                                    <th>Rate</th>
                                                    <th>Discount</th>
                                                    <th>Total</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>

                                            <tr>
                                                <td>
                                                    <input type="text" class="form-control" placeholder="Information">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" placeholder="Unit">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" placeholder="Quantity">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" placeholder="Rate">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" placeholder="%">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" readonly>
                                                </td>
                                                <td>
                                                    <button onclick="deleteRow(this)" type="button"
                                                        class="btn btn-danger">Delete</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="4" rowspan="5">
                                                    <label class="control-label">Invoice Details</label>
                                                    <textarea class="form-control" rows="8"
                                                        placeholder="Invoice Details"></textarea>
                                                </td>
                                                <td>Total Tax:</td>
                                                <td>
                                                    <input type="text" class="form-control" placeholder="%">
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>Invoice Discount:</td>
                                                <td>
                                                    <input type="text" class="form-control" placeholder="%">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Grand Total:</td>
                                                <td>
                                                    <input type="text" class="form-control" readonly>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Paid Amount:</td>
                                                <td>
                                                    <input type="text" class="form-control" placeholder="0.00">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Due Amount:</td>
                                                <td>
                                                    <input type="text" class="form-control" readonly>
                                                </td>
                                            </tr>

                                            <tfoot>
                                                <tr>
                                                    <td colspan="6">
                                                        <button onclick="myFunction2()" type="button"
                                                            class="btn btn-primary">Add New Row</button>
                                                    </td>

                                                </tr>
                                            </tfoot>

                                        </table>
                                    </div>
                                </div>
                            </div><!-- Row -->
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group mb-0 row">
                                        <div class="col-lg-4">
                                            <button type="button" class="btn btn-primary">Save</button>
                                            <button type="button" class="btn btn-danger">Cancel</button>
                                        </div>
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
