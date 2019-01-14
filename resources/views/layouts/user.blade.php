<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    
    <title>Saamaan</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
            </li>
        
        </ul>
        
        <!-- SEARCH FORM -->
        <form class="form-inline ml-3">
            <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </form>
    
    </nav>
    <!-- /.navbar -->
    
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="/" class="brand-link">
            <img src="/img/logo.png" alt="Saamaan Logo" class="brand-image img-circle elevation-3"
                 style="opacity: .8">
            <span class="brand-text font-weight-light">Saamaan</span>
        </a>
        
        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="/img/profile.png" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">
                        {{auth()->user()->name}}
                    </a>
                </div>
            </div>
            
            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item">
                        <a href="{{ route('dashboard') }}" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>
                    @if(auth()->user()->Type=='Client')
                        <li class="nav-item">
                            <a href="{{ route('drivers.create') }}" class="nav-link">
                                <i class="nav-icon fas fa-car"></i>
                                <p>
                                    Be a Driver
                                </p>
                            </a>
                        </li>
                    @endif
                    @if(auth()->user()->Type=='Admin')
                        <li class="nav-item">
                            <a href="{{ route('admin') }}" class="nav-link">
                                <i class="nav-icon fas fa-tools"></i>
                                <p>
                                    Admin
                                </p>
                            </a>
                        </li>
                    @endif
                    <li class="nav-item">
                        <a href="/users/display" class="nav-link">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                Profile
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            <i class="nav-icon fa fa-power-off"></i>
                            <p>
                                {{ __('Logout') }}
                            </p>
                        </a>
                        
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
    
    <!-- Content Wrapper. Contains page content -->
{{--<div class="content-wrapper">--}}
{{--<!-- /.col-md-6 -->--}}
{{--<div class="col-lg-6">--}}
{{--<div class="card">--}}
{{--<div class="card-header no-border">--}}
{{--<div class="d-flex justify-content-between">--}}
{{--<h3 class="card-title">Sales</h3>--}}
{{--<a href="javascript:void(0);">View Report</a>--}}
{{--</div>--}}
{{--</div>--}}
{{--<div class="card-body">--}}
{{--<div class="d-flex">--}}
{{--<p class="d-flex flex-column">--}}
{{--<span class="text-bold text-lg">$18,230.00</span>--}}
{{--<span>Sales Over Time</span>--}}
{{--</p>--}}
{{--<p class="ml-auto d-flex flex-column text-right">--}}
{{--<span class="text-success">--}}
{{--<i class="fa fa-arrow-up"></i> 33.1%--}}
{{--</span>--}}
{{--<span class="text-muted">Since last month</span>--}}
{{--</p>--}}
{{--</div>--}}
{{--<!-- /.d-flex -->--}}
{{----}}
{{--<div class="position-relative mb-4">--}}
{{--<canvas id="sales-chart" height="200"></canvas>--}}
{{--</div>--}}
{{----}}
{{--<div class="d-flex flex-row justify-content-end">--}}
{{--<span class="mr-2">--}}
{{--<i class="fa fa-square text-primary"></i> This year--}}
{{--</span>--}}
{{----}}
{{--<span>--}}
{{--<i class="fa fa-square text-gray"></i> Last year--}}
{{--</span>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--<!-- /.card -->--}}
{{----}}
{{--</div>--}}
{{--<!-- /.content-wrapper -->--}}
{{----}}
{{--<!-- Main Footer -->--}}
{{--<footer class="main-footer">--}}
{{--<!-- To the right -->--}}
{{--<div class="float-right d-none d-sm-inline">--}}
{{--Saaman Default View--}}
{{--</div>--}}
{{--<!-- Default to the left -->--}}
{{--<strong>Copyright &copy; 2014-2018 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.--}}
{{--</footer>--}}
{{--</div>--}}
<!-- ./wrapper -->
    <main class="py-4">
        @yield('content')
    </main>
    <script src="/js/app.js"></script>
</div>
</body>
</html>
