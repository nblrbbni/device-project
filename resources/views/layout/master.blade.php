<!DOCTYPE html>
<html lang="en">

<head>
    <title>Peminjaman Device</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    @stack('styles')
    <link href="{{ asset('dist/css/tabler.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/css/tabler-flags.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/css/tabler-payments.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/css/tabler-vendors.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/css/demo.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('dist/js/demo-theme.min.js') }}"></script>

    {{-- Another CSS --}}
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    @stack('scripts')
    <script defer src="{{ asset('dist/js/script.js') }}"></script>
</head>

<body>
    {{-- Sidebar --}}
    @include('partial.sidebar')

    {{-- Header --}}
    @include('partial.navbar')

    @yield('content')

    <!-- script -->
    @stack('script')
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
        const toogleSidebar = () =>
        document.body.classList.toggle("open");
        </script>
    <script src="{{ asset('dist/js/tabler.min.js') }}" defer></script>
    <script src="{{ asset('dist/js/demo.min.js') }}" defer></script>
</body>

</html>

