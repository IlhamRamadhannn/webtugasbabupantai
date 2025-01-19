<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker::create();
        $gender = ['Laki-laki', 'Perempuan'];
        foreach (range(1, 10) as $index) { // Membuat 10 user dummy
            User::create([
                'name' => $faker->name,
                'gender'=> $faker->randomElement($gender),
                'email' => $faker->unique()->safeEmail,
                'phone_number' => '0'.$faker->numberBetween(1000000000, 9999999999),
                'points' => $faker->randomNumber(3),
                'password' => Hash::make('password'), // Password default
                // 'total_donation' => $faker->randomFloat(2, 100000, 1000000), // Donasi total acak antara 100rb - 1jt
                // 'created_at' => now(),
                // 'updated_at' => now(),
            ]);
        }
    }
}
