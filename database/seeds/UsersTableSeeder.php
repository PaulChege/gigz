<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'email' => 'pchegenjenga@gmail.com',
            'password' => app('hash')->make('123456'),
            'api_token'=> str_random(16),

        ]);


    }
}