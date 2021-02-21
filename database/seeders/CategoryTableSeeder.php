<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('category')->insert(
            [
                "title" => "HTML",
                "slug" => "html",
                "created_at" => "2021-01-03 12:00:00",
                "updated_at" => "2021-01-03 12:00:00" 
            ],
            [
                "title" => "CSS",
                "slug" => "css",
                "created_at" => "2021-01-03 12:00:00",
                "updated_at" => "2021-01-03 12:00:00" 
            ],
            [
                "title" => "PHP",
                "slug" => "php",
                "created_at" => "2021-01-03 12:00:00",
                "updated_at" => "2021-01-03 12:00:00" 
            ]
        );
    }
}
