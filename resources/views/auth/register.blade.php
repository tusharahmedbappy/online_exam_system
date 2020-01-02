@extends('index')
@section('content')
<div class="container">
    <div class="col-md-7 pt-3 m-auto">
        <div class="formHeader">
            <h3 class="text-center">User Register</h3>
            <div class="text-center">
                <div class="btn-wrapper text-center">
                    <a href="#" class="btn  btn-icon">
                        <span class="btn-inner--icon">
                            <img src="{{asset('template/img/icons/common/github.svg')}}">
                        </span>
                        <span class="btn-inner--text">Github</span>
                    </a>
                    <a href="#" class="btn  btn-icon">
                        <span class="btn-inner--icon">
                            <img src="{{asset('template/img/icons/common/google.svg')}}">
                        </span>
                        <span class="btn-inner--text">Google</span>
                    </a>
                </div>
            </div>
            <hr>
        </div>
        <form action="">
                <div class="form-group mb-3">
                        <div class="input-group input-group-alternative">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-user"></i>
                                </span>
                            </div>
                            <input class="form-control" placeholder="Name" type="name">
                        </div>
                    </div>
            <div class="form-group mb-3">
                <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="ni ni-email-83"></i>
                        </span>
                    </div>
                    <input class="form-control" placeholder="Email" type="email">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control" placeholder="Password" type="password">
                </div>
            </div>
            <div class="custom-control custom-control-alternative custom-checkbox">
                <input class="custom-control-input" id=" customCheckLogin" type="checkbox">
                <label class="custom-control-label" for=" customCheckLogin">
                    <span class="text-muted">Remember me</span>
                </label>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-default px-5">Sign up</button>
            </div>
            <div class="loginBtn">
                <a href="{{url('/')}}" class="btn">Have an account_!
                </a>
            </div>
        </form>
    </div>
</div>
@endsection