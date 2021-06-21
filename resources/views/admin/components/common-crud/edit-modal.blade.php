    {{-- Edit modal --}}
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModal" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Update {{ $module ?? 'item' }}</h6>
                        <form id="editForm" method="POST">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <input type="text" name="name" required class="form-control" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <textarea name="description" rows="5" class="form-control"
                                    placeholder="Description"></textarea>
                            </div>
                            <div class="form-group">
                                <select name="status">
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                            </div>
                            <div class="form-group text-right">
                                <button type="submit" class="btn btn-primary">Save</button>
                                <button data-dismiss="modal" class="btn btn-secondary">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>