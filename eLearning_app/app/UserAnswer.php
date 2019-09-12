<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserAnswer extends Model
{
    protected $guarded = [];

    public function question() {
        return $this->belongsTo('App\Question');
    }

    public function choice() {
        return $this->belongsTo('App\Choice');
    }

    public function userTakenCourse() {
        return $this->belongsTo('App\UserTakencourse' , 'taken_course_id');
    }
}
