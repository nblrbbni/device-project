<!DOCTYPE html>
<html lang="en">

<head>
    <title>Peminjaman Device</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @stack('styles')
    <link href="{{ asset('dist/css/tabler.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/css/tabler-flags.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/css/tabler-payments.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/css/tabler-vendors.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/css/demo.min.css') }}" rel="stylesheet">
    @stack('styles-2')

    {{-- Another CSS --}}
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    @stack('scripts')
</head>

<body>
    <script src="{{ asset('dist/js/demo-theme.min.js') }}"></script>
    {{-- Sidebar --}}
    @include('partial.sidebar')

    {{-- Header --}}
    @include('partial.navbar')

    @yield('content')

    <!-- script -->
    @stack('scripts-2')

    <script src="{{ asset('dist/js/tabler.min.js') }}" defer></script>
    <script src="{{ asset('dist/js/demo.min.js') }}" defer></script>
</body>

<script>
    $('.delete').click( function(){
        var siswaid = $(this).attr('data-id');
        var studentname = $(this).attr('data-name');

        swal({
            title: "Are you sure?",
            text: "You will delete data with the name "+studentname+" ",
            icon: "warning",
            buttons: true,
            dangerMode: true,
            })
            .then((willDelete) => {
            if (willDelete) {
                window.location = "/student/"+siswaid+"/delete"
                swal("Student data successfully deleted!", {
                icon: "success",
                });
            } else {
                swal("Ok! The data was not deleted!");
            }
        });
    });
</script>

</html>

