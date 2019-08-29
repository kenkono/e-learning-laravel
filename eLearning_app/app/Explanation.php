<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Explanation extends Model
{
    protected $guarded = [];

    public function explanation() {

        return $this->belongTo('App\Question');

    }
}
