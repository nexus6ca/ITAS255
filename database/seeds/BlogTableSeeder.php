<?php

use Illuminate\Database\Seeder;

class BlogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('blogs')->insert(
            array(
                ['title' => "My First Blog",
                    'entry' => "I just ate",
                    'posted_on' => date("Y-m-d H:i:s")],
                ['title' => "My Second Blog",
                    'entry' => "Going to bed",
                    'posted_on' => date("Y-m-d H:i:s")],
                ['title' => "My Third Blog",
                    'entry' => "Its a new day",
                    'posted_on' => date("Y-m-d H:i:s")]
            )
        );
    }
}
