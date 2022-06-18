<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            UsersTableSeeder::class,
            DepartmentsTableSeeder::class,
            DesignationsTableSeeder::class,
            LeavesTableSeeder::class,
            ProjectsTableSeeder::class,
            MeetingsTableSeeder::class,
            ProfilesTableSeeder::class,
            HolidaysTableSeeder::class,
        ]);
    }
}
