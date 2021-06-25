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
                                        <th>Total Amount</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($purchases as $purchase)
                                        <tr>
                                            <td>{{ $purchase->created_at->format('d-m-Y') }}</td>
                                            <td><a
                                                    href="{{ route('admin.purchases.show', $purchase->id) }}">{{ $purchase->invoice }}</a>
                                            </td>
                                            <td><a
                                                    href="{{ route('admin.suppliers.show', $purchase->supplier_id) }}">{{ $purchase->supplier->name }}</a>
                                            </td>

                                            <td>{{ $purchase->sub_total }}</td>

                                            <td>
                                                <button data-toggle="modal" data-target="#deleteModal"
                                                    onclick="setDeleteForm({{ $purchase->toJson() }})"
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
    @include('admin.components.common-crud.delete-modal', ['module' => 'purchase'])
@endsection
@push('page-js')
    @include('admin.components.common-crud.crud-js')
@endpush
