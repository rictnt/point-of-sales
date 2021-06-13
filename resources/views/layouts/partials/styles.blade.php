{{-- Global Pages Styles --}}
<link rel="stylesheet" href="{{ asset('admin/vendors/core/core.css') }}">
<link rel="stylesheet" href="{{ asset('admin/fonts/feather-font/css/iconfont.css') }}">
<link rel="stylesheet" href="{{ asset('admin/css/style.css') }}">

{{-- datatables --}}
<link rel="stylesheet" href="{{ asset('admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">

{{-- Toastr JS --}}
<link rel="stylesheet" href="{{ asset('admin/vendors/notify/toastr.min.css') }}" />

{{-- Custom stylesheet --}}
<link rel="stylesheet" href="{{ asset('admin/css/custom-style.css') }}">

{{-- Indivisual Page Styles --}}
@stack('page-css')
