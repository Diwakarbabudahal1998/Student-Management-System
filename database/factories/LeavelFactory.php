<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Leavel;
use Faker\Generator as Faker;

$factory->define(Leavel::class, function (Faker $faker) {

    return [
        'leavel' => $faker->word,
        'course_id' => $faker->randomDigitNotNull,
        'leavel_description' => $faker->text,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
