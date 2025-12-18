<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'username' => 'admin',     // pastikan kolom 'username' ada
            'email' => 'admin@example.com', // isi email dummy kalau kolom email NOT NULL
            'password' => Hash::make('123'),
        ]);
    }
}
