<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'avatar'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function following() {
        return $this->belongsToMany('App\User', 'followers', 'follower_id', 'followed_id');
    }

    public function followers() {
        return $this->belongsToMany('App\User', 'followers', 'followed_id', 'follower_id');
    }

    public function is_following($followed_id) {
        if($this->following()->where('followed_id', $followed_id)->count() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function lessons_taken(){
        return $this->hasMany("App\UserTakenCourse" , 'user_id');
    }

    public function course_status($id)
    {
        $lesson_taken = $this->lessons_taken()->where('lesson_id' , $id)->latest('created_at')->first();

        if($lesson_taken){
            $correct = 0;
            
            foreach ($lesson_taken->userAnswers as $answer) {
                if($answer->choice_id == $answer->question->answer_id){
                    $correct++;
                }
            }
            
            return 'Result '.$correct.' / '.$lesson_taken->userAnswers->count();
        }else{
            return "Not Active";
        }
    }
}
