<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('tags')->insert(
            [
                "category_id" => 1,
                "posts_id" => 1,
                "created_at" => "2021-01-03 12:00:00",
                "updated_at" => "2021-01-03 12:00:00"
            ]
        );
    }
}
