<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //remove any previous data from the posts table
        DB::table('posts')->delete();
        //insert into the posts table
        DB::table('posts')->insert([
            'category' => str_random(10),
            'location' => str_random(3),
        ]);
        DB::table('posts')->insert([
            'category' => str_random(10),
            'location' => str_random(3),
        ]);
    }
}
