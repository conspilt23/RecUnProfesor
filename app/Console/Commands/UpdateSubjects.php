<?php

namespace App\Console\Commands;

use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class UpdateSubjects extends Command
{
        /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update:subjects';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update the subjects in the production database.';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $subjectFile = File::get(storage_path('subjects' . DIRECTORY_SEPARATOR . 'all_info.json'));
        Subject::truncate();
$subjects = json_decode($subjectFile, true);
        $bar = $this->output->createProgressBar(count($subjects));
        $bar->start();
        foreach ($subjects as $subject) {

            $subject_teacher = json_decode($subject['teachers']);

            $subject_teacher = count($subject_teacher) === 0
                ? [Teacher::withoutGlobalScopes()->find(1)->name]
                :  $subject_teacher;

            foreach ($subject_teacher as $teacher) {

                Subject::withoutGlobalScopes()->create([
                    'teacher_id' => Teacher::withoutGlobalScopes()->whereName($teacher)->first()->id,
                    'term' => $subject['term'],
                    'term_desc' => $subject['term_desc'],
                    'nrc' => $subject['nrc'],
                    'campus' => $subject['campus'],
                    'name' => $subject['subject_name'],
                    'course' => $subject['subject_course']
                ]);
                $bar->advance();
            }
        }

        $bar->finish();

        $this->info(' Las asignaturas han sido actualizadas correctamente para este cuatrimestre: ' . Subject::withoutGlobalScopes()->find(1)->formatted_term);
    }

}

