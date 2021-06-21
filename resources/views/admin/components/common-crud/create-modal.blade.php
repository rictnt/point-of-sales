<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModal" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Add New {{ $module ?? 'item' }}</h6>
                    <form action="{{ request()->url() }}" method="POST" class="needs-validation" novalidate>
                        @csrf
                        <div class="form-group">
                            <input type="text" name="name" required class="form-control" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <textarea name="description" rows="5" class="form-control" placeholder="Description"></textarea>
                        </div>
                        <div class="form-group text-right">
                            <button type="submit" class="btn btn-primary">Add</button>
                            <button data-dismiss="modal" class="btn btn-secondary">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
