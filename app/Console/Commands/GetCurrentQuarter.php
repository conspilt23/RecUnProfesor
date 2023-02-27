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
        $currentQuarter = floor((date('n') - 1) / 3) + 1;
        for ($year = $currentYear; $year >= 2008; $year--) {
            if ($year == $currentYear) {
                if ($currentQuarter >= 1) {
                    Quarter::updateOrCreate([

                        'period' => 'Enero - Abril ' . $year,
                    ]);
                }
                if ($currentQuarter >= 2) {
                    Quarter::updateOrCreate([

                        'period' => 'Mayo - Agosto ' . $year,
                    ]);
                }
                if ($currentQuarter >= 3) {
                    Quarter::updateOrCreate([

                        'period' => 'Septiembre - Diciembre ' . $year,
                    ]);
                }
            } else {
                Quarter::updateOrCreate([
                    'period' => 'Enero - Abril ' . $year,
                ]);
                Quarter::updateOrCreate([
                    'period' => 'Mayo - Agosto ' . $year,
                ]);
                Quarter::updateOrCreate([
                    'period' => 'Septiembre - Diciembre ' . $year,
                ]);
            }
        }

        $this->info('Cuatrimestre obtenido correctamente. El último cuatrimestre reciente es: ' .  Quarter::find(1)->period);

        return Command::SUCCESS;
    }
}
