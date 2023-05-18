<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;
use App\Models\ReinforcementsMath;

class MathReinforcement extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'get:math_reinforcement';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command obtains the mathematics reinforcement schedules of the different available subjects.';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        ReinforcementsMath::truncate();
       
        // crear una instancia de Guzzle HTTP Client
        $client = new Client();

        // hacer una solicitud HTTP GET a la URL deseada
        $response = $client->request('GET', 'https://estudiantil.unapec.edu.do/refuerzo-matem%C3%A1tica/');

        // obtener el contenido HTML de la respuesta
        $html = $response->getBody()->getContents();

        // crear una instancia de Symfony DomCrawler
        $crawler = new Crawler($html);

        // encontrar todos los h2 con clase "docente"
        $docentes_h2 = $crawler->filterXPath('//h2[@class="docente"]');

        $docentes_h2->each(function (Crawler $docente_h2) {
            // obtener el texto del h2 y eliminar la palabra "Profesor:" o "Profesora:"
            $docente_text = str_replace(['Profesor:', 'Profesora:'], '', $docente_h2->text());

            // encontrar la tabla siguiente al h2 con clase "docente"
            $tabla = $docente_h2->nextAll()->filter('table')->first();

            // obtener los días de la tabla (encabezados de columna)
            $dias = $tabla->filterXPath('.//tr[1]/th[position() > 1]')->each(function (Crawler $node, $i) {
                return $node->text();
            });

            // obtener las horas de la tabla (encabezados de fila)
            $horas = $tabla->filterXPath('.//tr[position() > 1]/td[1]')->each(function (Crawler $node, $i) {
                return $node->text();
            });

            // obtener los detalles de la tabla (materias)
            $detalles = $tabla->filterXPath('.//tr[position() > 1]/td[position() > 1]')->each(function (Crawler $node, $i) {
                return $node->text();
            });

            // combinar días, horas y detalles en un arreglo de resultados
            foreach ($horas as $i => $hora) {
                foreach ($dias as $j => $dia) {
                    $detalles_index = $i * count($dias) + $j;
                    $detalles_text = $detalles[$detalles_index];
                    if (!empty($detalles_text)) {
                        $subject = str_replace(['III-15', 'III-12'], '', $detalles_text);

                        // Transformar el formato de las horas
                        $hora_transformada = str_replace(['8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '/'], ['8 AM', '9 AM', '10 AM', '11 AM', '12 PM', '1 PM', '2 PM', '3 PM', '4 PM', '5 PM', '6 PM', '7 PM', '8 PM', '9 PM', '10 PM', '-'], $hora);

                        if (preg_match('/[a-zA-Z]/', $subject)) {
                            ReinforcementsMath::create([
                                'teacher' => $docente_text,
                                'day' => $dia,
                                'subject' => $subject,
                                'schedule' => $hora_transformada,
                            ]);

                        }
                    }
                }
            }
            
        });

        $this->info(' Se obtuvieron los horarios de refuerzos de matemáticas correctamente.');
    }
}
