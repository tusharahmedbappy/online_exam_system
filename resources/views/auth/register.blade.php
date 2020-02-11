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
        <form action="{{url('/register/submit')}}" method="post">
            @csrf
                <div class="form-group mb-3">
                        <div class="input-group input-group-alternative">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-user"></i>
                                </span>
                            </div>
                            <input type="text" name="name" class="form-control" placeholder="Name" >
                        </div>
                    @error('name')
                    <strong class="text-danger">{{$message}}</strong>
                    @enderror
                    </div>
            <div class="form-group mb-3">
                <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="ni ni-email-83"></i>
                        </span>
                    </div>
                    <input type="email" name="email" class="form-control" placeholder="Email" >
                </div>
                @error('email')
                <strong class="text-danger">{{$message}}</strong>
                @enderror
            </div>
            <div class="form-group">
                <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input type="password" name="password" class="form-control" placeholder="Password" >
                </div>
                @error('password')
                <strong class="text-danger">{{$message}}</strong>
                @enderror
            </div>
            @if(session('already_used'))
                <strong class="text-danger"> {{session('already_used')}}</strong>

            @endif
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
