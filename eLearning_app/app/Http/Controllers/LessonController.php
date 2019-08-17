<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lesson;

class LessonController extends Controller
{
    public function showLessons() {
        $lessons = Lesson::all();

        return view('lessons.index', compact('lessons'));
    }
}
