<?php

use Illuminate\Database\Seeder;

class ChoicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('choices')->insert([
            ['choice' => "You should call to customer and say apologizement as soon as possible.",
            'question_id' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ],
            ['choice' => "You should go to the customer company as soon as possible without notice.",
            'question_id' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ],
            ['choice' => "It is difficult to arrive on time. So go to the cafe and relax.",
            'question_id' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ],
            ['choice' => "Two knocks",
            'question_id' => 2,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ],
            ['choice' => "Three knocks",
            'question_id' => 2,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ],
            ['choice' => "Break the door",
            'question_id' => 2,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ],
            ['choice' => "Choose same color with Shoes and socks(Ex.Black or Brown).",
            'question_id' => 3,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ],
            ['choice' => "You can choose any colors becasue Fashion means freedom.",
            'question_id' => 3,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ],
            ['choice' => "Shoes and socks are out of date. I would like to choose barefoot.",
            'question_id' => 3,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ],
            ['choice' => "So dangerous finance. Need to consider that proceed business or not.",
            'question_id' => 4,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ],
            ['choice' => "Customer is good person. I do not want to break the relationship.",
            'question_id' => 4,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ],
            ['choice' => "What is the equity ratio?",
            'question_id' => 4,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ],
            ['choice' => "I like Halohalo than sales amount.",
            'question_id' => 5,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ],
            ['choice' => "So many sales amout. There is no doubt that this company id good.",
            'question_id' => 5,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ],
            ['choice' => "Cannot answer this question. How about cash and so on? Maybe they have so many labor cost and they do not have much money.",
            'question_id' => 5,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ],
            ['choice' => "Perfect Liberty",
            'question_id' => 6,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ],
            ['choice' => "Profit and Loss Statement",
            'question_id' => 6,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ],
            ['choice' => "Product Lifecycle",
            'question_id' => 6,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ],
            ['choice' => "Jeff Bezos",
            'question_id' => 7,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ],
            ['choice' => "Hiroshi Mikitani",
            'question_id' => 7,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ],
            ['choice' => "Mario",
            'question_id' => 7,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ],
            ['choice' => "The food that is tasty.",
            'question_id' => 8,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ],
            ['choice' => "Bycicle that everyone can ride anywhere.",
            'question_id' => 8,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ],
            ['choice' => "Buses and the most popular means of public transportation ubiquitous in the Philippines",
            'question_id' => 8,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ],
            ['choice' => "What is the GB and MB?",
            'question_id' => 9,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ],
            ['choice' => "? = 1024",
            'question_id' => 9,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ],
            ['choice' => "? = 1000",
            'question_id' => 9,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ],
            ['choice' => "It is better to check the status about memory.",
            'question_id' => 10,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ],
            ['choice' => "Punch the computer.",
            'question_id' => 10,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ],
            ['choice' => "Not slow. My action is too fast to catch.",
            'question_id' => 10,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ],
            ['choice' => "Software as a service",
            'question_id' => 11,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ],
            ['choice' => "Softcream as a service",
            'question_id' => 11,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ],
            ['choice' => "Song as a service",
            'question_id' => 11,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ],
            ['choice' => "The data sent from a website and stored on the user's computer",
            'question_id' => 12,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ],
            ['choice' => "A baked food that contains flour, sugar and so on",
            'question_id' => 12,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ],
            ['choice' => "The character at sesame street",
            'question_id' => 12,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ],
            ]);
    }
}
