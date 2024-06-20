<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccountHeadsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('account_heads')->insert([
            ['id' => 1, 'name' => 'Group 1', 'parent_id' => null, 'total_amount' => 85],
            ['id' => 2, 'name' => 'Group 2', 'parent_id' => 1, 'total_amount' => 35],
            ['id' => 3, 'name' => 'Group 3', 'parent_id' => null, 'total_amount' => 40],
            ['id' => 4, 'name' => 'Account head 1', 'parent_id' => 2, 'total_amount' => 20],
            ['id' => 5, 'name' => 'Account head 2', 'parent_id' => 2, 'total_amount' => 15],
            ['id' => 6, 'name' => 'Account head 3', 'parent_id' => 3, 'total_amount' => 40],
            ['id' => 7, 'name' => 'Group 5', 'parent_id' => null, 'total_amount' => 30],
            ['id' => 8, 'name' => 'Group 6', 'parent_id' => null, 'total_amount' => 15],
            ['id' => 9, 'name' => 'Group 4', 'parent_id' => null, 'total_amount' => 15],
            ['id' => 10, 'name' => 'Account head 4', 'parent_id' => 1, 'total_amount' => 30],
            ['id' => 11, 'name' => 'Account head 5', 'parent_id' => 1, 'total_amount' => 20],
            ['id' => 12, 'name' => 'Account head 6', 'parent_id' => 9, 'total_amount' => 5],
            ['id' => 13, 'name' => 'Account head 7', 'parent_id' => 9, 'total_amount' => 10],
            ['id' => 14, 'name' => 'Account head 8', 'parent_id' => null, 'total_amount' => 0],  // Assuming 0 amount as not provided
        ]);
    }
}
