@extends('index')
@section('content')
<div class="container">
    <div class="col-md-6 pt-5 m-auto">
        <div class="formHeader">
            <h2 class="text-center">Admin Panel </h2>
            <hr>
        </div>
        <form action="{{url('/admin-login')}}" method="POST">
            @csrf
            @if (session('notmatch'))
            <small class="text-danger">
                {{session('notmatch')}}
            </small>
            @endif
            <div class="form-group my-3">
                <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" name="email" placeholder="Email" type="email">
                </div>
                @if (session('email'))
                <small class="text-danger">
                    {{session('email')}}
                </small>
                @endif

            </div>
            <div class="form-group">
                <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control" name="password" placeholder="Password" type="password">
                </div>
                @if (session('password'))
                <small class="text-danger">
                    {{session('password')}}
                </small>
                @endif
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

        </form>
    </div>
</div>
@endsection