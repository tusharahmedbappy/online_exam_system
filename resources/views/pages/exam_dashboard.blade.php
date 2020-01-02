@extends('index')
@section('content')
<nav class="navbar navbar-top navbar-horizontal navbar-expand-md navbar-light">
        <div class="container px-4">
        <a class="navbar-brand" href="{{url('/admin')}}">
                <h2>
                    <span class="text-danger">O</span>-<span class="text-primary">E</span>-<span
                        class="text-info">S</span>
                </h2>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbar-collapse-main" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar-collapse-main">
                <!-- Collapse header -->
                <div class="navbar-collapse-header d-md-none">
                    <div class="row">
                        <div class="col-6 collapse-brand">
                            <a href="../index.html">
                                <img src="../assets/img/brand/blue.png">
                            </a>
                        </div>
                        <div class="col-6 collapse-close">
                            <button type="button" class="navbar-toggler" data-toggle="collapse"
                                data-target="#navbar-collapse-main" aria-controls="sidenav-main"
                                aria-expanded="false" aria-label="Toggle sidenav">
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Navbar items -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link nav-link-icon" href="">
                            <span class="nav-link-inner--text">Exam.</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-icon" href="{{url('')}}">
                            <span class="nav-link-inner--text">Contact.</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-icon" href="">
                            <span class="nav-link-inner--text">FAQ?.</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link nav-link-icon" href="" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="text-info ni ni-single-02"></i>
                            <span class="nav-link-inner--text">Tushar</span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                            <div class=" dropdown-header noti-title">
                                <h6 class="text-overflow m-0">Welcome!</h6>
                            </div>
                            <a href="./examples/profile.html" class="dropdown-item">
                                <i class="ni ni-single-02"></i>
                                <span>My profile</span>
                            </a>
                            <a href="./examples/profile.html" class="dropdown-item">
                                <i class="fa fa-edit"></i>
                                <span>Edit profile</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#!" class="dropdown-item">
                                <i class="ni ni-user-run"></i>
                                <span>Logout</span>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @yield('exam_content')
@endsection