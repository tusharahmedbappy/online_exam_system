<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ques_table extends Model
{
    public function ques_ans(){
        return $this->hasMany('App\Ans_table');
    }
}
