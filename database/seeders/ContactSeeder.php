<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contact::create([
            'firstname'=>'Ahmed',
            'lastname'=>'karem',
            'email'=>'ak@gmail.com',
            'phone'=>'01207807796',
            'message'=>'How are you?'
        ]);
    }
}
