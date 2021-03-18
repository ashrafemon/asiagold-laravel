<?php

use Illuminate\Database\Seeder;
use App\Wallet;

class WalletsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Wallet::truncate();

        Wallet::create(['amount' => 0]);
        Wallet::create(['amount' => 0]);
    }
}
