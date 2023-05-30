<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use faker\Factory as faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // biar faker nya bahasa Indonesia
        $faker = Faker::create('id_ID');
        for($i = 1; $i < 11; $i++){
            Post::create([
                'author_id' => mt_rand(1 ,10),
                'title' => $faker->sentence(mt_rand(2,8)),
                'description' => $faker->paragraph(),
                'bodyPost' => collect($faker->paragraphs(mt_rand(5,10)))->map(fn($p) => "<p>$p</p>")->implode(''),
                'postDate' => $faker->date(),
                'video' => $faker->sentence() .'mp4',
                'image' => $faker->imageUrl(640, 480),
                'readTime' => $faker->randomElement(['Long Reads', 'Medium Reads', 'Quick Reads']),
                'latestreview' => $faker->dateTime(),
                'like' => mt_rand(0, 100)
            ]);
        }
    }
}
