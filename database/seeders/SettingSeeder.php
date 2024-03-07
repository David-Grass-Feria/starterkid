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
            'primary_color'                             => config('starterkid.primary_color'),
            'secondary_color'                           => config('starterkid.secondary_color'),
            'font_color'                                => config('starterkid.font_color'),
            'font_color_on_dark_background'             => config('starterkid.font_color_on_dark_background'),
            'font_family'                               => config('starterkid.font_familiy'),
        ]);
    }
}
