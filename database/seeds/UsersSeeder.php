<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
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
                'name' => 'admin@admin',
                'email' => 'admin@admin',
                'password' => Hash::make('password'), // password
            ]);
        }

        factory(App\User::class, 5)->create();
    }

}
