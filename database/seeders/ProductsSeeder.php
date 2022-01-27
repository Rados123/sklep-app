<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name'=>'Papiez',
            'price'=>'2137',
            'category'=>'bezcenne',
            'description'=>'Wielki Polak Nasz Rodak',
            'gallery'=>'https://www.wykop.pl/cdn/c3201142/comment_8WzNzGFSTZitBq1bLY2Uhz4ScFXj8Vf9.jpg',

        ],
        [
            'name'=>'Papiez',
            'price'=>'2137',
            'category'=>'bezcenne',
            'description'=>'Wielki Polak Nasz Rodak',
            'gallery'=>'https://www.wykop.pl/cdn/c3201142/comment_8WzNzGFSTZitBq1bLY2Uhz4ScFXj8Vf9.jpg',

        ],
    );    
    }
}
