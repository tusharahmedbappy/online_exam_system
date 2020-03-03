<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// admin  route
Route::get('/login-ui','AdminController@login_ui');
Route::post('admin-login','AdminController@admin_login');

Route::group(['middleware' => ['admincheck']],function(){
    Route::get('/admin','AdminController@index');
    Route::get('/manage-user','AdminController@manage_user');
    Route::get('/admin-logout','AdminController@admin_logout');
    Route::get('/ques-list','AdminController@ques_list');
    Route::get('/add-ques','AdminController@add_ques');
    Route::post('/insert-ques','AdminController@insert_ques');

    Route::get('/published-ques',function (){
         return view('Admin_panel.Pages.Publish_ques');
    });
    Route::get('/draft-ques',function (){
        return view('Admin_panel.Pages.Draft_ques');
    });
    Route::get('/trash-ques',function (){
        return view('Admin_panel.Pages.Deleted_ques');
    });
    Route::get('/ques_publish/{id}','AdminController@ques_publish');
    Route::get('/ques_unpublished/{id}','AdminController@ques_unpublished');
    Route::get('/ques_delete/{id}','AdminController@ques_delete');
    Route::get('/ques_edit/{id}','AdminController@ques_edit');
    Route::get('/ques-undo/{id}','AdminController@ques_undo');
    Route::get('/delete/{id}','AdminController@delete');
});



// auth Route
Route::get('/register','AuthController@register');
Route::get('/','AuthController@login_ui');
Route::post('/login','AuthController@login_action');
Route::post('register/submit','AuthController@register_singup');

Route::group(['middleware' => 'userCheck'], function () {
    // exam route
    Route::get('/start-exam','ExamController@start_exam');
    Route::get('/exam-info','ExamController@exam_info');
    Route::get('/questions/{id}','ExamController@question_list');
    Route::post('/next/question','ExamController@next');
    Route::get('/user-logout','AuthController@logout');
    Route::get('/result','ExamController@result');
    Route::get('/view-right-ans','ExamController@view_ans');
});


