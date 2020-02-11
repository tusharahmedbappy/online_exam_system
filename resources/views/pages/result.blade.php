@extends('pages.exam_dashboard')
@section('exam_content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center text-warning">Test has been finished let's check result! <hr></h1>
            </div>
            <div class="col-md-6">
                <div class="card card-body optional">
                    <div class="collapse" id="collapseExample">
                        <?php
                            $userTrack = session()->get('username');
                            $userData = \App\Model\Register::where(['email'=>$userTrack])->get();
                            foreach ($userData as $data){
                                $user_id =  $data->id;
                               $resultTrack = \App\Model\Selected_Ans::where('user_id',$user_id)->get();

                            }
                        ?>
                        <h3>Total Marks = 100  <a href="{{url('/view-right-ans')}}">View Right answer</a></h3>
                            <h4>You done. <strong class="text-warning">{{($resultTrack->count() / 10 )*100 .'%'}} </strong>Of <span class="text-success">100</span></h4>

                    </div>
                    <img src="{{asset('template/img/result.jpg')}}" alt="">

                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-body">
                    <h2 class="text-center text-warning">Check Result<hr></h2>
                    <div class="text-center mb-5">
                        <a  data-toggle="collapse" href="#collapseExample" class="btn btn-outline-info px-5">See Result</a>
                    </div>
                    <small class="mt-5 text-muted" ><span class="bg-warning">!</span> We want to check your primary knowledge of technology</small>
                </div>
            </div>
        </div>
    </div>
@endsection
