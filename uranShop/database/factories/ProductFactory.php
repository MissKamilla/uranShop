<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    $name = $faker->words(3, true);
    $description = $faker->words(10, true);
    $categories = App\Category::all()->pluck('id')->toArray();
    return [
        'name' => $name,
        'slug' => Str::slug($name, '-'),
        'img'  => $faker->randomElement(['https://loremflickr.com/320/240?lock=3306',null]),
        'description' => $description,
        'category_id' =>$faker->randomElement($categories)      
    ];
});
