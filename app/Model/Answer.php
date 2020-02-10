<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected  $fillable=[
        'ques_no','right_ans','ans',
    ];
}
