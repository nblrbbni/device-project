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
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}

{{-- <div class="container">
    <div class="screen">
        <div class="screen__content">
            <form method="POST" action="{{ route('login') }}" class="login">
                @csrf
                <div class="login__field">
                    <i class="login__icon fas fa-envelope"></i>
                    <input id="email" type="email" class="login__input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"" placeholder="Email">
                </div>
                @error('email')
                    <span class="invalid-feedback" role="alert" style="color: red">
                        <strong>{{ $message }}</strong>
                    </span>
                 @enderror
                <div class="login__field">
                    <i class="login__icon fas fa-lock"></i>
                    <input id="password" type="password" class="login__input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"" placeholder="Password" />
                </div>
                @error('password')
                    <span class="invalid-feedback" role="alert" style="color: red">
                        <strong>{{ $message }}</strong>
                    </span>
                 @enderror
                <button class="button login__submit" type="submit">
                    <span class="button__text">
                        <a href="#" style="text-decoration: none">Log In Now</a>
                    </span>
                    <i class="button__icon fas fa-chevron-right"></i>
                </button>
                <p>Don't have an account? <a href="">Register Here!</a></p>
            </form>
        </div>
        <div class="screen__background">
            <span class="screen__background__shape screen__background__shape4"></span>
            <span class="screen__background__shape screen__background__shape3"></span>
            <span class="screen__background__shape screen__background__shape2"></span>
            <span class="screen__background__shape screen__background__shape1"></span>
        </div>
    </div>
</div> --}}

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
                    <input id="email" type="email" class="form-control text-dark @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"  placeholder="your@email.com">
                </div>
                @error('email')
                    <span class="invalid-feedback" role="alert" style="color: red">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <div class="mb-2">
                    <label class="form-label">Password
                        {{-- <span class="form-label-description">
                        <a href="./forgot-password.html">I forgot password</a>
                        </span> --}}
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
                <span class="text-white">Don't have account yet?</span> <a href="/register" tabindex="-1">Sign up</a>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-6 col-xl-8 d-none d-lg-block">
        <!-- Photo -->
        <div class="bg-cover h-100 min-vh-100" style="background-image: url(https://www.lib.iastate.edu/files/styles/width_limit/public/images/2023-07/Computing%20Space%20Aestetics%20-%20reduced%20size.jpg?itok=GSFpbl4e)"></div>
    </div>
</div>
@endsection
