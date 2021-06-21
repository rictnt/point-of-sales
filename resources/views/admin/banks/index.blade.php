@extends('layouts.app')
@section('main')
    <div class="page-content">
        <!-- Manage Bank -->
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Manage Bank</h6>
                        <div class="table-responsive cell-border">
                            <table id="dataTableExample" class="table cell-border">
                                <thead>
                                    <tr>
                                        <th>Sl No</th>
                                        <th>Name</th>
                                        <th>Branch</th>
                                        <th>A/C Name</th>
                                        <th>A/C No</th>
                                        <th>Address</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($banks as $bank)
                                        <tr>
                                            <td>{{ $bank->id }}</td>
                                            <td>{{ $bank->name }}</td>
                                            <td>{{ $bank->branch }}</td>
                                            <td>{{ $bank->account_name }}</td>
                                            <td>{{ $bank->account_no }}</td>
                                            <td>{{ $bank->address }}</td>

                                            <td>
                                                <div class="rapid_action">
                                                    <button class="btn btn-outline-primary" data-toggle="modal"
                                                        data-target=".bd-example-modal-xl"> <i data-feather="edit"
                                                            style="height: 15px;width: 15px;"></i></button>
                                                    <button data-toggle="modal" data-target="#deleteModal"
                                                        onclick="setDeleteForm({{ $bank }})"
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
    @include('admin.components.common-crud.delete-modal')

@endsection

@push('page-js')
    @include('admin.components.common-crud.crud-js')
@endpush
