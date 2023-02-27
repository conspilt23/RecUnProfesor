<?php

namespace App\Console\Commands;

use App\Models\Teacher;
use Illuminate\Console\Command;

class UpdateTeachers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update:teachers';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Actualiza los profesores del cuatrimestre en cuestión.';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $subjectFile = file_get_contents(storage_path('subjects\all_info.json'));
        $subjects = json_decode($subjectFile, true);


        $this->info('Actualizando profesores en la base de datos...');

        $bar = $this->output->createProgressBar(count($subjects));
        $bar->start();
        // Agregar el registro "Sin profesor"
        Teacher::withoutGlobalScopes()
            ->updateOrCreate([
                'name' => 'Sin profesor'
            ]);
            
        // Agregar los demás profesores
        foreach ($subjects as $subject) {
            foreach (json_decode($subject['teachers'], true) as $name) {
                Teacher::withoutGlobalScopes()
                    ->updateOrCreate([
                        'name' => $name
                    ]);
            }
            $bar->advance();
        }

        $bar->finish();
        $this->info(' Profesores actualizados correctamente');
    }
}
