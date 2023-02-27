<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Career;

class CareersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Career::truncate();
        $careers = [
            [
                'name' => 'Ingeniería eléctrica',
                'icon_class' => 'fa-plug-circle-bolt',
                'class' => 'career'
            ],

            [
                'name' => 'Ingeniería electrónica',
                'icon_class' =>  'fa-car-battery',
                'class' => 'career'
            ],

            
            [
                'name' => 'Ingeniería en sistemas de computación',
                'icon_class' =>  'fa-display',
                'class' => 'career'
            ],

            [
                'name' => 'Ingeniería de software',
                'icon_class' =>  'fa-code',
                'class' => 'career'
            ],

            [
                'name' => 'Ingeniería industrial',
                'icon_class' =>  'fa-industry',
                'class' => 'career'
            ],

            [
                'name' => 'Licenciatura en administración de empresas',
                'icon_class' =>  'fa-building',
                'class' => 'cmp'
            ],

            [
                'name' => 'Licenciatura en administración turística y hotelera',
                'icon_class' =>  'fa-earth-americas',
                'class' => 'cmp'
            ],

            [
                'name' => 'Licenciatura en comunicación digital',
                'icon_class' =>  'fa-video',
                'class' => 'cmp'
            ],

            [
                'name' => 'Licenciatura en comunicación y periodismo multiplataforma',
                'icon_class' =>  'fa-tower-broadcast',
                'class' => 'career'
            ],

            [
                'name' => 'Licenciatura en cinematografía',
                'icon_class' =>  'fa-clapperboard',
                'class' => 'career'
            ],

            
            [
                'name' => 'Licenciatura en contabilidad',
                'icon_class' =>  'fa-calculator',
                'class' => 'cmp'
            ],

            [
                'name' => 'Licenciatura en derecho',
                'icon_class' =>  'fa-scale-balanced',
                'class' => 'career'
            ],

            [
                'name' => 'Licenciatura en diseño de interiores',
                'icon_class' =>  'fa-object-group',
                'class' => 'cmp',
            ],

            [
                'name' => 'Licenciatura en diseño gráfico',
                'icon_class' =>  'fa-cubes',
                'class' => 'cmp'
            ],

            [
                'name' => 'Licenciatura en educación artística',
                'icon_class' =>  'fa-palette',
                'class' => 'career'
            ],

            [
                'name' => 'Licenciatura en estadística',
                'icon_class' =>  'fa-diagram-project',
                'class' => 'career'
            ],

            [
                'name' => 'Licenciatura en finanzas',
                'icon_class' =>  'fa-money-check-dollar',
                'class' => 'career'
            ],

            
            [
                'name' => 'Licenciatura en lengua española y literatura orientada a la educación secundaria',
                'icon_class' =>  'fa-person-chalkboard',
                'class' => 'career'
            ],

            [
                'name' => 'Licenciatura en inglés orientada a la enseñanza',
                'icon_class' =>  'fa-flag-usa',
                'class' => 'career'
            ],

            [
                'name' => 'Licenciatura en matemática orientada a la educación secundaria',
                'icon_class' =>  'fa-square-root-variable',
                'class' => 'career'
            ],

            [
                'name' => 'Licenciatura en mercadotecnia',
                'icon_class' =>  'fa-square-poll-vertical',
                'class' => 'cmp'
            ],

            [
                'name' => 'Licenciatura en negocios internacionales',
                'icon_class' =>  'fa-globe',
                'class' => 'cmp'
            ],
            
            [
                'name' => 'Licenciatura en publicidad',
                'icon_class' =>  'fa-rectangle-ad',
                'class' => 'cmp'
            ],

            [
                'name' => 'Técnico analista financiero',
                'icon_class' =>  'fa-chart-line',
                'class' => 'career'
            ]
        ];

        Career::insert($careers);
    }
}
