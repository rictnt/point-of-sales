@extends('layouts.app')
@section('main')
    <div class="page-content">
        <!-- Manage Product -->
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Product List</h6>
                        <div class="table-responsive cell-border">
                            <table id="dataTableExample" class="table cell-border">
                                <thead>
                                    <tr>
                                        <th>Sl No</th>
                                        <th>Category</th>
                                        <th>Name</th>
                                        <th>SKU</th>
                                        <th>Buy Price</th>
                                        <th>Sell Price</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $product)
                                        <tr>
                                            <td>1</td>
                                            <td>{{ $product->category->name ?? 'nai' }}</td>
                                            <td>{{ $product->name }}</td>
                                            <td>{{ $product->sku }}</td>
                                            <td>{{ $product->cost_price }}</td>
                                            <td>{{ $product->sell_price }}</td>
                                            <td>
                                                <div class="figure mb-3">
                                                    <img src="{{ url('uploads/' . $product->image) }}" alt="">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="rapid_action">
                                                    <button class="btn btn-outline-primary" data-toggle="modal"
                                                        data-target=".bd-example-modal-xl"> <i data-feather="edit"
                                                            style="height: 15px;width: 15px;"></i></button>
                                                    <button data-toggle="modal" data-target="#deleteModal"
                                                        onclick="setDeleteForm({{ $product->id }})"
                                                        class=" btn btn-outline-danger"><i data-feather="trash"
                                                            style="height: 15px;width: 15px;"></i>
                                                    </button>
                                                </div>
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
    @include('admin.components.delete-modal',['module' => 'product'])
@endsection

@push('page-js')
    @include('admin.components.crud-js')
@endpush
