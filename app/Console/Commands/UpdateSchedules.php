<?php

namespace App\Console\Commands;

use App\Models\Schedule;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class UpdateSchedules extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update:schedules';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Actualiza los horarios correspondientes al cuatrimestre en curso.';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $allSubjects = File::get(storage_path('subjects' . DIRECTORY_SEPARATOR . 'all_info.json'));
        $subjects = json_decode($allSubjects, true);
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        Schedule::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');

        $bar = $this->output->createProgressBar(count($subjects));
        $bar->start();



        foreach ($subjects as $subject) {
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
                $bar->advance();
            }
           
        }
        $bar->finish();
        $this->info(' Horarios actualizados correctamente');
    }
}
