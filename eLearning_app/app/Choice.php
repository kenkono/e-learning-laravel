<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Choice extends Model
{
    protected $guarded = [];

    public function question() {

        return $this->belongTo('App\Question');

    }
}
