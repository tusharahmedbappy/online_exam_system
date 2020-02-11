<?php

namespace App\Http\Controllers;

use App\Model\Answer;
use App\Model\Question;
use App\Model\Register;
use App\Model\Selected_Ans;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
class ExamController extends Controller
{
    public  function start_exam()
    {
        return view('pages.start_exam');
    }
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
            $validate = $request->validate([
                'question' => 'required',
            ]);
            if ($validate)
            {
                $question_next_id = $request->question_id + 1;
                $question = Answer::where('id', $request->question)->get();
                foreach ($question as $questionData) {
                    $questionId = $questionData->id;
                    $selectAns = $questionData->right_ans;
                    if ($selectAns == 1) {
                        $user = session()->get('username');
                        $user = Register::where('email', $user)->get();
                        foreach ($user as $userData) {
                            $user_id = $userData->id;
                            $insertAnser = Selected_Ans::create(
                                [
                                    'user_id' => $user_id,
                                    'ques_id' => $questionId,
                                    'right_ans' => $selectAns,
                                ]
                            );
                            if ($insertAnser) {
                                if ($request->question_id <10){
                                    return redirect(url('/questions', ['id' => $question_next_id]));
                                }else {
                                    return redirect('/result');
                                }

                            }
                        }

                    }else{
                        if ($request->question_id <10){
                            return redirect(url('/questions', ['id' => $question_next_id]));
                        }else {
                            return redirect('/result');
                        }
                    }


                }
            }


    }

    public  function  result()
    {
        return view('pages.result');
    }
    public  function  view_ans()
    {
        $userTrack = session()->get('username');
        $userData = \App\Model\Register::where(['email'=>$userTrack])->get();
        foreach ($userData as $data){
            $user_id =  $data->id;
            $resultTrack = \App\Model\Selected_Ans::where('user_id',$user_id)->delete();
        }

          $result = Answer::where('right_ans',1)->get();

    }


}


