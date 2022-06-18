<?php

namespace Database\Seeders;

use Hrm\Pondit\Models\Department;
use Illuminate\Database\Seeder;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Department::create([
            'name' => 'Human Resource',
        ]);
        Department::create([
            'name' => 'IT',
        ]);
        Department::create([
            'name' => 'Accounting',
        ]);
        Department::create([
            'name' => 'Sales',
        ]);
    }
}
