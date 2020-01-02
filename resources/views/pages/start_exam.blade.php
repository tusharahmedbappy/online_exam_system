@extends('pages.exam_dashboard')
@section('exam_content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center text-warning">Welcome to online exam - Start Now <hr></h1>
        </div>
        <div class="col-md-6">
            <div class="card card-body optional">
            <img src="{{asset('template/img/theme/online.png')}}" alt="">
            </div>
        </div>
        <div class="col-md-6">
            <div class="card card-body">
                <h2 class="text-center text-warning">Start Exam <hr></h2>
                   <div class="text-center mb-5">
                    <a href="{{url('/exam-info')}}" class="btn btn-outline-info px-5">Start Now</a>
                   </div>
                   <small class="mt-5 text-muted" ><span class="bg-warning">!</span> We want to check your primary knowledge of technology</small>
            </div>
        </div>
    </div>
</div>
@endsection