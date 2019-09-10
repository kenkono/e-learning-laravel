<?php

use Illuminate\Database\Seeder;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Lesson::class , 5)->create()->each(function ($lesson){
            
            $lesson->questions()
                   ->saveMany(factory(App\Question::class , 10)
                        ->make()
                        ->each(function ($question){
                            $question->choices()
                                     ->saveMany(factory(App\Choice::class , 4)
                                     ->create(["question_id" => $question->id]));
                        }));  
        });
    }
}
