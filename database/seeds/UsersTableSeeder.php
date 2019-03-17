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
            'organization_id' => '1',
        ]);
        DB::table('organizations')->insert([
            'name'          => "Company",
            'contact'       => '03245172781',
            'address'       => 'Lahore',
            'registeration' => true,
        
        ]);
    }
}
//public function run()
//{
//
//}