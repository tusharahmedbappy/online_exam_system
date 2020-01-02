@extends('index')
@section('content')
<div class="container">
    <div class="col-md-6 pt-5 m-auto">
        <div class="formHeader">
            <h2 class="text-center">Log In </h2>
            <hr>
        </div>
    <form action="{{url('/login')}}" method="POST">
        @csrf
            <div class="form-group my-3">
                <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" name="email" placeholder="Email" type="email">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control" name="password" placeholder="Password" type="password">
                </div>
            </div>
            <div class="custom-control custom-control-alternative custom-checkbox">
                <input class="custom-control-input" id=" customCheckLogin" type="checkbox">
                <label class="custom-control-label" for=" customCheckLogin">
                    <span class="text-muted">Remember me</span>

                </label>

            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-default px-5 mt-4">Sign in</button>
            </div>
            <div class="registerBtn">
                    <a href="{{url('/register')}}" class="btn">Create an account_! 
                    </a>
            </div>

        </form>
    </div>
</div>
@endsection