@extends('pages.exam_dashboard')
@section('exam_content')
    <div class="container">
        <div class="card card-body">
            <div class="questioinSection">
                <form action="{{url('/next/question')}}" method="post">
                    @csrf
                    @foreach ($question as $quesData)
                        <div class=" bg-default">
                            <h2 class="text-light text-center">Question {{$quesData->ques_no}} of {{$quesData->count()}} </h2>

                        </div>
                        <h2 class="pl-3">Ques {{$quesData->ques_no}}:- {{$quesData->question}}
                            @error('question')
                            <p class="text-danger">Please Select an Answer</p>
                            @enderror
                            <hr>
                        </h2>

                        <input type="hidden" name="question_id" value="{{$quesData->ques_no}}">
                    @endforeach
                    <div class="">
                        @foreach ($answer as $ansData)
                        <ul class="form-check">
                            <li>
                                <input type="radio" value="{{$ansData->id}}" name="question" id="checkbox1">
                                <label class="">
                                    {{$ansData->ans}}
                                </label>
                            </li>
                        </ul>
                        @endforeach
                    </div>
                    <button class="btn btn-default px-5">Next Question</button>
                </form>
            </div>
        </div>
    </div>
@endsection
