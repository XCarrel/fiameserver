<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Joe',
                'email' => 'Joe@jail.us',
                'password' => '$2y$10$vkKbzAx/xtRnmb9k/jcH/.Ka8iEGBZGqZIhFTcHC.yKSu8w0GjzVO'
            ],
            [
                'name' => 'Jack',
                'email' => 'Jack@jail.us',
                'password' => '$2y$10$vkKbzAx/xtRnmb9k/jcH/.Ka8iEGBZGqZIhFTcHC.yKSu8w0GjzVO'
            ],
            [
                'name' => 'William',
                'email' => 'Bill@jail.us',
                'password' => '$2y$10$vkKbzAx/xtRnmb9k/jcH/.Ka8iEGBZGqZIhFTcHC.yKSu8w0GjzVO'
            ],
            [
                'name' => 'Averell',
                'email' => 'Averell@jail.us',
                'password' => '$2y$10$vkKbzAx/xtRnmb9k/jcH/.Ka8iEGBZGqZIhFTcHC.yKSu8w0GjzVO'
            ],
            [
                'name' => 'Lucky Luke',
                'email' => 'Lucky@marshall.us',
                'password' => '$2y$10$vkKbzAx/xtRnmb9k/jcH/.Ka8iEGBZGqZIhFTcHC.yKSu8w0GjzVO'
            ],
            [
                'name' => 'Rantanplan',
                'email' => 'Rantanplan@dumb.us',
                'password' => '$2y$10$vkKbzAx/xtRnmb9k/jcH/.Ka8iEGBZGqZIhFTcHC.yKSu8w0GjzVO'
            ]
        ]);
        DB::table('products')->insert([
            [
                'name' => 'Lasagne',
                'img' => 'img/lasagne.webp',
                'price' => 10,
                'user_id' => 1
            ],
            [
                'name' => 'Couscous',
                'img' => 'img/couscous.webp',
                'price' => 12,
                'user_id' => 2
            ],
            [
                'name' => 'Choucroute',
                'img' => 'img/choucroute.webp',
                'price' => 12,
                'user_id' => 2
            ],
        ]);
        DB::table('events')->insert([
            [
                'name' => 'Cinco de Mayo',
                'date' => '2022-05-05'
            ],
            [
                'name' => 'D-day memorial',
                'date' => '2022-06-06'
            ],
            [
                'name' => 'Fête des voisins',
                'date' => '2022-05-20'
            ],
        ]);
        DB::table('batches')->insert([
            [
                'quantity' => 12,
                'product_id' => 1,
                'event_id' => 1
            ],
            [
                'quantity' => 25,
                'product_id' => 2,
                'event_id' => 1
            ],
            [
                'quantity' => 12,
                'product_id' => 1,
                'event_id' => 2
            ],
            [
                'quantity' => 12,
                'product_id' => 1,
                'event_id' => 3
            ],
            [
                'quantity' => 30,
                'product_id' => 2,
                'event_id' => 3
            ],
        ]);
        DB::table('orders')->insert([
            [
                'quantity' => 2,
                'batch_id' => 1,
                'user_id' => 1
            ],
            [
                'quantity' => 4,
                'batch_id' => 5,
                'user_id' => 2
            ],
            [
                'quantity' => 1,
                'batch_id' => 2,
                'user_id' => 6
            ],
            [
                'quantity' => 4,
                'batch_id' => 3,
                'user_id' => 5
            ],
            [
                'quantity' => 2,
                'batch_id' => 1,
                'user_id' => 3
            ],
            [
                'quantity' => 1,
                'batch_id' => 1,
                'user_id' => 4
            ],
            [
                'quantity' => 6,
                'batch_id' => 5,
                'user_id' => 4
            ],
        ]);
    }
}
