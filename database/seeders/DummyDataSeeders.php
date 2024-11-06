<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DummyDataSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
            
            "email" => "admin@gmail.com",
            "password" => "adminku"
            ],[
            "email" => "karyawan@gmail.com",
            "password" => "karyawanku"
            ]
    ];

    foreach($data as $userData){
        if(!User::where('email', $userData['email'])->exists()){
            User::create($userData);
        };
    }
    }
}
