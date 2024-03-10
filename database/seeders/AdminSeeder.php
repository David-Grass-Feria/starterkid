<?php

namespace GrassFeria\Starterkid\Database\Seeders;


use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = \App\Models\User::create([
            'id'   => 1,
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'),
            

        ]);
        
    }

   
}
