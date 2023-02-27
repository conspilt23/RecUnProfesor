<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class CreateSubjectFile extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:subject_file';

    /**
     * All the subject data that are extracted from files in folder.
     * 
     * @var array
     */
    private $subjects;

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Crea un archivo unico de JSON tomando como base los extraidos de la plataforma de UNAPEC';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $files = File::files(database_path('data'));

        $bar = $this->output->createProgressBar(count($files));
        $bar->start();

        $this->subjects = collect([]);

        foreach ($files as $file) {

            $fileInfo = pathinfo($file);

            $this->line('Archivo ' . $fileInfo['basename']);

            $getContent = File::get(database_path('data') . DIRECTORY_SEPARATOR . $fileInfo['basename']);

            $getContent = collect(json_decode($getContent)->data);

            $this->subjects->push($getContent->map(
                function ($value) {
                    $teachers = collect($value->faculty)->map(
                        fn ($value_faculty) => $value_faculty->displayName);

                    $teachers = $teachers->map(function ($teacher) {
                        $teacher = str_replace("-", "", $teacher);
                        $teacherParts = explode(", ", $teacher);
                        $teacherParts = array_reverse($teacherParts);
                        return implode(" ", $teacherParts);
                    });

                    return [
                        'id' => $value->id,
                        'term' => $value->term,
                        'term_desc' => $value->termDesc,
                        'nrc' => $value->courseReferenceNumber,
                        'campus' => $value->campusDescription,
                        'subject_name' =>  html_entity_decode($value->courseTitle, ENT_QUOTES, 'utf-8'),
                        'subject_course' => $value->subjectCourse,
                        'teachers' =>  html_entity_decode($teachers, ENT_QUOTES, 'utf-8'),                    
                       'schedule' => collect($value->meetingsFaculty)->map(
                            fn ($value_schedule, $key) => [
                                'begin_time' => Str::substrReplace($value_schedule->meetingTime->beginTime, ':', 2, 0),
                                'end_time' => Str::substrReplace($value_schedule->meetingTime->endTime, ':', 2, 0),
                                'building' => $value_schedule->meetingTime->buildingDescription,
                                'start_date' => $value_schedule->meetingTime->startDate,
                                'end_date' => $value_schedule->meetingTime->endDate,
                                'credits' => $value_schedule->meetingTime->creditHourSession,
                                'type' => $value_schedule->meetingTime->meetingScheduleType,
                                'room' => $value_schedule->meetingTime->room,
                                'is_monday' => $value_schedule->meetingTime->monday,
                                'is_tuesday' => $value_schedule->meetingTime->tuesday,
                                'is_wednesday' => $value_schedule->meetingTime->wednesday,
                                'is_thursday' => $value_schedule->meetingTime->thursday,
                                'is_friday' => $value_schedule->meetingTime->friday,
                                'is_saturday' => $value_schedule->meetingTime->saturday,
                                'is_sunday' => $value_schedule->meetingTime->sunday,
                            ]
                        )
                    ];
                }
            ));

            $bar->advance();
        }

        $this->subjects = $this->subjects->flatten(1);

        File::put(
            storage_path('subjects' . DIRECTORY_SEPARATOR . 'all_info' . '.json'),
            json_encode($this->subjects->toArray(), JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT)
        );

        $bar->finish();

        $this->info(' Archivo creado exitosamente');


        return Command::SUCCESS;
    }
}
