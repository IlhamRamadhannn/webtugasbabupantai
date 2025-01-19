<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comments;  // Correct import for the Comments model
use App\Models\User;
use App\Models\Articles;  // Correct import for the Articles model
use Faker\Factory as Faker;

class CommentsSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        $users = User::all();
        $articles = Articles::all();  // Use Articles model here

        foreach ($articles as $article) {
            for ($i = 0; $i < 5; $i++) {
                Comments::create([  // Use Comments model here
                    'articles_id' => $article->id,  // Correct column name 'articles_id'
                    'user_id' => $users->random()->id,
                    'comment' => $faker->sentence,
                ]);
            }
        }
    }
}
