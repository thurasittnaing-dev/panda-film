<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="title" content="{{ env('APP_NAME') }}">
    <meta name="author" content="CreateTech">
    <meta name="description" content="YoteShin-App">
    <meta name="keywords" content="{{ env('APP_NAME') }}">
    <title>{{ env('APP_NAME') }} | @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('lib/bootstrap5/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.min.css"
        integrity="sha256-Qsx5lrStHZyR9REqhUF8iQt73X06c8LGIUPzpOhwRrI=" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/frontend.css') }}">
    @yield('css')
</head>

<body>

    <nav class="navbar navbar-light navbar-expand-lg bg-body-tertiary main-bar">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/') }}">Panda Film</a>
            <button class="navbar-toggler shadow-none border-0" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Movie</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Series</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                </ul>

                <div>
                    <button type="button" class="btn btn-filter" data-bs-toggle="modal"
                        data-bs-target="#searchModal"><i class="bi bi-filter"></i> Filter</button>
                    @include('layouts.ui-search')
                </div>
            </div>
        </div>
    </nav>

    <div class="content-wrapper d-flex justify-content-center">
        <div class="content-ratio">
            @include('layouts.carousel')

            @yield('content')
        </div>
    </div>

    @include('layouts.footer')

    <script src="{{ asset('lib/bootstrap5/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.js') }}"></script>
    @yield('js')
</body>

</html>
