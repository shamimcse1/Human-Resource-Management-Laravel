<?php

namespace Database\Seeders;

use Hrm\Pondit\Models\Meeting;
use Illuminate\Database\Seeder;

class MeetingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Meeting::create([
            'title' => 'Ecommerce',
            'description' => 'Mobile Phone Ecommerce Website',
            'date' => '2022-02-01',
            'time' => '11:30:00',
        ]);
    }
}
