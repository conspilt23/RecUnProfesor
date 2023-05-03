<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use DOMDocument;
use DOMXPath;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Cookie\CookieJar;

class GetCalendarEvents extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'get:calendar_events';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Crea un archivo JSON con todos los eventos del calendario oficial de UNAPEC.';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $client = new Client();

        // Hacer una petición GET a la URL de la página web
        $response = $client->request('GET', 'https://calendario.unapec.edu.do/');

        // Obtener el contenido HTML de la respuesta
        $html = $response->getBody()->getContents();

        // Crear una nueva instancia de DOMDocument
        $dom = new DOMDocument();

        // Cargar el HTML en el objeto DOMDocument
        @$dom->loadHTML($html);

        // Crear una nueva instancia de DOMXPath
        $xpath = new DOMXPath($dom);

        // Utilizar XPath para seleccionar los elementos de la tabla que te interesan
        $eventRows = $xpath->query('//table//tr');

        // Inicializar un array vacío para almacenar los eventos
        $events = [];

        // Recorrer los elementos seleccionados y crear un array con los datos en el formato deseado
        $events = array_merge($events, $this->createWeeklyEvents());
        foreach ($eventRows as $row) {
            $dateTd = $xpath->query('.//td[@class="fecha"]', $row);
            $nameTd = $xpath->query('.//td[@class=""]/p', $row);
            if ($dateTd->length > 0 && $nameTd->length > 0) {
                $date = $dateTd->item(0)->textContent;
                if(strpos($date, "al") === false){
                    foreach($nameTd as $p) {
                        $event = [];
                        $event['id'] = uniqid();
                        $event['name'] = trim(str_replace("-", " ", $p->textContent));
                        $event['date'] = $this->transformDate($date);
                        $event['type'] = $this->getEventType($event['name']);
                        $event['everyYear'] = false;
                        $event['color'] = $this->getEventColor($event['type']); 
                        $events[] = $event;
                }  
                    
                } else {
                    foreach($nameTd as $p){
                        $first_word = explode(" ", trim(str_replace("-", " ", $p->textContent)));
                        $event = [];
                        $event['id'] = uniqid();
                        $event['name'] = $first_word[0];
                        $event['badge'] = $this->transformBadgeDate($date);
                        $event['date'] = $this->transformMultipleDates($date);
                        $event['description'] = trim(str_replace("-", " ", $p->textContent));
                        $event['type'] =  $this->getEventType($event['description']);
                        $event['color'] = $this->getEventColor($event['type']);
                        $events[] = $event;
                    }
                }
            }
        }
        

        // Utilizar la función json_encode para convertir el array a JSON
        $json = json_encode($events, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
        $path = public_path() . '/js/calendarEvents.json';
    file_put_contents($path, $json);

        $this->info(' CalendarEvents.json creado exitosamente');


        return Command::SUCCESS;
        
    }

    private function transformDate($date) {
        $months = array(
          "enero" => "January",
          "febrero" => "February",
          "marzo" => "March",
          "abril" => "April",
          "mayo" => "May",
          "junio" => "June",
          "julio" => "July",
          "agosto" => "August",
          "septiembre" => "September",
          "octubre" => "October",
          "noviembre" => "November",
          "diciembre" => "December"
        );

        
    
        $date = explode(" ", $date);
        $day = $date[0];
        $month = str_replace(array_keys($months), array_values($months), $date[1]);
        $month = trim($month);
        $currentYear = date("Y");
    
        return $month . "/" . $day . "/" . $currentYear;
    }

    private function getEventColor($type)
    {
        switch ($type) {
            case 'last_day':
                return '#FF3030'; // Rojo
            case 'special_class':
                return '#722EB0'; // Morado
            case 'begin':
                return '#1352B9'; // Azul oscuro
            case 'holiday':
                return '#FFFF00'; // Amarillo
            case 'exam':
                return '#FF893C'; // Naranja
            case 'mon400_student_qualif':
                return '#B064CF';
            case 'merit':
                return '#CF8064';
            case 'tes_mon_remise':
                return '#7310A5';
            case 'later_matric':
                return '#7FFFC1';
            default:
                return '#2EB044'; // Verde
        }
    }

    private function getEventType($name)
    {
        if (strpos($name, 'Último día') !== false || strpos($name, 'ULTIMO DIA') !== false || strpos($name, 'Fin') !== false || strpos($name, 'Final') !== false || strpos($name, 'Fecha límite') !== false || strpos($name, 'Termina el') !== false && strpos($name, 'ÚLTIMO DIA') !== false ) {
            return 'last_day';
        } elseif (strpos($name, 'Solicitud Cursos Especiales') !== false) {
            return 'special_class';
        } elseif (strpos($name, 'Inicio') !== false) {
            return 'begin';
        } elseif (strpos($name, 'Asueto') !== false) {
            return 'holiday';
        } elseif (strpos($name, 'P. Ev. P.') !== false || strpos($name, 'S. Ev. P.') !== false || strpos($name, 'Exámenes finales') !== false || strpos($name, 'P. EV. P.') !== false || strpos($name, 'S. EV. P.')) {
            return 'exam';
        } elseif(strpos($name, 'Estudiantes del Curso Monográfico evalúan a los profesores') !== false){
            return 'mon400_student_qualif';
        } elseif(strpos($name, 'Acto al Mérito Estudiantil') !== false){
            return 'merit';
        }elseif(strpos($name, 'Estudiantes de Curso Monográfico (MON400) entregan sus monografías') !== false || strpos($name, 'Estudiantes entregan el Trabajo de Grado (TES500) a sus respectivas escuelas') !== false){
            return 'tes_mon_remise';
        }  elseif(strpos($name, 'riculación tardía') !== false){
            return 'later_matric';
        }else {
            return 'normal_day';
        }
    }

    private function transformBadgeDate($date) {
        $months = array(
            "enero" => "01",
            "febrero" => "02",
            "marzo" => "03",
            "abril" => "04",
            "mayo" => "05",
            "junio" => "06",
            "julio" => "07",
            "agosto" => "08",
            "septiembre" => "09",
            "octubre" => "10",
            "noviembre" => "11",
            "diciembre" => "12"
        );
        
        $date = str_replace(" al ", "-", $date);
        $dates = explode("-", $date);
        $formattedDates = [];
        foreach ($dates as $date) {
            $date = explode(" ", $date);
            $day = $date[0];
            $month = str_replace(array_keys($months), array_values($months), $date[1]);
            $month = trim($month);
            $formattedDates[] = $month . "/" . $day;
        }
        return implode(" - ", $formattedDates);
    }

    private function transformMultipleDates($date) {
        $dates = explode(" al ", $date);
        $formattedDates = [];
        foreach ($dates as $date) {
            $date = trim($date);
            $formattedDates[] = $this->transformDate($date);
        }
        return $formattedDates;
    }


    private function createWeeklyEvents(){
        $currentYear = date('Y');
        $currentMonth = date('m');
        $quarterStartTimestamp = "";
        $quarterEndTimestamp = "";
        switch ($currentMonth) {
            case ($currentMonth <= 4):
                $quarterStartTimestamp = strtotime("first day of January $currentYear");
                $quarterEndTimestamp = strtotime("last day of April $currentYear");
                break;
            case ($currentMonth <= 8):
                $quarterStartTimestamp = strtotime("first day of May $currentYear");
                $quarterEndTimestamp = strtotime("last day of August $currentYear");
                break;
            default:
                $quarterStartTimestamp = strtotime("first day of September $currentYear");
                $quarterEndTimestamp = strtotime("last day of December $currentYear");
        }
        $firstWeekTimestamp = strtotime("Monday", $quarterStartTimestamp);
        $events = [];
        for($i = 1; $i <= 15; $i++){
            $event = [];
            $event['id'] = uniqid();
            $event['name'] = "Inicio ". $i ."°. Semana";
            $event['date'] = date('F/d/Y', $firstWeekTimestamp);
            $event['type'] = "week";
            $event['everyYear'] = false;
            $event['color'] = "#27F8F2";
            $events[] = $event;
            $firstWeekTimestamp = strtotime("+1 week", $firstWeekTimestamp);
            if($firstWeekTimestamp > $quarterEndTimestamp){
                break;
            }
        }
        return $events;
    }
}
