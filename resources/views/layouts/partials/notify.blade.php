<!-- Toastr script CDN -->
<script src="https://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
{!! Notify::message() !!}

@if ($errors->any())
    <script>
        @foreach ($errors->all() as $error)
            toastr.error('{{ $error }}')
        @endforeach
    </script>
@endif
