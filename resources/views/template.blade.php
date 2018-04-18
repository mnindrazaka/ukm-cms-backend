<!--
* CoreUI - Free Bootstrap Admin Template
* @version v2.0.0-beta.0
* @link https://coreui.io
* Copyright (c) 2018 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <!-- Icons-->
    <link href="{{ asset('vendors/coreui/vendors/css/flag-icon.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/coreui/vendors/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/coreui/vendors/css/simple-line-icons.css') }}" rel="stylesheet">
    <!-- Main styles for this application-->
    <link href="{{ asset('vendors/coreui/css/style.css') }}" rel="stylesheet">
    {{-- Datatables --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/datatables/css/datatables.min.css') }}"/>
    <title>@yield('title')</title>
</head>
<body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
<header class="app-header navbar">
    <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">
        ADMIN&nbsp;<b>BEM</b>
    </a>

    <button class="navbar-toggler sidebar-toggler d-md-down-none invisible" type="button" data-toggle="sidebar-lg-show">
        <span class="navbar-toggler-icon"></span>
    </button>

    <ul class="nav navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <span class="font-weight-bold">{{{ Auth::user()->username}}}</span>
                <img class="img-avatar" src="{{ asset('vendors/coreui/img/avatars/6.jpg') }}" alt="admin@bootstrapmaster.com">
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-header text-center">
                    <strong>Account</strong>
                </div>
                <a class="dropdown-item" href="#">
                    <i class="fa fa-bell-o"></i> Updates
                    <span class="badge badge-info">42</span>
                </a>
                <a class="dropdown-item" href="#">
                    <i class="fa fa-envelope-o"></i> Messages
                    <span class="badge badge-success">42</span>
                </a>
                <a class="dropdown-item" href="#">
                    <i class="fa fa-tasks"></i> Tasks
                    <span class="badge badge-danger">42</span>
                </a>
                <a class="dropdown-item" href="#">
                    <i class="fa fa-comments"></i> Comments
                    <span class="badge badge-warning">42</span>
                </a>
                <div class="dropdown-header text-center">
                    <strong>Settings</strong>
                </div>
                <a class="dropdown-item" href="#">
                    <i class="fa fa-user"></i> Profile</a>
                <a class="dropdown-item" href="#">
                    <i class="fa fa-wrench"></i> Settings</a>
                <a class="dropdown-item" href="#">
                    <i class="fa fa-usd"></i> Payments
                    <span class="badge badge-secondary">42</span>
                </a>
                <a class="dropdown-item" href="#">
                    <i class="fa fa-file"></i> Projects
                    <span class="badge badge-primary">42</span>
                </a>
                <div class="divider"></div>
                <a class="dropdown-item" href="#">
                    <i class="fa fa-shield"></i> Lock Account</a>
                <a class="dropdown-item" href="{{ url('/logout') }}">
                    <i class="fa fa-lock"></i> Logout</a>
            </div>
        </li>
    </ul>
</header>
<div class="app-body">
    <div class="sidebar">
        <nav class="sidebar-nav">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">
                        <i class="nav-icon icon-speedometer"></i> Beranda
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/ukm') }}">
                        <i class="nav-icon icon-organization"></i> Data UKM
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/admin') }}">
                        <i class="nav-icon icon-user"></i> Data Admin
                    </a>
                </li>
            </ul>
        </nav>
        <button class="sidebar-minimizer brand-minimizer" type="button"></button>
    </div>
    <main class="main">
        <!-- Breadcrumb-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ url('/') }}">beranda</a>
            </li>

            @php $segments = ''; @endphp
            @foreach(Request::segments() as $key => $segment)
                @php $segments .= '/' . $segment; @endphp
                <li class="breadcrumb-item">
                    @if($key + 1 < count(Request::segments()))
                        <a href="{{ url($segments) }}">{{ $segment }}</a>
                    @else
                        <span>{{ $segment }}</span>
                    @endif
                </li>
            @endforeach
        </ol>
        <div class="container-fluid">
            <h3 class="mb-3">@yield('title')</h3>
            @yield('content')
        </div>
    </main>
</div>
<footer class="app-footer">
    <div>
        <span>Copyright &copy; 2018</span>
        <a href="http://wri.polinema.ac.id">Workshop Riset Informatika</a>
    </div>
    <div class="ml-auto">
        <span>Powered by</span>
        <a href="http://bem.polinema.ac.id/">BEM Polinema</a>
    </div>
</footer>
<!-- Bootstrap and necessary plugins-->
<script src="{{ asset('vendors/coreui/vendors/js/jquery.min.js') }}"></script>
<script src="{{ asset('vendors/coreui/vendors/js/popper.min.js') }}"></script>
<script src="{{ asset('vendors/coreui/vendors/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('vendors/coreui/vendors/js/pace.min.js') }}"></script>
<script src="{{ asset('vendors/coreui/vendors/js/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('vendors/coreui/vendors/js/coreui.min.js') }}"></script>
{{-- Datatables --}}
<script type="text/javascript" src="{{ asset('vendors/datatables/js/datatables.min.js') }}"></script>
<!-- Plugins and scripts required by this view-->
<script src="{{ asset('vendors/coreui/vendors/js/Chart.min.js') }}"></script>
<script src="{{ asset('vendors/coreui/vendors/js/custom-tooltips.min.js') }}"></script>
<script src="{{ asset('vendors/coreui/js/main.js') }}"></script>
{{-- My Custom JS --}}
<script src="{{ asset('js/custom.js') }}"></script>
</body>
</html>