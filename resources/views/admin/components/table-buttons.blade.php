<div class="rapid_action">
    <button onclick="setEditForm({{ $item->id }},null,'toogle')"
        class="btn {{ $item->status ? 'btn-outline-danger' : 'btn-outline-success' }}">
        <i data-feather="{{ $item->status ? 'eye-off' : 'eye' }}"
            style="height: 15px;width: 15px;"></i>
    </button>
    <button
        onclick="setEditForm({{ $item->id }},'{{ $item->name }}')"
        class="btn btn-outline-primary" data-toggle="modal"
        data-target="#editModal"><i data-feather="edit"
            style="height: 15px;width: 15px;"></i>
    </button>
    <button data-toggle="modal" data-target="#deleteModal"
        onclick="setDeleteForm({{ $item->id }})"
        class=" btn btn-outline-danger"><i data-feather="trash"
            style="height: 15px;width: 15px;"></i>
    </button>
</div>