<?php

use Faker\Factory;

use Illuminate\Database\Seeder;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // \DB::table('users')->insert(

        //     [
        //         'name' => 'Administrator',
        //         'email' => 'admin@admin.com',
        //         'email_verified_at' => now(),
        //         'password' => 'sdfsdfasdfasdfasdfadsfadsf',
        //         'remember_token' => 'dfsdfsdfadfa',
        //     ]
        // );


        factory(\App\User::class, 40)->create()->each(function ($user) {
            $user->store()->save(factory(\App\Models\Store::class)->make());
        });
    }
}
