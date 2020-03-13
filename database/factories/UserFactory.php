<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use App\UserPrivilege;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => 'Bertho Joris',
        'email' => 'bertho@gmail.com',
        'email_verified_at' => now(),
        'password' => '$2y$10$U5szJ1sxc5RSkDOZdyw4ruRUptqHZOkqpgbwqD362NP.dyscbiSOi', // malaquena
        'remember_token' => Str::random(10),
    ];
});

$factory->define(UserPrivilege::class, function (Faker $faker) {
    return [
        'user_id' => 1,
        'privilege' => 'ADMIN',
        'status' => 'ACTIVE',
        'assign_to' => 'ALL'
    ];
});
