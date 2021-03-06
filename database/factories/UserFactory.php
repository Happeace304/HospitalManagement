<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

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
$department = [null,'CARDIOLOGY', 'DERMATOLOGY', "DIETETICS"];
$factory->define(User::class, function (Faker $faker) use ($department) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => 'admin',
        'address' => $faker->address,
        'birthday' =>  \Carbon\Carbon::now(),
        'id_card_number'=> rand(10000000000000,20000000000000),
        'medical_card_number' => Str::random(13),
        'department' => $department[!!rand(0,1)?rand(0,3):0],
        'gender'=> $faker->boolean(50)
    ];
});
