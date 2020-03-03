<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected  $fillable = [
        'ques_no','question','status','trash_status','draft_status'
    ];
}
