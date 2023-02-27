<?php

namespace Database\Seeders;

use App\Models\Quarter;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuarterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
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
    }
}