<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Donations;
use App\Models\User;
use Faker\Factory as Faker;

class DonationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

        
    public function run(): void
    {
        //
        $faker = Faker::create();
        $users = User::all(); // Mengambil semua user

        // Cek apabila ada user sebelum seeding donation
        // if ($users->isEmpty()) {
        //     echo "No users available to seed donations.\n";
        //     return;
        // }

        foreach ($users as $user) {
            // Setiap user melakukan 1-3 donasi
            foreach (range(1, rand(1, 3)) as $index) {
                Donations::create([
                    'user_id' => $user->id,
                    'amount' => $faker->randomFloat(2, 50000, 500000), // Donasi antara 50rb - 500rb
                    'payment_method' => $faker->randomElement(['Bank Transfer', 'Credit Card', 'E-Wallet']),
                    // 'status' => $faker->randomElement(['completed', 'pending', 'failed']),
                    // 'created_at' => now(),
                    // 'updated_at' => now(),
                ]);
            }
        }
    }
}
