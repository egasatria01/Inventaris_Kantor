<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            [
                'name' => 'Manajer',
                'email' => 'manajer@gmail.com',
                'password'  => bcrypt('12345'),
                'role_id' => 1,
            ],
            [
                'name' => 'Staff',
                'email' => 'staff@gmail.com',
                'password'  => bcrypt('12345'),
                'role_id' => 2,
            ],
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password'  => bcrypt('12345'),
                'role_id' => 3,
            ],
        ]);
    }
}
