<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(FollowersTableSeeder::class);
        $this->call(LessonsTableSeeder::class);
        $this->call(QuestionsTableSeeder::class);
        $this->call(ChoicesTableSeeder::class);
        $this->call(ExplanationsTableSeeder::class);
    }
}
