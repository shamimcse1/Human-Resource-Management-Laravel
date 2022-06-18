<?php

namespace Database\Seeders;

use Hrm\Pondit\Models\Holiday;
use Illuminate\Database\Seeder;

class HolidaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Holiday::create([
            'title' => '21 February',
            'date' => '2022-02-21',
        ]);

        Holiday::create([
            'title' => 'Eid Ul Azha',
            'date' => '2022-04-15',
        ]);

        Holiday::create([
            'title' => 'Purnima',
            'date' => '2022-06-15',
        ]);

        Holiday::create([
            'title' => '16 December',
            'date' => '2022-12-16',
        ]);
    }
}
