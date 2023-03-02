<?php

namespace Database\Seeders;

use App\Models\Scopes\HideUnavailableTeacherScope;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Support\Facades\DB;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subjectFile = File::get(storage_path('subjects' . DIRECTORY_SEPARATOR . 'all_info.json'));
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        Subject::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');

        foreach (json_decode($subjectFile, true) as $subject) {

            $subject_teacher = json_decode($subject['teachers']);

            $subject_teacher = count($subject_teacher) === 0
                ? [Teacher::withoutGlobalScope(HideUnavailableTeacherScope::class)->find(1)->name]
                :  $subject_teacher;

            foreach ( $subject_teacher as $teacher) {

                

                Subject::withoutGlobalScope(HideUnavailableTeacherScope::class)->create([
                    'teacher_id' => Teacher::withoutGlobalScope(HideUnavailableTeacherScope::class)->whereName($teacher)->first()->id,
                    'term' => $subject['term'],
                    'term_desc' => $subject['term_desc'],
                    'nrc' => $subject['nrc'],
                    'campus' => $subject['campus'],
                'name' => $subject['subject_name'],
                    'course' => $subject['subject_course']
                ]);
            }
        }
    }
}
