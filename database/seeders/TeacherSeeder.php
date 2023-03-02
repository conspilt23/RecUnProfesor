<?php

namespace Database\Seeders;

use App\Models\Scopes\HideUnavailableTeacherScope;
use App\Models\Teacher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subjectFile = file_get_contents(storage_path('subjects' . DIRECTORY_SEPARATOR . 'all_info.json'));
        $subjects = json_decode($subjectFile, true);

        // Agregar el registro "Sin profesor"
        Teacher::withoutGlobalScope(HideUnavailableTeacherScope::class)
            ->updateOrCreate([
                'name' => 'Sin profesor'
            ]);
            
        // Agregar los demás profesores
        foreach ($subjects as $subject) {
            foreach (json_decode($subject['teachers'], true) as $name) {
                Teacher::withoutGlobalScope(HideUnavailableTeacherScope::class)
                    ->updateOrCreate([
                        'name' => $name
                    ]);
            }
        }
    }
}