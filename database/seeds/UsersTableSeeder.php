<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Role;
use App\Wallet;
use App\BillingAddress;
use App\ShippingAddress;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        BillingAddress::truncate();
        ShippingAddress::truncate();

        $adminRole = Role::where('name','admin')->first();
        $userRole = Role::where('name', 'user')->first();

        $admin = User::create([
        	'name' => 'Admin',
            'username' => 'admin',
        	'email' => 'admin@admin.com',
        	'password' => Hash::make('admin'),
            'role_id' => 2,
            'wallet_id' => 1
        ]);

        BillingAddress::create([
            'user_id' => 1
        ]);

        ShippingAddress::create([
            'user_id' => 1
        ]);

        $user = User::create([
        	'name' => 'User',
        	'email' => 'user@user.com',
            'username' => 'user',
            'password' => Hash::make('user'),
            'wallet_id' => 2
        ]);

        BillingAddress::create([
            'user_id' => 2
        ]);

        ShippingAddress::create([
            'user_id' => 2
        ]);
        
    }
}
