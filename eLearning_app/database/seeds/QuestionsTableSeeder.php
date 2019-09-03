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
            ['question' => "Your appointment is 13:00. But now time is 12:55 and you cannot be on time maybe. What should I do?",
            'lesson_id' => 1,
            'answer_id' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ],
            ['question' => "You have interview and now you are in front of the door. How should I do to enter the room with politely?",
            'lesson_id' => 1,
            'answer_id' => 5,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ],
            ['question' => "What color is best to choose shooes and socks with formal suit?",
            'lesson_id' => 1,
            'answer_id' => 7,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ],
            ['question' => "Customer company's equity ratio(comparing the total equity in the company to the total assets) is under 10%. What do you feel about that number.",
            'lesson_id' => 2,
            'answer_id' => 10,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ],
            ['question' => "Company's sales amout is 1 billion dollers. Do you think it is a good company.",
            'lesson_id' => 2,
            'answer_id' => 15,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ],
            ['question' => "What is 'PL' means?",
            'lesson_id' => 2,
            'answer_id' => 17,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ],
            ['question' => "Who is the founder at Amazon?",
            'lesson_id' => 3,
            'answer_id' => 19,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ],
            ['question' => "What is the Jeepney?",
            'lesson_id' => 3,
            'answer_id' => 24,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ],
            ['question' => "1GB = ? MB. Please put the number at '?'.",
            'lesson_id' => 3,
            'answer_id' => 26,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ],
            ['question' => "Your computer is very slow now. What matter we should consider?",
            'lesson_id' => 4,
            'answer_id' => 28,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ],
            ['question' => "What 'SaaS' means?",
            'lesson_id' => 4,
            'answer_id' => 31,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ],
            ['question' => "What 'cookie' means?",
            'lesson_id' => 4,
            'answer_id' => 34,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ],
            ]);
        }
}
