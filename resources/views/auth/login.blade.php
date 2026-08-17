<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Log in</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/icheck-bootstrap/3.0.1/icheck-bootstrap.min.css">
    <!-- AdminLTE Theme style -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page bg-dark">
<div class="login-box">
    <!-- Logo -->
    <div class="login-logo">
        <a href="/" class="text-light"><b>Admin</b>LTE</a>
    </div>

    <!-- Card -->
    <div class="card card-outline card-warning bg-dark border-secondary shadow-lg">
        <div class="card-body login-card-body bg-dark text-light">
            <p class="login-box-msg text-muted">Sign in to start your session</p>

            <!-- Session Status -->
            @if (session('status'))
                <div class="alert alert-success text-sm mb-3" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Input -->
                <div class="input-group mb-3">
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username"
                           placeholder="Email"
                           class="form-control bg-secondary text-light border-secondary placeholder-muted @error('email') is-invalid @enderror">
                    <div class="input-group-append">
                        <div class="input-group-text bg-secondary border-secondary text-light">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                    @error('email')
                    <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <!-- Password Input -->
                <div class="input-group mb-3">
                    <input id="password" type="password" name="password" required autocomplete="current-password"
                           placeholder="Password"
                           class="form-control bg-secondary text-light border-secondary placeholder-muted @error('password') is-invalid @enderror">
                    <div class="input-group-append">
                        <div class="input-group-text bg-secondary border-secondary text-light">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                    @error('password')
                    <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <!-- Remember Me & Submit Button -->
                <div class="row align-items-center mb-3">
                    <div class="col-8">
                        <div class="icheck-primary d-flex align-items-center">
                            <input type="checkbox" id="remember" name="remember" class="mr-2">
                            <label for="remember" class="text-muted mb-0 cursor-pointer">
                                Remember Me
                            </label>
                        </div>
                    </div>
                    <div class="col-4">
                        <button type="submit" class="btn btn-warning btn-block font-weight-bold">
                            Sign In
                        </button>
                    </div>
                </div>
            </form>

            <!-- Forgot Password Link -->
            @if (Route::has('password.request'))
                <p class="mb-0 text-center">
                    <a href="{{ route('password.request') }}" class="text-warning text-decoration-none text-sm">
                        I forgot my password
                    </a>
                </p>
            @endif
        </div>
    </div>
</div>

<!-- Scripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
</body>
</html>
