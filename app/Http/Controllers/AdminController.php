<?php

namespace App\Http\Controllers;

use App\Admin_login;
use App\Model\Deleted_Data;
use App\Model\Question;
use Illuminate\Http\Request;
use Session;
use DB;
class AdminController extends Controller
{
    public function index()
    {
        return view('Admin_panel.home');
    }
    public function login_ui()
    {
       return  view('Admin_panel.admin_panel_login');
    }
    public function admin_login(Request $request)
    {
        $validate = $request->validate(
            [
                'email' => 'required ||email',
                'password' => 'required',
            ]
        );

        if($validate){
            $verify = Admin_login::where('email',$request->email)->where('password',$request->password)->first();
            if($verify){
                Session::put('adminUser',$request->email);
                return redirect('/admin');
            }else{
                return back()->with('notmatch','Your email and password are incorrect!');
            }
        }
    }

    public function manage_user()
    {
        return view('Admin_panel.manage_user');
    }

    public function admin_logout()
    {
        Session::flash('adminUser');
        return redirect('/login-ui');
    }

    public function ques_list()
    {
        return view('Admin_panel.allQues');
    }
    public function add_ques()
    {
        return view('Admin_panel.addQues');
    }

    public function insert_ques(Request $request)
    {
        $ques_no = $request->quesNumber;
        $question = $request->question;

        $ans = array();
        $ans[1] = $request->option1;
        $ans[2] = $request->option2;
        $ans[3] = $request->option3;
        $ans[4] = $request->option4;
        $right_ans =$request->right_ans;

        if(!empty($ques_no) && !empty($question)){
            $ques_data = [
                'ques_no' => $ques_no,
                'question' => $question,
            ];
            $insert_question = DB::table('questions')->insert($ques_data);
            if($insert_question){
                foreach($ans as $key => $optionName){
                    if($right_ans == $key){
                        $ans_data = [
                            'ques_no' => $request->quesNumber,
                            'right_ans' => 1,
                            'ans' => $optionName
                        ];

                    }else{
                        $ans_data = [
                            'ques_no' => $request->quesNumber,
                            'right_ans' => 0,
                            'ans' => $optionName
                        ];
                    }
                    $insert_ans = DB::table('answers')->insert($ans_data);
                        if($insert_ans){
                            continue;
                        }
              }
              return back()->with('added','Question added success!');
            }
        }
    }


    public function  ques_publish($id)
    {
       $updated =  Question::where('id',$id)->update(['status'=>0]);
       if ($updated){
           Question::where('id',$id)->update(['draft_status'=>1]);
           return back()->with('deactived','Question Deactived');
       }
    }
    public  function ques_unpublished($id)
    {
        $updated =  Question::where('id',$id)->update(['status'=>1]);
        if ($updated){
            Question::where('id',$id)->update(['draft_status'=>0]);
            return redirect('/ques-list')->with('active','Question Active');
        }
    }
    public  function ques_delete($id)
    {
        $deleted_data = Question::where('id',$id)->update(['trash_status'=>1]);
        if ($deleted_data){
            $updated =  Question::where('id',$id)->update(['status'=>0]);
            if ($updated){
                return redirect('/ques-list')->with('deactived','Question Deactived');
            }
        }
    }
    public function ques_edit($id)
    {
        return Question::where('id',$id)->get();
    }

    public function ques_undo($id)
    {
            $deleted_data = Question::where('id',$id)->update(['trash_status'=>0]);
        if ($deleted_data){
            $updated =  Question::where('id',$id)->update(['status'=>1]);
            if ($updated){
                return redirect('/ques-list')->with('active','Question Active');
            }
        }
    }

    public function delete($id)
    {
         Deleted_Data::where('id',$id)->delete();
         return redirect('ques-list');
    }

}
