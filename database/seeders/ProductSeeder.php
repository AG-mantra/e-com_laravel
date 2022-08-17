<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        DB::table('products')->insert([
            [
                'name'=>'OPPO Mobile',
                'price'=>'21000',
                'category'=>'mobile',
                'gallery'=>'https://opsg-img-cdn-gl.heytapimg.com/epb/202205/26/55EXtM8eF1Jv6FST.png',
                'description'=>'smart phone with 8gb ram, snapdragon 862',
            ],
            [
                'name'=>'SAMSUNG TV',
                'price'=>'28000',
                'category'=>'tv',
                'gallery'=>'https://images.samsung.com/is/image/samsung/in-full-hd-tv-te50fa-ua43te50fakxxl-frontblack-231881877?$650_519_PNG$',
                'description'=>'smart tv with digibox',
            ]
        ]);
    }
}
