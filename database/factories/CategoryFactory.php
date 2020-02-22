<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(\App\Category::class, function (Faker $faker) {
    return [
        'name' => $faker->text(12),
        'description' => $faker->text(100),
        'banner_image' => 'category.jpg'
    ];
});
:
