<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserTakenCourse extends Model
{
    protected $guarded = [];

    protected $table= "userTakenCourses";

    public function userAnswers() {
        return $this->hasMany('App\UserAnswer', 'taken_course_id');
    }

    public function user() {
        return $this->belongsTo('App\User' , 'lesson_id');
    }

    
}
