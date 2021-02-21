<?php

namespace Database\Seeders;

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
        \DB::table('posts')->insert(
            [
                "users_id" => 1,
                "title" => "Apa itu HTML",
                "slug" => "apa-itu-html",
                "thumbnail" => "assets/img/html.jpg",
                "deskripsi" => "Hypertext Markup Language adalah bahasa markah standar untuk dokumen yang dirancang untuk ditampilkan di peramban internet.",
                "content" => "Hypertext Markup Language adalah bahasa markah standar untuk dokumen yang dirancang untuk ditampilkan di peramban internet. Ini dapat dibantu oleh teknologi seperti Cascading Style Sheets dan bahasa scripting seperti JavaScript dan VBScript.",
                "status" => "PUBLISH",
                "created_at" => "2021-01-03 12:00:00",
                "updated_at" => "2021-01-03 12:00:00"
            ]
        );
    }
}
