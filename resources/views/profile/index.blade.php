@extends('layout.master')

@push('scripts')
    <script>
        function password_show_hide(inputId) {
            var passwordField = document.getElementById(inputId);
            var showEyeIcon = document.getElementById('show_eye_' + inputId);
            var hideEyeIcon = document.getElementById('hide_eye_' + inputId);

            if (passwordField.type === 'password') {
                passwordField.type = 'text';
                showEyeIcon.classList.add('d-none');
                hideEyeIcon.classList.remove('d-none');
            } else {
                passwordField.type = 'password';
                showEyeIcon.classList.remove('d-none');
                hideEyeIcon.classList.add('d-none');
            }
        }
    </script>
@endpush

@section('judul')
    Profile
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('style/style.css') }}">
    <link rel="stylesheet" href="{{ asset('js/java.js') }}">
    <link rel="stylesheet" href="{{ asset('style/responsive.css') }}">
@endpush

@push('scripts')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endpush

@section('content')
    <br>
    <br>
    <div class="page-wrapper">
        <!-- Page header -->
        <div class="page-header d-print-none">
            <div class="container-xl">
                <div class="row g-2 align-items-center">
                    <div class="col">
                        <h2 class="page-title">
                            Perbarui Profile Anda
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page body -->
        <div class="page-body">
            <div class="container-xl">
                <div class="card">
                    <div class="card-body">
                        <form action="/profile/update" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label class="form-label">Nama Siswa</label>
                                <input type="text" name="name" class="form-control"
                                    value="{{ $detailprofile->name }}">
                            </div>

                            <div class="mb-3">
                                <label for="quantity">Kelas</label>
                                <input type="number" name="class" id="" min="10" max="12"
                                    class="form-control" value="{{ $detailprofile->class }}">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="text" name="email" class="form-control"
                                    value="{{ $detailprofile->email }}">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <div class="input-group input-group-flat">
                                    <input id="password" class="form-control" name="password"
                                        placeholder="Masukkan password baru Anda">
                                    <span class="input-group-text" style="cursor:pointer"
                                        onclick="password_show_hide('password');">
                                        <i class="fas fa-eye" id="show_eye_password"></i>
                                        <i class="fas fa-eye-slash d-none" id="hide_eye_password"></i>
                                    </span>
                                </div>
                            </div>

                            <button type="submit" class="btn" style="background-color:#18244c; color:white"
                                onclick="submitForm(event)">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
