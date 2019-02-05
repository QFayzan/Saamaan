<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder {
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'         => "Client",
            'email'        => "client@me.com",
            'password'     => bcrypt('secret'),
            'address'      => 'Somewhere in Lahore',
            'city'         => 'lahore',
            'Type'         => 'Client',
            'Phone_Number' => '0321-4388172'
        ]);
        DB::table('users')->insert([
            'name'         => "Admin",
            'email'        => "admin@me.com",
            'password'     => bcrypt('secret'),
            'address'      => 'Somewhere in Lahore',
            'city'         => 'lahore',
            'Type'         => 'Admin',
            'Phone_Number' => '0321-4488172'
        ]);
        DB::table('users')->insert([
            'name'         => "Driver",
            'email'        => "driver@me.com",
            'password'     => bcrypt('secret'),
            'address'      => 'Somewhere in Lahore',
            'city'         => 'lahore',
            'Type'         => 'Driver',
            'Phone_Number' => '0321-4448172'
        ]);
        DB::table('drivers')->insert([
            'Name'         => "Driver",
            'user_id'      => 3,
            'CNIC_Number'  => '102421-4157483-1',
            'Phone_Number' => '0321-4448172',
            'verified'     => true,
            'Picture'      => 'default.png'
        ]);
    }
}
