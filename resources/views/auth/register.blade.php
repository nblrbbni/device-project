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
        };
    </script>
@endpush

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="class" class="col-md-4 col-form-label text-md-end">Grade</label>
                            <div class="col-md-6">
                                <select id="class" class="form-control @error('class') is-invalid @enderror" name="class" value="{{ old('class') }}" autocomplete="class" min="10" max="12">
                                    <option value="12">-- Please choose your grade --</option>
                                    <option value="12">12</option>
                                    <option value="11">11</option>
                                    <option value="10">10</option>
                                </select>
                                @error('class')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password" name="password_confirmation" autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
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
            <form method="POST" action="{{ route('register') }}" class="login">
                @csrf

                <div class="login__field">
                    <i class="login__icon fas fa-user"></i>
                    <input id="name" type="text" class="login__input @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Name">
                </div>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <div class="login__field">
                    <i class="login__icon fas fa-school"></i>
                    <select id="class" class="login__input @error('class') is-invalid @enderror" name="class" value="{{ old('class') }}" required autocomplete="class" min="10" max="12">
                        <option value="12">-- Please choose your grade --</option>
                        <option value="12">12</option>
                        <option value="11">11</option>
                        <option value="10">10</option>
                    </select>
                </div>
                @error('class')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                 @enderror

                <div class="login__field">
                    <i class="login__icon fas fa-envelope"></i>
                    <input id="email" type="email" class="login__input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"" placeholder="Email">
                </div>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <div class="login__field">
                    <i class="login__icon fas fa-lock"></i>
                    <input id="password" type="password" class="login__input @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">
                </div>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <div class="login__field">
                    <i class="login__icon fas fa-lock"></i>
                    <input id="password-confirm" type="password" class="login__input" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                </div>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <button class="button login__submit" type="submit">
                    <span class="button__text">
                        <a href="#" style="text-decoration: none;">Register Now</a>
                    </span>
                    <i class="button__icon fas fa-chevron-right"></i>
                </button>
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
            <h2 class="card-title text-center mb-4">Create new account</h2>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input id="name" type="text" class="form-control text-dark @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" required autocomplete="email" placeholder="Your name">
                </div>
                @error('name')
                    <span class="invalid-feedback" role="alert" style="color: red">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <div class="mb-3">
                    <label class="form-label">Grade</label>
                    <input type="number" name="class" id="class" class="form-control text-dark" min="10" max="12" placeholder="10-12" required>
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
                    <label class="form-label">Password
                        {{-- <span class="form-label-description">
                        <a href="./forgot-password.html">I forgot password</a>
                        </span> --}}
                    </label>
                    <div class="input-group input-group-flat">
                        <input id="password" type="password" class="form-control text-dark @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Your password (minimum 8 characters)">
                        {{-- <span class="input-group-text" style="cursor:pointer" onclick="password_show_hide();">
                            <i class="fas fa-eye" id="show_eye"></i>
                            <i class="fas fa-eye-slash d-none" id="hide_eye"></i>
                        </span> --}}
                    </div>
                    @error('password')
                        <span class="invalid-feedback" role="alert" style="color: red">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Confirm Password
                        {{-- <span class="form-label-description">
                        <a href="./forgot-password.html">I forgot password</a>
                        </span> --}}
                    </label>
                    <div class="input-group input-group-flat">
                        <input id="password-confirm" type="password" class="form-control text-dark" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm password">
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
            <div class="text-center text-muted mt-3">
                Already have account? <a href="/login" tabindex="-1">Sign in</a>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-6 col-xl-8 d-none d-lg-block">
        <!-- Photo -->
        <div class="bg-cover h-100 min-vh-100" style="background-image: url(https://www.lib.iastate.edu/files/styles/width_limit/public/images/2023-07/Computing%20Space%20Aestetics%20-%20reduced%20size.jpg?itok=GSFpbl4e)"></div>
    </div>
</div>
@endsection
