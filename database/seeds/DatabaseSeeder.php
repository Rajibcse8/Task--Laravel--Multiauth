<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
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

        // $this->call(UserSeeder::class);
    }
}
