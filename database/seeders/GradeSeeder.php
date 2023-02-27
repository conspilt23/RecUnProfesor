<?php

namespace Database\Seeders;

use App\Models\Grade;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $qualifications = [
            [
                'grade' => 'A',
                'value' => 4
            ],

            [
                'grade' => 'B',
                'value' => 3
            ],

            [
                'grade' => 'C',
                'value' => 2
            ],

            [
                'grade' => 'D',
                'value' => 1
            ],

            [
                'grade' => 'E',
                'value' => null
            ],

            [
                'grade' => 'F',
                'value' => 0
            ],

            [
                'grade' => 'FN',
                'value' => 0
            ],

            [
                'grade' => 'L',
                'value' => null
            ],

            [
                'grade' => 'R',
                'value' => null
            ],
        ];

        Grade::insert($qualifications);
    }
}
