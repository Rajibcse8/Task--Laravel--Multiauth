<?php

use Illuminate\Database\Seeder;
use App\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
           'name'=>'admin'
        ]);
        Role::create([
            'name'=>'merchant'
        ]);
        Role::create([
            'name'=>'officer'
        ]);
        Role::create([
            'name'=>'user'
        ]);

        // $this->call(UserSeeder::class);
    }
}
