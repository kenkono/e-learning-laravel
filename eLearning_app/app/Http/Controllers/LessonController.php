<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lesson;
use App\Question;
use Auth;

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

        // user activity
        $courseTaken = Auth::user()->lessons_taken()->create([
            'user_id' => Auth::user()->id,
            'lesson_id' => $id
        ]);

        $answers = request()->question;
        $lesson = Lesson::with(["questions" , "questions.choices"])->find($id);

        foreach($lesson->questions as $question){
            // the number of correct answer
            $user_answer = $answers[$question->id];
            $courseTaken->userAnswers()->create([
                'choice_id' => $user_answer,
                'question_id' => $question->id
            ]);

            $is_correct = $question->answer_id == $user_answer; 
            $question->correct = $question->answer->choice;
            $question->answer_color  = $is_correct ? "answer-blue" : "answer-red";
            $question->user_answer = $user_answer;
        }
        return view('lessons.question', compact('lesson'));

    }

    public function newLessons() {

        return view('lessons.newLesson');
    }

    public function storeNewLessons() {
        request()->validate([
            'lesson_title' => ['required'],
            'lesson_description' => ['required'],
        ]);

        $lesson = new Lesson();
        $lesson->title = request()->lesson_title;
        $lesson->explanation = request()->lesson_description;

        $lesson->save();

        return redirect('lessons');
    }

    public function edit($id) {
        $lesson = Lesson::find($id);

        return view('lessons.edit', compact('lesson'));
    }

    public function storeEdit($id) {
        request()->validate([
            'lesson_title' => ['required'],
            'lesson_description' => ['required'],
        ]);

        $lesson = Lesson::find($id)->update([
            'title' => request()->lesson_title,
            'explanation' => request()->lesson_description,
        ]);

        return redirect('lessons');
    }

    public function delete($id) {
        Lesson::find($id)->delete();
        
        return redirect('lessons');
    }
}
