<?php

namespace App\Http\Controllers;

use App\Model\Answer;
use App\Model\Question;
use App\Ques_table;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class ExamController extends Controller
{
    public function exam_info()
    {
        return view('pages.exam_info');
    }

    public function question_list($id)
    {
        $ques = Question::where('ques_no',$id)->get();
        $ans = Answer::where('ques_no',$id)->get();
        return view('pages.exam_plate',['question'=>$ques],['answer'=>$ans]);
    }
    public function next(Request $request)
    {
        $question_id = $request->questin_id + 1;
        Answer::where('id', $request->question)->get();
//        return url('next/question',$question_id);
        return redirect(url('/questions',['id'=>$question_id]));
    }


}


