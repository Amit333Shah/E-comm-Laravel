<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')->insert([
            [
                'name'=>'Split AC (2020, White)',
                'price'=>'15000',
                'category'=>'AC',
                'gallery'=>'https://m.media-amazon.com/images/I/71g-YgbuWvL._SL1500_.jpg',
                'description'=>'Split 1 Ton air conditioner with non-inverter compressor suitable for small sized rooms (<110 sq. ft.)',
            ],
            [
                'name'=>' Sunsung Fridge',
                'price'=>'10000',
                'category'=>'Fridge',
                'gallery'=>'https://m.media-amazon.com/images/I/71PjRr580lL._SY679_.jpg',
                'description'=>'Direct-cool refrigerator: Economical and Cooling without fluctuation',
            ],
            [
                'name'=>' Lenove Tab',
                'price'=>'2000',
                'category'=>'Tablet',
                'gallery'=>'https://cdn.mos.cms.futurecdn.net/bwcE9CwvUuDvp99XcBywwm-970-80.jpeg.webp',
                'description'=>'This laptop has 8GB Ram and 1TB Rom',
            ],
            [ 'name'=>' Television Sumsung',
            'price'=>'2000',
            'category'=>'Television',
            'gallery'=>'https://cdn.mos.cms.futurecdn.net/bwcE9CwvUuDvp99XcBywwm-970-80.jpeg.webp',
            'description'=>'This laptop has 8GB Ram and 1TB Rom',
            ]
        ]);
    }
}
