<?php

use App\User;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

/** @var Factory $factory */
$factory->define( \App\Thread::class, function ( Faker $faker ) {
	return [
		'title'   => $faker->sentence,
		'user_id' => function () {
			return factory( User::class )->create()->id;
		},
		'body'    => $faker->paragraph
	];
} );
