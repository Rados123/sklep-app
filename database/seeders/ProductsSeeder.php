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
        DB::table('products')->insert(

        [
            'name'=>'Peperomia pereskiifolia',
            'price'=>'35.00',
            'category'=>'Rosliny proste w pielegnacji',
            'description'=>'Miniaturowa Peperomia pereskiifolia to nieklopotliwa i szybko rosnaca roslinka, ktora odnajdzie sie swietnie na polce lub parapecie (najlepiej wystawy wschodniej).',
            'gallery'=>'https://www.jungleboogie.pl/wp-content/uploads/2022/01/peperomia-pereskiifolia_8x13-1_1642851240-990x1320.jpg',

        ],
    );    
    }
}
