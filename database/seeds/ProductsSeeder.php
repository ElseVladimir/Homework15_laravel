<?php

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
            [
                'title' => 'smth title1',
                'slug' => 'slug_1',
                'price' => '1351',
                'description' => 'smth description1'
            ],
            [
                'title' => 'smth title2',
                'slug' => 'slug_2',
                'price' => '13451',
                'description' => 'smth description2'
            ],
            [
                'title' => 'smth title3',
                'slug' => 'slug_3',
                'price' => '12341',
                'description' => 'smth description3'
            ],
            [
                'title' => 'smth title4',
                'slug' => 'slug_4',
                'price' => '123113',
                'description' => 'smth description4'
            ]
        ]);
    }
}
