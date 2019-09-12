<?php

use Faker\Generator as Faker;

$factory->define(App\Lesson::class, function (Faker $faker) {
    return [
        "title" => $faker->realText($faker->numberBetween(10, 20)),
        "explanation" => $faker->sentence,
    ];
});


$factory->define(App\Question::class, function (Faker $faker) {
    return [
        "question" => $faker->realText($faker->numberBetween(30, 40)),
        "answer_id" => $faker->numberBetween(1, 4),
    ];
});

$factory->define(App\Choice::class, function (Faker $faker) {
    return [
        "choice" => $faker->realText($faker->numberBetween(10, 20)),
    ];
});
