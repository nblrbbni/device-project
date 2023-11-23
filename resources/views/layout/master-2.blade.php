<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peminjaman Device</title>
    <link rel="stylesheet" href="{{ asset('style/style.css') }}">
    <link rel="stylesheet" href="{{ asset('js/java.js') }}">
    <link href="{{ asset('dist/css/tabler.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/css/tabler-flags.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/css/tabler-payments.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/css/tabler-vendors.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/css/demo.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('style/responsive.css') }}">
    @stack('scripts-2')

    {{-- Another CSS --}}
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    @include('sweetalert::alert')
    <script src="{{ asset('dist/js/demo-theme.min.js') }}"></script>
    @yield('content-2')

    <!-- script -->
    <script src="{{ asset('dist/js/tabler.min.js') }}" defer></script>
    <script src="{{ asset('dist/js/demo.min.js') }}" defer></script>
    <script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>
    @stack('scripts')
</body>
</html>
{{--
<script>
document.querySelector('.submit').addEventListener('click', function (event) {
    event.preventDefault();

    Swal.fire({
      title: 'Berhasil kembalikan device!',
      text: 'Tekan OK untuk kembali ke halaman dashboard.',
      icon: 'success',
      confirmButtonText: 'OK',
    }).then((result) => {
        if (result.isConfirmed) {
            event.target.closest('form').submit(); // Submit the form after confirmation
        }
    });
});
</script> --}}
