    {{-- Delete Modal --}}
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModal" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Delete {{ $module ?? 'item' }}</h6>
                        <form id="deleteForm" method="POST">
                            @csrf
                            @method('delete')
                            <p>Are you sure want to delete this {{ $module ?? 'item' }}?</p>
                            <div class="form-group text-right">
                                <button type="submit" class="btn btn-danger">Delete</button>
                                <button data-dismiss="modal" class="btn btn-secondary">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>