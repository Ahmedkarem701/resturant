<?php

namespace Database\Seeders;

use App\Models\ClientFeedback;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            BlogSeeder::class,
            BookingSeeder::class,
            ClientFeedbackSeeder::class,
            ContactSeeder::class,
            GallerySeeder::class,
            InstagramSeeder::class,
            MenuCategorySeeder::class,
            MenuSeeder::class,
            PartnerSeeder::class,
            SettingSeeder::class,
            StunningThingsSeeder::class,
            TeamSeeder::class,
            WeekSpecialSeeder::class
        ]);
    }
}
