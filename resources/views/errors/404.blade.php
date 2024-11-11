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
        .page-404 {
            display: flex;
            width: 100vw;
            height: 100vh;
            justify-content: center;
            align-items: center;
        }

        h1 {
            font-size: 10rem;
            font-weight: bold;
            user-select: none;
        }

        h3 {
            text-align: center;
            opacity: 0.8;
            user-select: none;
        }
    </style>
</head>

<body class="page-404">
    <div>
        <h1>404</h1>
        <h3>Not Found</h3>
    </div>
</body><!--end::Body-->

</html>
