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
            'category' => 1,
            'location' => 1,
            'code'=>1,
        ]);
        DB::table('posts')->insert([
            'category' => 2,
            'location' => 2,
            'code'=>2,
        ]);
    }
}
