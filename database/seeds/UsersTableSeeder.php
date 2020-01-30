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
        $user = User::where('email', 'admin@admin')->first();

        if (!$user) {
            User::create([
                'name' => 'Administrator',
                'email' => 'admin@admin',
                'role' => 'admin',
                'password' => Hash::make('password'), // password
            ]);
        }
    }
}
