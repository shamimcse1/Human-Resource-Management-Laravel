<?php

namespace Database\Seeders;

use Hrm\Pondit\Models\Leave;
use Illuminate\Database\Seeder;

class LeavesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Leave::create([
            'title' => 'Sick Leave',
            'days_count' => 12,
        ]);

        Leave::create([
            'title' => 'Casual Leave',
            'days_count' => 6,
        ]);
    }
}
