<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abouts')->insert([[
            'title' => 'Lorem Ipsum 1',
            'slug' => 'lorem-ipsum-1',
            'content' => 'Aenean cursus tellus mauris, quis
            consequat mauris dapibus id. Donec
            scelerisque porttitor pharetra',
            'image' => 'img/tm-img-310x180-1.jpg',
            'draft' => 0
        ],[
            'title' => 'Lorem Ipsum 2',
            'slug' => 'lorem-ipsum-2',
            'content' => 'Aenean cursus tellus mauris, quis
            consequat mauris dapibus id. Donec
            scelerisque porttitor pharetra',
            'image' => 'img/tm-img-310x180-2.jpg',
            'draft' => 0
        ],[
            'title' => 'Lorem Ipsum 3',
            'slug' => 'lorem-ipsum-3',
            'content' => 'Aenean cursus tellus mauris, quis
            consequat mauris dapibus id. Donec
            scelerisque porttitor pharetra',
            'image' => 'img/tm-img-310x180-3.jpg',
            'draft' => 0
        ],[
            'title' => 'Lorem Ipsum 4',
            'slug' => 'lorem-ipsum-4',
            'content' => 'Aenean cursus tellus mauris, quis
            consequat mauris dapibus id. Donec
            scelerisque porttitor pharetra',
            'image' => 'img/tm-img-310x180-4.jpg',
            'draft' => 0
        ]]);
    }
}
