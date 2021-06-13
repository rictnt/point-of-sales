<!-- Toastr script CDN -->
<script src="{{ asset('admin/vendors/notify/toastr.min.js') }}"></script>
{!! Notify::message() !!}



{{-- If has any errors on any page --}}
{{-- @if ($errors->any())
    <script>
        @foreach ($errors->all() as $error)
            toastr.error('{{ $error }}')
        @endforeach
    </script>
@endif --}}
