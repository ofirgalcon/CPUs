<?php

// Database seeder
// Please visit https://github.com/fzaninotto/Faker for more options

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Cpus_model::class, function (Faker\Generator $faker) {

    return [
        'brand_string' => $faker->word(),
        'physicalcpu' => $faker->randomNumber($nbDigits = 4, $strict = false),
        'logicalcpu' => $faker->randomNumber($nbDigits = 4, $strict = false),
        'perflevel0_name' => $faker->word(),
        'perflevel0_physicalcpu' => $faker->randomNumber($nbDigits = 4, $strict = false),
        'perflevel0_l1icachesize' => $faker->randomNumber($nbDigits = 8, $strict = false),
        'perflevel0_l1dcachesize' => $faker->randomNumber($nbDigits = 8, $strict = false),
        'perflevel0_l2cachesize' => $faker->randomNumber($nbDigits = 8, $strict = false),
        'perflevel0_l3cachesize' => $faker->randomNumber($nbDigits = 8, $strict = false),
        'perflevel1_name' => $faker->word(),
        'perflevel1_physicalcpu' => $faker->randomNumber($nbDigits = 4, $strict = false),
        'perflevel1_l1icachesize' => $faker->randomNumber($nbDigits = 8, $strict = false),
        'perflevel1_l1dcachesize' => $faker->randomNumber($nbDigits = 8, $strict = false),
        'perflevel1_l2cachesize' => $faker->randomNumber($nbDigits = 8, $strict = false),
        'perflevel1_l3cachesize' => $faker->randomNumber($nbDigits = 8, $strict = false),
    ];
});
