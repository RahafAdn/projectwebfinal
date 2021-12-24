<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />

    <link rel="stylesheet" href="{{ asset('vendors') }}/feather/feather.css">
    <link rel="stylesheet" href="{{ asset('vendors') }}/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{ asset('css') }}/vertical-layout-light/style.css">
    <style>
        .form-group label {
            font-weight: 600;
        }
        a.nav-link.active {
    border: 2px solid lightgrey;
    background: white;
    box-shadow: 0px 0px 2px 1px rgb(0 0 0 / 20%);
    font-weight: 600
}

    </style>
</head>

<body>
    @if (!request()->is('login') && !request()->is('register'))
        <div class="container-scroller">
            <!-- partial:partials/_navbar.html -->
            <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
                <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
                    <div class="me-3">
                        <button class="navbar-toggler navbar-toggler align-self-center" type="button"
                            data-bs-toggle="minimize">
                            <span class="icon-menu"></span>
                        </button>
                    </div>
                    <div>
                       <span style="font-weight: 900">{{ config('app.name', 'Laravel') }}</span>
                    </div>
                </div>
                <div class="navbar-menu-wrapper d-flex align-items-top">

                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item dropdown d-none d-lg-block user-dropdown">
                            <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <img class="img-xs rounded-circle" src="/images/faces/face8.jpg" alt="Profile image">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
                                aria-labelledby="UserDropdown">
                                <div class="dropdown-header text-center">
                                    <img class="img-md rounded-circle" src="/images/faces/face8.jpg"
                                        alt="Profile image">
                                    <p class="mb-1 mt-3 font-weight-semibold">{{ auth()->user()->name }}</p>
                                    <p class="fw-light text-muted mb-0">{{ auth()->user()->email }}</p>
                                </div>
                                <a class="dropdown-item" href="{{ asset('logout') }}"><i
                                        class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Sign Out</a>
                            </div>
                        </li>
                    </ul>
                    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                        data-bs-toggle="offcanvas">
                        <span class="mdi mdi-menu"></span>
                    </button>
                </div>
            </nav>
            <!-- partial -->
            <div class="container-fluid page-body-wrapper">

                <nav class="sidebar sidebar-offcanvas " id="sidebar">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link {{request()->is('dashboard') ? 'active' : ''}}" href="{{ asset('dashboard') }}">
                                <i class="mdi mdi-grid-large menu-icon"></i>
                                <span class="menu-title">Dashboard</span>
                            </a>
                        </li>
                        @if (auth()->user()->role == 'PM')
                        <li class="nav-item">
                            <a class="nav-link {{request()->is('project-leader*') ? 'active' : ''}}" href="{{ asset('project-leader') }}">
                                <i class="mdi mdi-book-multiple menu-icon"></i>
                                <span class="menu-title">Project Leader</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{request()->is('staff*') ? 'active' : ''}}" href="{{ asset('staff') }}">
                                <i class="menu-icon mdi mdi-account-switch"></i>
                                <span class="menu-title">Staff</span>
                            </a>
                        </li>
                        @endif
                        @if (auth()->user()->role == 'PL')
                        <li class="nav-item">
                            <a class="nav-link {{request()->is('team-member*') ? 'active' : ''}}" href="{{ asset('team-member') }}">
                                <i class="mdi mdi-source-fork menu-icon"></i>
                                <span class="menu-title">Team member</span>
                            </a>
                        </li>
                        @endif
                        @if (auth()->user()->role == 'PM' || auth()->user()->role == 'PL')
                        <li class="nav-item">
                            <a class="nav-link {{request()->is('project*') ? 'active' : ''}}" href="{{ asset('project') }}">
                                <i class="mdi mdi-projector-screen menu-icon"></i>
                                <span class="menu-title">Project</span>
                            </a>
                        </li>
                        @endif
                    </ul>
                </nav>
                <!-- partial -->
                <div class="main-panel">
                    <div class="content-wrapper">
                        <div class="row">
                            <div class="col-sm-12">
                                @yield('content')
                            </div>
                        </div>
                    </div>
                    <!-- content-wrapper ends -->
                    <!-- partial:partials/_footer.html -->
                    <footer class="footer">
                        <div class="d-sm-flex justify-content-center justify-content-sm-between">

                        </div>
                    </footer>
                    <!-- partial -->
                </div>
            </div>
        </div>
    @else
        <div class="mt-5">
            @yield('content')

        </div>
    @endif

    <!-- plugins:js -->
    <script src="{{ asset('vendors') }}/js/vendor.bundle.base.js"></script>
    <script src="{{ asset('js') }}/template.js"></script>
</body>

</html>
