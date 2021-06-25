@extends('layouts.app')
@section('main')
    <div class="page-content">
        <!-- Manage Product -->
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-3">
                            <h6 class="card-title">Product List</h6>
                            <a href="{{ route('admin.products.create') }}" class="btn btn-success"><i
                                    data-feather='plus'></i> Add New</a>
                        </div>
                        <div class="table-responsive cell-border">
                            <table id="dataTableExample" class="table cell-border">
                                <thead>
                                    <tr>
                                        <th>Sl No</th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Category</th>
                                        <th>SKU</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $product)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $product->name }}</td>
                                            <td>{{ $product->price }}</td>
                                            <td>{{ $product->category->name ?? '' }}</td>
                                            <td>{{ $product->sku }}</td>
                                            <td>
                                                @if ($product->image)
                                                    <div class="figure mb-3">
                                                        <img src="{{ url('uploads/' . $product->image) }} " alt="">
                                                    </div>
                                                @else
                                                    <div class="figure mb-3">
                                                        <img src="https://www.chanchao.com.tw/dtg/images/default.jpg"
                                                            alt="">
                                                    </div>
                                                @endif

                                            </td>
                                            <td>
                                                <div class="rapid_action">
                                                    <a href="{{ route('admin.products.show', $product->id) }}"
                                                        class="btn btn-outline-primary"> <i data-feather="edit"
                                                            style="height: 15px;width: 15px;"></i></a>


                                                    <button data-toggle="modal" data-target="#deleteModal"
                                                        onclick="setDeleteForm({{ $product->toJson() }})"
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
    @include('admin.components.common-crud.delete-modal',['module' => 'product'])
@endsection

@push('page-js')
    @include('admin.components.common-crud.crud-js')
@endpush
