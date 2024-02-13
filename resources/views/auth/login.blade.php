@extends('layout.auth.master')

@push('scripts')
    <script>
        function password_show_hide() {
  var x = document.getElementById("password");
  var show_eye = document.getElementById("show_eye");
  var hide_eye = document.getElementById("hide_eye");
  hide_eye.classList.remove("d-none");
  if (x.type === "password") {
    x.type = "text";
    show_eye.style.display = "none";
    hide_eye.style.display = "block";
  } else {
    x.type = "password";
    show_eye.style.display = "block";
    hide_eye.style.display = "none";
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
            <h2 class="h3 text-center mb-3">
                Login to your account
            </h2>
            <form method="POST" action="{{ route('login') }}" class="login">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Email address</label>
                    <input id="email" type="email" class="form-control text-dark @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="your@email.com">
                </div>
                @error('email')
                    <span class="invalid-feedback" role="alert" style="color: red">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <div class="mb-2">
                    <label class="form-label">Password
                    </label>
                    <div class="input-group input-group-flat">
                        <input id="password" type="password" class="form-control text-dark @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Your password">
                        <span style="cursor:pointer" class="input-group-text" onclick="password_show_hide();">
                            <i class="fas fa-eye" id="show_eye"></i>
                            <i class="fas fa-eye-slash d-none" id="hide_eye"></i>
                        </span>
                    </div>
                    @error('password')
                        <span class="invalid-feedback" role="alert" style="color: red">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                <div class="mb-2">
                    <label class="form-check">
                        <input type="checkbox" class="form-check-input"/>
                        <span class="form-check-label">Remember me on this device</span>
                    </label>
                </div>
                <div class="form-footer">
                    <button type="submit" class="btn btn-primary w-100">Sign in</button>
                </div>
            </form>
            <div class="text-center text-muted mt-3">
                <span class="text-white">Don't have account yet?</span> <a class="text-info" href="/register" tabindex="-1">Sign up</a>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-6 col-xl-8 d-none d-lg-block">
        <!-- Photo -->
        <div class="bg-cover h-100 min-vh-100" style="background-image: url(https://www.lib.iastate.edu/files/styles/width_limit/public/images/2023-07/Computing%20Space%20Aestetics%20-%20reduced%20size.jpg?itok=GSFpbl4e)"></div>
    </div>
</div>
@endsection
