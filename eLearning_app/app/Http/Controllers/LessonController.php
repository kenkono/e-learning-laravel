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

    public function showAnswers($id) {

        $answers = request()->question;
        $lesson = Lesson::with(["questions" , "questions.choices"])->find($id);

        foreach($lesson->questions as $question){
            $user_answer = $answers[$question->id];
            $is_correct = $question->answer_id == $user_answer; 
            $question->correct = $question->answer->choice;
            $question->answer_color  = $is_correct ? "answer-blue" : "answer-red";
            $question->user_answer = $user_answer;
        }

        return view('lessons.question', compact('lesson'));
    }
}
