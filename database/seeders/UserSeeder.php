<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::insert([
            [
                'name' => 'Superadmin',
                'email' => 'superadmin@bandung.go.id',
                'role' => 'superadmin',
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => 'Admin',
                'email' => 'admin@bandung.go.id',
                'role' => 'admin',
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => 'Operator',
                'email' => 'operator@bandung.go.id',
                'role' => 'operator',
                'password' => Hash::make('12345678'),
            ]
        ]);
    }
}
