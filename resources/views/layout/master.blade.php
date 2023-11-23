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
    @include('sweetalert::alert')

    <script src="{{ asset('dist/js/demo-theme.min.js') }}"></script>
    {{-- Sidebar --}}
    @include('partial.sidebar')

    {{-- Header --}}
    @include('partial.navbar')

    @yield('content')

    <!-- script -->
    @stack('scripts-2')

    {{-- <script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script> --}}
    <script src="{{ asset('dist/js/tabler.min.js') }}" defer></script>
    <script src="{{ asset('dist/js/demo.min.js') }}" defer></script>
</body>

<script>
    $('.delete').click( function(){
        var siswaid = $(this).attr('data-id');
        var studentname = $(this).attr('data-name');

        Swal.fire({
            title: "Apakah anda yakin?",
            text: "Data dengan nama "+studentname+" akan dihapus!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#d33",
            cancelButtonColor: "#14274c",
            confirmButtonText: "Yes, delete it!"
            }).then((result) => {
            if (result.isConfirmed) {
                window.location = "/student/"+siswaid+"/delete"
                Swal.fire({
                title: "Dihapus!",
                text: "Data tersebut berhasil dihapus!",
                icon: "success"
                });
            }
        });
    });

    function submitForm(event) {
    event.preventDefault(); // Prevent the form from submitting immediately

    Swal.fire({
        title: 'Apakah anda yakin?',
        text: "Data akan diperbarui!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#18244c',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, update!'
    }).then((result) => {
        if (result.isConfirmed) {
            event.target.closest('form').submit(); // Submit the form after confirmation
        }
    });
}
</script>

</html>

