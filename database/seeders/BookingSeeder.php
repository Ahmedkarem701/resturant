<?php

namespace Database\Seeders;

use App\Models\Booking;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Booking::create([
            'name'=>'Ahmed Karem',
            'email'=>'ak@gmail.com',
            'phone'=>'01207807796',
            'date'=>'1981-10-20',
            'time'=>'18:50:33',
            'number'=>'5 Person'
        ]);
    }
}
