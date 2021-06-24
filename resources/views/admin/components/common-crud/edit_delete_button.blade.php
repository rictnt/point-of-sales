 <div class="rapid_action">
     <button onclick="setEditForm({{ $item->toJson() }})" class="btn btn-outline-primary" data-toggle="modal"
         data-target="#editModal"><i data-feather="edit" style="height: 15px;width: 15px;"></i>
     </button>
     <button data-toggle="modal" data-target="#deleteModal" onclick="setDeleteForm({{ $item->toJson() }})"
         class=" btn btn-outline-danger"><i data-feather="trash" style="height: 15px;width: 15px;"></i>
     </button>
 </div>
