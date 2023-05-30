<?php

namespace Database\Seeders;

use App\Models\Author;
use faker\Factory as faker;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AuthorSeeder extends Seeder
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
            Author::create([
                'name' => $faker->name()
            ]);
        }
    }
}
