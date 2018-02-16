<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   public function run()
    {
        // Let's truncate our existing records to start from scratch.
        // Article::truncate();

        $faker = \Faker\Factory::create();
 
        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 5; $i++) {
           DB::table('articles')->insert([
                'title' => $faker->sentence,
                'body' => $faker->paragraph,
            ]);
        }
    }
}
