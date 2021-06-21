<script>
    function makeUrl(id) {
        return `{{ request()->url() }}/${id}`;
    }

    function setDeleteForm(id) {
        $('#deleteForm').attr('action', makeUrl(id));
    }

    function setEditForm(id, name, status) {
        $('#editForm').attr('action', makeUrl(id));
        if (name) {
            $('#editForm input[name=name]').val(name);
        }
        if (status == 'toogle') {
            $('#editForm input[name=status]').val(status);
            $('#editForm').submit();
        }
    }
</script>