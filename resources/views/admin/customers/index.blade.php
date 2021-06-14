@extends('layouts.app')

@section('main')
    <div class="page-content">
        <!-- Manage Customer -->
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Manage Customer</h6>
                        <div class="table-responsive cell-border">
                            <table id="dataTableExample" class="table cell-border">
                                <thead>
                                    <tr>
                                        <th>Sl No</th>
                                        <th>Name</th>
                                        <th>E-mail</th>
                                        <th>Mobile</th>
                                        <th>Address</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($customers as $customer)
                                    <tr>
                                        <td>{{ $customer->id }}</td>                   
                                        <td>{{ $customer->name }}</td>                   
                                        <td>{{ $customer->email }}</td>                   
                                        <td>{{ $customer->mobile }}</td>                   
                                        <td>{{ $customer->address }}</td>                   
                                        <td>
                                            <div class="rapid_action">
                                                <a href="{{ route('admin.customers.edit', $customer->id) }}" class="btn btn-outline-primary"> <i data-feather="edit"
                                                        style="height: 15px;width: 15px;"></i></a>
                                                        <button
                                                        onclick="confirm('Are you sure want to delete this item?') ? deleteItem({{ $customer->id }}):false"
                                                        class="btn btn-outline-danger"><i data-feather="trash"
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
@endsection

@include('admin.components.delete-modal')

@push('page-js')
    <script>
        function makeUrl(id) {
            return `{{ route('admin.customers.index') }}/${id}`;
        }

        function deleteItem(id) {
            $('#deleteForm').attr('action', makeUrl(id)).submit();
        }
    </script>
@endpush
