<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Roles;

class CreateRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Roles::insert([
            ['id' => 1, 'nama' => 'manajer'],
            ['id' => 2, 'nama' => 'staff'],
            ['id' => 3, 'nama' => 'admin'],
        ]);
    }
}
