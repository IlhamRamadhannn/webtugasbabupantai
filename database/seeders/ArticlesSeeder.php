<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Articles;
use Faker\Factory as Faker;

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $categories = [
            'Ecosystems',
            'Conservation',
            'Pollution',
            'Climate Change',
            'Exploration',
            'Sustainability'
            
        ];
        for($i =0; $i<10; $i++){
            Articles::create([
                'title' => $faker->sentence(6, true), // Generate a random title
                'category' => $faker->randomElement($categories), // Randomly select a category
                'content' => $faker->paragraphs(3, true), // Generate random content
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        
        
        }
        //
    }
}
