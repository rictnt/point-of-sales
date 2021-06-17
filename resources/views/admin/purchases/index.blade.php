@extends('layouts.app')
@section('main')
    <div class="page-content">
        <!-- Manage Supplier -->
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Manage Purchase</h6>
                        <div class="table-responsive cell-border">
                            <table id="dataTableExample" class="table cell-border">
                                <thead>
                                    <tr>
                                        <th>Sl No</th>
                                        <th>Invoice No</th>
                                        <th>Supplier</th>
                                        <th>Purchase Date</th>
                                        <th>Total</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>023</td>
                                        <td>Taylor</td>
                                        <td>02/05/2020</td>
                                        <td>32000</td>
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
                                    <tr>
                                        <td>1</td>
                                        <td>023</td>
                                        <td>Taylor</td>
                                        <td>02/05/2020</td>
                                        <td>32000</td>
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
