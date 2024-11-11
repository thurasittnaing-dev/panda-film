<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="title" content="{{ env('APP_NAME') }}">
    <meta name="author" content="CreateTech">
    <meta name="description" content="YoteShin-App">
    <meta name="keywords" content="{{ env('APP_NAME') }}">
    <title>{{ env('APP_NAME') }} | @yield('title')</title>


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

    <link rel="stylesheet" href="{{ asset('lib/signature/jquery-ui.css') }}">

    <link rel="stylesheet" href="{{ asset('lib/signature/signature.css') }}">

    <link rel="stylesheet" href="{{ asset('css/global.css') }}">

    @yield('css')
</head>

<body class="layout-fixed sidebar-expand-lg">
    <div class="app-wrapper">
        <nav class="app-header navbar navbar-expand bg-body">
            <div class="container-fluid">
                <ul class="navbar-nav">
                    <li class="nav-item"> <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button">
                            <i class="bi bi-list"></i> </a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"> <a class="nav-link" href="#" data-lte-toggle="fullscreen"> <i
                                data-lte-icon="maximize" class="bi bi-arrows-fullscreen"></i> <i
                                data-lte-icon="minimize" class="bi bi-fullscreen-exit" style="display: none;"></i>
                        </a> </li>
                    <li class="nav-item dropdown user-menu"> <a href="#" class="nav-link dropdown-toggle"
                            data-bs-toggle="dropdown"> <span class="d-none d-md-inline">Thura Sitt Naing</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                            <li class="user-header" style="background-color:#fff;">
                                <img src="{{ asset('images/avater.jpg') }}" class="rounded-circle shadow"
                                    alt="User Image">
                                <p>
                                    Thura Sitt Naing
                                    <small>Member since </small>
                                </p>
                            </li>
                            <li class="user-footer">
                                <a href="" class="btn btn-default btn-flat">Profile</a>
                                <a href="#" onclick="onClickSubmit(event,'signout-form')"
                                    class="btn btn-default btn-flat float-end">Sign
                                    out</a>

                                <form action="{{ route('logout') }}" method="POST" id="signout-form">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <aside class="app-sidebar shadow" data-bs-theme="dark">
            <div class="sidebar-brand" style="background-color:#fff;">
                <a href="{{ url('/') }}" class="brand-link">
                    <img src="{{ asset('images/logo.png') }}" alt="{{ env('APP_NAME') }} --}}">
                </a>
            </div>
            {{-- MENUS --}}
            @include('layouts.sidebar')

        </aside>
        <main class="app-main">
            {{-- CONTENT HEADER --}}
            {{-- @yield('breadcrumbs') --}}


            {{-- CONTENT --}}
            <div class="app-content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
        </main>

        <div class="toast-container position-fixed bottom-0 end-0 p-3">
            <div id="success" class="toast toast-success" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header"> <strong class="me-auto">Success</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body" id="successBody"></div>
            </div>

            <div id="warning" class="toast toast-warning" role="alert" aria-live="assertive"
                aria-atomic="true">
                <div class="toast-header"> <strong class="me-auto">Warning</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body" id="warningBody"></div>
            </div>

            <div id="error" class="toast toast-danger" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header"> <strong class="me-auto">Error</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body" id="errorBody"></div>
            </div>
        </div>

        <footer class="app-footer">
            <div class="float-end d-none d-sm-inline text-primary">{{ env('APP_NAME') }} </div>
            <strong>
                Copyright &copy; {{ date('Y') }} &nbsp;
            </strong>
        </footer>
    </div>



    <script src="{{ asset('lte/dl/overlayscrollbars.browser.es6.min.js') }}"></script>
    <script src="{{ asset('lte/dl/popper.min.js') }}"></script>
    <script src="{{ asset('lte/dl/bootstrap.min.js') }}"></script>
    <script src="{{ asset('lte/js/adminlte.js') }}"></script>
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/moment.min.js') }}"></script>
    <script src="{{ asset('lib/select2/select2.min.js') }}"></script>
    <script src="{{ asset('lib/signature/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('lib/signature/signature.js') }}"></script>
    <script src="{{ asset('lib/apexchart/apexchart.js') }}"></script>
    <script src="{{ asset('lib/flatpickr/flatpickr.js') }}"></script>
    <script src="{{ asset('lib/daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
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
    </script> <!-- sortablejs -->
    <script script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js"
        integrity="sha256-ipiJrswvAR4VAx/th+6zWsdeYmVae0iJuiR+6OqHJHQ=" crossorigin="anonymous"></script>
    <script>
        const connectedSortables =
            document.querySelectorAll(".connectedSortable");
        connectedSortables.forEach((connectedSortable) => {
            let sortable = new Sortable(connectedSortable, {
                group: "shared",
                handle: ".card-header",
            });
        });

        const cardHeaders = document.querySelectorAll(
            ".connectedSortable .card-header",
        );
        cardHeaders.forEach((cardHeader) => {
            cardHeader.style.cursor = "move";
        });
    </script>

    @yield('js')
</body>

</html>
