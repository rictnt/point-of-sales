@extends('layouts.app')
@section('main')
<div class="page-content">
	<div class="row">
		<div class="col-md-12 grid-margin stretch-card">
			<div class="card">
				<div class="card-body">
					<h6 class="card-title">Add Expense Category</h6>
					<form action="{{ route('admin.expense_categories.store') }}" method="POST" class="forms-sample">
						@csrf

						<div class="col-md-6">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Create Category:</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" placeholder="Expense category name" name="name">
								</div>
							</div>
						</div>
						<div class="col-md-6"></div>
						<button type="submit" class="btn btn-primary mr-2">Create</button>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- Manage Expense Category` -->
	<div class="row">
		<div class="col-md-12 grid-margin stretch-card">
			<div class="card">
				<div class="card-body">
					<h6 class="card-title">Manage Expense Category</h6>
					<div class="table-responsive cell-border">
						<table id="dataTableExample" class="table cell-border">
							<thead>
								<tr>
									<th>Sl No</th>
									<th>Date</th>
									<th>Name</th>
									<th>Status</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($expense_categories as $expense_category)
                                    <tr>
                                        <td>{{ $expense_category->id }}</td>
                                        <td>{{ date('d-m-Y', strtotime($expense_category->created_at)) }}</td>
                                        <td>{{ $expense_category->name }}</td>
                                        <td class="{{ $expense_category->status ? 'text-success' : 'text-danger' }}">
                                            {{ $expense_category->status ? 'Active' : 'Inactive' }}</td>
                                        <td>
                                            <div class="rapid_action">
                                                <button onclick="updateItem({{ $expense_category->id }},null,'toogle')"
                                                    class="btn {{ $expense_category->status ? 'btn-outline-danger' : 'btn-outline-success' }}">
                                                    <i data-feather="{{ $expense_category->status ? 'eye-off' : 'eye' }}"
                                                        style="height: 15px;width: 15px;"></i>
                                                </button>
                                                <button
                                                    onclick="updateItem({{ $expense_category->id }},'{{ $expense_category->name }}')"
                                                    class="btn btn-outline-primary" data-toggle="modal"
                                                    data-target="#editModal"><i data-feather="edit"
                                                        style="height: 15px;width: 15px;"></i>
                                                </button>
                                                <button
                                                    onclick="confirm('Are you sure want to delete this item?') ? deleteItem({{ $expense_category->id }}):false"
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

    {{-- Edit modal --}}
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModal" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="card">
                    <div class="card-header">
                        <h6>Edit Expense Category</h6>
                    </div>
                    <div class="card-body">
                        <form id="updateForm" method="POST">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <input type="hidden" name="status">
                            <div class="form-group text-right">
                                <button class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('hidden')
    @include('admin.components.delete-form')
@endsection

<form id="deleteForm" method="POST">
    @csrf
    @method('delete')
</form>

@push('page-scripts')
    <script>
        function makeUrl(id) {
            return `{{ route('admin.expense_categories.index') }}/${id}`;
        }

        function deleteItem(id) {
            $('#deleteForm').attr('action', makeUrl(id)).submit();
        }

        function updateItem(id, name, status) {

            // set action on the form 
            $('#updateForm').attr('action', makeUrl(id));

            // set forms input values 
            if (name) {
                $('#updateForm input[name=name]').val(name);
            }

            if (status == 'toogle') {
                $('#updateForm input[name=status]').val(status);
                $('#updateForm').submit();
            }
        }

    </script>
@endpush