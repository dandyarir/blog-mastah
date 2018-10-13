<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Blog::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(6),
        'content' => $faker->paragraphs(3, true)
    ];
});
