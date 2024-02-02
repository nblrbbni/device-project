@extends('layout.auth.master')

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

@section('content')
<div class="row g-0 flex-fill">
    <div class="col-12 col-lg-6 col-xl-4 d-flex flex-column justify-content-center">
        <div class="container container-tight my-5 px-lg-5">
            <div class="text-center mb-4">
                <a href="/" class="navbar-brand navbar-brand-autodark"><img src="{{ asset('asset/picture/logo-smk.png') }}" height="64" alt=""></a>
            </div>
            <h2 class="card-title text-center mb-4">Create new account</h2>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input id="name" type="text" class="form-control text-dark @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" required autocomplete="email" placeholder="Your full name">
                </div>
                @error('name')
                    <span class="invalid-feedback" role="alert" style="color: red">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <div class="mb-3">
                    <label class="form-label">Grade</label>
                    <input type="number" name="class" id="" class="form-control text-dark @error('class') is-invalid @enderror" value="{{ old('class') }}" required autocomplete="class" placeholder="Your grade (10-12)" min="10" max="12">
                </div>
                @error('class')
                    <span class="invalid-feedback" role="alert" style="color: red">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <div class="mb-3">
                    <label class="form-label">Email address</label>
                    <input id="email" type="email" class="form-control text-dark @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="your@email.com">
                </div>
                @error('email')
                    <span class="invalid-feedback" role="alert" style="color: red">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <div class="input-group input-group-flat">
                        <input id="password" type="password" class="form-control text-dark @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Your password (minimum 8 characters)">
                        <span class="input-group-text" style="cursor:pointer" onclick="password_show_hide('password');">
                            <i class="fas fa-eye" id="show_eye_password"></i>
                            <i class="fas fa-eye-slash d-none" id="hide_eye_password"></i>
                        </span>
                    </div>
                    @error('password')
                        <span class="invalid-feedback" role="alert" style="color: red">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Confirm Password</label>
                    <div class="input-group input-group-flat">
                        <input id="password-confirm" type="password" class="form-control text-dark" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm password (minimum 8 characters)">
                        <span class="input-group-text" style="cursor:pointer" onclick="password_show_hide('password-confirm');">
                            <i class="fas fa-eye" id="show_eye_password-confirm"></i>
                            <i class="fas fa-eye-slash d-none" id="hide_eye_password-confirm"></i>
                        </span>
                    </div>
                    @error('password')
                        <span class="invalid-feedback" role="alert" style="color: red">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-footer">
                    <button type="submit" class="btn btn-primary w-100">Create new account</button>
                </div>
            </form>
            <div class="text-center text-white mt-3">
                Already have account? <a class="text-info" href="/login" tabindex="-1">Sign in</a>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-6 col-xl-8 d-none d-lg-block">
        <!-- Photo -->
        <div class="bg-cover h-100 min-vh-100" style="background-image: url(https://www.lib.iastate.edu/files/styles/width_limit/public/images/2023-07/Computing%20Space%20Aestetics%20-%20reduced%20size.jpg?itok=GSFpbl4e)"></div>
    </div>
</div>
@endsection
