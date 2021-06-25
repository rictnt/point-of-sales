@extends('layouts.app')
@section('main')
    <div class="page-content">
        <!-- Manage Supplier -->
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Stock List</h6>
                        <div class="table-responsive cell-border">
                            <table id="dataTableExample" class="table cell-border">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Invoice No</th>
                                        <th>Supplier</th>
                                        <th>Total Amount</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($stocks as $item)
                                        <tr>
                                            <td>{{ $item->qty }}</td>
                                            <td>{{ $item->product->name }}</td>
                                            <td>
                                                <button data-toggle="modal" data-target="#deleteModal"
                                                    onclick="setDeleteForm({{ $item->toJson() }})"
                                                    class=" btn btn-outline-danger"><i data-feather="trash"
                                                        style="height: 15px;width: 15px;"></i>
                                                </button>
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
@endsection