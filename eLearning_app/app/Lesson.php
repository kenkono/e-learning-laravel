<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $guarded = [];

    public function questions() {
        return $this->hasMany('App\Question');
    }
}
