@php
use Carbon\Carbon;

$now = Carbon::now();
$quarter = '';

if ($now->month >= 1 && $now->month <= 4) {
    $quarter = 'Enero - Abril '.$now->year;
} elseif ($now->month >= 5 && $now->month <= 8) {
    $quarter = 'Mayo - Agosto '.$now->year;
} else {
    $quarter = 'Septiembre - Diciembre '.$now->year;
}    
@endphp

<x-layouts.guest
    title="★ Calendario académico de la Universidad APEC ★ — Recomiéndame un profesor"
    h1="Calendario académico de UNAPEC"
    pAfterH1="Aquí puedes dar seguimiento del calendario de UNAPEC en el cuatrimestre actual de {{$quarter}}, para que tengas un control más fácil y prepararte mejor para las fechas importantes que tengas pendiente."
>

<x-slot name="metadesc">
    ➫ ¿Deseas dar un seguimiento más dinámico al calendario académico UNAPEC en el cuatrimestre {{$quarter}} y saber cuándo comienza cada actividad o evento? ¡Estás en el lugar indicado!. ➤ ➤ ¡No dudes en darte una vuelta, para que puedas observar durante el período completo las actividades que hay en UNAPEC! ;&#x29;
</x-slot>

<x-slot name="otherstyle">
  <link rel="stylesheet" href="{{asset('css/calendar.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/evo-calendar.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/evo-calendar.orange-coral.css')}}">
  <style>
    @media screen and (max-width: 454px){
        #background-calendar {
        display: none;
        z-index: 90;
        opacity: 0.76;
        position: fixed;
        height: 200%;
        width: 200%;
        bottom: 0;
        top: 0;
        left: 0;
        right: 0;
        background: rgba(0, 0, 0, .7) !important;
        overflow: hidden;
    }
    }
  </style>
</x-slot>

<x-slot name="otherjs">
<script src="{{asset('js/evo-calendar.min.js')}}" defer></script>
<script defer>
jQuery(function(){
    var ajax_route_events = "{{asset('js/calendarEvents.json')}}";
$.ajax({
  url: ajax_route_events ,
  dataType: "json",
  success: function(calendarEvents) {
      $('#calendar').evoCalendar({
          theme: 'Orange Coral',
          language: 'es',
          calendarEvents: calendarEvents,
          eventHeaderFormat: 'MM d, yyyy',
          firstDayOfWeek: 1,
          todayHighlight: true
      });
  }
});


window.addEventListener('resize', function() {
    var width = document.documentElement.clientWidth;
    var calendart = document.querySelector('#calendart');
    var backgroundCalendar = document.querySelector('#background-calendar');
    
    if (width >= 455) {    
      calendart.style.display = 'block';
      fadeInn(calendart, 250);
    } else if (width <= 454) {   
      calendart.style.display = 'none';
      fadeOutt(calendart, 250);
      backgroundCalendar.classList.remove('act');
      
      var ca = document.querySelector('#ca');
      ca.addEventListener('click', function() {
        fadeInn(calendart, 250);
        fadeInn(backgroundCalendar, 250);
        backgroundCalendar.classList.add('act');
      }); 
      
      backgroundCalendar.addEventListener('click', function() {
        fadeOutt(calendart, 250);
        fadeOutt(backgroundCalendar, 250);
        backgroundCalendar.classList.remove('act');
      });
    }
  });
  
  window.addEventListener('load', function() {
    window.dispatchEvent(new Event('resize'));
  });
  
  function fadeInn(element, duration) {
    element.style.opacity = 0;
    element.style.display = 'block';
    
    var start = null;
    function step(timestamp) {
      if (!start) start = timestamp;
      var progress = timestamp - start;
      element.style.opacity = Math.min(progress / duration, 1);
      if (progress < duration) {
        window.requestAnimationFrame(step);
      }
    }
    
    window.requestAnimationFrame(step);
  }
  
  function fadeOutt(element, duration) {
    element.style.opacity = 1;
    
    var start = null;
    function step(timestamp) {
      if (!start) start = timestamp;
      var progress = timestamp - start;
      element.style.opacity = Math.max(1 - progress / duration, 0);
      if (progress < duration) {
        window.requestAnimationFrame(step);
      } else {
        element.style.display = 'none';
      }
    }
    
    window.requestAnimationFrame(step);
  }
  

});
</script>
</x-slot>

<x-slot name="imgpage">
    {{asset('img/calendar.svg')}}
</x-slot>

<x-slot name="buttons">
  <div class="botones">
    <div class="box" style="--Color:#fc6045;">
      <div class="content">
        <div class="icon"><i class="fa-regular fa-calendar-days"></i></div>
        <div class="text">
          <h3>Ten en cuenta que...</h3>
          <p>Los eventos que encontrás en este calendario son extraídos de la página oficial del calendario de UNAPEC. Sin embargo, en ciertas situaciones, las actividades y/o eventos del calendario pueden variar (debido algún problema climático, reuniones, problemas con la plataforma, etc) o estar incorrectas en ciertos casos. Por lo que no te garantizamos que siempre sea al 100% exacta la información que te proporcionamos.</p>
        </div>
      </div>
    </div>
  </div>
</x-slot>

<x-slot name="general1">
  <div class="general1">
      <section class="esta-pagina">
          <h2>Seguimiento del calendario académico en el período actual</h2>
          <h6>¡Sin rodeos!</h6>

          <div class="ads">
            <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3525189773538188"
     crossorigin="anonymous"></script>
<!-- Anuncio cuadrado -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-3525189773538188"
     data-ad-slot="9017273686"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
          </div>

  <p>Darle un seguimiento adecuado al calendario académico es muy importante, ya que tendrás en cuenta cada detalle en las fechas propuestas por el calendario académico oficial de la Universidad APEC. Sólo basta con seleccionar el día que necesites, o cualquiera dentro del período actual.</p>

  <p style="margin-top: 23px;">
    El calendario académico de la Universidad APEC es una herramienta imprescindible para cualquier estudiante que desee mantenerse organizado y al día con las fechas y actividades importantes del semestre en curso. Este calendario no sólo muestra las fechas de los exámenes parciales y finales, sino que también incluye días feriados, asuetos, actividades comunes, actividades de estudiantes que hacen curso monográfico y trabajo de grado, y estudiantes de posgrados, entre otros eventos y actividades importantes. </p>
    
    <p style="margin-top: 23px;">
      Este calendario se actualiza regularmente para reflejar cualquier cambio o actualización en las fechas y actividades, por lo que es importante revisarlo con frecuencia para asegurarse de estar al tanto de cualquier cambio que pueda afectar los planes y horarios. Además, el calendario académico de la Universidad APEC es fácil de usar y está diseñado para ser intuitivo, lo que significa que cualquier estudiante puede acceder a él y encontrar la información que necesita rápidamente.
    </p style="margin-top: 23px;">
 
    <div class="ads">
      <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3525189773538188"
       crossorigin="anonymous"></script>
  <!-- horizontal -->
  <ins class="adsbygoogle"
       style="display:block"
       data-ad-client="ca-pub-3525189773538188"
       data-ad-slot="5695044141"
       data-ad-format="auto"
       data-full-width-responsive="true"></ins>
  <script>
       (adsbygoogle = window.adsbygoogle || []).push({});
  </script>
    </div>

    <p style="margin-top: 23px;">
    Por ejemplo, si deseas o necesitas saber la fecha de alguna evaluación parcial o examen final, todo lo que tiene que hacer es seleccionar la fecha en el calendario y ver la información relevante en la leyenda. Del mismo modo, si un estudiante desea conocer la fecha de un día feriado o asueto, simplemente debe buscar la fecha correspondiente en el calendario y la información aparecerá en la leyenda. Finalmente, el calendario académico de la Universidad APEC es una herramienta invaluable para cualquier estudiante que quiera tener éxito en su vida académica y mantenerse organizado y actualizado con todas las fechas y actividades importantes del cuatrimestre en curso.
  </p>


      <div class="console-log" id="calendart">
        <div class="log-content">
          <div id="calendar" style="margin-bottom: 30px;"></div>
        </div>
      </div>
      <button id="ca" style="display: none;" class="md-ripples ripples-bg-immer-weiss">Mostrar calendario</button>
      <div id="background-calendar"></div>

    <div class="back-table-info">
      <table class="table_info">
        <tbody>
            <tr>
                <td class="legend" colspan="2">
                    <p><br></p>
                    <p><strong>Leyenda</strong></p>
                    <p><br></p>
                </td>
            </tr>
            <tr>
                <td class="bullet-w">
                    
                    <div class="bullet-parent"><div class="bullet-f" style="background-color:#27F8F2; "></div></div>
                    
                </td>
                <td class="bullets-info">
                    <p class="parag">Indica el inicio de la semana</p>
                </td>
            </tr>
            
            <tr>
                <td class="bullet-w">
                    
                    <div class="bullet-parent"><div class="bullet-f" style="background-color:#7FFFC1; "></div></div>
                    
                </td>
                <td class="bullets-info">
                    <p class="parag">Indica el momento de matriculación tardía</p>
                </td>
            </tr>
            <tr>
                <td class="bullet-w">
                    
                    <div class="bullet-parent"><div class="bullet-f" style="background-color:#1352B9; "></div></div>
                    
                </td>
                <td class="bullets-info">
                    <p class="parag">Indica el inicio de alguna actividad o el rango de inicio de esta</p>
                </td>
            </tr>
            <tr>
                <td class="bullet-w">
                    
                    <div class="bullet-parent"><div class="bullet-f" style="background-color:#2EB044; "></div></div>
                    
                </td>
                <td class="bullets-info">
                    <p class="parag">Indica actividades comunes</p>
                </td>
            </tr>
            <tr>
                <td class="bullet-w">
                    
                    <div class="bullet-parent"><div class="bullet-f" style="background-color:#FF3030; "></div></div>
                    
                </td>
                <td class="bullets-info">
                    <p class="parag">Indica el &uacute;ltimo d&iacute;a o fecha l&iacute;mite de alguna actividad</p>
                </td>
            </tr>

            <tr>
                <td class="bullet-w">
                    
                    <div class="bullet-parent"><div class="bullet-f" style="background-color:#CF8064; "></div></div>
                    
                </td>
                <td class="bullets-info">
                    <p class="parag">Indica el acto al mérito estudiantil</p>
                </td>
            </tr>
            <tr>
                <td class="bullet-w">
                    
                    <div class="bullet-parent"><div class="bullet-f" style="background-color:#FFFF00; "></div></div>
                    
                </td>
                <td class="bullets-info">
                    <p class="parag">Indica los asuetos o d&iacute;as feriados</p>
                </td>
            </tr>
            <tr>
                <td class="bullets-info">
                    
                      <div class="bullet-parent"><div class="bullet-f" style="background-color:#7310A5;"></div></div>
                </td>
                <td class="bullets-info">
                    <p class="parag">Indica la solicitud de cursos especiales y actividades para los estudiantes de grado y monogr&aacute;fico</p>
                </td>
            </tr>
            <tr>
                <td class="bullet-w">
                    
                    <div class="bullet-parent"><div class="bullet-f" style="background-color:#8773c1; "></div></div>
                    
                </td>
                <td class="bullets-info">
                    <p class="parag">Indica la evaluaci&oacute;n de alumnos de monogr&aacute;ficos a sus respectivos docentes</p>
                </td>
            </tr>
            <tr>
                <td class="bullet-w">
                    
                    <div class="bullet-parent"><div class="bullet-f" style="background-color:#FF893C; "></div></div>
                    
                    
                </td>
                <td class="bullets-info">
                    <p class="parag">Indica la semana de evaluaci&oacute;n parcial o examen final</p>
                </td>
            </tr>
        </tbody>
    </table>
  </div>

  <div class="ads">
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3525189773538188"
     crossorigin="anonymous"></script>
<!-- horizontal -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-3525189773538188"
     data-ad-slot="5695044141"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
  </div>


  
  </section>
</div>
</x-slot>


</x-layouts.guest>