<?php

namespace App\Console\Commands;

use App\Models\Quarter;
use App\Models\Schedule;
use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class UpgradeQuarter extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'upgrade:quarter';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Actualiza el cuatrimestre actual hacia el proximo';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        if ($this->ask('Antes de proceder, es necesario que hayas actualizado la lista de archivos json con las asignaturas nuevas (en la ruta ./database/data/) ¿Desea continuar?', 'no') == 'no') {
            return 0;
        }

        $this->call('update:teachers');
        $this->call('update:subjects');
        $this->call('update:schedules');


        $this->info(' Se han actualizado los profesores, asignaturas y horarios correctamente para el cuatrimestre actual.');


    }
}
