<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(WalletsTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(SystemVariablesTableSeeder::class);
        $this->call(EmailTemplatesTableSeeder::class);
        $this->call(GoldsTableSeeder::class);
    }
}
