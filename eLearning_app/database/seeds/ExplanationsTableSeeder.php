<?php

use Illuminate\Database\Seeder;

class ExplanationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('explanations')->insert([
            ['explanation' => "is simply dummy text of the printing and typesetting industry.",
            'question_id' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ],
            ['explanation' => "is simply dummy text of the printing and typesetting industry.",
            'question_id' => 2,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ],
            ['explanation' => "is simply dummy text of the printing and typesetting industry.",
            'question_id' => 3,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ],
            ['explanation' => "is simply dummy text of the printing and typesetting industry.",
            'question_id' => 4,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ],
            ['explanation' => "is simply dummy text of the printing and typesetting industry.",
            'question_id' => 5,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ],
            ['explanation' => "is simply dummy text of the printing and typesetting industry.",
            'question_id' => 6,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ],
            ['explanation' => "is simply dummy text of the printing and typesetting industry.",
            'question_id' => 7,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ],
            ['explanation' => "is simply dummy text of the printing and typesetting industry.",
            'question_id' => 8,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ],
            ['explanation' => "is simply dummy text of the printing and typesetting industry.",
            'question_id' => 9,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ],
            
        ]);
    }
}
