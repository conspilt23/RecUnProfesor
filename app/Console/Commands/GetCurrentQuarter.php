<?php

namespace App\Console\Commands;

use App\Models\Quarter;
use Illuminate\Console\Command;

class GetCurrentQuarter extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'get:current_quarter';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Obtiene los cuatrimestres o los actualiza al cuatrimestre actual y al año actual para la opinión de profesores.';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $currentYear = date('Y');
        $currentMonth = date('n');

        $quarters = [
            1 => 'Enero - Abril',
            2 => 'Mayo - Agosto',
            3 => 'Septiembre - Diciembre'
        ];

        for ($year = 2008; $year <= $currentYear; $year++) {
            foreach ($quarters as $quarterNumber => $quarterName) {
                if ($year == $currentYear && $quarterNumber > ceil($currentMonth / 4)) {
                    break;
                }

                Quarter::updateOrCreate([
                    'period' => $quarterName . ' ' . $year,
                ]);
            }
        }

        $this->info('Cuatrimestre obtenido correctamente. El último cuatrimestre reciente es: ' . Quarter::orderBy('id', 'desc')->first()->period);

        return Command::SUCCESS;
    }
}
