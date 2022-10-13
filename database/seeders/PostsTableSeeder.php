<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for($i=0; $i<10; $i++){
            DB::table('posts')->insert([
            'message' => $faker->sentence,
            'user_id' => rand(1,11),
            'topic_id' => rand(1,10),
            'date' => $faker->date,
            ]);
        }
    }
}
