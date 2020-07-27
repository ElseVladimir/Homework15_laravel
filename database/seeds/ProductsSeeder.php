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
                'title' => 'notebook1',
                'categorie_id' => '3',
                'slug' => 'notebook_1',
                'price' => '100',
                'description' => 'notebook with 100500 cores processor and 256mb RAM'
            ],
            [
                'title' => 'super computer',
                'categorie_id' => '2',
                'slug' => 'best_pc',
                'price' => '100500',
                'description' => 'super computer for NASA researchers'
            ],
            [
                'title' => 'china smartphone',
                'categorie_id' => '1',
                'slug' => 'china_smart',
                'price' => '50',
                'description' => 'best bomj china smartphone'
            ],
            [
                'title' => 'jbm speaker',
                'categorie_id' => '4',
                'slug' => 'jbm',
                'price' => '100',
                'description' => 'superbass'
            ]
        ]);
    }
}
