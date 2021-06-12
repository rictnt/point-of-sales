@extends('layouts.app')
@section('main')
    <div class="page-content">
        <!-- Manage Supplier -->
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Manage Invoice</h6>
                        <div class="table-responsive cell-border">
                            <table id="dataTableExample" class="table cell-border">
                                <thead>
                                    <tr>
                                        <th>Sl No</th>
                                        <th>Invoice No</th>
                                        <th>Invoice ID</th>
                                        <th>Customer Name</th>
                                        <th>Date</th>
                                        <th>Amount</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <a href="Invoice-View.html">023</a>
                                        </td>
                                        <td>
                                            <a href="Invoice-View.html">36542</a>
                                        </td>
                                        <td>
                                            <a href="Customer-Ledger.html">Katrina Kaif</a>
                                        </td>
                                        <td>02/02/2020</td>
                                        <td>50,000</td>
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
