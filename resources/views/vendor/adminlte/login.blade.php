@extends('adminlte::master')

@section('adminlte_css_pre')
    <link rel="stylesheet" href="{{ asset('vendor/icheck-bootstrap/icheck-bootstrap.min.css') }}">
@stop

@section('adminlte_css')
    @stack('css')
    @yield('css')

    <style>
        body.login-page {
            background: linear-gradient(135deg, #0a0e27 0%, #1a1f3a 100%) !important;
            position: relative;
            overflow: hidden;
        }

        /* Animated Background */
        body.login-page::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle at 20% 50%, rgba(120, 119, 198, 0.1) 0%, transparent 50%),
                        radial-gradient(circle at 80% 80%, rgba(88, 166, 255, 0.1) 0%, transparent 50%);
            animation: float 20s infinite ease-in-out;
            z-index: 0;
        }

        @keyframes float {
            0%, 100% { transform: translate(0, 0) rotate(0deg); }
            33% { transform: translate(30px, -50px) rotate(120deg); }
            66% { transform: translate(-20px, 20px) rotate(240deg); }
        }

        /* Decorative Elements */
        body.login-page::after {
            content: '';
            position: fixed;
            width: 300px;
            height: 300px;
            background: linear-gradient(135deg, rgba(102, 126, 234, 0.1) 0%, rgba(88, 166, 255, 0.1) 100%);
            border-radius: 50%;
            top: -150px;
            right: -100px;
            z-index: 0;
        }

        .login-box {
            position: relative;
            z-index: 1;
            width: 450px;
            animation: slideUp 0.6s ease-out;
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .login-logo {
            margin-bottom: 2rem;
        }

        .login-logo a {
            color: #fff !important;
            text-decoration: none;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 1rem;
        }

        .login-logo img {
            max-width: 140px !important;
            filter: drop-shadow(0 10px 30px rgba(102, 126, 234, 0.5))
                    drop-shadow(0 5px 15px rgba(88, 166, 255, 0.3));
            animation: logoFloat 3s ease-in-out infinite;
            transition: all 0.3s ease;
        }

        .login-logo img:hover {
            transform: scale(1.05);
            filter: drop-shadow(0 15px 40px rgba(102, 126, 234, 0.7))
                    drop-shadow(0 8px 20px rgba(88, 166, 255, 0.5));
        }

        @keyframes logoFloat {
            0%, 100% { 
                transform: translateY(0px);
            }
            50% { 
                transform: translateY(-10px);
            }
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }

        .login-logo .font-weight-bold {
            font-size: 1.8rem;
            font-weight: 700;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
        }

        /* Card Styling */
        .card {
            background: rgba(26, 31, 58, 0.8) !important;
            backdrop-filter: blur(20px);
            border-radius: 25px !important;
            border: 1px solid rgba(102, 126, 234, 0.2) !important;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.5),
                        0 0 0 1px rgba(255, 255, 255, 0.1) !important;
            overflow: hidden;
        }

        .login-card-body {
            padding: 3rem 2.5rem !important;
            color: #fff;
        }

        .login-box-msg {
            text-align: center;
            color: #a0aec0 !important;
            font-size: 1.1rem;
            margin-bottom: 2rem !important;
            font-weight: 400;
        }

        /* Input Group Styling */
        .input-group {
            margin-bottom: 1.5rem !important;
        }

        .form-control {
            background: rgba(10, 14, 39, 0.6) !important;
            border: 2px solid rgba(102, 126, 234, 0.2) !important;
            border-right: none !important;
            border-radius: 12px 0 0 12px !important;
            color: #fff !important;
            padding: 1rem !important;
            height: auto !important;
            transition: all 0.3s;
        }

        .form-control::placeholder {
            color: #6b7280 !important;
        }

        .form-control:focus {
            background: rgba(10, 14, 39, 0.8) !important;
            border-color: #667eea !important;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1) !important;
            color: #fff !important;
        }

        .input-group-text {
            background: rgba(10, 14, 39, 0.6) !important;
            border: 2px solid rgba(102, 126, 234, 0.2) !important;
            border-left: none !important;
            border-radius: 0 12px 12px 0 !important;
            color: #667eea !important;
            transition: all 0.3s;
        }

        .form-control:focus + .input-group-append .input-group-text {
            border-color: #667eea !important;
            background: rgba(10, 14, 39, 0.8) !important;
        }

        /* Validation Errors */
        .is-invalid {
            border-color: #e74c3c !important;
        }

        .invalid-feedback {
            color: #ff6b6b !important;
            font-size: 0.875rem;
            margin-top: 0.5rem;
            display: block !important;
        }

        /* Checkbox Styling */
        .icheck-primary label {
            color: #a0aec0 !important;
            font-weight: 400;
            cursor: pointer;
            user-select: none;
        }

        .icheck-primary input[type="checkbox"]:checked + label::before {
            background-color: #667eea !important;
            border-color: #667eea !important;
        }

        /* Button Styling */
        .btn-primary {
            background: linear-gradient(135deg, #667eea 0%, #58a6ff 100%) !important;
            border: none !important;
            border-radius: 12px !important;
            padding: 0.75rem 1.5rem !important;
            font-weight: 600 !important;
            box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4) !important;
            transition: all 0.3s !important;
            height: auto !important;
        }

        .btn-primary:hover {
            transform: translateY(-2px) !important;
            box-shadow: 0 6px 25px rgba(102, 126, 234, 0.6) !important;
        }

        .btn-primary:active,
        .btn-primary:focus {
            transform: translateY(0) !important;
            box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4) !important;
        }

        /* Links Styling */
        .login-card-body a {
            color: #58a6ff !important;
            text-decoration: none;
            transition: all 0.3s;
            position: relative;
            font-size: 0.95rem;
        }

        .login-card-body a::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 0;
            height: 2px;
            background: linear-gradient(90deg, #667eea, #58a6ff);
            transition: width 0.3s;
        }

        .login-card-body a:hover {
            color: #667eea !important;
        }

        .login-card-body a:hover::after {
            width: 100%;
        }

        .login-card-body p {
            margin-bottom: 0.75rem;
        }

        /* Row alignment */
        .row {
            margin-bottom: 1rem;
        }

        .col-8,
        .col-4 {
            display: flex;
            align-items: center;
        }

        /* Responsive */
        @media (max-width: 576px) {
            .login-box {
                width: 90%;
                margin: 1rem auto;
            }

            .login-card-body {
                padding: 2rem 1.5rem !important;
            }

            .login-logo .font-weight-bold {
                font-size: 1.5rem;
            }

            .login-logo img {
                max-width: 120px !important;
            }

            .row > div {
                margin-bottom: 0.5rem;
            }

            .col-8,
            .col-4 {
                flex: 0 0 100%;
                max-width: 100%;
            }

            .btn-primary {
                width: 100%;
            }
        }
    </style>
@stop

@section('classes_body', 'login-page')

@php( $login_url = View::getSection('login_url') ?? config('adminlte.login_url', 'login') )
@php( $register_url = View::getSection('register_url') ?? config('adminlte.register_url', 'register') )
@php( $password_reset_url = View::getSection('password_reset_url') ?? config('adminlte.password_reset_url', 'password/reset') )
@php( $dashboard_url = View::getSection('dashboard_url') ?? config('adminlte.dashboard_url', 'home') )

@if (config('adminlte.use_route_url', false))
    @php( $login_url = $login_url ? route($login_url) : '' )
    @php( $register_url = $register_url ? route($register_url) : '' )
    @php( $password_reset_url = $password_reset_url ? route($password_reset_url) : '' )
    @php( $dashboard_url = $dashboard_url ? route($dashboard_url) : '' )
@else
    @php( $login_url = $login_url ? url($login_url) : '' )
    @php( $register_url = $register_url ? url($register_url) : '' )
    @php( $password_reset_url = $password_reset_url ? url($password_reset_url) : '' )
    @php( $dashboard_url = $dashboard_url ? url($dashboard_url) : '' )
@endif

@section('body')
    <div class="login-box">
        <div class="login-logo text-center">
            <a href="{{ $dashboard_url }}">
                <img src="{{ asset('assets/img/logo/logo.png') }}"
                    alt="Logo Inventaris Kantor">
                <div class="font-weight-bold">
                    Inventaris Kantor
                </div>
            </a>
        </div>
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">{{ __('adminlte::adminlte.login_message') }}</p>
                <form action="{{ $login_url }}" method="post">
                    {{ csrf_field() }}
                    <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" value="{{ old('email') }}" placeholder="{{ __('adminlte::adminlte.email') }}" autofocus>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                        @if ($errors->has('email'))
                            <div class="invalid-feedback">
                                {{ $errors->first('email') }}
                            </div>
                        @endif
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" placeholder="{{ __('adminlte::adminlte.password') }}">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                        @if ($errors->has('password'))
                            <div class="invalid-feedback">
                                {{ $errors->first('password') }}
                            </div>
                        @endif
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" name="remember" id="remember">
                                <label for="remember">{{ __('adminlte::adminlte.remember_me') }}</label>
                            </div>
                        </div>
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">
                                {{ __('adminlte::adminlte.sign_in') }}
                            </button>
                        </div>
                    </div>
                </form>
                @if ($password_reset_url)
                    <p class="mt-2 mb-1">
                        <a href="{{ $password_reset_url }}">
                            {{ __('adminlte::adminlte.i_forgot_my_password') }}
                        </a>
                    </p>
                @endif
                
                @if ($register_url)
                    <p class="mb-0">
                        <a href="{{ $register_url }}">
                            {{ __('adminlte::adminlte.register_a_new_membership') }}
                        </a>
                    </p>
                @endif
            </div>
        </div>
    </div>
@stop

@section('adminlte_js')
    <script src="{{ asset('vendor/adminlte/dist/js/adminlte.min.js') }}"></script>
    @stack('js')
    @yield('js')
@stop