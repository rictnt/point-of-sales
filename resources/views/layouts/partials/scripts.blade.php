{{-- Global pages Scripts --}}
<script src="{{ asset('admin/vendors/core/core.js') }}"></script>
<script src="{{ asset('admin/vendors/feather-icons/feather.min.js') }}"></script>
<script src="{{ asset('admin/js/template.js') }}"></script>

{{-- Toastr Notification --}}
@include('layouts.partials.notify')

{{-- Indivisual Page Scripts --}}
@stack('page-js')
