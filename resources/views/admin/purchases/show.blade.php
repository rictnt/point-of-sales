@extends('layouts.app')
@section('main')
    <div class="page-content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-3">
                            <h4 class="card-title">View Purchase Invoice</h4>
                            <a href="#" class="btn btn-outline-primary">
                                <i data-feather="printer" class="icon-md"></i> Print
                                </a>
                        </div>
                        <div class="row">
                           <div class="col-md-6">
                            <ul class="list-group">
                                <li class="list-group-item"><b>Purchase Info</b></li>
                                <li class="list-group-item">
                                    Date : {{ $purchase->date->format('d M, Y') }} <br>
                                    Invoice No. : {{ $purchase->invoice }} <br>
                                    Payment Method : {{ $purchase->payment_method }} <br>

                                    
                                    Status : {!! $purchase->product_status ? '<span class="text-success">Received</span>':'<span class="text-danger">Pending</span>' !!} <br>
                                </li>
                            </ul>
                           </div>
                           <div class="col-md-6">
                                    <ul class="list-group">
                                        <li class="list-group-item"><b>Supplier Info</b></li>
                                       <li class="list-group-item">
                                        {{ $purchase->supplier->name }} <br>
                                        {{ $purchase->supplier->mobile }} <br>
                                        {{ $purchase->supplier->email }} <br>
                                        {{ $purchase->supplier->address }} <br>
                                       </li>
                                    </ul>
                           </div>
                        </div>
                        <div class="container-fluid mt-5 d-flex justify-content-center w-100">
                            <div class="table-responsive w-100">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Expire Date</th>
                                            <th>Product</th>
                                            <th>Quantity</th>
                                            <th>Unit cost</th>
                                            <th>Discount</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($purchase->items as $item)
                                            <tr class="text-center">
                                                <td>{{ $item->product->id }}</td>
                                                <td>{{ $item->expire ?? 'N/A' }}</td>
                                                <td>{{ $item->product->name }}</td>
                                                <td>{{ $item->qty }}</td>
                                                <td>{{ $item->cost }}</td>
                                                <td>{{ $item->discount }}</td>
                                                <td>{{ $item->total }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="container-fluid mt-5 w-100">
                            <div class="row">
                                <div class="col-md-6 ml-auto">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td>Sub Total</td>
                                                    <td class="text-right">$ {{ $purchase->sub_total }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Discount</td>
                                                    <td class="text-right">$ {{ $purchase->discount }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-bold-800">Total</td>
                                                    <td class="text-bold-800 text-right"> $ {{ $purchase->grand_total }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Payment Made</td>
                                                    <td class="text-danger text-right">(-) $ {{ $purchase->paid }}</td>
                                                </tr>
                                                <tr class="bg-light">
                                                    <td class="text-bold-800">Balance Due</td>
                                                    <td class="text-bold-800 text-right">$ {{ $purchase->due }}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
