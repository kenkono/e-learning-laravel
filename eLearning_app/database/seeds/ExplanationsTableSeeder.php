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
            ['explanation' => "You need to show the politeness everytime. It takes long time to gain trust but it is so fast to break the trust.",
            'question_id' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ],
            ['explanation' => "In Japan, there are normal to knock three times before entering the room. Be taken care of the door.",
            'question_id' => 2,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ],
            ['explanation' => "Same color looks nice for business situation. And choose dark color not bright color(Ex.red).",
            'question_id' => 3,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ],
            ['explanation' => "Standard: Over 70% -> very good, 40 ~ 69% -> good, 20 ~ 39% -> normal, Under 20 % -> dangerous",
            'question_id' => 4,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ],
            ['explanation' => "Some company has a few cash though sales amount is big. It’s important to see things from a wide point of view.",
            'question_id' => 5,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ],
            ['explanation' => "Google teacher tell you more detail.",
            'question_id' => 6,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ],
            ['explanation' => "Founder at Rakuten: Hiroshi Mikitani, Nintendo's character: Mario",
            'question_id' => 7,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ],
            ['explanation' => "Mobike(Head office is in China) serves the bycicle everyone can ride at anywhere.",
            'question_id' => 8,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ],
            ['explanation' => "GB = Gigabyte, MB = Megabyte",
            'question_id' => 9,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
