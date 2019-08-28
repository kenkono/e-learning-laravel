<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lesson;

class QuestionController extends Controller
{
    public function show($id) {
        $lesson = Lesson::find($id);

        return view('questions.index', compact('lesson'));
    }

    public function new($id) {

        $lesson = Lesson::find($id);

        return view('questions.newQuestion', compact('lesson'));
    }

    public function store($id) {

        $lesson = Lesson::find($id);
        $question = $lesson->questions()->create([
            "question" => request()->question,
            "answer_id" => "0",
        ]);

        foreach(request()->choices as $key => $choice) {
            $choice = $question->choices()->create([
                "choice" => $choice,
            ]);

            if($key + 1 == request()->answer_id){
                $question->answer_id = $choice->id;
                $question->save();
            }
        }

        return redirect('lesson/'.$id.'/questions');
    }
}
