<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Explanation extends Model
{
    public function explanation() {

        return $this->belongTo('App\Question');

    }
}
