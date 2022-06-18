<?php

namespace Database\Seeders;

use Hrm\Pondit\Models\Project;
use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Project::create([
            'title' => 'Ecommerce',
            'description' => 'Mobile Phone Ecommerce Website',
            'start_date' => '2022-02-01',
            'end_date' => '2022-02-05',
        ]);

        Project::create([
            'title' => 'Accounting',
            'description' => 'Accounting Website',
            'start_date' => '2022-01-01',
            'end_date' => '2022-02-10',
        ]);
    }
}
