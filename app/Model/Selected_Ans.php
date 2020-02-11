<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Selected_Ans extends Model
{
    protected  $fillable = [
        'user_id','ques_id','right_ans',
    ];
}
