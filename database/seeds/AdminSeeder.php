<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'Myadmin',
            'email'=>'admin@gmail.com',
            'password'=>Hash::make('12345678'),
            'role_id'=>'1'
        ]);
    }
}
