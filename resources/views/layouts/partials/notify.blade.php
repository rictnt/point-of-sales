<!-- Toastr script CDN -->
<script src="{{ asset('admin/vendors/notify/toastr.min.js') }}"></script>
{!! Notify::message() !!}
@if ($errors->any())
    <script>
        @foreach ($errors->all() as $error)
            toastr.error('{{ $error }}')
        @endforeach
    </script>
@endif
