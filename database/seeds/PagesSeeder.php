<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pages')->insert([
            [
                'title' => 'smt title1',
                'slug' => 'slug1',
                'intro' => 'smth intro1',
                'content' => 'smth content'
            ],
            [
                'title' => 'smt title2',
                'slug' => 'slug2',
                'intro' => 'smth intro2',
                'content' => 'smth content'
            ],
            [
                'title' => 'smt title3',
                'slug' => 'slug3',
                'intro' => 'smth intro3',
                'content' => 'smth content'
            ],
            [
                'title' => 'smt title4',
                'slug' => 'slug4',
                'intro' => 'smth intro4',
                'content' => 'smth content'
            ]
        ]);
    }
}
