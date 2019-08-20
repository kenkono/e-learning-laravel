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

    public function showQuestions($id) {
        $lesson = Lesson::with(["questions" , "questions.choices"])->find($id);
        
        return view('lessons.question', compact('lesson'));
    }

    public function showAnswers() {

        return view('lessons.answer');
    }
}
