<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>@yield('title', env('APP_NAME'))</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="{{ env('APP_NAME') }}">
    <meta name="author" content="CreateTech">
    <meta name="description" content="{{ env('APP_NAME') }}">
    <meta name="keywords" content="{{ env('APP_NAME') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css"
        integrity="sha256-tXJfXfp6Ewt1ilPzLDtQnJV4hclT9XuaZUKyUvmyr+Q=" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('lte/dl/overlayscrollbars.min.css') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.min.css"
        integrity="sha256-Qsx5lrStHZyR9REqhUF8iQt73X06c8LGIUPzpOhwRrI=" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('lte/dl/apexcharts.css') }}">

    <link rel="stylesheet" href="{{ asset('lte/css/adminlte.css') }}">

    <link rel="stylesheet" href="{{ asset('lib/select2/select2.min.css') }}">

    <link rel="stylesheet" href="{{ asset('lib/flatpickr/flatpickr.css') }}">

    <link rel="stylesheet" href="{{ asset('lib/daterangepicker/daterangepicker.css') }}">

    <link rel="stylesheet" href="{{ asset('lte/dl/jsvectormap.min.css') }}">

    <style>
        .login-logo img {
            user-select: none;
            width: 60%;
            object-fit: cover;
        }

        .login-box-msg {
            opacity: 0.8;
            user-select: none;
        }

        .btn-primary {
            background-color: black !important;
            border-color: black;
        }

        .form-check-input:checked {
            background-color: black !important;
            border-color: black;
        }
    </style>
</head>

<body class="login-page">
    <div class="login-box">
        <div class="login-logo">
            <img src="{{ asset('images/logo.png') }}" alt="logo" loading="lazy">
        </div> <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Sign in to start your session</p>
                <form action="{{ route('login') }}" method="POST" autocomplete="off">
                    @csrf

                    <div class="input-group mb-3"> <input type="text" name="username"
                            class="form-control @error('username') is-invalid @enderror" placeholder="Username"
                            value="{{ old('username') }}">
                        <div class="input-group-text"><i class="bi bi-person-circle"></i> </div>
                    </div>


                    <div class="input-group mb-3"> <input type="password" name="password"
                            class="form-control @error('password') is-invalid @enderror" placeholder="Password">
                        <div class="input-group-text"> <span class="bi bi-lock-fill"></span> </div>
                    </div>

                    @error('username')
                        <div class="mb-2">
                            <div class="text-danger">{{ $message }}</div>
                        </div>
                    @enderror

                    @error('password')
                        <div class="mb-2">
                            <div class="text-danger">{{ $message }}</div>
                        </div>
                    @enderror

                    <div class="row">
                        <div class="col-8">
                            <div class="form-check"> <input class="form-check-input" name="remeber" type="checkbox"
                                    value="" id="flexCheckDefault"> <label class="form-check-label"
                                    for="flexCheckDefault">
                                    Remember Me
                                </label> </div>
                        </div>


                        <div class="col-4">
                            <div class="d-grid gap-2"> <button type="submit" class="btn btn-primary">Sign In</button>
                            </div>
                        </div> <!-- /.col -->
                    </div> <!--end::Row-->
                </form>
            </div> <!-- /.login-card-body -->
        </div>
    </div> <!-- /.login-box --> <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <script src="{{ asset('adminlte/dl/overlayscrollbars.browser.es6.min.js') }}"></script>
    <script src="{{ asset('adminlte/dl/popper.min.js') }}"></script>
    <script src="{{ asset('adminlte/dl/bootstrap.min.js') }}"></script>
    <script src="{{ asset('adminlte/js/adminlte.js') }}"></script>
    <script>
        const SELECTOR_SIDEBAR_WRAPPER = ".sidebar-wrapper";
        const Default = {
            scrollbarTheme: "os-theme-light",
            scrollbarAutoHide: "leave",
            scrollbarClickScroll: true,
        };
        document.addEventListener("DOMContentLoaded", function() {
            const sidebarWrapper = document.querySelector(SELECTOR_SIDEBAR_WRAPPER);
            if (
                sidebarWrapper &&
                typeof OverlayScrollbarsGlobal?.OverlayScrollbars !== "undefined"
            ) {
                OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
                    scrollbars: {
                        theme: Default.scrollbarTheme,
                        autoHide: Default.scrollbarAutoHide,
                        clickScroll: Default.scrollbarClickScroll,
                    },
                });
            }
        });
    </script> <!--end::OverlayScrollbars Configure--> <!--end::Script-->
</body><!--end::Body-->

</html>
