{{-- Global Pages Styles --}}
<link rel="stylesheet" href="{{ asset('admin/vendors/core/core.css') }}">
<link rel="stylesheet" href="{{ asset('admin/fonts/feather-font/css/iconfont.css') }}">
<link rel="stylesheet" href="{{ asset('admin/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('admin/vendors/select2/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
<link rel="stylesheet" href="{{ asset('admin/vendors/notify/toastr.min.css') }}" />

{{-- Custom stylesheet --}}
<link rel="stylesheet" href="{{ asset('admin/css/custom-style.css') }}">

{{-- Indivisual Page Styles --}}
@stack('page-css')
