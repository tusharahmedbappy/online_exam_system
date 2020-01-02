@extends('Admin_panel.dashboard')
@section('dashboard_content')
<div class="container">
    <div class="col-md-5 bg-white py-3">
        <small class="text-light"><b>Home / Manage Question / Add Question</b></small>
    </div>
    <div class="card card-body">
        <div class="col-md-10">
            <form action="{{url('/insert-ques')}}" method="POST">
                @csrf
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-2 ">
                            <label for="qnumber">Ques No:</label>
                        </div>
                        <?php
                            $quesrow = DB::table('ques_table')->count();
                            $ques_no = $quesrow +1;
                        ?>

                        <div class="col-md-4 row">
                            <input type="number" 
                                id="qnumber" 
                                class="form-control" 
                                name="quesNumber"
                                placeholder="Ques. no" 
                                required
                                value="{{$ques_no}}"
                                >
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-2 ">
                            <label for="question">Question</label>
                        </div>
                        <div class="col-md-9 row">
                            <input type="text" 
                                id="question" 
                                class="form-control" 
                                name="question" 
                                required
                                placeholder="Question"
                                >
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-2 ">
                            <label for="option">Options</label>
                        </div>
                        <div class="col-md-10">
                            <div class="row">
                                <div class="col-md-3 ">
                                    <label for="option1" class="text-warning">
                                        <small>Option 1</small>
                                    </label>
                                    <input type="text" 
                                        class="form-control" placeholder="Option 1" 
                                        id="option1"
                                        name="option1" 
                                        required
                                        >
                                </div>

                                <div class="col-md-3">
                                    <label for="option2" class="text-warning">
                                        <small>Option 2</small>
                                    </label>
                                    <input type="text" 
                                        required 
                                        class="form-control" 
                                        id="option2" 
                                        placeholder="option 2"
                                        name="option2"
                                        >
                                </div>

                                <div class="col-md-3">
                                    <label for="option3" class="text-warning">
                                        <small>Option 3</small>
                                    </label>
                                    <input type="text" 
                                        required 
                                        class="form-control" 
                                        id="option3" 
                                        placeholder="option 3"
                                        name="option3"
                                        >
                                </div>
                                <div class="col-md-3">
                                    <label for="option4" class="text-warning">
                                        <small>Option 4</small>
                                    </label>
                                    <input type="text" 
                                        required 
                                        class="form-control" 
                                        id="option4" 
                                        placeholder="option 4"
                                        name="option4">
                                </div>
                                <div class="col-md-4">
                                    <label for="right_ans" class="text-warning">
                                        <small>Right Answer</small>
                                    </label>
                                    <input type="number" 
                                        required 
                                        class="form-control" 
                                        placeholder="Option no."
                                        id="right_ans" 
                                        name="right_ans"
                                    >
                                </div>
                            </div>

                            <div class="mt-3">
                                <button type="submit" class="btn btn-info px-5">Add Question</button>
                                @if(session('added'))
                                <span class="text-success">
                                    {{session('added')}}
                                </span>
                                @endif
                            </div>
                        </div>

                    </div>
                </div>


            </form>
        </div>
    </div>
</div>
@endsection