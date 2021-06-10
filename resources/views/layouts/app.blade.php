<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Point Of Sale System - Dashoboard</title>
    <link rel="shortcut icon" href="{{ asset('admin/images/favicon.ico') }}" />
    @include('layouts.partials.styles')
    @stack('page-css')
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
    @include('layouts.partials.scripts')
    @include('layouts.partials.notify')
    @stack('page-scripts')
</body>

</html>
