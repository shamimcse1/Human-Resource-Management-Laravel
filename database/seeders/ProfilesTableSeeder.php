<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Profile\Pondit\Models\Profile;

class ProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Profile::create([
            'user_id' => 1001,
            'address' => 'Uttara',
            'number' => '01815469854',
            'alternative_number' => '01715469854',
            'designation_id' => 1,
            'department_id' => 1,
        ]);

        Profile::create([
            'user_id' => 1002,
            'address' => 'Uttara',
            'number' => '01815469854',
            'alternative_number' => '01715469854',
            'designation_id' => 2,
            'department_id' => 2,
        ]);
    }
}
