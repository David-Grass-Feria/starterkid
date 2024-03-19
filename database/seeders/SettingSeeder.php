<?php

namespace GrassFeria\Starterkid\Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \GrassFeria\Starterkid\Models\Setting::create([
            'id'                                        => 1,
            
        ]);
    }
}
