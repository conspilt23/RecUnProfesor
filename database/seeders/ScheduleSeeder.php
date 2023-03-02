<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\Schedule;
use App\Models\Subject;
use Illuminate\Support\Facades\DB;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $allSubjects = File::get(storage_path('subjects' . DIRECTORY_SEPARATOR . 'all_info.json'));
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        Schedule::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');

        foreach (json_decode($allSubjects, true) as $subject) {
            foreach ($subject['schedule'] as $value) {
                Schedule::create([
                    'subject_nrc' => $subject['nrc'],
                    'begin_time' => $value['begin_time'],
                    'end_time' => $value['end_time'],
                    'building' => $value['building'],
                    'type' => $value['type'],
                    'room' => $value['room'],
                    'credits' => $value['credits'],
                    'is_monday' => $value['is_monday'],
                    'is_tuesday' => $value['is_tuesday'],
                    'is_wednesday' => $value['is_wednesday'],
                    'is_thursday' => $value['is_thursday'],
                    'is_friday' => $value['is_friday'],
                    'is_saturday' => $value['is_saturday'],
                    'is_sunday' => $value['is_sunday'],
                ]);
            }
        }
    }
}