<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Review;
use Faker\Generator as Faker;

$factory->define(Review::class, function (Faker $faker) {
    return [
        'content' => $faker->text(200),
        'rating' => $faker->numberBetween($min = 1, $max = 5),
        'user_id' => $faker->numberBetween($min = 40, $max = 200),
        'course_id' => 15,
    ];
});
