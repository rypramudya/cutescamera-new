<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\DetailPengguna;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\support\Str;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void  //seeder atau data palsu 
    {
        // User::truncate();
        User::create([
            'nama' => 'admin',
            'email' => 'tami@gmail.com',
            'password' => hash::make('tami'),
            'role' => 1, //admin
            'remember_token' => Str::random(60),
        ]);

        User::create([        
            'nama' => 'pengguna',
            'email' => 'pengguna@gmail.com',
            'password' => hash::make('tami'),
            'role' => 2, //pengguna
            'remember_token' => Str::random(60),
        ]);

        DetailPengguna::create([
        'user_id' => 2,
        'nik' => '210302035',
        'nohp' => '085878653934',
        'alamat' => 'kalisabuk',
        'jenisid' => 'KK',
        'fotoid' => 'default.jpg',
        'fotobersamaid' => 'default.jpg',
        ]);
    }
}