<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>RapidHisab - Dashoboard</title>
    <link rel="stylesheet" href="{{ asset('admin/vendors/core/core.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/fonts/feather-font/css/iconfont.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('admin/images/favicon.ico') }}" />
</head>

<body>
    <div class="main-wrapper">
        @include('layouts.partials.sidebar')
        <div class="page-wrapper">
            @include('layouts.partials.topbar')
            @yield('main')
            @include('layouts.partials.footer')
        </div>
    </div>
    <script src="{{ asset('admin/vendors/core/core.js') }}"></script>
    <script src="{{ asset('admin/vendors/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('admin/js/template.js') }}"></script>
    @stack('page-scripts')
</body>

</html>
