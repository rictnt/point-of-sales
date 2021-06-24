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
                                        <th>Date</th>
                                        <th>Invoice No</th>
                                        <th>Supplier</th>
                                        <th>Sub Total</th>
                                        <th>Discount</th>
                                        <th>Paid</th>
                                        <th>Due</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($purchases as $purchase)
                                        <tr>
                                        <td>{{ $purchase->created_at->format('d-m-Y') }}</td>
                                        <td>{{ $purchase->id }}</td>
                                        <td>{{ 'supplier name' }}</td>
                                        <td>{{ $purchase->sub_total }}</td>
                                        <td>{{ $purchase->discount }}</td>
                                        <td>{{ $purchase->paid }}</td>
                                        <td>{{ $purchase->due }}</td>
                                        <td>
                                           @include('admin.components.common-crud.edit_delete_button',['item' => $purchase])
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('admin.components.common-crud.delete-modal', ['module' => 'purchase'])
@endsection
@push('page-js')
    @include('admin.components.common-crud.crud-js')    
@endpush
