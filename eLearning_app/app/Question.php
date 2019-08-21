<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $guarded = [];

    public function lesson() {

        return $this->belongTo('App\Lesson');

    }

    public function choices() {
        return $this->hasMany('App\Choice');
    }

    public function explanations() {
        return $this->hasOne('App\Explanation');
    }

    public function answer() {
        return $this->belongsTo('App\Choice');
    }
}
