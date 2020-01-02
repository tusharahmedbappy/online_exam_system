<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExamController extends Controller
{
    public function exam_info()
    {
        return view('pages.exam_info');
    }
}
