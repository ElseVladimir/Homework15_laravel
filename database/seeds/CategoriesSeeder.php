<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'categories' => 'smartphones',
                'slug' => 'smartphones'
            ],
            [
                'categories' => 'personal computers',
                'slug' => 'PC'
            ],
            [
                'categories' => 'notebooks',
                'slug' => 'Nbooks'
            ],
            [
                'categories' => 'speakers',
                'slug' => 'speakers'
            ],
            [
                'categories' => 'other',
                'slug' => 'other'
            ]
        ]);
    }
}
