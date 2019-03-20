<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder {
    

    public function run()
    {
        DB::table('users')->insert([
            'name'         => "Client",
            'email'        => "client@me.com",
            'password'     => bcrypt('secret'),
            'address'      => 'Somewhere in Lahore',
            'city'         => 'lahore',
            'type'         => 'client',
            'phone_number' => '0321-4388172',
            'created_at'   => now(),
        ]);
        DB::table('users')->insert([
            'name'         => "Admin",
            'email'        => "admin@me.com",
            'password'     => bcrypt('secret'),
            'address'      => 'Somewhere in Lahore',
            'city'         => 'lahore',
            'type'         => 'admin',
            'phone_number' => '0321-4488172',
            'created_at'   => now(),
        ]);
        DB::table('users')->insert([
            'name'         => "Driver",
            'email'        => "driver@me.com",
            'password'     => bcrypt('secret'),
            'address'      => 'Somewhere in Lahore',
            'city'         => 'lahore',
            'type'         => 'driver',
            'phone_number' => '0321-4448172',
            'created_at'   => now(),
        ]);
        DB::table('drivers')->insert([
            'name'            => "Driver",
            'user_id'         => 3,
            'cnic_number'     => '102421-4157483-1',
            'verified'        => true,
            'image'           => 'default.png',
            'created_at'      => now(),
            'organization_name' => 'Company',
        ]);
        DB::table('organizations')->insert([
            'name'          => "Company",
            'contact'       => '03245172781',
            'address'       => 'Lahore',
            'registration'  => '1234567',
        
        ]);
        DB::table('order__categories')->insert([
            'name'          => "Electronics",
            'price_rate'       => '40',
            'basic_fee'       => '100',
            'created_at'      => now(),
        ]);
        DB::table('order__categories')->insert([
            'name'          => "Furniture",
            'price_rate'       => '35',
            'basic_fee'       => '120',
            'created_at'      => now(),
        ]);
    }
}
