<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lesson;
use App\Question;
use App\Choice;

use Validator;

use App\Http\Requests\QuestionRequest;

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

    public function store(QuestionRequest $request, $id) {

        foreach($request->choices as $key => $choice) {
            $data = ['choice' => $choice];
            Validator::make($data,[
                'choice' => ['required', 'max:255'],
            ])->validate();
        }

        $lesson = Lesson::find($id);

        $question = $lesson->questions()->create([
            "question" => $request->question,
            "answer_id" => "0",
        ]);

        $question->explanations()->create([
            "explanation" => $request->explanation,
        ]);

        foreach($request->choices as $key => $choice) {
            $choice = $question->choices()->create([
                "choice" => $choice,
            ]);

            if($key + 1 == $request->answer_id){
                $question->answer_id = $choice->id;
                $question->save();
            }
        }

        return redirect('lesson/'.$id.'/questions');
    }

    public function edit($id) {
        $question = Question::find($id);

        return view('questions.edit', compact('question'));
    }

    public function storeEdit(QuestionRequest $request, $id) {
        foreach($request->choices as $key => $choice) {
            $data = ['choice' => $choice];
            Validator::make($data,[
                'choice' => ['required', 'max:255'],
            ])->validate();
        }

        $question = Question::find($id);
        $question->update([
            "question" => $request->question,
            "answer_id" => $request->answer_id,
        ]);

        $question->explanations()->update([
            "explanation" => $request->explanation,
        ]);

        foreach($request->choices as $key => $choice) {
            Choice::find($key)->update([
                "choice" => $choice
            ]);
        }

        return redirect('lesson/'.$question->lesson->id.'/questions');
    }

    public function delete($id) {
         Question::find($id)->delete();
        
        return redirect()->back();
    }
}
