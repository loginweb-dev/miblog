<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'role_id' => 1,
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'avatar' => 'users/default.png',
            'password' => Hash::make('password')
        ]);
        User::create([
            'role_id' => 2,
            'name' => 'editor',
            'email' => 'editor@admin.com',
            'avatar' => 'users/default.png',
            'password' => Hash::make('password')
        ]);
    }
}
