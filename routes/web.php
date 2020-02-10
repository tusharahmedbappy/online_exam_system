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
});



// auth Route
Route::get('/register','AuthController@register');
Route::get('/','AuthController@login_ui');
Route::post('/login','AuthController@login_action');

// exam route
Route::get('/exam-info','ExamController@exam_info');
Route::get('/questions/{id}','ExamController@question_list');
Route::post('/next/question','ExamController@next');
