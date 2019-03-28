<?php

use App\User;
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
        factory(App\User::class, 50)->create();
        User::create([
            'FirstName' => 'admin',
            'LastName' => 'COM409',
            'email' => 'admin@example.net',
            'password' => 'admin',
        ]);
    }
}
