<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $this->call([
            \Database\Seeders\TeacherSeeder::class,
            \Database\Seeders\SubjectSeeder::class,
            \Database\Seeders\ScheduleSeeder::class,
            \Database\Seeders\CareersSeeder::class,
            \Database\Seeders\GradeSeeder::class,
            \Database\Seeders\PensumSeeder::class,
            \Database\Seeders\QuarterSeeder::class,

        ]);
        
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
