@extends('layouts.app')
@section('main')
    <div class="page-content">


        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Add Category</h6>
                        <form action="{{ route('categories.store') }}" method="POST" class="forms-sample">
                            @csrf
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label">Category Name</label>
                                <div class="col-md-4">
                                    <input type="text" name="name" class="form-control" placeholder="Ex: Man Fashion">
                                </div>
                                <div class="col-md-2">
                                    <button type="submit" class="btn btn-primary form-control">Create</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Category List</h6>
                        <div class="table-responsive cell-border">
                            <table id="dataTableExample" class="table cell-border">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $category)
                                        <tr>
                                            <td>{{ $category->id }}</td>
                                            <td>{{ $category->name }}</td>
                                            <td>{{ $category->status ? 'Active':'Inactive' }}</td>
                                            <td>
                                                <div class="rapid_action">
                                                    <button class="btn btn-outline-primary"> <i data-feather="edit"
                                                            style="height: 15px;width: 15px;"></i></button>
                                                    <button onclick="deleteItem({{ $category->id }})" class="btn btn-outline-danger"><i data-feather="trash"
                                                            style="height: 15px;width: 15px;"></i></button>
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

    {{-- Item Delete Form --}}
    <form id="deleteForm" class="d-none" method="POST">
        @csrf
        @method('delete')
    </form>

@endsection

@push('page-scripts')
    <script>
        function deleteItem(id){
            let url = `{{ route('categories.index') }}/${id}`;
            $('#deleteForm').attr('action', url).submit();
        }
    </script>
@endpush
