<?php

use Illuminate\Database\Seeder;
use App\Gold;

class GoldsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Gold::truncate();

        Gold::create([
        	'gold_name' => '1 gram',
        	'gold_size' => 1,
        	'gold_description' => 'Purchase this gold bar',
        	'gold_unit_price' => 6.00,
            'gold_amount' => 50,
        ]);

        Gold::create([
        	'gold_name' => '2.5 gram',
        	'gold_size' => 2.5,
        	'gold_description' => 'Purchase this gold bar',
        	'gold_unit_price' => 15.00,
            'gold_amount' => 50,
        ]);

        Gold::create([
        	'gold_name' => '5 gram',
        	'gold_size' => 5,
        	'gold_description' => 'Purchase this gold bar',
        	'gold_unit_price' => 28.00,
            'gold_amount' => 50,
        ]);

        Gold::create([
        	'gold_name' => '10 gram',
        	'gold_size' => 10,
        	'gold_description' => 'Purchase this gold bar',
        	'gold_unit_price' => 55.00,
            'gold_amount' => 50,
        ]);

        Gold::create([
        	'gold_name' => '20 gram',
        	'gold_size' => 20,
        	'gold_description' => 'Purchase this gold bar',
        	'gold_unit_price' => 112.00,
            'gold_amount' => 50,
        ]);

        Gold::create([
        	'gold_name' => '34.99 gram',
        	'gold_size' => 34.99,
        	'gold_description' => 'Purchase this gold bar',
        	'gold_unit_price' => 198.00,
            'gold_amount' => 50,
        ]);

        Gold::create([
        	'gold_name' => '50 gram',
        	'gold_size' => 50,
        	'gold_description' => 'Purchase this gold bar',
        	'gold_unit_price' => 248.00,
            'gold_amount' => 50,
        ]);

        Gold::create([
        	'gold_name' => '100 gram',
        	'gold_size' => 100,
        	'gold_description' => 'Purchase this gold bar',
        	'gold_unit_price' => 588.00,
            'gold_amount' => 50,
        ]);

        Gold::create([
        	'gold_name' => '250 gram',
        	'gold_size' => 250,
        	'gold_description' => 'Purchase this gold bar',
        	'gold_unit_price' => 888.00,
            'gold_amount' => 50,
        ]);

        Gold::create([
        	'gold_name' => '500 gram',
        	'gold_size' => 500,
        	'gold_description' => 'Purchase this gold bar',
        	'gold_unit_price' => 2068.00,
            'gold_amount' => 50,
        ]);

         Gold::create([
        	'gold_name' => '1000 gram',
        	'gold_size' => 1000,
        	'gold_description' => 'Purchase this gold bar',
        	'gold_unit_price' => 4855.00,
            'gold_amount' => 50,
        ]);

    }
}
