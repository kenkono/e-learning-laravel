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
        $lesson = Lesson::find($id);
        $questions = $lesson->questions();
        $choices = $questions->choices();

        return view('lessons.question', compact('lesson', 'questions', 'choices'));
    }

    public function showAnswer() {

        return view('lessons.answer');
    }
}
