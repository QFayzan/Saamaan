<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        $this->call(UsersTableSeeder::class);
//        factory(App\User::class, 2)->create()->each(function ($user) {
//
//            $user->orders()->save(factory(App\Order::class, 5)->make(['location'=>$user->city] )
//            );
//        });
    }
}
