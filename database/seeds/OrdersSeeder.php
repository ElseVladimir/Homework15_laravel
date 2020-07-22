<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            [
              'customer_name' => 'smth name1',
                'email' => 'smt email1',
                'phone' => 132414,
                'feedback' => 'smth feedback1'
            ],
            [
                'customer_name' => 'smth name2',
                'email' => 'smt email2',
                'phone' => 132414,
                'feedback' => 'smth feedback2'
            ],
            [
                'customer_name' => 'smth name3',
                'email' => 'smt email3',
                'phone' => 132414,
                'feedback' => 'smth feedback3'
            ],
            [
                'customer_name' => 'smth name4',
                'email' => 'smt email4',
                'phone' => 132414,
                'feedback' => 'smth feedback4'
            ],
            [
                'customer_name' => 'smth name5',
                'email' => 'smt email5',
                'phone' => 132414,
                'feedback' => 'smth feedback5'
            ]
        ]);
    }
}
