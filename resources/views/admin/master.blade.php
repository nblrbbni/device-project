<!DOCTYPE html>
<html lang="en">
<!-- advance-table.html  21 Nov 2019 03:55:20 GMT -->

<head>
    <meta charset="UTF-8" />
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport" />
    <title>SMK TI Bazma</title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/css/app.min.css') }}" />
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}" />
    <!-- Custom style CSS -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.ico') }}" />
</head>

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
        {{-- navbar --}}
        @include('admin.partial.navbar')

        {{-- sidebar --}}
        @include('admin.partial.sidebar')
        </div>
        <!-- Main Content -->
        <div class="main-content">
            <section class="section">
               @yield('content')
            </section>
       

        </div>


        <!-- General JS Scripts -->
        <script src="{{ asset('assets/js/app.min.js') }}"></script>
        <!-- JS Libraies -->
        <script src="{{ asset('assets/bundles/jquery-ui/jquery-ui.min.js') }}"></script>
        <!-- Page Specific JS File -->
        <script src="{{ asset('assets/js/page/advance-table.js') }}"></script>
        <!-- Template JS File -->
        <script src="{{ asset('assets/js/scripts.js') }}"></script>
        <!-- Custom JS File -->
        <script src="{{ asset('assets/js/custom.js') }}"></script>
</body>

<!-- advance-table.html  21 Nov 2019 03:55:21 GMT -->

</html>
