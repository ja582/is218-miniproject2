<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Car;
use Faker\Generator as Faker;

$factory->define(Car::class, function (Faker $faker) {
    return [
        'make' => 'Toyota',
        'model' => 'Camry',
        'year' => 1990
    ];
});
