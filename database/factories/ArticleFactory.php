<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'title' => $faker->title,
        'body' => $faker->text,
        'tags' => collect(['php', 'js', 'java', 'ruby', 'git', 'docker', 'CI/CD', 'c++'])->random(2)->values()->all()
    ];
});
