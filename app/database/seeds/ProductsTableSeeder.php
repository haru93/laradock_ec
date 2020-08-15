<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'GreenColorShirt',
            'unitprice' => 1980,
            'image' => 'imageData',
            'memo' => '緑色のシンプルなTシャツ'
        ]);

        DB::table('products')->insert([
            'name' => 'PrintShirt',
            'unitprice' => 4980,
            'image' => 'imageData',
            'memo' => 'キャラクタープリントの入ったTシャツ'
        ]);

        DB::table('products')->insert([
            'name' => 'LightParka',
            'unitprice' => 3980,
            'image' => 'imageData',
            'memo' => '軽い素材のパーカー'
        ]);
    }
}
