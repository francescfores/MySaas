<?php

use Illuminate\Database\Seeder;
use Laravel\Cashier\Subscription;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory('\App\User');
        factory(\App\User::class, 10)->create()->each(
            function($user){
                $user->subscriptions()->save(
                    factory(Subscription::class, 1)->make());
            }
        );

    }


}
