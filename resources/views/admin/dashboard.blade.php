@extends('layouts.app')
@section('main')
    <div class="page-content">
        <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
            <div>
                <h4 class="mb-3 mb-md-0">Welcome to Dashboard</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-xl-12 stretch-card">
                <div class="row flex-grow">
                    <div class="col-md-4 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body text-center">
                                <div class="justify-content-between align-items-baseline">
                                    <h6 class="card-title mb-0">Total Customers</h6>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-12 col-xl-12">
                                        <h3 class="mb-2">{{ $counter['customers'] }} <i data-feather="users"
                                                style="height: 30px;width: 30px;margin-bottom: 7px;"></i></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body text-center">
                                <div class="justify-content-between align-items-baseline">
                                    <h6 class="card-title mb-0">Total Supplier</h6>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-12 col-xl-12">
                                        <h3 class="mb-2 text-success">{{ $counter['suppliers'] }} <i data-feather="users"
                                                style="height: 30px;width: 30px;margin-bottom: 7px;"></i></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body text-center">
                                <div class="justify-content-between align-items-baseline">
                                    <h6 class="card-title mb-0">Total Purchase</h6>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-12 col-xl-12">
                                        <h3 class="mb-2 text-info">{{ $counter['purchase'] }} ৳</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- row -->

        <div class="row">
            <div class="col-12 col-xl-12 stretch-card">
                <div class="row flex-grow">
                    <div class="col-md-4 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body text-center">
                                <div class="justify-content-between align-items-baseline">
                                    <h6 class="card-title mb-0">Total Sale</h6>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-12 col-xl-12">
                                        <h3 class="mb-2 text-warning">{{ $counter['total_sale'] }} ৳</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body text-center">
                                <div class="justify-content-between align-items-baseline">
                                    <h6 class="card-title mb-0">Total Profit</h6>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-12 col-xl-12">
                                        <h3 class="mb-2 text-success">{{ $counter['total_profit'] }} ৳</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body text-center">
                                <div class="justify-content-between align-items-baseline">
                                    <h6 class="card-title mb-0">Total Loss</h6>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-12 col-xl-12">
                                        <h3 class="mb-2 text-danger">{{ $counter['total_loss'] }} ৳</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- row -->

        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Today Overview:</h6>

                        <div class="table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="text-danger">Today Report</th>
                                        <th class="text-danger">Overview</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Total Purchase</td>
                                        <td>50,000</td>
                                    </tr>
                                    <tr>
                                        <td>Total Sale</td>
                                        <td>30,000</td>
                                    </tr>
                                    <tr>
                                        <td>Total Due</td>
                                        <td>10,000</td>
                                    </tr>
                                    <tr>
                                        <td>Invoice</td>
                                        <td>20</td>
                                    </tr>
                                    <tr>
                                        <td>Return</td>
                                        <td>20</td>
                                    </tr>
                                    <tr>
                                        <td>Profit</td>
                                        <td>20,000</td>
                                    </tr>
                                    <tr>
                                        <td>Loss</td>
                                        <td>000</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Monthly Overview:</h4>

                        <div class="table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="text-danger">Monthly Report</th>
                                        <th class="text-danger">Overview</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Total Purchase</td>
                                        <td>50,000</td>
                                    </tr>
                                    <tr>
                                        <td>Total Sale</td>
                                        <td>30,000</td>
                                    </tr>
                                    <tr>
                                        <td>Total Due</td>
                                        <td>10,000</td>
                                    </tr>
                                    <tr>
                                        <td>Invoice</td>
                                        <td>20</td>
                                    </tr>
                                    <tr>
                                        <td>Return</td>
                                        <td>20</td>
                                    </tr>
                                    <tr>
                                        <td>Profit</td>
                                        <td>20,000</td>
                                    </tr>
                                    <tr>
                                        <td>Loss</td>
                                        <td>000</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 mt-3">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Yearly Overview:</h4>

                        <div class="table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="text-danger">Total<br> Purchase</th>
                                        <th class="text-danger">Total<br> Sale</th>
                                        <th class="text-danger">Total<br> Due</th>
                                        <th class="text-danger">Total<br> Product</th>
                                        <th class="text-danger">Total<br> Supplier</th>
                                        <th class="text-danger">Total<br> Customer</th>
                                        <th class="text-danger">Total<br> Return</th>
                                        <th class="text-danger">Total<br> Invoice</th>
                                        <th class="text-danger">Total<br> Profit</th>
                                        <th class="text-danger">Total<br> Loss</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>56,000</td>
                                        <td>50,000</td>
                                        <td>10,000</td>
                                        <td>500</td>
                                        <td>564</td>
                                        <td>325</td>
                                        <td>32</td>
                                        <td>20</td>
                                        <td>20,000</td>
                                        <td>0000</td>
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
