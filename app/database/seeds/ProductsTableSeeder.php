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
            'name' => 'Tシャツ',
            'unitprice' => 1980,
            'image' => 'imageData',
            'memo' => 'Tシャツの概要です'
        ]);

        DB::table('products')->insert([
            'name' => 'パーカー',
            'unitprice' => 4980,
            'image' => 'imageData',
            'memo' => 'パーカーの概要です'
        ]);

        DB::table('products')->insert([
            'name' => 'サンダル',
            'unitprice' => 3980,
            'image' => 'imageData',
            'memo' => 'サンダルの概要です'
        ]);
    }
}
