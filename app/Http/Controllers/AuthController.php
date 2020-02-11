<?php

namespace App\Http\Controllers;

use App\Model\Register;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\DB;
class AuthController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    public function login_ui()
    {
        return view('auth.login');
    }

    public function login_action(Request $request)
    {
        $validate = $request->validate(
            [
             'email' => 'required ||email',
             'password' => 'required',
            ]
        );
        if ($validate){
            $has_account = DB::table('registers')->where('email',$request->email)->where('password',$request->password)->first();
            if ($has_account){
                Session::put('username', $request->email);
                return redirect('/start-exam');
            }else{
                return back()->with('incorrect','Email and Password are incorrect');
            }
        }
    }

    public  function register_singup(Request $request)
    {
        $validate = $request->validate(
            [
                'name' => 'required ||min:4',
                'email' => 'required ||email',
                'password' => 'required ||min:6',
            ]
        );
        if ($validate){
            $inserData = Register::create(
                [
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => $request->password,
                ]
            );
            if ($inserData){
                Session::put('username', $request->email);
                return redirect('/start-exam');
            }
        }
    }

    public  function  logout()
    {
        session()->flush();
        return redirect('/');
    }






}
