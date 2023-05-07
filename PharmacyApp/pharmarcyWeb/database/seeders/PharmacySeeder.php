<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;


class PharmacySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 1; $i <= 100; $i++) {
            DB::table('resources')->insert([
                'name' => $faker->company(),
                'latitude' => $faker->latitude(),
                'longtiude' => $faker->longitude(),
                'permanent' => $faker->randomElement([0,1]),
                'description' => $faker->paragraph(),
                'address' => $faker->address(),
                'phone1' => $faker->phoneNumber(),
                'phone2' => $faker->phoneNumber(),
                'website' => $faker->url(),
                'active' => $faker->randomElement([0,1]),
            ]);
        }
    }
}
