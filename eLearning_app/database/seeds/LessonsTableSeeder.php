<?php

use Illuminate\Database\Seeder;

class LessonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lessons')->insert([
            ['title' => 'Manner',
            'explanation' => "Good business person has good business manner. You can learn what is the best manner for business situation.",
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ],
            ['title' => 'Finance',
            'explanation' => "You need to check that whether customer has good financial status or almost bunkrupt.",
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ],
            ['title' => 'Culture',
            'explanation' => "After starting negotiations, it is better to use ice break topics.You can learn by this cource.",
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ],
            ]);
    }
    
}
