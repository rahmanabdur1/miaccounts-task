<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transactions')->insert([
            ['account_head_id' => 4, 'date' => '2023-01-01', 'debit' => 50, 'credit' => 30],
            ['account_head_id' => 5, 'date' => '2023-01-01', 'debit' => 25, 'credit' => 10],
            ['account_head_id' => 6, 'date' => '2023-01-01', 'debit' => 60, 'credit' => 20],
            ['account_head_id' => 10, 'date' => '2023-01-01', 'debit' => 40, 'credit' => 10],
            ['account_head_id' => 11, 'date' => '2023-01-01', 'debit' => 30, 'credit' => 10],
            ['account_head_id' => 12, 'date' => '2023-01-01', 'debit' => 10, 'credit' => 5],
            ['account_head_id' => 13, 'date' => '2023-01-01', 'debit' => 15, 'credit' => 5],
        ]);
    }
}
