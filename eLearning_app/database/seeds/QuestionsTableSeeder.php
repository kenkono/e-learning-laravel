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
        DB::table('questions')->insert([
            ['question' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.",
            'lesson_id' => 1,
            'answer_id' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ],
            ['question' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.",
            'lesson_id' => 1,
            'answer_id' => 4,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ],
            ['question' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.",
            'lesson_id' => 1,
            'answer_id' => 7,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ],
            ['question' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.",
            'lesson_id' => 2,
            'answer_id' => 10,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ],
            ['question' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.",
            'lesson_id' => 2,
            'answer_id' => 13,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ],
            ['question' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.",
            'lesson_id' => 2,
            'answer_id' => 16,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ],
            ['question' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.",
            'lesson_id' => 3,
            'answer_id' => 19,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ],
            ['question' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.",
            'lesson_id' => 3,
            'answer_id' => 22,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ],
            ['question' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.",
            'lesson_id' => 3,
            'answer_id' => 25,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ],
            ]);
        }
}
