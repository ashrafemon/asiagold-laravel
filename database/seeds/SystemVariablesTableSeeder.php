<?php

use Illuminate\Database\Seeder;
use App\SystemVariable;

class SystemVariablesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SystemVariable::truncate();

        SystemVariable::create([
        	'password_length' => 5,
        	'max_attempts' => 5,
        	'interest_rate' => 1,
        	'commisions_rate' => 30,
        	'sales_fee' => 40
        ]);
    }
}
