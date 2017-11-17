<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
| or acces
*/

$factory->define(App\User::class, function (Faker $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});


$factory->define(App\Page::class, function (Faker $faker) {

	$nome = $faker->name;
    $titulo = $faker->name;
    $paragraphs = '<p>' . implode('</p><p>', $faker->paragraphs) . '</p>';

    return [
        'nome' => $nome,
       	'titulo' => $titulo,
       	'conteudo' => $paragraphs,	
    ];
});