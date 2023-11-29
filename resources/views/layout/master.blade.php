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
    {{-- Bootstrap --}}
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> --}}

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

    {{-- Bootstrap --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script> --}}

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

    $('.deletemapel').click( function(){
        var mapelid = $(this).attr('data-id');
        var mapel = $(this).attr('data-name');

        Swal.fire({
            title: "Apakah anda yakin?",
            text: "Mata Pelajaran "+mapel+" akan dihapus!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#d33",
            cancelButtonColor: "#14274c",
            confirmButtonText: "Yes, delete it!"
            }).then((result) => {
            if (result.isConfirmed) {
                window.location = "/mapel/"+mapelid+"/delete"
                Swal.fire({
                title: "Dihapus!",
                text: "Data tersebut berhasil dihapus!",
                icon: "success"
                });
            }
        });
    });


    $('.deleteguru').click( function(){
        var guruid = $(this).attr('data-id');
        var guruname = $(this).attr('data-name');

        Swal.fire({
            title: "Apakah anda yakin?",
            text: "Guru dengan nama "+guruname+" akan dihapus!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#d33",
            cancelButtonColor: "#14274c",
            confirmButtonText: "Yes, delete it!"
            }).then((result) => {
            if (result.isConfirmed) {
                window.location = "/guru/"+guruid+"/delete"
                Swal.fire({
                title: "Dihapus!",
                text: "Data tersebut berhasil dihapus!",
                icon: "success"
                });
            }
        });
    });

    $('.deletedevice').click( function(){
        var deviceid = $(this).attr('data-id');
        var devicename = $(this).attr('data-name');

        Swal.fire({
            title: "Apakah anda yakin?",
            text: "Device dengan kode "+devicename+" akan dihapus!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#d33",
            cancelButtonColor: "#14274c",
            confirmButtonText: "Yes, delete it!"
            }).then((result) => {
            if (result.isConfirmed) {
                window.location = "/device/"+deviceid+"/delete"
                Swal.fire({
                title: "Dihapus!",
                text: "Data tersebut berhasil dihap us!",
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

