<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pensum;

class PensumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pensum::truncate();
        
        $INE7_pensum = [
            [
                'career' => 'Ingeniería eléctrica',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'ESP101',
                'subject' => 'ANALISIS DE TEXTOS DISCURSIVOS',
                'credits' => 3,
                'pre_requirements' => ''
            ],

            [
                'career' => 'Ingeniería eléctrica',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'IDI033',
                'subject' => 'INGLES PARA INGENIERIA I',
                'credits' => 3,
                'pre_requirements' => ''
            ],

            [
                'career' => 'Ingeniería eléctrica',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'MAT126',
                'subject' => '	MATEMATICA BASICA PARA INGENIERIA',
                'credits' => 4,
                'pre_requirements' => ''
            ],

            [
                'career' => 'Ingeniería eléctrica',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'SOC011',
                'subject' => 'HISTORIA SOCIAL DOMINICANA',
                'credits' => 3,
                'pre_requirements' => ''
            ],

            [
                'career' => 'Ingeniería eléctrica',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'SOC030',
                'subject' => 'ORIENTACION UNIVERSITARIA',
                'credits' => 2,
                'pre_requirements' => ''
            ],


            [
                'career' => 'Ingeniería eléctrica',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'SOC041',
                'subject' => 'ECOLOGIA',
                'credits' => 2,
                'pre_requirements' => ''
            ],

            [
                'career' => 'Ingeniería eléctrica',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'TEC098',
                'subject' => 'INTRODUCCION A LA INGENIERIA',
                'credits' => 2,
                'pre_requirements' => ''
            ],

            [
                'career' => 'Ingeniería eléctrica',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'TEC105',
                'subject' => 'QUIMICA GENERAL I',
                'credits' => 3,
                'pre_requirements' => ''
            ],

            [
                'career' => 'Ingeniería eléctrica',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'TEC105',
                'subject' => 'LABORATORIO QUIMICA GENERAL I',
                'credits' => 1,
                'pre_requirements' => ''
            ],

            [

                'career' => 'Ingeniería eléctrica',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'ESP102',
                'subject' => 'REDACCION DE TEXTOS DISCURSIVOS I',
                'credits' => 4,
                'pre_requirements' => 'ESP101'
            ],

            [
                'career' => 'Ingeniería eléctrica',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'IDI034',
                'subject' => 'INGLES PARA INGENIERIA II',
                'credits' => 3,
                'pre_requirements' => '	IDI033'
            ],

            [
                'career' => 'Ingeniería eléctrica',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'MAT127',
                'subject' => 'MATEMATICA SUPERIOR PARA INGENIERIA',
                'credits' => 5,
                'pre_requirements' => 'MAT126'
            ],

            [
                'career' => 'Ingeniería eléctrica',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'TEC106',
                'subject' => 'QUIMICA GENERAL II',
                'credits' => 3,
                'pre_requirements' => 'TEC105'
            ],

            [
                'career' => 'Ingeniería eléctrica',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'TEC108',
                'subject' => 'LABORATORIO QUIMICA GENERAL II',
                'credits' => 1,
                'pre_requirements' => 'TEC105, TEC107'
            ],

            [
                'career' => 'Ingeniería eléctrica',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'TEC111',
                'subject' => 'FISICA GENERAL',
                'credits' => 4,
                'pre_requirements' => 'MAT126'
            ],

            [
                'career' => 'Ingeniería eléctrica',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'TEC132',
                'subject' => 'LABORATORIO FISICA GENERAL',
                'credits' => 1,
                'pre_requirements' => 'MAT126'
            ],


            [
                'career' => 'Ingeniería eléctrica',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'ESP103',
                'subject' => 'REDACCION DE TEXTOS DISCURSIVOS II',
                'credits' => 4,
                'pre_requirements' => 'ESP102'
            ],

            [
                'career' => 'Ingeniería eléctrica',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'IDI035',
                'subject' => 'INGLES PARA INGENIERIA III',
                'credits' => 3,
                'pre_requirements' => 'IDI034'
            ],

            [
                'career' => 'Ingeniería eléctrica',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'MAT131',
                'subject' => 'CALCULO Y GEOMETRIA ANALITICA I',
                'credits' => 5,
                'pre_requirements' => 'MAT127'
            ],

            [
                'career' => 'Ingeniería eléctrica',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'MAT222',
                'subject' => 'ALGEBRA LINEAL',
                'credits' => 4,
                'pre_requirements' => 'MAT127'
            ],

            [
                'career' => 'Ingeniería eléctrica',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'TEC112',
                'subject' => 'FISICA MECANICA',
                'credits' => 4,
                'pre_requirements' => 'MAT127, TEC111'
            ],

            [
                'career' => 'Ingeniería eléctrica',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'TEC114',
                'subject' => 'LABORATORIO FISICA MECANICA',
                'credits' => 1,
                'pre_requirements' => 'TEC111, TEC132'
            ],



            [
                'career' => 'Ingeniería eléctrica',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'IDI036',
                'subject' => 'INGLES P/INGENIERIA IV',
                'credits' => 3,
                'pre_requirements' => 'IDI035'
            ],

            [
                'career' => 'Ingeniería eléctrica',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'MAT132',
                'subject' => 'CALCULO Y GEOMETRIA ANALITICA II',
                'credits' => 5,
                'pre_requirements' => 'MAT131'
            ],

            [
                'career' => 'Ingeniería eléctrica',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'MAT253',
                'subject' => 'PROBAB. Y ESTADISTICA PARA INGENIERIA',
                'credits' => 4,
                'pre_requirements' => 'MAT131'
            ],

            [
                'career' => 'Ingeniería eléctrica',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'TEC113',
                'subject' => 'FISICA ELECTRICA',
                'credits' => 4,
                'pre_requirements' => 'TEC112'
            ],

            [
                'career' => 'Ingeniería eléctrica',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'TEC120',
                'subject' => 'LABORATORIO FISICA ELECTRICA',
                'credits' => 1,
                'pre_requirements' => 'TEC112, TEC114'
            ],

            [
                'career' => 'Ingeniería eléctrica',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'TEC174',
                'subject' => 'CIENCIA DE LOS MATERIALES',
                'credits' => 3,
                'pre_requirements' => 'TEC106'
            ],


            [
                'career' => 'Ingeniería eléctrica',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'IDI037',
                'subject' => 'INGLES P/INGENIERIA V',
                'credits' => 3,
                'pre_requirements' => 'IDI036'
            ],

            [
                'career' => 'Ingeniería eléctrica',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'MAT270',
                'subject' => 'ECUACIONES DIFERENCIALES',
                'credits' => 5,
                'pre_requirements' => 'MAT132'
            ],

            [
                'career' => 'Ingeniería eléctrica',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'TEC123',
                'subject' => 'LABOR.CIRCUITOS ELECTRICOS I',
                'credits' => 1,
                'pre_requirements' => 'TEC113, TEC120'
            ],

            [
                'career' => 'Ingeniería eléctrica',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'TEC128',
                'subject' => 'FISICA CUANTICA',
                'credits' => 3,
                'pre_requirements' => 'TEC113'
            ],

            [
                'career' => 'Ingeniería eléctrica',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'TEC129',
                'subject' => 'DIBUJO TECNICO ASISTIDO POR COMPUTADORAS',
                'credits' => 3,
                'pre_requirements' => 'MAT127'
            ],

            [
                'career' => 'Ingeniería eléctrica',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'TEC146',
                'subject' => 'CIRCUITOS ELECTRICOS I',
                'credits' => 3,
                'pre_requirements' => 'MAT132, TEC113'
            ],

            [
                'career' => 'Ingeniería eléctrica',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'TEC190',
                'subject' => 'LOGICA DIGITAL I',
                'credits' => 3,
                'pre_requirements' => 'TEC113'
            ],

            [
                'career' => 'Ingeniería eléctrica',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'TEC200',
                'subject' => 'LAB. LOGICA DIGITAL I',
                'credits' => 1,
                'pre_requirements' => 'TEC113, TEC120'
            ],

            [
                'career' => 'Ingeniería eléctrica',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'IDI038',
                'subject' => 'INGLES P/INGENIERIA VI',
                'credits' => 3,
                'pre_requirements' => 'IDI037'
            ],

            [
                'career' => 'Ingeniería eléctrica',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'MAT271',
                'subject' => 'METODO MATEMATICO',
                'credits' => 5,
                'pre_requirements' => 'MAT270'
            ],

            [
                'career' => 'Ingeniería eléctrica',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'TEC124',
                'subject' => 'LABOR.CIRCUITOS ELECTRICOS II',
                'credits' => 1,
                'pre_requirements' => 'TEC123, TEC146'
            ],

            [
                'career' => 'Ingeniería eléctrica',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'TEC147',
                'subject' => 'CIRCUITOS ELECTRICOS II',
                'credits' => 3,
                'pre_requirements' => 'MAT270, TEC146'
            ],

            [
                'career' => 'Ingeniería eléctrica',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'TEC148',
                'subject' => 'ELECTRONICA I',
                'credits' => 3,
                'pre_requirements' => 'TEC146'
            ],

            [
                'career' => 'Ingeniería eléctrica',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'TEC155',
                'subject' => 'LAB.DE ELECTRONICA I',
                'credits' => 1,
                'pre_requirements' => 'TEC123, TEC146'
            ],

            [
                'career' => 'Ingeniería eléctrica',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'TEC269',
                'subject' => 'ELECTRODINAMICA',
                'credits' => 3,
                'pre_requirements' => 'MAT270'
            ],

            [
                'career' => 'Ingeniería eléctrica',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'TEC650',
                'subject' => 'DISEÑO DE INGENIERIA ASISTIDO POR COMPUTADORA',
                'credits' => 3,
                'pre_requirements' => 'TEC129'
            ],

            [
                'career' => 'Ingeniería eléctrica',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'IDI039',
                'subject' => 'INGLES P/INGENIERIA VII',
                'credits' => 3,
                'pre_requirements' => 'IDI038',
            ],
            [
                'career' => 'Ingeniería eléctrica',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'SOC250',
                'subject' => 'METODOLOGIA DE LA INVESTIGACION CIENTIFICA',
                'credits' => 3,
                'pre_requirements' => '',
            ],
            [
                'career' => 'Ingeniería eléctrica',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'TEC149',
                'subject' => 'ELECTRONICA II',
                'credits' => 3,
                'pre_requirements' => 'TEC148, TEC155',
            ],
            [
                'career' => 'Ingeniería eléctrica',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'TEC156',
                'subject' => 'LAB.ELECTRONICA II',
                'credits' => 1,
                'pre_requirements' => 'TEC148, TEC155',
            ],
            [
                'career' => 'Ingeniería eléctrica',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'TEC164',
                'subject' => 'CIRCUITOS ELECTRICOS III',
                'credits' => 3,
                'pre_requirements' => 'TEC147',
            ],
            [
                'career' => 'Ingeniería eléctrica',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'TEC175',
                'subject' => 'TEORIA DE COMUNICACIONES',
                'credits' => 3,
                'pre_requirements' => 'MAT271, TEC147',
            ],
            [
                'career' => 'Ingeniería eléctrica',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'TEC191',
                'subject' => 'LOGICA DIGITAL II',
                'credits' => 3,
                'pre_requirements' => 'TEC190',
            ],
            [
                'career' => 'Ingeniería eléctrica',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'TEC201',
                'subject' => 'LAB. LOGICA DIGITAL II',
                'credits' => 1,
                'pre_requirements' => 'TEC190, TEC200',
            ],
            [
                'career' => 'Ingeniería eléctrica',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'TEC611',
                'subject' => 'LABORATORIO TEORIA DE COMUNICACIONES',
                'credits' => 1,
                'pre_requirements' => 'TEC124, TEC147',
            ],

            [
                'career' => 'Ingeniería eléctrica',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'CON127',
                'subject' => 'CONTABILIDAD DE COSTOS PARA INGENIEROS',
                'credits' => 3,
                'pre_requirements' => 'MAT127',
            ],
            [
                'career' => 'Ingeniería eléctrica',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'IDI040',
                'subject' => 'INGLES P/INGENIERIA VIII',
                'credits' => 3,
                'pre_requirements' => 'IDI039',
            ],
            [
                'career' => 'Ingeniería eléctrica',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'TEC118',
                'subject' => 'MAQUINAS ELECTRICAS I',
                'credits' => 3,
                'pre_requirements' => 'TEC124, TEC147',
            ],
            [
                'career' => 'Ingeniería eléctrica',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'TEC154',
                'subject' => 'ELECTRONICA DE POTENCIA',
                'credits' => 3,
                'pre_requirements' => 'TEC149',
            ],
            [
                'career' => 'Ingeniería eléctrica',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'TEC157',
                'subject' => 'LAB.DE ELECTRONICA DE POTENCIA',
                'credits' => 1,
                'pre_requirements' => 'TEC149, TEC156',
            ],
            [
                'career' => 'Ingeniería eléctrica',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'TEC162',
                'subject' => 'LABOR.MAQUINAS ELECTRICAS I',
                'credits' => 1,
                'pre_requirements' => 'TEC124, TEC147',
            ],
            [
                'career' => 'Ingeniería eléctrica',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'TEC176',
                'subject' => 'MICROPROCESADORES I',
                'credits' => 3,
                'pre_requirements' => 'TEC191, TEC201',
            ],
            [
                'career' => 'Ingeniería eléctrica',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'TEC205',
                'subject' => 'LABOR. MICROPROCESADORES I',
                'credits' => 1,
                'pre_requirements' => 'TEC191, TEC201',
            ],
            [
                'career' => 'Ingeniería eléctrica',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'TEC213',
                'subject' => 'SISTEMA DE CONTROL I',
                'credits' => 3,
                'pre_requirements' => 'MAT222, TEC164',
            ],

            [
                'career' => 'Ingeniería eléctrica',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'IDI041',
                'subject' => 'INGLES P/INGENIERIA IX',
                'credits' => 3,
                'pre_requirements' => 'IDI040',
            ],
            [
                'career' => 'Ingeniería eléctrica',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'IND423',
                'subject' => 'INGENIERIA ECONOMICA',
                'credits' => 3,
                'pre_requirements' => 'CON127',
            ],
            [
                'career' => 'Ingeniería eléctrica',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'TEC119',
                'subject' => 'MAQUINAS ELECTRICAS II',
                'credits' => 3,
                'pre_requirements' => 'TEC118',
            ],
            [
                'career' => 'Ingeniería eléctrica',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'TEC163',
                'subject' => 'LAB.MAQUINAS ELECTRICAS II',
                'credits' => 1,
                'pre_requirements' => 'TEC162',
            ],
            [
                'career' => 'Ingeniería eléctrica',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'TEC177',
                'subject' => 'MICROPROCESADORES II',
                'credits' => 3,
                'pre_requirements' => 'TEC176',
            ],
            [
                'career' => 'Ingeniería eléctrica',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'TEC184',
                'subject' => 'PLANTAS Y SUBESTACIONES I',
                'credits' => 4,
                'pre_requirements' => 'TEC118',
            ],
            [
                'career' => 'Ingeniería eléctrica',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'TEC193',
                'subject' => 'CONTROL DE MOTORES ELECTRICOS I',
                'credits' => 3,
                'pre_requirements' => 'TEC118',
            ],
            [
                'career' => 'Ingeniería eléctrica',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'TEC194',
                'subject' => 'LAB. CONTROL MOTORES ELECTRICOS I',
                'credits' => 1,
                'pre_requirements' => 'TEC162',
            ],
            [
                'career' => 'Ingeniería eléctrica',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'TEC206',
                'subject' => 'LABOR. MICROPROCESADORES II',
                'credits' => 1,
                'pre_requirements' => 'TEC176, TEC205',
            ],
            [
                'career' => 'Ingeniería eléctrica',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'TEC214',
                'subject' => 'SISTEMAS DE CONTROL II',
                'credits' => 3,
                'pre_requirements' => 'TEC213',
            ],

            [
                'career' => 'Ingeniería eléctrica',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'IDI042',
                'subject' => 'INGLES P/INGENIERIA X',
                'credits' => 3,
                'pre_requirements' => 'IDI041',
            ],
            [
                'career' => 'Ingeniería eléctrica',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'INF331',
                'subject' => 'PROGRAMACION PARA INGENIEROS',
                'credits' => 3,
                'pre_requirements' => 'TEC214, TEC650',
            ],
            [
                'career' => 'Ingeniería eléctrica',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'TEC167',
                'subject' => 'DISEÑO INSTALACIONES ELECTRICAS I',
                'credits' => 3,
                'pre_requirements' => 'TEC118, TEC650',
            ],
            [
                'career' => 'Ingeniería eléctrica',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'TEC216',
                'subject' => 'CONTROL DE MOTORES ELECTRICOS II',
                'credits' => 3,
                'pre_requirements' => 'TEC193',
            ],
            [
                'career' => 'Ingeniería eléctrica',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'TEC217',
                'subject' => 'LAB. CONTROL MOTORES ELECTRICOS II',
                'credits' => 1,
                'pre_requirements' => 'TEC193, TEC194',
            ],
            [
                'career' => 'Ingeniería eléctrica',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'TEC225',
                'subject' => 'PLANTAS ELECTRICAS Y SUBSTACIONES II',
                'credits' => 4,
                'pre_requirements' => 'TEC184',
            ],
            [
                'career' => 'Ingeniería eléctrica',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'TEC556',
                'subject' => 'CONTROLES LOGICOS PROGRAMABLES I',
                'credits' => 3,
                'pre_requirements' => 'TEC193, TEC194',
            ],
            [
                'career' => 'Ingeniería eléctrica',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'TEC636',
                'subject' => 'LAB. CONTROLES LOGICOS PROGRAMABLES I',
                'credits' => 1,
                'pre_requirements' => 'TEC193, TEC194',
            ],
            [
                'career' => 'Ingeniería eléctrica',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'TEC718',
                'subject' => 'INSTRUMENTACION',
                'credits' => 3,
                'pre_requirements' => 'TEC149, TEC214',
            ],

            [
                'career' => 'Ingeniería eléctrica',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'ADM219',
                'subject' => 'FORMULAC.Y EVAL. DE PROYECTOS',
                'credits' => 3,
                'pre_requirements' => 'IND423',
            ],
            [
                'career' => 'Ingeniería eléctrica',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'OPT1',
                'subject' => 'ELECTIVA I',
                'credits' => 3,
                'pre_requirements' => '',
            ],
            [
                'career' => 'Ingeniería eléctrica',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'TEC168',
                'subject' => 'DISEÑO INSTALACIONES ELECTRICAS II',
                'credits' => 3,
                'pre_requirements' => 'TEC167, TEC184',
            ],
            [
                'career' => 'Ingeniería eléctrica',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'TEC185',
                'subject' => 'LINEAS DE TRANSMISION',
                'credits' => 4,
                'pre_requirements' => 'TEC184',
            ],
            [
                'career' => 'Ingeniería eléctrica',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'TEC189',
                'subject' => 'ANAL. SISTEMAS ELECTRICOS POTENCIA I',
                'credits' => 3,
                'pre_requirements' => 'TEC184',
            ],
            [
                'career' => 'Ingeniería eléctrica',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'TEC231',
                'subject' => 'SISTEMA DE CONTROL DIGITAL',
                'credits' => 3,
                'pre_requirements' => 'TEC214',
            ],
            [
                'career' => 'Ingeniería eléctrica',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'TEC559',
                'subject' => 'CONTROLES LOGICOS PROGRAMABLES II',
                'credits' => 3,
                'pre_requirements' => 'TEC214, TEC556',
            ],
            [
                'career' => 'Ingeniería eléctrica',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'TEC600',
                'subject' => 'AUTOMATIZACION Y ROBOTICA I',
                'credits' => 3,
                'pre_requirements' => 'TEC214, TEC556',
            ],
            [
                'career' => 'Ingeniería eléctrica',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'TEC616',
                'subject' => 'LAB. AUTOMATIZACION Y ROBOTICA I',
                'credits' => 1,
                'pre_requirements' => 'TEC214, TEC556',
            ],
            [
                'career' => 'Ingeniería eléctrica',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'TEC628',
                'subject' => 'LAB. CONT. LOGICOS PROGR. II',
                'credits' => 1,
                'pre_requirements' => 'TEC214, TEC556, TEC636',
            ],
            [
                'career' => 'Ingeniería eléctrica',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'TEC706',
                'subject' => 'LAB. ANALISIS SIST. ELECTR. POTENCIA I',
                'credits' => 1,
                'pre_requirements' => 'TEC184',
            ],

            [
                'career' => 'Ingeniería eléctrica',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'ADM120',
                'subject' => 'LIDERAZGO Y TECNICAS DE SUPERVISION',
                'credits' => 3,
                'pre_requirements' => ''
            ],
            [
                'career' => 'Ingeniería eléctrica',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'IND360',
                'subject' => 'SEGURIDAD E HIGIENE INDUSTRIAL',
                'credits' => 3,
                'pre_requirements' => 'TEC098'
            ],
            [
                'career' => 'Ingeniería eléctrica',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'OPT2',
                'subject' => 'ELECTIVA II',
                'credits' => 3,
                'pre_requirements' => ''
            ],
            [
                'career' => 'Ingeniería eléctrica',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'SOC031',
                'subject' => 'ETICA PROFESIONAL',
                'credits' => 3,
                'pre_requirements' => 'SOC250'
            ],
            [
                'career' => 'Ingeniería eléctrica',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'SOC280',
                'subject' => 'SEMINARIO DE GRADO',
                'credits' => 2,
                'pre_requirements' => '73% De los créditos aprobados'
            ],
            [
                'career' => 'Ingeniería eléctrica',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'TEC615',
                'subject' => 'AUTOMATIZACION Y ROBOTICA II',
                'credits' => 3,
                'pre_requirements' => 'TEC214, TEC600'
            ],
            [
                'career' => 'Ingeniería eléctrica',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'TEC625',
                'subject' => 'ANAL. SISTEMAS ELECTR. POTENCIA II',
                'credits' => 4,
                'pre_requirements' => 'TEC184, TEC189, TEC706'
            ],
            [
                'career' => 'Ingeniería eléctrica',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'TEC652',
                'subject' => 'LAB. AUTOMATIZACION Y ROBOTICA II',
                'credits' => 1,
                'pre_requirements' => 'TEC214, TEC600, TEC616'
            ],
            [
                'career' => 'Ingeniería eléctrica',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'TEC720',
                'subject' => 'PROYECTO DE SISTEMAS ELECTRICOS',
                'credits' => 3,
                'pre_requirements' => 'TEC168, TEC184'
            ],
            [
                'career' => 'Ingeniería eléctrica',
                'quarter' => '13°. Cuatrimestre',
                'code' => 'OPTDEP',
                'subject' => 'OPTATIVA DEPORTE',
                'credits' => 0,
                'pre_requirements' => ''
            ],
            [
                'career' => 'Ingeniería eléctrica',
                'quarter' => '13°. Cuatrimestre',
                'code' => 'TES-MON',
                'subject' => 'TRABAJO DE GRADO O CURSO MONOGRAFICO',
                'credits' => 6,
                'pre_requirements' => '97% De los créditos aprobados'
            ]
        ];


        $IEL7_pensum = [
            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'ESP101',
                'subject' => 'ANALISIS DE TEXTOS DISCURSIVOS',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'IDI033',
                'subject' => 'INGLES PARA INGENIERIA I',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'MAT126',
                'subject' => 'MATEMATICA BASICA PARA INGENIERIA',
                'credits' => '4',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'SOC011',
                'subject' => 'HISTORIA SOCIAL DOMINICANA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'SOC030',
                'subject' => 'ORIENTACION UNIVERSITARIA',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'SOC041',
                'subject' => 'ECOLOGIA',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'TEC098',
                'subject' => 'INTRODUCCION A LA INGENIERIA',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'TEC105',
                'subject' => 'QUIMICA GENERAL I',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'TEC107',
                'subject' => 'LABORATORIO QUIMICA GENERAL I',
                'credits' => '1',
                'pre_requirements' => ''
            ],

            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'ESP102',
                'subject' => 'REDACCION DE TEXTOS DISCURSIVOS I',
                'credits' => '4',
                'pre_requirements' => 'ESP101'
            ],
            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'IDI034',
                'subject' => 'INGLES PARA INGENIERIA II',
                'credits' => '3',
                'pre_requirements' => 'IDI033'
            ],
            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'MAT127',
                'subject' => 'MATEMATICA SUPERIOR PARA INGENIERIA',
                'credits' => '5',
                'pre_requirements' => 'MAT126'
            ],
            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'TEC106',
                'subject' => 'QUIMICA GENERAL II',
                'credits' => '3',
                'pre_requirements' => 'TEC105'
            ],
            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'TEC108',
                'subject' => 'LABORATORIO QUIMICA GENERAL II',
                'credits' => '1',
                'pre_requirements' => 'TEC105, TEC107'
            ],
            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'TEC111',
                'subject' => 'FISICA GENERAL',
                'credits' => '4',
                'pre_requirements' => 'MAT126'
            ],
            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'TEC132',
                'subject' => 'LABORATORIO FISICA GENERAL',
                'credits' => '1',
                'pre_requirements' => 'MAT126'
            ],

            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'ESP103',
                'subject' => 'REDACCION DE TEXTOS DISCURSIVOS II',
                'credits' => '4',
                'pre_requirements' => 'ESP102'
            ],
            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'IDI035',
                'subject' => 'INGLES P/INGENIERIA III',
                'credits' => '3',
                'pre_requirements' => 'IDI034'
            ],
            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'MAT131',
                'subject' => 'CALCULO Y GEOMETRIA ANALITICA I',
                'credits' => '5',
                'pre_requirements' => 'MAT127'
            ],
            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'MAT222',
                'subject' => 'ALGEBRA LINEAL',
                'credits' => '4',
                'pre_requirements' => 'MAT127'
            ],
            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'TEC112',
                'subject' => 'FISICA MECANICA',
                'credits' => '4',
                'pre_requirements' => 'MAT127, TEC111'
            ],
            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'TEC114',
                'subject' => 'LABORATORIO FISICA MECANICA',
                'credits' => '1',
                'pre_requirements' => 'TEC111, TEC132'
            ],


            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'IDI036',
                'subject' => 'INGLES P/INGENIERIA IV',
                'credits' => '3',
                'pre_requirements' => 'IDI035',
            ],
            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'MAT132',
                'subject' => 'CALCULO Y GEOMETRIA ANALITICA II',
                'credits' => '5',
                'pre_requirements' => 'MAT131',
            ],
            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'MAT253',
                'subject' => 'PROBAB. Y ESTADISTICA PARA INGENIERIA',
                'credits' => '4',
                'pre_requirements' => 'MAT131',
            ],
            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'TEC113',
                'subject' => 'FISICA ELECTRICA',
                'credits' => '4',
                'pre_requirements' => 'TEC112',
            ],
            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'TEC120',
                'subject' => 'LABORATORIO FISICA ELECTRICA',
                'credits' => '1',
                'pre_requirements' => 'TEC112, TEC114',
            ],
            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'TEC174',
                'subject' => 'CIENCIA DE LOS MATERIALES',
                'credits' => '3',
                'pre_requirements' => 'TEC106',
            ],
            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'IDI037',
                'subject' => 'INGLES P/INGENIERIA V',
                'credits' => '3',
                'pre_requirements' => 'IDI036',
            ],
            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'MAT270',
                'subject' => 'ECUACIONES DIFERENCIALES',
                'credits' => '5',
                'pre_requirements' => 'MAT132',
            ],
            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'TEC123',
                'subject' => 'LABOR.CIRCUITOS ELECTRICOS I',
                'credits' => '1',
                'pre_requirements' => 'TEC113, TEC120',
            ],
            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'TEC128',
                'subject' => 'FISICA CUANTICA',
                'credits' => '3',
                'pre_requirements' => 'TEC113',
            ],
            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'TEC129',
                'subject' => 'DIBUJO TECNICO ASISTIDO POR COMPUTADORAS',
                'credits' => '3',
                'pre_requirements' => 'MAT127',
            ],
            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'TEC146',
                'subject' => 'CIRCUITOS ELECTRICOS I',
                'credits' => '3',
                'pre_requirements' => 'MAT132, TEC113',
            ],
            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'TEC190',
                'subject' => 'LOGICA DIGITAL I',
                'credits' => '3',
                'pre_requirements' => 'TEC113',
            ],
            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'TEC200',
                'subject' => 'LAB. LOGICA DIGITAL I',
                'credits' => '1',
                'pre_requirements' => 'TEC113, TEC120',
            ],
            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'IDI038',
                'subject' => 'INGLES P/INGENIERIA VI',
                'credits' => '3',
                'pre_requirements' => 'IDI037',
            ],
            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'MAT271',
                'subject' => 'METODO MATEMATICO',
                'credits' => '5',
                'pre_requirements' => 'MAT270',
            ],
            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'TEC124',
                'subject' => 'LABOR.CIRCUITOS ELECTRICOS II',
                'credits' => '1',
                'pre_requirements' => 'TEC123, TEC146',
            ],
            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'TEC147',
                'subject' => 'CIRCUITOS ELECTRICOS II',
                'credits' => '3',
                'pre_requirements' => 'MAT270, TEC146',
            ],
            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'TEC148',
                'subject' => 'ELECTRONICA I',
                'credits' => '3',
                'pre_requirements' => 'TEC146',
            ],
            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'TEC155',
                'subject' => 'LAB.DE ELECTRONICA I',
                'credits' => '1',
                'pre_requirements' => 'TEC123, TEC146',
            ],
            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'TEC269',
                'subject' => 'ELECTRODINAMICA',
                'credits' => '3',
                'pre_requirements' => 'MAT270',
            ],
            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'TEC650',
                'subject' => 'DISEÑO DE INGENIERIA ASISTIDO POR COMPUTADORA',
                'credits' => '3',
                'pre_requirements' => 'TEC129',
            ],
            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'IDI039',
                'subject' => 'INGLES P/INGENIERIA VII',
                'credits' => '3',
                'pre_requirements' => 'IDI038',
            ],
            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'SOC250',
                'subject' => 'METODOLOGIA DE LA INVESTIGACION CIENTIFICA',
                'credits' => '3',
                'pre_requirements' => '',
            ],
            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'TEC149',
                'subject' => 'ELECTRONICA II',
                'credits' => '3',
                'pre_requirements' => 'TEC148, TEC155',
            ],
            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'TEC156',
                'subject' => 'LAB.ELECTRONICA II',
                'credits' => '1',
                'pre_requirements' => 'TEC148, TEC155',
            ],
            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'TEC164',
                'subject' => 'CIRCUITOS ELECTRICOS III',
                'credits' => '3',
                'pre_requirements' => 'TEC147',
            ],
            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'TEC175',
                'subject' => 'TEORIA DE COMUNICACIONES',
                'credits' => '3',
                'pre_requirements' => 'MAT271, TEC147',
            ],
            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'TEC191',
                'subject' => 'LOGICA DIGITAL II',
                'credits' => '3',
                'pre_requirements' => 'TEC190',
            ],
            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'TEC201',
                'subject' => 'LAB. LOGICA DIGITAL II',
                'credits' => '1',
                'pre_requirements' => 'TEC190, TEC200',
            ],
            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'TEC611',
                'subject' => 'LABORATORIO TEORIA DE COMUNICACIONES',
                'credits' => '1',
                'pre_requirements' => 'TEC124, TEC147',
            ],
            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'CON127',
                'subject' => 'CONTABILIDAD DE COSTOS PARA INGENIEROS',
                'credits' => '3',
                'pre_requirements' => 'MAT127',
            ],
            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'IDI040',
                'subject' => 'INGLES P/INGENIERIA VIII',
                'credits' => '3',
                'pre_requirements' => 'IDI039',
            ],
            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'INF331',
                'subject' => 'PROGRAMACION PARA INGENIEROS',
                'credits' => '3',
                'pre_requirements' => 'TEC650',
            ],
            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'TEC154',
                'subject' => 'ELECTRONICA DE POTENCIA',
                'credits' => '3',
                'pre_requirements' => 'TEC149',
            ],
            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'TEC157',
                'subject' => 'LAB.DE ELECTRONICA DE POTENCIA',
                'credits' => '1',
                'pre_requirements' => 'TEC149, TEC156',
            ],
            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'TEC176',
                'subject' => 'MICROPROCESADORES I',
                'credits' => '3',
                'pre_requirements' => 'TEC191, TEC201',
            ],
            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'TEC205',
                'subject' => 'LABOR. MICROPROCESADORES I',
                'credits' => '1',
                'pre_requirements' => 'TEC191, TEC201',
            ],
            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'TEC213',
                'subject' => 'SISTEMA DE CONTROL I',
                'credits' => '3',
                'pre_requirements' => 'MAT222, TEC164',
            ],
            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'TEC713',
                'subject' => 'ONDAS ELECTROMAGNETICAS Y FEEDERS-LABORATORIO',
                'credits' => '4',
                'pre_requirements' => 'MAT271',
            ],
            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'IDI041',
                'subject' => 'INGLES P/INGENIERIA IX',
                'credits' => '3',
                'pre_requirements' => 'IDI040',
            ],
            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'IND423',
                'subject' => 'INGENIERIA ECONOMICA',
                'credits' => '3',
                'pre_requirements' => 'CON127',
            ],
            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'INF152',
                'subject' => 'ESTRUCTURA DE DATOS',
                'credits' => '3',
                'pre_requirements' => 'INF331',
            ],
            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'INF168',
                'subject' => 'SISTEMAS OPERATIVOS I',
                'credits' => '3',
                'pre_requirements' => 'INF331',
            ],
            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'TEC177',
                'subject' => 'MICROPROCESADORES II',
                'credits' => '3',
                'pre_requirements' => 'TEC176',
            ],
            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'TEC206',
                'subject' => 'LABOR. MICROPROCESADORES II',
                'credits' => '1',
                'pre_requirements' => 'TEC176, TEC205',
            ],
            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'TEC557',
                'subject' => 'PROCESAMIENTO DIGITAL DE SEÑALES I',
                'credits' => '3',
                'pre_requirements' => 'TEC713',
            ],
            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'TEC604',
                'subject' => 'LAB. PROC. DIGITAL DE SEÑALES I',
                'credits' => '1',
                'pre_requirements' => 'TEC713',
            ],
            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'TEC605',
                'subject' => 'ELECTRONICA DIGITAL',
                'credits' => '3',
                'pre_requirements' => 'INF331, TEC149',
            ],
            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'TEC606',
                'subject' => 'LAB. ELECTRONICA DIGITAL',
                'credits' => '1',
                'pre_requirements' => 'INF331, TEC149, TEC156',
            ],
            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'TEC618',
                'subject' => 'ANTENAS',
                'credits' => '3',
                'pre_requirements' => 'TEC713',
            ],
            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'TEC620',
                'subject' => 'LABORATORIO DE ANTENAS',
                'credits' => '1',
                'pre_requirements' => 'TEC713',
            ],
            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'TEC621',
                'subject' => 'COMUNICACIONES OPTICAS',
                'credits' => '3',
                'pre_requirements' => 'TEC164, TEC175, TEC713',
            ],
            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'TEC622',
                'subject' => 'LABORATORIO DE FIBRAS OPTICAS',
                'credits' => '1',
                'pre_requirements' => 'TEC164, TEC175, TEC713',
            ],
            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'ADM140',
                'subject' => 'ADMINISTRACION FINANCIERA I',
                'credits' => '3',
                'pre_requirements' => 'MAT270',
            ],
            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'IDI042',
                'subject' => 'INGLES P/INGENIERIA X',
                'credits' => '3',
                'pre_requirements' => 'IDI041',
            ],
            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'INF166',
                'subject' => 'TELEPROCESO I',
                'credits' => '3',
                'pre_requirements' => 'INF168, INF331, TEC175',
            ],
            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'INF177',
                'subject' => 'LENGUAJE DE MAQUINAS',
                'credits' => '4',
                'pre_requirements' => 'INF168, INF331',
            ],
            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'TEC178',
                'subject' => 'TELECOMUNICACIONES',
                'credits' => '3',
                'pre_requirements' => 'TEC621, TEC622, TEC713',
            ],
            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'TEC294',
                'subject' => 'SISTEMA DE TELEVISION',
                'credits' => '3',
                'pre_requirements' => 'TEC618, TEC620, TEC713',
            ],
            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'TEC296',
                'subject' => 'LABORATORIO SISTEMA DE TELEVISION',
                'credits' => '1',
                'pre_requirements' => 'TEC618, TEC620, TEC713',
            ],
            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'TEC297',
                'subject' => 'MICROONDAS',
                'credits' => '3',
                'pre_requirements' => 'TEC618, TEC620, TEC713',
            ],
            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'TEC298',
                'subject' => 'LABORATORIO MICROONDAS',
                'credits' => '1',
                'pre_requirements' => 'TEC618, TEC620, TEC713',
            ],
            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'TEC558',
                'subject' => 'PROCESAMIENTO DIGITAL DE SEÑALES II',
                'credits' => '3',
                'pre_requirements' => 'TEC557, TEC604, TEC713',
            ],
            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'TEC608',
                'subject' => 'LABORATORIO PROCESAMIENTO DIGITAL DE SEÑALES II',
                'credits' => '1',
                'pre_requirements' => 'TEC557, TEC604, TEC713',
            ],
            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'TEC638',
                'subject' => 'DISEÑO DIGITAL CON LENGUAJE HARDWARE I',
                'credits' => '3',
                'pre_requirements' => 'INF331, TEC177',
            ],
            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'TEC639',
                'subject' => 'LAB. DISEÑO DIGITAL CON LENG. HARDWARE I',
                'credits' => '1',
                'pre_requirements' => 'INF331, TEC177, TEC205',
            ],
            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'TEC645',
                'subject' => 'ARQUITECTURA Y ORGANIZACION DE COMPUTAD.',
                'credits' => '3',
                'pre_requirements' => 'INF331, TEC177',
            ],
            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'ADM219',
                'subject' => 'FORMULAC.Y EVAL. DE PROYECTOS',
                'credits' => '3',
                'pre_requirements' => 'IND423',
            ],
            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'IND421',
                'subject' => 'GERENCIA DE RECURSOS HUMANOS',
                'credits' => '3',
                'pre_requirements' => 'CON127',
            ],
            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'OPT1',
                'subject' => 'ELECTIVA I',
                'credits' => '3',
                'pre_requirements' => '',
            ],
            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'TEC609',
                'subject' => 'INTERFASE COMPUTADOR Y PERIFERICOS',
                'credits' => '3',
                'pre_requirements' => 'INF331, TEC177',
            ],
            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'TEC613',
                'subject' => 'LABORATORIO INTERFACE Y PERIFERICOS',
                'credits' => '1',
                'pre_requirements' => 'INF331, TEC177, TEC206',
            ],
            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'TEC632',
                'subject' => 'COMUNICACIONES DIGITALES',
                'credits' => '4',
                'pre_requirements' => 'TEC175, TEC713',
            ],
            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'TEC633',
                'subject' => 'LAB. COMUNICACIONES DIGITALES',
                'credits' => '1',
                'pre_requirements' => 'TEC175, TEC713',
            ],
            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'TEC634',
                'subject' => 'SIST. TRANSM. RADIO FRECUENCIA',
                'credits' => '4',
                'pre_requirements' => 'TEC618, TEC620, TEC713',
            ],
            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'TEC641',
                'subject' => 'DISEÑO DIGITAL CON LENGUAJE HARDWARE II',
                'credits' => '3',
                'pre_requirements' => 'INF331, TEC638',
            ],
            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'TEC642',
                'subject' => 'LAB. DIS. DIGITAL CON LENG HARDWARE II',
                'credits' => '1',
                'pre_requirements' => 'INF331, TEC638, TEC639',
            ],
            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'TEC644',
                'subject' => 'DISEÑO FUENTES DE PODER CONMUTADAS',
                'credits' => '3',
                'pre_requirements' => 'TEC154, TEC157',
            ],
            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'TEC646',
                'subject' => 'LAB. SIST. TRANSM. RADIO FRECUENCIA',
                'credits' => '1',
                'pre_requirements' => 'TEC618, TEC620, TEC713',
            ],
            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'ADM120',
                'subject' => 'LIDERAZGO Y TECNICAS DE SUPERVISION',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'IND360',
                'subject' => 'SEGURIDAD E HIGIENE INDUSTRIAL',
                'credits' => '3',
                'pre_requirements' => 'TEC098'
            ],
            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'INF167',
                'subject' => 'TELEPROCESO II',
                'credits' => '3',
                'pre_requirements' => 'INF166, INF331'
            ],
            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'OPT2',
                'subject' => 'ELECTIVA II',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'SOC031',
                'subject' => 'ETICA PROFESIONAL',
                'credits' => '3',
                'pre_requirements' => 'SOC250'
            ],
            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'SOC280',
                'subject' => 'SEMINARIO DE GRADO',
                'credits' => '2',
                'pre_requirements' => 'SOC250, 73% De los créditos aprobados'
            ],
            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'TEC629',
                'subject' => 'TEORIA DE TELEFONIA',
                'credits' => '4',
                'pre_requirements' => 'TEC621, TEC622, TEC713'
            ],
            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'TEC643',
                'subject' => 'CIRCUITOS INTEGRADOS',
                'credits' => '3',
                'pre_requirements' => 'INF331, TEC605'
            ],
            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'TEC712',
                'subject' => 'LABORATORIO TEORIA DE TELEFONIA',
                'credits' => '1',
                'pre_requirements' => 'TEC621, TEC622, TEC713'
            ],

            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '13°. Cuatrimestre',
                'code' => 'OPTDEP',
                'subject' => 'OPTATIVA DEPORTE',
                'credits' => '0',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Ingeniería electrónica',
                'quarter' => '13°. Cuatrimestre',
                'code' => 'TES-MON',
                'subject' => 'TRABAJO DE GRADO O CURSO MONOGRAFICO',
                'credits' => '6',
                'pre_requirements' => '92% de los créditos aprobados'
            ]
        ];

        $IND7_pensum = [
            [
                'career' => 'Ingeniería industrial',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'ESP101',
                'subject' => 'ANALISIS DE TEXTOS DISCURSIVOS',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Ingeniería industrial',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'IDI033',
                'subject' => 'INGLES PARA INGENIERIA I',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Ingeniería industrial',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'MAT126',
                'subject' => 'MATEMATICA BASICA PARA INGENIERIA',
                'credits' => '4',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Ingeniería industrial',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'SOC011',
                'subject' => 'HISTORIA SOCIAL DOMINICANA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Ingeniería industrial',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'SOC030',
                'subject' => 'ORIENTACION UNIVERSITARIA',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Ingeniería industrial',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'SOC041',
                'subject' => 'ECOLOGIA',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Ingeniería industrial',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'TEC098',
                'subject' => 'INTRODUCCION A LA INGENIERIA',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Ingeniería industrial',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'TEC105',
                'subject' => 'QUIMICA GENERAL I',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Ingeniería industrial',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'TEC107',
                'subject' => 'LABORATORIO QUIMICA GENERAL I',
                'credits' => '1',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Ingeniería industrial',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'ESP102',
                'subject' => 'REDACCION DE TEXTOS DISCURSIVOS I',
                'credits' => '4',
                'pre_requirements' => 'ESP101'
            ],
            [
                'career' => 'Ingeniería industrial',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'IDI034',
                'subject' => 'INGLES PARA INGENIERIA II',
                'credits' => '3',
                'pre_requirements' => 'IDI033'
            ],
            [
                'career' => 'Ingeniería industrial',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'MAT127',
                'subject' => 'MATEMATICA SUPERIOR PARA INGENIERIA',
                'credits' => '5',
                'pre_requirements' => 'MAT126'
            ],
            [
                'career' => 'Ingeniería industrial',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'TEC106',
                'subject' => 'QUIMICA GENERAL II',
                'credits' => '3',
                'pre_requirements' => 'TEC105'
            ],
            [
                'career' => 'Ingeniería industrial',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'TEC108',
                'subject' => 'LABORATORIO QUIMICA GENERAL II',
                'credits' => '1',
                'pre_requirements' => 'TEC105, TEC107'
            ],
            [
                'career' => 'Ingeniería industrial',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'TEC111',
                'subject' => 'FISICA GENERAL',
                'credits' => '4',
                'pre_requirements' => 'MAT126'
            ],
            [
                'career' => 'Ingeniería industrial',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'TEC132',
                'subject' => 'LABORATORIO FISICA GENERAL',
                'credits' => '1',
                'pre_requirements' => 'MAT126'
            ],
            [
                'career' => 'Ingeniería industrial',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'ESP103',
                'subject' => 'REDACCION DE TEXTOS DISCURSIVOS II',
                'credits' => '4',
                'pre_requirements' => 'ESP102'
            ],
            [
                'career' => 'Ingeniería industrial',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'IDI035',
                'subject' => 'INGLES P/INGENIERIA III',
                'credits' => '3',
                'pre_requirements' => 'IDI034'
            ],
            [
                'career' => 'Ingeniería industrial',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'MAT131',
                'subject' => 'CALCULO Y GEOMETRIA ANALITICA I',
                'credits' => '5',
                'pre_requirements' => 'MAT127'
            ],
            [
                'career' => 'Ingeniería industrial',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'MAT222',
                'subject' => 'ALGEBRA LINEAL',
                'credits' => '4',
                'pre_requirements' => 'MAT127'
            ],
            [
                'career' => 'Ingeniería industrial',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'TEC112',
                'subject' => 'FISICA MECANICA',
                'credits' => '4',
                'pre_requirements' => 'MAT127, TEC111'
            ],
            [
                'career' => 'Ingeniería industrial',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'TEC114',
                'subject' => 'LABORATORIO FISICA MECANICA',
                'credits' => '1',
                'pre_requirements' => 'TEC111, TEC132'
            ],
            [
                'career' => 'Ingeniería industrial',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'IDI036',
                'subject' => 'INGLES P/INGENIERIA IV',
                'credits' => '3',
                'pre_requirements' => 'IDI035'
            ],
            [
                'career' => 'Ingeniería industrial',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'MAT132',
                'subject' => 'CALCULO Y GEOMETRIA ANALITICA II',
                'credits' => '5',
                'pre_requirements' => 'MAT131'
            ],
            [
                'career' => 'Ingeniería industrial',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'MAT253',
                'subject' => 'PROBAB. Y ESTADISTICA PARA INGENIERIA',
                'credits' => '4',
                'pre_requirements' => 'MAT131'
            ],
            [
                'career' => 'Ingeniería industrial',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'TEC113',
                'subject' => 'FISICA ELECTRICA',
                'credits' => '4',
                'pre_requirements' => 'TEC112'
            ],
            [
                'career' => 'Ingeniería industrial',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'TEC120',
                'subject' => 'LABORATORIO FISICA ELECTRICA',
                'credits' => '1',
                'pre_requirements' => 'TEC112, TEC114'
            ],
            [
                'career' => 'Ingeniería industrial',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'TEC174',
                'subject' => 'CIENCIA DE LOS MATERIALES',
                'credits' => '3',
                'pre_requirements' => 'TEC106'
            ],
            [
                'career' => 'Ingeniería industrial',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'ADM101',
                'subject' => 'GESTION DE NEGOCIOS',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Ingeniería industrial',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'IDI037',
                'subject' => 'INGLES P/INGENIERIA V',
                'credits' => '3',
                'pre_requirements' => 'IDI036'
            ],
            [
                'career' => 'Ingeniería industrial',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'MAT251',
                'subject' => 'ESTADISTICA II',
                'credits' => '4',
                'pre_requirements' => 'MAT253'
            ],
            [
                'career' => 'Ingeniería industrial',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'MAT270',
                'subject' => 'ECUACIONES DIFERENCIALES',
                'credits' => '5',
                'pre_requirements' => 'MAT132'
            ],
            [
                'career' => 'Ingeniería industrial',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'TEC123',
                'subject' => 'LABOR.CIRCUITOS ELECTRICOS I',
                'credits' => '1',
                'pre_requirements' => 'TEC113, TEC120'
            ],
            [
                'career' => 'Ingeniería industrial',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'TEC129',
                'subject' => 'DIBUJO TECNICO ASISTIDO POR COMPUTADORAS',
                'credits' => '3',
                'pre_requirements' => 'MAT127'
            ],
            [
                'career' => 'Ingeniería industrial',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'TEC146',
                'subject' => 'CIRCUITOS ELECTRICOS I',
                'credits' => '3',
                'pre_requirements' => 'MAT132, TEC113'
            ],
            [
                'career' => 'Ingeniería industrial',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'IDI038',
                'subject' => 'INGLES P/INGENIERIA VI',
                'credits' => '3',
                'pre_requirements' => 'IDI037'
            ],
            [
                'career' => 'Ingeniería industrial',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'IND173',
                'subject' => 'TERMODINAMICA',
                'credits' => '3',
                'pre_requirements' => 'TEC112'
            ],
            [
                'career' => 'Ingeniería industrial',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'IND179',
                'subject' => 'RESISTENCIA DE LOS MATERIALES',
                'credits' => '3',
                'pre_requirements' => 'TEC112, TEC174'
            ],
            [
                'career' => 'Ingeniería industrial',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'MAT271',
                'subject' => 'METODO MATEMATICO',
                'credits' => '5',
                'pre_requirements' => 'MAT270'
            ],
            [
                'career' => 'Ingeniería industrial',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'TEC503',
                'subject' => 'ELECTRONICA INDUSTRIAL',
                'credits' => '4',
                'pre_requirements' => 'TEC146'
            ],
            [
                'career' => 'Ingeniería industrial',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'TEC504',
                'subject' => 'LABORATORIO ELECTRONICA INDUSTRIAL',
                'credits' => '1',
                'pre_requirements' => 'TEC123'
            ],
            [
                'career' => 'Ingeniería industrial',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'TEC650',
                'subject' => 'DISEÑO DE INGENIERIA ASISTIDO POR COMPUTADORA',
                'credits' => '3',
                'pre_requirements' => 'TEC129'
            ],
            [
                'career' => 'Ingeniería industrial',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'ADM120',
                'subject' => 'LIDERAZGO Y TECNICAS DE SUPERVISION',
                'credits' => '3',
                'pre_requirements' => 'ADM101'
            ],
            [
                'career' => 'Ingeniería industrial',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'IDI039',
                'subject' => 'INGLES P/INGENIERIA VII',
                'credits' => '3',
                'pre_requirements' => 'IDI038'
            ],
            [
                'career' => 'Ingeniería industrial',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'IND370',
                'subject' => 'INVEST. DE OPERACIONES I',
                'credits' => '4',
                'pre_requirements' => 'MAT132'
            ],
            [
                'career' => 'Ingeniería industrial',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'IND543',
                'subject' => 'DISEÑO DE SISTEMAS DE PRODUCCION',
                'credits' => '4',
                'pre_requirements' => 'MAT253'
            ],
            [
                'career' => 'Ingeniería industrial',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'SOC250',
                'subject' => 'METODOLOGIA DE LA INVESTIGACION CIENTIFICA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Ingeniería industrial',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'TEC172',
                'subject' => 'MECANICA DE LOS FLUIDOS',
                'credits' => '4',
                'pre_requirements' => 'IND173'
            ],
            [
                'career' => 'Ingeniería industrial',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'ADM140',
                'subject' => 'ADMINISTRACION FINANCIERA I',
                'credits' => '3',
                'pre_requirements' => 'ADM120, MAT253'
            ],
            [
                'career' => 'Ingeniería industrial',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'CON127',
                'subject' => 'CONTABILIDAD DE COSTOS PARA INGENIEROS',
                'credits' => '3',
                'pre_requirements' => 'MAT127'
            ],
            [
                'career' => 'Ingeniería industrial',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'IDI040',
                'subject' => 'INGLES P/INGENIERIA VIII',
                'credits' => '3',
                'pre_requirements' => 'IDI039'
            ],
            [
                'career' => 'Ingeniería industrial',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'IND384',
                'subject' => 'PROCESOS INDUSTRIALES I',
                'credits' => '3',
                'pre_requirements' => 'TEC174'
            ],
            [
                'career' => 'Ingeniería industrial',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'IND390',
                'subject' => 'INGENIERIA DE METODOS I',
                'credits' => '3',
                'pre_requirements' => 'MAT253'
            ],
            [
                'career' => 'Ingeniería industrial',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'IND410',
                'subject' => 'CONTROL DE PRODUCCION I',
                'credits' => '3',
                'pre_requirements' => 'IND543'
            ],
            [
                'career' => 'Ingeniería industrial',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'IND430',
                'subject' => 'CONTROL ESTADISTICO DE CALIDAD',
                'credits' => '3',
                'pre_requirements' => 'MAT253'
            ],
            [
                'career' => 'Ingeniería industrial',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'ADM162',
                'subject' => 'GERENCIA DE OPERACIONES',
                'credits' => '3',
                'pre_requirements' => 'IND370'
            ],
            [
                'career' => 'Ingeniería industrial',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'IDI041',
                'subject' => 'INGLES P/INGENIERIA IX',
                'credits' => '3',
                'pre_requirements' => 'IDI040'
            ],
            [
                'career' => 'Ingeniería industrial',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'IND386',
                'subject' => 'PROCESOS INDUSTRIALES II',
                'credits' => '3',
                'pre_requirements' => 'IND384'
            ],
            [
                'career' => 'Ingeniería industrial',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'IND395',
                'subject' => 'INGENIERIA DE METODOS II',
                'credits' => '3',
                'pre_requirements' => 'IND390'
            ],
            [
                'career' => 'Ingeniería industrial',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'IND415',
                'subject' => 'CONTROL DE PRODUCCION II',
                'credits' => '3',
                'pre_requirements' => 'IND410'
            ],
            [
                'career' => 'Ingeniería industrial',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'IND423',
                'subject' => 'INGENIERIA ECONOMICA',
                'credits' => '3',
                'pre_requirements' => 'ADM140, CON127'
            ],
            [
                'career' => 'Ingeniería industrial',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'INF312',
                'subject' => 'SISTEMA DE INFORMACION GERENCIAL',
                'credits' => '3',
                'pre_requirements' => 'ADM101'
            ],
            [
                'career' => 'Ingeniería industrial',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'IDI042',
                'subject' => 'INGLES P/INGENIERIA X',
                'credits' => '3',
                'pre_requirements' => 'IDI041'
            ],
            [
                'career' => 'Ingeniería industrial',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'IND432',
                'subject' => 'LOGISTICA',
                'credits' => '3',
                'pre_requirements' => 'IND543'
            ],
            [
                'career' => 'Ingeniería industrial',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'IND452',
                'subject' => 'GERENCIA DE MANTENIMIENTO',
                'credits' => '3',
                'pre_requirements' => 'IND543, TEC503'
            ],
            [
                'career' => 'Ingeniería industrial',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'IND455',
                'subject' => 'SISTEMA COMPT. DE PRODUCCION',
                'credits' => '4',
                'pre_requirements' => 'IND415'
            ],
            [
                'career' => 'Ingeniería industrial',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'SOC110',
                'subject' => 'PSICOLOGIA INDUSTRIAL',
                'credits' => '3',
                'pre_requirements' => 'ADM101'
            ],
            [
                'career' => 'Ingeniería industrial',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'TEC302',
                'subject' => 'SIMULACION DE MODELO POR COMPUT.',
                'credits' => '4',
                'pre_requirements' => 'IND395'
            ],
            [
                'career' => 'Ingeniería industrial',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'ADM219',
                'subject' => 'FORMULAC.Y EVAL. DE PROYECTOS',
                'credits' => '3',
                'pre_requirements' => 'IND423'
            ],
            [
                'career' => 'Ingeniería industrial',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'DER016',
                'subject' => 'DERECHO LABORAL',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Ingeniería industrial',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'IND421',
                'subject' => 'GERENCIA DE RECURSOS HUMANOS',
                'credits' => '3',
                'pre_requirements' => 'ADM101'
            ],
            [
                'career' => 'Ingeniería industrial',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'IND501',
                'subject' => 'SISTEMAS DE SEGURIDAD',
                'credits' => '3',
                'pre_requirements' => 'IND452'
            ],
            [
                'career' => 'Ingeniería industrial',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'OPT1',
                'subject' => 'ELECTIVA I',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Ingeniería industrial',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'TEC614',
                'subject' => 'AUTOMATIZACION Y ROBOTICA',
                'credits' => '4',
                'pre_requirements' => 'IND395, TEC503'
            ],
            [
                'career' => 'Ingeniería industrial',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'IND451',
                'subject' => 'TOPICOS ESPEC. ING. INDUSTRIAL',
                'credits' => '4',
                'pre_requirements' => 'IND386'
            ],
            [
                'career' => 'Ingeniería industrial',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'IND460',
                'subject' => 'DECISIONES GERENCIALES',
                'credits' => '3',
                'pre_requirements' => 'ADM140, IND430'
            ],
            [
                'career' => 'Ingeniería industrial',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'IND890',
                'subject' => 'INGENIERIA AMBIENTAL',
                'credits' => '2',
                'pre_requirements' => 'IND370, SOC041'
            ],
            [
                'career' => 'Ingeniería industrial',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'OPT2',
                'subject' => 'ELECTIVA II',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Ingeniería industrial',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'SOC031',
                'subject' => 'ETICA PROFESIONAL',
                'credits' => '3',
                'pre_requirements' => 'SOC250'
            ],
            [
                'career' => 'Ingeniería industrial',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'SOC280',
                'subject' => 'SEMINARIO DE GRADO',
                'credits' => '2',
                'pre_requirements' => 'SOC250 80% De los créditos aprobados'
            ],
            [
                'career' => 'Ingeniería industrial',
                'quarter' => '13°. Cuatrimestre',
                'code' => 'OPTDEP',
                'subject' => 'OPTATIVA DEPORTE',
                'credits' => '0',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Ingeniería industrial',
                'quarter' => '13°. Cuatrimestre',
                'code' => 'TES-MON',
                'subject' => 'TRABAJO DE GRADO O CURSO MONOGRAFICO',
                'credits' => '6',
                'pre_requirements' => '97% De los créditos aprobados'
            ]
        ];


        $ISC10_pensum = [
            [
                'career' => 'Ingeniería en sistemas de computación',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'ESP101',
                'subject' => 'ANALISIS DE TEXTOS DISCURSIVOS',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Ingeniería en sistemas de computación',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'INF319',
                'subject' => 'COMPUTACION I',
                'credits' => '4',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Ingeniería en sistemas de computación',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'MAT126',
                'credits' => '4',
                'subject' => 'MATEMATICA BASICA PARA INGENIERIA',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Ingeniería en sistemas de computación',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'SOC011',
                'subject' => 'HISTORIA SOCIAL DOMINICANA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Ingeniería en sistemas de computación',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'SOC030',
                'subject' => 'ORIENTACION UNIVERSITARIA',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Ingeniería en sistemas de computación',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'SOC043',
                'subject' => 'GESTION AMBIENTAL',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Ingeniería en sistemas de computación',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'ENG001',
                'subject' => 'INGLES I',
                'credits' => '0',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Ingeniería en sistemas de computación',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'ESP102',
                'subject' => 'REDACCION DE TEXTOS DISCURSIVOS I',
                'credits' => '4',
                'pre_requirements' => 'ESP101'
            ],
            [
                'career' => 'Ingeniería en sistemas de computación',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'INF321',
                'subject' => 'ALGORITMOS',
                'credits' => '4',
                'pre_requirements' => 'INF319'
            ],
            [
                'career' => 'Ingeniería en sistemas de computación',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'MAT127',
                'subject' => 'MATEMATICA SUPERIOR PARA INGENIERIA',
                'credits' => '5',
                'pre_requirements' => 'MAT126'
            ],
            [
                'career' => 'Ingeniería en sistemas de computación',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'TEC111',
                'subject' => 'FISICA GENERAL',
                'credits' => '4',
                'pre_requirements' => 'MAT126'
            ],
            [
                'career' => 'Ingeniería en sistemas de computación',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'TEC132',
                'subject' => 'LABORATORIO FISICA GENERAL',
                'credits' => '1',
                'pre_requirements' => 'MAT126'
            ],
            [
                'career' => 'Ingeniería en sistemas de computación',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'ENG002',
                'subject' => 'INGLES II',
                'credits' => '0',
                'pre_requirements' => 'ENG001'
            ],
            [
                'career' => 'Ingeniería en sistemas de computación',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'ESP103',
                'subject' => 'REDACCION DE TEXTOS DISCURSIVOS II',
                'credits' => '4',
                'pre_requirements' => 'ESP102'
            ],
            [
                'career' => 'Ingeniería en sistemas de computación',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'INF140',
                'subject' => 'PROGRAMACION ESTRUCTURADA',
                'credits' => '3',
                'pre_requirements' => 'INF321'
            ],
            [
                'career' => 'Ingeniería en sistemas de computación',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'INF323',
                'subject' => 'ARQUITECTURA DEL COMPUTADOR',
                'credits' => '3',
                'pre_requirements' => 'INF321'
            ],
            [
                'career' => 'Ingeniería en sistemas de computación',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'MAT222',
                'subject' => 'ALGEBRA LINEAL',
                'credits' => '4',
                'pre_requirements' => 'MAT127'
            ],
            [
                'career' => 'Ingeniería en sistemas de computación',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'SOC031',
                'subject' => 'ETICA PROFESIONAL',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Ingeniería en sistemas de computación',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'SOC150',
                'subject' => 'RELACIONES HUMANAS',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Ingeniería en sistemas de computación',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'ENG003',
                'subject' => 'INGLES III',
                'credits' => '0',
                'pre_requirements' => 'ENG002'
            ],
            [
                'career' => 'Ingeniería en sistemas de computación',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'CON107',
                'subject' => 'CONTABILIDAD EMPRESARIAL',
                'credits' => '5',
                'pre_requirements' => 'MAT222, SOC031'
            ],
            [
                'career' => 'Ingeniería en sistemas de computación',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'INF111',
                'subject' => 'PROGRAMACION ORIENTADA A OBJETOS',
                'credits' => '3',
                'pre_requirements' => 'INF140'
            ],
            [
                'career' => 'Ingeniería en sistemas de computación',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'INF160',
                'subject' => 'ANALISIS Y DISEÑO DE SISTEMAS I',
                'credits' => '3',
                'pre_requirements' => 'INF140'
            ],
            [
                'career' => 'Ingeniería en sistemas de computación',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'INF168',
                'subject' => 'SISTEMAS OPERATIVOS I',
                'credits' => '3',
                'pre_requirements' => 'INF323'
            ],
            [
                'career' => 'Ingeniería en sistemas de computación',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'MAT131',
                'subject' => 'CALCULO Y GEOMETRIA ANALITICA I',
                'credits' => '5',
                'pre_requirements' => 'MAT222'
            ],
            [
                'career' => 'Ingeniería en sistemas de computación',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'ENG004',
                'subject' => 'INGLES IV',
                'credits' => '0',
                'pre_requirements' => 'ENG003'
            ],
            [
                'career' => 'Ingeniería en sistemas de computación',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'INF152',
                'subject' => 'ESTRUCTURA DE DATOS',
                'credits' => '3',
                'pre_requirements' => 'INF111'
            ],
            [
                'career' => 'Ingeniería en sistemas de computación',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'INF161',
                'subject' => 'ANALISIS Y DISEÑO DE SISTEMAS II',
                'credits' => '3',
                'pre_requirements' => 'INF160'
            ],
            [
                'career' => 'Ingeniería en sistemas de computación',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'MAT132',
                'subject' => 'CALCULO Y GEOMETRIA ANALITICA II',
                'credits' => '5',
                'pre_requirements' => 'MAT131'
            ],
            [
                'career' => 'Ingeniería en sistemas de computación',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'TEC113',
                'subject' => 'FISICA ELECTRICA',
                'credits' => '4',
                'pre_requirements' => 'TEC111, TEC132'
            ],
            [
                'career' => 'Ingeniería en sistemas de computación',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'TEC120',
                'subject' => 'LABORATORIO FISICA ELECTRICA',
                'credits' => '1',
                'pre_requirements' => 'TEC111, TEC132'
            ],
            [
                'career' => 'Ingeniería en sistemas de computación',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'ENG005',
                'subject' => 'INGLES V',
                'credits' => '0',
                'pre_requirements' => 'ENG004'
            ],
            [
                'career' => 'Ingeniería en sistemas de computación',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'INF166',
                'subject' => 'TELEPROCESO I',
                'credits' => '3',
                'pre_requirements' => 'INF168'
            ],
            [
                'career' => 'Ingeniería en sistemas de computación',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'INF169',
                'subject' => 'SISTEMAS OPERATIVOS II',
                'credits' => '3',
                'pre_requirements' => 'INF168'
            ],
            [
                'career' => 'Ingeniería en sistemas de computación',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'MAT151',
                'subject' => 'MATEMATICA DISCRETA',
                'credits' => '4',
                'pre_requirements' => 'MAT132'
            ],
            [
                'career' => 'Ingeniería en sistemas de computación',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'MAT252',
                'subject' => 'PROBABILIDAD Y ESTADISTICA',
                'credits' => '4',
                'pre_requirements' => 'MAT132'
            ],
            [
                'career' => 'Ingeniería en sistemas de computación',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'TEC123',
                'subject' => 'LABOR.CIRCUITOS ELECTRICOS I',
                'credits' => '1',
                'pre_requirements' => 'TEC113, TEC120'
            ],
            [
                'career' => 'Ingeniería en sistemas de computación',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'TEC146',
                'subject' => 'CIRCUITOS ELECTRICOS I',
                'credits' => '3',
                'pre_requirements' => 'TEC113, TEC120'
            ],
            [
                'career' => 'Ingeniería en sistemas de computación',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'ENG006',
                'subject' => 'INGLES VI',
                'credits' => '0',
                'pre_requirements' => 'ENG005'
            ],
            [
                'career' => 'Ingeniería en sistemas de computación',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'ADM091',
                'subject' => 'ADMINISTRACION I',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Ingeniería en sistemas de computación',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'INF167',
                'subject' => 'TELEPROCESO II',
                'credits' => '3',
                'pre_requirements' => 'INF166'
            ],
            [
                'career' => 'Ingeniería en sistemas de computación',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'INF315',
                'subject' => 'SISTEMAS OPERATIVOS III',
                'credits' => '3',
                'pre_requirements' => 'INF169'
            ],
            [
                'career' => 'Ingeniería en sistemas de computación',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'INF402',
                'subject' => 'FUNDAMENTOS DE BASES DE DATOS',
                'credits' => '3',
                'pre_requirements' => 'MAT151'
            ],
            [
                'career' => 'Ingeniería en sistemas de computación',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'SOC250',
                'subject' => 'METODOLOGIA DE LA INVESTIGACION CIENTIFICA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Ingeniería en sistemas de computación',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'ENG007',
                'subject' => 'INGLES VII',
                'credits' => '0',
                'pre_requirements' => 'ENG006'
            ],
            [
                'career' => 'Ingeniería en sistemas de computación',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'ADM150',
                'subject' => 'GERENCIA DE PROCESOS',
                'credits' => '4',
                'pre_requirements' => 'ADM091'
            ],
            [
                'career' => 'Ingeniería en sistemas de computación',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'INF309',
                'subject' => 'TECNOLOGIAS DE INTERNET',
                'credits' => '3',
                'pre_requirements' => 'INF315'
            ],
            [
                'career' => 'Ingeniería en sistemas de computación',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'INF325',
                'subject' => 'PROGRAMACION VISUAL',
                'credits' => '4',
                'pre_requirements' => 'INF152'
            ],
            [
                'career' => 'Ingeniería en sistemas de computación',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'INF327',
                'subject' => 'COMUNICACIONES',
                'credits' => '3',
                'pre_requirements' => 'INF169'
            ],
            [
                'career' => 'Ingeniería en sistemas de computación',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'TEC148',
                'subject' => 'ELECTRONICA I',
                'credits' => '3',
                'pre_requirements' => 'TEC123, TEC146'
            ],
            [
                'career' => 'Ingeniería en sistemas de computación',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'TEC155',
                'subject' => 'LAB.DE ELECTRONICA I',
                'credits' => '1',
                'pre_requirements' => 'TEC123, TEC146'
            ],
            [
                'career' => 'Ingeniería en sistemas de computación',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'ENG008',
                'subject' => 'INGLES VIII',
                'credits' => '0',
                'pre_requirements' => 'ENG007'
            ],
            [
                'career' => 'Ingeniería en sistemas de computación',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'IDI045',
                'subject' => 'INGLES PARA INFORMATICA I',
                'credits' => '3',
                'pre_requirements' => 'ENG008'
            ],
            [
                'career' => 'Ingeniería en sistemas de computación',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'IND371',
                'subject' => 'INVESTIGACION DE OPERACIONES PARA INFORMATICA',
                'credits' => '3',
                'pre_requirements' => 'MAT252'
            ],
            [
                'career' => 'Ingeniería en sistemas de computación',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'INF307',
                'subject' => 'ADMINISTRACION DE REDES',
                'credits' => '3',
                'pre_requirements' => 'INF327'
            ],
            [
                'career' => 'Ingeniería en sistemas de computación',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'INF324',
                'subject' => 'INTROD. INTELIGENCIA ARTIF.',
                'credits' => '3',
                'pre_requirements' => 'INF309'
            ],
            [
                'career' => 'Ingeniería en sistemas de computación',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'INF403',
                'subject' => 'BASES DE DATOS DISTRIBUIDAS Y MULTIDIMENSIONALES',
                'credits' => '3',
                'pre_requirements' => 'INF309, INF325'
            ],
            [
                'career' => 'Ingeniería en sistemas de computación',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'TEC190',
                'subject' => 'LOGICA DIGITAL I',
                'credits' => '3',
                'pre_requirements' => 'TEC148, TEC155'
            ],
            [
                'career' => 'Ingeniería en sistemas de computación',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'TEC200',
                'subject' => 'LAB. LOGICA DIGITAL I',
                'credits' => '1',
                'pre_requirements' => 'TEC148, TEC155'
            ],
            [
                'career' => 'Ingeniería en sistemas de computación',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'DER179',
                'subject' => 'DERECHO APLICADO A LA INFORMATICA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Ingeniería en sistemas de computación',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'IDI046',
                'subject' => 'INGLES PARA INFORMATICA II',
                'credits' => '3',
                'pre_requirements' => 'IDI045'
            ],
            [
                'career' => 'Ingeniería en sistemas de computación',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'IND423',
                'subject' => 'INGENIERIA ECONOMICA',
                'credits' => '3',
                'pre_requirements' => 'IND371'
            ],
            [
                'career' => 'Ingeniería en sistemas de computación',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'INF329',
                'subject' => 'SEGURIDAD',
                'credits' => '4',
                'pre_requirements' => 'INF307'
            ],
            [
                'career' => 'Ingeniería en sistemas de computación',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'ISC404',
                'subject' => 'ESTANDARES Y TENDENCIAS DE LA INDUSTRIA',
                'credits' => '3',
                'pre_requirements' => 'TEC190'
            ],
            [
                'career' => 'Ingeniería en sistemas de computación',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'TEC614',
                'subject' => 'AUTOMATIZACION Y ROBOTICA',
                'credits' => '4',
                'pre_requirements' => 'INF324'
            ],
            [
                'career' => 'Ingeniería en sistemas de computación',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'ADM120',
                'subject' => 'LIDERAZGO Y TECNICAS DE SUPERVISION',
                'credits' => '3',
                'pre_requirements' => 'ADM150'
            ],
            [
                'career' => 'Ingeniería en sistemas de computación',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'ADM535',
                'subject' => 'ACTITUD EMPRENDEDORA',
                'credits' => '3',
                'pre_requirements' => 'ADM150'
            ],
            [
                'career' => 'Ingeniería en sistemas de computación',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'INF204',
                'subject' => 'ADMINISTRACION DE CENTROS',
                'credits' => '3',
                'pre_requirements' => 'INF329'
            ],
            [
                'career' => 'Ingeniería en sistemas de computación',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'INF328',
                'subject' => 'SISTEMAS BASADOS EN EL CONOCIMIENTO',
                'credits' => '3',
                'pre_requirements' => 'INF324'
            ],
            [
                'career' => 'Ingeniería en sistemas de computación',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'INF407',
                'subject' => 'HACKING ETICO',
                'credits' => '3',
                'pre_requirements' => 'DER179, INF329'
            ],
            [
                'career' => 'Ingeniería en sistemas de computación',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'ISC406',
                'subject' => 'COMPUTACION FORENSE',
                'credits' => '3',
                'pre_requirements' => 'DER179, INF329'
            ],
            [
                'career' => 'Ingeniería en sistemas de computación',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'SOC281',
                'subject' => 'SEMINARIO DE GRADO',
                'credits' => '3',
                'pre_requirements' => '80% De los créditos aprobados'
            ],
            [
                'career' => 'Ingeniería en sistemas de computación',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'OPTDEP',
                'subject' => 'OPTATIVA DEPORTE',
                'credits' => '0',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Ingeniería en sistemas de computación',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'PAS210',
                'subject' => 'PASANTIA EMPRESARIAL',
                'credits' => '0',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Ingeniería en sistemas de computación',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'TES-MON',
                'subject' => 'TRABAJO DE GRADO O CURSO MONOGRAFICO',
                'credits' => '6',
                'pre_requirements' => '92% De los créditos aprobados'
            ]
        ];

        $ISO10_pensum = [
            [
                'career' => 'Ingeniería de software',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'ESP101',
                'subject' => 'ANALISIS DE TEXTOS DISCURSIVOS',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Ingeniería de software',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'ISO100',
                'subject' => 'FUNDAMENTOS DE INFORMATICA Y ALGORITMOS',
                'credits' => '5',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Ingeniería de software',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'ISO105',
                'subject' => 'FUNDAMENTOS DE SISTEMAS OPERATIVOS Y COMUNICACIONES',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Ingeniería de software',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'MAT126',
                'subject' => 'MATEMATICA BASICA PARA INGENIERIA',
                'credits' => '4',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Ingeniería de software',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'SOC011',
                'subject' => 'HISTORIA SOCIAL DOMINICANA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Ingeniería de software',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'SOC030',
                'subject' => 'ORIENTACION UNIVERSITARIA',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Ingeniería de software',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'TEC098',
                'subject' => 'INTRODUCCION A LA INGENIERIA',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Ingeniería de software',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'ENG001',
                'subject' => 'INGLES I',
                'credits' => '0',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Ingeniería de software',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'ESP102',
                'subject' => 'REDACCION DE TEXTOS DISCURSIVOS I',
                'credits' => '4',
                'pre_requirements' => 'ESP101'
            ],
            [
                'career' => 'Ingeniería de software',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'ING701',
                'subject' => 'FISICA I Y LABORATORIO',
                'credits' => '5',
                'pre_requirements' => 'MAT126'
            ],
            [
                'career' => 'Ingeniería de software',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'ISO200',
                'subject' => 'PROGRAMACION Y ESTRUCTURAS DE DATOS',
                'credits' => '5',
                'pre_requirements' => 'ISO100, ISO105'
            ],
            [
                'career' => 'Ingeniería de software',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'MAT127',
                'subject' => 'MATEMATICA SUPERIOR PARA INGENIERIA',
                'credits' => '5',
                'pre_requirements' => 'MAT126'
            ],
            [
                'career' => 'Ingeniería de software',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'SOC043',
                'subject' => 'GESTION AMBIENTAL',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Ingeniería de software',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'ENG002',
                'subject' => 'INGLES II',
                'credits' => '0',
                'pre_requirements' => 'ENG001'
            ],
            [
                'career' => 'Ingeniería de software',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'ESP103',
                'subject' => 'REDACCION DE TEXTOS DISCURSIVOS II',
                'credits' => '4',
                'pre_requirements' => 'ESP102'
            ],
            [
                'career' => 'Ingeniería de software',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'INF111',
                'subject' => 'PROGRAMACION ORIENTADA A OBJETOS',
                'credits' => '3',
                'pre_requirements' => 'ISO200'
            ],
            [
                'career' => 'Ingeniería de software',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'ISO300',
                'subject' => 'FUNDAMENTOS DE INGENIERIA DE SOFTWARE',
                'credits' => '4',
                'pre_requirements' => 'ISO200'
            ],
            [
                'career' => 'Ingeniería de software',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'ISO305',
                'subject' => 'DISEÑO WEB I',
                'credits' => '4',
                'pre_requirements' => 'ISO200'
            ],
            [
                'career' => 'Ingeniería de software',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'MAT222',
                'subject' => 'ALGEBRA LINEAL',
                'credits' => '4',
                'pre_requirements' => 'MAT127'
            ],
            [
                'career' => 'Ingeniería de software',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'SOC150',
                'subject' => 'RELACIONES HUMANAS',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Ingeniería de software',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'ENG003',
                'subject' => 'INGLES III',
                'credits' => '0',
                'pre_requirements' => 'ENG002'
            ],
            [
                'career' => 'Ingeniería de software',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'CON107',
                'subject' => 'CONTABILIDAD EMPRESARIAL',
                'credits' => '5',
                'pre_requirements' => 'MAT222'
            ],
            [
                'career' => 'Ingeniería de software',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'INF164',
                'subject' => 'BASE DE DATOS I',
                'credits' => '3',
                'pre_requirements' => 'INF111'
            ],
            [
                'career' => 'Ingeniería de software',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'ISO400',
                'subject' => 'ANALISIS Y DISEÑO ORIENTADO A OBJETOS',
                'credits' => '4',
                'pre_requirements' => 'INF111'
            ],
            [
                'career' => 'Ingeniería de software',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'ISO405',
                'subject' => 'SISTEMAS OPERATIVOS AVANZADOS',
                'credits' => '4',
                'pre_requirements' => 'INF111'
            ],
            [
                'career' => 'Ingeniería de software',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'ISO410',
                'subject' => 'VERIFICACION Y VALIDACION DE SOFTWARE',
                'credits' => '4',
                'pre_requirements' => 'ISO300'
            ],
            [
                'career' => 'Ingeniería de software',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'MAT131',
                'subject' => 'CALCULO Y GEOMETRIA ANALITICA I',
                'credits' => '5',
                'pre_requirements' => 'MAT222'
            ],
            [
                'career' => 'Ingeniería de software',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'ENG004',
                'subject' => 'INGLES IV',
                'credits' => '0',
                'pre_requirements' => 'ENG003'
            ],
            [
                'career' => 'Ingeniería de software',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'INF165',
                'subject' => 'BASE DE DATOS II',
                'credits' => '3',
                'pre_requirements' => 'INF164'
            ],
            [
                'career' => 'Ingeniería de software',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'INF244',
                'subject' => 'PROGRAMACION WEB I',
                'credits' => '3',
                'pre_requirements' => 'INF164, ISO305'
            ],
            [
                'career' => 'Ingeniería de software',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'ING702',
                'subject' => 'FISICA II Y LABORATORIO',
                'credits' => '5',
                'pre_requirements' => 'ING701'
            ],
            [
                'career' => 'Ingeniería de software',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'ISO500',
                'subject' => 'INGENIERIA DE REQUISITOS',
                'credits' => '3',
                'pre_requirements' => 'ISO400'
            ],
            [
                'career' => 'Ingeniería de software',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'ISO505',
                'subject' => 'INGENIERIA DE LA USABILIDAD',
                'credits' => '3',
                'pre_requirements' => 'ISO410'
            ],
            [
                'career' => 'Ingeniería de software',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'MAT132',
                'subject' => 'CALCULO Y GEOMETRIA ANALITICA II',
                'credits' => '5',
                'pre_requirements' => 'MAT131'
            ],
            [
                'career' => 'Ingeniería de software',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'ENG005',
                'subject' => 'INGLES V',
                'credits' => '0',
                'pre_requirements' => 'ENG004'
            ],
            [
                'career' => 'Ingeniería de software',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'ISO600',
                'subject' => 'ADMINISTRACION DE CONFIGURACION',
                'credits' => '3',
                'pre_requirements' => 'ISO500'
            ],
            [
                'career' => 'Ingeniería de software',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'ISO605',
                'subject' => 'DESARROLLO DE SOFTWARE CON TECNOLOGIA PROPIETARIA I',
                'credits' => '3',
                'pre_requirements' => 'INF165, INF244, ISO505'
            ],
            [
                'career' => 'Ingeniería de software',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'ISO610',
                'subject' => 'DESARROLLO DE SOFTWARE CON TECNOLOGIA OPEN SOURCE I',
                'credits' => '3',
                'pre_requirements' => 'INF165, INF244, ISO505'
            ],
            [
                'career' => 'Ingeniería de software',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'MAT151',
                'subject' => 'MATEMATICA DISCRETA',
                'credits' => '4',
                'pre_requirements' => 'MAT132'
            ],
            [
                'career' => 'Ingeniería de software',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'MAT252',
                'subject' => 'PROBABILIDAD Y ESTADISTICA',
                'credits' => '4',
                'pre_requirements' => 'MAT132'
            ],
            [
                'career' => 'Ingeniería de software',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'SOC031',
                'subject' => 'ETICA PROFESIONAL',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Ingeniería de software',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'ENG006',
                'subject' => 'INGLES VI',
                'credits' => '0',
                'pre_requirements' => 'ENG005'
            ],
            [
                'career' => 'Ingeniería de software',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'ADM091',
                'subject' => 'ADMINISTRACION I',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Ingeniería de software',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'ISO700',
                'subject' => 'GESTION DE SITIOS WEB',
                'credits' => '3',
                'pre_requirements' => 'INF244'
            ],
            [
                'career' => 'Ingeniería de software',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'ISO705',
                'subject' => 'PROYECTO DE SOFTWARE I',
                'credits' => '4',
                'pre_requirements' => 'ISO600, ISO605, ISO610'
            ],
            [
                'career' => 'Ingeniería de software',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'ISO710',
                'subject' => 'DESARROLLO DE SOFTWARE CON TECNOLOGIA PROPIETARIA II',
                'credits' => '3',
                'pre_requirements' => 'ISO605'
            ],
            [
                'career' => 'Ingeniería de software',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'ISO715',
                'subject' => 'DESARROLLO DE SOFTWARE CON TECNOLOGIA OPEN SOURCE II',
                'credits' => '3',
                'pre_requirements' => 'ISO610'
            ],
            [
                'career' => 'Ingeniería de software',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'SOC250',
                'subject' => 'METODOLOGIA DE LA INVESTIGACION CIENTIFICA',
                'credits' => '3',
                'pre_requirements' => '55% De los créditos aprobados'
            ],
            [
                'career' => 'Ingeniería de software',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'ENG007',
                'subject' => 'INGLES VII',
                'credits' => '0',
                'pre_requirements' => 'ENG006'
            ],
            [
                'career' => 'Ingeniería de software',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'ADM150',
                'subject' => 'GERENCIA DE PROCESOS',
                'credits' => '4',
                'pre_requirements' => 'ADM091'
            ],
            [
                'career' => 'Ingeniería de software',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'ISO915',
                'subject' => 'FUNDAMENTOS DE SEGURIDAD DE SOFTWARE',
                'credits' => '3',
                'pre_requirements' => 'ISO600'
            ],
            [
                'career' => 'Ingeniería de software',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'ISO800',
                'subject' => 'GESTION DE CALIDAD DE SOFTWARE',
                'credits' => '3',
                'pre_requirements' => 'ISO705'
            ],
            [
                'career' => 'Ingeniería de software',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'ISO805',
                'subject' => 'GESTION DE PROYECTOS DE SOFTWARE',
                'credits' => '3',
                'pre_requirements' => 'ISO705'
            ],
            [
                'career' => 'Ingeniería de software',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'ISO810',
                'subject' => 'INTEGRACION DE APLICACIONES CON TECNOLOGIA PROPIETARIA',
                'credits' => '3',
                'pre_requirements' => 'ISO710'
            ],
            [
                'career' => 'Ingeniería de software',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'ISO815',
                'subject' => 'INTEGRACION DE APLICACIONES CON TECNOLOGIA OPEN SOURCE',
                'credits' => '3',
                'pre_requirements' => 'ISO715'
            ],
            [
                'career' => 'Ingeniería de software',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'ENG008',
                'subject' => 'INGLES VIII',
                'credits' => '0',
                'pre_requirements' => 'ENG007'
            ],
            [
                'career' => 'Ingeniería de software',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'ADM120',
                'subject' => 'LIDERAZGO Y TECNICAS DE SUPERVISION',
                'credits' => '3',
                'pre_requirements' => 'ADM091'
            ],
            [
                'career' => 'Ingeniería de software',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'IDI045',
                'subject' => 'INGLES PARA INFORMATICA I',
                'credits' => '3',
                'pre_requirements' => 'ENG008'
            ],
            [
                'career' => 'Ingeniería de software',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'IND423',
                'subject' => 'INGENIERIA ECONOMICA',
                'credits' => '3',
                'pre_requirements' => 'ADM150'
            ],
            [
                'career' => 'Ingeniería de software',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'ISO900',
                'subject' => 'ADMINISTRACION DE DESARROLLO',
                'credits' => '4',
                'pre_requirements' => 'ISO800, ISO805'
            ],
            [
                'career' => 'Ingeniería de software',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'ISO905',
                'subject' => 'ARQUITECTURA DE DESARROLLO CON TECNOLOGIA PROPIETARIA',
                'credits' => '3',
                'pre_requirements' => 'ISO810'
            ],
            [
                'career' => 'Ingeniería de software',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'ISO910',
                'subject' => 'ARQUITECTURA DE DESARROLLO CON TECNOLOGIA OPEN SOURCE',
                'credits' => '3',
                'pre_requirements' => 'ISO815'
            ],
            [
                'career' => 'Ingeniería de software',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'INF333',
                'subject' => 'ADMINISTRACION DE LA SEGURIDAD DE LA INFORMACION',
                'credits' => '4',
                'pre_requirements' => 'ISO915'
            ],
            [
                'career' => 'Ingeniería de software',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'ADM535',
                'subject' => 'ACTITUD EMPRENDEDORA',
                'credits' => '3',
                'pre_requirements' => 'ADM120'
            ],
            [
                'career' => 'Ingeniería de software',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'ISO920',
                'subject' => 'ESTANDARES DE LA INDUSTRIA DEL SOFTWARE',
                'credits' => '3',
                'pre_requirements' => 'ISO900'
            ],
            [
                'career' => 'Ingeniería de software',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'IDI046',
                'subject' => 'INGLES PARA INFORMATICA II',
                'credits' => '3',
                'pre_requirements' => 'IDI045'
            ],
            [
                'career' => 'Ingeniería de software',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'ISO923',
                'subject' => 'IMPLEMENTACION DE E-COMMERCE CON TECNOLOGIA PROPIETARIA',
                'credits' => '3',
                'pre_requirements' => 'ISO905'
            ],
            [
                'career' => 'Ingeniería de software',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'ISO926',
                'subject' => 'IMPLEMENTACION DE E-COMMERCE CON TECNOLOGIA OPEN SOURCE',
                'credits' => '3',
                'pre_requirements' => 'ISO910'
            ],
            [
                'career' => 'Ingeniería de software',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'ISO929',
                'subject' => 'ESTRATEGIAS DE COMERCIO ELECTRONICO',
                'credits' => '3',
                'pre_requirements' => 'ISO905, ISO910'
            ],
            [
                'career' => 'Ingeniería de software',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'ISO931',
                'subject' => 'INTELIGENCIA DE NEGOCIOS',
                'credits' => '3',
                'pre_requirements' => 'ISO710, ISO715'
            ],
            [
                'career' => 'Ingeniería de software',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'INF335',
                'subject' => 'AUDITORIA INFORMATICA',
                'credits' => '3',
                'pre_requirements' => 'ISO920'
            ],
            [
                'career' => 'Ingeniería de software',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'ISO934',
                'subject' => 'PROYECTO DE SOFTWARE II',
                'credits' => '4',
                'pre_requirements' => 'ISO900'
            ],
            [
                'career' => 'Ingeniería de software',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'ISO937',
                'subject' => 'COMPUTACION UBICUA',
                'credits' => '4',
                'pre_requirements' => 'ISO931'
            ],
            [
                'career' => 'Ingeniería de software',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'ISO939',
                'subject' => 'INTEGRACION DE APLICACIONES CORPORATIVAS',
                'credits' => '3',
                'pre_requirements' => 'ISO931'
            ],
            [
                'career' => 'Ingeniería de software',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'SOC281',
                'subject' => 'SEMINARIO DE GRADO',
                'credits' => '3',
                'pre_requirements' => '80% De los créditos aprobados'
            ],
            [
                'career' => 'Ingeniería de software',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'OPTDEP',
                'subject' => 'OPTATIVA DEPORTE',
                'credits' => '0',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Ingeniería de software',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'PAS261',
                'subject' => 'PASANTIA EMPRESARIAL',
                'credits' => '0',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Ingeniería de software',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'TES-MON',
                'subject' => 'TRABAJO DE GRADO O CURSO MONOGRAFICO',
                'credits' => '6',
                'pre_requirements' => '92% De los créditos aprobados'
            ]
        ];


        $ADM10_pensum = [
            [
                'career' => 'Pensum antiguo: ADM10',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'ADM091',
                'subject' => 'ADMINISTRACION I',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: ADM10',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'CON091',
                'subject' => 'CONTABILIDAD I',
                'credits' => '5',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: ADM10',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'ESP101',
                'subject' => 'ANALISIS DE TEXTOS DISCURSIVOS',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: ADM10',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'MAT100',
                'subject' => 'MATEMATICA PRE-UNIVERSITARIA',
                'credits' => '0',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: ADM10',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'MER101',
                'subject' => 'MERCADOTECNIA I',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: ADM10',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'SOC030',
                'subject' => 'ORIENTACION UNIVERSITARIA',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: ADM10',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'SOC043',
                'subject' => 'GESTION AMBIENTAL',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: ADM10',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'ENG001',
                'subject' => 'INGLES I',
                'credits' => '0',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: ADM10',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'ADM092',
                'subject' => 'ADMINISTRACION II',
                'credits' => '3',
                'pre_requirements' => 'ADM091',
            ],
            [
                'career' => 'Pensum antiguo: ADM10',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'CON092',
                'subject' => 'CONTABILIDAD II',
                'credits' => '5',
                'pre_requirements' => 'CON091'
            ],
            [
                'career' => 'Pensum antiguo: ADM10',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'ESP102',
                'subject' => 'REDACCION DE TEXTOS DISCURSIVOS I',
                'credits' => '4',
                'pre_requirements' => 'ESP101'
            ],
            [
                'career' => 'Pensum antiguo: ADM10',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'MAT121',
                'subject' => 'ALGEBRA UNIVERSITARIA',
                'credits' => '4',
                'pre_requirements' => 'MAT100'
            ],
            [
                'career' => 'Pensum antiguo: ADM10',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'SOC011',
                'subject' => 'HISTORIA SOCIAL DOMINICANA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: ADM10',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'SOC290',
                'subject' => 'ECONOMIA GENERAL',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: ADM10',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'ENG002',
                'subject' => 'INGLES II',
                'credits' => '0',
                'pre_requirements' => 'ENG001'
            ],
            [
                'career' => 'Pensum antiguo: ADM10',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'ESP103',
                'subject' => 'REDACCION TEXTOS DISCURSIVOS II',
                'credits' => '4',
                'pre_requirements' => 'ESP102'
            ],

            [
                'career' => 'Pensum antiguo: ADM10',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'MAT131',
                'subject' => 'CALCULO Y GEOMETRIA ANALITICA I',
                'credits' => '5',
                'pre_requirements' => 'MAT121'
            ],
            [
                'career' => 'Pensum antiguo: ADM10',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'SOC101',
                'subject' => 'INTRODUCCION A LA PSICOLOGIA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: ADM10',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'SOC200',
                'subject' => 'INTRODUCCION A LA SOCIOLOGIA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: ADM10',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'SOC250',
                'subject' => 'METODOLOGIA DE LA INVESTIGACION CIENTIFICA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: ADM10',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'ENG003',
                'subject' => 'INGLES III',
                'credits' => '0',
                'pre_requirements' => 'ENG002'
            ],

            [
                'career' => 'Pensum antiguo: ADM10',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'ADM535',
                'subject' => 'ACTITUD EMPRENDEDORA',
                'credits' => '3',
                'pre_requirements' => 'SOC101'

            ],
            [
                'career' => 'Pensum antiguo: ADM10',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'CON219',
                'subject' => 'COSTOS PRODUCTOS Y SERVICIOS I',
                'credits' => '5',
                'pre_requirements' => 'CON092'
            ],
            [
                'career' => 'Pensum antiguo: ADM10',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'ESP301',
                'subject' => 'EXPRESION ORAL',
                'credits' => '3',
                'pre_requirements' => 'ESP103'
            ],
            [
                'career' => 'Pensum antiguo: ADM10',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'MAT241',
                'subject' => 'MATEMATICA FINANCIERA I',
                'credits' => '4',
                'pre_requirements' => 'MAT131'
            ],
            [
                'career' => 'Pensum antiguo: ADM10',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'MAT250',
                'subject' => 'ESTADISTICA I',
                'credits' => '4',
                'pre_requirements' => 'MAT131'
            ],
            [
                'career' => 'Pensum antiguo: ADM10',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'ENG004',
                'subject' => 'INGLES IV',
                'credits' => '0',
                'pre_requirements' => 'ENG003'
            ],
            [
                'career' => 'Pensum antiguo: ADM10',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'ADM120',
                'subject' => 'LIDERAZGO Y TECNICAS DE SUPERVISION',
                'credits' => '3',
                'pre_requirements' => 'ADM091'

            ],
            [
                'career' => 'Pensum antiguo: ADM10',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'ADM124',
                'subject' => 'GESTION DEL TALENTO HUMANO',
                'credits' => '4',
                'pre_requirements' => 'ADM092'
            ],
            [
                'career' => 'Pensum antiguo: ADM10',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'ADM140',
                'subject' => 'ADMINISTRACION FINANCIERA I',
                'credits' => '3',
                'pre_requirements' => 'MAT241'
            ],
            [
                'career' => 'Pensum antiguo: ADM10',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'MAT251',
                'subject' => 'ESTADISTICA II',
                'credits' => '4',
                'pre_requirements' => 'MAT250'
            ],
            [
                'career' => 'Pensum antiguo: ADM10',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'MER102',
                'subject' => 'MERCADOTECNIA II',
                'credits' => '3',
                'pre_requirements' => 'CON219, MER101'
            ],
            [
                'career' => 'Pensum antiguo: ADM10',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'ENG005',
                'subject' => 'INGLES V',
                'credits' => '0',
                'pre_requirements' => 'ENG004'
            ],

            [
                'career' => 'Pensum antiguo: ADM10',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'ADM141',
                'subject' => 'ADMINISTRACION FINANCIERA II',
                'credits' => '3',
                'pre_requirements' => 'ADM140'
            ],
            [
                'career' => 'Pensum antiguo: ADM10',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'ADM150',
                'subject' => 'GERENCIA DE PROCESOS',
                'credits' => '4',
                'pre_requirements' => 'ADM092'
            ],
            [
                'career' => 'Pensum antiguo: ADM10',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'CON211',
                'subject' => 'SISTEMA TRIBUTARIO DOMINICANO I',
                'credits' => '3',
                'pre_requirements' => 'CON092'
            ],
            [
                'career' => 'Pensum antiguo: ADM10',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'DER011',
                'subject' => 'DERECHO COMERCIAL',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: ADM10',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'MER140',
                'subject' => 'ADMINISTRACION DE VENTAS I',
                'credits' => '3',
                'pre_requirements' => 'MER102'
            ],
            [
                'career' => 'Pensum antiguo: ADM10',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'ENG006',
                'subject' => 'INGLES VI',
                'credits' => '0',
                'pre_requirements' => 'ENG005'
            ],
            [
                'career' => 'Pensum antiguo: ADM10',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'ADM104',
                'subject' => 'COMPORTAMIENTO ORGANIZACIONAL',
                'credits' => '3',
                'pre_requirements' => 'ADM124',

            ],
            [
                'career' => 'Pensum antiguo: ADM10',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'ADM117',
                'subject' => 'GERENCIA DE SERVICIOS',
                'credits' => '3',
                'pre_requirements' => 'MER140'
            ],
            [
                'career' => 'Pensum antiguo: ADM10',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'ADM130',
                'subject' => 'PRESUPUESTO EMPRESARIAL',
                'credits' => '3',
                'pre_requirements' => 'MAT250'
            ],
            [
                'career' => 'Pensum antiguo: ADM10',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'ADM221',
                'subject' => 'MONEDA Y BANCA',
                'credits' => '3',
                'pre_requirements' => 'SOC290'
            ],
            [
                'career' => 'Pensum antiguo: ADM10',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'MER147',
                'subject' => 'MERCADOTECNIA INTERNACIONAL',
                'credits' => '3',
                'pre_requirements' => 'MER102'
            ],
            [
                'career' => 'Pensum antiguo: ADM10',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'SOC270',
                'subject' => 'INTRODUCCION A LAS TECNICAS DE INVESTIGACION SOCIAL',
                'credits' => '3',
                'pre_requirements' => 'SOC250'
            ],
            [
                'career' => 'Pensum antiguo: ADM10',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'ENG007',
                'subject' => 'INGLES VII',
                'credits' => '0',
                'pre_requirements' => 'ENG006'
            ],
            [
                'career' => 'Pensum antiguo: ADM10',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'ADM170',
                'subject' => 'ADMINISTRACION PÚBLICA',
                'credits' => '3',
                'pre_requirements' => 'ADM092',

            ],
            [
                'career' => 'Pensum antiguo: ADM10',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'ADM191',
                'subject' => 'ESTRATEGIA EMPRESARIAL',
                'credits' => '4',
                'pre_requirements' => 'ADM117'
            ],
            [
                'career' => 'Pensum antiguo: ADM10',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'ADM219',
                'subject' => 'FORMULAC.Y EVAL. DE PROYECTOS',
                'credits' => '3',
                'pre_requirements' => 'ADM130, SOC290'
            ],
            [
                'career' => 'Pensum antiguo: ADM10',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'CON108',
                'subject' => 'CONTABILIDAD DE GESTION',
                'credits' => '3',
                'pre_requirements' => 'CON219'
            ],
            [
                'career' => 'Pensum antiguo: ADM10',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'NEG121',
                'subject' => 'MERCADO DE VALORES',
                'credits' => '3',
                'pre_requirements' => 'ADM141'
            ],
            [
                'career' => 'Pensum antiguo: ADM10',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'SOC033',
                'subject' => 'ETICA EN LOS NEGOCIOS',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: ADM10',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'ENG008',
                'subject' => 'INGLES VIII',
                'credits' => '0',
                'pre_requirements' => 'ENG007'
            ],

            [
                'career' => 'Pensum antiguo: ADM10',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'ADM126',
                'subject' => 'PRODUCTIVIDAD Y COMPETITIVIDAD',
                'credits' => '3',
                'pre_requirements' => 'ADM150, ADM191'
            ],
            [
                'career' => 'Pensum antiguo: ADM10',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'ADM144',
                'subject' => 'GERENCIA FINANCIERA AVANZADA',
                'credits' => '3',
                'pre_requirements' => 'ADM141'
            ],
            [
                'career' => 'Pensum antiguo: ADM10',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'ADM147',
                'subject' => 'GESTION DE COMPRAS Y LOGISTICA',
                'credits' => '3',
                'pre_requirements' => 'ADM130'
            ],
            [
                'career' => 'Pensum antiguo: ADM10',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'ADM149',
                'subject' => 'COMERCIO ELECTRONICO',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: ADM10',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'ADM162',
                'subject' => 'GERENCIA DE OPERACIONES',
                'credits' => '3',
                'pre_requirements' => 'MAT131'
            ],
            [
                'career' => 'Pensum antiguo: ADM10',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'IDI070',
                'subject' => 'INGLES TECNICO PARA NEGOCIOS I',
                'credits' => '3',
                'pre_requirements' => 'ENG008'
            ],

            [
                'career' => 'Pensum antiguo: ADM10',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'ADM118',
                'subject' => 'GERENCIA DE LA CALIDAD TOTAL',
                'credits' => '3',
                'pre_requirements' => 'ADM126, ADM150'
            ],
            [
                'career' => 'Pensum antiguo: ADM10',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'ADM175',
                'subject' => 'CREACION Y GERENCIA DE PYME',
                'credits' => '3',
                'pre_requirements' => 'ADM219'
            ],
            [
                'career' => 'Pensum antiguo: ADM10',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'SOC281',
                'subject' => 'SEMINARIO DE GRADO',
                'credits' => '3',
                'pre_requirements' => '80% De los créditos aprobados'
            ],
            [
                'career' => 'Pensum antiguo: ADM10',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'IDI071',
                'subject' => 'INGLES TECNICO PARA NEGOCIOS II',
                'credits' => '3',
                'pre_requirements' => 'IDI070'
            ],
            [
                'career' => 'Pensum antiguo: ADM10',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'OPTDEP',
                'subject' => 'OPTATIVA DEPORTE',
                'credits' => '0',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: ADM10',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'PAS520',
                'subject' => 'PASANTIA EMPRESARIAL DE ADMINISTRACION DE EMPRESAS',
                'credits' => '0',
                'pre_requirements' => '75% De los créditos aprobados'
            ],
            [
                'career' => 'Pensum antiguo: ADM10',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'TES-MON',
                'subject' => 'TRABAJO DE GRADO O CURSO MONOGRAFICO',
                'credits' => '6',
                'pre_requirements' => '92% De los créditos aprobados'
            ]
        ];

        $ADM11_pensum = [
            [
                'career' => 'Pensum actual: ADM11',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'SOC030',
                'subject' => 'ORIENTACION UNIVERSITARIA',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: ADM11',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'SOC011',
                'subject' => 'HISTORIA SOCIAL DOMINICANA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: ADM11',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'SOC043',
                'subject' => 'GESTION AMBIENTAL',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: ADM11',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'MAT010',
                'subject' => 'MATEMATICA BASICA UNIVERSITARIA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: ADM11',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'ESP101',
                'subject' => 'ANALISIS DE TEXTOS DISCURSIVOS',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: ADM11',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'INF005',
                'subject' => 'INFORMATICA APLICADA A LOS NEGOCIOS',
                'credits' => '5',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: ADM11',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'ENG000',
                'subject' => 'FUNDAMENTOS DE INGLES (I Y II)',
                'credits' => '0',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: ADM11',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'ADM103',
                'subject' => 'FUNDAMENTOS DE ADMINISTRACION',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: ADM11',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'SOC013',
                'subject' => 'FILOSOFIA',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: ADM11',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'SOC101',
                'subject' => 'INTRODUCCION A LA PSICOLOGIA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: ADM11',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'MAT121',
                'subject' => 'ALGEBRA UNIVERSITARIA',
                'credits' => '4',
                'pre_requirements' => 'MAT010'
            ],
            [
                'career' => 'Pensum actual: ADM11',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'ESP106',
                'subject' => 'REDACCION DE TEXTOS DISCURSIVOS I',
                'credits' => '3',
                'pre_requirements' => 'ESP101'
            ],
            [
                'career' => 'Pensum actual: ADM11',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'CON091',
                'subject' => 'CONTABILIDAD I',
                'credits' => '5',
                'pre_requirements' => 'INF005, MAT010'
            ],
            [
                'career' => 'Pensum actual: ADM11',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'ENG003',
                'subject' => 'INGLES III',
                'credits' => '0',
                'pre_requirements' => 'ENG000'
            ],
            [
                'career' => 'Pensum actual: ADM11',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'SOC200',
                'subject' => 'INTRODUCCION A LA SOCIOLOGIA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: ADM11',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'MAT131',
                'subject' => 'CALCULO Y GEOMETRIA ANALITICA I',
                'credits' => '5',
                'pre_requirements' => 'MAT121'
            ],
            [
                'career' => 'Pensum actual: ADM11',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'ESP107',
                'subject' => 'REDACCION DE TEXTOS DISCURSIVOS II',
                'credits' => '3',
                'pre_requirements' => 'ESP106'
            ],
            [
                'career' => 'Pensum actual: ADM11',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'CON092',
                'subject' => 'CONTABILIDAD II',
                'credits' => '5',
                'pre_requirements' => 'CON091'
            ],
            [
                'career' => 'Pensum actual: ADM11',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'MER101',
                'subject' => 'MERCADOTECNIA I',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: ADM11',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'ENG004',
                'subject' => 'INGLES IV',
                'credits' => '0',
                'pre_requirements' => 'ENG003'
            ],
            [
                'career' => 'Pensum actual: ADM11',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'SOC253',
                'subject' => 'METODOLOGIA Y TECNICAS DE INVESTIGACION',
                'credits' => '4',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: ADM11',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'SOC031',
                'subject' => 'ETICA PROFESIONAL',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: ADM11',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'MAT241',
                'subject' => 'MATEMATICA FINANCIERA I',
                'credits' => '4',
                'pre_requirements' => 'MAT131'
            ],
            [
                'career' => 'Pensum actual: ADM11',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'ADM540',
                'subject' => 'LIDERAZGO Y HABILIDADES DIRECTIVAS',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: ADM11',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'NEG102',
                'subject' => 'INTRODUCCION A LOS NEGOCIOS INTERNACIONALES',
                'credits' => '3',
                'pre_requirements' => 'MER101'
            ],
            [
                'career' => 'Pensum actual: ADM11',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'ECO101',
                'subject' => 'ECONOMIA I',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: ADM11',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'ENG005',
                'subject' => 'INGLES V',
                'credits' => '0',
                'pre_requirements' => 'ENG004'
            ],
            [
                'career' => 'Pensum actual: ADM11',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'MAT260',
                'subject' => 'MATEMATICA APLICADA',
                'credits' => '4',
                'pre_requirements' => 'MAT241'
            ],
            [
                'career' => 'Pensum actual: ADM11',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'MAT250',
                'subject' => 'ESTADISTICA I',
                'credits' => '4',
                'pre_requirements' => 'MAT131'
            ],
            [
                'career' => 'Pensum actual: ADM11',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'ADM535',
                'subject' => 'ACTITUD EMPRENDEDORA',
                'credits' => '3',
                'pre_requirements' => 'SOC101'
            ],
            [
                'career' => 'Pensum actual: ADM11',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'ECO102',
                'subject' => 'ECONOMIA II',
                'credits' => '3',
                'pre_requirements' => 'ECO101'
            ],
            [
                'career' => 'Pensum actual: ADM11',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'ADM150',
                'subject' => 'GERENCIA DE PROCESOS',
                'credits' => '4',
                'pre_requirements' => 'MAT131'
            ],
            [
                'career' => 'Pensum actual: ADM11',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'NEG105',
                'subject' => 'LOGISTICA Y CADENA DE SUMINISTROS',
                'credits' => '3',
                'pre_requirements' => 'NEG102'
            ],
            [
                'career' => 'Pensum actual: ADM11',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'ENG006',
                'subject' => 'INGLES VI',
                'credits' => '0',
                'pre_requirements' => 'ENG005'
            ],
            [
                'career' => 'Pensum actual: ADM11',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'ADM130',
                'subject' => 'PRESUPUESTO EMPRESARIAL',
                'credits' => '3',
                'pre_requirements' => 'MAT250'
            ],
            [
                'career' => 'Pensum actual: ADM11',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'DER011',
                'subject' => 'DERECHO COMERCIAL',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: ADM11',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'FIN101',
                'subject' => 'FINANZAS I',
                'credits' => '3',
                'pre_requirements' => 'CON091, MAT241'
            ],
            [
                'career' => 'Pensum actual: ADM11',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'INF311',
                'subject' => 'INTELIGENCIA DE NEGOCIOS',
                'credits' => '3',
                'pre_requirements' => 'INF005, MAT250'
            ],
            [
                'career' => 'Pensum actual: ADM11',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'MAT251',
                'subject' => 'ESTADISTICA II',
                'credits' => '4',
                'pre_requirements' => 'MAT250'
            ],
            [
                'career' => 'Pensum actual: ADM11',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'IDI080',
                'subject' => 'INGLES PARA NEGOCIOS I',
                'credits' => '3',
                'pre_requirements' => 'ENG006'
            ],
            [
                'career' => 'Pensum actual: ADM11',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'ADM151',
                'subject' => 'SEMINARIO PROYECTO DE NEGOCIOS',
                'credits' => '2',
                'pre_requirements' => '50% De los créditos aprobados'
            ],
            [
                'career' => 'Pensum actual: ADM11',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'FIN102',
                'subject' => 'FINANZAS II',
                'credits' => '3',
                'pre_requirements' => 'FIN101'
            ],
            [
                'career' => 'Pensum actual: ADM11',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'CON221',
                'subject' => 'FUNDAMENTOS DE COSTOS',
                'credits' => '4',
                'pre_requirements' => 'CON091'
            ],
            [
                'career' => 'Pensum actual: ADM11',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'ADM162',
                'subject' => 'GERENCIA DE OPERACIONES',
                'credits' => '3',
                'pre_requirements' => 'ADM150, MAT131'
            ],
            [
                'career' => 'Pensum actual: ADM11',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'IDI081',
                'subject' => 'INGLES PARA NEGOCIOS II',
                'credits' => '3',
                'pre_requirements' => 'IDI080'
            ],
            [
                'career' => 'Pensum actual: ADM11',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'EADM',
                'subject' => 'ELECTIVA I',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: ADM11',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'DER016',
                'subject' => 'DERECHO LABORAL',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: ADM11',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'ADM124',
                'subject' => 'GESTION DEL TALENTO HUMANO',
                'credits' => '4',
                'pre_requirements' => 'ADM103'
            ],
            [
                'career' => 'Pensum actual: ADM11',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'NEG126',
                'subject' => 'TECNICAS DE NEGOCIACION',
                'credits' => '3',
                'pre_requirements' => 'ADM540'
            ],
            [
                'career' => 'Pensum actual: ADM11',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'ADM118',
                'subject' => 'GERENCIA DE LA CALIDAD TOTAL',
                'credits' => '3',
                'pre_requirements' => 'ADM162'
            ],
            [
                'career' => 'Pensum actual: ADM11',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'EADM2',
                'subject' => 'ELECTIVA II',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: ADM11',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'IDI082',
                'subject' => 'INGLES PARA NEGOCIOS III',
                'credits' => '3',
                'pre_requirements' => 'IDI081'
            ],
            [
                'career' => 'Pensum actual: ADM11',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'ADM191',
                'subject' => 'ESTRATEGIA EMPRESARIAL',
                'credits' => '4',
                'pre_requirements' => 'ADM118'
            ],
            [
                'career' => 'Pensum actual: ADM11',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'CON211',
                'subject' => 'SISTEMA TRIBUTARIO DOMINICANO I',
                'credits' => '3',
                'pre_requirements' => 'CON092'
            ],
            [
                'career' => 'Pensum actual: ADM11',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'ADM104',
                'subject' => 'COMPORTAMIENTO ORGANIZACIONAL',
                'credits' => '3',
                'pre_requirements' => 'ADM540'
            ],
            [
                'career' => 'Pensum actual: ADM11',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'IDI083',
                'subject' => 'INGLES PARA NEGOCIOS IV',
                'credits' => '3',
                'pre_requirements' => 'IDI082'
            ],
            [
                'career' => 'Pensum actual: ADM11',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'EADM3',
                'subject' => 'ELECTIVA III',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: ADM11',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'PAS520',
                'subject' => 'PASANTIA EMPRESARIAL DE ADMINISTRACION DE EMPRESAS',
                'credits' => '0',
                'pre_requirements' => '75% De los créditos aprobados'
            ],
            [
                'career' => 'Pensum actual: ADM11',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'SOC281',
                'subject' => 'SEMINARIO DE GRADO',
                'credits' => '3',
                'pre_requirements' => 'SOC253 80% De los créditos aprobados'
            ],
            [
                'career' => 'Pensum actual: ADM11',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'ADM147',
                'subject' => 'GESTION DE COMPRAS Y LOGISTICA',
                'credits' => '3',
                'pre_requirements' => 'ADM130'
            ],
            [
                'career' => 'Pensum actual: ADM11',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'ADM126',
                'subject' => 'PRODUCTIVIDAD Y COMPETITIVIDAD',
                'credits' => '3',
                'pre_requirements' => 'ADM150, ADM191'
            ],
            [
                'career' => 'Pensum actual: ADM11',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'IDI084',
                'subject' => 'INGLES PARA NEGOCIOS V',
                'credits' => '3',
                'pre_requirements' => 'IDI083'
            ],
            [
                'career' => 'Pensum actual: ADM11',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'ADM146',
                'subject' => 'SIMULACION DE NEGOCIOS',
                'credits' => '3',
                'pre_requirements' => '80% De los créditos aprobados'
            ],
            [
                'career' => 'Pensum actual: ADM11',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'ADM536',
                'subject' => 'CREACION E INNOVACION DE NEGOCIOS',
                'credits' => '3',
                'pre_requirements' => 'ADM535'
            ],
            [
                'career' => 'Pensum actual: ADM11',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'IDI085',
                'subject' => 'INGLES PARA NEGOCIOS VI',
                'credits' => '3',
                'pre_requirements' => 'IDI084'
            ],
            [
                'career' => 'Pensum actual: ADM11',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'TFG100',
                'subject' => 'TRABAJO FINAL DE GRADO',
                'credits' => '6',
                'pre_requirements' => 'SOC281 92% De los créditos aprobados'
            ],
            [
                'career' => 'Pensum actual: ADM11',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'OPTDEP',
                'subject' => 'OPTATIVA DEPORTE',
                'credits' => '0',
                'pre_requirements' => ''
            ]
        ];

        $ATH7_pensum = [
            [
                'career' => 'Pensum antiguo: ATH7',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'ADM101',
                'subject' => 'GESTION DE NEGOCIOS',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: ATH7',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'ESP101',
                'subject' => 'ANALISIS DE TEXTOS DISCURSIVOS',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: ATH7',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'MAT100',
                'subject' => 'MATEMATICA PRE-UNIVERSITARIA',
                'credits' => '0',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: ATH7',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'SOC011',
                'subject' => 'HISTORIA SOCIAL DOMINICANA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: ATH7',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'SOC030',
                'subject' => 'ORIENTACION UNIVERSITARIA',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: ATH7',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'SOC041',
                'subject' => 'ECOLOGIA',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: ATH7',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'SOC200',
                'subject' => 'INTRODUCCION A LA SOCIOLOGIA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: ATH7',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'TUR101',
                'subject' => 'TEORIA TURISTICA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: ATH7',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'ENG001',
                'subject' => 'INGLES I',
                'credits' => '0',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: ATH7',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'ADM102',
                'subject' => 'FUNCIONES ADMINISTRATIVAS',
                'credits' => '3',
                'pre_requirements' => 'ADM101'
            ],
            [
                'career' => 'Pensum antiguo: ATH7',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'CON101',
                'subject' => 'CONTABILIDAD-LABORATORIO I',
                'credits' => '5',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: ATH7',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'ESP102',
                'subject' => 'REDACCION DE TEXTOS DISCURSIVOS I',
                'credits' => '4',
                'pre_requirements' => 'ESP101'
            ],
            [
                'career' => 'Pensum antiguo: ATH7',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'MAT121',
                'subject' => 'ALGEBRA UNIVERSITARIA',
                'credits' => '4',
                'pre_requirements' => 'MAT100'
            ],
            [
                'career' => 'Pensum antiguo: ATH7',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'TUR110',
                'subject' => 'GEOGRAFIA TURISTICA DE R.D.',
                'credits' => '3',
                'pre_requirements' => 'TUR101'
            ],
            [
                'career' => 'Pensum antiguo: ATH7',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'ENG002',
                'subject' => 'INGLES II',
                'credits' => '0',
                'pre_requirements' => 'ENG001'
            ],
            [
                'career' => 'Pensum antiguo: ATH7',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'CON126',
                'subject' => 'CONTABILIDAD HOTELERA',
                'credits' => '5',
                'pre_requirements' => 'CON101'
            ],
            [
                'career' => 'Pensum antiguo: ATH7',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'ESP103',
                'subject' => 'REDACCION DE TEXTOS DISCURSIVOS II',
                'credits' => '4',
                'pre_requirements' => 'ESP102'
            ],
            [
                'career' => 'Pensum antiguo: ATH7',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'INF214',
                'subject' => 'APLICACIONES FINANCIERAS',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: ATH7',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'SOC101',
                'subject' => 'INTRODUCCION A LA PSICOLOGIA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: ATH7',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'SOC250',
                'subject' => 'METODOLOGIA DE LA INVESTIGACION CIENTIFICA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: ATH7',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'TUR102',
                'subject' => 'EMPRESAS DE SERV. TURISTICOS',
                'credits' => '3',
                'pre_requirements' => 'TUR101'
            ],
            [
                'career' => 'Pensum antiguo: ATH7',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'ENG003',
                'subject' => 'INGLES III',
                'credits' => '0',
                'pre_requirements' => 'ENG002'
            ],

            [
                'career' => 'Pensum antiguo: ATH7',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'CON218',
                'subject' => 'CONTABILIDAD DE COSTOS HOTELEROS',
                'credits' => '5',
                'pre_requirements' => 'CON126'
            ],
            [
                'career' => 'Pensum antiguo: ATH7',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'ESP301',
                'subject' => 'EXPRESION ORAL',
                'credits' => '3',
                'pre_requirements' => 'ESP103'
            ],
            [
                'career' => 'Pensum antiguo: ATH7',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'MAT241',
                'subject' => 'MATEMATICA FINANCIERA I',
                'credits' => '4',
                'pre_requirements' => 'MAT121'
            ],
            [
                'career' => 'Pensum antiguo: ATH7',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'SOC270',
                'subject' => 'INTRODUCCION A LAS TECNICAS DE INVESTIGACION SOCIAL',
                'credits' => '3',
                'pre_requirements' => 'SOC250'
            ],
            [
                'career' => 'Pensum antiguo: ATH7',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'SOC290',
                'subject' => 'ECONOMIA GENERAL',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: ATH7',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'TUR130',
                'subject' => 'FOLKLORE DOMINICANO',
                'credits' => '2',
                'pre_requirements' => 'TUR110'
            ],
            [
                'career' => 'Pensum antiguo: ATH7',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'ENG004',
                'subject' => 'INGLES IV',
                'credits' => '0',
                'pre_requirements' => 'ENG003'
            ],
            [
                'career' => 'Pensum antiguo: ATH7',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'ADM140',
                'subject' => 'ADMINISTRACION FINANCIERA I',
                'credits' => '3',
                'pre_requirements' => 'ADM102, MAT241'
            ],
            [
                'career' => 'Pensum antiguo: ATH7',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'ART158',
                'subject' => 'ARTESANIA DOMINICANA',
                'credits' => '2',
                'pre_requirements' => 'TUR110'
            ],
            [
                'career' => 'Pensum antiguo: ATH7',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'ART159',
                'subject' => 'MONUMENTALISMO',
                'credits' => '2',
                'pre_requirements' => 'TUR110'
            ],
            [
                'career' => 'Pensum antiguo: ATH7',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'MAT250',
                'subject' => 'ESTADISTICA I',
                'credits' => '4',
                'pre_requirements' => 'MAT121'
            ],
            [
                'career' => 'Pensum antiguo: ATH7',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'SOC031',
                'subject' => 'ETICA PROFESIONAL',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: ATH7',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'TUR210',
                'subject' => 'ALOJAMIENTO Y HOSPITALIDAD',
                'credits' => '3',
                'pre_requirements' => 'TUR102'
            ],
            [
                'career' => 'Pensum antiguo: ATH7',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'TUR222',
                'subject' => 'AGENCIA DE VIAJES I',
                'credits' => '3',
                'pre_requirements' => 'TUR102'
            ],
            [
                'career' => 'Pensum antiguo: ATH7',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'ENG005',
                'subject' => 'INGLES V',
                'credits' => '0',
                'pre_requirements' => 'ENG004'
            ],
            [
                'career' => 'Pensum antiguo: ATH7',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'MER105',
                'subject' => 'MERCADOTECNIA TURISTICA I',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: ATH7',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'TUR215',
                'subject' => 'ESTRUCTURA HOTELERA',
                'credits' => '3',
                'pre_requirements' => 'TUR210'
            ],
            [
                'career' => 'Pensum antiguo: ATH7',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'TUR223',
                'subject' => 'AGENCIA DE VIAJES II',
                'credits' => '3',
                'pre_requirements' => 'TUR222'
            ],
            [
                'career' => 'Pensum antiguo: ATH7',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'TUR250',
                'subject' => 'CIENCIAS DE ALIMENTACION',
                'credits' => '3',
                'pre_requirements' => 'TUR210'
            ],
            [
                'career' => 'Pensum antiguo: ATH7',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'TUR253',
                'subject' => 'LABORATORIO CIENCIAS DE ALIMENTACION',
                'credits' => '2',
                'pre_requirements' => 'TUR210'
            ],
            [
                'career' => 'Pensum antiguo: ATH7',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'TUR320',
                'subject' => 'HIGIENE, ETIQUETA Y PROTOCOLO',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: ATH7',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'PAS300',
                'subject' => 'PASANTIA I',
                'credits' => '0',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: ATH7',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'ENG006',
                'subject' => 'INGLES VI',
                'credits' => '0',
                'pre_requirements' => 'ENG005'
            ],
            [
                'career' => 'Pensum antiguo: ATH7',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'ADM111',
                'subject' => 'ADMINISTRACION DE PERSONAL I',
                'credits' => '3',
                'pre_requirements' => 'ADM102'
            ],
            [
                'career' => 'Pensum antiguo: ATH7',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'ADM115',
                'subject' => 'ADMINISTRACION HOTELERA I',
                'credits' => '3',
                'pre_requirements' => 'ADM102, PAS300, TUR215'
            ],
            [
                'career' => 'Pensum antiguo: ATH7',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'ADM120',
                'subject' => 'LIDERAZGO Y TECNICAS DE SUPERVISION',
                'credits' => '3',
                'pre_requirements' => 'ADM101'
            ],
            [
                'career' => 'Pensum antiguo: ATH7',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'MER106',
                'subject' => 'MERCADOTECNIA TURISTICA II',
                'credits' => '3',
                'pre_requirements' => 'MER105'
            ],
            [
                'career' => 'Pensum antiguo: ATH7',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'SOC150',
                'subject' => 'RELACIONES HUMANAS',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: ATH7',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'TUR270',
                'subject' => 'TRANSPORTACION TURISTICA',
                'credits' => '3',
                'pre_requirements' => 'ENG006, TUR102'
            ],
            [
                'career' => 'Pensum antiguo: ATH7',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'ENG007',
                'subject' => 'INGLES VII',
                'credits' => '0',
                'pre_requirements' => 'ENG006'
            ],
            [
                'career' => 'Pensum antiguo: ATH7',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'ADM116',
                'subject' => 'ADMINISTRACION HOTELERA II',
                'credits' => '3',
                'pre_requirements' => 'ADM115'
            ],
            [
                'career' => 'Pensum antiguo: ATH7',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'ADM130',
                'subject' => 'PRESUPUESTO EMPRESARIAL',
                'credits' => '3',
                'pre_requirements' => 'CON126'
            ],
            [
                'career' => 'Pensum antiguo: ATH7',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'DER041',
                'subject' => 'LEGISLACION TURISTICA',
                'credits' => '3',
                'pre_requirements' => 'TUR102'
            ],
            [
                'career' => 'Pensum antiguo: ATH7',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'TUR112',
                'subject' => 'GEOGRAFIA DESTINOS TURISTICOS MUNDIALES',
                'credits' => '3',
                'pre_requirements' => 'TUR110'
            ],
            [
                'career' => 'Pensum antiguo: ATH7',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'TUR310',
                'subject' => 'AEROPUERTOS Y SERV. AUXILIARES',
                'credits' => '3',
                'pre_requirements' => 'TUR270'
            ],
            [
                'career' => 'Pensum antiguo: ATH7',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'TUR352',
                'subject' => 'PLANIFICACION DEL DESARR. TURISTICO',
                'credits' => '3',
                'pre_requirements' => 'SOC290'
            ],
            [
                'career' => 'Pensum antiguo: ATH7',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'ENG008',
                'subject' => 'INGLES VIII',
                'credits' => '0',
                'pre_requirements' => 'ENG007'
            ],
            [
                'career' => 'Pensum antiguo: ATH7',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'ADM219',
                'subject' => 'FORMULAC.Y EVAL. DE PROYECTOS',
                'credits' => '3',
                'pre_requirements' => 'ADM140, MAT241'
            ],
            [
                'career' => 'Pensum antiguo: ATH7',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'DER016',
                'subject' => 'DERECHO LABORAL',
                'credits' => '3',
                'pre_requirements' => 'ADM111'
            ],
            [
                'career' => 'Pensum antiguo: ATH7',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'SOC281',
                'subject' => 'SEMINARIO DE GRADO',
                'credits' => '3',
                'pre_requirements' => '75% De los credits aprobados'
            ],
            [
                'career' => 'Pensum antiguo: ATH7',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'TUR311',
                'subject' => 'OPERACION TRANSPORTE AEREO',
                'credits' => '3',
                'pre_requirements' => 'TUR310'
            ],
            [
                'career' => 'Pensum antiguo: ATH7',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'TUR340',
                'subject' => 'RECREACION Y ANIMACION TURIST.',
                'credits' => '3',
                'pre_requirements' => 'ADM102, PAS400, TUR320'
            ],
            [
                'career' => 'Pensum antiguo: ATH7',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'TUR351',
                'subject' => 'ECOTURISMO',
                'credits' => '3',
                'pre_requirements' => 'SOC041'
            ],
            [
                'career' => 'Pensum antiguo: ATH7',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'ENG009',
                'subject' => 'INGLES IX',
                'credits' => '0',
                'pre_requirements' => 'ENG008 75% De los credits aprobados'
            ],
            [
                'career' => 'Pensum antiguo: ATH7',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'MER181',
                'subject' => 'PROMOCION TURISTICA',
                'credits' => '3',
                'pre_requirements' => 'MER106, TUR311'
            ],
            [
                'career' => 'Pensum antiguo: ATH7',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'SOC115',
                'subject' => 'PSICOLOGIA DEL CONSUMIDOR',
                'credits' => '3',
                'pre_requirements' => 'SOC101, TUR311'
            ],
            [
                'career' => 'Pensum antiguo: ATH7',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'TUR251',
                'subject' => 'GASTRONOMIA I',
                'credits' => '3',
                'pre_requirements' => 'TUR250, TUR340'
            ],
            [
                'career' => 'Pensum antiguo: ATH7',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'TUR254',
                'subject' => 'LABORATORIO DE GASTRONOMIA I',
                'credits' => '3',
                'pre_requirements' => 'TUR250, TUR340'
            ],
            [
                'career' => 'Pensum antiguo: ATH7',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'TUR256',
                'subject' => 'FRONT-OFFICE',
                'credits' => '3',
                'pre_requirements' => 'TUR215, TUR311'
            ],
            [
                'career' => 'Pensum antiguo: ATH7',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'TUR257',
                'subject' => 'GESTION Y CONTROL CALIDAD TURISTICA',
                'credits' => '4',
                'pre_requirements' => 'TUR102'
            ],
            [
                'career' => 'Pensum antiguo: ATH7',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'TUR260',
                'subject' => 'ORGANIZACION Y CONTROL DE BARES',
                'credits' => '3',
                'pre_requirements' => 'ADM116, TUR340'
            ],
            [
                'career' => 'Pensum antiguo: ATH7',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'TUR261',
                'subject' => 'LABORAT. ORGANIZACION Y CONTROL BARES',
                'credits' => '2',
                'pre_requirements' => 'ADM116, TUR340'
            ],
            [
                'career' => 'Pensum antiguo: ATH7',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'TUR297',
                'subject' => 'ORGANIZACION DE EVENTOS',
                'credits' => '3',
                'pre_requirements' => 'TUR270'
            ],
            [
                'career' => 'Pensum antiguo: ATH7',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'TUR335',
                'subject' => 'RELACIONES TURISTICAS INTERNACIONALES',
                'credits' => '3',
                'pre_requirements' => 'DER041, TUR311'
            ],
            [
                'career' => 'Pensum antiguo: ATH7',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'ENG010',
                'subject' => 'INGLES X',
                'credits' => '0',
                'pre_requirements' => 'ENG009'
            ],
            [
                'career' => 'Pensum antiguo: ATH7',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'MER214',
                'subject' => 'SEMINARIO DESARROLLO LANZAMIENTO DEL PRODUCTO TURISTICO',
                'credits' => '4',
                'pre_requirements' => 'MER106, TUR311'
            ],
            [
                'career' => 'Pensum antiguo: ATH7',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'MER412',
                'subject' => 'SIMULACION DINAMICA MARKETING TURISTICO',
                'credits' => '4',
                'pre_requirements' => 'MER106, TUR311'
            ],
            [
                'career' => 'Pensum antiguo: ATH7',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'TUR252',
                'subject' => 'GASTRONOMIA II',
                'credits' => '3',
                'pre_requirements' => 'TUR251, TUR254, TUR340'
            ],
            [
                'career' => 'Pensum antiguo: ATH7',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'TUR255',
                'subject' => 'LABORATORIO DE GASTRONOMIA II',
                'credits' => '3',
                'pre_requirements' => 'TUR251, TUR254, TUR340'
            ],
            [
                'career' => 'Pensum antiguo: ATH7',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'TUR258',
                'subject' => 'TECNICAS DE VENTA DE SERVICIOS HOTELEROS',
                'credits' => '3',
                'pre_requirements' => 'MER106'
            ],
            [
                'career' => 'Pensum antiguo: ATH7',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'TUR259',
                'subject' => 'CATERING Y BANQUETES',
                'credits' => '4',
                'pre_requirements' => 'ENG003, TUR251, TUR340'
            ],
            [
                'career' => 'Pensum antiguo: ATH7',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'TUR262',
                'subject' => 'GESTION, ESTRAT. MARKETING ALIM. Y BEB.',
                'credits' => '3',
                'pre_requirements' => 'MER106, TUR340'
            ],
            [
                'career' => 'Pensum antiguo: ATH7',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'TUR269',
                'subject' => 'RELACIONES PUBLICAS APLICADAS AL TURISMO',
                'credits' => '3',
                'pre_requirements' => 'ENG003, MER181, TUR311'
            ],
            [
                'career' => 'Pensum antiguo: ATH7',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'OPTDEP',
                'subject' => 'OPTATIVA DEPORTE',
                'credits' => '0',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: ATH7',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'OPTIDI',
                'subject' => 'OPTATIVA IDIOMAS',
                'credits' => '0',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: ATH7',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'PAS400',
                'subject' => 'PASANTIA II',
                'credits' => '0',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: ATH7',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'TES-MON',
                'subject' => 'TRABAJO DE GRADO O CURSO MONOGRAFICO',
                'credits' => '6',
                'pre_requirements' => '92% De los credits aprobados'
            ]
        ];

        $ATH11_pensum = [
            [
                'career' => 'Pensum actual: ATH11',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'SOC030',
                'subject' => 'ORIENTACION UNIVERSITARIA',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: ATH11',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'SOC011',
                'subject' => 'HISTORIA SOCIAL DOMINICANA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: ATH11',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'SOC043',
                'subject' => 'GESTION AMBIENTAL',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: ATH11',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'MAT010',
                'subject' => 'MATEMATICA BASICA UNIVERSITARIA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: ATH11',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'ESP101',
                'subject' => 'ANALISIS DE TEXTOS DISCURSIVOS',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: ATH11',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'TUR101',
                'subject' => 'TEORIA TURISTICA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: ATH11',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'ENG000',
                'subject' => 'FUNDAMENTOS DE INGLES (I Y II)',
                'credits' => '0',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: ATH11',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'ADM103',
                'subject' => 'FUNDAMENTOS DE ADMINISTRACION',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: ATH11',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'ART011',
                'subject' => 'PATRIMONIO CULTURAL DOMINICANO',
                'credits' => '4',
                'pre_requirements' => 'TUR101'
            ],
            [
                'career' => 'Pensum actual: ATH11',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'ESP106',
                'subject' => 'REDACCION DE TEXTOS DISCURSIVOS I',
                'credits' => '3',
                'pre_requirements' => 'ESP101'
            ],
            [
                'career' => 'Pensum actual: ATH11',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'INF005',
                'subject' => 'INFORMATICA APLICADA A LOS NEGOCIOS',
                'credits' => '5',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: ATH11',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'MAT121',
                'subject' => 'ALGEBRA UNIVERSITARIA',
                'credits' => '4',
                'pre_requirements' => 'MAT010'
            ],
            [
                'career' => 'Pensum actual: ATH11',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'SOC013',
                'subject' => 'FILOSOFIA',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: ATH11',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'ENG003',
                'subject' => 'INGLES III',
                'credits' => '0',
                'pre_requirements' => 'ENG000'
            ],

            [
                'career' => 'Pensum actual: ATH11',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'SOC101',
                'subject' => 'INTRODUCCION A LA PSICOLOGIA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: ATH11',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'CON091',
                'subject' => 'CONTABILIDAD I',
                'credits' => '5',
                'pre_requirements' => 'INF005, MAT010'
            ],
            [
                'career' => 'Pensum actual: ATH11',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'ESP107',
                'subject' => 'REDACCION DE TEXTOS DISCURSIVOS II',
                'credits' => '3',
                'pre_requirements' => 'ESP106'
            ],
            [
                'career' => 'Pensum actual: ATH11',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'SOC200',
                'subject' => 'INTRODUCCION A LA SOCIOLOGIA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: ATH11',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'ECO101',
                'subject' => 'ECONOMIA I',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: ATH11',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'TUR110',
                'subject' => 'GEOGRAFIA TURISTICA DE R.D.',
                'credits' => '3',
                'pre_requirements' => 'ART011'
            ],
            [
                'career' => 'Pensum actual: ATH11',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'ENG004',
                'subject' => 'INGLES IV',
                'credits' => '0',
                'pre_requirements' => 'ENG003'
            ],
            [
                'career' => 'Pensum actual: ATH11',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'CON096',
                'subject' => 'CONTABILIDAD TURISTICA Y HOTELERA',
                'credits' => '4',
                'pre_requirements' => 'CON091'
            ],
            [
                'career' => 'Pensum actual: ATH11',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'MAT241',
                'subject' => 'MATEMATICA FINANCIERA I',
                'credits' => '4',
                'pre_requirements' => 'MAT121'
            ],
            [
                'career' => 'Pensum actual: ATH11',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'SOC031',
                'subject' => 'ETICA PROFESIONAL',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: ATH11',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'SOC253',
                'subject' => 'METODOLOGIA Y TECNICAS DE INVESTIGACION',
                'credits' => '4',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: ATH11',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'TUR341',
                'subject' => 'DESTINOS TURISTICOS MUNDIALES',
                'credits' => '2',
                'pre_requirements' => 'TUR110'
            ],
            [
                'career' => 'Pensum actual: ATH11',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'TUR342',
                'subject' => 'TURISMO DE NATURALEZA Y SOSTENIBILIDAD',
                'credits' => '2',
                'pre_requirements' => 'SOC043, TUR110'
            ],
            [
                'career' => 'Pensum actual: ATH11',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'ENG005',
                'subject' => 'INGLES V',
                'credits' => '0',
                'pre_requirements' => 'ENG004'
            ],
            [
                'career' => 'Pensum actual: ATH11',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'CON208',
                'subject' => 'CONTABILIDAD DE COSTOS TURISTICOS Y HOTELEROS',
                'credits' => '4',
                'pre_requirements' => 'CON096'
            ],
            [
                'career' => 'Pensum actual: ATH11',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'FIN101',
                'subject' => 'FINANZAS I',
                'credits' => '3',
                'pre_requirements' => 'CON091, MAT241'
            ],
            [
                'career' => 'Pensum actual: ATH11',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'MER101',
                'subject' => 'MERCADOTECNIA I',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: ATH11',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'MAT250',
                'subject' => 'ESTADISTICA I',
                'credits' => '4',
                'pre_requirements' => 'MAT121'
            ],
            [
                'career' => 'Pensum actual: ATH11',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'TUR225',
                'subject' => 'GESTION DE AGENCIAS DE VIAJES',
                'credits' => '3',
                'pre_requirements' => 'TUR341'
            ],
            [
                'career' => 'Pensum actual: ATH11',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'TUR353',
                'subject' => 'ALOJAMIENTO Y HOSPITALIDAD TURISTICA',
                'credits' => '3',
                'pre_requirements' => 'TUR342'
            ],
            [
                'career' => 'Pensum actual: ATH11',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'ENG006',
                'subject' => 'INGLES VI',
                'credits' => '0',
                'pre_requirements' => 'ENG005'
            ],
            [
                'career' => 'Pensum actual: ATH11',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'ADM121',
                'subject' => 'ADMINISTRACION HOTELERA',
                'credits' => '4',
                'pre_requirements' => 'CON208, TUR353'
            ],
            [
                'career' => 'Pensum actual: ATH11',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'ADM130',
                'subject' => 'PRESUPUESTO EMPRESARIAL',
                'credits' => '3',
                'pre_requirements' => 'MAT250'
            ],
            [
                'career' => 'Pensum actual: ATH11',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'IDI080',
                'subject' => 'INGLES PARA NEGOCIOS I',
                'credits' => '3',
                'pre_requirements' => 'ENG006'
            ],
            [
                'career' => 'Pensum actual: ATH11',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'DER161',
                'subject' => 'LEGISLACION TURISTICA Y AMBIENTAL',
                'credits' => '3',
                'pre_requirements' => 'SOC031'
            ],
            [
                'career' => 'Pensum actual: ATH11',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'ADM535',
                'subject' => 'ACTITUD EMPRENDEDORA',
                'credits' => '3',
                'pre_requirements' => 'SOC101'
            ],
            [
                'career' => 'Pensum actual: ATH11',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'MER107',
                'subject' => 'MERCADOTECNIA TURISTICA',
                'credits' => '3',
                'pre_requirements' => 'MER101'
            ],
            [
                'career' => 'Pensum actual: ATH11',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'PAS300',
                'subject' => 'PASANTIA I',
                'credits' => '0',
                'pre_requirements' => '50% De los créditos aprobados'
            ],
            [
                'career' => 'Pensum actual: ATH11',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'ADM540',
                'subject' => 'LIDERAZGO Y HABILIDADES DIRECTIVAS',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: ATH11',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'IDI081',
                'subject' => 'INGLES PARA NEGOCIOS II',
                'credits' => '3',
                'pre_requirements' => 'IDI080'
            ],
            [
                'career' => 'Pensum actual: ATH11',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'MER432',
                'subject' => 'COMPORTAMIENTO DEL CONSUMIDOR',
                'credits' => '3',
                'pre_requirements' => 'SOC101'
            ],
            [
                'career' => 'Pensum actual: ATH11',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'TUR305',
                'subject' => 'OPERACIONES HOTELERAS',
                'credits' => '3',
                'pre_requirements' => 'ADM121'
            ],
            [
                'career' => 'Pensum actual: ATH11',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'TUR356',
                'subject' => 'ALIMENTACION Y NUTRICION',
                'credits' => '4',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: ATH11',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'OPTH1',
                'subject' => 'ELECTIVA I',
                'credits' => '3',
                'pre_requirements' => '50% De los créditos aprobados'
            ],
            [
                'career' => 'Pensum actual: ATH11',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'ADM104',
                'subject' => 'COMPORTAMIENTO ORGANIZACIONAL',
                'credits' => '3',
                'pre_requirements' => 'ADM540'
            ],
            [
                'career' => 'Pensum actual: ATH11',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'IDI082',
                'subject' => 'INGLES PARA NEGOCIOS III',
                'credits' => '3',
                'pre_requirements' => 'IDI081'
            ],
            [
                'career' => 'Pensum actual: ATH11',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'TUR312',
                'subject' => 'AEROPUERTO Y TRANSPORTACION TURISTICA',
                'credits' => '4',
                'pre_requirements' => 'MER107'
            ],
            [
                'career' => 'Pensum actual: ATH11',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'TUR300',
                'subject' => 'GESTION DE TURISMO DE NEGOCIOS (TURISMO MICE)',
                'credits' => '3',
                'pre_requirements' => 'TUR356'
            ],
            [
                'career' => 'Pensum actual: ATH11',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'TUR357',
                'subject' => 'ARTES CULINARIAS I',
                'credits' => '4',
                'pre_requirements' => 'PAS300, TUR356'
            ],
            [
                'career' => 'Pensum actual: ATH11',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'TUR301',
                'subject' => 'GESTION DE INGRESOS (REVENUE MANAGEMENT)',
                'credits' => '3',
                'pre_requirements' => 'PAS300, TUR305'
            ],
            [
                'career' => 'Pensum actual: ATH11',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'OPTH2',
                'subject' => 'ELECTIVA II',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: ATH11',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'ADM151',
                'subject' => 'SEMINARIO PROYECTO DE NEGOCIOS',
                'credits' => '2',
                'pre_requirements' => '50% De los créditos aprobados'
            ],
            [
                'career' => 'Pensum actual: ATH11',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'TUR263',
                'subject' => 'PLANIFICACION DEL DESARROLLO TURISTICO SOSTENIBLE',
                'credits' => '3',
                'pre_requirements' => 'TUR312'
            ],
            [
                'career' => 'Pensum actual: ATH11',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'TUR355',
                'subject' => 'GESTION Y CONTROL CALIDAD TURISTICA Y HOTELERA',
                'credits' => '3',
                'pre_requirements' => 'MAT250, TUR356'
            ],
            [
                'career' => 'Pensum actual: ATH11',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'IDI083',
                'subject' => 'INGLES PARA NEGOCIOS IV',
                'credits' => '3',
                'pre_requirements' => 'IDI082'
            ],
            [
                'career' => 'Pensum actual: ATH11',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'TUR358',
                'subject' => 'ARTES CULINARIAS II',
                'credits' => '3',
                'pre_requirements' => 'TUR357'
            ],
            [
                'career' => 'Pensum actual: ATH11',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'TUR269',
                'subject' => 'RELACIONES PUBLICAS APLICADAS AL TURISMO',
                'credits' => '3',
                'pre_requirements' => 'TUR301'
            ],
            [
                'career' => 'Pensum actual: ATH11',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'MER436',
                'subject' => 'E-BUSINESS',
                'credits' => '2',
                'pre_requirements' => 'MER432, TUR301'
            ],
            [
                'career' => 'Pensum actual: ATH11',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'OPTH3',
                'subject' => 'ELECTIVA III',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: ATH11',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'SOC281',
                'subject' => 'SEMINARIO DE GRADO',
                'credits' => '3',
                'pre_requirements' => 'SOC253 80% De los créditos aprobados'
            ],
            [
                'career' => 'Pensum actual: ATH11',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'IDI084',
                'subject' => 'INGLES PARA NEGOCIOS V',
                'credits' => '3',
                'pre_requirements' => 'IDI083'
            ],
            [
                'career' => 'Pensum actual: ATH11',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'MER440',
                'subject' => 'MERCADOTECNIA RELACIONAL-SOCIAL',
                'credits' => '3',
                'pre_requirements' => 'MER436 80% De los créditos aprobados'
            ],
            [
                'career' => 'Pensum actual: ATH11',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'TUR265',
                'subject' => 'GESTION DE RESTAURANTES',
                'credits' => '2',
                'pre_requirements' => 'TUR358'
            ],
            [
                'career' => 'Pensum actual: ATH11',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'TUR264',
                'subject' => 'GESTION Y CONTROL DE BARES',
                'credits' => '3',
                'pre_requirements' => 'TUR357'
            ],
            [
                'career' => 'Pensum actual: ATH11',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'IDI085',
                'subject' => 'INGLES PARA NEGOCIOS VI',
                'credits' => '3',
                'pre_requirements' => 'IDI084'
            ],
            [
                'career' => 'Pensum actual: ATH11',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'TUR276',
                'subject' => 'GESTION DE DESTINOS TURISTICOS (MANAGEMENT OF TOURIST DESTINATIONS)',
                'credits' => '3',
                'pre_requirements' => 'IDI084, TUR263'
            ],
            [
                'career' => 'Pensum actual: ATH11',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'TUR271',
                'subject' => 'TECNICAS AVANZADAS PREPARACION ALIMENTOS',
                'credits' => '2',
                'pre_requirements' => 'TUR358'
            ],
            [
                'career' => 'Pensum actual: ATH11',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'TUR290',
                'subject' => 'TECNICAS DE VENTA DE SERVICIOS TURISTICOS Y HOTELEROS',
                'credits' => '3',
                'pre_requirements' => 'TUR301'
            ],
            [
                'career' => 'Pensum actual: ATH11',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'PAS400',
                'subject' => 'PASANTIA II',
                'credits' => '0',
                'pre_requirements' => 'PAS300'
            ],
            [
                'career' => 'Pensum actual: ATH11',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'TFG100',
                'subject' => 'TRABAJO FINAL DE GRADO',
                'credits' => '6',
                'pre_requirements' => 'SOC281, 92% De los créditos aprobados'
            ],
            [
                'career' => 'Pensum actual: ATH11',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'OPTDEP',
                'subject' => 'OPTATIVA DEPORTE',
                'credits' => '0',
                'pre_requirements' => ''
            ]


        ];

        $CDG10_pensum = [
            [
                'career' => 'Pensum antiguo: CDG10',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'ART396',
                'subject' => 'DIBUJO ANALITICO I',
                'credits' => '4',
                'pre_requirements' => '',

            ],
            [
                'career' => 'Pensum antiguo: CDG10',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'ART401',
                'subject' => 'MEDIOS DE REPRODUCCION GRAFICA',
                'credits' => '3',
                'pre_requirements' => '',

            ],
            [
                'career' => 'Pensum antiguo: CDG10',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'ESP101',
                'subject' => 'ANALISIS DE TEXTOS DISCURSIVOS',
                'credits' => '3',
                'pre_requirements' => '',

            ],
            [
                'career' => 'Pensum antiguo: CDG10',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'INF319',
                'subject' => 'COMPUTACION I',
                'credits' => '4',
                'pre_requirements' => '',

            ],
            [
                'career' => 'Pensum antiguo: CDG10',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'MAT100',
                'subject' => 'MATEMATICA PRE-UNIVERSITARIA',
                'credits' => '0',
                'pre_requirements' => '',

            ],
            [
                'career' => 'Pensum antiguo: CDG10',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'SOC030',
                'subject' => 'ORIENTACION UNIVERSITARIA',
                'credits' => '2',
                'pre_requirements' => '',

            ],
            [
                'career' => 'Pensum antiguo: CDG10',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'SOC043',
                'subject' => 'GESTION AMBIENTAL',
                'credits' => '2',
                'pre_requirements' => '',

            ],
            [
                'career' => 'Pensum antiguo: CDG10',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'ENG001',
                'subject' => 'INGLES I',
                'credits' => '0',
                'pre_requirements' => '',

            ],
            [
                'career' => 'Pensum antiguo: CDG10',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'ART148',
                'subject' => 'DISEÑO INFORMATIZADO I',
                'credits' => '3',
                'pre_requirements' => '',

            ],
            [
                'career' => 'Pensum antiguo: CDG10',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'ART397',
                'subject' => 'DIBUJO ANALITICO II',
                'credits' => '4',
                'pre_requirements' => 'ART396',

            ],
            [
                'career' => 'Pensum antiguo: CDG10',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'ESP102',
                'subject' => 'REDACCION DE TEXTOS DISCURSIVOS I',
                'credits' => '4',
                'pre_requirements' => 'ESP101',

            ],
            [
                'career' => 'Pensum antiguo: CDG10',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'CDG200',
                'subject' => 'FOTOGRAFIA DIGITAL I',
                'credits' => '4',
                'pre_requirements' => '',

            ],
            [
                'career' => 'Pensum antiguo: CDG10',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'SOC200',
                'subject' => 'INTRODUCCION A LA SOCIOLOGIA',
                'credits' => '3',
                'pre_requirements' => '',

            ],
            [
                'career' => 'Pensum antiguo: CDG10',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'ENG002',
                'subject' => 'INGLES II',
                'credits' => '0',
                'pre_requirements' => 'ENG001',

            ],
            [
                'career' => 'Pensum antiguo: CDG10',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'ART149',
                'subject' => 'DISEÑO INFORMATIZADO II',
                'credits' => '3',
                'pre_requirements' => 'ART148',

            ],
            [
                'career' => 'Pensum antiguo: CDG10',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'CDG300',
                'subject' => 'FOTOGRAFIA DIGITAL II',
                'credits' => '4',
                'pre_requirements' => 'CDG200',

            ],
            [
                'career' => 'Pensum antiguo: CDG10',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'SOC290',
                'subject' => 'ECONOMIA GENERAL',
                'credits' => '3',
                'pre_requirements' => '',

            ],
            [
                'career' => 'Pensum antiguo: CDG10',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'ESP103',
                'subject' => 'REDACCION DE TEXTOS DISCURSIVOS II',
                'credits' => '4',
                'pre_requirements' => 'ESP102',

            ],
            [
                'career' => 'Pensum antiguo: CDG10',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'ART236',
                'subject' => 'ARTE Y COMUNICACION I',
                'credits' => '3',
                'pre_requirements' => '',

            ],
            [
                'career' => 'Pensum antiguo: CDG10',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'SOC011',
                'subject' => 'HISTORIA SOCIAL DOMINICANA',
                'credits' => '3',
                'pre_requirements' => '',

            ],
            [
                'career' => 'Pensum antiguo: CDG10',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'ENG003',
                'subject' => 'INGLES III',
                'credits' => '0',
                'pre_requirements' => 'ENG002',

            ],

            [
                'career' => 'Pensum antiguo: CDG10',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'ART150',
                'subject' => 'DISEÑO INFORMATIZADO III',
                'credits' => '3',
                'pre_requirements' => 'ART149',

            ],
            [
                'career' => 'Pensum antiguo: CDG10',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'ART237',
                'subject' => 'ARTE Y COMUNICACION II',
                'credits' => '3',
                'pre_requirements' => 'ART236',

            ],
            [
                'career' => 'Pensum antiguo: CDG10',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'CDG400',
                'subject' => 'TALLER CREATIVO EN COMUNICACION GRAFICA I',
                'credits' => '4',
                'pre_requirements' => 'ART149',

            ],
            [
                'career' => 'Pensum antiguo: CDG10',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'SOC101',
                'subject' => 'INTRODUCCION A LA PSICOLOGIA',
                'credits' => '3',
                'pre_requirements' => '',

            ],
            [
                'career' => 'Pensum antiguo: CDG10',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'MAT250',
                'subject' => 'ESTADISTICA I',
                'credits' => '4',
                'pre_requirements' => 'MAT100',

            ],
            [
                'career' => 'Pensum antiguo: CDG10',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'ENG004',
                'subject' => 'INGLES IV',
                'credits' => '0',
                'pre_requirements' => 'ENG003',

            ],
            [
                'career' => 'Pensum antiguo: CDG10',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'CDG500',
                'subject' => 'TALLER DE GUIONES PARA PRODUCTOS AUDIOVISUALES',
                'credits' => '3',
                'pre_requirements' => 'ART237 CDG300',

            ],
            [
                'career' => 'Pensum antiguo: CDG10',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'ART151',
                'subject' => 'DISEÑO INFORMATIZADO IV',
                'credits' => '3',
                'pre_requirements' => 'ART150 CDG300',

            ],
            [
                'career' => 'Pensum antiguo: CDG10',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'CDG505',
                'subject' => 'DISEÑO Y ANIMACION DIGITAL I',
                'credits' => '3',
                'pre_requirements' => 'ART150',

            ],
            [
                'career' => 'Pensum antiguo: CDG10',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'ART238',
                'subject' => 'ARTE Y COMUNICACION III',
                'credits' => '3',
                'pre_requirements' => 'ART237',

            ],
            [
                'career' => 'Pensum antiguo: CDG10',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'INF504',
                'subject' => 'INTRODUCCION A LA PROGRAMACION',
                'credits' => '3',
                'pre_requirements' => '',

            ],
            [
                'career' => 'Pensum antiguo: CDG10',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'CDG510',
                'subject' => 'TALLER CREATIVO EN COMUNICACION GRAFICA II',
                'credits' => '4',
                'pre_requirements' => 'CDG400',

            ],
            [
                'career' => 'Pensum antiguo: CDG10',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'ENG005',
                'subject' => 'INGLES V',
                'credits' => '0',
                'pre_requirements' => 'ENG004',

            ],
            [
                'career' => 'Pensum antiguo: CDG10',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'CDG600',
                'subject' => 'DISEÑO Y ANIMACION DIGITAL II',
                'credits' => '3',
                'pre_requirements' => 'CDG505',

            ],
            [
                'career' => 'Pensum antiguo: CDG10',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'ART214',
                'subject' => 'TEORIA DE LA COMUNICACION',
                'credits' => '3',
                'pre_requirements' => 'ART238',

            ],
            [
                'career' => 'Pensum antiguo: CDG10',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'CDG605',
                'subject' => 'GRABACION Y EDICION DE SONIDO DIGITAL',
                'credits' => '3',
                'pre_requirements' => 'CDG500',

            ],
            [
                'career' => 'Pensum antiguo: CDG10',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'CDG610',
                'subject' => 'ANIMACION 3D I',
                'credits' => '4',
                'pre_requirements' => 'CDG300 CDG505',

            ],
            [
                'career' => 'Pensum antiguo: CDG10',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'INF111',
                'subject' => 'PROGRAMACION ORIENTADA A OBJETOS',
                'credits' => '3',
                'pre_requirements' => 'INF504',

            ],
            [
                'career' => 'Pensum antiguo: CDG10',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'ENG006',
                'subject' => 'INGLES VI',
                'credits' => '0',
                'pre_requirements' => 'ENG005',

            ],
            [
                'career' => 'Pensum antiguo: CDG10',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'INF244',
                'subject' => 'PROGRAMACION WEB I',
                'credits' => '3',
                'pre_requirements' => 'INF111',

            ],
            [
                'career' => 'Pensum antiguo: CDG10',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'ART420',
                'subject' => 'TECNICAS DE PRODUCCION DE AUDIOVISUALES',
                'credits' => '3',
                'pre_requirements' => 'ART151 CDG605',

            ],
            [
                'career' => 'Pensum antiguo: CDG10',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'CDG700',
                'subject' => 'ANIMACION 3D II',
                'credits' => '4',
                'pre_requirements' => 'CDG610',

            ],
            [
                'career' => 'Pensum antiguo: CDG10',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'ESP421',
                'subject' => 'ANALISIS SEMIOTICO DE LA PUBLICIDAD',
                'credits' => '3',
                'pre_requirements' => 'ART214',

            ],
            [
                'career' => 'Pensum antiguo: CDG10',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'ENG007',
                'subject' => 'INGLES VII',
                'credits' => '0',
                'pre_requirements' => 'ENG006',

            ],

            [
                'career' => 'Pensum antiguo: CDG10',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'CDG800',
                'subject' => 'TECNICAS DE ILUSTRACION 3D',
                'credits' => '4',
                'pre_requirements' => 'CDG700',

            ],
            [
                'career' => 'Pensum antiguo: CDG10',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'CDG805',
                'subject' => 'GRABACION Y EDICION DE VIDEO DIGITAL',
                'credits' => '3',
                'pre_requirements' => 'ART420',

            ],
            [
                'career' => 'Pensum antiguo: CDG10',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'CDG810',
                'subject' => 'COMUNICACION DIGITAL I',
                'credits' => '4',
                'pre_requirements' => 'ART151 ART420',

            ],
            [
                'career' => 'Pensum antiguo: CDG10',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'INF245',
                'subject' => 'PROGRAMACION WEB II',
                'credits' => '4',
                'pre_requirements' => 'INF244',

            ],
            [
                'career' => 'Pensum antiguo: CDG10',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'SOC031',
                'subject' => 'ETICA PROFESIONAL',
                'credits' => '3',
                'pre_requirements' => '',

            ],
            [
                'career' => 'Pensum antiguo: CDG10',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'ENG008',
                'subject' => 'INGLES VIII',
                'credits' => '0',
                'pre_requirements' => 'ENG007',

            ],
            [
                'career' => 'Pensum antiguo: CDG10',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'ADM535',
                'subject' => 'ACTITUD EMPRENDEDORA',
                'credits' => '3',
                'pre_requirements' => 'SOC101',

            ],
            [
                'career' => 'Pensum antiguo: CDG10',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'CDG900',
                'subject' => 'COMUNICACION DIGITAL II',
                'credits' => '4',
                'pre_requirements' => 'CDG810',

            ],
            [
                'career' => 'Pensum antiguo: CDG10',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'MER123',
                'subject' => 'MERCADEO ESTRATEGICO',
                'credits' => '3',
                'pre_requirements' => '',

            ],
            [
                'career' => 'Pensum antiguo: CDG10',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'SOC250',
                'subject' => 'METODOLOGIA DE LA INVESTIGACION CIENTIFICA',
                'credits' => '3',
                'pre_requirements' => '',

            ],

            [
                'career' => 'Pensum antiguo: CDG10',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'ADM135',
                'subject' => 'PRESUPUESTO PUBLICITARIO',
                'credits' => '3',
                'pre_requirements' => 'ADM535 MER123',

            ],
            [
                'career' => 'Pensum antiguo: CDG10',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'ADM120',
                'subject' => 'LIDERAZGO Y TECNICAS DE SUPERVISION',
                'credits' => '3',
                'pre_requirements' => '',

            ],
            [
                'career' => 'Pensum antiguo: CDG10',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'CDG910',
                'subject' => 'COMUNICACION DIGITAL III',
                'credits' => '4',
                'pre_requirements' => 'CDG900',

            ],
            [
                'career' => 'Pensum antiguo: CDG10',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'ADM119',
                'subject' => 'CREACION Y GESTION DE EMPRESAS PUBLICITARIAS',
                'credits' => '3',
                'pre_requirements' => 'ADM535',

            ],
            [
                'career' => 'Pensum antiguo: CDG10',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'CDG915',
                'subject' => 'COMUNICACION DIGITAL IV',
                'credits' => '5',
                'pre_requirements' => 'CDG910',

            ],
            [
                'career' => 'Pensum antiguo: CDG10',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'MER217',
                'subject' => 'SEMINARIO DESARROLLO LANZAMIENTO DE PRODUCTOS',
                'credits' => '4',
                'pre_requirements' => 'MER123',

            ],
            [
                'career' => 'Pensum antiguo: CDG10',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'DER520',
                'subject' => 'PROPIEDAD INTELECTUAL Y LEGISLACION DE LA COMUNICACION',
                'credits' => '2',
                'pre_requirements' => '',

            ],
            [
                'career' => 'Pensum antiguo: CDG10',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'SOC281',
                'subject' => 'SEMINARIO DE GRADO',
                'credits' => '3',
                'pre_requirements' => 'SOC250 80% De los créditos aprobados',

            ],
            [
                'career' => 'Pensum antiguo: CDG10',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'TES-MON',
                'subject' => 'TRABAJO DE GRADO O CURSO MONOGRAFICO',
                'credits' => '6',
                'pre_requirements' => 'SOC281 90% De los créditos aprobados',

            ],
            [
                'career' => 'Pensum antiguo: CDG10',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'OPTDEP',
                'subject' => 'OPTATIVA DEPORTE',
                'credits' => '0',
                'pre_requirements' => '',

            ],
            [
                'career' => 'Pensum antiguo: CDG10',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'PAS640',
                'subject' => 'PASANTIA EMPRESARIAL',
                'credits' => '0',
                'pre_requirements' => '',

            ]
        ];

        $CDG11_pensum = [
            [
                'career' => 'Pensum actual: CDG11',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'SOC011',
                'subject' => 'HISTORIA SOCIAL DOMINICANA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: CDG11',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'ESP101',
                'subject' => 'ANALISIS DE TEXTOS DISCURSIVOS',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: CDG11',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'MAT010',
                'subject' => 'MATEMATICA BASICA UNIVERSITARIA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: CDG11',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'SOC030',
                'subject' => 'ORIENTACION UNIVERSITARIA',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: CDG11',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'SOC043',
                'subject' => 'GESTION AMBIENTAL',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: CDG11',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'ART465',
                'subject' => 'FUNDAMENTOS DEL DISEÑO',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: CDG11',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'CDG100',
                'subject' => 'LENGUAJE AUDIOVISUAL',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: CDG11',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'SOC013',
                'subject' => 'FILOSOFIA',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: CDG11',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'SOC101',
                'subject' => 'INTRODUCCION A LA PSICOLOGIA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: CDG11',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'ESP106',
                'subject' => 'REDACCION DE TEXTOS DISCURSIVOS I',
                'credits' => '3',
                'pre_requirements' => 'ESP101'
            ],
            [
                'career' => 'Pensum actual: CDG11',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'ART214',
                'subject' => 'TEORIA DE LA COMUNICACION',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: CDG11',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'ART458',
                'subject' => 'INTRODUCCION AL DISEÑO GRAFICO',
                'credits' => '3',
                'pre_requirements' => 'ART465'
            ],
            [
                'career' => 'Pensum actual: CDG11',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'CDG105',
                'subject' => 'DISEÑO DIGITAL I',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: CDG11',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'SOC200',
                'subject' => 'INTRODUCCION A LA SOCIOLOGIA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: CDG11',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'ESP107',
                'subject' => 'REDACCION DE TEXTOS DISCURSIVOS II',
                'credits' => '3',
                'pre_requirements' => 'ESP106'
            ],
            [
                'career' => 'Pensum actual: CDG11',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'ART210',
                'subject' => 'PENSAMIENTO CREATIVO',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: CDG11',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'ART012',
                'subject' => 'HISTORIA DE LA COMUNICACION I',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: CDG11',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'CDG106',
                'subject' => 'DISEÑO DIGITAL II',
                'credits' => '3',
                'pre_requirements' => 'CDG105'
            ],
            [
                'career' => 'Pensum actual: CDG11',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'CDG205',
                'subject' => 'FOTOGRAFIA DIGITAL I',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: CDG11',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'SOC253',
                'subject' => 'METODOLOGIA Y TECNICAS DE INVESTIGACION',
                'credits' => '4',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: CDG11',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'SOC031',
                'subject' => 'ETICA PROFESIONAL',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: CDG11',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'ART014',
                'subject' => 'HISTORIA DE LA COMUNICACION II',
                'credits' => '3',
                'pre_requirements' => 'ART012'
            ],
            [
                'career' => 'Pensum actual: CDG11',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'ART575',
                'subject' => 'BOCETO PARA STORYBOARD',
                'credits' => '5',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: CDG11',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'CDG107',
                'subject' => 'DISEÑO DIGITAL III',
                'credits' => '3',
                'pre_requirements' => 'CDG106'
            ],
            [
                'career' => 'Pensum actual: CDG11',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'CDG210',
                'subject' => 'FOTOGRAFIA DIGITAL II',
                'credits' => '3',
                'pre_requirements' => 'CDG106, CDG205'
            ],
            [
                'career' => 'Pensum actual: CDG11',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'ADM535',
                'subject' => 'ACTITUD EMPRENDEDORA',
                'credits' => '3',
                'pre_requirements' => 'SOC101'
            ],
            [
                'career' => 'Pensum actual: CDG11',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'ART577',
                'subject' => 'ESCRITURA CREATIVA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: CDG11',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'ART525',
                'subject' => 'TECNICAS DE DOCUMENTACION EN LA COMUNICACION',
                'credits' => '3',
                'pre_requirements' => 'SOC253'
            ],
            [
                'career' => 'Pensum actual: CDG11',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'ART452',
                'subject' => 'FUNDAMENTOS DE PUBLICIDAD Y RELACIONES PUBLICAS',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: CDG11',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'CDG405',
                'subject' => 'TALLER CREATIVO EN COMUNICACION GRAFICA I',
                'credits' => '3',
                'pre_requirements' => 'CDG106, CDG205'
            ],
            [
                'career' => 'Pensum actual: CDG11',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'CDG410',
                'subject' => 'DISEÑO WEB',
                'credits' => '3',
                'pre_requirements' => 'CDG106'
            ],
            [
                'career' => 'Pensum actual: CDG11',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'MER101',
                'subject' => 'MERCADOTECNIA I',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: CDG11',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'CDG815',
                'subject' => 'ILUSTRACION DIGITAL (2D)',
                'credits' => '3',
                'pre_requirements' => 'ART575, CDG106'
            ],
            [
                'career' => 'Pensum actual: CDG11',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'CDG505',
                'subject' => 'DISEÑO Y ANIMACION DIGITAL I',
                'credits' => '3',
                'pre_requirements' => 'CDG106'
            ],
            [
                'career' => 'Pensum actual: CDG11',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'CDG406',
                'subject' => 'TALLER CREATIVO EN COMUNICACION GRAFICA II',
                'credits' => '3',
                'pre_requirements' => 'CDG405'
            ],
            [
                'career' => 'Pensum actual: CDG11',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'CDG502',
                'subject' => 'PREPRODUCCION AUDIOVISUAL',
                'credits' => '3',
                'pre_requirements' => 'ART577, CDG100'
            ],
            [
                'career' => 'Pensum actual: CDG11',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'CDG515',
                'subject' => 'DISEÑO UI/UX',
                'credits' => '3',
                'pre_requirements' => 'CDG410'
            ],
            [
                'career' => 'Pensum actual: CDG11',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'MER102',
                'subject' => 'MERCADOTECNIA II',
                'credits' => '3',
                'pre_requirements' => 'MER101'
            ],
            [
                'career' => 'Pensum actual: CDG11',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'MAT250',
                'subject' => 'ESTADISTICA I',
                'credits' => '4',
                'pre_requirements' => 'MAT010'
            ],
            [
                'career' => 'Pensum actual: CDG11',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'CDG525',
                'subject' => 'COMUNICACION DIGITAL I',
                'credits' => '3',
                'pre_requirements' => 'CDG405'
            ],
            [
                'career' => 'Pensum actual: CDG11',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'CDG600',
                'subject' => 'DISEÑO Y ANIMACION DIGITAL II',
                'credits' => '3',
                'pre_requirements' => 'CDG505'
            ],
            [
                'career' => 'Pensum actual: CDG11',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'CDG605',
                'subject' => 'GRABACION Y EDICION DE SONIDO DIGITAL',
                'credits' => '3',
                'pre_requirements' => 'CDG502'
            ],
            [
                'career' => 'Pensum actual: CDG11',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'ECDG 1',
                'subject' => 'ELECTIVA I',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: CDG11',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'CDG520',
                'subject' => 'PRESUPUESTO PARA MEDIOS DIGITALES',
                'credits' => '3',
                'pre_requirements' => 'MAT010'
            ],
            [
                'career' => 'Pensum actual: CDG11',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'CDG805',
                'subject' => 'GRABACION Y EDICION DE VIDEO DIGITAL',
                'credits' => '3',
                'pre_requirements' => 'CDG502'
            ],
            [
                'career' => 'Pensum actual: CDG11',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'CDG526',
                'subject' => 'COMUNICACION DIGITAL II',
                'credits' => '3',
                'pre_requirements' => 'CDG525'
            ],
            [
                'career' => 'Pensum actual: CDG11',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'CDG800',
                'subject' => 'TECNICAS DE ILUSTRACION 3D',
                'credits' => '4',
                'pre_requirements' => 'CDG815'
            ],
            [
                'career' => 'Pensum actual: CDG11',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'ECDG 2',
                'subject' => 'ELECTIVA II',
                'credits' => '3',
                'pre_requirements' => 'ECDG 1'
            ],
            [
                'career' => 'Pensum actual: CDG11',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'CDG530',
                'subject' => 'MOTION GRAPHICS',
                'credits' => '3',
                'pre_requirements' => 'CDG600, CDG800'
            ],
            [
                'career' => 'Pensum actual: CDG11',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'CDG528',
                'subject' => 'COMUNICACION DIGITAL III',
                'credits' => '3',
                'pre_requirements' => 'CDG526'
            ],
            [
                'career' => 'Pensum actual: CDG11',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'CDG535',
                'subject' => 'GESTION DE CONTENIDOS (CMS)',
                'credits' => '3',
                'pre_requirements' => 'CDG410, CDG525'
            ],
            [
                'career' => 'Pensum actual: CDG11',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'CDG540',
                'subject' => 'PRODUCCION Y REALIZACION AUDIOVISUAL',
                'credits' => '4',
                'pre_requirements' => 'CDG605, CDG805'
            ],
            [
                'career' => 'Pensum actual: CDG11',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'ECDG 3',
                'subject' => 'ELECTIVA III',
                'credits' => '3',
                'pre_requirements' => 'ECDG 2'
            ],
            [
                'career' => 'Pensum actual: CDG11',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'SOC281',
                'subject' => 'SEMINARIO DE GRADO',
                'credits' => '3',
                'pre_requirements' => 'SOC253 80% De los créditos aprobados'
            ],
            [
                'career' => 'Pensum actual: CDG11',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'DER520',
                'subject' => 'PROPIEDAD INTELECTUAL Y LEGISLACION DE LA COMUNICACION',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: CDG11',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'CDG545',
                'subject' => 'CREACION DE TIENDAS VIRTUALES',
                'credits' => '3',
                'pre_requirements' => 'CDG410, CDG525'
            ],
            [
                'career' => 'Pensum actual: CDG11',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'CDG527',
                'subject' => 'COMUNICACION DIGITAL IV',
                'credits' => '3',
                'pre_requirements' => 'CDG528'
            ],
            [
                'career' => 'Pensum actual: CDG11',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'IDI530',
                'subject' => 'INGLES PARA COMUNICADORES I',
                'credits' => '3',
                'pre_requirements' => 'ENG010'
            ],
            [
                'career' => 'Pensum actual: CDG11',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'ART496',
                'subject' => 'PORTAFOLIO PROFESIONAL',
                'credits' => '2',
                'pre_requirements' => '90% De los créditos aprobados'
            ],
            [
                'career' => 'Pensum actual: CDG11',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'CDG529',
                'subject' => 'COMUNICACION INTERACTIVA',
                'credits' => '3',
                'pre_requirements' => 'CDG530'
            ],
            [
                'career' => 'Pensum actual: CDG11',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'IDI531',
                'subject' => 'INGLES PARA COMUNICADORES II',
                'credits' => '3',
                'pre_requirements' => 'IDI530'
            ],
            [
                'career' => 'Pensum actual: CDG11',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'TFG100',
                'subject' => 'TRABAJO FINAL DE GRADO',
                'credits' => '6',
                'pre_requirements' => 'SOC281 92% De los créditos aprobados'
            ],
            [
                'career' => 'Pensum actual: CDG11',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'OPTDEP',
                'subject' => 'OPTATIVA DEPORTE',
                'credits' => '0',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: CDG11',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'PAS640',
                'subject' => 'PASANTIA EMPRESARIAL',
                'credits' => '0',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: CDG11',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'ENG000',
                'subject' => 'FUNDAMENTOS DE INGLES (I Y II)',
                'credits' => '0',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: CDG11',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'ENG003',
                'subject' => 'INGLES III',
                'credits' => '0',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: CDG11',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'ENG004',
                'subject' => 'INGLES IV',
                'credits' => '0',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: CDG11',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'ENG005',
                'subject' => 'INGLES V',
                'credits' => '0',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: CDG11',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'ENG006',
                'subject' => 'INGLES VI',
                'credits' => '0',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: CDG11',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'ENG007',
                'subject' => 'INGLES VII',
                'credits' => '0',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: CDG11',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'ENG008',
                'subject' => 'INGLES VIII',
                'credits' => '0',
                'pre_requirements' => ''
            ],

        ];

        $CIN11_pensum = [
            [
                'career' => 'Licenciatura en cinematografía',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'SOC011',
                'subject' => 'HISTORIA SOCIAL DOMINICANA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en cinematografía',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'ESP101',
                'subject' => 'ANALISIS DE TEXTOS DISCURSIVOS',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en cinematografía',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'MAT010',
                'subject' => 'MATEMATICA BASICA UNIVERSITARIA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en cinematografía',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'SOC030',
                'subject' => 'ORIENTACION UNIVERSITARIA',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en cinematografía',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'SOC043',
                'subject' => 'GESTION AMBIENTAL',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en cinematografía',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'ART020',
                'subject' => 'HISTORIA DEL CINE UNIVERSAL',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en cinematografía',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'ART022',
                'subject' => 'APRECIACION AUDIOVISUAL',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en cinematografía',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'SOC013',
                'subject' => 'FILOSOFIA',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en cinematografía',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'SOC101',
                'subject' => 'INTRODUCCION A LA PSICOLOGIA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en cinematografía',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'ESP106',
                'subject' => 'REDACCION DE TEXTOS DISCURSIVOS I',
                'credits' => '3',
                'pre_requirements' => 'ESP101'
            ],
            [
                'career' => 'Licenciatura en cinematografía',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'ART141',
                'subject' => 'FOTOGRAFIA I',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en cinematografía',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'ART024',
                'subject' => 'ARTE Y ESTILO I',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en cinematografía',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'ART028',
                'subject' => 'LENGUAJE CINEMATOGRAFICO',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en cinematografía',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'SOC200',
                'subject' => 'INTRODUCCION A LA SOCIOLOGIA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en cinematografía',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'ESP107',
                'subject' => 'REDACCION DE TEXTOS DISCURSIVOS II',
                'credits' => '3',
                'pre_requirements' => 'ESP106'
            ],
            [
                'career' => 'Licenciatura en cinematografía',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'ART210',
                'subject' => 'PENSAMIENTO CREATIVO',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en cinematografía',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'ART026',
                'subject' => 'ARTE Y ESTILO II',
                'credits' => '3',
                'pre_requirements' => 'ART024'
            ],
            [
                'career' => 'Licenciatura en cinematografía',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'ART032',
                'subject' => 'GUION CINEMATOGRAFICO I',
                'credits' => '3',
                'pre_requirements' => 'ART028'
            ],
            [
                'career' => 'Licenciatura en cinematografía',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'ART142',
                'subject' => 'FOTOGRAFIA II',
                'credits' => '3',
                'pre_requirements' => 'ART141'
            ],
            [
                'career' => 'Licenciatura en cinematografía',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'SOC253',
                'subject' => 'METODOLOGIA Y TECNICAS DE INVESTIGACION',
                'credits' => '4',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en cinematografía',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'SOC031',
                'subject' => 'ETICA PROFESIONAL',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en cinematografía',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'ART575',
                'subject' => 'BOCETO PARA STORYBOARD',
                'credits' => '5',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en cinematografía',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'ART035',
                'subject' => 'FOTOGRAFIA CINEMATOGRAFICA I',
                'credits' => '3',
                'pre_requirements' => 'ART142'
            ],
            [
                'career' => 'Licenciatura en cinematografía',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'ART033',
                'subject' => 'GUION CINEMATOGRAFICO II',
                'credits' => '3',
                'pre_requirements' => 'ART032'
            ],
            [
                'career' => 'Licenciatura en cinematografía',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'CDG105',
                'subject' => 'DISEÑO DIGITAL I',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en cinematografía',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'ART030',
                'subject' => 'CASTING Y PREPARACION DE ACTORES',
                'credits' => '3',
                'pre_requirements' => 'ART033'
            ],
            [
                'career' => 'Licenciatura en cinematografía',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'ART042',
                'subject' => 'DISEÑO DE PRODUCCION',
                'credits' => '3',
                'pre_requirements' => 'ART033'
            ],
            [
                'career' => 'Licenciatura en cinematografía',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'ART043',
                'subject' => 'DIRECCION DE ARTE I',
                'credits' => '4',
                'pre_requirements' => 'ART033, ART035'
            ],
            [
                'career' => 'Licenciatura en cinematografía',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'ART036',
                'subject' => 'FOTOGRAFIA CINEMATOGRAFICA II',
                'credits' => '3',
                'pre_requirements' => 'ART035'
            ],
            [
                'career' => 'Licenciatura en cinematografía',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'CDG106',
                'subject' => 'DISEÑO DIGITAL II',
                'credits' => '3',
                'pre_requirements' => 'CDG105'
            ],
            [
                'career' => 'Licenciatura en cinematografía',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'ADM535',
                'subject' => 'ACTITUD EMPRENDEDORA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en cinematografía',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'ART044',
                'subject' => 'DIRECCION DE ARTE II',
                'credits' => '4',
                'pre_requirements' => 'ART043'
            ],
            [
                'career' => 'Licenciatura en cinematografía',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'CDG505',
                'subject' => 'DISEÑO Y ANIMACION DIGITAL I',
                'credits' => '3',
                'pre_requirements' => 'CDG106'
            ],
            [
                'career' => 'Licenciatura en cinematografía',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'ART052',
                'subject' => 'PRODUCCION Y REALIZACION I',
                'credits' => '4',
                'pre_requirements' => 'ART042, ART043'
            ],
            [
                'career' => 'Licenciatura en cinematografía',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'ADM540',
                'subject' => 'LIDERAZGO Y HABILIDADES DIRECTIVAS',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en cinematografía',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'ART317',
                'subject' => 'SONIDO Y MUSICALIZACION',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en cinematografía',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'ART054',
                'subject' => 'PRODUCCION Y REALIZACION II',
                'credits' => '4',
                'pre_requirements' => 'ART052'
            ],
            [
                'career' => 'Licenciatura en cinematografía',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'ART046',
                'subject' => 'DISEÑO DE SONIDO',
                'credits' => '4',
                'pre_requirements' => 'ART317'
            ],
            [
                'career' => 'Licenciatura en cinematografía',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'ART056',
                'subject' => 'DIRECCION CINEMATOGRAFICA I',
                'credits' => '4',
                'pre_requirements' => 'ART044, ART052'
            ],
            [
                'career' => 'Licenciatura en cinematografía',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'CDG600',
                'subject' => 'DISEÑO Y ANIMACION DIGITAL II',
                'credits' => '3',
                'pre_requirements' => 'CDG505'
            ],
            [
                'career' => 'Licenciatura en cinematografía',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'ECIN 1',
                'subject' => 'ELECTIVA I',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en cinematografía',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'ART058',
                'subject' => 'DIRECCION CINEMATOGRAFICA II',
                'credits' => '4',
                'pre_requirements' => 'ART056'
            ],
            [
                'career' => 'Licenciatura en cinematografía',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'ART060',
                'subject' => 'POST PRODUCCION PARA CINE I',
                'credits' => '4',
                'pre_requirements' => 'ART054, CDG600'
            ],
            [
                'career' => 'Licenciatura en cinematografía',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'MER101',
                'subject' => 'MERCADOTECNIA I',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en cinematografía',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'SOC125',
                'subject' => 'PSICOLOGIA DE LA PERCEPCION',
                'credits' => '3',
                'pre_requirements' => 'SOC101'
            ],
            [
                'career' => 'Licenciatura en cinematografía',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'ECIN 2',
                'subject' => 'ELECTIVA II',
                'credits' => '3',
                'pre_requirements' => 'ECIN 1'
            ],
            [
                'career' => 'Licenciatura en cinematografía',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'ART064',
                'subject' => 'COLORIZACION EN CINE',
                'credits' => '4',
                'pre_requirements' => 'ART060'
            ],
            [
                'career' => 'Licenciatura en cinematografía',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'ART062',
                'subject' => 'POST PRODUCCION PARA CINE II',
                'credits' => '4',
                'pre_requirements' => 'ART060'
            ],
            [
                'career' => 'Licenciatura en cinematografía',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'ART066',
                'subject' => 'PRESUPUESTO PARA CINE',
                'credits' => '3',
                'pre_requirements' => 'MAT010'
            ],
            [
                'career' => 'Licenciatura en cinematografía',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'ECIN 3',
                'subject' => 'ELECTIVA III',
                'credits' => '3',
                'pre_requirements' => 'ECIN 2'
            ],
            [
                'career' => 'Licenciatura en cinematografía',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'SOC281',
                'subject' => 'SEMINARIO DE GRADO',
                'credits' => '3',
                'pre_requirements' => 'SOC253 80% De los créditos aprobados'
            ],
            [
                'career' => 'Licenciatura en cinematografía',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'DER560',
                'subject' => 'LEY DE CINE Y DERECHO DE AUTOR',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en cinematografía',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'ART070',
                'subject' => 'PROYECTO CINEMATOGRAFICO I',
                'credits' => '4',
                'pre_requirements' => 'ART058, ART062'
            ],
            [
                'career' => 'Licenciatura en cinematografía',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'IDI520',
                'subject' => 'INGLES PARA CINEASTAS I',
                'credits' => '3',
                'pre_requirements' => 'ENG008'
            ],
            [
                'career' => 'Licenciatura en cinematografía',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'ART072',
                'subject' => 'PROYECTO CINEMATOGRAFICO II',
                'credits' => '4',
                'pre_requirements' => 'ART070'
            ],
            [
                'career' => 'Licenciatura en cinematografía',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'MER452',
                'subject' => 'MARKETING PARA CINE',
                'credits' => '3',
                'pre_requirements' => 'MER101'
            ],
            [
                'career' => 'Licenciatura en cinematografía',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'ART074',
                'subject' => 'APRECIACION Y CRITICA DEL CINE',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en cinematografía',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'IDI525',
                'subject' => 'INGLES PARA CINEASTAS II',
                'credits' => '3',
                'pre_requirements' => 'IDI520'
            ],
            [
                'career' => 'Licenciatura en cinematografía',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'TFG100',
                'subject' => 'TRABAJO FINAL DE GRADO',
                'credits' => '6',
                'pre_requirements' => 'SOC281 95% De los créditos aprobados'
            ],
            [
                'career' => 'Licenciatura en cinematografía',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'PAS625',
                'subject' => 'PASANTIA CINEMATOGRAFIA',
                'credits' => '0',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en cinematografía',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'OPTDEP',
                'subject' => 'OPTATIVA DEPORTE',
                'credits' => '0',
                'pre_requirements' => ''
            ]
        ];

        $CON10_pensum = [
            [
                'career' => 'Pensum antiguo: CON10',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'ADM091',
                'subject' => 'ADMINISTRACION I',
                'credits' => '3',
                'pre_requirements' => '',

            ],
            [
                'career' => 'Pensum antiguo: CON10',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'CON091',
                'subject' => 'CONTABILIDAD I',
                'credits' => '5',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: CON10',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'ESP101',
                'subject' => 'ANALISIS DE TEXTOS DISCURSIVOS',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: CON10',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'MAT100',
                'subject' => 'MATEMATICA PRE-UNIVERSITARIA',
                'credits' => '0',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: CON10',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'MER101',
                'subject' => 'MERCADOTECNIA I',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: CON10',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'SOC030',
                'subject' => 'ORIENTACION UNIVERSITARIA',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: CON10',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'SOC043',
                'subject' => 'GESTION AMBIENTAL',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: CON10',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'ENG001',
                'subject' => 'INGLES I',
                'credits' => '0',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: CON10',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'ADM092',
                'subject' => 'ADMINISTRACION II',
                'credits' => '3',
                'pre_requirements' => 'ADM091',

            ],
            [
                'career' => 'Pensum antiguo: CON10',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'CON092',
                'subject' => 'CONTABILIDAD II',
                'credits' => '5',
                'pre_requirements' => 'CON091'
            ],
            [
                'career' => 'Pensum antiguo: CON10',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'ESP102',
                'subject' => 'REDACCION DE TEXTOS DISCURSIVOS I',
                'credits' => '4',
                'pre_requirements' => 'ESP101'
            ],
            [
                'career' => 'Pensum antiguo: CON10',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'MAT121',
                'subject' => 'ALGEBRA UNIVERSITARIA',
                'credits' => '4',
                'pre_requirements' => 'MAT100'
            ],
            [
                'career' => 'Pensum antiguo: CON10',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'ENG002',
                'subject' => 'INGLES II',
                'credits' => '0',
                'pre_requirements' => 'ENG001'
            ],
            [
                'career' => 'Pensum antiguo: CON10',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'SOC011',
                'subject' => 'HISTORIA SOCIAL DOMINICANA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: CON10',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'ESP103',
                'subject' => 'REDACCION TEXTOS DISCURSIVOS II',
                'credits' => '4',
                'pre_requirements' => 'ESP102',

            ],
            [
                'career' => 'Pensum antiguo: CON10',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'MAT131',
                'subject' => 'CALCULO Y GEOMETRIA ANALITICA I',
                'credits' => '5',
                'pre_requirements' => 'MAT121'
            ],
            [
                'career' => 'Pensum antiguo: CON10',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'SOC101',
                'subject' => 'INTRODUCCION A LA PSICOLOGIA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: CON10',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'SOC200',
                'subject' => 'INTRODUCCION A LA SOCIOLOGIA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: CON10',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'SOC250',
                'subject' => 'METODOLOGIA DE LA INVESTIGACION CIENTIFICA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: CON10',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'SOC290',
                'subject' => 'ECONOMIA GENERAL',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: CON10',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'ENG003',
                'subject' => 'INGLES III',
                'credits' => '0',
                'pre_requirements' => 'ENG002'
            ],

            [
                'career' => 'Pensum antiguo: CON10',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'ADM535',
                'subject' => 'ACTITUD EMPRENDEDORA',
                'credits' => '3',
                'pre_requirements' => 'SOC101'
            ],
            [
                'career' => 'Pensum antiguo: CON10',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'CON219',
                'subject' => 'COSTOS PRODUCTOS Y SERVICIOS I',
                'credits' => '5',
                'pre_requirements' => 'CON092'
            ],
            [
                'career' => 'Pensum antiguo: CON10',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'ESP301',
                'subject' => 'EXPRESION ORAL',
                'credits' => '3',
                'pre_requirements' => 'ESP103'
            ],
            [
                'career' => 'Pensum antiguo: CON10',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'MAT241',
                'subject' => 'MATEMATICA FINANCIERA I',
                'credits' => '4',
                'pre_requirements' => 'MAT131'
            ],
            [
                'career' => 'Pensum antiguo: CON10',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'MAT250',
                'subject' => 'ESTADISTICA I',
                'credits' => '4',
                'pre_requirements' => 'MAT131'
            ],
            [
                'career' => 'Pensum antiguo: CON10',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'ENG004',
                'subject' => 'INGLES IV',
                'credits' => '0',
                'pre_requirements' => 'ENG003'
            ],
            [
                'career' => 'Pensum antiguo: CON10',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'ADM120',
                'subject' => 'LIDERAZGO Y TECNICAS DE SUPERVISION',
                'credits' => '3',
                'pre_requirements' => 'ADM091'
            ],
            [
                'career' => 'Pensum antiguo: CON10',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'ADM124',
                'subject' => 'GESTION DEL TALENTO HUMANO',
                'credits' => '4',
                'pre_requirements' => 'ADM092'
            ],
            [
                'career' => 'Pensum antiguo: CON10',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'ADM140',
                'subject' => 'ADMINISTRACION FINANCIERA I',
                'credits' => '3',
                'pre_requirements' => 'MAT241'
            ],
            [
                'career' => 'Pensum antiguo: CON10',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'DER011',
                'subject' => 'DERECHO COMERCIAL',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: CON10',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'MAT242',
                'subject' => 'MATEMATICA FINANCIERA II',
                'credits' => '4',
                'pre_requirements' => 'MAT241'
            ],
            [
                'career' => 'Pensum antiguo: CON10',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'MAT251',
                'subject' => 'ESTADISTICA II',
                'credits' => '4',
                'pre_requirements' => 'MAT250'
            ],
            [
                'career' => 'Pensum antiguo: CON10',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'ENG005',
                'subject' => 'INGLES V',
                'credits' => '0',
                'pre_requirements' => 'ENG004'
            ],
            [
                'career' => 'Pensum antiguo: CON10',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'ADM221',
                'subject' => 'MONEDA Y BANCA',
                'credits' => '3',
                'pre_requirements' => 'SOC290',

            ],
            [
                'career' => 'Pensum antiguo: CON10',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'CON093',
                'subject' => 'CONTABILIDAD III',
                'credits' => '5',
                'pre_requirements' => 'CON092'
            ],
            [
                'career' => 'Pensum antiguo: CON10',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'CON211',
                'subject' => 'SISTEMA TRIBUTARIO DOMINICANO I',
                'credits' => '3',
                'pre_requirements' => 'CON092'
            ],
            [
                'career' => 'Pensum antiguo: CON10',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'CON220',
                'subject' => 'COSTOS PRODUCTOS Y SERVICIOS II',
                'credits' => '5',
                'pre_requirements' => 'CON219'
            ],
            [
                'career' => 'Pensum antiguo: CON10',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'ENG006',
                'subject' => 'INGLES VI',
                'credits' => '0',
                'pre_requirements' => 'ENG005'
            ],
            [
                'career' => 'Pensum antiguo: CON10',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'ADM130',
                'subject' => 'PRESUPUESTO EMPRESARIAL',
                'credits' => '3',
                'pre_requirements' => 'CON092'
            ],
            [
                'career' => 'Pensum antiguo: CON10',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'CON094',
                'subject' => 'CONTABILIDAD IV',
                'credits' => '5',
                'pre_requirements' => 'CON093'
            ],
            [
                'career' => 'Pensum antiguo: CON10',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'CON133',
                'subject' => 'CONTABILIDAD BANCARIA',
                'credits' => '4',
                'pre_requirements' => 'ADM221, CON093'
            ],
            [
                'career' => 'Pensum antiguo: CON10',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'CON134',
                'subject' => 'DISEÑO DE SISTEMAS CONTABLES',
                'credits' => '3',
                'pre_requirements' => 'CON092'
            ],
            [
                'career' => 'Pensum antiguo: CON10',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'ENG007',
                'subject' => 'INGLES VII',
                'credits' => '0',
                'pre_requirements' => 'ENG006'
            ],
            [
                'career' => 'Pensum antiguo: CON10',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'CON225',
                'subject' => 'SISTEMA TRIBUTARIO DOMINICANO II',
                'credits' => '3',
                'pre_requirements' => 'CON211'
            ],
            [
                'career' => 'Pensum antiguo: CON10',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'ADM219',
                'subject' => 'FORMULAC.Y EVAL. DE PROYECTOS',
                'credits' => '3',
                'pre_requirements' => 'ADM130, SOC290'
            ],
            [
                'career' => 'Pensum antiguo: CON10',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'CON223',
                'subject' => 'CONTABILIDAD SUPERIOR',
                'credits' => '3',
                'pre_requirements' => 'CON094'
            ],
            [
                'career' => 'Pensum antiguo: CON10',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'CON307',
                'subject' => 'AUDITORIA EXTERNA I',
                'credits' => '4',
                'pre_requirements' => 'CON093'
            ],
            [
                'career' => 'Pensum antiguo: CON10',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'CON400',
                'subject' => 'CONTABILIDAD COMPUTARIZADA',
                'credits' => '3',
                'pre_requirements' => 'CON093'
            ],
            [
                'career' => 'Pensum antiguo: CON10',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'DER016',
                'subject' => 'DERECHO LABORAL',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: CON10',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'ENG008',
                'subject' => 'INGLES VIII',
                'credits' => '0',
                'pre_requirements' => 'ENG007'
            ],
            [
                'career' => 'Pensum antiguo: CON10',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'ADM141',
                'subject' => 'ADMINISTRACION FINANCIERA II',
                'credits' => '3',
                'pre_requirements' => 'ADM140, MAT242'
            ],
            [
                'career' => 'Pensum antiguo: CON10',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'ADM162',
                'subject' => 'GERENCIA DE OPERACIONES',
                'credits' => '3',
                'pre_requirements' => 'MAT131'
            ],
            [
                'career' => 'Pensum antiguo: CON10',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'CON108',
                'subject' => 'CONTABILIDAD DE GESTION',
                'credits' => '3',
                'pre_requirements' => 'CON219'
            ],
            [
                'career' => 'Pensum antiguo: CON10',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'CON213',
                'subject' => 'SIST. GESTION FINANCIERA GUBERNAMENTAL',
                'credits' => '3',
                'pre_requirements' => 'CON225, SOC290'
            ],
            [
                'career' => 'Pensum antiguo: CON10',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'CON300',
                'subject' => 'TALLER DE CONTABILIDAD E IMPUESTOS',
                'credits' => '2',
                'pre_requirements' => 'CON223, CON225'
            ],
            [
                'career' => 'Pensum antiguo: CON10',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'CON308',
                'subject' => 'AUDITORIA EXTERNA II',
                'credits' => '4',
                'pre_requirements' => 'CON307'
            ],
            [
                'career' => 'Pensum antiguo: CON10',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'IDI070',
                'subject' => 'INGLES TECNICO PARA NEGOCIOS I',
                'credits' => '3',
                'pre_requirements' => 'ENG008'
            ],
            [
                'career' => 'Pensum antiguo: CON10',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'ADM175',
                'subject' => 'CREACION Y GERENCIA DE PYME',
                'credits' => '3',
                'pre_requirements' => 'ADM219'
            ],
            [
                'career' => 'Pensum antiguo: CON10',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'CON224',
                'subject' => 'CODIGO DE ETICA DEL CONTADOR',
                'credits' => '2',
                'pre_requirements' => 'CON093'
            ],
            [
                'career' => 'Pensum antiguo: CON10',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'CON309',
                'subject' => 'AUDITORIA EXTERNA III',
                'credits' => '4',
                'pre_requirements' => 'CON308'
            ],
            [
                'career' => 'Pensum antiguo: CON10',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'CON310',
                'subject' => 'AUDITORIA INTERNA',
                'credits' => '4',
                'pre_requirements' => 'CON308'
            ],
            [
                'career' => 'Pensum antiguo: CON10',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'SOC281',
                'subject' => 'SEMINARIO DE GRADO',
                'credits' => '3',
                'pre_requirements' => '80% De los credits aprobados'
            ],
            [
                'career' => 'Pensum antiguo: CON10',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'IDI071',
                'subject' => 'INGLES TECNICO PARA NEGOCIOS II',
                'credits' => '3',
                'pre_requirements' => 'IDI070'
            ],
            [
                'career' => 'Pensum antiguo: CON10',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'ADM146',
                'subject' => 'SIMULACION DE NEGOCIOS',
                'credits' => '3',
                'pre_requirements' => 'ADM130, ADM141'
            ],
            [
                'career' => 'Pensum antiguo: CON10',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'CON216',
                'subject' => 'CONTABILIDAD INTERNACIONAL',
                'credits' => '2',
                'pre_requirements' => 'CON108, CON308'
            ],
            [
                'career' => 'Pensum antiguo: CON10',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'CON306',
                'subject' => 'AUDITORIA CON EL USO DEL COMPUTADOR',
                'credits' => '3',
                'pre_requirements' => 'CON308'
            ],
            [
                'career' => 'Pensum antiguo: CON10',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'NEG121',
                'subject' => 'MERCADO DE VALORES',
                'credits' => '3',
                'pre_requirements' => 'ADM141'
            ],

            [
                'career' => 'Pensum antiguo: CON10',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'OPTDEP',
                'subject' => 'OPTATIVA DEPORTE',
                'credits' => '0',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: CON10',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'PAS530',
                'subject' => 'PASANTIA EMPRESARIAL DE CONTABILIDAD',
                'credits' => '0',
                'pre_requirements' => '75% De los credits aprobados'
            ],
            [
                'career' => 'Pensum antiguo: CON10',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'TES-MON',
                'subject' => 'TRABAJO DE GRADO O CURSO MONOGRAFICO',
                'credits' => '6',
                'pre_requirements' => '92% De los credits aprobados'
            ]

        ];

        $CON11_pensum = [
            [
                'career' => 'Pensum actual: CON11',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'SOC030',
                'subject' => 'ORIENTACION UNIVERSITARIA',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: CON11',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'SOC011',
                'subject' => 'HISTORIA SOCIAL DOMINICANA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: CON11',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'SOC043',
                'subject' => 'GESTION AMBIENTAL',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: CON11',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'MAT010',
                'subject' => 'MATEMATICA BASICA UNIVERSITARIA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: CON11',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'ESP101',
                'subject' => 'ANALISIS DE TEXTOS DISCURSIVOS',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: CON11',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'INF214',
                'subject' => 'APLICACIONES FINANCIERAS',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: CON11',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'ENG000',
                'subject' => 'FUNDAMENTOS DE INGLES (I Y II)',
                'credits' => '0',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: CON11',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'SOC013',
                'subject' => 'FILOSOFIA',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: CON11',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'SOC101',
                'subject' => 'INTRODUCCION A LA PSICOLOGIA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: CON11',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'MAT121',
                'subject' => 'ALGEBRA UNIVERSITARIA',
                'credits' => '4',
                'pre_requirements' => 'MAT010'
            ],
            [
                'career' => 'Pensum actual: CON11',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'ESP106',
                'subject' => 'REDACCION DE TEXTOS DISCURSIVOS I',
                'credits' => '3',
                'pre_requirements' => 'ESP101'
            ],
            [
                'career' => 'Pensum actual: CON11',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'ADM103',
                'subject' => 'FUNDAMENTOS DE ADMINISTRACION',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: CON11',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'CON091',
                'subject' => 'CONTABILIDAD I',
                'credits' => '5',
                'pre_requirements' => 'INF214, MAT010'
            ],
            [
                'career' => 'Pensum actual: CON11',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'ENG003',
                'subject' => 'INGLES III',
                'credits' => '0',
                'pre_requirements' => 'ENG000'
            ],
            [
                'career' => 'Pensum actual: CON11',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'SOC200',
                'subject' => 'INTRODUCCION A LA SOCIOLOGIA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: CON11',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'MAT131',
                'subject' => 'CALCULO Y GEOMETRIA ANALITICA I',
                'credits' => '5',
                'pre_requirements' => 'MAT121'
            ],
            [
                'career' => 'Pensum actual: CON11',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'ESP107',
                'subject' => 'REDACCION DE TEXTOS DISCURSIVOS II',
                'credits' => '3',
                'pre_requirements' => 'ESP106'
            ],
            [
                'career' => 'Pensum actual: CON11',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'CON092',
                'subject' => 'CONTABILIDAD II',
                'credits' => '5',
                'pre_requirements' => 'CON091'
            ],
            [
                'career' => 'Pensum actual: CON11',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'MER101',
                'subject' => 'MERCADOTECNIA I',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: CON11',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'ENG004',
                'subject' => 'INGLES IV',
                'credits' => '0',
                'pre_requirements' => 'ENG003'
            ],
            [
                'career' => 'Pensum actual: CON11',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'SOC253',
                'subject' => 'METODOLOGIA Y TECNICAS DE INVESTIGACION',
                'credits' => '4',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: CON11',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'SOC031',
                'subject' => 'ETICA PROFESIONAL',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: CON11',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'MAT241',
                'subject' => 'MATEMATICA FINANCIERA I',
                'credits' => '4',
                'pre_requirements' => 'MAT131'
            ],
            [
                'career' => 'Pensum actual: CON11',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'ECO101',
                'subject' => 'ECONOMIA I',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: CON11',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'CON093',
                'subject' => 'CONTABILIDAD III',
                'credits' => '5',
                'pre_requirements' => 'CON092'
            ],
            [
                'career' => 'Pensum actual: CON11',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'ENG005',
                'subject' => 'INGLES V',
                'credits' => '0',
                'pre_requirements' => 'ENG004'
            ],
            [
                'career' => 'Pensum actual: CON11',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'ADM540',
                'subject' => 'LIDERAZGO Y HABILIDADES DIRECTIVAS',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: CON11',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'MAT250',
                'subject' => 'ESTADISTICA I',
                'credits' => '4',
                'pre_requirements' => 'MAT131'
            ],
            [
                'career' => 'Pensum actual: CON11',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'ECO102',
                'subject' => 'ECONOMIA II',
                'credits' => '3',
                'pre_requirements' => 'ECO101'
            ],
            [
                'career' => 'Pensum actual: CON11',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'CON094',
                'subject' => 'CONTABILIDAD IV',
                'credits' => '5',
                'pre_requirements' => 'CON093'
            ],
            [
                'career' => 'Pensum actual: CON11',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'ADM221',
                'subject' => 'MONEDA Y BANCA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: CON11',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'ENG006',
                'subject' => 'INGLES VI',
                'credits' => '0',
                'pre_requirements' => 'ENG005'
            ],


            [
                'career' => 'Pensum actual: CON11',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'CON211',
                'subject' => 'SISTEMA TRIBUTARIO DOMINICANO I',
                'credits' => '3',
                'pre_requirements' => 'CON092'
            ],
            [
                'career' => 'Pensum actual: CON11',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'CON400',
                'subject' => 'CONTABILIDAD COMPUTARIZADA',
                'credits' => '3',
                'pre_requirements' => 'CON094'
            ],
            [
                'career' => 'Pensum actual: CON11',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'CON223',
                'subject' => 'CONTABILIDAD SUPERIOR',
                'credits' => '3',
                'pre_requirements' => 'CON094'
            ],
            [
                'career' => 'Pensum actual: CON11',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'ADM130',
                'subject' => 'PRESUPUESTO EMPRESARIAL',
                'credits' => '3',
                'pre_requirements' => 'MAT250'
            ],
            [
                'career' => 'Pensum actual: CON11',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'FIN101',
                'subject' => 'FINANZAS I',
                'credits' => '3',
                'pre_requirements' => 'CON091, MAT241'
            ],
            [
                'career' => 'Pensum actual: CON11',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'INF311',
                'subject' => 'INTELIGENCIA DE NEGOCIOS',
                'credits' => '3',
                'pre_requirements' => 'INF214, MAT250'
            ],
            [
                'career' => 'Pensum actual: CON11',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'IDI080',
                'subject' => 'INGLES PARA NEGOCIOS I',
                'credits' => '3',
                'pre_requirements' => 'ENG006'
            ],
            [
                'career' => 'Pensum actual: CON11',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'CON225',
                'subject' => 'SISTEMA TRIBUTARIO DOMINICANO II',
                'credits' => '3',
                'pre_requirements' => 'CON211'
            ],
            [
                'career' => 'Pensum actual: CON11',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'CON219',
                'subject' => 'COSTOS PRODUCTOS Y SERVICIOS I',
                'credits' => '5',
                'pre_requirements' => 'CON091'
            ],
            [
                'career' => 'Pensum actual: CON11',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'FIN102',
                'subject' => 'FINANZAS II',
                'credits' => '3',
                'pre_requirements' => 'FIN101'
            ],
            [
                'career' => 'Pensum actual: CON11',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'ADM151',
                'subject' => 'SEMINARIO PROYECTO DE NEGOCIOS',
                'credits' => '2',
                'pre_requirements' => '50% De los créditos aprobados'
            ],
            [
                'career' => 'Pensum actual: CON11',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'CON134',
                'subject' => 'DISEÑO DE SISTEMAS CONTABLES',
                'credits' => '3',
                'pre_requirements' => 'CON092'
            ],
            [
                'career' => 'Pensum actual: CON11',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'IDI081',
                'subject' => 'INGLES PARA NEGOCIOS II',
                'credits' => '3',
                'pre_requirements' => 'IDI080'
            ],
            [
                'career' => 'Pensum actual: CON11',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'ECON I',
                'subject' => 'ELECTIVA I',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: CON11',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'CON307',
                'subject' => 'AUDITORIA EXTERNA I',
                'credits' => '4',
                'pre_requirements' => 'CON093'
            ],
            [
                'career' => 'Pensum actual: CON11',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'CON300',
                'subject' => 'TALLER DE CONTABILIDAD E IMPUESTOS',
                'credits' => '2',
                'pre_requirements' => 'CON225'
            ],
            [
                'career' => 'Pensum actual: CON11',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'CON220',
                'subject' => 'COSTOS PRODUCTOS Y SERVICIOS II',
                'credits' => '5',
                'pre_requirements' => 'CON219'
            ],
            [
                'career' => 'Pensum actual: CON11',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'CON114',
                'subject' => 'GESTION FINANCIERA BANCARIA',
                'credits' => '3',
                'pre_requirements' => 'FIN102'
            ],
            [
                'career' => 'Pensum actual: CON11',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'IDI082',
                'subject' => 'INGLES PARA NEGOCIOS III',
                'credits' => '3',
                'pre_requirements' => 'IDI081'
            ],
            [
                'career' => 'Pensum actual: CON11',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'ECON II',
                'subject' => 'ELECTIVA II',
                'credits' => '3',
                'pre_requirements' => '50% De los créditos aprobados'
            ],
            [
                'career' => 'Pensum actual: CON11',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'CON308',
                'subject' => 'AUDITORIA EXTERNA II',
                'credits' => '4',
                'pre_requirements' => 'CON307'
            ],
            [
                'career' => 'Pensum actual: CON11',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'CON108',
                'subject' => 'CONTABILIDAD DE GESTION',
                'credits' => '3',
                'pre_requirements' => 'CON219'
            ],
            [
                'career' => 'Pensum actual: CON11',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'CON213',
                'subject' => 'SIST. GESTION FINANCIERA GUBERNAMENTAL',
                'credits' => '3',
                'pre_requirements' => 'CON225'
            ],
            [
                'career' => 'Pensum actual: CON11',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'CON112',
                'subject' => 'FINANZAS INTERNACIONALES',
                'credits' => '3',
                'pre_requirements' => 'ECO102, FIN102'
            ],
            [
                'career' => 'Pensum actual: CON11',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'ADM535',
                'subject' => 'ACTITUD EMPRENDEDORA',
                'credits' => '3',
                'pre_requirements' => 'SOC101'
            ],
            [
                'career' => 'Pensum actual: CON11',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'IDI083',
                'subject' => 'INGLES PARA NEGOCIOS IV',
                'credits' => '3',
                'pre_requirements' => 'IDI082'
            ],
            [
                'career' => 'Pensum actual: CON11',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'ECON III',
                'subject' => 'ELECTIVA III',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: CON11',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'CON309',
                'subject' => 'AUDITORIA EXTERNA III',
                'credits' => '4',
                'pre_requirements' => 'CON308'
            ],
            [
                'career' => 'Pensum actual: CON11',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'CON315',
                'subject' => 'NIIF PARA PYMES',
                'credits' => '3',
                'pre_requirements' => 'CON223'
            ],
            [
                'career' => 'Pensum actual: CON11',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'DER016',
                'subject' => 'DERECHO LABORAL',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: CON11',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'SOC281',
                'subject' => 'SEMINARIO DE GRADO',
                'credits' => '3',
                'pre_requirements' => 'SOC253 80% De los créditos aprobados'
            ],
            [
                'career' => 'Pensum actual: CON11',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'ADM146',
                'subject' => 'SIMULACION DE NEGOCIOS',
                'credits' => '3',
                'pre_requirements' => '80% De los créditos aprobados'
            ],
            [
                'career' => 'Pensum actual: CON11',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'IDI084',
                'subject' => 'INGLES PARA NEGOCIOS V',
                'credits' => '3',
                'pre_requirements' => 'IDI083'
            ],
            [
                'career' => 'Pensum actual: CON11',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'PAS530',
                'subject' => 'PASANTIA EMPRESARIAL DE CONTABILIDAD',
                'credits' => '0',
                'pre_requirements' => '75% De los créditos aprobados'
            ],
            [
                'career' => 'Pensum actual: CON11',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'CON310',
                'subject' => 'AUDITORIA INTERNA',
                'credits' => '4',
                'pre_requirements' => 'CON309'
            ],
            [
                'career' => 'Pensum actual: CON11',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'CON306',
                'subject' => 'AUDITORIA CON EL USO DEL COMPUTADOR',
                'credits' => '3',
                'pre_requirements' => 'CON308'
            ],
            [
                'career' => 'Pensum actual: CON11',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'DER011',
                'subject' => 'DERECHO COMERCIAL',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: CON11',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'IDI085',
                'subject' => 'INGLES PARA NEGOCIOS VI',
                'credits' => '3',
                'pre_requirements' => 'IDI084'
            ],
            [
                'career' => 'Pensum actual: CON11',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'TFG100',
                'subject' => 'TRABAJO FINAL DE GRADO',
                'credits' => '6',
                'pre_requirements' => 'SOC281 92% De los créditos aprobados'
            ],
            [
                'career' => 'Pensum actual: CON11',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'OPTDEP',
                'subject' => 'OPTATIVA DEPORTE',
                'credits' => '0',
                'pre_requirements' => ''
            ]
        ];

        $CPM11_pensum = [
            [
                'career' => 'Licenciatura en comunicación y periodismo multiplataforma',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'SOC011',
                'subject' => 'HISTORIA SOCIAL DOMINICANA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en comunicación y periodismo multiplataforma',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'ESP101',
                'subject' => 'ANALISIS DE TEXTOS DISCURSIVOS',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en comunicación y periodismo multiplataforma',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'SOC030',
                'subject' => 'ORIENTACION UNIVERSITARIA',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en comunicación y periodismo multiplataforma',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'MAT010',
                'subject' => 'MATEMATICA BASICA UNIVERSITARI',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en comunicación y periodismo multiplataforma',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'SOC043',
                'subject' => 'GESTION AMBIENTAL',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en comunicación y periodismo multiplataforma',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'CPM100',
                'subject' => 'CULTURA Y GLOBALIZ DE LA INFOR',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en comunicación y periodismo multiplataforma',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'CPM105',
                'subject' => 'PERIDISM DOM, HISTO Y SOCIEDAD',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en comunicación y periodismo multiplataforma',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'SOC013',
                'subject' => 'FILOSOFIA',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en comunicación y periodismo multiplataforma',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'SOC101',
                'subject' => 'INTRODUCION A LA PSICOLOGIA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en comunicación y periodismo multiplataforma',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'ESP106',
                'subject' => 'REDACCION DE TEXT DISCURSIVO I',
                'credits' => '3',
                'pre_requirements' => 'ESP101'
            ],
            [
                'career' => 'Licenciatura en comunicación y periodismo multiplataforma',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'SOC017',
                'subject' => 'CREATIVIDAD Y PENSAMIENTO CRIT',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en comunicación y periodismo multiplataforma',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'CPM200',
                'subject' => 'HERRAMIENTAS DEL DESEÑO VECTOR',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en comunicación y periodismo multiplataforma',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'ART141',
                'subject' => 'FOTOGRAFIA I',
                'credits' => '3',
                'pre_requirements' => ''
            ],

            [
                'career' => 'Licenciatura en comunicación y periodismo multiplataforma',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'SOC200',
                'subject' => 'INTRODUCCION A LA SOCIOLOGIA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en comunicación y periodismo multiplataforma',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'ESP107',
                'subject' => 'REDACCION DE TEXTOS DISCURS II',
                'credits' => '3',
                'pre_requirements' => 'ESP106'
            ],
            [
                'career' => 'Licenciatura en comunicación y periodismo multiplataforma',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'CPM300',
                'subject' => 'REDAC PERIOD: GENEROS INFORMAT',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en comunicación y periodismo multiplataforma',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'CPM305',
                'subject' => 'EDICION Y MANIPUL DE IMAG DIGI',
                'credits' => '3',
                'pre_requirements' => 'CPM200'
            ],
            [
                'career' => 'Licenciatura en comunicación y periodismo multiplataforma',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'ART012',
                'subject' => 'HISTORIA D ELA COMUNICACION I',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en comunicación y periodismo multiplataforma',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'ART142',
                'subject' => 'FOTOGRAFIA II',
                'credits' => '3',
                'pre_requirements' => 'ART141'
            ],
            [
                'career' => 'Licenciatura en comunicación y periodismo multiplataforma',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'CPM310',
                'subject' => 'LOCUCION Y TECN DE EXPRES ORAL',
                'credits' => '3',
                'pre_requirements' => ''
            ],

            [
                'career' => 'Licenciatura en comunicación y periodismo multiplataforma',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'SOC253',
                'subject' => 'METO Y TECNICAS DE INVESTIGACI',
                'credits' => '4',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en comunicación y periodismo multiplataforma',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'SOC031',
                'subject' => 'ETICA PROFESIONAL',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en comunicación y periodismo multiplataforma',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'ESP109',
                'subject' => 'TEC AVANZ DE RED Y COMP DE TEX',
                'credits' => '3',
                'pre_requirements' => 'ESP107'
            ],
            [
                'career' => 'Licenciatura en comunicación y periodismo multiplataforma',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'CPM400',
                'subject' => 'DISEÑO EDITORIAL Y DIAGRAM DIG',
                'credits' => '3',
                'pre_requirements' => 'CPM305'
            ],
            [
                'career' => 'Licenciatura en comunicación y periodismo multiplataforma',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'ART014',
                'subject' => 'HISTORIA DE LA COMUNICACION II',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en comunicación y periodismo multiplataforma',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'CPM405',
                'subject' => 'REDAC PERIOD: GENE DE ANA Y OP',
                'credits' => '3',
                'pre_requirements' => 'CPM300'
            ],
            [
                'career' => 'Licenciatura en comunicación y periodismo multiplataforma',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'CPM410',
                'subject' => 'PRODUCCION INFORMATIV DE RADIO',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en comunicación y periodismo multiplataforma',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'CPM500',
                'subject' => 'REDACCION PERIOD: GENEROS INTE',
                'credits' => '3',
                'pre_requirements' => 'CPM405'
            ],
            [
                'career' => 'Licenciatura en comunicación y periodismo multiplataforma',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'CPM505',
                'subject' => 'EDICION Y MAQUETACION WEB',
                'credits' => '3',
                'pre_requirements' => 'CPM400'
            ],
            [
                'career' => 'Licenciatura en comunicación y periodismo multiplataforma',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'CPM510',
                'subject' => 'FOTOPERIODISMO',
                'credits' => '3',
                'pre_requirements' => 'CPM405'
            ],
            [
                'career' => 'Licenciatura en comunicación y periodismo multiplataforma',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'CPM515',
                'subject' => 'CREATIVI Y ESTRAT DE CONTENIDO',
                'credits' => '3',
                'pre_requirements' => 'ESP109'
            ],
            [
                'career' => 'Licenciatura en comunicación y periodismo multiplataforma',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'ART525',
                'subject' => 'TECNICA DE DOCM DE LA COMUNICA',
                'credits' => '3',
                'pre_requirements' => 'SOC253'
            ],
            [
                'career' => 'Licenciatura en comunicación y periodismo multiplataforma',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'CPM520',
                'subject' => 'SEMIOTICA, COD Y SIST DE ANALI',
                'credits' => '3',
                'pre_requirements' => 'SOC253'
            ],
            [
                'career' => 'Licenciatura en comunicación y periodismo multiplataforma',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'CPM600',
                'subject' => 'TEORIA E INV DE LA COM DE MASA',
                'credits' => '3',
                'pre_requirements' => 'CPM520'
            ],
            [
                'career' => 'Licenciatura en comunicación y periodismo multiplataforma',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'ADM535',
                'subject' => 'ACTITUD EMPRENDEDORA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en comunicación y periodismo multiplataforma',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'MER315',
                'subject' => 'MARKET SOCIOPOL EMPO Y ACC SOC',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en comunicación y periodismo multiplataforma',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'CPM605',
                'subject' => 'FOTOGRAFIA DIGITAL',
                'credits' => '3',
                'pre_requirements' => 'CPM505'
            ],
            [
                'career' => 'Licenciatura en comunicación y periodismo multiplataforma',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'CPM610',
                'subject' => 'PRODUC DE TELEVISION INFORMATI',
                'credits' => '3',
                'pre_requirements' => 'CPM515'
            ],
            [
                'career' => 'Licenciatura en comunicación y periodismo multiplataforma',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'SOC115',
                'subject' => 'PSICOLOGIA DEL CONSUMIDOR',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en comunicación y periodismo multiplataforma',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'CPM700',
                'subject' => 'GESTION DE LAS RELACI PUBLICAS',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en comunicación y periodismo multiplataforma',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'CPM705',
                'subject' => 'DIRRECION DE COMUN CORPORATIVA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en comunicación y periodismo multiplataforma',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'CPM710',
                'subject' => 'CREACION Y EDIC DE VIDEOS INFO',
                'credits' => '3',
                'pre_requirements' => 'CPM610'
            ],
            [
                'career' => 'Licenciatura en comunicación y periodismo multiplataforma',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'CPM715',
                'subject' => 'TEORIA DEL CONOCIMEINTO',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en comunicación y periodismo multiplataforma',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'CPM720',
                'subject' => 'AGENCIAS DE INFORMACION',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en comunicación y periodismo multiplataforma',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'E071',
                'subject' => 'ELECTIVA I',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en comunicación y periodismo multiplataforma',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'CPM800',
                'subject' => 'COMUNI ESTRATEGICA Y LIDERAZGO',
                'credits' => '3',
                'pre_requirements' => 'CPM705'
            ],
            [
                'career' => 'Licenciatura en comunicación y periodismo multiplataforma',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'CPM805',
                'subject' => 'PERIODISMO PARTICIPATIVO',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en comunicación y periodismo multiplataforma',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'CPM810',
                'subject' => 'CREACION Y DIRREC DE REDES SOC',
                'credits' => '3',
                'pre_requirements' => 'CPM710'
            ],
            [
                'career' => 'Licenciatura en comunicación y periodismo multiplataforma',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'CPM815',
                'subject' => 'MOTIV DIRECT Y COM INTERACTIVA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en comunicación y periodismo multiplataforma',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'E072',
                'subject' => 'ELECTIVA II',
                'credits' => '3',
                'pre_requirements' => 'E071'
            ],
            [
                'career' => 'Licenciatura en comunicación y periodismo multiplataforma',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'CPM900',
                'subject' => 'DEONTOLOGIA DE LA PRACTICA COM',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en comunicación y periodismo multiplataforma',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'CPM905',
                'subject' => 'PERIODISMO DE INVESTIGACION',
                'credits' => '3',
                'pre_requirements' => 'CPM805'
            ],
            [
                'career' => 'Licenciatura en comunicación y periodismo multiplataforma',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'CPM910',
                'subject' => 'PERIODISMO Y MEDIOS DIGITALES',
                'credits' => '3',
                'pre_requirements' => 'CPM810'
            ],
            [
                'career' => 'Licenciatura en comunicación y periodismo multiplataforma',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'E073',
                'subject' => 'ELECTIVA III',
                'credits' => '3',
                'pre_requirements' => 'E072'
            ],
            [
                'career' => 'Licenciatura en comunicación y periodismo multiplataforma',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'SOC281',
                'subject' => 'SEMINARIO DE GRADO',
                'credits' => '3',
                'pre_requirements' => 'SOC253, 80% De los créditos aprobados'
            ],
            [
                'career' => 'Licenciatura en comunicación y periodismo multiplataforma',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'IDI530',
                'subject' => 'INGLES PARA COMUNICADORES I',
                'credits' => '3',
                'pre_requirements' => 'ENG008'
            ],
            [
                'career' => 'Licenciatura en comunicación y periodismo multiplataforma',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'CPM950',
                'subject' => 'CREACION DE CONTEN PARA LA WEB',
                'credits' => '3',
                'pre_requirements' => 'CPM910'
            ],
            [
                'career' => 'Licenciatura en comunicación y periodismo multiplataforma',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'CPM955',
                'subject' => 'PERIOD DIG Y APLIC DE HIPERTEX',
                'credits' => '3',
                'pre_requirements' => 'CPM910'
            ],
            [
                'career' => 'Licenciatura en comunicación y periodismo multiplataforma',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'CPM960',
                'subject' => 'PERIODISMO TRANSMEDIA',
                'credits' => '3',
                'pre_requirements' => 'CPM950'
            ],
            [
                'career' => 'Licenciatura en comunicación y periodismo multiplataforma',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'IDI531',
                'subject' => 'INGLES PARA COMUNICADORES II',
                'credits' => '3',
                'pre_requirements' => 'IDI530'
            ],
            [
                'career' => 'Licenciatura en comunicación y periodismo multiplataforma',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'CPM965',
                'subject' => 'PERIODISMO MULTIPLATAFORMA',
                'credits' => '3',
                'pre_requirements' => 'CPM955'
            ],
            [
                'career' => 'Licenciatura en comunicación y periodismo multiplataforma',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'ODEP',
                'subject' => 'OPTATIVA DE DEPORTE',
                'credits' => '0',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en comunicación y periodismo multiplataforma',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'TFG100',
                'subject' => 'TRABAJO FINAL DE GRADO',
                'credits' => '6',
                'pre_requirements' => '92% De los créditos aprobados'
            ]
        ];

        $DER7_pensum = [
            [
                'career' => 'Licenciatura en derecho',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'DER104',
                'subject' => 'INTRODUCCION AL ESTUDIO DEL DERECHO',
                'credits' => '5',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en derecho',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'DER135',
                'subject' => 'DERECHO ROMANO',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en derecho',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'ESP101',
                'subject' => 'ANALISIS DE TEXTOS DISCURSIVOS',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en derecho',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'MAT100',
                'subject' => 'MATEMATICA PRE-UNIVERSITARIA',
                'credits' => '0',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en derecho',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'SOC001',
                'subject' => 'HISTORIA DE LA CULTURA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en derecho',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'SOC030',
                'subject' => 'ORIENTACION UNIVERSITARIA',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en derecho',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'SOC190',
                'subject' => 'INTRODUCCION A LAS CIENCIAS SOCIALES',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en derecho',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'OPT-I1',
                'subject' => 'OPTATIVA IDIOMAS',
                'credits' => '0',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en derecho',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'DER115',
                'subject' => 'DERECHO DE LAS PERSONAS',
                'credits' => '4',
                'pre_requirements' => 'DER104'
            ],
            [
                'career' => 'Licenciatura en derecho',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'DER172',
                'subject' => 'DERECHO CONSTITUCIONAL',
                'credits' => '3',
                'pre_requirements' => 'DER104'
            ],
            [
                'career' => 'Licenciatura en derecho',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'DER182',
                'subject' => 'TEORIA GENERAL DE DERECHO',
                'credits' => '3',
                'pre_requirements' => 'DER104'
            ],
            [
                'career' => 'Licenciatura en derecho',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'ESP102',
                'subject' => 'REDACCION DE TEXTOS DISCURSIVOS I',
                'credits' => '4',
                'pre_requirements' => 'ESP101'
            ],
            [
                'career' => 'Licenciatura en derecho',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'MAT111',
                'subject' => 'NOCIONES DE MATEMATICA',
                'credits' => '4',
                'pre_requirements' => 'MAT100'
            ],
            [
                'career' => 'Licenciatura en derecho',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'SOC011',
                'subject' => 'HISTORIA SOCIAL DOMINICANA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en derecho',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'SOC013',
                'subject' => 'FILOSOFIA',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en derecho',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'OPT-I2',
                'subject' => 'OPTATIVA IDIOMAS',
                'credits' => '0',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en derecho',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'DER105',
                'subject' => 'HISTORIA DE LAS INSTITUCIONES DOMINICANAS',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en derecho',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'DER116',
                'subject' => 'DERECHO DE LA FAMILIA',
                'credits' => '4',
                'pre_requirements' => 'DER115'
            ],
            [
                'career' => 'Licenciatura en derecho',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'DER174',
                'subject' => 'DERECHO PROCESAL CONSTITUCIONAL',
                'credits' => '3',
                'pre_requirements' => 'DER172'
            ],
            [
                'career' => 'Licenciatura en derecho',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'ESP103',
                'subject' => 'REDACCION DE TEXTOS DISCURSIVOS II',
                'credits' => '4',
                'pre_requirements' => 'ESP102'
            ],
            [
                'career' => 'Licenciatura en derecho',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'SOC041',
                'subject' => 'ECOLOGIA',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en derecho',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'SOC250',
                'subject' => 'METODOLOGIA DE LA INVESTIGACION CIENTIFICA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en derecho',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'OPT-I3',
                'subject' => 'OPTATIVA IDIOMAS',
                'credits' => '0',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en derecho',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'DER123',
                'subject' => 'LOGICA JURIDICA',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en derecho',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'DER147',
                'subject' => 'DERECHO PENAL GENERAL I',
                'credits' => '4',
                'pre_requirements' => 'DER174'
            ],
            [
                'career' => 'Licenciatura en derecho',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'DER190',
                'subject' => 'DERECHO OBLIGACIONES I',
                'credits' => '4',
                'pre_requirements' => 'DER116'
            ],
            [
                'career' => 'Licenciatura en derecho',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'DER237',
                'subject' => 'DERECHO COMERCIAL I',
                'credits' => '3',
                'pre_requirements' => 'DER104'
            ],
            [
                'career' => 'Licenciatura en derecho',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'ESP301',
                'subject' => 'EXPRESION ORAL',
                'credits' => '3',
                'pre_requirements' => 'ESP103'
            ],
            [
                'career' => 'Licenciatura en derecho',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'SOC101',
                'subject' => 'INTRODUCCION A LA PSICOLOGIA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en derecho',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'SOC260',
                'subject' => 'SOCIOLOGIA JURIDICA',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en derecho',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'SOC270',
                'subject' => 'INTRODUCCION A LAS TECNICAS DE INVESTIGACION SOCIAL',
                'credits' => '3',
                'pre_requirements' => 'SOC250'
            ],
            [
                'career' => 'Licenciatura en derecho',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'OPT-I4',
                'subject' => 'OPTATIVA IDIOMAS',
                'credits' => '0',
                'pre_requirements' => ''
            ],

            [
                'career' => 'Licenciatura en derecho',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'DER148',
                'subject' => 'DERECHO PENAL GENERAL II',
                'credits' => '4',
                'pre_requirements' => 'DER147'
            ],
            [
                'career' => 'Licenciatura en derecho',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'DER168',
                'subject' => 'DERECHO ADMINISTRATIVO I',
                'credits' => '3',
                'pre_requirements' => 'DER174'
            ],
            [
                'career' => 'Licenciatura en derecho',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'DER180',
                'subject' => 'DERECHO INTERNACIONAL PUBLICO',
                'credits' => '4',
                'pre_requirements' => 'DER174'
            ],
            [
                'career' => 'Licenciatura en derecho',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'DER191',
                'subject' => 'DERECHO OBLIGACIONES II',
                'credits' => '4',
                'pre_requirements' => 'DER190'
            ],
            [
                'career' => 'Licenciatura en derecho',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'DER216',
                'subject' => 'HISTOR.DE LAS IDEAS POLITICAS',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en derecho',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'DER227',
                'subject' => 'DERECHO LABORAL I',
                'credits' => '3',
                'pre_requirements' => 'DER190'
            ],
            [
                'career' => 'Licenciatura en derecho',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'DER238',
                'subject' => 'DERECHO COMERCIAL II',
                'credits' => '3',
                'pre_requirements' => 'DER237'
            ],
            [
                'career' => 'Licenciatura en derecho',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'OPT-I5',
                'subject' => 'OPTATIVA IDIOMAS',
                'credits' => '0',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en derecho',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'DER154',
                'subject' => 'DERECHO PROCESAL CIVIL I',
                'credits' => '4',
                'pre_requirements' => 'DER191'
            ],
            [
                'career' => 'Licenciatura en derecho',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'DER169',
                'subject' => 'DERECHO ADMINISTRATIVO II',
                'credits' => '3',
                'pre_requirements' => 'DER168'
            ],
            [
                'career' => 'Licenciatura en derecho',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'DER181',
                'subject' => 'DERECHO INTERNACIONAL PRIVADO',
                'credits' => '4',
                'pre_requirements' => 'DER180'
            ],
            [
                'career' => 'Licenciatura en derecho',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'DER186',
                'subject' => 'DERECHO PENAL ESPECIAL I',
                'credits' => '3',
                'pre_requirements' => 'DER148'
            ],
            [
                'career' => 'Licenciatura en derecho',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'DER192',
                'subject' => 'DERECHO OBLIGACIONES III',
                'credits' => '4',
                'pre_requirements' => 'DER191'
            ],
            [
                'career' => 'Licenciatura en derecho',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'OPT-I6',
                'subject' => 'OPTATIVA IDIOMAS',
                'credits' => '0',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en derecho',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'DER228',
                'subject' => 'DERECHO LABORAL II',
                'credits' => '3',
                'pre_requirements' => 'DER227'
            ],
            [
                'career' => 'Licenciatura en derecho',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'DER149',
                'subject' => 'DERECHO DE LA NIÑEZ Y ADOLESCENCIA',
                'credits' => '3',
                'pre_requirements' => 'DER148'
            ],
            [
                'career' => 'Licenciatura en derecho',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'DER155',
                'subject' => 'DERECHO PROCESAL CIVIL II',
                'credits' => '4',
                'pre_requirements' => 'DER154'
            ],
            [
                'career' => 'Licenciatura en derecho',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'DER178',
                'subject' => 'DERECHOS REALES',
                'credits' => '4',
                'pre_requirements' => 'DER192'
            ],
            [
                'career' => 'Licenciatura en derecho',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'DER187',
                'subject' => 'DERECHO PENAL ESPECIAL II',
                'credits' => '3',
                'pre_requirements' => 'DER186'
            ],
            [
                'career' => 'Licenciatura en derecho',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'DER229',
                'subject' => 'DERECHO PROCESAL LABORAL',
                'credits' => '3',
                'pre_requirements' => 'DER228'
            ],
            [
                'career' => 'Licenciatura en derecho',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'DER252',
                'subject' => 'ORGAN. COMUNIDAD INTERNACIONAL',
                'credits' => '3',
                'pre_requirements' => 'DER181'
            ],
            [
                'career' => 'Licenciatura en derecho',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'DER301',
                'subject' => 'ETICA JURIDICA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en derecho',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'OPT-I7',
                'subject' => 'OPTATIVA IDIOMAS',
                'credits' => '0',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en derecho',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'DER150',
                'subject' => 'DERECHO PROPIEDAD INTELECTUAL',
                'credits' => '4',
                'pre_requirements' => 'DER155'
            ],
            [
                'career' => 'Licenciatura en derecho',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'DER156',
                'subject' => 'DERECHO PROCESAL CIVIL III',
                'credits' => '4',
                'pre_requirements' => 'DER155'
            ],
            [
                'career' => 'Licenciatura en derecho',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'DER196',
                'subject' => 'DERECHO PROCESAL PENAL I',
                'credits' => '3',
                'pre_requirements' => 'DER187'
            ],
            [
                'career' => 'Licenciatura en derecho',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'DER218',
                'subject' => 'CRIMINOLOGIA',
                'credits' => '3',
                'pre_requirements' => 'DER187'
            ],
            [
                'career' => 'Licenciatura en derecho',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'DER259',
                'subject' => 'DERECHO DE LOS PRINCIPALES CONTRATOS',
                'credits' => '4',
                'pre_requirements' => 'DER178'
            ],
            [
                'career' => 'Licenciatura en derecho',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'DER279',
                'subject' => 'DERECHO FISCAL',
                'credits' => '3',
                'pre_requirements' => 'DER169'
            ],
            [
                'career' => 'Licenciatura en derecho',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'OPT-I8',
                'subject' => 'OPTATIVA IDIOMAS',
                'credits' => '0',
                'pre_requirements' => ''
            ],

            [
                'career' => 'Licenciatura en derecho',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'DER151',
                'subject' => 'DER. TELECOMUNIC.Y TECNOLOG. INFORMAC.',
                'credits' => '3',
                'pre_requirements' => 'DER150'
            ],
            [
                'career' => 'Licenciatura en derecho',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'DER157',
                'subject' => 'DERECHO PROCESAL CIVIL IV',
                'credits' => '4',
                'pre_requirements' => 'DER156'
            ],
            [
                'career' => 'Licenciatura en derecho',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'DER170',
                'subject' => 'DERECHO DE LA COMPETENCIA',
                'credits' => '3',
                'pre_requirements' => 'DER238'
            ],
            [
                'career' => 'Licenciatura en derecho',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'DER197',
                'subject' => 'DERECHO PROCESAL PENAL II',
                'credits' => '3',
                'pre_requirements' => 'DER196'
            ],
            [
                'career' => 'Licenciatura en derecho',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'DER210',
                'subject' => 'DERECHO PROCESAL ADM. Y FISCAL',
                'credits' => '3',
                'pre_requirements' => 'DER279'
            ],
            [
                'career' => 'Licenciatura en derecho',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'DER260',
                'subject' => 'DERECHO DE LAS GARANTIAS',
                'credits' => '4',
                'pre_requirements' => 'DER259'
            ],
            [
                'career' => 'Licenciatura en derecho',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'SOC290',
                'subject' => 'ECONOMIA GENERAL',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en derecho',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'OPT-I9',
                'subject' => 'OPTATIVA IDIOMAS',
                'credits' => '0',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en derecho',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'DER152',
                'subject' => 'DERECHO AMBIENTAL',
                'credits' => '3',
                'pre_requirements' => 'SOC041'
            ],
            [
                'career' => 'Licenciatura en derecho',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'DER153',
                'subject' => 'DERECHO REGISTRAL',
                'credits' => '3',
                'pre_requirements' => 'DER178'
            ],
            [
                'career' => 'Licenciatura en derecho',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'DER183',
                'subject' => 'LEGISLACION ECONOMICA Y EMPRESARIAL',
                'credits' => '4',
                'pre_requirements' => 'DER279'
            ],
            [
                'career' => 'Licenciatura en derecho',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'DER201',
                'subject' => 'RESOLUCION ALTERNATIVAS DE DISPUTAS',
                'credits' => '2',
                'pre_requirements' => 'DER197'
            ],
            [
                'career' => 'Licenciatura en derecho',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'DER274',
                'subject' => 'DERECHO DE LOS REGIMENES MATRIMONIALES',
                'credits' => '4',
                'pre_requirements' => 'DER260'
            ],
            [
                'career' => 'Licenciatura en derecho',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'DER281',
                'subject' => 'DERECHO COMPARADO',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en derecho',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'DER292',
                'subject' => 'PRACTICA JURIDICA I',
                'credits' => '3',
                'pre_requirements' => 'DER157, DER197'
            ],
            [
                'career' => 'Licenciatura en derecho',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'OPT-I10',
                'subject' => 'OPTATIVA IDIOMAS',
                'credits' => '0',
                'pre_requirements' => ''
            ],

            [
                'career' => 'Licenciatura en derecho',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'ADM120',
                'subject' => 'LIDERAZGO Y TECNICAS DE SUPERVISION',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en derecho',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'DER203',
                'subject' => 'LEGISLACION BANCARIA Y DE SEGUROS',
                'credits' => '3',
                'pre_requirements' => 'DER174'
            ],
            [
                'career' => 'Licenciatura en derecho',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'DER204',
                'subject' => 'DERECHOS HUMANOS',
                'credits' => '3',
                'pre_requirements' => 'DER252'
            ],
            [
                'career' => 'Licenciatura en derecho',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'DER275',
                'subject' => 'DER. DE SUCESIONES Y LIBERALIDADES',
                'credits' => '4',
                'pre_requirements' => 'DER274'
            ],
            [
                'career' => 'Licenciatura en derecho',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'DER293',
                'subject' => 'PRACTICA JURIDICA II',
                'credits' => '3',
                'pre_requirements' => 'DER292'
            ],
            [
                'career' => 'Licenciatura en derecho',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'SOC281',
                'subject' => 'SEMINARIO DE GRADO',
                'credits' => '3',
                'pre_requirements' => 'SOC270, 80% De los créditos aprobados'
            ],

            [
                'career' => 'Licenciatura en derecho',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'OPTDEP',
                'subject' => 'OPTATIVA DEPORTE',
                'credits' => '0',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en derecho',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'TES-MON',
                'subject' => 'TRABAJO DE GRADO O CURSO MONOGRAFICO',
                'credits' => '6',
                'pre_requirements' => '92% De los créditos aprobados'
            ]
        ];


        $DIG10_pensum = [
            [
                'career' => 'Pensum antiguo: DIG10',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'ART396',
                'subject' => 'DIBUJO ANALITICO I',
                'credits' => '4',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: DIG10',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'ART400',
                'subject' => 'DISEÑO BASICO',
                'credits' => '4',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: DIG10',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'ART401',
                'subject' => 'MEDIOS DE REPRODUCCION GRAFICA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: DIG10',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'ESP101',
                'subject' => 'ANALISIS DE TEXTOS DISCURSIVOS',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: DIG10',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'MAT100',
                'subject' => 'MATEMATICA PRE-UNIVERSITARIA',
                'credits' => '0',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: DIG10',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'SOC030',
                'subject' => 'ORIENTACION UNIVERSITARIA',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: DIG10',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'SOC041',
                'subject' => 'ECOLOGIA',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: DIG10',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'ENG001',
                'subject' => 'INGLES I',
                'credits' => '0',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: DIG10',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'ART148',
                'subject' => 'DISEÑO INFORMATIZADO I',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: DIG10',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'ART397',
                'subject' => 'DIBUJO ANALITICO II',
                'credits' => '4',
                'pre_requirements' => 'ART396'
            ],
            [
                'career' => 'Pensum antiguo: DIG10',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'ART402',
                'subject' => 'DISEÑO TIPOGRAFICO',
                'credits' => '4',
                'pre_requirements' => 'ART400'
            ],
            [
                'career' => 'Pensum antiguo: DIG10',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'ESP102',
                'subject' => 'REDACCION DE TEXTOS DISCURSIVOS I',
                'credits' => '4',
                'pre_requirements' => 'ESP101'
            ],
            [
                'career' => 'Pensum antiguo: DIG10',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'MAT250',
                'subject' => 'ESTADISTICA I',
                'credits' => '4',
                'pre_requirements' => 'MAT100'
            ],
            [
                'career' => 'Pensum antiguo: DIG10',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'ENG002',
                'subject' => 'INGLES II',
                'credits' => '0',
                'pre_requirements' => 'ENG001'
            ],
            [
                'career' => 'Pensum antiguo: DIG10',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'ART149',
                'subject' => 'DISEÑO INFORMATIZADO II',
                'credits' => '3',
                'pre_requirements' => 'ART148'
            ],
            [
                'career' => 'Pensum antiguo: DIG10',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'ART236',
                'subject' => 'ARTE Y COMUNICACION I',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: DIG10',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'ART403',
                'subject' => 'DISEÑO PUBLICITARIO',
                'credits' => '4',
                'pre_requirements' => 'ART402'
            ],
            [
                'career' => 'Pensum antiguo: DIG10',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'ESP103',
                'subject' => 'REDACCION DE TEXTOS DISCURSIVOS II',
                'credits' => '4',
                'pre_requirements' => 'ESP102'
            ],
            [
                'career' => 'Pensum antiguo: DIG10',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'SOC011',
                'subject' => 'HISTORIA SOCIAL DOMINICANA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: DIG10',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'SOC101',
                'subject' => 'INTRODUCCION A LA PSICOLOGIA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: DIG10',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'ENG003',
                'subject' => 'INGLES III',
                'credits' => '0',
                'pre_requirements' => 'ENG002'
            ],
            [
                'career' => 'Pensum antiguo: DIG10',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'ART141',
                'subject' => 'FOTOGRAFIA I',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: DIG10',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'ART150',
                'subject' => 'DISEÑO INFORMATIZADO III',
                'credits' => '3',
                'pre_requirements' => 'ART149'
            ],
            [
                'career' => 'Pensum antiguo: DIG10',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'ART237',
                'subject' => 'ARTE Y COMUNICACION II',
                'credits' => '3',
                'pre_requirements' => 'ART236'
            ],
            [
                'career' => 'Pensum antiguo: DIG10',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'ART398',
                'subject' => 'DISEÑO Y GESTION DE MARCAS',
                'credits' => '4',
                'pre_requirements' => 'ART403'
            ],
            [
                'career' => 'Pensum antiguo: DIG10',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'ART405',
                'subject' => 'ANIMACION PUBLICITARIA',
                'credits' => '4',
                'pre_requirements' => 'ART397'
            ],
            [
                'career' => 'Pensum antiguo: DIG10',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'SOC200',
                'subject' => 'INTRODUCCION A LA SOCIOLOGIA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: DIG10',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'ENG004',
                'subject' => 'INGLES IV',
                'credits' => '0',
                'pre_requirements' => 'ENG003'
            ],
            [
                'career' => 'Pensum antiguo: DIG10',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'ART142',
                'subject' => 'FOTOGRAFIA II',
                'credits' => '3',
                'pre_requirements' => 'ART141'
            ],
            [
                'career' => 'Pensum antiguo: DIG10',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'ART151',
                'subject' => 'DISEÑO INFORMATIZADO IV',
                'credits' => '3',
                'pre_requirements' => 'ART150'
            ],
            [
                'career' => 'Pensum antiguo: DIG10',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'ART238',
                'subject' => 'ARTE Y COMUNICACION III',
                'credits' => '3',
                'pre_requirements' => 'ART237'
            ],
            [
                'career' => 'Pensum antiguo: DIG10',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'ART404',
                'subject' => 'DISEÑO DE ENVASES Y PRODUCTOS',
                'credits' => '4',
                'pre_requirements' => 'ART398'
            ],
            [
                'career' => 'Pensum antiguo: DIG10',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'SOC290',
                'subject' => 'ECONOMIA GENERAL',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: DIG10',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'ENG005',
                'subject' => 'INGLES V',
                'credits' => '0',
                'pre_requirements' => 'ENG004'
            ],
            [
                'career' => 'Pensum antiguo: DIG10',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'ART214',
                'subject' => 'TEORIA DE LA COMUNICACION',
                'credits' => '3',
                'pre_requirements' => 'ART238'
            ],
            [
                'career' => 'Pensum antiguo: DIG10',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'ART231',
                'subject' => 'FOTOGRAFIA PUBLICITARIA',
                'credits' => '4',
                'pre_requirements' => 'ART142'
            ],
            [
                'career' => 'Pensum antiguo: DIG10',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'ART407',
                'subject' => 'COMUNICACION ORGANIZACIONAL',
                'credits' => '3',
                'pre_requirements' => 'ART398'
            ],
            [
                'career' => 'Pensum antiguo: DIG10',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'ART413',
                'subject' => 'DISEÑO Y COMUNICACION GRAFICA I',
                'credits' => '4',
                'pre_requirements' => 'ART150, ART404'
            ],
            [
                'career' => 'Pensum antiguo: DIG10',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'ESP420',
                'subject' => 'REDACCION PUBLICITARIA',
                'credits' => '3',
                'pre_requirements' => 'ESP103'
            ],
            [
                'career' => 'Pensum antiguo: DIG10',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'ENG006',
                'subject' => 'INGLES VI',
                'credits' => '0',
                'pre_requirements' => 'ENG005'
            ],

            [
                'career' => 'Pensum antiguo: DIG10',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'ART205',
                'subject' => 'PRE-PRENSA DIGITAL',
                'credits' => '3',
                'pre_requirements' => 'ART150, ART401'
            ],
            [
                'career' => 'Pensum antiguo: DIG10',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'ART225',
                'subject' => 'MEDIOS DE COMUNICACION',
                'credits' => '3',
                'pre_requirements' => 'ART214'
            ],
            [
                'career' => 'Pensum antiguo: DIG10',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'ART414',
                'subject' => 'DISEÑO Y COMUNICACION GRAFICA II',
                'credits' => '4',
                'pre_requirements' => 'ART413'
            ],
            [
                'career' => 'Pensum antiguo: DIG10',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'ESP421',
                'subject' => 'ANALISIS SEMIOTICO DE LA PUBLICIDAD',
                'credits' => '3',
                'pre_requirements' => 'ART214, ESP420'
            ],
            [
                'career' => 'Pensum antiguo: DIG10',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'SOC031',
                'subject' => 'ETICA PROFESIONAL',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: DIG10',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'ENG007',
                'subject' => 'INGLES VII',
                'credits' => '0',
                'pre_requirements' => 'ENG006'
            ],
            [
                'career' => 'Pensum antiguo: DIG10',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'ART399',
                'subject' => 'ILUSTRACION DIGITAL',
                'credits' => '3',
                'pre_requirements' => 'ART397'
            ],
            [
                'career' => 'Pensum antiguo: DIG10',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'ART415',
                'subject' => 'DISEÑO Y COMUNICACION GRAFICA III',
                'credits' => '4',
                'pre_requirements' => 'ART414'
            ],
            [
                'career' => 'Pensum antiguo: DIG10',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'SOC115',
                'subject' => 'PSICOLOGIA DEL CONSUMIDOR',
                'credits' => '3',
                'pre_requirements' => 'SOC101'
            ],
            [
                'career' => 'Pensum antiguo: DIG10',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'SOC250',
                'subject' => 'METODOLOGIA DE LA INVESTIGACION CIENTIFICA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: DIG10',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'ENG008',
                'subject' => 'INGLES VIII',
                'credits' => '0',
                'pre_requirements' => 'ENG007'
            ],
            [
                'career' => 'Pensum antiguo: DIG10',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'ADM119',
                'subject' => 'CREACION Y GESTION DE EMPRESAS PUBLICITARIAS',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: DIG10',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'ART163',
                'subject' => 'DISEÑO PUBLICITARIO MULTIMEDIA',
                'credits' => '4',
                'pre_requirements' => 'ART151'
            ],
            [
                'career' => 'Pensum antiguo: DIG10',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'ART416',
                'subject' => 'DISEÑO Y COMUNICACION GRAFICA IV',
                'credits' => '4',
                'pre_requirements' => 'ART415'
            ],
            [
                'career' => 'Pensum antiguo: DIG10',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'MER101',
                'subject' => 'MERCADOTECNIA I',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: DIG10',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'SOC125',
                'subject' => 'PSICOLOGIA DE LA PERCEPCION',
                'credits' => '3',
                'pre_requirements' => 'SOC101'
            ],

            [
                'career' => 'Pensum antiguo: DIG10',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'ADM120',
                'subject' => 'LIDERAZGO Y TECNICAS DE SUPERVISION',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: DIG10',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'ADM135',
                'subject' => 'PRESUPUESTO PUBLICITARIO',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: DIG10',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'ART417',
                'subject' => 'DISEÑO Y COMUNICACION GRAFICA V',
                'credits' => '4',
                'pre_requirements' => 'ART416'
            ],
            [
                'career' => 'Pensum antiguo: DIG10',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'ART420',
                'subject' => 'TECNICAS DE PRODUCCION DE AUDIOVISUALES',
                'credits' => '3',
                'pre_requirements' => 'ART151, ART416'
            ],
            [
                'career' => 'Pensum antiguo: DIG10',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'MER102',
                'subject' => 'MERCADOTECNIA II',
                'credits' => '3',
                'pre_requirements' => 'MER101'
            ],

            [
                'career' => 'Pensum antiguo: DIG10',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'ART418',
                'subject' => 'DISEÑO Y COMUNICACION VI',
                'credits' => '4',
                'pre_requirements' => 'ART417'
            ],
            [
                'career' => 'Pensum antiguo: DIG10',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'DER520',
                'subject' => 'PROPIEDAD INTELECTUAL Y LEGISLACION DE LA COMUNICACION',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: DIG10',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'MER120',
                'subject' => 'MERCADOTECNIA INTERNACIONAL',
                'credits' => '4',
                'pre_requirements' => 'MER102'
            ],
            [
                'career' => 'Pensum antiguo: DIG10',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'SOC281',
                'subject' => 'SEMINARIO DE GRADO',
                'credits' => '3',
                'pre_requirements' => '80% De los créditos aprobados'
            ],

            [
                'career' => 'Pensum antiguo: DIG10',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'OPTDEP',
                'subject' => 'OPTATIVA DEPORTE',
                'credits' => '0',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: DIG10',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'PAS600',
                'subject' => 'PASANTIA EMPRESARIAL DE DISEÑO GRAFICO',
                'credits' => '0',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: DIG10',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'TES-MON',
                'subject' => 'TRABAJO DE GRADO O CURSO MONOGRAFICO',
                'credits' => '6',
                'pre_requirements' => '90% De los créditos aprobados'
            ]
        ];

        $DIG11_pensum = [
            [
                'career' => 'Pensum actual: DIG11',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'SOC011',
                'subject' => 'HISTORIA SOCIAL DOMINICANA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: DIG11',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'ESP101',
                'subject' => 'ANALISIS DE TEXTOS DISCURSIVOS',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: DIG11',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'SOC030',
                'subject' => 'ORIENTACION UNIVERSITARIA',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: DIG11',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'MAT010',
                'subject' => 'MATEMATICA BASICA UNIVERSITARIA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: DIG11',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'SOC043',
                'subject' => 'GESTION AMBIENTAL',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: DIG11',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'ART465',
                'subject' => 'FUNDAMENTOS DEL DISEÑO',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: DIG11',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'ART467',
                'subject' => 'DIBUJO I',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: DIG11',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'SOC013',
                'subject' => 'FILOSOFIA',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: DIG11',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'SOC101',
                'subject' => 'INTRODUCCION A LA PSICOLOGIA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: DIG11',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'ESP106',
                'subject' => 'REDACCION DE TEXTOS DISCURSIVOS I',
                'credits' => '3',
                'pre_requirements' => 'ESP101'
            ],
            [
                'career' => 'Pensum actual: DIG11',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'ART500',
                'subject' => 'TECNICAS DEL BOCETO',
                'credits' => '3',
                'pre_requirements' => 'ART467'
            ],
            [
                'career' => 'Pensum actual: DIG11',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'ART460',
                'subject' => 'DISEÑO GRAFICO DIGITAL I',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: DIG11',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'ART458',
                'subject' => 'INTRODUCCION AL DISEÑO GRAFICO',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: DIG11',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'SOC200',
                'subject' => 'INTRODUCCION A LA SOCIOLOGIA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: DIG11',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'ESP107',
                'subject' => 'REDACCION DE TEXTOS DISCURSIVOS II',
                'credits' => '3',
                'pre_requirements' => 'ESP106'
            ],
            [
                'career' => 'Pensum actual: DIG11',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'ART214',
                'subject' => 'TEORIA DE LA COMUNICACION',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: DIG11',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'ART462',
                'subject' => 'DISEÑO GRAFICO DIGITAL II',
                'credits' => '3',
                'pre_requirements' => 'ART460'
            ],
            [
                'career' => 'Pensum actual: DIG11',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'ART012',
                'subject' => 'HISTORIA DE LA COMUNICACION I',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: DIG11',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'ART141',
                'subject' => 'FOTOGRAFIA I',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: DIG11',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'SOC253',
                'subject' => 'METODOLOGIA Y TECNICAS DE INVESTIGACION',
                'credits' => '4',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: DIG11',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'SOC031',
                'subject' => 'ETICA PROFESIONAL',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: DIG11',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'ART142',
                'subject' => 'FOTOGRAFIA II',
                'credits' => '3',
                'pre_requirements' => 'ART141'
            ],
            [
                'career' => 'Pensum actual: DIG11',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'ART464',
                'subject' => 'DISEÑO GRAFICO DIGITAL III',
                'credits' => '3',
                'pre_requirements' => 'ART462'
            ],
            [
                'career' => 'Pensum actual: DIG11',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'ART014',
                'subject' => 'HISTORIA DE LA COMUNICACION II',
                'credits' => '3',
                'pre_requirements' => 'ART012'
            ],
            [
                'career' => 'Pensum actual: DIG11',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'ART515',
                'subject' => 'DISEÑO TIPOGRAFICO',
                'credits' => '3',
                'pre_requirements' => ''
            ],

            [
                'career' => 'Pensum actual: DIG11',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'ART401',
                'subject' => 'MEDIOS DE REPRODUCCION GRAFICA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: DIG11',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'ART510',
                'subject' => 'MAQUETACION WEB',
                'credits' => '3',
                'pre_requirements' => 'ART464'
            ],
            [
                'career' => 'Pensum actual: DIG11',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'ART505',
                'subject' => 'DISEÑO GRAFICO PUBLICITARIO',
                'credits' => '3',
                'pre_requirements' => 'ART515'
            ],
            [
                'career' => 'Pensum actual: DIG11',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'ART520',
                'subject' => 'ANALISIS SEMIOTICO DE LA COMUNICACION',
                'credits' => '3',
                'pre_requirements' => 'ART014'
            ],
            [
                'career' => 'Pensum actual: DIG11',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'ART525',
                'subject' => 'TECNICAS DE DOCUMENTACION EN LA COMUNICACION',
                'credits' => '3',
                'pre_requirements' => 'SOC253'
            ],
            [
                'career' => 'Pensum actual: DIG11',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'ADM535',
                'subject' => 'ACTITUD EMPRENDEDORA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: DIG11',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'ART205',
                'subject' => 'PREPRENSA DIGITAL',
                'credits' => '3',
                'pre_requirements' => 'ART401'
            ],
            [
                'career' => 'Pensum actual: DIG11',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'ART530',
                'subject' => 'DISEÑO GRAFICO CORPORATIVO',
                'credits' => '3',
                'pre_requirements' => 'ART505'
            ],
            [
                'career' => 'Pensum actual: DIG11',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'ART399',
                'subject' => 'ILUSTRACION DIGITAL',
                'credits' => '3',
                'pre_requirements' => 'ART510'
            ],
            [
                'career' => 'Pensum actual: DIG11',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'ART535',
                'subject' => 'DISEÑO GRAFICO Y SISTEMAS SEÑALETICO',
                'credits' => '3',
                'pre_requirements' => 'ART520'
            ],
            [
                'career' => 'Pensum actual: DIG11',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'SOC115',
                'subject' => 'PSICOLOGIA DEL CONSUMIDOR',
                'credits' => '3',
                'pre_requirements' => 'SOC101'
            ],
            [
                'career' => 'Pensum actual: DIG11',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'ART540',
                'subject' => 'DISEÑO GRAFICO EDITORIAL I',
                'credits' => '3',
                'pre_requirements' => 'ART399'
            ],
            [
                'career' => 'Pensum actual: DIG11',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'ART545',
                'subject' => 'PENSAMIENTO ESTRATEGICO DEL DIRCOM',
                'credits' => '3',
                'pre_requirements' => 'ART530'
            ],
            [
                'career' => 'Pensum actual: DIG11',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'ART405',
                'subject' => 'ANIMACION PUBLICITARIA',
                'credits' => '4',
                'pre_requirements' => 'ART399'
            ],
            [
                'career' => 'Pensum actual: DIG11',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'ART550',
                'subject' => 'DISEÑO DE ENVASES Y PRODUCTOS',
                'credits' => '3',
                'pre_requirements' => 'ART530'
            ],
            [
                'career' => 'Pensum actual: DIG11',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'EDIG 1',
                'subject' => 'ELECTIVA I',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: DIG11',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'ART555',
                'subject' => 'MODELADO E IMPRESION DIGITAL 3D',
                'credits' => '4',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: DIG11',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'ART541',
                'subject' => 'DISEÑO GRAFICO EDITORIAL II',
                'credits' => '3',
                'pre_requirements' => 'ART540'
            ],
            [
                'career' => 'Pensum actual: DIG11',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'ART560',
                'subject' => 'DISEÑO GRAFICO MULTIMEDIA',
                'credits' => '4',
                'pre_requirements' => 'ART550'
            ],
            [
                'career' => 'Pensum actual: DIG11',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'EDIG 2',
                'subject' => 'ELECTIVA II',
                'credits' => '3',
                'pre_requirements' => 'EDIG 1'
            ],
            [
                'career' => 'Pensum actual: DIG11',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'DER520',
                'subject' => 'PROPIEDAD INTELECTUAL Y LEGISLACION DE LA COMUNICACION',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: DIG11',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'ART565',
                'subject' => 'DISEÑO Y GESTION DE REDES SOCIALES',
                'credits' => '3',
                'pre_requirements' => 'ART560'
            ],
            [
                'career' => 'Pensum actual: DIG11',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'ART570',
                'subject' => 'DISEÑO GRAFICO Y ESTRATEGIAS DE COMUNICACION',
                'credits' => '4',
                'pre_requirements' => 'ART560'
            ],
            [
                'career' => 'Pensum actual: DIG11',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'EDIG 3',
                'subject' => 'ELECTIVA III',
                'credits' => '3',
                'pre_requirements' => 'EDIG 2'
            ],
            [
                'career' => 'Pensum actual: DIG11',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'SOC281',
                'subject' => 'SEMINARIO DE GRADO',
                'credits' => '3',
                'pre_requirements' => 'SOC253 80% De los créditos aprobados'
            ],
            [
                'career' => 'Pensum actual: DIG11',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'IDI530',
                'subject' => 'INGLES PARA COMUNICADORES I',
                'credits' => '3',
                'pre_requirements' => 'ENG010'
            ],
            [
                'career' => 'Pensum actual: DIG11',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'ART485',
                'subject' => 'GESTION DE CONTENIDO WEB',
                'credits' => '3',
                'pre_requirements' => 'ART565'
            ],
            [
                'career' => 'Pensum actual: DIG11',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'ART491',
                'subject' => 'DISEÑO GRAFICO Y COMUNICACION INTEGRAL',
                'credits' => '4',
                'pre_requirements' => 'ART570'
            ],
            [
                'career' => 'Pensum actual: DIG11',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'ART495',
                'subject' => 'NARRACION TRANSMEDIA',
                'credits' => '3',
                'pre_requirements' => 'ART485'
            ],
            [
                'career' => 'Pensum actual: DIG11',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'IDI531',
                'subject' => 'INGLES PARA COMUNICADORES II',
                'credits' => '3',
                'pre_requirements' => 'IDI530'
            ],
            [
                'career' => 'Pensum actual: DIG11',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'ART496',
                'subject' => 'PORTAFOLIO PROFESIONAL',
                'credits' => '2',
                'pre_requirements' => '90% De los créditos aprobados'
            ],
            [
                'career' => 'Pensum actual: DIG11',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'TFG100',
                'subject' => 'TRABAJO FINAL DE GRADO',
                'credits' => '6',
                'pre_requirements' => 'SOC281 95% De los créditos aprobados'
            ],
            [
                'career' => 'Pensum actual: DIG11',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'OPTDEP',
                'subject' => 'OPTATIVA DEPORTE',
                'credits' => '0',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: DIG11',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'PAS600',
                'subject' => 'PASANTIA EMPRESARIAL DE DISEÑO GRAFICO',
                'credits' => '0',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: DIG11',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'ENG000',
                'subject' => 'FUNDAMENTOS DE INGLES (I Y II)',
                'credits' => '0',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: DIG11',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'ENG003',
                'subject' => 'INGLES III',
                'credits' => '0',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: DIG11',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'ENG004',
                'subject' => 'INGLES IV',
                'credits' => '0',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: DIG11',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'ENG005',
                'subject' => 'INGLES V',
                'credits' => '0',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: DIG11',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'ENG006',
                'subject' => 'INGLES VI',
                'credits' => '0',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: DIG11',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'ENG007',
                'subject' => 'INGLES VII',
                'credits' => '0',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: DIG11',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'ENG008',
                'subject' => 'INGLES VIII',
                'credits' => '0',
                'pre_requirements' => ''
            ]
        ];


        $DIN10_pensum = [
            [
                'career' => 'Pensum antiguo: DIN10 ',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'ART203',
                'subject' => 'DIBUJO TECNICO I',
                'credits' => '4',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: DIN10 ',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'ART396',
                'subject' => 'DIBUJO ANALITICO I',
                'credits' => '4',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: DIN10 ',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'ESP101',
                'subject' => 'ANALISIS DE TEXTOS DISCURSIVOS',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: DIN10 ',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'MAT100',
                'subject' => 'MATEMATICA PRE-UNIVERSITARIA',
                'credits' => '0',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: DIN10 ',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'SOC030',
                'subject' => 'ORIENTACION UNIVERSITARIA',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: DIN10 ',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'SOC041',
                'subject' => 'ECOLOGIA',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: DIN10 ',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'ENG001',
                'subject' => 'INGLES I',
                'credits' => '0',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: DIN10 ',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'ART397',
                'subject' => 'DIBUJO ANALITICO II',
                'credits' => '4',
                'pre_requirements' => 'ART396'
            ],
            [
                'career' => 'Pensum antiguo: DIN10 ',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'ESP102',
                'subject' => 'REDACCION DE TEXTOS DISCURSIVOS I',
                'credits' => '4',
                'pre_requirements' => 'ESP101'
            ],
            [
                'career' => 'Pensum antiguo: DIN10 ',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'MAT110',
                'subject' => 'MATEMATICA BASICA GENERAL',
                'credits' => '4',
                'pre_requirements' => 'MAT100'
            ],
            [
                'career' => 'Pensum antiguo: DIN10 ',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'SOC011',
                'subject' => 'HISTORIA SOCIAL DOMINICANA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: DIN10 ',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'ENG002',
                'subject' => 'INGLES II',
                'credits' => '0',
                'pre_requirements' => 'ENG001'
            ],
            [
                'career' => 'Pensum antiguo: DIN10 ',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'ART120',
                'subject' => 'GEOMETRIA DESCRIPTIVA',
                'credits' => '4',
                'pre_requirements' => 'MAT110',

            ],
            [
                'career' => 'Pensum antiguo: DIN10 ',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'ART130',
                'subject' => 'FUNDAMENTOS DEL DISEÑO',
                'credits' => '4',
                'pre_requirements' => 'ART397'
            ],
            [
                'career' => 'Pensum antiguo: DIN10 ',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'ART138',
                'subject' => 'ERGONOMIA',
                'credits' => '2',
                'pre_requirements' => 'ART203'
            ],
            [
                'career' => 'Pensum antiguo: DIN10 ',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'ESP103',
                'subject' => 'REDACCION DE TEXTOS DISCURSIVOS II',
                'credits' => '4',
                'pre_requirements' => 'ESP102'
            ],
            [
                'career' => 'Pensum antiguo: DIN10 ',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'SOC101',
                'subject' => 'INTRODUCCION A LA PSICOLOGIA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: DIN10 ',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'ENG003',
                'subject' => 'INGLES III',
                'credits' => '0',
                'pre_requirements' => 'ENG002'
            ],
            [
                'career' => 'Pensum antiguo: DIN10 ',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'ART164',
                'subject' => 'HISTORIA DEL MUEBLE',
                'credits' => '3',
                'pre_requirements' => 'ART130, ART138'
            ],
            [
                'career' => 'Pensum antiguo: DIN10 ',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'ART167',
                'subject' => 'ARTES APLICADAS I',
                'credits' => '3',
                'pre_requirements' => 'ART130'
            ],
            [
                'career' => 'Pensum antiguo: DIN10 ',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'ART421',
                'subject' => 'HISTORIA DEL DISEÑO I',
                'credits' => '3',
                'pre_requirements' => 'ART130'
            ],
            [
                'career' => 'Pensum antiguo: DIN10 ',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'ART440',
                'subject' => 'DISEÑO VECTORIAL',
                'credits' => '3',
                'pre_requirements' => 'ART397'
            ],
            [
                'career' => 'Pensum antiguo: DIN10 ',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'SOC200',
                'subject' => 'INTRODUCCION A LA SOCIOLOGIA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: DIN10 ',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'SOC250',
                'subject' => 'METODOLOGIA DE LA INVESTIGACION CIENTIFICA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: DIN10 ',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'ENG004',
                'subject' => 'INGLES IV',
                'credits' => '0',
                'pre_requirements' => 'ENG003'
            ],

            [
                'career' => 'Pensum antiguo: DIN10 ',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'ART168',
                'subject' => 'ARTES APLICADAS II',
                'credits' => '3',
                'pre_requirements' => 'ART167'
            ],
            [
                'career' => 'Pensum antiguo: DIN10 ',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'ART260',
                'subject' => 'DIBUJO ARQUITECTONICO I',
                'credits' => '4',
                'pre_requirements' => 'ART120, ART138'
            ],
            [
                'career' => 'Pensum antiguo: DIN10 ',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'ART422',
                'subject' => 'HISTORIA DEL DISEÑO II',
                'credits' => '3',
                'pre_requirements' => 'ART421'
            ],
            [
                'career' => 'Pensum antiguo: DIN10 ',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'ART432',
                'subject' => 'PERSPECTIVA DE INTERIORES',
                'credits' => '4',
                'pre_requirements' => 'ART120'
            ],
            [
                'career' => 'Pensum antiguo: DIN10 ',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'ART441',
                'subject' => 'EDICION Y MANIPULACION IMAGENES',
                'credits' => '3',
                'pre_requirements' => 'ART440'
            ],
            [
                'career' => 'Pensum antiguo: DIN10 ',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'ENG005',
                'subject' => 'INGLES V',
                'credits' => '0',
                'pre_requirements' => 'ENG004'
            ],

            [
                'career' => 'Pensum antiguo: DIN10 ',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'ART261',
                'subject' => 'DIBUJO ARQUITECTONICO II',
                'credits' => '4',
                'pre_requirements' => 'ART260'
            ],
            [
                'career' => 'Pensum antiguo: DIN10 ',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'ART423',
                'subject' => 'FOTOGRAFIA ANALITICA',
                'credits' => '3',
                'pre_requirements' => 'ART441'
            ],
            [
                'career' => 'Pensum antiguo: DIN10 ',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'ART425',
                'subject' => 'DISEÑO DE INTERIORES I -VIVIENDA-',
                'credits' => '4',
                'pre_requirements' => 'ART260'
            ],
            [
                'career' => 'Pensum antiguo: DIN10 ',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'ART431',
                'subject' => 'TECNICAS DE REPRESENTACION',
                'credits' => '4',
                'pre_requirements' => 'ART432'
            ],
            [
                'career' => 'Pensum antiguo: DIN10 ',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'ART433',
                'subject' => 'DIBUJO INFORMATIZADO I',
                'credits' => '4',
                'pre_requirements' => 'ART203, ART440'
            ],
            [
                'career' => 'Pensum antiguo: DIN10 ',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'ENG006',
                'subject' => 'INGLES VI',
                'credits' => '0',
                'pre_requirements' => 'ENG005'
            ],
            [
                'career' => 'Pensum antiguo: DIN10 ',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'ART170',
                'subject' => 'DISEÑO DE MUEBLES',
                'credits' => '4',
                'pre_requirements' => 'ART164'
            ],
            [
                'career' => 'Pensum antiguo: DIN10 ',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'ART426',
                'subject' => 'DISEÑO DE INTERIORES II -OFICINA-',
                'credits' => '4',
                'pre_requirements' => 'ART261, ART425'
            ],
            [
                'career' => 'Pensum antiguo: DIN10 ',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'ART434',
                'subject' => 'DIBUJO INFORMATIZADO II',
                'credits' => '4',
                'pre_requirements' => 'ART433'
            ],
            [
                'career' => 'Pensum antiguo: DIN10 ',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'ART436',
                'subject' => 'MODELADO',
                'credits' => '4',
                'pre_requirements' => 'ART138, ART261'
            ],
            [   
                'career' => 'Pensum antiguo: DIN10 ',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'ENG007',
                'subject' => 'INGLES VII',
                'credits' => '0',
                'pre_requirements' => 'ENG006'
            ],
            [
                'career' => 'Pensum antiguo: DIN10 ',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'ADM535',
                'subject' => 'ACTITUD EMPRENDEDORA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: DIN10 ',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'ART156',
                'subject' => 'MATERIALES Y METODOS I',
                'credits' => '3',
                'pre_requirements' => 'ART261'
            ],
            [
                'career' => 'Pensum antiguo: DIN10 ',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'ART171',
                'subject' => 'DISEÑO DE MUEBLES II',
                'credits' => '4',
                'pre_requirements' => 'ART170'
            ],
            [
                'career' => 'Pensum antiguo: DIN10 ',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'ART427',
                'subject' => 'DISEÑO DE INTERIORES III -INSTITUCIONAL-',
                'credits' => '4',
                'pre_requirements' => 'ART426'
            ],
            [
                'career' => 'Pensum antiguo: DIN10 ',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'ART435',
                'subject' => 'DIBUJO INFORMATIZADO III',
                'credits' => '4',
                'pre_requirements' => 'ART434'
            ],
            [
                'career' => 'Pensum antiguo: DIN10 ',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'ENG008',
                'subject' => 'INGLES VIII',
                'credits' => '0',
                'pre_requirements' => 'ENG007'
            ],
            [   'career' => 'Pensum antiguo: DIN10 ',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'ART157',
                'subject' => 'MATERIALES Y METODOS II',
                'credits' => '3',
                'pre_requirements' => 'ART156'
            ],
            [   'career' => 'Pensum antiguo: DIN10 ',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'ART165',
                'subject' => 'PAISAJISMO',
                'credits' => '4',
                'pre_requirements' => 'ART431'
            ],
            [   'career' => 'Pensum antiguo: DIN10 ',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'ART428',
                'subject' => 'DISEÑO DE INTERIORES IV',
                'credits' => '4',
                'pre_requirements' => 'ART427'
            ],
            [   'career' => 'Pensum antiguo: DIN10 ',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'ART439',
                'subject' => 'AMBIENTES TEMPORALES',
                'credits' => '2',
                'pre_requirements' => 'ART427'
            ],
            [   'career' => 'Pensum antiguo: DIN10 ',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'SOC290',
                'subject' => 'ECONOMIA GENERAL',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [   'career' => 'Pensum antiguo: DIN10 ',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'ART189',
                'subject' => 'ESTUDIO DE ILUMINACION Y CLIMATIZACION',
                'credits' => '3',
                'pre_requirements' => 'ART425'
            ],
            [   'career' => 'Pensum antiguo: DIN10 ',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'ART200',
                'subject' => 'RESTAURACION Y CONSERVACION',
                'credits' => '3',
                'pre_requirements' => 'ART427'
            ],
            [   'career' => 'Pensum antiguo: DIN10 ',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'ART289',
                'subject' => 'DISEÑO DE JARDINES',
                'credits' => '4',
                'pre_requirements' => 'ART165'
            ],
            [   'career' => 'Pensum antiguo: DIN10 ',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'ART429',
                'subject' => 'DISEÑO DE INTERIORES V',
                'credits' => '4',
                'pre_requirements' => 'ART428'
            ],
            [   'career' => 'Pensum antiguo: DIN10 ',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'ART438',
                'subject' => 'ANALISIS DE COSTOS',
                'credits' => '3',
                'pre_requirements' => 'ART157'
            ],
            [   'career' => 'Pensum antiguo: DIN10 ',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'ADM120',
                'subject' => 'LIDERAZGO Y TECNICAS DE SUPERVISION',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [   'career' => 'Pensum antiguo: DIN10 ',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'ART430',
                'subject' => 'DISEÑO DE INTERIORES VI',
                'credits' => '4',
                'pre_requirements' => 'ART429'
            ],
            [   'career' => 'Pensum antiguo: DIN10 ',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'DER521',
                'subject' => 'PROPIEDAD INTELECTUAL Y PATENTES',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [   'career' => 'Pensum antiguo: DIN10 ',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'SOC031',
                'subject' => 'ETICA PROFESIONAL',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [   'career' => 'Pensum antiguo: DIN10 ',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'SOC281',
                'subject' => 'SEMINARIO DE GRADO',
                'credits' => '3',
                'pre_requirements' => '80% De los credits aprobados'
            ],
            [   'career' => 'Pensum antiguo: DIN10 ',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'OPTDEP',
                'subject' => 'OPTATIVA DEPORTE',
                'credits' => '0',
                'pre_requirements' => ''
            ],
            [   'career' => 'Pensum antiguo: DIN10 ',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'PAS620',
                'subject' => 'PASANTIA EMPRESARIAL DE DISEÑO DE INTERIORES',
                'credits' => '0',
                'pre_requirements' => ''
            ],
            [   'career' => 'Pensum antiguo: DIN10 ',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'TES-MON',
                'subject' => 'TRABAJO DE GRADO O CURSO MONOGRAFICO',
                'credits' => '6',
                'pre_requirements' => '92% De los Créditos aprobados'
            ]


        ];

        $DIN11_pensum = [
            [
                'career' => 'Pensum actual: DIN11',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'SOC030',
                'subject' => 'ORIENTACION UNIVERSITARIA',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: DIN11',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'SOC011',
                'subject' => 'HISTORIA SOCIAL DOMINICANA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: DIN11',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'SOC043',
                'subject' => 'GESTION AMBIENTAL',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: DIN11',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'MAT010',
                'subject' => 'MATEMATICA BASICA UNIVERSITARIA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: DIN11',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'ESP101',
                'subject' => 'ANALISIS DE TEXTOS DISCURSIVOS',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: DIN11',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'ART465',
                'subject' => 'FUNDAMENTOS DEL DISEÑO',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: DIN11',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'ART467',
                'subject' => 'DIBUJO I',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: DIN11',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'SOC013',
                'subject' => 'FILOSOFIA',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: DIN11',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'ESP106',
                'subject' => 'REDACCION DE TEXTOS DISCURSIVOS I',
                'credits' => '3',
                'pre_requirements' => 'ESP101'
            ],
            [
                'career' => 'Pensum actual: DIN11',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'SOC101',
                'subject' => 'INTRODUCCION A LA PSICOLOGIA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: DIN11',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'ART468',
                'subject' => 'DIBUJO II',
                'credits' => '3',
                'pre_requirements' => 'ART467'
            ],
            [
                'career' => 'Pensum actual: DIN11',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'ART120',
                'subject' => 'GEOMETRIA DESCRIPTIVA',
                'credits' => '4',
                'pre_requirements' => ''
            ],

            [
                'career' => 'Pensum actual: DIN11',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'SOC200',
                'subject' => 'INTRODUCCION A LA SOCIOLOGIA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: DIN11',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'ESP107',
                'subject' => 'REDACCION DE TEXTOS DISCURSIVOS II',
                'credits' => '3',
                'pre_requirements' => 'ESP106'
            ],
            [
                'career' => 'Pensum actual: DIN11',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'ART466',
                'subject' => 'DIBUJO ARQUITECTONICO',
                'credits' => '4',
                'pre_requirements' => 'ART120'
            ],
            [
                'career' => 'Pensum actual: DIN11',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'ART432',
                'subject' => 'PERSPECTIVA DE INTERIORES',
                'credits' => '4',
                'pre_requirements' => 'ART120'
            ],
            [
                'career' => 'Pensum actual: DIN11',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'ART470',
                'subject' => 'ESTILOS Y TENDENCIAS EN INTERIORISMO',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: DIN11',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'ART138',
                'subject' => 'ERGONOMIA',
                'credits' => '2',
                'pre_requirements' => 'ART466'
            ],
            [
                'career' => 'Pensum actual: DIN11',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'ART472',
                'subject' => 'DISEÑO Y CONTEMPORANEIDAD',
                'credits' => '3',
                'pre_requirements' => 'ART470'
            ],
            [
                'career' => 'Pensum actual: DIN11',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'ART474',
                'subject' => 'DIBUJO DIGITAL I',
                'credits' => '4',
                'pre_requirements' => 'ART466'
            ],
            [
                'career' => 'Pensum actual: DIN11',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'SOC253',
                'subject' => 'METODOLOGIA Y TECNICAS DE INVESTIGACION',
                'credits' => '4',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: DIN11',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'SOC031',
                'subject' => 'ETICA PROFESIONAL',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: DIN11',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'ART218',
                'subject' => 'DISEÑO DE INTERIORES I',
                'credits' => '4',
                'pre_requirements' => 'ART465, ART466'
            ],
            [
                'career' => 'Pensum actual: DIN11',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'ART475',
                'subject' => 'DIBUJO DIGITAL II',
                'credits' => '4',
                'pre_requirements' => 'ART474'
            ],
            [
                'career' => 'Pensum actual: DIN11',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'ADM535',
                'subject' => 'ACTITUD EMPRENDEDORA',
                'credits' => '3',
                'pre_requirements' => 'SOC101'
            ],
            [
                'career' => 'Pensum actual: DIN11',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'ART478',
                'subject' => 'MAQUETISMO',
                'credits' => '4',
                'pre_requirements' => 'ART466'
            ],
            [
                'career' => 'Pensum actual: DIN11',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'ART441',
                'subject' => 'EDICION Y MANIPULACION IMAGENES',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: DIN11',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'ART219',
                'subject' => 'DISEÑO DE INTERIORES II',
                'credits' => '4',
                'pre_requirements' => 'ART218'
            ],
            [
                'career' => 'Pensum actual: DIN11',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'ART480',
                'subject' => 'MATERIALES Y METODOS',
                'credits' => '4',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: DIN11',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'ART189',
                'subject' => 'ESTUDIO DE ILUMINACION Y CLIMATIZACION',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: DIN11',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'ART476',
                'subject' => 'DIBUJO DIGITAL III',
                'credits' => '4',
                'pre_requirements' => 'ART475'
            ],
            [
                'career' => 'Pensum actual: DIN11',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'ART200',
                'subject' => 'RESTAURACION Y CONSERVACION',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: DIN11',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'ART220',
                'subject' => 'DISEÑO DE INTERIORES III',
                'credits' => '4',
                'pre_requirements' => 'ART219'
            ],
            [
                'career' => 'Pensum actual: DIN11',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'ART477',
                'subject' => 'TALLER DE MATERIALES APLICADOS',
                'credits' => '3',
                'pre_requirements' => 'ART480'
            ],
            [
                'career' => 'Pensum actual: DIN11',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'ART165',
                'subject' => 'PAISAJISMO',
                'credits' => '4',
                'pre_requirements' => 'SOC043'
            ],
            [
                'career' => 'Pensum actual: DIN11',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'ART482',
                'subject' => 'DIBUJO E IMPRESION DIGITAL 3D I',
                'credits' => '4',
                'pre_requirements' => 'ART476'
            ],
            [
                'career' => 'Pensum actual: DIN11',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'EDIN 1',
                'subject' => 'ELECTIVA I',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: DIN11',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'ART290',
                'subject' => 'DISEÑO DE JARDINES',
                'credits' => '3',
                'pre_requirements' => 'ART165'
            ],
            [
                'career' => 'Pensum actual: DIN11',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'ART428',
                'subject' => 'DISEÑO DE INTERIORES IV',
                'credits' => '4',
                'pre_requirements' => 'ART220'
            ],
            [
                'career' => 'Pensum actual: DIN11',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'ART483',
                'subject' => 'DIBUJO E IMPRESION DIGITAL 3D II',
                'credits' => '4',
                'pre_requirements' => 'ART482'
            ],
            [
                'career' => 'Pensum actual: DIN11',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'ART438',
                'subject' => 'ANALISIS DE COSTOS',
                'credits' => '3',
                'pre_requirements' => 'ART477'
            ],
            [
                'career' => 'Pensum actual: DIN11',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'EDIN 2',
                'subject' => 'ELECTIVA II',
                'credits' => '3',
                'pre_requirements' => 'EDIN 1'
            ],
            [
                'career' => 'Pensum actual: DIN11',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'ART429',
                'subject' => 'DISEÑO DE INTERIORES V',
                'credits' => '4',
                'pre_requirements' => 'ART428'
            ],
            [
                'career' => 'Pensum actual: DIN11',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'ART439',
                'subject' => 'AMBIENTES TEMPORALES',
                'credits' => '2',
                'pre_requirements' => 'ART428'
            ],
            [
                'career' => 'Pensum actual: DIN11',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'ART167',
                'subject' => 'ARTES APLICADAS I',
                'credits' => '3',
                'pre_requirements' => 'ART472'
            ],
            [
                'career' => 'Pensum actual: DIN11',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'ART486',
                'subject' => 'DISEÑO DE MUEBLES I',
                'credits' => '3',
                'pre_requirements' => 'ART138'
            ],
            [
                'career' => 'Pensum actual: DIN11',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'EDIN 3',
                'subject' => 'ELECTIVA III',
                'credits' => '3',
                'pre_requirements' => 'EDIN 2'
            ],

            [
                'career' => 'Pensum actual: DIN11',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'ART430',
                'subject' => 'DISEÑO DE INTERIORES VI',
                'credits' => '4',
                'pre_requirements' => 'ART429'
            ],
            [
                'career' => 'Pensum actual: DIN11',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'ART487',
                'subject' => 'DISEÑO DE MUEBLES II',
                'credits' => '3',
                'pre_requirements' => 'ART486'
            ],
            [
                'career' => 'Pensum actual: DIN11',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'SOC281',
                'subject' => 'SEMINARIO DE GRADO',
                'credits' => '3',
                'pre_requirements' => 'SOC253 80% De los créditos aprobados'
            ],
            [
                'career' => 'Pensum actual: DIN11',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'ART168',
                'subject' => 'ARTES APLICADAS II',
                'credits' => '3',
                'pre_requirements' => 'ART167'
            ],
            [
                'career' => 'Pensum actual: DIN11',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'IDI515',
                'subject' => 'INGLES PARA DISEÑADORES I',
                'credits' => '3',
                'pre_requirements' => 'ENG010'
            ],

            [
                'career' => 'Pensum actual: DIN11',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'ART490',
                'subject' => 'GESTION Y SUPERVISION DE OBRAS',
                'credits' => '3',
                'pre_requirements' => 'ART438'
            ],
            [
                'career' => 'Pensum actual: DIN11',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'ART492',
                'subject' => 'DISEÑO Y MONTAJE DE EVENTOS',
                'credits' => '3',
                'pre_requirements' => 'ART439'
            ],
            [
                'career' => 'Pensum actual: DIN11',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'ART494',
                'subject' => 'PORTAFOLIO',
                'credits' => '2',
                'pre_requirements' => 'ART430'
            ],
            [
                'career' => 'Pensum actual: DIN11',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'IDI516',
                'subject' => 'INGLES PARA DISEÑADORES II',
                'credits' => '3',
                'pre_requirements' => 'IDI515'
            ],

            [
                'career' => 'Pensum actual: DIN11',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'TFG100',
                'subject' => 'TRABAJO FINAL DE GRADO',
                'credits' => '6',
                'pre_requirements' => 'SOC281 92% De los créditos aprobados'
            ],
            [
                'career' => 'Pensum actual: DIN11',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'OPTDEP',
                'subject' => 'OPTATIVA DEPORTE',
                'credits' => '0',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: DIN11',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'PAS620',
                'subject' => 'PASANTIA EMPRESARIAL DE DISEÑO DE INTERIORES',
                'credits' => '0',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: DIN11',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'ENG000',
                'subject' => 'FUNDAMENTOS DE INGLES (I Y II)',
                'credits' => '0',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: DIN11',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'ENG003',
                'subject' => 'INGLES III',
                'credits' => '0',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: DIN11',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'ENG004',
                'subject' => 'INGLES IV',
                'credits' => '0',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: DIN11',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'ENG005',
                'subject' => 'INGLES V',
                'credits' => '0',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: DIN11',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'ENG006',
                'subject' => 'INGLES VI',
                'credits' => '0',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: DIN11',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'ENG007',
                'subject' => 'INGLES VII',
                'credits' => '0',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: DIN11',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'ENG008',
                'subject' => 'INGLES VIII',
                'credits' => '0',
                'pre_requirements' => ''
            ]
        ];


        $FIN11_pensum = [
            [
                'career' => 'Licenciatura en finanzas',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'ADM091',
                'subject' => 'ADMINISTRACION I',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en finanzas',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'CNL101',
                'subject' => 'CONTABILIDAD I LAB',
                'credits' => '5',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en finanzas',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'ESP101',
                'subject' => 'ANALISIS DE TEXTOS DISCURSIVOS',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en finanzas',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'MAT160',
                'subject' => 'PENSAMIENTO NUMERICO',
                'credits' => '5',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en finanzas',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'SOC030',
                'subject' => 'ORIENTACION UNIVERSITARIA',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en finanzas',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'SOC043',
                'subject' => 'GESTION AMBIENTAL',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en finanzas',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'ENG001',
                'subject' => 'INGLES I',
                'credits' => '0',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en finanzas',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'ADM092',
                'subject' => 'ADMINISTRACION II',
                'credits' => '3',
                'pre_requirements' => 'ADM091'
            ],
            [
                'career' => 'Licenciatura en finanzas',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'CNL102',
                'subject' => 'CONTABILIDAD II LAB',
                'credits' => '5',
                'pre_requirements' => 'CNL101'
            ],
            [
                'career' => 'Licenciatura en finanzas',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'ESP102',
                'subject' => 'REDACCION DE TEXTOS DISCURSIVOS I',
                'credits' => '4',
                'pre_requirements' => 'ESP101'
            ],
            [
                'career' => 'Licenciatura en finanzas',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'MAT121',
                'subject' => 'ALGEBRA UNIVERSITARIA',
                'credits' => '4',
                'pre_requirements' => 'MAT160'
            ],
            [
                'career' => 'Licenciatura en finanzas',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'OPTF1A',
                'subject' => 'ELECTIVA GENERAL FINANZAS I',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en finanzas',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'ENG002',
                'subject' => 'INGLES II',
                'credits' => '0',
                'pre_requirements' => 'ENG001'
            ],
            [
                'career' => 'Licenciatura en finanzas',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'ECO101',
                'subject' => 'ECONOMIA I',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en finanzas',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'ESP103',
                'subject' => 'REDACCION DE TEXTOS DISCURSIVOS II',
                'credits' => '4',
                'pre_requirements' => 'ESP102'
            ],
            [
                'career' => 'Licenciatura en finanzas',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'FIN100',
                'subject' => 'INTRODUCCION A LAS FINANZAS CORPORATIVAS',
                'credits' => '2',
                'pre_requirements' => 'CNL101'
            ],
            [
                'career' => 'Licenciatura en finanzas',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'MAT131',
                'subject' => 'CALCULO Y GEOMETRIA ANALITICA I',
                'credits' => '5',
                'pre_requirements' => 'MAT121'
            ],
            [
                'career' => 'Licenciatura en finanzas',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'OPTF1B',
                'subject' => 'ELECTIVA GENERAL FINANZAS II',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en finanzas',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'ENG003',
                'subject' => 'INGLES III',
                'credits' => '0',
                'pre_requirements' => 'ENG002'
            ],
            [
                'career' => 'Licenciatura en finanzas',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'ECO102',
                'subject' => 'ECONOMIA II',
                'credits' => '3',
                'pre_requirements' => 'ECO101'
            ],
            [
                'career' => 'Licenciatura en finanzas',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'ESP301',
                'subject' => 'EXPRESION ORAL',
                'credits' => '3',
                'pre_requirements' => 'ESP103'
            ],
            [
                'career' => 'Licenciatura en finanzas',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'MAT241',
                'subject' => 'MATEMATICA FINANCIERA I',
                'credits' => '4',
                'pre_requirements' => 'MAT121'
            ],
            [
                'career' => 'Licenciatura en finanzas',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'MAT250',
                'subject' => 'ESTADISTICA I',
                'credits' => '4',
                'pre_requirements' => 'MAT121'
            ],
            [
                'career' => 'Licenciatura en finanzas',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'SOC250',
                'subject' => 'METODOLOGIA DE LA INVESTIGACION CIENTIFICA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en finanzas',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'ENG004',
                'subject' => 'INGLES IV',
                'credits' => '0',
                'pre_requirements' => 'ENG003'
            ],
            [
                'career' => 'Licenciatura en finanzas',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'ADM535',
                'subject' => 'ACTITUD EMPRENDEDORA',
                'credits' => '3',
                'pre_requirements' => 'ADM091'
            ],
            [
                'career' => 'Licenciatura en finanzas',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'INF214',
                'subject' => 'APLICACIONES FINANCIERAS',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en finanzas',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'MAT242',
                'subject' => 'MATEMATICA FINANCIERA II',
                'credits' => '4',
                'pre_requirements' => 'MAT241'
            ],
            [
                'career' => 'Licenciatura en finanzas',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'MAT251',
                'subject' => 'ESTADISTICA II',
                'credits' => '4',
                'pre_requirements' => 'MAT250'
            ],
            [
                'career' => 'Licenciatura en finanzas',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'MER101',
                'subject' => 'MERCADOTECNIA I',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en finanzas',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'ENG005',
                'subject' => 'INGLES V',
                'credits' => '0',
                'pre_requirements' => 'ENG004'
            ],
            [
                'career' => 'Licenciatura en finanzas',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'ADM540',
                'subject' => 'LIDERAZGO Y HABILIDADES DIRECTIVAS',
                'credits' => '3',
                'pre_requirements' => 'ADM092'
            ],
            [
                'career' => 'Licenciatura en finanzas',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'CON221',
                'subject' => 'FUNDAMENTOS DE COSTOS',
                'credits' => '4',
                'pre_requirements' => 'CNL102'
            ],
            [
                'career' => 'Licenciatura en finanzas',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'CON518',
                'subject' => 'ANALISIS DE ESTADOS FINANCIEROS',
                'credits' => '3',
                'pre_requirements' => 'CNL102'
            ],
            [
                'career' => 'Licenciatura en finanzas',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'FIN110',
                'subject' => 'ECONOMETRIA Y ANALISIS DE DATOS LAB',
                'credits' => '3',
                'pre_requirements' => 'MAT251'
            ],
            [
                'career' => 'Licenciatura en finanzas',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'FIN120',
                'subject' => 'SISTEMA FINANCIERO NACIONAL Y NORMATIVAS',
                'credits' => '3',
                'pre_requirements' => 'FIN100'
            ],
            [
                'career' => 'Licenciatura en finanzas',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'ENG006',
                'subject' => 'INGLES VI',
                'credits' => '0',
                'pre_requirements' => 'ENG005'
            ],
            [
                'career' => 'Licenciatura en finanzas',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'FIN125',
                'subject' => 'RIESGO Y RENDIMIENTO FINANCIERO',
                'credits' => '3',
                'pre_requirements' => 'MAT251'
            ],
            [
                'career' => 'Licenciatura en finanzas',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'FIN130',
                'subject' => 'VALORACION DE INSTRUMENTO DE RENTA FIJA Y VARIABLE',
                'credits' => '3',
                'pre_requirements' => 'FIN120'
            ],
            [
                'career' => 'Licenciatura en finanzas',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'FIN210',
                'subject' => 'PRESUPUESTO Y PLANEACION FINANCIERA',
                'credits' => '3',
                'pre_requirements' => 'CON221, INF214'
            ],
            [
                'career' => 'Licenciatura en finanzas',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'FIN250',
                'subject' => 'INGENIERIA ECONOMICA Y FINANCIERA',
                'credits' => '3',
                'pre_requirements' => 'CON221, FIN110'
            ],
            [
                'career' => 'Licenciatura en finanzas',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'MAT254',
                'subject' => 'METODOS CUANTITATIVOS APLICADO A LOS NEGOCIOS',
                'credits' => '5',
                'pre_requirements' => 'MAT251'
            ],
            [
                'career' => 'Licenciatura en finanzas',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'ENG007',
                'subject' => 'INGLES VII',
                'credits' => '0',
                'pre_requirements' => 'ENG006'
            ],
            [
                'career' => 'Licenciatura en finanzas',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'CON112',
                'subject' => 'FINANZAS INTERNACIONALES',
                'credits' => '3',
                'pre_requirements' => 'FIN210'
            ],
            [
                'career' => 'Licenciatura en finanzas',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'DER011',
                'subject' => 'DERECHO COMERCIAL',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en finanzas',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'FIN160',
                'subject' => 'ADMINISTRACION DEL CAPITAL DE TRABAJO',
                'credits' => '3',
                'pre_requirements' => 'FIN125'
            ],
            [
                'career' => 'Licenciatura en finanzas',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'FIN150',
                'subject' => 'PRESUPUESTO Y COSTO DE CAPITAL',
                'credits' => '3',
                'pre_requirements' => 'FIN125'
            ],
            [
                'career' => 'Licenciatura en finanzas',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'SOC031',
                'subject' => 'ETICA PROFESIONAL',
                'credits' => '3',
                'pre_requirements' => '60% De los créditos aprobados'
            ],
            [
                'career' => 'Licenciatura en finanzas',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'OPTF2A',
                'subject' => 'ELECTIVA ESPECIALIZADA FINANZAS I',
                'credits' => '3',
                'pre_requirements' => '60% De los créditos aprobados'
            ],
            [
                'career' => 'Licenciatura en finanzas',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'ENG008',
                'subject' => 'INGLES VIII',
                'credits' => '0',
                'pre_requirements' => 'ENG007'
            ],
            [
                'career' => 'Licenciatura en finanzas',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'CON211',
                'subject' => 'SISTEMA TRIBUTARIO DOMINICANO I',
                'credits' => '3',
                'pre_requirements' => 'CNL102'
            ],
            [
                'career' => 'Licenciatura en finanzas',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'IDI070',
                'subject' => 'INGLES TECNICO PARA NEGOCIOS I',
                'credits' => '3',
                'pre_requirements' => 'ENG008'
            ],
            [
                'career' => 'Licenciatura en finanzas',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'FIN115',
                'subject' => 'USO DE LAS APLICACIONES FINANCIERAS I LAB',
                'credits' => '3',
                'pre_requirements' => 'INF214'
            ],
            [
                'career' => 'Licenciatura en finanzas',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'FIN200',
                'subject' => 'ESTRUCTURA FINANCIERA Y APALANCAMIENTO EMPRESARIAL',
                'credits' => '3',
                'pre_requirements' => 'FIN160'
            ],
            [
                'career' => 'Licenciatura en finanzas',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'OPTF2B',
                'subject' => 'ELECTIVA ESPECIALIZADA FINANZAS II',
                'credits' => '3',
                'pre_requirements' => '60% De los créditos aprobados'
            ],
            [
                'career' => 'Licenciatura en finanzas',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'IDI071',
                'subject' => 'INGLES TECNICO PARA NEGOCIOS II',
                'credits' => '3',
                'pre_requirements' => 'IDI070'
            ],
            [
                'career' => 'Licenciatura en finanzas',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'FIN116',
                'subject' => 'USO DE APLICACIONES FINANCIERAS II LAB',
                'credits' => '3',
                'pre_requirements' => 'FIN115'
            ],
            [
                'career' => 'Licenciatura en finanzas',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'FIN135',
                'subject' => 'DEONTOLOGIA FINANCIERA Y CUMPLIMIENTO',
                'credits' => '2',
                'pre_requirements' => 'FIN100, SOC031'
            ],
            [
                'career' => 'Licenciatura en finanzas',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'FIN260',
                'subject' => 'MERCADO DE CAPITALES',
                'credits' => '3',
                'pre_requirements' => 'CON112'
            ],
            [
                'career' => 'Licenciatura en finanzas',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'OPTF2C',
                'subject' => 'ELECTIVA ESPECIALIZADA FINANZAS III',
                'credits' => '3',
                'pre_requirements' => '60% De los créditos aprobados'
            ],
            [
                'career' => 'Licenciatura en finanzas',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'PAS540',
                'subject' => 'PASANTIA EMPRESARIAL DE FINANZAS',
                'credits' => '0',
                'pre_requirements' => '75% De los créditos aprobados'
            ],
            [
                'career' => 'Licenciatura en finanzas',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'DER016',
                'subject' => 'DERECHO LABORAL',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en finanzas',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'FIN300',
                'subject' => 'FUSIONES Y ADQUISICIONES',
                'credits' => '3',
                'pre_requirements' => 'FIN260'
            ],
            [
                'career' => 'Licenciatura en finanzas',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'FIN305',
                'subject' => 'ESTUDIO DE CASOS EN FINANZAS',
                'credits' => '2',
                'pre_requirements' => 'FIN260'
            ],
            [
                'career' => 'Licenciatura en finanzas',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'SOC281',
                'subject' => 'SEMINARIO DE GRADO',
                'credits' => '3',
                'pre_requirements' => '80% De los créditos aprobados'
            ],
            [
                'career' => 'Licenciatura en finanzas',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'OPTF2D',
                'subject' => 'ELECTIVA ESPECIALIZADA FINANZAS IV',
                'credits' => '3',
                'pre_requirements' => '60% De los créditos aprobados'
            ],
            [
                'career' => 'Licenciatura en finanzas',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'TES-MON',
                'subject' => 'TRABAJO DE GRADO O CURSO MONOGRAFICO',
                'credits' => '6',
                'pre_requirements' => '92% De los créditos aprobados'
            ],
            [
                'career' => 'Licenciatura en finanzas',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'FIN165',
                'subject' => 'ADMINISTRACION DEL RIESGO BANCARIO',
                'credits' => '3',
                'pre_requirements' => '92% De los créditos aprobados'
            ],
            [
                'career' => 'Licenciatura en finanzas',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'OPTDEP',
                'subject' => 'OPTATIVA DEPORTE',
                'credits' => '0',
                'pre_requirements' => ''
            ]
        ];


        $LEA11_pensum = [
            [
                'career' => 'Licenciatura en educación artística',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'LEA101',
                'subject' => 'INTRODUCION A LA EDUCACION ART',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en educación artística',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'CGE100',
                'subject' => 'EXPRESION ORAL Y PROD ESCRITA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en educación artística',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'CGM100',
                'subject' => 'ARITMETICA Y GEOMETRIA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en educación artística',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'CGB100',
                'subject' => 'BIOLOGIA GENERAL',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en educación artística',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'CGS100',
                'subject' => 'INTRODUC A LAS CIENCIAS SOCIAL',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en educación artística',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'PEG100',
                'subject' => 'FUNDAMENTOS FILOSOFICOS E HIST',
                'credits' => '4',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en educación artística',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'LEA102',
                'subject' => 'CULTURA POPULAR DOMINICANA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en educación artística',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'CGC100',
                'subject' => 'METODOLOGIA DE LA INVE CIENTIF',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en educación artística',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'CGS110',
                'subject' => 'HISTORIA DOMINICANA',
                'credits' => '3',
                'pre_requirements' => 'CGS100'
            ],
            [
                'career' => 'Licenciatura en educación artística',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'CGF110',
                'subject' => 'FILOSOFIA GENERAL',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en educación artística',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'SIC117',
                'subject' => 'PSICOL DEL DESAR DE 6 A 12 AÑO',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en educación artística',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'PES100',
                'subject' => 'FUNDAMENTO Y ESTRUCT DEL CURRI',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en educación artística',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'CGT100',
                'subject' => 'TECNOLOG DE LA INFORMAC -APL-E',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en educación artística',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'LEA110',
                'subject' => 'ESTRUC DEL CURR DE EDUC ARTIST',
                'credits' => '3',
                'pre_requirements' => 'PES100'
            ],
            [
                'career' => 'Licenciatura en educación artística',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'LEA103',
                'subject' => 'ESTETICA',
                'credits' => '3',
                'pre_requirements' => 'CGF110'
            ],
            [
                'career' => 'Licenciatura en educación artística',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'LEA104',
                'subject' => 'GESTION CULTURAL',
                'credits' => '3',
                'pre_requirements' => 'CGC100, LEA102'
            ],
            [
                'career' => 'Licenciatura en educación artística',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'PES110',
                'subject' => 'PROCESO DE ENSEÑANZA APRENDISA',
                'credits' => '4',
                'pre_requirements' => 'PES100'
            ],
            [
                'career' => 'Licenciatura en educación artística',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'PDS100',
                'subject' => 'PRACTICA DOCENTE I- OBSERCACIO',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en educación artística',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'SIC120',
                'subject' => 'PSICOLOG DEL DESAR ADOL (12A18',
                'credits' => '3',
                'pre_requirements' => 'SIC117'
            ],
            [
                'career' => 'Licenciatura en educación artística',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'SOC105',
                'subject' => 'SIST SOCIO CULTUR Y POLI DOMIN',
                'credits' => '2',
                'pre_requirements' => 'CGS110'
            ],
            [
                'career' => 'Licenciatura en educación artística',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'SIC121',
                'subject' => 'PSICOLOGIA DEL APRENDIZAJE',
                'credits' => '3',
                'pre_requirements' => 'SIC120'
            ],
            [
                'career' => 'Licenciatura en educación artística',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'PES210',
                'subject' => 'EVALUACION DE LOS APRENDIZAJES',
                'credits' => '3',
                'pre_requirements' => 'PES110'
            ],
            [
                'career' => 'Licenciatura en educación artística',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'PDS200',
                'subject' => 'PRACTICA DOCENTE II- INTERACCI',
                'credits' => '3',
                'pre_requirements' => 'PDS100'
            ],
            [
                'career' => 'Licenciatura en educación artística',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'LEA111',
                'subject' => 'DIDACTICA ESP DE LA EDUC ARTIS',
                'credits' => '3',
                'pre_requirements' => 'CGC100'
            ],
            [
                'career' => 'Licenciatura en educación artística',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'PES200',
                'subject' => 'RECURSOS PARA EL APRENDIZAJE',
                'credits' => '3',
                'pre_requirements' => 'PES110'
            ],
            [
                'career' => 'Licenciatura en educación artística',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'LEA200',
                'subject' => 'HERRAMIENTAS WEB 2.0',
                'credits' => '3',
                'pre_requirements' => 'CGT100'
            ],
            [
                'career' => 'Licenciatura en educación artística',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'LEA201',
                'subject' => 'ARTES VISUALES MOD Y CONTEMPOR',
                'credits' => '4',
                'pre_requirements' => 'LEA101'
            ],
            [
                'career' => 'Licenciatura en educación artística',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'LEA202',
                'subject' => 'EXPRES Y APREC DE LAS ARTES VI',
                'credits' => '2',
                'pre_requirements' => 'LEA101'
            ],
            [
                'career' => 'Licenciatura en educación artística',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'PES220',
                'subject' => 'GESTION EN EL AULA',
                'credits' => '3',
                'pre_requirements' => 'PES110'
            ],
            [
                'career' => 'Licenciatura en educación artística',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'SIC100',
                'subject' => 'NEUROCIENCIA Y APRENDIZAJE',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en educación artística',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'LEA112',
                'subject' => 'DIDACTICA ESP DE LA EDUC ARTIS (2)',
                'credits' => '3',
                'pre_requirements' => 'LEA111'
            ],
            [
                'career' => 'Licenciatura en educación artística',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'LEA203',
                'subject' => 'PANORAMA DE LA ARQUITECTURA',
                'credits' => '4',
                'pre_requirements' => 'LEA101'
            ],
            [
                'career' => 'Licenciatura en educación artística',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'LEA204',
                'subject' => 'EXPRESI Y APRECIACION DEL ARTE',
                'credits' => '2',
                'pre_requirements' => 'LEA101'
            ],
            [
                'career' => 'Licenciatura en educación artística',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'LEA300',
                'subject' => 'HERRAMIENTAS WEB 3.0',
                'credits' => '3',
                'pre_requirements' => 'LEA200'
            ],
            [
                'career' => 'Licenciatura en educación artística',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'ESP422',
                'subject' => 'SEMIOTICA',
                'credits' => '3',
                'pre_requirements' => 'LEA103'
            ],
            [
                'career' => 'Licenciatura en educación artística',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'PEG200',
                'subject' => 'INNOVACION EDUCATIVA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en educación artística',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'SOC205',
                'subject' => 'ANTROPOLOGIA SOCIO CULTURAL',
                'credits' => '3',
                'pre_requirements' => 'CGS100, LEA102'
            ],
            [
                'career' => 'Licenciatura en educación artística',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'LEA301',
                'subject' => 'NARRA TRANSM Y GEST DE REC DID',
                'credits' => '3',
                'pre_requirements' => 'LEA103, PES200'
            ],
            [
                'career' => 'Licenciatura en educación artística',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'LEA302',
                'subject' => 'PANORAMA DE LA MUSICA',
                'credits' => '4',
                'pre_requirements' => 'LEA101'
            ],
            [
                'career' => 'Licenciatura en educación artística',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'LEA303',
                'subject' => 'EXPRESION Y APRECIACION MUSICA',
                'credits' => '2',
                'pre_requirements' => 'LEA101'
            ],
            [
                'career' => 'Licenciatura en educación artística',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'LEA304',
                'subject' => 'MUS POP FOLK LATINOAM Y CARIB',
                'credits' => '3',
                'pre_requirements' => 'LEA101'
            ],
            [
                'career' => 'Licenciatura en educación artística',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'PDS300',
                'subject' => 'PRACT DOC III- DID DE LA ED PA',
                'credits' => '3',
                'pre_requirements' => 'PDS200'
            ],
            [
                'career' => 'Licenciatura en educación artística',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'PEG110',
                'subject' => 'ETICA PROFESIONAL',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en educación artística',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'LIT300',
                'subject' => 'LITERATURA MODERNA Y CONTEMPOR',
                'credits' => '3',
                'pre_requirements' => 'CGE100'
            ],
            [
                'career' => 'Licenciatura en educación artística',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'LIT301',
                'subject' => 'TALLER DE EXP Y APREC LITERARI',
                'credits' => '2',
                'pre_requirements' => 'CGE100'
            ],
            [
                'career' => 'Licenciatura en educación artística',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'PEG300',
                'subject' => 'INVESTIGACION ACCION',
                'credits' => '2',
                'pre_requirements' => 'CGC100'
            ],
            [
                'career' => 'Licenciatura en educación artística',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'E088',
                'subject' => 'OPTATIVA I',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en educación artística',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'CGL300',
                'subject' => 'INGLES BASICO I',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en educación artística',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'PDS310',
                'subject' => 'PRACTICA DOCENTE IV-MANEJO',
                'credits' => '4',
                'pre_requirements' => 'PDS300'
            ],
            [
                'career' => 'Licenciatura en educación artística',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'PEG310',
                'subject' => 'PEDAGOGIA SOCIAL',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en educación artística',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'E089',
                'subject' => 'OPTATIVA II',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en educación artística',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'LEA305',
                'subject' => 'LA DANZA MODERNA Y POSTMODERNA',
                'credits' => '3',
                'pre_requirements' => 'LEA101'
            ],
            [
                'career' => 'Licenciatura en educación artística',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'LEA306',
                'subject' => 'DANZA POPULAR Y FOKLORICA DOM',
                'credits' => '3',
                'pre_requirements' => 'LEA101'
            ],
            [
                'career' => 'Licenciatura en educación artística',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'LEA307',
                'subject' => 'TALLER EXPRESION Y APREC. DANZ',
                'credits' => '2',
                'pre_requirements' => 'LEA101'
            ],
            [
                'career' => 'Licenciatura en educación artística',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'PDS400',
                'subject' => 'PRACTICA DOCENTE V- MANEJO AUL',
                'credits' => '4',
                'pre_requirements' => 'PDS310'
            ],
            [
                'career' => 'Licenciatura en educación artística',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'CGL301',
                'subject' => 'INGLES BASICO II',
                'credits' => '3',
                'pre_requirements' => 'CGL300'
            ],
            [
                'career' => 'Licenciatura en educación artística',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'LEA308',
                'subject' => 'PANORAMA DEL TEATRO Y LA ACTUA',
                'credits' => '4',
                'pre_requirements' => 'LEA101'
            ],
            [
                'career' => 'Licenciatura en educación artística',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'LEA309',
                'subject' => 'TALLER DE EXPR Y APREC ART ESC',
                'credits' => '2',
                'pre_requirements' => 'LEA201, LEA202'
            ],
            [
                'career' => 'Licenciatura en educación artística',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'E090',
                'subject' => 'OPTATIVA III',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en educación artística',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'SOC300',
                'subject' => 'INDUSTRIAS CULTURALES',
                'credits' => '3',
                'pre_requirements' => 'LEA104'
            ],
            [
                'career' => 'Licenciatura en educación artística',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'PDG400',
                'subject' => 'PRACTICA DOCENTE VI- INFORME',
                'credits' => '2',
                'pre_requirements' => 'PDS400'
            ],
            [
                'career' => 'Licenciatura en educación artística',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'LEA310',
                'subject' => 'PANORAMA DEL CINE CONTEMPORANE',
                'credits' => '3',
                'pre_requirements' => 'LEA201, LEA202'
            ],
            [
                'career' => 'Licenciatura en educación artística',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'LEA311',
                'subject' => 'CINE DOMINICANO',
                'credits' => '3',
                'pre_requirements' => 'LEA201, LEA202'
            ],
            [
                'career' => 'Licenciatura en educación artística',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'E091',
                'subject' => 'OPTATIVA IV',
                'credits' => '2',
                'pre_requirements' => ''
            ]

        ];

        $EST11_pensum = [
            [
                'career' => 'Licenciatura en estadística',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'ADM103',
                'subject' => 'FUNDAMENTOS DE ADMINISTRACION',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en estadística',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'SOC043',
                'subject' => 'GESTION AMBIENTAL',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en estadística',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'ESP101',
                'subject' => 'ANALISIS DE TEXTOS DISCURSIVOS',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en estadística',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'SOC013',
                'subject' => 'FILOSOFIA',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en estadística',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'MAT010',
                'subject' => 'MATEMATICA BASICA UNIVERSITARIA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en estadística',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'SOC030',
                'subject' => 'ORIENTACION UNIVERSITARIA',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en estadística',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'SOC011',
                'subject' => 'HISTORIA SOCIAL DOMINICANA',
                'credits' => '3',
                'pre_requirements' => ''
            ],

            [
                'career' => 'Licenciatura en estadística',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'ESP106',
                'subject' => 'REDACCION DE TEXTOS DISCURSIVOS I',
                'credits' => '3',
                'pre_requirements' => 'ESP101'
            ],

            [
                'career' => 'Licenciatura en estadística',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'MAT250',
                'subject' => 'ESTADISTICAS I',
                'credits' => '4',
                'pre_requirements' => 'MAT010'
            ],
            [
                'career' => 'Licenciatura en estadística',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'SOC101',
                'subject' => 'INTRODUCCION A LA PSICOLOGIA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en estadística',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'MAT121',
                'subject' => 'ALGEBRA UNIVERSITARIA',
                'credits' => '4',
                'pre_requirements' => 'MAT010'
            ],
            [
                'career' => 'Licenciatura en estadística',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'INF313',
                'subject' => 'SISTEMA DE INFORMACION PARA LA ADMINISTRACION',
                'credits' => '4',
                'pre_requirements' => ''
            ],



            [
                'career' => 'Licenciatura en estadística',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'MER101',
                'subject' => 'MERCADOTECNIA I',
                'credits' => '3',
                'pre_requirements' => ''
            ],


            [
                'career' => 'Licenciatura en estadística',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'ESP107',
                'subject' => 'REDACCION DE TEXTOS DISCURSIVOS II',
                'credits' => '3',
                'pre_requirements' => 'ESP106'
            ],
            [
                'career' => 'Licenciatura en estadística',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'EST301',
                'subject' => 'DEMOGRAFIA I',
                'credits' => '3',
                'pre_requirements' => 'MAT250'
            ],
            [
                'career' => 'Licenciatura en estadística',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'SOC200',
                'subject' => 'INTRODUCCION A LA SOCIOLOGIA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en estadística',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'MAT241',
                'subject' => 'MATEMATICA FINANCIERA I',
                'credits' => '4',
                'pre_requirements' => ''
            ],


            [
                'career' => 'Licenciatura en estadística',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'EST401',
                'subject' => 'DEMOGRAFIA II',
                'credits' => '3',
                'pre_requirements' => 'EST301'
            ],
            [
                'career' => 'Licenciatura en estadística',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'SOC253',
                'subject' => 'METODOLOGIA Y TECNICAS DE LA INVESTIGACION',
                'credits' => '4',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en estadística',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'SOC031',
                'subject' => 'ETICA PROFESIONAL',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en estadística',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'ISC100',
                'subject' => 'TEORIA DE LA COMPUTACION',
                'credits' => '4',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en estadística',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'MAT131',
                'subject' => 'CALCULO Y GEOMETRIA ANALITICA I',
                'credits' => '5',
                'pre_requirements' => 'MAT121'
            ],



            [
                'career' => 'Licenciatura en estadística',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'EST501',
                'subject' => 'TEORIA PROBABILISTICA I',
                'credits' => '4',
                'pre_requirements' => 'MAT131, MAT250'
            ],
            [
                'career' => 'Licenciatura en estadística',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'EST505',
                'subject' => 'POBLACION Y DESARROLLO',
                'credits' => '4',
                'pre_requirements' => 'EST401'
            ],
            [
                'career' => 'Licenciatura en estadística',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'ECO101',
                'subject' => 'ECONOMIA I',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en estadística',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'MAT132',
                'subject' => 'CALCULO Y GEOMETRIA ANALITICA II',
                'credits' => '5',
                'pre_requirements' => 'MAT131'
            ],
            [
                'career' => 'Licenciatura en estadística',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'ADM535',
                'subject' => 'ACTITUD EMPRENDEDORA',
                'credits' => '3',
                'pre_requirements' => 'SOC101'
            ],



            [
                'career' => 'Licenciatura en estadística',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'EST601',
                'subject' => 'TEORIA PROBABILISTICA II',
                'credits' => '4',
                'pre_requirements' => 'EST501'
            ],

            [
                'career' => 'Licenciatura en estadística',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'EST605',
                'subject' => 'MUESTREO I',
                'credits' => '4',
                'pre_requirements' => 'EST501'
            ],
            [
                'career' => 'Licenciatura en estadística',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'ECO102',
                'subject' => 'ECONOMIA II',
                'credits' => '3',
                'pre_requirements' => 'ECO101'
            ],
            [
                'career' => 'Licenciatura en estadística',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'EST610',
                'subject' => 'ANALISIS DE DATOS ESTADISTICOS',
                'credits' => '4',
                'pre_requirements' => 'MAT250'
            ],
            [
                'career' => 'Licenciatura en estadística',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'EST610',
                'subject' => 'SOFTWARE ANALISIS ESTADISTICO I',
                'credits' => '4',
                'pre_requirements' => 'INF319, EST501'
            ],



            [
                'career' => 'Licenciatura en estadística',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'EST705',
                'subject' => 'MUESTREO II',
                'credits' => '4',
                'pre_requirements' => 'EST605'
            ],
            [
                'career' => 'Licenciatura en estadística',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'EST701',
                'subject' => 'ESTADISTICA ECONOMICA',
                'credits' => '4',
                'pre_requirements' => 'EST610, ECO102'
            ],
            [
                'career' => 'Licenciatura en estadística',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'ADM219',
                'subject' => 'FORMULACION Y EVALUACION DE PROYECTO',
                'credits' => '3',
                'pre_requirements' => 'ECO101, MAT241'
            ],
            [
                'career' => 'Licenciatura en estadística',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'IDI080',
                'subject' => 'INGLES PARA NEGOCIOS I',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en estadística',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'MAT222',
                'subject' => 'ALGEBRA LINEAL',
                'credits' => '4',
                'pre_requirements' => 'MAT121'
            ],



            [
                'career' => 'Licenciatura en estadística',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'EST801',
                'subject' => 'SISTEMA DE INFORMACION GEOGRAFICA',
                'credits' => '4',
                'pre_requirements' => 'INF313'
            ],
            [
                'career' => 'Licenciatura en estadística',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'IDI081',
                'subject' => 'INGLES PARA NEGOCIOS II',
                'credits' => '3',
                'pre_requirements' => 'IDI080'
            ],
            [
                'career' => 'Licenciatura en estadística',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'EST805',
                'subject' => 'ANALISIS MULTIVARIANTE I',
                'credits' => '4',
                'pre_requirements' => 'EST615'
            ],
            [
                'career' => 'Licenciatura en estadística',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'IND430',
                'subject' => 'CONTROL ESTADISTICO DE CALIDAD',
                'credits' => '3',
                'pre_requirements' => 'EST501'
            ],
            [
                'career' => 'Licenciatura en estadística',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'E063',
                'subject' => 'ELECTIVA I',
                'credits' => '3',
                'pre_requirements' => '60% de los créditos aprobados'
            ],



            [
                'career' => 'Licenciatura en estadística',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'EST901',
                'subject' => 'DISEÑO EXPERIMENTAL',
                'credits' => '4',
                'pre_requirements' => 'EST615'
            ],
            [
                'career' => 'Licenciatura en estadística',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'EST905',
                'subject' => 'ANALISIS MULTIVARIANTE II',
                'credits' => '4',
                'pre_requirements' => 'EST805'
            ],
            [
                'career' => 'Licenciatura en estadística',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'MAT359',
                'subject' => 'MATEMATICA ACTUARIAL',
                'credits' => '4',
                'pre_requirements' => 'MAT241, MAT250'
            ],
            [
                'career' => 'Licenciatura en estadística',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'E064',
                'subject' => 'ELECTIVA II',
                'credits' => '3',
                'pre_requirements' => '60% de los créditos aprobados'
            ],




            [
                'career' => 'Licenciatura en estadística',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'EST915',
                'subject' => 'SOFTWARE ANALISIS ESTADISTICO II',
                'credits' => '4',
                'pre_requirements' => 'EST615'
            ],

            [
                'career' => 'Licenciatura en estadística',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'CON905',
                'subject' => 'CONTABILIDAD BASICA FINANCIERA',
                'credits' => '5',
                'pre_requirements' => 'INF313, MAT241'
            ],
            [
                'career' => 'Licenciatura en estadística',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'EST910',
                'subject' => 'ESTADISTICAS NO PARAMETRICA',
                'credits' => '4',
                'pre_requirements' => 'EST610'
            ],
            [
                'career' => 'Licenciatura en estadística',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'E065',
                'subject' => 'ELECTIVA III',
                'credits' => '3',
                'pre_requirements' => '60% de los créditos aprobados'
            ],


            [
                'career' => 'Licenciatura en estadística',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'ADM146',
                'subject' => 'SIMULACION DE NEGOCIO',
                'credits' => '3',
                'pre_requirements' => 'ADM103'
            ],
            [
                'career' => 'Licenciatura en estadística',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'EST920',
                'subject' => 'FUENTE DE DATOS',
                'credits' => '4',
                'pre_requirements' => 'EST610'
            ],
            [
                'career' => 'Licenciatura en estadística',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'SOC281',
                'subject' => 'SEMINARIO DE GRADO',
                'credits' => '3',
                'pre_requirements' => '80% de los créditos aprobados'
            ],

            [
                'career' => 'Licenciatura en estadística',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'OPTDEP',
                'subject' => 'OPTATIVA DEPORTE',
                'credits' => '0',
                'pre_requirements' => ''
            ],

            [
                'career' => 'Licenciatura en estadística',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'TFG100',
                'subject' => 'TRABAJO FINAL DE GRADO',
                'credits' => '6',
                'pre_requirements' => 'SOC281 92% de los créditos aprobados'
            ],


        ];

        $LES11_pensum = [
            [
                'career' => 'Licenciatura en lengua española y literatura orientada a la educación secundaria',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'EDU100',
                'subject' => 'FUNDAMENTOS FILOSOFICOS E HISTORICOS DE LA EDUCACION',
                'credits' => '4',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en lengua española y literatura orientada a la educación secundaria',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'ENG001',
                'subject' => 'INGLES I',
                'credits' => '0',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en lengua española y literatura orientada a la educación secundaria',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'ESP302',
                'subject' => 'EXPRESION ORAL Y ESCRITA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en lengua española y literatura orientada a la educación secundaria',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'LMS140',
                'subject' => 'ARITMETICA Y GEOMETRIA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en lengua española y literatura orientada a la educación secundaria',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'PSI100',
                'subject' => 'PSICOLOGIA GENERAL',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en lengua española y literatura orientada a la educación secundaria',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'SOC013',
                'subject' => 'FILOSOFIA',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en lengua española y literatura orientada a la educación secundaria',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'SOC030',
                'subject' => 'ORIENTACION UNIVERSITARIA',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en lengua española y literatura orientada a la educación secundaria',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'EDU101',
                'subject' => 'DIDACTICA GENERAL',
                'credits' => '5',
                'pre_requirements' => 'EDU100'
            ],
            [
                'career' => 'Licenciatura en lengua española y literatura orientada a la educación secundaria',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'ENG002',
                'subject' => 'INGLES II',
                'credits' => '0',
                'pre_requirements' => 'ENG001'
            ],
            [
                'career' => 'Licenciatura en lengua española y literatura orientada a la educación secundaria',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'ESP110',
                'subject' => 'NORMAS Y PRACTICAS ORTOGRAFICAS',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en lengua española y literatura orientada a la educación secundaria',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'PSI105',
                'subject' => 'PSICOLOGIA DEL ADOLESCENTE',
                'credits' => '3',
                'pre_requirements' => 'PSI100'
            ],
            [
                'career' => 'Licenciatura en lengua española y literatura orientada a la educación secundaria',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'SOC031',
                'subject' => 'ETICA PROFESIONAL',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en lengua española y literatura orientada a la educación secundaria',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'SOC250',
                'subject' => 'METODOLOGIA DE LA INVESTIGACION CIENTIFICA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en lengua española y literatura orientada a la educación secundaria',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'EDU103',
                'subject' => 'FUNDAMENTO Y ESTRUCTURA DEL CURRICULUM',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en lengua española y literatura orientada a la educación secundaria',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'EDU106',
                'subject' => 'INVESTIGACION EDUCATIVA',
                'credits' => '3',
                'pre_requirements' => 'SOC250'
            ],
            [
                'career' => 'Licenciatura en lengua española y literatura orientada a la educación secundaria',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'ENG003',
                'subject' => 'INGLES III',
                'credits' => '0',
                'pre_requirements' => 'ENG002'
            ],
            [
                'career' => 'Licenciatura en lengua española y literatura orientada a la educación secundaria',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'ESP105',
                'subject' => 'REDACCION DE ENSAYOS ACADEMICOS',
                'credits' => '4',
                'pre_requirements' => 'ESP110'
            ],
            [
                'career' => 'Licenciatura en lengua española y literatura orientada a la educación secundaria',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'LIN106',
                'subject' => 'HISTORIA DE LA LENGUA ESPAÑOLA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en lengua española y literatura orientada a la educación secundaria',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'PRA001',
                'subject' => 'PRACTICA DOCENTE I',
                'credits' => '4',
                'pre_requirements' => 'EDU101'
            ],
            [
                'career' => 'Licenciatura en lengua española y literatura orientada a la educación secundaria',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'PSI106',
                'subject' => 'PSICOLOGIA DEL APRENDIZAJE',
                'credits' => '3',
                'pre_requirements' => 'PSI105'
            ],
            [
                'career' => 'Licenciatura en lengua española y literatura orientada a la educación secundaria',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'EDU110',
                'subject' => 'EVALUACION DE LOS APRENDIZAJES',
                'credits' => '3',
                'pre_requirements' => 'EDU101'
            ],
            [
                'career' => 'Licenciatura en lengua española y literatura orientada a la educación secundaria',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'EDU200',
                'subject' => 'MEDIOS Y RECURSOS PARA EL APRENDIZAJE',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en lengua española y literatura orientada a la educación secundaria',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'ENG004',
                'subject' => 'INGLES IV',
                'credits' => '0',
                'pre_requirements' => 'ENG003'
            ],
            [
                'career' => 'Licenciatura en lengua española y literatura orientada a la educación secundaria',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'ESP320',
                'subject' => 'ANALISIS Y CREACION DE TEXTOS DISCURSIVOS',
                'credits' => '3',
                'pre_requirements' => 'ESP105'
            ],
            [
                'career' => 'Licenciatura en lengua española y literatura orientada a la educación secundaria',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'LIN112',
                'subject' => 'FUNDAMENTOS DE LINGUISTICA GENERAL',
                'credits' => '3',
                'pre_requirements' => 'LIN106'
            ],
            [
                'career' => 'Licenciatura en lengua española y literatura orientada a la educación secundaria',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'PSI200',
                'subject' => 'NEUROCIENCIA Y APRENDIZAJE',
                'credits' => '3',
                'pre_requirements' => 'PSI106'
            ],
            [
                'career' => 'Licenciatura en lengua española y literatura orientada a la educación secundaria',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'TEO090',
                'subject' => 'INTRODUCCION AL ESTUDIO DE LA LITERATURA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en lengua española y literatura orientada a la educación secundaria',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'EDU105',
                'subject' => 'CIENCIAS NATURALES',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en lengua española y literatura orientada a la educación secundaria',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'EDU202',
                'subject' => 'LIDERAZGO EDUCATIVO',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en lengua española y literatura orientada a la educación secundaria',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'ENG005',
                'subject' => 'INGLES V',
                'credits' => '0',
                'pre_requirements' => 'ENG004'
            ],
            [
                'career' => 'Licenciatura en lengua española y literatura orientada a la educación secundaria',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'LIN305',
                'subject' => 'DIDACTICA ESPECIAL DE LA LENGUA ESPAÑOLA',
                'credits' => '4',
                'pre_requirements' => 'EDU101'
            ],
            [
                'career' => 'Licenciatura en lengua española y literatura orientada a la educación secundaria',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'LIN306',
                'subject' => 'GRAMATICA DE LA LENGUA ESPAÑOLA',
                'credits' => '3',
                'pre_requirements' => 'ESP110'
            ],
            [
                'career' => 'Licenciatura en lengua española y literatura orientada a la educación secundaria',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'LIN321',
                'subject' => 'TEORIAS LINGUISTICAS Y ENSEÑANZAS DE LA LENGUA',
                'credits' => '3',
                'pre_requirements' => 'LIN112'
            ],
            [
                'career' => 'Licenciatura en lengua española y literatura orientada a la educación secundaria',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'LIT100',
                'subject' => 'LITERATURA UNIVERSAL CLASICA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en lengua española y literatura orientada a la educación secundaria',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'EDU203',
                'subject' => 'ESCUELA, FAMILIA Y COMUNIDAD',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en lengua española y literatura orientada a la educación secundaria',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'ENG006',
                'subject' => 'INGLES VI',
                'credits' => '0',
                'pre_requirements' => 'ENG005'
            ],
            [
                'career' => 'Licenciatura en lengua española y literatura orientada a la educación secundaria',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'INF603',
                'subject' => 'LAS TIC EN LA ENSEÑANZA DE LA LENGUA Y LA LITERATURA',
                'credits' => '3',
                'pre_requirements' => 'EDU200'
            ],
            [
                'career' => 'Licenciatura en lengua española y literatura orientada a la educación secundaria',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'LIN310',
                'subject' => 'FONETICA Y FONOLOGIA DE LA LENGUA ESPAÑOLA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en lengua española y literatura orientada a la educación secundaria',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'LIN311',
                'subject' => 'MORFOLOGIA Y SINTAXIS I',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en lengua española y literatura orientada a la educación secundaria',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'LIT101',
                'subject' => 'LITERATURA ESPAÑOLA I',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en lengua española y literatura orientada a la educación secundaria',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'PRA002',
                'subject' => 'PRACTICA DOCENTE II',
                'credits' => '4',
                'pre_requirements' => 'EDU110, PRA001'
            ],
            [
                'career' => 'Licenciatura en lengua española y literatura orientada a la educación secundaria',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'ART010',
                'subject' => 'BELLAS ARTES',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en lengua española y literatura orientada a la educación secundaria',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'ENG007',
                'subject' => 'INGLES VII',
                'credits' => '0',
                'pre_requirements' => 'ENG006'
            ],
            [
                'career' => 'Licenciatura en lengua española y literatura orientada a la educación secundaria',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'LIN312',
                'subject' => 'MORFOLOGIA Y SINTAXIS II',
                'credits' => '3',
                'pre_requirements' => 'LIN311'
            ],
            [
                'career' => 'Licenciatura en lengua española y literatura orientada a la educación secundaria',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'LIT102',
                'subject' => 'LITERATURA ESPAÑOLA II',
                'credits' => '3',
                'pre_requirements' => 'LIT101'
            ],
            [
                'career' => 'Licenciatura en lengua española y literatura orientada a la educación secundaria',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'LIT103',
                'subject' => 'LITERATURA HISPANOAMERICANA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en lengua española y literatura orientada a la educación secundaria',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'SOC012',
                'subject' => 'VISION CRITICA DE LA HISTORIA DOMINICANA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en lengua española y literatura orientada a la educación secundaria',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'SOC190',
                'subject' => 'INTRODUCCION A LAS CIENCIAS SOCIALES',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en lengua española y literatura orientada a la educación secundaria',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'TEO200',
                'subject' => 'PROCESO CREATIVO DE LOS GENEROS LITERARIOS',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en lengua española y literatura orientada a la educación secundaria',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'ENG008',
                'subject' => 'INGLES VIII',
                'credits' => '0',
                'pre_requirements' => 'ENG007'
            ],
            [
                'career' => 'Licenciatura en lengua española y literatura orientada a la educación secundaria',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'LIN315',
                'subject' => 'LEXICOLOGIA Y SEMANTICA DE LA LENGUA ESPAÑOLA',
                'credits' => '3',
                'pre_requirements' => 'LIN310'
            ],
            [
                'career' => 'Licenciatura en lengua española y literatura orientada a la educación secundaria',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'LIN317',
                'subject' => 'SOCIOLINGUISTICA DE LA LENGUA ESPAÑOLA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en lengua española y literatura orientada a la educación secundaria',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'LIN422',
                'subject' => 'SEMIOTICA DE LA LENGUA ESPAÑOLA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en lengua española y literatura orientada a la educación secundaria',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'LIT104',
                'subject' => 'LITERATURA HISPANOAMERICANA II',
                'credits' => '3',
                'pre_requirements' => 'LIT103'
            ],
            [
                'career' => 'Licenciatura en lengua española y literatura orientada a la educación secundaria',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'LIT210',
                'subject' => 'DIDACTICA ESPECIAL DE LA LITERATURA',
                'credits' => '4',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en lengua española y literatura orientada a la educación secundaria',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'TEO211',
                'subject' => 'TEORIA, ANALISIS Y CREACION LITERARIAS I',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en lengua española y literatura orientada a la educación secundaria',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'IDI200',
                'subject' => 'REDACCION EN INGLES',
                'credits' => '3',
                'pre_requirements' => 'ENG008'
            ],
            [
                'career' => 'Licenciatura en lengua española y literatura orientada a la educación secundaria',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'LIT106',
                'subject' => 'LITERATURA JUVENIL',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en lengua española y literatura orientada a la educación secundaria',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'LIT110',
                'subject' => 'LITERATURA DOMINICANA I',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en lengua española y literatura orientada a la educación secundaria',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'PRA003',
                'subject' => 'PRACTICA DOCENTE III',
                'credits' => '5',
                'pre_requirements' => 'LIN305, PRA002'
            ],
            [
                'career' => 'Licenciatura en lengua española y literatura orientada a la educación secundaria',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'TEO212',
                'subject' => 'TEORIAS, CREACION Y ANALISIS LITERARIOS II',
                'credits' => '3',
                'pre_requirements' => 'TEO211'
            ],

            [
                'career' => 'Licenciatura en lengua española y literatura orientada a la educación secundaria',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'LIN244',
                'subject' => 'ESPAÑOL DE LA REPUBLICA DOMINICANA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en lengua española y literatura orientada a la educación secundaria',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'LIT105',
                'subject' => 'LITERATURA LATINOAMERICANA Y DEL CARIBE',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en lengua española y literatura orientada a la educación secundaria',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'LIT111',
                'subject' => 'LITERATURA DOMINICANA II',
                'credits' => '3',
                'pre_requirements' => 'LIT110'
            ],
            [
                'career' => 'Licenciatura en lengua española y literatura orientada a la educación secundaria',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'LIT115',
                'subject' => 'LITERATURA UNIVERSAL CONTEMPORANEA',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en lengua española y literatura orientada a la educación secundaria',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'PRA004',
                'subject' => 'PRACTICA DOCENTE IV',
                'credits' => '5',
                'pre_requirements' => 'PRA003'
            ],
            [
                'career' => 'Licenciatura en lengua española y literatura orientada a la educación secundaria',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'TES-MON',
                'subject' => 'TRABAJO DE GRADO O CURSO MONOGRAFICO',
                'credits' => '6',
                'pre_requirements' => '92% De los créditos aprobados'
            ],
            [
                'career' => 'Licenciatura en lengua española y literatura orientada a la educación secundaria',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'OPTDEP',
                'subject' => 'OPTATIVA DEPORTE',
                'credits' => '0',
                'pre_requirements' => ''
            ]
        ];


        $LIE11_pensum = [
            [
                'career' => 'Licenciatura en inglés orientada a la enseñanza',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'EDU100',
                'subject' => 'FUNDAMENTOS FILOSOFICOS E HISTORICOS DE LA EDUCACION',
                'credits' => '4',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en inglés orientada a la enseñanza',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'ESP302',
                'subject' => 'EXPRESION ORAL Y ESCRITA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en inglés orientada a la enseñanza',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'IDI007',
                'subject' => 'INGLES INTERMEDIO I',
                'credits' => '4',
                'pre_requirements' => 'ENG006'
            ],
            [
                'career' => 'Licenciatura en inglés orientada a la enseñanza',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'LMS140',
                'subject' => 'ARITMETICA Y GEOMETRIA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en inglés orientada a la enseñanza',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'PSI100',
                'subject' => 'PSICOLOGIA GENERAL',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en inglés orientada a la enseñanza',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'SOC030',
                'subject' => 'ORIENTACION UNIVERSITARIA',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en inglés orientada a la enseñanza',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'EDU101',
                'subject' => 'DIDACTICA GENERAL',
                'credits' => '5',
                'pre_requirements' => 'EDU100'
            ],
            [
                'career' => 'Licenciatura en inglés orientada a la enseñanza',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'IDI008',
                'subject' => 'INGLES INTERMEDIO II',
                'credits' => '4',
                'pre_requirements' => 'IDI007'
            ],
            [
                'career' => 'Licenciatura en inglés orientada a la enseñanza',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'PSI105',
                'subject' => 'PSICOLOGIA DEL ADOLESCENTE',
                'credits' => '3',
                'pre_requirements' => 'PSI100'
            ],
            [
                'career' => 'Licenciatura en inglés orientada a la enseñanza',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'SOC013',
                'subject' => 'FILOSOFIA',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en inglés orientada a la enseñanza',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'SOC031',
                'subject' => 'ETICA PROFESIONAL',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en inglés orientada a la enseñanza',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'SOC250',
                'subject' => 'METODOLOGIA DE LA INVESTIGACION CIENTIFICA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en inglés orientada a la enseñanza',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'EDU103',
                'subject' => 'FUNDAMENTO Y ESTRUCTURA DEL CURRICULUM',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en inglés orientada a la enseñanza',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'EDU106',
                'subject' => 'INVESTIGACION EDUCATIVA',
                'credits' => '3',
                'pre_requirements' => 'SOC250'
            ],
            [
                'career' => 'Licenciatura en inglés orientada a la enseñanza',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'IDI009',
                'subject' => 'INGLES AVANZADO I',
                'credits' => '5',
                'pre_requirements' => 'IDI008'
            ],
            [
                'career' => 'Licenciatura en inglés orientada a la enseñanza',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'PRA001',
                'subject' => 'PRACTICA DOCENTE I',
                'credits' => '4',
                'pre_requirements' => 'EDU101'
            ],
            [
                'career' => 'Licenciatura en inglés orientada a la enseñanza',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'PSI106',
                'subject' => 'PSICOLOGIA DEL APRENDIZAJE',
                'credits' => '3',
                'pre_requirements' => 'PSI105'
            ],
            [
                'career' => 'Licenciatura en inglés orientada a la enseñanza',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'EDU110',
                'subject' => 'EVALUACION DE LOS APRENDIZAJES',
                'credits' => '3',
                'pre_requirements' => 'EDU101'
            ],
            [
                'career' => 'Licenciatura en inglés orientada a la enseñanza',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'EDU200',
                'subject' => 'MEDIOS Y RECURSOS PARA EL APRENDIZAJE',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en inglés orientada a la enseñanza',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'IDI010',
                'subject' => 'INGLES AVANZADO II',
                'credits' => '5',
                'pre_requirements' => 'IDI009'
            ],
            [
                'career' => 'Licenciatura en inglés orientada a la enseñanza',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'PSI200',
                'subject' => 'NEUROCIENCIA Y APRENDIZAJE',
                'credits' => '3',
                'pre_requirements' => 'PSI106'
            ],
            [
                'career' => 'Licenciatura en inglés orientada a la enseñanza',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'SOC190',
                'subject' => 'INTRODUCCION A LAS CIENCIAS SOCIALES',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en inglés orientada a la enseñanza',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'EDU105',
                'subject' => 'CIENCIAS NATURALES',
                'credits' => '3',
                'pre_requirements' => 'EDU110'
            ],
            [
                'career' => 'Licenciatura en inglés orientada a la enseñanza',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'EDU202',
                'subject' => 'LIDERAZGO EDUCATIVO',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en inglés orientada a la enseñanza',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'INF604',
                'subject' => 'LAS TIC EN LA ENSEÑANZA DEL INGLES',
                'credits' => '4',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en inglés orientada a la enseñanza',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'LIE100',
                'subject' => 'LENGUA Y LINGUISTICA',
                'credits' => '4',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en inglés orientada a la enseñanza',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'LIE120',
                'subject' => 'GRAMATICA AVANZADA INGLESA',
                'credits' => '4',
                'pre_requirements' => 'IDI010'
            ],

            [
                'career' => 'Licenciatura en inglés orientada a la enseñanza',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'EDU203',
                'subject' => 'ESCUELA, FAMILIA Y COMUNIDAD',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en inglés orientada a la enseñanza',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'LIE110',
                'subject' => 'FONETICA Y FONOLOGIA',
                'credits' => '4',
                'pre_requirements' => 'LIE100'
            ],
            [
                'career' => 'Licenciatura en inglés orientada a la enseñanza',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'LIE205',
                'subject' => 'REDACCION ACADEMICA EN INGLES',
                'credits' => '4',
                'pre_requirements' => 'LIE120'
            ],
            [
                'career' => 'Licenciatura en inglés orientada a la enseñanza',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'LIE310',
                'subject' => 'TEORIAS DE ENSEÑANZA Y APRENDIZAJE EN LA LENGUA INGLESA',
                'credits' => '4',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en inglés orientada a la enseñanza',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'PRA002',
                'subject' => 'PRACTICA DOCENTE II',
                'credits' => '4',
                'pre_requirements' => 'EDU110, PRA001'
            ],

            [
                'career' => 'Licenciatura en inglés orientada a la enseñanza',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'ART010',
                'subject' => 'BELLAS ARTES',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en inglés orientada a la enseñanza',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'LIE101',
                'subject' => 'LINGUISTICA APLICADA',
                'credits' => '4',
                'pre_requirements' => 'LIE100'
            ],
            [
                'career' => 'Licenciatura en inglés orientada a la enseñanza',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'LIE210',
                'subject' => 'DIDACTICA DE LA ENSEÑANZA DEL INGLES COMO LENGUA EXTRANJERA I',
                'credits' => '4',
                'pre_requirements' => 'LIE120'
            ],
            [
                'career' => 'Licenciatura en inglés orientada a la enseñanza',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'LIE300',
                'subject' => 'CIVILIZACION Y CULTURA INGLESA',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en inglés orientada a la enseñanza',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'LIE301',
                'subject' => 'TEORIAS LITERARIAS',
                'credits' => '4',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en inglés orientada a la enseñanza',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'SOC012',
                'subject' => 'VISION CRITICA DE LA HISTORIA DOMINICANA',
                'credits' => '3',
                'pre_requirements' => ''
            ],

            [
                'career' => 'Licenciatura en inglés orientada a la enseñanza',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'LIE200',
                'subject' => 'EL CUENTO Y LA LITERATURA INFANTIL',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en inglés orientada a la enseñanza',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'LIE211',
                'subject' => 'DIDACTICA DE LA ENSEÑANZA DEL INGLES COMO LENGUA EXTRANJERA II',
                'credits' => '4',
                'pre_requirements' => 'LIE210'
            ],
            [
                'career' => 'Licenciatura en inglés orientada a la enseñanza',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'LIE215',
                'subject' => 'EVALUACION DEL APRENDIZAJE EN LA LENGUA INGLESA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en inglés orientada a la enseñanza',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'LIE307',
                'subject' => 'TEORIAS Y TECNICAS DE LA TRADUCCION',
                'credits' => '4',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en inglés orientada a la enseñanza',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'OPTESP',
                'subject' => 'OPTATIVA EN ESPAÑOL',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en inglés orientada a la enseñanza',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'LIE209',
                'subject' => 'FUNDAMENTOS DEL DISCURSO EN INGLES',
                'credits' => '3',
                'pre_requirements' => 'LIE205'
            ],
            [
                'career' => 'Licenciatura en inglés orientada a la enseñanza',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'LIE303',
                'subject' => 'LITERATURA DEL CARIBE ANGLOFONO',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en inglés orientada a la enseñanza',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'LIE304',
                'subject' => 'LITERATURA ANGLOFONA I - GRAN BRETAÑA',
                'credits' => '4',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en inglés orientada a la enseñanza',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'PRA003',
                'subject' => 'PRACTICA DOCENTE III',
                'credits' => '5',
                'pre_requirements' => 'LIE211, PRA002'
            ],

            [
                'career' => 'Licenciatura en inglés orientada a la enseñanza',
                'quarter' =>  '10°. Cuatrimestre',
                'code' => 'LIE115',
                'subject' => 'LINGUISTICA Y ANALISIS COMPARATIVO ENTRE INGLES Y ESPAÑOL',
                'credits' => '4',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en inglés orientada a la enseñanza',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'LIE305',
                'subject' => 'LITERATURA ANGLOFONA II - ESTADOS UNIDOS',
                'credits' => '4',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en inglés orientada a la enseñanza',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'LIE306',
                'subject' => 'LITERATURA LATINO-NORTEAMERICA',
                'credits' => '4',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en inglés orientada a la enseñanza',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'PRA004',
                'subject' => 'PRACTICA DOCENTE IV',
                'credits' => '5',
                'pre_requirements' => 'PRA003'
            ],

            [
                'career' => 'Licenciatura en inglés orientada a la enseñanza',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'SOC281',
                'subject' => 'SEMINARIO DE GRADO',
                'credits' => '3',
                'pre_requirements' => '80% De los créditos aprobados'
            ],
            [
                'career' => 'Licenciatura en inglés orientada a la enseñanza',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'PAS702',
                'subject' => 'PASANTIA',
                'credits' => '0',
                'pre_requirements' => 'PRA004 75% De los créditos aprobados'
            ],
            [
                'career' => 'Licenciatura en inglés orientada a la enseñanza',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'TES-MON',
                'subject' => 'TRABAJO DE GRADO O CURSO MONOGRAFICO',
                'credits' => '6',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en inglés orientada a la enseñanza',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'OPTIDI',
                'subject' => 'OPTATIVA IDIOMAS',
                'credits' => '0',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en inglés orientada a la enseñanza',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'OPTDEP',
                'subject' => 'OPTATIVA DEPORTE',
                'credits' => '0',
                'pre_requirements' => ''
            ]

        ];

        $LMS11_pensum = [
            [
                'career' => 'Licenciatura en matemática orientada a la educación secundaria',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'EDU100',
                'subject' => 'FUNDAMENTOS FILOSOFICOS E HISTORICOS DE LA EDUCACION',
                'credits' => '4',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en matemática orientada a la educación secundaria',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'ENG001',
                'subject' => 'INGLES I',
                'credits' => '0',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en matemática orientada a la educación secundaria',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'ESP302',
                'subject' => 'EXPRESION ORAL Y ESCRITA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en matemática orientada a la educación secundaria',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'LMS140',
                'subject' => 'ARITMETICA Y GEOMETRIA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en matemática orientada a la educación secundaria',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'PSI100',
                'subject' => 'PSICOLOGIA GENERAL',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en matemática orientada a la educación secundaria',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'SOC013',
                'subject' => 'FILOSOFIA',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en matemática orientada a la educación secundaria',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'SOC030',
                'subject' => 'ORIENTACION UNIVERSITARIA',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en matemática orientada a la educación secundaria',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'EDU101',
                'subject' => 'DIDACTICA GENERAL',
                'credits' => '5',
                'pre_requirements' => 'EDU100'
            ],
            [
                'career' => 'Licenciatura en matemática orientada a la educación secundaria',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'ENG002',
                'subject' => 'INGLES II',
                'credits' => '0',
                'pre_requirements' => 'ENG001'
            ],
            [
                'career' => 'Licenciatura en matemática orientada a la educación secundaria',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'LMS240',
                'subject' => 'LOGICA MATEMATICA Y TEORIA DE CONJUNTO',
                'credits' => '4',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en matemática orientada a la educación secundaria',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'PSI105',
                'subject' => 'PSICOLOGIA DEL ADOLESCENTE',
                'credits' => '3',
                'pre_requirements' => 'PSI100'
            ],
            [
                'career' => 'Licenciatura en matemática orientada a la educación secundaria',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'SOC031',
                'subject' => 'ETICA PROFESIONAL',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en matemática orientada a la educación secundaria',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'SOC250',
                'subject' => 'METODOLOGIA DE LA INVESTIGACION CIENTIFICA',
                'credits' => '3',
                'pre_requirements' => ''
            ],

            [
                'career' => 'Licenciatura en matemática orientada a la educación secundaria',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'EDU103',
                'subject' => 'FUNDAMENTO Y ESTRUCTURA DEL CURRICULUM',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en matemática orientada a la educación secundaria',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'EDU106',
                'subject' => 'INVESTIGACION EDUCATIVA',
                'credits' => '3',
                'pre_requirements' => 'SOC250'
            ],
            [
                'career' => 'Licenciatura en matemática orientada a la educación secundaria',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'ENG003',
                'subject' => 'INGLES III',
                'credits' => '0',
                'pre_requirements' => 'ENG002'
            ],
            [
                'career' => 'Licenciatura en matemática orientada a la educación secundaria',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'LMS201',
                'subject' => 'EPISTEMOLOGIA, FILOSOFIA E HISTORIA DE LA MATEMATICA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en matemática orientada a la educación secundaria',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'LMS262',
                'subject' => 'ARITMETICA SUPERIOR',
                'credits' => '3',
                'pre_requirements' => 'LMS240'
            ],
            [
                'career' => 'Licenciatura en matemática orientada a la educación secundaria',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'PRA001',
                'subject' => 'PRACTICA DOCENTE I',
                'credits' => '4',
                'pre_requirements' => 'EDU101'
            ],
            [
                'career' => 'Licenciatura en matemática orientada a la educación secundaria',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'PSI106',
                'subject' => 'PSICOLOGIA DEL APRENDIZAJE',
                'credits' => '3',
                'pre_requirements' => 'PSI105'
            ],

            [
                'career' => 'Licenciatura en matemática orientada a la educación secundaria',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'EDU110',
                'subject' => 'EVALUACION DE LOS APRENDIZAJES',
                'credits' => '3',
                'pre_requirements' => 'EDU101'
            ],
            [
                'career' => 'Licenciatura en matemática orientada a la educación secundaria',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'EDU200',
                'subject' => 'MEDIOS Y RECURSOS PARA EL APRENDIZAJE',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en matemática orientada a la educación secundaria',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'ENG004',
                'subject' => 'INGLES IV',
                'credits' => '0',
                'pre_requirements' => 'ENG003'
            ],
            [
                'career' => 'Licenciatura en matemática orientada a la educación secundaria',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'LMS120',
                'subject' => 'ALGEBRA SUPERIOR I',
                'credits' => '3',
                'pre_requirements' => 'LMS240'
            ],
            [
                'career' => 'Licenciatura en matemática orientada a la educación secundaria',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'LMS230',
                'subject' => 'GEOMETRIA EUCLIDIANA',
                'credits' => '3',
                'pre_requirements' => 'LMS240'
            ],
            [
                'career' => 'Licenciatura en matemática orientada a la educación secundaria',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'PSI200',
                'subject' => 'NEUROCIENCIA Y APRENDIZAJE',
                'credits' => '3',
                'pre_requirements' => 'PSI106'
            ],
            [
                'career' => 'Licenciatura en matemática orientada a la educación secundaria',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'SOC190',
                'subject' => 'INTRODUCCION A LAS CIENCIAS SOCIALES',
                'credits' => '2',
                'pre_requirements' => ''
            ],

            [
                'career' => 'Licenciatura en matemática orientada a la educación secundaria',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'EDU105',
                'subject' => 'CIENCIAS NATURALES',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en matemática orientada a la educación secundaria',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'EDU202',
                'subject' => 'LIDERAZGO EDUCATIVO',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en matemática orientada a la educación secundaria',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'ENG005',
                'subject' => 'INGLES V',
                'credits' => '0',
                'pre_requirements' => 'ENG004'
            ],
            [
                'career' => 'Licenciatura en matemática orientada a la educación secundaria',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'LMS121',
                'subject' => 'ALGEBRA SUPERIOR II',
                'credits' => '5',
                'pre_requirements' => 'LMS120'
            ],
            [
                'career' => 'Licenciatura en matemática orientada a la educación secundaria',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'LMS254',
                'subject' => 'PROBABILIDAD Y ESTADISTICA',
                'credits' => '4',
                'pre_requirements' => 'LMS120'
            ],
            [
                'career' => 'Licenciatura en matemática orientada a la educación secundaria',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'LMS301',
                'subject' => 'DIDACTICA DE LA MATEMATICA I',
                'credits' => '3',
                'pre_requirements' => 'EDU101'
            ],

            [
                'career' => 'Licenciatura en matemática orientada a la educación secundaria',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'EDU203',
                'subject' => 'ESCUELA, FAMILIA Y COMUNIDAD',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en matemática orientada a la educación secundaria',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'ENG006',
                'subject' => 'INGLES VI',
                'credits' => '0',
                'pre_requirements' => 'ENG005'
            ],
            [
                'career' => 'Licenciatura en matemática orientada a la educación secundaria',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'LMS135',
                'subject' => 'GEOMETRIA ANALITICA',
                'credits' => '4',
                'pre_requirements' => 'LMS121'
            ],
            [
                'career' => 'Licenciatura en matemática orientada a la educación secundaria',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'LMS231',
                'subject' => 'GEOMETRIA DEL ESPACIO',
                'credits' => '3',
                'pre_requirements' => 'LMS230'
            ],
            [
                'career' => 'Licenciatura en matemática orientada a la educación secundaria',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'LMS232',
                'subject' => 'TRIGONOMETRIA I',
                'credits' => '3',
                'pre_requirements' => 'LMS230'
            ],
            [
                'career' => 'Licenciatura en matemática orientada a la educación secundaria',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'LMS302',
                'subject' => 'DIDACTICA DE LA MATEMATICA II',
                'credits' => '3',
                'pre_requirements' => 'LMS301'
            ],
            [
                'career' => 'Licenciatura en matemática orientada a la educación secundaria',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'PRA002',
                'subject' => 'PRACTICA DOCENTE II',
                'credits' => '4',
                'pre_requirements' => 'EDU110, PRA001'
            ],

            [
                'career' => 'Licenciatura en matemática orientada a la educación secundaria',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'ART010',
                'subject' => 'BELLAS ARTES',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Licenciatura en matemática orientada a la educación secundaria',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'ENG007',
                'subject' => 'INGLES VII',
                'credits' => '0',
                'pre_requirements' => 'ENG006'
            ],
            [
                'career' => 'Licenciatura en matemática orientada a la educación secundaria',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'LMS223',
                'subject' => 'ALGEBRA LINEAL',
                'credits' => '4',
                'pre_requirements' => 'LMS121'
            ],
            [
                'career' => 'Licenciatura en matemática orientada a la educación secundaria',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'LMS233',
                'subject' => 'TRIGONOMETRIA II',
                'credits' => '3',
                'pre_requirements' => 'LMS232'
            ],
            [
                'career' => 'Licenciatura en matemática orientada a la educación secundaria',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'LMS243',
                'subject' => 'FUNDAMENTOS MATEMATICA FINANCIERA',
                'credits' => '3',
                'pre_requirements' => 'LMS121'
            ],
            [
                'career' => 'Licenciatura en matemática orientada a la educación secundaria',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'LMS281',
                'subject' => 'ANALISIS MATEMATICO I',
                'credits' => '5',
                'pre_requirements' => 'LMS121'
            ],
            [
                'career' => 'Licenciatura en matemática orientada a la educación secundaria',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'SOC012',
                'subject' => 'VISION CRITICA DE LA HISTORIA DOMINICANA',
                'credits' => '3',
                'pre_requirements' => ''
            ],

            [
                'career' => 'Licenciatura en matemática orientada a la educación secundaria',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'ENG008',
                'subject' => 'INGLES VIII',
                'credits' => '0',
                'pre_requirements' => 'ENG007'
            ],
            [
                'career' => 'Licenciatura en matemática orientada a la educación secundaria',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'LMS150',
                'subject' => 'MATEMATICA DISCRETA',
                'credits' => '3',
                'pre_requirements' => 'LMS223'
            ],
            [
                'career' => 'Licenciatura en matemática orientada a la educación secundaria',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'LMS220',
                'subject' => 'ALGEBRA ABSTRACTA',
                'credits' => '4',
                'pre_requirements' => 'LMS121'
            ],
            [
                'career' => 'Licenciatura en matemática orientada a la educación secundaria',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'LMS255',
                'subject' => 'INFERENCIA ESTADISTICA',
                'credits' => '4',
                'pre_requirements' => 'LMS254'
            ],
            [
                'career' => 'Licenciatura en matemática orientada a la educación secundaria',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'LMS282',
                'subject' => 'ANALISIS MATEMATICO II',
                'credits' => '5',
                'pre_requirements' => 'LMS281'
            ],
            [
                'career' => 'Licenciatura en matemática orientada a la educación secundaria',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'LMS511',
                'subject' => 'LAS TIC EN LA ENSEÑANZA DE LA MATEMATICA',
                'credits' => '3',
                'pre_requirements' => 'EDU200'
            ],

            [
                'career' => 'Licenciatura en matemática orientada a la educación secundaria',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'IDI200',
                'subject' => 'REDACCION EN INGLES',
                'credits' => '3',
                'pre_requirements' => 'ENG008'
            ],
            [
                'career' => 'Licenciatura en matemática orientada a la educación secundaria',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'LMS284',
                'subject' => 'ANALISIS MATEMATICO III',
                'credits' => '4',
                'pre_requirements' => 'LMS282'
            ],
            [
                'career' => 'Licenciatura en matemática orientada a la educación secundaria',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'LMS293',
                'subject' => 'ECUACIONES DIFERENCIALES AVANZADAS',
                'credits' => '5',
                'pre_requirements' => 'LMS282'
            ],
            [
                'career' => 'Licenciatura en matemática orientada a la educación secundaria',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'PRA003',
                'subject' => 'PRACTICA DOCENTE III',
                'credits' => '5',
                'pre_requirements' => 'LMS301, PRA002'
            ],

            [
                'career' => 'Licenciatura en matemática orientada a la educación secundaria',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'LMS283',
                'subject' => 'FUNDAMENTOS DEL CALCULO VECTORIAL',
                'credits' => '4',
                'pre_requirements' => 'LMS223, LMS282'
            ],
            [
                'career' => 'Licenciatura en matemática orientada a la educación secundaria',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'LMS285',
                'subject' => 'ANALISIS NUMERICO',
                'credits' => '4',
                'pre_requirements' => 'LMS293'
            ],
            [
                'career' => 'Licenciatura en matemática orientada a la educación secundaria',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'LMS363',
                'subject' => 'VARIABLES COMPLEJAS',
                'credits' => '4',
                'pre_requirements' => 'LMS282'
            ],
            [
                'career' => 'Licenciatura en matemática orientada a la educación secundaria',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'PRA004',
                'subject' => 'PRACTICA DOCENTE IV',
                'credits' => '5',
                'pre_requirements' => 'PRA003'
            ],

            [
                'career' => 'Licenciatura en matemática orientada a la educación secundaria',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'PAS700',
                'subject' => 'PASANTIA',
                'credits' => '0',
                'pre_requirements' => 'PRA004 75% De los créditos aprobados'
            ],
            [
                'career' => 'Licenciatura en matemática orientada a la educación secundaria',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'SOC281',
                'subject' => 'SEMINARIO DE GRADO',
                'credits' => '3',
                'pre_requirements' => '80% De los créditos aprobados'
            ],

            [
                'career' => 'Licenciatura en matemática orientada a la educación secundaria',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'TES-MON',
                'subject' => 'TRABAJO DE GRADO O CURSO MONOGRAFICO',
                'credits' => '6',
                'pre_requirements' => '92% De los créditos aprobados'
            ],
            [
                'career' => 'Licenciatura en matemática orientada a la educación secundaria',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'OPTDEP',
                'subject' => 'OPTATIVA DEPORTE',
                'credits' => '0',
                'pre_requirements' => ''
            ]
        ];


        $MER10_pensum = [
            [
                'career' => 'Pensum antiguo: MER10',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'ADM091',
                'subject' => 'ADMINISTRACION I',
                'credits' => '3',
                'pre_requirements' => '',

            ],
            [
                'career' => 'Pensum antiguo: MER10',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'CON091',
                'subject' => 'CONTABILIDAD I',
                'credits' => '5',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: MER10',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'ESP101',
                'subject' => 'ANALISIS DE TEXTOS DISCURSIVOS',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: MER10',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'MAT100',
                'subject' => 'MATEMATICA PRE-UNIVERSITARIA',
                'credits' => '0',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: MER10',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'MER101',
                'subject' => 'MERCADOTECNIA I',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: MER10',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'SOC030',
                'subject' => 'ORIENTACION UNIVERSITARIA',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: MER10',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'SOC043',
                'subject' => 'GESTION AMBIENTAL',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: MER10',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'SOC290',
                'subject' => 'ECONOMIA GENERAL',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: MER10',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'ENG001',
                'subject' => 'INGLES I',
                'credits' => '0',
                'pre_requirements' => ''
            ],

            [
                'career' => 'Pensum antiguo: MER10',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'ADM092',
                'subject' => 'ADMINISTRACION II',
                'credits' => '3',
                'pre_requirements' => 'ADM091',

            ],
            [
                'career' => 'Pensum antiguo: MER10',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'ADM120',
                'subject' => 'LIDERAZGO Y TECNICAS DE SUPERVISION',
                'credits' => '3',
                'pre_requirements' => 'ADM091'
            ],
            [
                'career' => 'Pensum antiguo: MER10',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'ESP102',
                'subject' => 'REDACCION DE TEXTOS DISCURSIVOS I',
                'credits' => '4',
                'pre_requirements' => 'ESP101'
            ],
            [
                'career' => 'Pensum antiguo: MER10',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'MAT121',
                'subject' => 'ALGEBRA UNIVERSITARIA',
                'credits' => '4',
                'pre_requirements' => 'MAT100'
            ],
            [
                'career' => 'Pensum antiguo: MER10',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'SOC011',
                'subject' => 'HISTORIA SOCIAL DOMINICANA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: MER10',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'ENG002',
                'subject' => 'INGLES II',
                'credits' => '0',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: MER10',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'ESP103',
                'subject' => 'REDACCION TEXTOS DISCURSIVOS II',
                'credits' => '4',
                'pre_requirements' => 'ESP102',

            ],
            [
                'career' => 'Pensum antiguo: MER10',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'MAT131',
                'subject' => 'CALCULO Y GEOMETRIA ANALITICA I',
                'credits' => '5',
                'pre_requirements' => 'MAT121'
            ],
            [
                'career' => 'Pensum antiguo: MER10',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'SOC101',
                'subject' => 'INTRODUCCION A LA PSICOLOGIA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: MER10',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'SOC200',
                'subject' => 'INTRODUCCION A LA SOCIOLOGIA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: MER10',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'SOC250',
                'subject' => 'METODOLOGIA DE LA INVESTIGACION CIENTIFICA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: MER10',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'ENG003',
                'subject' => 'INGLES III',
                'credits' => '0',
                'pre_requirements' => 'ENG002'
            ],
            [
                'career' => 'Pensum antiguo: MER10',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'ADM535',
                'subject' => 'ACTITUD EMPRENDEDORA',
                'credits' => '3',
                'pre_requirements' => 'SOC101'
            ],
            [
                'career' => 'Pensum antiguo: MER10',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'CON219',
                'subject' => 'COSTOS PRODUCTOS Y SERVICIOS I',
                'credits' => '5',
                'pre_requirements' => 'CON091'
            ],
            [
                'career' => 'Pensum antiguo: MER10',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'ESP301',
                'subject' => 'EXPRESION ORAL',
                'credits' => '3',
                'pre_requirements' => 'ESP103'
            ],
            [
                'career' => 'Pensum antiguo: MER10',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'MAT241',
                'subject' => 'MATEMATICA FINANCIERA I',
                'credits' => '4',
                'pre_requirements' => 'MAT131'
            ],
            [
                'career' => 'Pensum antiguo: MER10',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'MAT250',
                'subject' => 'ESTADISTICA I',
                'credits' => '4',
                'pre_requirements' => 'MAT131'
            ],
            [
                'career' => 'Pensum antiguo: MER10',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'ENG004',
                'subject' => 'INGLES IV',
                'credits' => '0',
                'pre_requirements' => 'ENG003'
            ],
            [
                'career' => 'Pensum antiguo: MER10',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'ADM124',
                'subject' => 'GESTION DEL TALENTO HUMANO',
                'credits' => '4',
                'pre_requirements' => 'ADM092',

            ],
            [
                'career' => 'Pensum antiguo: MER10',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'ADM140',
                'subject' => 'ADMINISTRACION FINANCIERA I',
                'credits' => '3',
                'pre_requirements' => 'MAT241'
            ],
            [
                'career' => 'Pensum antiguo: MER10',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'MAT251',
                'subject' => 'ESTADISTICA II',
                'credits' => '4',
                'pre_requirements' => 'MAT250'
            ],
            [
                'career' => 'Pensum antiguo: MER10',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'MER102',
                'subject' => 'MERCADOTECNIA II',
                'credits' => '3',
                'pre_requirements' => 'CON219, MER101'
            ],
            [
                'career' => 'Pensum antiguo: MER10',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'MER162',
                'subject' => 'INVESTIGACION DE MERCADO I',
                'credits' => '3',
                'pre_requirements' => 'MAT250'
            ],
            [
                'career' => 'Pensum antiguo: MER10',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'ENG005',
                'subject' => 'INGLES V',
                'credits' => '0',
                'pre_requirements' => 'ENG004'
            ],

            [
                'career' => 'Pensum antiguo: MER10',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'ART161',
                'subject' => 'PUBLICIDAD I',
                'credits' => '3',
                'pre_requirements' => '',

            ],
            [
                'career' => 'Pensum antiguo: MER10',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'DER011',
                'subject' => 'DERECHO COMERCIAL',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: MER10',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'MER140',
                'subject' => 'ADMINISTRACION DE VENTAS I',
                'credits' => '3',
                'pre_requirements' => 'MER102'
            ],
            [
                'career' => 'Pensum antiguo: MER10',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'MER163',
                'subject' => 'INVESTIGACION DE MERCADO II',
                'credits' => '3',
                'pre_requirements' => 'MER162'
            ],
            [
                'career' => 'Pensum antiguo: MER10',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'MER426',
                'subject' => 'POLITICA Y ESTRATEGIA DE PRECIO',
                'credits' => '2',
                'pre_requirements' => 'MER102'
            ],
            [
                'career' => 'Pensum antiguo: MER10',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'ENG006',
                'subject' => 'INGLES VI',
                'credits' => '0',
                'pre_requirements' => 'ENG005'
            ],
            [
                'career' => 'Pensum antiguo: MER10',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'ART162',
                'subject' => 'PUBLICIDAD II',
                'credits' => '3',
                'pre_requirements' => 'ART161'
            ],
            [
                'career' => 'Pensum antiguo: MER10',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'MER120',
                'subject' => 'MERCADOTECNIA INTERNACIONAL',
                'credits' => '4',
                'pre_requirements' => 'MER426'
            ],
            [
                'career' => 'Pensum antiguo: MER10',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'MER141',
                'subject' => 'ADMINISTRACION DE VENTAS II',
                'credits' => '3',
                'pre_requirements' => 'MER140'
            ],
            [
                'career' => 'Pensum antiguo: MER10',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'MER233',
                'subject' => 'SISTEMA CANALES DE DISTRIBUCION',
                'credits' => '3',
                'pre_requirements' => 'MER102'
            ],
            [
                'career' => 'Pensum antiguo: MER10',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'NEG105',
                'subject' => 'LOGISTICA Y CADENA DE SUMINISTROS',
                'credits' => '3',
                'pre_requirements' => 'MER140'
            ],
            [
                'career' => 'Pensum antiguo: MER10',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'ENG007',
                'subject' => 'INGLES VII',
                'credits' => '0',
                'pre_requirements' => 'ENG006'
            ],
            [
                'career' => 'Pensum antiguo: MER10',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'ADM219',
                'subject' => 'FORMULAC.Y EVAL. DE PROYECTOS',
                'credits' => '3',
                'pre_requirements' => 'ADM140'
            ],
            [
                'career' => 'Pensum antiguo: MER10',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'ART180',
                'subject' => 'CREATIVIDAD',
                'credits' => '3',
                'pre_requirements' => 'ART162'
            ],
            [
                'career' => 'Pensum antiguo: MER10',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'MER170',
                'subject' => 'PRESUPUESTO Y PRONOSTICO VENTAS',
                'credits' => '3',
                'pre_requirements' => 'MER141'
            ],
            [
                'career' => 'Pensum antiguo: MER10',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'MER429',
                'subject' => 'PLANEACION DE ESTRATEGIAS GENERALES',
                'credits' => '3',
                'pre_requirements' => 'MER163, MER233'
            ],
            [
                'career' => 'Pensum antiguo: MER10',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'NEG129',
                'subject' => 'OPERACIONES DE IMPORTACION Y EXPORTACION',
                'credits' => '3',
                'pre_requirements' => 'NEG105'
            ],
            [
                'career' => 'Pensum antiguo: MER10',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'SOC031',
                'subject' => 'ETICA PROFESIONAL',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: MER10',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'SOC160',
                'subject' => 'RELACIONES PUBLICAS',
                'credits' => '3',
                'pre_requirements' => 'MER102'
            ],
            [
                'career' => 'Pensum antiguo: MER10',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'ENG008',
                'subject' => 'INGLES VIII',
                'credits' => '0',
                'pre_requirements' => 'ENG007'
            ],

            [
                'career' => 'Pensum antiguo: MER10',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'MER180',
                'subject' => 'PROMOCION DE VENTAS',
                'credits' => '3',
                'pre_requirements' => 'MER170, SOC160'
            ],
            [
                'career' => 'Pensum antiguo: MER10',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'MER217',
                'subject' => 'SEMINARIO DESARROLLO LANZAMIENTO DE PRODUCTOS',
                'credits' => '4',
                'pre_requirements' => 'MER163, MER170'
            ],
            [
                'career' => 'Pensum antiguo: MER10',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'MER225',
                'subject' => 'MERCADOTECNIA DE SERVICIOS',
                'credits' => '3',
                'pre_requirements' => 'MER102'
            ],
            [
                'career' => 'Pensum antiguo: MER10',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'MER430',
                'subject' => 'MARKETING SOCIAL',
                'credits' => '3',
                'pre_requirements' => 'MER233'
            ],
            [
                'career' => 'Pensum antiguo: MER10',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'MER432',
                'subject' => 'COMPORTAMIENTO DEL CONSUMIDOR',
                'credits' => '3',
                'pre_requirements' => 'SOC101'
            ],
            [
                'career' => 'Pensum antiguo: MER10',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'ADM175',
                'subject' => 'CREACION Y GERENCIA DE PYME',
                'credits' => '3',
                'pre_requirements' => 'ADM219'
            ],
            [
                'career' => 'Pensum antiguo: MER10',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'IDI070',
                'subject' => 'INGLES TECNICO PARA NEGOCIOS I',
                'credits' => '3',
                'pre_requirements' => 'ENG008'
            ],
            [
                'career' => 'Pensum antiguo: MER10',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'MER300',
                'subject' => 'GERENCIA DE MARCA',
                'credits' => '3',
                'pre_requirements' => 'MER217'
            ],
            [
                'career' => 'Pensum antiguo: MER10',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'MER436',
                'subject' => 'E-BUSINESS',
                'credits' => '2',
                'pre_requirements' => 'MER180'
            ],
            [
                'career' => 'Pensum antiguo: MER10',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'SOC281',
                'subject' => 'SEMINARIO DE GRADO',
                'credits' => '3',
                'pre_requirements' => '80% De los subjectaprobados'
            ],
            [
                'career' => 'Pensum antiguo: MER10',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'MER413',
                'subject' => 'SIMULACION DINAMICA DE MERCADOTECNIA',
                'credits' => '3',
                'pre_requirements' => 'MER120, MER436'
            ],
            [
                'career' => 'Pensum antiguo: MER10',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'MER423',
                'subject' => 'MARKETING RELACIONAL',
                'credits' => '2',
                'pre_requirements' => 'MER102'
            ],
            [
                'career' => 'Pensum antiguo: MER10',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'MER434',
                'subject' => 'TRADE MARKETING',
                'credits' => '3',
                'pre_requirements' => 'MER180, MER233'
            ],
            [
                'career' => 'Pensum antiguo: MER10',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'MER438',
                'subject' => 'SEMINARIO PLAN DE MARKETING',
                'credits' => '4',
                'pre_requirements' => 'MER217, MER429'
            ],
            [
                'career' => 'Pensum antiguo: MER10',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'IDI071',
                'subject' => 'INGLES TECNICO PARA NEGOCIOS II',
                'credits' => '3',
                'pre_requirements' => 'IDI070'
            ],

            [
                'career' => 'Pensum antiguo: MER10',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'OPTDEP',
                'subject' => 'OPTATIVA DEPORTE',
                'credits' => '0',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: MER10',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'PAS510',
                'subject' => 'PASANTIA EMPRESARIAL DE MERCADOTECNIA',
                'credits' => '0',
                'pre_requirements' => '75% De los Créditos aprobados'
            ],
            [
                'career' => 'Pensum antiguo: MER10',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'TES-MON',
                'subject' => 'TRABAJO DE GRADO O CURSO MONOGRAFICO',
                'credits' => '6',
                'pre_requirements' => '85% De los subjectaprobados'
            ]
        ];

        $MER11_pensum = [
            [
                'career' => 'Pensum actual: MER11',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'SOC030',
                'subject' => 'ORIENTACION UNIVERSITARIA',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: MER11',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'SOC011',
                'subject' => 'HISTORIA SOCIAL DOMINICANA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: MER11',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'SOC043',
                'subject' => 'GESTION AMBIENTAL',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: MER11',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'MAT010',
                'subject' => 'MATEMATICA BASICA UNIVERSITARIA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: MER11',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'ESP101',
                'subject' => 'ANALISIS DE TEXTOS DISCURSIVOS',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: MER11',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'INF005',
                'subject' => 'INFORMATICA APLICADA A LOS NEGOCIOS',
                'credits' => '5',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: MER11',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'ENG000',
                'subject' => 'FUNDAMENTOS DE INGLES (I Y II)',
                'credits' => '0',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: MER11',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'SOC013',
                'subject' => 'FILOSOFIA',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: MER11',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'SOC101',
                'subject' => 'INTRODUCCION A LA PSICOLOGIA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: MER11',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'MAT121',
                'subject' => 'ALGEBRA UNIVERSITARIA',
                'credits' => '4',
                'pre_requirements' => 'MAT010'
            ],
            [
                'career' => 'Pensum actual: MER11',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'ESP106',
                'subject' => 'REDACCION DE TEXTOS DISCURSIVOS I',
                'credits' => '3',
                'pre_requirements' => 'ESP101'
            ],
            [
                'career' => 'Pensum actual: MER11',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'ADM103',
                'subject' => 'FUNDAMENTOS DE ADMINISTRACION',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: MER11',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'CON091',
                'subject' => 'CONTABILIDAD I',
                'credits' => '5',
                'pre_requirements' => 'INF005, MAT010'
            ],
            [
                'career' => 'Pensum actual: MER11',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'ENG003',
                'subject' => 'INGLES III',
                'credits' => '0',
                'pre_requirements' => 'ENG000'
            ],

            [
                'career' => 'Pensum actual: MER11',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'SOC200',
                'subject' => 'INTRODUCCION A LA SOCIOLOGIA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: MER11',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'MAT131',
                'subject' => 'CALCULO Y GEOMETRIA ANALITICA I',
                'credits' => '5',
                'pre_requirements' => 'MAT121'
            ],
            [
                'career' => 'Pensum actual: MER11',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'ESP107',
                'subject' => 'REDACCION DE TEXTOS DISCURSIVOS II',
                'credits' => '3',
                'pre_requirements' => 'ESP106'
            ],
            [
                'career' => 'Pensum actual: MER11',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'CON219',
                'subject' => 'COSTOS PRODUCTOS Y SERVICIOS I',
                'credits' => '5',
                'pre_requirements' => 'CON091'
            ],
            [
                'career' => 'Pensum actual: MER11',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'MER101',
                'subject' => 'MERCADOTECNIA I',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: MER11',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'ENG004',
                'subject' => 'INGLES IV',
                'credits' => '0',
                'pre_requirements' => 'ENG003'
            ],

            [
                'career' => 'Pensum actual: MER11',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'SOC253',
                'subject' => 'METODOLOGIA Y TECNICAS DE INVESTIGACION',
                'credits' => '4',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: MER11',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'SOC031',
                'subject' => 'ETICA PROFESIONAL',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: MER11',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'MAT241',
                'subject' => 'MATEMATICA FINANCIERA I',
                'credits' => '4',
                'pre_requirements' => 'MAT131'
            ],
            [
                'career' => 'Pensum actual: MER11',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'ECO101',
                'subject' => 'ECONOMIA I',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: MER11',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'MER432',
                'subject' => 'COMPORTAMIENTO DEL CONSUMIDOR',
                'credits' => '3',
                'pre_requirements' => 'SOC101'
            ],
            [
                'career' => 'Pensum actual: MER11',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'MER102',
                'subject' => 'MERCADOTECNIA II',
                'credits' => '3',
                'pre_requirements' => 'MER101'
            ],
            [
                'career' => 'Pensum actual: MER11',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'ENG005',
                'subject' => 'INGLES V',
                'credits' => '0',
                'pre_requirements' => 'ENG004'
            ],

            [
                'career' => 'Pensum actual: MER11',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'MAT250',
                'subject' => 'ESTADISTICA I',
                'credits' => '4',
                'pre_requirements' => 'MAT131'
            ],
            [
                'career' => 'Pensum actual: MER11',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'ADM535',
                'subject' => 'ACTITUD EMPRENDEDORA',
                'credits' => '3',
                'pre_requirements' => 'SOC101'
            ],
            [
                'career' => 'Pensum actual: MER11',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'ECO102',
                'subject' => 'ECONOMIA II',
                'credits' => '3',
                'pre_requirements' => 'ECO101'
            ],
            [
                'career' => 'Pensum actual: MER11',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'DER011',
                'subject' => 'DERECHO COMERCIAL',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: MER11',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'MER320',
                'subject' => 'ESTRATEGIA DE PRECIOS',
                'credits' => '2',
                'pre_requirements' => 'MER102'
            ],
            [
                'career' => 'Pensum actual: MER11',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'FIN101',
                'subject' => 'FINANZAS I',
                'credits' => '3',
                'pre_requirements' => 'CON091, MAT241'
            ],
            [
                'career' => 'Pensum actual: MER11',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'ENG006',
                'subject' => 'INGLES VI',
                'credits' => '0',
                'pre_requirements' => 'ENG005'
            ],

            [
                'career' => 'Pensum actual: MER11',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'MAT251',
                'subject' => 'ESTADISTICA II',
                'credits' => '4',
                'pre_requirements' => 'MAT250'
            ],
            [
                'career' => 'Pensum actual: MER11',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'ADM540',
                'subject' => 'LIDERAZGO Y HABILIDADES DIRECTIVAS',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: MER11',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'ADM130',
                'subject' => 'PRESUPUESTO EMPRESARIAL',
                'credits' => '3',
                'pre_requirements' => 'MAT250'
            ],
            [
                'career' => 'Pensum actual: MER11',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'MER321',
                'subject' => 'ADMINISTRACION DE VENTAS',
                'credits' => '4',
                'pre_requirements' => 'MER320'
            ],
            [
                'career' => 'Pensum actual: MER11',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'INF311',
                'subject' => 'INTELIGENCIA DE NEGOCIOS',
                'credits' => '3',
                'pre_requirements' => 'INF005, MAT250'
            ],
            [
                'career' => 'Pensum actual: MER11',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'IDI080',
                'subject' => 'INGLES PARA NEGOCIOS I',
                'credits' => '3',
                'pre_requirements' => 'ENG006'
            ],

            [
                'career' => 'Pensum actual: MER11',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'ADM151',
                'subject' => 'SEMINARIO PROYECTO DE NEGOCIOS',
                'credits' => '2',
                'pre_requirements' => '50% De los créditos aprobados'
            ],
            [
                'career' => 'Pensum actual: MER11',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'ART210',
                'subject' => 'PENSAMIENTO CREATIVO',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: MER11',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'ART452',
                'subject' => 'FUNDAMENTOS DE PUBLICIDAD Y RELACIONES PUBLICAS',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: MER11',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'MER234',
                'subject' => 'CANALES DE DISTRIBUCION',
                'credits' => '3',
                'pre_requirements' => 'MER321'
            ],
            [
                'career' => 'Pensum actual: MER11',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'EMER 1',
                'subject' => 'ELECTIVA I',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: MER11',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'IDI081',
                'subject' => 'INGLES PARA NEGOCIOS II',
                'credits' => '3',
                'pre_requirements' => 'IDI080'
            ],

            [
                'career' => 'Pensum actual: MER11',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'ART161',
                'subject' => 'PUBLICIDAD I',
                'credits' => '3',
                'pre_requirements' => 'ART452'
            ],
            [
                'career' => 'Pensum actual: MER11',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'MER147',
                'subject' => 'MERCADOTECNIA INTERNACIONAL',
                'credits' => '3',
                'pre_requirements' => 'ADM151'
            ],
            [
                'career' => 'Pensum actual: MER11',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'ADM104',
                'subject' => 'COMPORTAMIENTO ORGANIZACIONAL',
                'credits' => '3',
                'pre_requirements' => 'ADM540'
            ],
            [
                'career' => 'Pensum actual: MER11',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'MER436',
                'subject' => 'E-BUSINESS',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: MER11',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'EMER 2',
                'subject' => 'ELECTIVA II',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: MER11',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'IDI082',
                'subject' => 'INGLES PARA NEGOCIOS III',
                'credits' => '3',
                'pre_requirements' => 'IDI081'
            ],

            [
                'career' => 'Pensum actual: MER11',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'MER180',
                'subject' => 'PROMOCION DE VENTAS',
                'credits' => '3',
                'pre_requirements' => 'MER234'
            ],
            [
                'career' => 'Pensum actual: MER11',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'MER435',
                'subject' => 'TRADE MARKETING Y TECNICAS DE MERCHANDISING',
                'credits' => '2',
                'pre_requirements' => 'MER234'
            ],
            [
                'career' => 'Pensum actual: MER11',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'MER437',
                'subject' => 'MARKETING DIGITAL',
                'credits' => '3',
                'pre_requirements' => 'MER436'
            ],
            [
                'career' => 'Pensum actual: MER11',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'MER439',
                'subject' => 'INVESTIGACION DE MERCADOS',
                'credits' => '4',
                'pre_requirements' => 'INF311, SOC253'
            ],
            [
                'career' => 'Pensum actual: MER11',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'EMER 3',
                'subject' => 'ELECTIVA III',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: MER11',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'IDI083',
                'subject' => 'INGLES PARA NEGOCIOS IV',
                'credits' => '3',
                'pre_requirements' => 'IDI082'
            ],
            [
                'career' => 'Pensum actual: MER11',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'PAS510',
                'subject' => 'PASANTIA EMPRESARIAL DE MERCADOTECNIA',
                'credits' => '0',
                'pre_requirements' => '75% De los créditos aprobados'
            ],

            [
                'career' => 'Pensum actual: MER11',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'MER440',
                'subject' => 'MERCADOTECNIA RELACIONAL-SOCIAL',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: MER11',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'MER441',
                'subject' => 'DESARROLLO Y LANZAMIENTO DE NUEVOS PRODUCTOS',
                'credits' => '3',
                'pre_requirements' => 'MER180'
            ],
            [
                'career' => 'Pensum actual: MER11',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'MER442',
                'subject' => 'REDES SOCIALES Y MARKETING DE CONTENIDO',
                'credits' => '2',
                'pre_requirements' => 'MER437'
            ],
            [
                'career' => 'Pensum actual: MER11',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'IDI084',
                'subject' => 'INGLES PARA NEGOCIOS V',
                'credits' => '3',
                'pre_requirements' => 'IDI083'
            ],
            [
                'career' => 'Pensum actual: MER11',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'SOC281',
                'subject' => 'SEMINARIO DE GRADO',
                'credits' => '3',
                'pre_requirements' => 'SOC253 80% De los créditos aprobados'
            ],

            [
                'career' => 'Pensum actual: MER11',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'MER300',
                'subject' => 'GERENCIA DE MARCA',
                'credits' => '3',
                'pre_requirements' => 'MER441'
            ],
            [
                'career' => 'Pensum actual: MER11',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'MER443',
                'subject' => 'SEMINARIO PLAN DE MARKETING ESTRATEGICO',
                'credits' => '3',
                'pre_requirements' => 'MER441'
            ],
            [
                'career' => 'Pensum actual: MER11',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'MER444',
                'subject' => 'SEMINARIO INTEGRADOR DE MERCADOTECNIA',
                'credits' => '3',
                'pre_requirements' => 'MER441'
            ],
            [
                'career' => 'Pensum actual: MER11',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'IDI085',
                'subject' => 'INGLES PARA NEGOCIOS VI',
                'credits' => '3',
                'pre_requirements' => 'IDI084'
            ],

            [
                'career' => 'Pensum actual: MER11',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'TFG100',
                'subject' => 'TRABAJO FINAL DE GRADO',
                'credits' => '6',
                'pre_requirements' => 'SOC281 92% De los créditos aprobados'
            ],
            [
                'career' => 'Pensum actual: MER11',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'OPTDEP',
                'subject' => 'OPTATIVA DEPORTE',
                'credits' => '0',
                'pre_requirements' => ''
            ]

        ];

        $NIN7_pensum = [
            [
                'career' => 'Pensum antiguo: NIN7',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'ADM101',
                'subject' => 'GESTION DE NEGOCIOS',
                'credits' => '3',
                'pre_requirements' => '',

            ],
            [
                'career' => 'Pensum antiguo: NIN7',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'CON101',
                'subject' => 'CONTABILIDAD-LABORATORIO I',
                'credits' => '5',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: NIN7',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'ESP101',
                'subject' => 'ANALISIS DE TEXTOS DISCURSIVOS',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: NIN7',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'IDI060',
                'subject' => 'INGLES I',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: NIN7',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'MAT126',
                'subject' => 'MATEMATICA BASICA PARA INGENIERIA',
                'credits' => '4',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: NIN7',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'MER101',
                'subject' => 'MERCADOTECNIA I',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: NIN7',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'SOC030',
                'subject' => 'ORIENTACION UNIVERSITARIA',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: NIN7',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'CON102',
                'subject' => 'CONTABILIDAD - LABORATORIO II',
                'credits' => '5',
                'pre_requirements' => 'CON101',

            ],
            [
                'career' => 'Pensum antiguo: NIN7',
                'quarter' => '2°. Cuatrimestre',
                'code'  => 'ESP102',
                'subject' => 'REDACCION DE TEXTOS DISCURSIVOS I',
                'credits' => '4',
                'pre_requirements' => 'ESP101'
            ],
            [
                'career' => 'Pensum antiguo: NIN7',
                'quarter' => '2°. Cuatrimestre',
                'code'  => 'IDI061',
                'subject' => 'INGLES II',
                'credits' => '3',
                'pre_requirements' => 'IDI060'
            ],
            [
                'career' => 'Pensum antiguo: NIN7',
                'quarter' => '2°. Cuatrimestre',
                'code'  => 'SOC011',
                'subject' => 'HISTORIA SOCIAL DOMINICANA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: NIN7',
                'quarter' => '2°. Cuatrimestre',
                'code'  => 'SOC291',
                'subject' => 'ECONOMIA I',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: NIN7',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'ADM120',
                'subject' => 'LIDERAZGO Y TECNICAS DE SUPERVISION',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: NIN7',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'DER011',
                'subject' => 'DERECHO COMERCIAL',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: NIN7',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'IDI062',
                'subject' => 'INGLES III',
                'credits' => '3',
                'pre_requirements' => 'IDI061'
            ],
            [
                'career' => 'Pensum antiguo: NIN7',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'MAT131',
                'subject' => 'CALCULO Y GEOMETRIA ANALITICA I',
                'credits' => '5',
                'pre_requirements' => 'MAT126'
            ],
            [
                'career' => 'Pensum antiguo: NIN7',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'NEG101',
                'subject' => 'INTRODUCCION A LOS NEGOCIOS',
                'credits' => '3',
                'pre_requirements' => 'ADM101'
            ],
            [
                'career' => 'Pensum antiguo: NIN7',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'SOC250',
                'subject' => 'METODOLOGIA DE LA INVESTIGACION CIENTIFICA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: NIN7',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'DER181',
                'subject' => 'DERECHO INTERNACIONAL PRIVADO',
                'credits' => '4',
                'pre_requirements' => 'DER011'
            ],
            [
                'career' => 'Pensum antiguo: NIN7',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'ESP301',
                'subject' => 'EXPRESION ORAL',
                'credits' => '3',
                'pre_requirements' => 'ESP102'
            ],
            [
                'career' => 'Pensum antiguo: NIN7',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'IDI063',
                'subject' => 'INGLES IV',
                'credits' => '3',
                'pre_requirements' => 'IDI062'
            ],
            [
                'career' => 'Pensum antiguo: NIN7',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'MAT241',
                'subject' => 'MATEMATICA FINANCIERA I',
                'credits' => '4',
                'pre_requirements' => 'MAT131'
            ],
            [
                'career' => 'Pensum antiguo: NIN7',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'MAT250',
                'subject' => 'ESTADISTICA I',
                'credits' => '4',
                'pre_requirements' => 'MAT131'
            ],
            [
                'career' => 'Pensum antiguo: NIN7',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'ADM140',
                'subject' => 'ADMINISTRACION FINANCIERA I',
                'credits' => '3',
                'pre_requirements' => 'CON102, MAT241'
            ],
            [
                'career' => 'Pensum antiguo: NIN7',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'IDI064',
                'subject' => 'INGLES V',
                'credits' => '3',
                'pre_requirements' => 'IDI063'
            ],
            [
                'career' => 'Pensum antiguo: NIN7',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'MAT260',
                'subject' => 'MATEMATICA APLICADA',
                'credits' => '4',
                'pre_requirements' => 'MAT241'
            ],
            [
                'career' => 'Pensum antiguo: NIN7',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'MER140',
                'subject' => 'ADMINISTRACION DE VENTAS I',
                'credits' => '3',
                'pre_requirements' => 'MER101'
            ],
            [
                'career' => 'Pensum antiguo: NIN7',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'MER162',
                'subject' => 'INVESTIGACION DE MERCADO I',
                'credits' => '3',
                'pre_requirements' => 'SOC250'
            ],
            [
                'career' => 'Pensum antiguo: NIN7',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'ADM141',
                'subject' => 'ADMINISTRACION FINANCIERA II',
                'credits' => '3',
                'pre_requirements' => 'ADM140'
            ],
            [
                'career' => 'Pensum antiguo: NIN7',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'IDI065',
                'subject' => 'INGLES VI',
                'credits' => '3',
                'pre_requirements' => 'IDI064'
            ],
            [
                'career' => 'Pensum antiguo: NIN7',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'NEG105',
                'subject' => 'LOGISTICA Y CADENA DE SUMINISTROS',
                'credits' => '3',
                'pre_requirements' => 'MER140, NEG101'
            ],
            [
                'career' => 'Pensum antiguo: NIN7',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'NEG109',
                'subject' => 'INTEGRACION ECONOMICA',
                'credits' => '3',
                'pre_requirements' => 'ADM140'
            ],
            [
                'career' => 'Pensum antiguo: NIN7',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'SOC315',
                'subject' => 'GESTION SOCIAL',
                'credits' => '2',
                'pre_requirements' => 'ADM120'
            ],
            [
                'career' => 'Pensum antiguo: NIN7',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'CON112',
                'subject' => 'FINANZAS INTERNACIONALES',
                'credits' => '3',
                'pre_requirements' => 'ADM141, CON102'
            ],
            [
                'career' => 'Pensum antiguo: NIN7',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'IDI066',
                'subject' => 'INGLES VII',
                'credits' => '3',
                'pre_requirements' => 'IDI065'
            ],
            [
                'career' => 'Pensum antiguo: NIN7',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'MER147',
                'subject' => 'MERCADOTECNIA INTERNACIONAL',
                'credits' => '3',
                'pre_requirements' => 'NEG105'
            ],
            [
                'career' => 'Pensum antiguo: NIN7',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'NEG113',
                'subject' => 'CONTRATOS INTERNACIONALES',
                'credits' => '3',
                'pre_requirements' => 'NEG109'
            ],
            [
                'career' => 'Pensum antiguo: NIN7',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'SOC325',
                'subject' => 'ECONOMIA INTERNACIONAL',
                'credits' => '3',
                'pre_requirements' => 'ADM141'
            ],
            [
                'career' => 'Pensum antiguo: NIN7',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'ADM219',
                'subject' => 'FORMULAC.Y EVAL. DE PROYECTOS',
                'credits' => '3',
                'pre_requirements' => 'ADM141, SOC291'
            ],
            [
                'career' => 'Pensum antiguo: NIN7',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'ADM221',
                'subject' => 'MONEDA Y BANCA',
                'credits' => '3',
                'pre_requirements' => 'SOC325'
            ],
            [
                'career' => 'Pensum antiguo: NIN7',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'IDI067',
                'subject' => 'INGLES VIII',
                'credits' => '3',
                'pre_requirements' => 'IDI066'
            ],
            [
                'career' => 'Pensum antiguo: NIN7',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'NEG121',
                'subject' => 'MERCADO DE VALORES',
                'credits' => '3',
                'pre_requirements' => 'ADM141, CON112'
            ],
            [
                'career' => 'Pensum antiguo: NIN7',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'NEG125',
                'subject' => 'ANALISIS OPORTUNIDADES NEGOCIOS MERCADOS EU, AMERICA LATINA Y EL CARIBE',
                'credits' => '3',
                'pre_requirements' => 'MER147, NEG109'
            ],
            [
                'career' => 'Pensum antiguo: NIN7',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'NEG129',
                'subject' => 'OPERACIONES DE IMPORTACION Y EXPORTACION',
                'credits' => '3',
                'pre_requirements' => 'MER147'
            ],
            [
                'career' => 'Pensum antiguo: NIN7',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'SOC033',
                'subject' => 'ETICA EN LOS NEGOCIOS',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: NIN7',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'ADM117',
                'subject' => 'GERENCIA DE SERVICIOS',
                'credits' => '3',
                'pre_requirements' => 'ADM120'
            ],
            [
                'career' => 'Pensum antiguo: NIN7',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'DER160',
                'subject' => 'DERECHO DE PROPIEDAD INDUSTRIAL',
                'credits' => '3',
                'pre_requirements' => 'DER181'
            ],
            [
                'career' => 'Pensum antiguo: NIN7',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'IDI070',
                'subject' => 'INGLES TECNICO PARA NEGOCIOS I',
                'credits' => '3',
                'pre_requirements' => 'IDI067'
            ],
            [
                'career' => 'Pensum antiguo: NIN7',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'NEG133',
                'subject' => 'NORMATIVA INTERNACIONAL SEGURIDAD, HIGIENE Y CALIDAD',
                'credits' => '3',
                'pre_requirements' => 'NEG129'
            ],
            [
                'career' => 'Pensum antiguo: NIN7',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'NEG137',
                'subject' => 'ANALISIS OPORTUNIDADES NEGOCIOS MERCADOS DE EUROPA',
                'credits' => '3',
                'pre_requirements' => 'NEG121, NEG129'
            ],
            [
                'career' => 'Pensum antiguo: NIN7',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'NEG141',
                'subject' => 'NEGOCIOS INTERNACIONALES I',
                'credits' => '3',
                'pre_requirements' => 'NEG101 60% De los credits aprobados'
            ],

            [
                'career' => 'Pensum antiguo: NIN7',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'IDI071',
                'subject' => 'INGLES TECNICO PARA NEGOCIOS II',
                'credits' => '3',
                'pre_requirements' => 'IDI070',

            ],
            [
                'career' => 'Pensum antiguo: NIN7',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'INF313',
                'subject' => 'SISTEMAS INFORMACION PARA LA ADMINISTRACION',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: NIN7',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'MER299',
                'subject' => 'ADMINISTRACION Y TECNICAS DE NEGOCIOS INMOBILIARIOS',
                'credits' => '2',
                'pre_requirements' => 'ADM141, ADM219'
            ],
            [
                'career' => 'Pensum antiguo: NIN7',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'NEG142',
                'subject' => 'NEGOCIOS INTERNACIONALES II',
                'credits' => '3',
                'pre_requirements' => 'NEG141'
            ],
            [
                'career' => 'Pensum antiguo: NIN7',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'NEG145',
                'subject' => 'ANALISIS OPORTUNIDADES NEGOCIOS MERCADOS ASIA, MEDIO ORIENTE Y AFRICA',
                'credits' => '3',
                'pre_requirements' => 'NEG129, NEG141'
            ],
            [
                'career' => 'Pensum antiguo: NIN7',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'SOC281',
                'subject' => 'SEMINARIO DE GRADO',
                'credits' => '3',
                'pre_requirements' => '80% De los credits aprobados'
            ],

            [
                'career' => 'Pensum antiguo: NIN7',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'ADM149',
                'subject' => 'COMERCIO ELECTRONICO',
                'credits' => '3',
                'pre_requirements' => 'INF313'
            ],
            [
                'career' => 'Pensum antiguo: NIN7',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'DER230',
                'subject' => 'ARBITRAJE INTERNACIONAL',
                'credits' => '3',
                'pre_requirements' => 'NEG113 65% De los credits aprobados'
            ],
            [
                'career' => 'Pensum antiguo: NIN7',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'NEG153',
                'subject' => 'SIMULACION DE NEGOCIOS MERCADOS INTERNACIONALES',
                'credits' => '5',
                'pre_requirements' => 'MER147, NEG142'
            ],
            [
                'career' => 'Pensum antiguo: NIN7',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'NEG157',
                'subject' => 'ESTRATEGIAS DE COMPETITIVIDAD INTERNACIONAL',
                'credits' => '3',
                'pre_requirements' => 'MER147, NEG142'
            ],
            [
                'career' => 'Pensum antiguo: NIN7',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'OPTDEP',
                'subject' => 'OPTATIVA DEPORTE',
                'credits' => '0',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: NIN7',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'PAS500',
                'subject' => 'PASANTIA EMPRESARIAL NEGOCIOS INTERNACIONALES',
                'credits' => '0',
                'pre_requirements' => '75% De los credits aprobados'
            ],
            [
                'career' => 'Pensum antiguo: NIN7',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'TES-MON',
                'subject' => 'TRABAJO DE GRADO O CURSO MONOGRAFICO',
                'credits' => '6',
                'pre_requirements' => '90% De los credits aprobados'
            ]
        ];

        $NIN11_pensum = [
            [
                'career' => 'Pensum actual: NIN11',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'ESP101',
                'subject' => 'ANALISIS DE TEXTOS DISCURSIVOS',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: NIN11',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'SOC030',
                'subject' => 'ORIENTACION UNIVERSITARIA',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: NIN11',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'SOC011',
                'subject' => 'HISTORIA SOCIAL DOMINICANA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: NIN11',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'INF005',
                'subject' => 'INFORMATICA APLICADA A LOS NEGOCIOS',
                'credits' => '5',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: NIN11',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'SOC043',
                'subject' => 'GESTION AMBIENTAL',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: NIN11',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'MAT010',
                'subject' => 'MATEMATICA BASICA UNIVERSITARIA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: NIN11',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'ENG000',
                'subject' => 'FUNDAMENTOS DE INGLES (I Y II)',
                'credits' => '0',
                'pre_requirements' => ''
            ],

            [
                'career' => 'Pensum actual: NIN11',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'SOC013',
                'subject' => 'FILOSOFIA',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: NIN11',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'SOC101',
                'subject' => 'INTRODUCCION A LA PSICOLOGIA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: NIN11',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'MAT121',
                'subject' => 'ALGEBRA UNIVERSITARIA',
                'credits' => '4',
                'pre_requirements' => 'MAT010'
            ],
            [
                'career' => 'Pensum actual: NIN11',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'ESP106',
                'subject' => 'REDACCION DE TEXTOS DISCURSIVOS I',
                'credits' => '3',
                'pre_requirements' => 'ESP101'
            ],
            [
                'career' => 'Pensum actual: NIN11',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'ADM103',
                'subject' => 'FUNDAMENTOS DE ADMINISTRACION',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: NIN11',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'CON091',
                'subject' => 'CONTABILIDAD I',
                'credits' => '5',
                'pre_requirements' => 'INF005, MAT010'
            ],
            [
                'career' => 'Pensum actual: NIN11',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'ENG003',
                'subject' => 'INGLES III',
                'credits' => '0',
                'pre_requirements' => 'ENG000'
            ],
            [
                'career' => 'Pensum actual: NIN11',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'SOC200',
                'subject' => 'INTRODUCCION A LA SOCIOLOGIA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: NIN11',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'MAT131',
                'subject' => 'CALCULO Y GEOMETRIA ANALITICA I',
                'credits' => '5',
                'pre_requirements' => 'MAT121'
            ],
            [
                'career' => 'Pensum actual: NIN11',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'ESP107',
                'subject' => 'REDACCION DE TEXTOS DISCURSIVOS II',
                'credits' => '3',
                'pre_requirements' => 'ESP106'
            ],
            [
                'career' => 'Pensum actual: NIN11',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'CON092',
                'subject' => 'CONTABILIDAD II',
                'credits' => '5',
                'pre_requirements' => 'CON091'
            ],
            [
                'career' => 'Pensum actual: NIN11',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'MER101',
                'subject' => 'MERCADOTECNIA I',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: NIN11',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'ENG004',
                'subject' => 'INGLES IV',
                'credits' => '0',
                'pre_requirements' => 'ENG003'
            ],
            [
                'career' => 'Pensum actual: NIN11',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'SOC253',
                'subject' => 'METODOLOGIA Y TECNICAS DE INVESTIGACION',
                'credits' => '4',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: NIN11',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'SOC031',
                'subject' => 'ETICA PROFESIONAL',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: NIN11',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'MAT241',
                'subject' => 'MATEMATICA FINANCIERA I',
                'credits' => '4',
                'pre_requirements' => 'MAT131'
            ],
            [
                'career' => 'Pensum actual: NIN11',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'ECO101',
                'subject' => 'ECONOMIA I',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: NIN11',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'NEG102',
                'subject' => 'INTRODUCCION A LOS NEGOCIOS INTERNACIONALES',
                'credits' => '3',
                'pre_requirements' => 'MER101'
            ],
            [
                'career' => 'Pensum actual: NIN11',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'ENG005',
                'subject' => 'INGLES V',
                'credits' => '0',
                'pre_requirements' => 'ENG004'
            ],
            [
                'career' => 'Pensum actual: NIN11',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'MAT260',
                'subject' => 'MATEMATICA APLICADA',
                'credits' => '4',
                'pre_requirements' => 'MAT241'
            ],
            [
                'career' => 'Pensum actual: NIN11',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'MAT250',
                'subject' => 'ESTADISTICA I',
                'credits' => '4',
                'pre_requirements' => 'MAT131'
            ],
            [
                'career' => 'Pensum actual: NIN11',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'ADM535',
                'subject' => 'ACTITUD EMPRENDEDORA',
                'credits' => '3',
                'pre_requirements' => 'SOC101'
            ],
            [
                'career' => 'Pensum actual: NIN11',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'ECO102',
                'subject' => 'ECONOMIA II',
                'credits' => '3',
                'pre_requirements' => 'ECO101'
            ],
            [
                'career' => 'Pensum actual: NIN11',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'NEG105',
                'subject' => 'LOGISTICA Y CADENA DE SUMINISTROS',
                'credits' => '3',
                'pre_requirements' => 'NEG102'
            ],
            [
                'career' => 'Pensum actual: NIN11',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'ENG006',
                'subject' => 'INGLES VI',
                'credits' => '0',
                'pre_requirements' => 'ENG005'
            ],

            [
                'career' => 'Pensum actual: NIN11',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'ADM540',
                'subject' => 'LIDERAZGO Y HABILIDADES DIRECTIVAS',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: NIN11',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'CON221',
                'subject' => 'FUNDAMENTOS DE COSTOS',
                'credits' => '4',
                'pre_requirements' => 'CON091'
            ],
            [
                'career' => 'Pensum actual: NIN11',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'FIN101',
                'subject' => 'FINANZAS I',
                'credits' => '3',
                'pre_requirements' => 'CON091, MAT241'
            ],
            [
                'career' => 'Pensum actual: NIN11',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'INF311',
                'subject' => 'INTELIGENCIA DE NEGOCIOS',
                'credits' => '3',
                'pre_requirements' => 'INF005, MAT250'
            ],
            [
                'career' => 'Pensum actual: NIN11',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'NEG109',
                'subject' => 'INTEGRACION ECONOMICA',
                'credits' => '3',
                'pre_requirements' => 'ECO102'
            ],
            [
                'career' => 'Pensum actual: NIN11',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'IDI080',
                'subject' => 'INGLES PARA NEGOCIOS I',
                'credits' => '3',
                'pre_requirements' => 'ENG006'
            ],
            [
                'career' => 'Pensum actual: NIN11',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'ADM151',
                'subject' => 'SEMINARIO PROYECTO DE NEGOCIOS',
                'credits' => '2',
                'pre_requirements' => '50% De los créditos aprobados'
            ],
            [
                'career' => 'Pensum actual: NIN11',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'DER011',
                'subject' => 'DERECHO COMERCIAL',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: NIN11',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'FIN102',
                'subject' => 'FINANZAS II',
                'credits' => '3',
                'pre_requirements' => 'FIN101'
            ],
            [
                'career' => 'Pensum actual: NIN11',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'NEG120',
                'subject' => 'INVESTIGACION DE MERCADOS INTERNACIONALES E INTELIGENCIA COMERCIAL',
                'credits' => '3',
                'pre_requirements' => 'INF311, SOC253'
            ],
            [
                'career' => 'Pensum actual: NIN11',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'NEG122',
                'subject' => 'GESTION DE ADUANAS',
                'credits' => '3',
                'pre_requirements' => 'NEG105'
            ],
            [
                'career' => 'Pensum actual: NIN11',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'IDI081',
                'subject' => 'INGLES PARA NEGOCIOS II',
                'credits' => '3',
                'pre_requirements' => 'IDI080'
            ],
            [
                'career' => 'Pensum actual: NIN11',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'CON112',
                'subject' => 'FINANZAS INTERNACIONALES',
                'credits' => '3',
                'pre_requirements' => 'ECO102, FIN102'
            ],
            [
                'career' => 'Pensum actual: NIN11',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'MER147',
                'subject' => 'MERCADOTECNIA INTERNACIONAL',
                'credits' => '3',
                'pre_requirements' => 'ADM151'
            ],
            [
                'career' => 'Pensum actual: NIN11',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'NEG126',
                'subject' => 'TECNICAS DE NEGOCIACION',
                'credits' => '3',
                'pre_requirements' => 'ADM540'
            ],
            [
                'career' => 'Pensum actual: NIN11',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'NEG129',
                'subject' => 'OPERACIONES DE IMPORTACION Y EXPORTACION',
                'credits' => '3',
                'pre_requirements' => 'NEG122'
            ],
            [
                'career' => 'Pensum actual: NIN11',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'ENIN I',
                'subject' => 'ELECTIVA I',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: NIN11',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'IDI082',
                'subject' => 'INGLES PARA NEGOCIOS III',
                'credits' => '3',
                'pre_requirements' => 'IDI081'
            ],

            [
                'career' => 'Pensum actual: NIN11',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'FIN140',
                'subject' => 'INVERSIONES INTERNACIONALES',
                'credits' => '3',
                'pre_requirements' => 'CON112'
            ],
            [
                'career' => 'Pensum actual: NIN11',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'ADM104',
                'subject' => 'COMPORTAMIENTO ORGANIZACIONAL',
                'credits' => '3',
                'pre_requirements' => 'ADM540'
            ],
            [
                'career' => 'Pensum actual: NIN11',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'NEG133',
                'subject' => 'NORMATIVA INTERNACIONAL SEGURIDAD, HIGIENE Y CALIDAD',
                'credits' => '3',
                'pre_requirements' => 'NEG129'
            ],
            [
                'career' => 'Pensum actual: NIN11',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'NEG140',
                'subject' => 'OPORTUNIDADES DE NEGOCIOS EN MERCADOS INTERNACIONALES',
                'credits' => '3',
                'pre_requirements' => 'NEG129'
            ],
            [
                'career' => 'Pensum actual: NIN11',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'ENIN II',
                'subject' => 'ELECTIVA II',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: NIN11',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'IDI083',
                'subject' => 'INGLES PARA NEGOCIOS IV',
                'credits' => '3',
                'pre_requirements' => 'IDI082'
            ],
            [
                'career' => 'Pensum actual: NIN11',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'PAS550',
                'subject' => 'PASANTIA EMPRESARIAL DE NEGOCIOS INTERNACIONALES',
                'credits' => '0',
                'pre_requirements' => '75% De los créditos aprobados'
            ],

            [
                'career' => 'Pensum actual: NIN11',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'SOC281',
                'subject' => 'SEMINARIO DE GRADO',
                'credits' => '3',
                'pre_requirements' => 'SOC253, 80% De los créditos aprobados'
            ],
            [
                'career' => 'Pensum actual: NIN11',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'DER120',
                'subject' => 'INTRODUCCION AL DERECHO INTERNACIONAL PUBLICO Y PRIVADO',
                'credits' => '4',
                'pre_requirements' => 'DER011'
            ],
            [
                'career' => 'Pensum actual: NIN11',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'NEG144',
                'subject' => 'ESTRATEGIAS DE INTERNACIONALIZACION DE EMPRESAS',
                'credits' => '3',
                'pre_requirements' => 'NEG140'
            ],
            [
                'career' => 'Pensum actual: NIN11',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'INF313',
                'subject' => 'SISTEMA INFORMACION PARA LA ADMINISTRACION',
                'credits' => '3',
                'pre_requirements' => 'INF005'
            ],
            [
                'career' => 'Pensum actual: NIN11',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'ENIN III',
                'subject' => 'ELECTIVA III',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: NIN11',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'IDI084',
                'subject' => 'INGLES PARA NEGOCIOS V',
                'credits' => '3',
                'pre_requirements' => 'IDI083'
            ],
            [
                'career' => 'Pensum actual: NIN11',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'NEG146',
                'subject' => 'INTERNATIONAL BUSINESS TOPICS',
                'credits' => '2',
                'pre_requirements' => 'IDI084, NEG144'
            ],
            [
                'career' => 'Pensum actual: NIN11',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'NEG147',
                'subject' => 'SEMINARIO INTEGRADOR DE NEGOCIOS INTERNACIONALES',
                'credits' => '3',
                'pre_requirements' => 'MER147, NEG144'
            ],
            [
                'career' => 'Pensum actual: NIN11',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'NEG157',
                'subject' => 'ESTRATEGIAS DE COMPETITIVIDAD INTERNACIONAL',
                'credits' => '3',
                'pre_requirements' => 'MER147'
            ],
            [
                'career' => 'Pensum actual: NIN11',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'NEG143',
                'subject' => 'RELACION Y COOPERACION INTERNACIONAL',
                'credits' => '3',
                'pre_requirements' => 'DER120'
            ],
            [
                'career' => 'Pensum actual: NIN11',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'IDI085',
                'subject' => 'INGLES PARA NEGOCIOS VI',
                'credits' => '3',
                'pre_requirements' => 'IDI084'
            ],

            [
                'career' => 'Pensum actual: NIN11',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'TFG100',
                'subject' => 'TRABAJO FINAL DE GRADO',
                'credits' => '6',
                'pre_requirements' => 'SOC281 92% De los créditos aprobados'
            ],
            [
                'career' => 'Pensum actual: NIN11',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'OPTDEP',
                'subject' => 'OPTATIVA DEPORTE',
                'credits' => '0',
                'pre_requirements' => ''
            ]

        ];

        $PUB10_pensum = [
            [
                'career' => 'Pensum antiguo: PUB10',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'ART396',
                'subject' => 'DIBUJO ANALITICO I',
                'credits' => '4',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: PUB10',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'ART400',
                'subject' => 'DISEÑO BASICO',
                'credits' => '4',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: PUB10',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'ART401',
                'subject' => 'MEDIOS DE REPRODUCCION GRAFICA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: PUB10',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'ESP101',
                'subject' => 'ANALISIS DE TEXTOS DISCURSIVOS',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: PUB10',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'MAT100',
                'subject' => 'MATEMATICA PRE-UNIVERSITARIA',
                'credits' => '0',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: PUB10',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'SOC030',
                'subject' => 'ORIENTACION UNIVERSITARIA',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: PUB10',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'SOC041',
                'subject' => 'ECOLOGIA',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: PUB10',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'ENG001',
                'subject' => 'INGLES I',
                'credits' => '0',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: PUB10',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'ART148',
                'subject' => 'DISEÑO INFORMATIZADO I',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: PUB10',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'ART397',
                'subject' => 'DIBUJO ANALITICO II',
                'credits' => '4',
                'pre_requirements' => 'ART396'
            ],
            [
                'career' => 'Pensum antiguo: PUB10',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'ART402',
                'subject' => 'DISEÑO TIPOGRAFICO',
                'credits' => '4',
                'pre_requirements' => 'ART400'
            ],
            [
                'career' => 'Pensum antiguo: PUB10',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'ESP102',
                'subject' => 'REDACCION DE TEXTOS DISCURSIVOS I',
                'credits' => '4',
                'pre_requirements' => 'ESP101'
            ],
            [
                'career' => 'Pensum antiguo: PUB10',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'MAT250',
                'subject' => 'ESTADISTICA I',
                'credits' => '4',
                'pre_requirements' => 'MAT100'
            ],
            [
                'career' => 'Pensum antiguo: PUB10',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'ENG002',
                'subject' => 'INGLES II',
                'credits' => '0',
                'pre_requirements' => 'ENG001'
            ],
            [
                'career' => 'Pensum antiguo: PUB10',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'ART149',
                'subject' => 'DISEÑO INFORMATIZADO II',
                'credits' => '3',
                'pre_requirements' => 'ART148'
            ],
            [
                'career' => 'Pensum antiguo: PUB10',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'ART236',
                'subject' => 'ARTE Y COMUNICACION I',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: PUB10',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'ART403',
                'subject' => 'DISEÑO PUBLICITARIO',
                'credits' => '4',
                'pre_requirements' => 'ART402'
            ],
            [
                'career' => 'Pensum antiguo: PUB10',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'ESP103',
                'subject' => 'REDACCION DE TEXTOS DISCURSIVOS II',
                'credits' => '4',
                'pre_requirements' => 'ESP102'
            ],
            [
                'career' => 'Pensum antiguo: PUB10',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'SOC011',
                'subject' => 'HISTORIA SOCIAL DOMINICANA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: PUB10',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'SOC101',
                'subject' => 'INTRODUCCION A LA PSICOLOGIA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: PUB10',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'ENG003',
                'subject' => 'INGLES III',
                'credits' => '0',
                'pre_requirements' => 'ENG002'
            ],
            [
                'career' => 'Pensum antiguo: PUB10',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'ART141',
                'subject' => 'FOTOGRAFIA I',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: PUB10',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'ART150',
                'subject' => 'DISEÑO INFORMATIZADO III',
                'credits' => '3',
                'pre_requirements' => 'ART149'
            ],
            [
                'career' => 'Pensum antiguo: PUB10',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'ART237',
                'subject' => 'ARTE Y COMUNICACION II',
                'credits' => '3',
                'pre_requirements' => 'ART236'
            ],
            [
                'career' => 'Pensum antiguo: PUB10',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'ART398',
                'subject' => 'DISEÑO Y GESTION DE MARCAS',
                'credits' => '4',
                'pre_requirements' => 'ART403'
            ],
            [
                'career' => 'Pensum antiguo: PUB10',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'ART405',
                'subject' => 'ANIMACION PUBLICITARIA',
                'credits' => '4',
                'pre_requirements' => 'ART397'
            ],
            [
                'career' => 'Pensum antiguo: PUB10',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'SOC200',
                'subject' => 'INTRODUCCION A LA SOCIOLOGIA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: PUB10',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'ENG004',
                'subject' => 'INGLES IV',
                'credits' => '0',
                'pre_requirements' => 'ENG003'
            ],
            [
                'career' => 'Pensum antiguo: PUB10',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'ART142',
                'subject' => 'FOTOGRAFIA II',
                'credits' => '3',
                'pre_requirements' => 'ART141'
            ],
            [
                'career' => 'Pensum antiguo: PUB10',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'ART151',
                'subject' => 'DISEÑO INFORMATIZADO IV',
                'credits' => '3',
                'pre_requirements' => 'ART150'
            ],
            [
                'career' => 'Pensum antiguo: PUB10',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'ART238',
                'subject' => 'ARTE Y COMUNICACION III',
                'credits' => '3',
                'pre_requirements' => 'ART237'
            ],
            [
                'career' => 'Pensum antiguo: PUB10',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'ART404',
                'subject' => 'DISEÑO DE ENVASES Y PRODUCTOS',
                'credits' => '4',
                'pre_requirements' => 'ART398'
            ],
            [
                'career' => 'Pensum antiguo: PUB10',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'SOC290',
                'subject' => 'ECONOMIA GENERAL',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: PUB10',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'ENG005',
                'subject' => 'INGLES V',
                'credits' => '0',
                'pre_requirements' => 'ENG004'
            ],
            [
                'career' => 'Pensum antiguo: PUB10',
                'quarter' => '6. Cuatrimestre',
                'code' => 'ART161',
                'subject' => 'PUBLICIDAD I',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: PUB10',
                'quarter' => '6. Cuatrimestre',
                'code' => 'ART214',
                'subject' => 'TEORIA DE LA COMUNICACION',
                'credits' => '3',
                'pre_requirements' => 'ART238'
            ],
            [
                'career' => 'Pensum antiguo: PUB10',
                'quarter' => '6. Cuatrimestre',
                'code' => 'ART231',
                'subject' => 'FOTOGRAFIA PUBLICITARIA',
                'credits' => '4',
                'pre_requirements' => 'ART142'
            ],
            [
                'career' => 'Pensum antiguo: PUB10',
                'quarter' => '6. Cuatrimestre',
                'code' => 'ART407',
                'subject' => 'COMUNICACION ORGANIZACIONAL',
                'credits' => '3',
                'pre_requirements' => 'ART398'
            ],
            [
                'career' => 'Pensum antiguo: PUB10',
                'quarter' => '6. Cuatrimestre',
                'code' => 'ESP420',
                'subject' => 'REDACCION PUBLICITARIA',
                'credits' => '3',
                'pre_requirements' => 'ESP103'
            ],
            [
                'career' => 'Pensum antiguo: PUB10',
                'quarter' => '6. Cuatrimestre',
                'code' => 'ENG006',
                'subject' => 'INGLES VI',
                'credits' => '0',
                'pre_requirements' => 'ENG005'
            ],
            [
                'career' => 'Pensum antiguo: PUB10',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'ART162',
                'subject' => 'PUBLICIDAD II',
                'credits' => '3',
                'pre_requirements' => 'ART161'
            ],
            [
                'career' => 'Pensum antiguo: PUB10',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'ART225',
                'subject' => 'MEDIOS DE COMUNICACION',
                'credits' => '3',
                'pre_requirements' => 'ART214'
            ],
            [
                'career' => 'Pensum antiguo: PUB10',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'ESP421',
                'subject' => 'ANALISIS SEMIOTICO DE LA PUBLICIDAD',
                'credits' => '3',
                'pre_requirements' => 'ART214, ESP420'
            ],
            [
                'career' => 'Pensum antiguo: PUB10',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'SOC031',
                'subject' => 'ETICA PROFESIONAL',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: PUB10',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'SOC250',
                'subject' => 'METODOLOGIA DE LA INVESTIGACION CIENTIFICA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: PUB10',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'ENG007',
                'subject' => 'INGLES VII',
                'credits' => '0',
                'pre_requirements' => 'ENG006'
            ],
            [
                'career' => 'Pensum antiguo: PUB10',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'ART185',
                'subject' => 'CREATIVIDAD PUBLICITARIA I',
                'credits' => '3',
                'pre_requirements' => 'ART162'
            ],
            [
                'career' => 'Pensum antiguo: PUB10',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'ART201',
                'subject' => 'RELACIONES PUBLICAS',
                'credits' => '3',
                'pre_requirements' => 'ART161, ART214'
            ],
            [
                'career' => 'Pensum antiguo: PUB10',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'ART226',
                'subject' => 'ESTRATEGIA DE MEDIOS',
                'credits' => '3',
                'pre_requirements' => 'ART225'
            ],
            [
                'career' => 'Pensum antiguo: PUB10',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'ART317',
                'subject' => 'SONIDO Y MUSICALIZACION',
                'credits' => '3',
                'pre_requirements' => 'ART162'
            ],
            [
                'career' => 'Pensum antiguo: PUB10',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'DER520',
                'subject' => 'PROPIEDAD INTELECTUAL Y LEGISLACION DE LA COMUNICACION',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: PUB10',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'SOC115',
                'subject' => 'PSICOLOGIA DEL CONSUMIDOR',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: PUB10',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'ENG008',
                'subject' => 'INGLES VIII',
                'credits' => '0',
                'pre_requirements' => 'ENG007'
            ],
            [
                'career' => 'Pensum antiguo: PUB10',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'ADM135',
                'subject' => 'PRESUPUESTO PUBLICITARIO',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: PUB10',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'ART163',
                'subject' => 'DISEÑO PUBLICITARIO MULTIMEDIA',
                'credits' => '4',
                'pre_requirements' => 'ART151'
            ],
            [
                'career' => 'Pensum antiguo: PUB10',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'ART186',
                'subject' => 'CREATIVIDAD PUBLICITARIA II',
                'credits' => '3',
                'pre_requirements' => 'ART185'
            ],
            [
                'career' => 'Pensum antiguo: PUB10',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'ART338',
                'subject' => 'PRODUCCION DE RADIO',
                'credits' => '3',
                'pre_requirements' => 'ART317'
            ],
            [
                'career' => 'Pensum antiguo: PUB10',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'MER101',
                'subject' => 'MERCADOTECNIA I',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: PUB10',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'ADM119',
                'subject' => 'CREACION Y GESTION DE EMPRESAS PUBLICITARIAS',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: PUB10',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'ADM120',
                'subject' => 'LIDERAZGO Y TECNICAS DE SUPERVISION',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: PUB10',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'ART202',
                'subject' => 'PRODUCCION DE T. V.',
                'credits' => '6',
                'pre_requirements' => 'ART338'
            ],
            [
                'career' => 'Pensum antiguo: PUB10',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'MER102',
                'subject' => 'MERCADOTECNIA II',
                'credits' => '3',
                'pre_requirements' => 'MER101'
            ],
            [
                'career' => 'Pensum antiguo: PUB10',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'ART243',
                'subject' => 'PRODUCCION Y POSTPRODUCCION COMERCIALES',
                'credits' => '6',
                'pre_requirements' => 'ART202, ART338'
            ],
            [
                'career' => 'Pensum antiguo: PUB10',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'MER120',
                'subject' => 'MERCADOTECNIA INTERNACIONAL',
                'credits' => '4',
                'pre_requirements' => 'MER102'
            ],
            [
                'career' => 'Pensum antiguo: PUB10',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'SOC281',
                'subject' => 'SEMINARIO DE GRADO',
                'credits' => '3',
                'pre_requirements' => '80% De los credits aprobados'
            ],
            [
                'career' => 'Pensum antiguo: PUB10',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'OPTDEP',
                'subject' => 'OPTATIVA DEPORTE',
                'credits' => '0',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: PUB10',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'PAS610',
                'subject' => 'PASANTIA EMPRESARIAL DE PUBLICIDAD',
                'credits' => '0',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum antiguo: PUB10',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'TES-MON',
                'subject' => 'TRABAJO DE GRADO O CURSO MONOGRAFICO',
                'credits' => '6',
                'pre_requirements' => '92% De los credits aprobados'
            ]
        ];

        $PUB11_pensum = [
            [
                'career' => 'Pensum actual: PUB11',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'SOC011',
                'subject' => 'HISTORIA SOCIAL DOMINICANA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: PUB11',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'ESP101',
                'subject' => 'ANALISIS DE TEXTOS DISCURSIVOS',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: PUB11',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'MAT010',
                'subject' => 'MATEMATICA BASICA UNIVERSITARIA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: PUB11',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'SOC030',
                'subject' => 'ORIENTACION UNIVERSITARIA',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: PUB11',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'SOC043',
                'subject' => 'GESTION AMBIENTAL',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: PUB11',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'ART465',
                'subject' => 'FUNDAMENTOS DEL DISEÑO',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: PUB11',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'ART467',
                'subject' => 'DIBUJO I',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: PUB11',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'SOC013',
                'subject' => 'FILOSOFIA',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: PUB11',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'SOC101',
                'subject' => 'INTRODUCCION A LA PSICOLOGIA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: PUB11',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'ESP106',
                'subject' => 'REDACCION DE TEXTOS DISCURSIVOS I',
                'credits' => '3',
                'pre_requirements' => 'ESP101'
            ],
            [
                'career' => 'Pensum actual: PUB11',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'ART500',
                'subject' => 'TECNICAS DEL BOCETO',
                'credits' => '3',
                'pre_requirements' => 'ART467'
            ],
            [
                'career' => 'Pensum actual: PUB11',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'ART460',
                'subject' => 'DISEÑO GRAFICO DIGITAL I',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: PUB11',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'ART214',
                'subject' => 'TEORIA DE LA COMUNICACION',
                'credits' => '3',
                'pre_requirements' => ''
            ],

            [
                'career' => 'Pensum actual: PUB11',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'SOC200',
                'subject' => 'INTRODUCCION A LA SOCIOLOGIA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: PUB11',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'ESP107',
                'subject' => 'REDACCION DE TEXTOS DISCURSIVOS II',
                'credits' => '3',
                'pre_requirements' => 'ESP106'
            ],
            [
                'career' => 'Pensum actual: PUB11',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'ART210',
                'subject' => 'PENSAMIENTO CREATIVO',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: PUB11',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'ART462',
                'subject' => 'DISEÑO GRAFICO DIGITAL II',
                'credits' => '3',
                'pre_requirements' => 'ART460'
            ],
            [
                'career' => 'Pensum actual: PUB11',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'ART012',
                'subject' => 'HISTORIA DE LA COMUNICACION I',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: PUB11',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'ART141',
                'subject' => 'FOTOGRAFIA I',
                'credits' => '3',
                'pre_requirements' => ''
            ],

            [
                'career' => 'Pensum actual: PUB11',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'SOC253',
                'subject' => 'METODOLOGIA Y TECNICAS DE INVESTIGACION',
                'credits' => '4',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: PUB11',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'SOC031',
                'subject' => 'ETICA PROFESIONAL',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: PUB11',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'ART142',
                'subject' => 'FOTOGRAFIA II',
                'credits' => '3',
                'pre_requirements' => 'ART141'
            ],
            [
                'career' => 'Pensum actual: PUB11',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'ART452',
                'subject' => 'FUNDAMENTOS DE PUBLICIDAD Y RELACIONES PUBLICAS',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: PUB11',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'ART014',
                'subject' => 'HISTORIA DE LA COMUNICACION II',
                'credits' => '3',
                'pre_requirements' => 'ART012'
            ],
            [
                'career' => 'Pensum actual: PUB11',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'MAT250',
                'subject' => 'ESTADISTICA I',
                'credits' => '4',
                'pre_requirements' => 'MAT010'
            ],

            [
                'career' => 'Pensum actual: PUB11',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'ART161',
                'subject' => 'PUBLICIDAD I',
                'credits' => '3',
                'pre_requirements' => 'ART452'
            ],
            [
                'career' => 'Pensum actual: PUB11',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'ART080',
                'subject' => 'BRANDING',
                'credits' => '3',
                'pre_requirements' => 'ART076'
            ],
            [
                'career' => 'Pensum actual: PUB11',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'ART076',
                'subject' => 'EXPRESION GRAFICA PUBLICITARIA',
                'credits' => '3',
                'pre_requirements' => 'ART462'
            ],
            [
                'career' => 'Pensum actual: PUB11',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'ART231',
                'subject' => 'FOTOGRAFIA PUBLICITARIA',
                'credits' => '4',
                'pre_requirements' => 'ART142'
            ],
            [
                'career' => 'Pensum actual: PUB11',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'ART525',
                'subject' => 'TECNICAS DE DOCUMENTACION EN LA COMUNICACION',
                'credits' => '3',
                'pre_requirements' => 'SOC253'
            ],

            [
                'career' => 'Pensum actual: PUB11',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'ESP301',
                'subject' => 'EXPRESION ORAL',
                'credits' => '3',
                'pre_requirements' => 'ESP107'
            ],
            [
                'career' => 'Pensum actual: PUB11',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'ART162',
                'subject' => 'PUBLICIDAD II',
                'credits' => '3',
                'pre_requirements' => 'ART161'
            ],
            [
                'career' => 'Pensum actual: PUB11',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'ART577',
                'subject' => 'ESCRITURA CREATIVA',
                'credits' => '3',
                'pre_requirements' => 'ESP107'
            ],
            [
                'career' => 'Pensum actual: PUB11',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'ADM535',
                'subject' => 'ACTITUD EMPRENDEDORA',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: PUB11',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'SOC115',
                'subject' => 'PSICOLOGIA DEL CONSUMIDOR',
                'credits' => '3',
                'pre_requirements' => ''
            ],

            [
                'career' => 'Pensum actual: PUB11',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'ART040',
                'subject' => 'PLANIFICACION DE MEDIOS I',
                'credits' => '3',
                'pre_requirements' => 'ART214'
            ],
            [
                'career' => 'Pensum actual: PUB11',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'ART285',
                'subject' => 'CREATIVIDAD PUBLICITARIA',
                'credits' => '3',
                'pre_requirements' => 'ART210'
            ],
            [
                'career' => 'Pensum actual: PUB11',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'MER101',
                'subject' => 'MERCADOTECNIA I',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: PUB11',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'EPUB 1',
                'subject' => 'ELECTIVA I',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: PUB11',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'ART461',
                'subject' => 'PLANIFICACION DE LAS RELACIONES PUBLICAS',
                'credits' => '3',
                'pre_requirements' => 'ART161'
            ],
            [
                'career' => 'Pensum actual: PUB11',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'ART317',
                'subject' => 'SONIDO Y MUSICALIZACION',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: PUB11',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'ART041',
                'subject' => 'PLANIFICACION DE MEDIOS II',
                'credits' => '3',
                'pre_requirements' => 'ART040'
            ],
            [
                'career' => 'Pensum actual: PUB11',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'MER102',
                'subject' => 'MERCADOTECNIA II',
                'credits' => '3',
                'pre_requirements' => 'MER101'
            ],
            [
                'career' => 'Pensum actual: PUB11',
                'quarter' => '8°. Cuatrimestre',
                'code' => 'EPUB 2',
                'subject' => 'ELECTIVA II',
                'credits' => '3',
                'pre_requirements' => 'EPUB 1'
            ],
            [
                'career' => 'Pensum actual: PUB11',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'DER520',
                'subject' => 'PROPIEDAD INTELECTUAL Y LEGISLACION DE LA COMUNICACION',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: PUB11',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'MER436',
                'subject' => 'E-BUSINESS',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: PUB11',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'ART016',
                'subject' => 'RESPONSABILIDAD SOCIAL CORPORATIVA',
                'credits' => '3',
                'pre_requirements' => 'ART080'
            ],
            [
                'career' => 'Pensum actual: PUB11',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'ART338',
                'subject' => 'PRODUCCION DE RADIO',
                'credits' => '3',
                'pre_requirements' => 'ART317'
            ],
            [
                'career' => 'Pensum actual: PUB11',
                'quarter' => '9°. Cuatrimestre',
                'code' => 'EPUB 3',
                'subject' => 'ELECTIVA III',
                'credits' => '3',
                'pre_requirements' => 'EPUB 2'
            ],

            [
                'career' => 'Pensum actual: PUB11',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'SOC281',
                'subject' => 'SEMINARIO DE GRADO',
                'credits' => '3',
                'pre_requirements' => 'SOC253, 80% De los créditos aprobados'
            ],
            [
                'career' => 'Pensum actual: PUB11',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'ADM536',
                'subject' => 'CREACION E INNOVACION DE NEGOCIOS',
                'credits' => '3',
                'pre_requirements' => 'ADM535'
            ],
            [
                'career' => 'Pensum actual: PUB11',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'ART340',
                'subject' => 'PRODUCCION DE TELEVISION',
                'credits' => '3',
                'pre_requirements' => 'ART338'
            ],
            [
                'career' => 'Pensum actual: PUB11',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'MER437',
                'subject' => 'MARKETING DIGITAL',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: PUB11',
                'quarter' => '10°. Cuatrimestre',
                'code' => 'IDI530',
                'subject' => 'INGLES PARA COMUNICADORES I',
                'credits' => '3',
                'pre_requirements' => 'ENG010'
            ],

            [
                'career' => 'Pensum actual: PUB11',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'ART090',
                'subject' => 'PRODUCCION DE COMERCIALES',
                'credits' => '3',
                'pre_requirements' => 'ART340'
            ],
            [
                'career' => 'Pensum actual: PUB11',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'ART091',
                'subject' => 'POSTPRODUCCIÓN DE COMERCIALES',
                'credits' => '2',
                'pre_requirements' => 'ART340'
            ],
            [
                'career' => 'Pensum actual: PUB11',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'ART094',
                'subject' => 'PUBLICIDAD INTERACTIVA',
                'credits' => '3',
                'pre_requirements' => 'ART162, MER436'
            ],
            [
                'career' => 'Pensum actual: PUB11',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'MER442',
                'subject' => 'REDES SOCIALES Y MARKETING DE CONTENIDO',
                'credits' => '2',
                'pre_requirements' => 'MER436'
            ],
            [
                'career' => 'Pensum actual: PUB11',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'ART496',
                'subject' => 'PORTAFOLIO PROFESIONAL',
                'credits' => '2',
                'pre_requirements' => '80% De los créditos aprobados'
            ],
            [
                'career' => 'Pensum actual: PUB11',
                'quarter' => '11°. Cuatrimestre',
                'code' => 'IDI531',
                'subject' => 'INGLES PARA COMUNICADORES II',
                'credits' => '3',
                'pre_requirements' => 'IDI530'
            ],
            [
                'career' => 'Pensum actual: PUB11',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'TFG100',
                'subject' => 'TRABAJO FINAL DE GRADO',
                'credits' => '6',
                'pre_requirements' => 'SOC281, 92% De los créditos aprobados'
            ],
            [
                'career' => 'Pensum actual: PUB11',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'OPTDEP',
                'subject' => 'OPTATIVA DEPORTE',
                'credits' => '0',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: PUB11',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'PAS610',
                'subject' => 'PASANTIA EMPRESARIAL DE PUBLICIDAD',
                'credits' => '0',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: PUB11',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'ENG000',
                'subject' => 'FUNDAMENTOS DE INGLES (I Y II)',
                'credits' => '0',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: PUB11',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'ENG003',
                'subject' => 'INGLES III',
                'credits' => '0',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: PUB11',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'ENG004',
                'subject' => 'INGLES IV',
                'credits' => '0',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: PUB11',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'ENG005',
                'subject' => 'INGLES V',
                'credits' => '0',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: PUB11',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'ENG006',
                'subject' => 'INGLES VI',
                'credits' => '0',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: PUB11',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'ENG007',
                'subject' => 'INGLES VII',
                'credits' => '0',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Pensum actual: PUB11',
                'quarter' => '12°. Cuatrimestre',
                'code' => 'ENG008',
                'subject' => 'INGLES VIII',
                'credits' => '0',
                'pre_requirements' => ''
            ]
        ];


        $TAF11_pensum = [
            [
                'career' => 'Técnico analista financiero',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'ADM091',
                'subject' => 'ADMINISTRACION I',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Técnico analista financiero',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'ESP101',
                'subject' => 'ANALISIS DE TEXTOS DISCURSIVOS',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Técnico analista financiero',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'INF214',
                'subject' => 'APLICACIONES FINANCIERAS',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Técnico analista financiero',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'MAT160',
                'subject' => 'PENSAMIENTO NUMERICO',
                'credits' => '5',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Técnico analista financiero',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'SOC030',
                'subject' => 'ORIENTACION UNIVERSITARIA',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Técnico analista financiero',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'SOC043',
                'subject' => 'GESTION AMBIENTAL',
                'credits' => '2',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Técnico analista financiero',
                'quarter' => '1°. Cuatrimestre',
                'code' => 'ENG001',
                'subject' => 'INGLES I',
                'credits' => '0',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Técnico analista financiero',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'ADM092',
                'subject' => 'ADMINISTRACION II',
                'credits' => '3',
                'pre_requirements' => 'ADM091'
            ],
            [
                'career' => 'Técnico analista financiero',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'CON091',
                'subject' => 'CONTABILIDAD I',
                'credits' => '5',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Técnico analista financiero',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'ESP102',
                'subject' => 'REDACCION DE TEXTOS DISCURSIVOS I',
                'credits' => '4',
                'pre_requirements' => 'ESP101'
            ],
            [
                'career' => 'Técnico analista financiero',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'MAT121',
                'subject' => 'ALGEBRA UNIVERSITARIA',
                'credits' => '4',
                'pre_requirements' => 'MAT160'
            ],
            [
                'career' => 'Técnico analista financiero',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'ENG002',
                'subject' => 'INGLES II',
                'credits' => '0',
                'pre_requirements' => 'ENG001'
            ],
            [
                'career' => 'Técnico analista financiero',
                'quarter' => '2°. Cuatrimestre',
                'code' => 'OPTTAF1',
                'subject' => 'ELECTIVA GENERAL I',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Técnico analista financiero',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'CON092',
                'subject' => 'CONTABILIDAD II',
                'credits' => '5',
                'pre_requirements' => 'CON091'
            ],
            [
                'career' => 'Técnico analista financiero',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'ECO101',
                'subject' => 'ECONOMIA I',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Técnico analista financiero',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'MAT131',
                'subject' => 'CALCULO Y GEOMETRIA ANALITICA I',
                'credits' => '5',
                'pre_requirements' => 'MAT121'
            ],
            [
                'career' => 'Técnico analista financiero',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'SOC031',
                'subject' => 'ETICA PROFESIONAL',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Técnico analista financiero',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'ENG003',
                'subject' => 'INGLES III',
                'credits' => '0',
                'pre_requirements' => 'ENG002'
            ],
            [
                'career' => 'Técnico analista financiero',
                'quarter' => '3°. Cuatrimestre',
                'code' => 'OPTTAF2',
                'subject' => 'ELECTIVA GENERAL II',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Técnico analista financiero',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'ADM221',
                'subject' => 'MONEDA Y BANCA',
                'credits' => '3',
                'pre_requirements' => 'ECO101'
            ],
            [
                'career' => 'Técnico analista financiero',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'CON221',
                'subject' => 'FUNDAMENTOS DE COSTOS',
                'credits' => '4',
                'pre_requirements' => 'CON092'
            ],
            [
                'career' => 'Técnico analista financiero',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'ECO102',
                'subject' => 'ECONOMIA II',
                'credits' => '3',
                'pre_requirements' => 'ECO101'
            ],
            [
                'career' => 'Técnico analista financiero',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'MAT241',
                'subject' => 'MATEMATICA FINANCIERA I',
                'credits' => '4',
                'pre_requirements' => 'MAT131'
            ],
            [
                'career' => 'Técnico analista financiero',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'MAT250',
                'subject' => 'ESTADISTICA I',
                'credits' => '4',
                'pre_requirements' => 'MAT131'
            ],
            [
                'career' => 'Técnico analista financiero',
                'quarter' => '4°. Cuatrimestre',
                'code' => 'ENG004',
                'subject' => 'INGLES IV',
                'credits' => '0',
                'pre_requirements' => 'ENG003'
            ],

            [
                'career' => 'Técnico analista financiero',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'ADM140',
                'subject' => 'ADMINISTRACION FINANCIERA I',
                'credits' => '3',
                'pre_requirements' => 'MAT241'
            ],
            [
                'career' => 'Técnico analista financiero',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'ADM535',
                'subject' => 'ACTITUD EMPRENDEDORA',
                'credits' => '3',
                'pre_requirements' => 'ADM091'
            ],
            [
                'career' => 'Técnico analista financiero',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'DER011',
                'subject' => 'DERECHO COMERCIAL',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Técnico analista financiero',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'MAT242',
                'subject' => 'MATEMATICA FINANCIERA II',
                'credits' => '4',
                'pre_requirements' => 'MAT241'
            ],
            [
                'career' => 'Técnico analista financiero',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'MER101',
                'subject' => 'MERCADOTECNIA I',
                'credits' => '3',
                'pre_requirements' => ''
            ],
            [
                'career' => 'Técnico analista financiero',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'SOC250',
                'subject' => 'METODOLOGIA DE LA INVESTIGACION CIENTIFICA',
                'credits' => '3',
                'pre_requirements' => 'MAT250'
            ],
            [
                'career' => 'Técnico analista financiero',
                'quarter' => '5°. Cuatrimestre',
                'code' => 'ENG005',
                'subject' => 'INGLES V',
                'credits' => '0',
                'pre_requirements' => 'ENG004'
            ],

            [
                'career' => 'Técnico analista financiero',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'ADM141',
                'subject' => 'ADMINISTRACION FINANCIERA II',
                'credits' => '3',
                'pre_requirements' => 'ADM140'
            ],
            [
                'career' => 'Técnico analista financiero',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'ADM540',
                'subject' => 'LIDERAZGO Y HABILIDADES DIRECTIVAS',
                'credits' => '3',
                'pre_requirements' => 'ADM092'
            ],
            [
                'career' => 'Técnico analista financiero',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'CON211',
                'subject' => 'SISTEMA TRIBUTARIO DOMINICANO I',
                'credits' => '3',
                'pre_requirements' => 'CON092'
            ],
            [
                'career' => 'Técnico analista financiero',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'CON518',
                'subject' => 'ANALISIS DE ESTADOS FINANCIEROS',
                'credits' => '3',
                'pre_requirements' => 'CON092'
            ],
            [
                'career' => 'Técnico analista financiero',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'FIN210',
                'subject' => 'PRESUPUESTO Y PLANEACION FINANCIERA',
                'credits' => '3',
                'pre_requirements' => 'CON221'
            ],
            [
                'career' => 'Técnico analista financiero',
                'quarter' => '6°. Cuatrimestre',
                'code' => 'IDI075',
                'subject' => 'COMUNICACION EN INGLES',
                'credits' => '5',
                'pre_requirements' => 'ENG005'
            ],
            [
                'career' => 'Técnico analista financiero',
                'quarter' => '7°. Cuatrimestre',
                'code' => 'OPTDEP',
                'subject' => 'OPTATIVA DEPORTE',
                'credits' => '0',
                'pre_requirements' => ''
            ]
        ];

        $allPensums = array_merge($INE7_pensum, $IEL7_pensum, $IND7_pensum, $ISC10_pensum, $ISO10_pensum, $ADM10_pensum, $ADM11_pensum, $ATH7_pensum, $ATH11_pensum, $CDG10_pensum, $CDG11_pensum, $CIN11_pensum, $CON10_pensum, $CON11_pensum, $CPM11_pensum, $DER7_pensum, $DIG10_pensum, $DIG11_pensum, $DIN10_pensum, $DIN11_pensum, $FIN11_pensum, $LEA11_pensum, $EST11_pensum, $LES11_pensum, $LIE11_pensum, $LMS11_pensum, $MER10_pensum, $MER11_pensum, $NIN7_pensum, $NIN11_pensum, $PUB10_pensum, $PUB11_pensum, $TAF11_pensum);


        foreach ($allPensums as $pensum) {
            Pensum::create($pensum);
        }
    }
}
