<?php

$factory->define(App\Models\Article::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->sentence(),
        'source_url' => $faker->url(),
        'source_id' => $faker->randomNumber(),
        'content' => $faker->text(),
        'publish_date' => Carbon\Carbon::now()
    ];
});
