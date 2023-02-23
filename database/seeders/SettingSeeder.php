<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'email'=>'info@smarttargetkwt.com',
            'phone'=>'+965 9800 8445',
            'open'=>'8:00am',
            'close'=>'11:30pm',
            'facebook'=>'facebook.com',
            'instagram'=>'instagram.com',
            'linkedin'=>'linkedin.com',
            'twitter'=>'twitter.com',
            'address'=>'Sharq- Ahmed Al-Jaber Street Abdullah Alawadhi Tower',
        ]);
    }
}
