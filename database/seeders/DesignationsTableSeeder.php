<?php

namespace Database\Seeders;

use Hrm\Pondit\Models\Designation;
use Illuminate\Database\Seeder;

class DesignationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Designation::create([
            'name' => 'HR Officer',
            'amount' => 25000,
        ]);

        Designation::create([
            'name' => 'Senior Developer',
            'amount' => 45000,
        ]);

        Designation::create([
            'name' => 'Marketing Officer',
            'amount' => 20000,
        ]);

        Designation::create([
            'name' => 'Manager',
            'amount' => 70000,
        ]);
    }
}
