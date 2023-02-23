<?php

namespace Database\Seeders;

use App\Models\StunningThings;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StunningThingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StunningThings::factory()->count(10)->create();
    }
}
