<script>
        function makeUrl(id) {
            return `{{ request()->url() }}/${id}`;
        }

        function setDeleteForm({
            id
        }) {
            $('#deleteForm').attr('action', makeUrl(id));
        }

        function setEditForm({
            id,
            name,
            description,
            status
        }) {
            let form = $('#editForm')
            form.attr('action', makeUrl(id));
            form.find('input[name=name]').val(name);
            form.find('textarea[name=description]').val(description);
            form.find('select[name=status]').val(status);
        }
    </script>