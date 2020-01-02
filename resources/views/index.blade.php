@include('pages.header')

<div class="mainBody">
    <div class="container">
        <div class="col-md-10 col-lg-10 col-sm-10 padding-5 m-auto">
            <div class="contentBody">
                @yield('content')
                <!-- <div class="my-3">
                    <a href="{{url('/register')}}" class="btn btn-danger">Register</a>
                    <a href="{{url('/login')}}" class="btn btn-danger">Login</a>
                </div> -->
            </div>
        </div>
    </div>
</div>
@include('pages.footer')