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
        
        $currentQuarter = $this->getQuarter($currentMonth);
        
        Quarter::where('period', '>', $this->getCurrentPeriod())->delete();
        
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

        $lastQuarter = Quarter::orderBy('id', 'desc')->first();
        $this->info('Cuatrimestre obtenido correctamente. El último cuatrimestre reciente es: ' . $lastQuarter->period);

        return Command::SUCCESS;
    }
    
    /**
     * Obtener el cuatrimestre basado en el mes.
     *
     * @param int $month
     * @return int
     */
    protected function getQuarter($month)
    {
        if ($month >= 1 && $month <= 4) {
            return 1;
        } elseif ($month >= 5 && $month <= 8) {
            return 2;
        } elseif ($month >= 9 && $month <= 12) {
            return 3;
        }
        
        return 0;
    }
    
    /**
     * Obtener el periodo actual.
     *
     * @return string
     */
    protected function getCurrentPeriod()
    {
        $currentMonth = date('n');
        
        if ($currentMonth >= 1 && $currentMonth <= 4) {
            return 'Enero - Abril';
        } elseif ($currentMonth >= 5 && $currentMonth <= 8) {
            return 'Mayo - Agosto';
        } elseif ($currentMonth >= 9 && $currentMonth <= 12) {
            return 'Septiembre - Diciembre';
        }
        
        return '';
    }
}
