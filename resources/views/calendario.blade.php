<x-layouts.guest
    title="★ Calendario académico de la Universidad APEC ★ — Recomiéndame un profesor"
    h1="Calendario académico de UNAPEC"
    pAfterH1="Aquí puedes dar seguimiento al cuatrimestre actual, para que tengas un control más fácil y prepararte mejor para las fechas importantes que tengas pendiente."
>

<x-slot name="metadesc">
    ➫ ¿Deseas dar un seguimiento más dinámico al calendario y saber cuándo comienza cada actividad o evento? ¡Estás en el lugar indicado!. ➤ ➤ ¡No dudes en darte una vuelta, para que puedas observar durante el período completo las actividades que hay en UNAPEC! ;&#x29;
</x-slot>

<x-slot name="otherstyle">
  <link rel="stylesheet" href="{{asset('css/calendar.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/evo-calendar.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/evo-calendar.orange-coral.css')}}">
</x-slot>

<x-slot name="otherjs">
<script src="{{asset('js/evo-calendar.min.js')}}" defer></script>

<script type="module" defer>

    import CalendarEvents from "{{asset('js/calendarEvents.json')}}" assert {type: 'json'}
jQuery(function(){

    $('#calendar').evoCalendar({
           theme: 'Orange Coral',
           language: 'es',
           calendarEvents: CalendarEvents,
           eventHeaderFormat: 'MM d, yyyy',
           firstDayOfWeek: 1,
           todayHighlight: true
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

  <p>
   Básicamente, este calendario académico extraído de la Universidad APEC muestra las fechas importantes del cuatrimestre en curso, incluyendo los exámenes parciales y finales, así como otras actividades académicas y eventos especiales. El rango de fechas cubre desde el inicio hasta el final del período. Dispones también de una leyenda que te indicará el significado de cada color del evento. Mantenerse actualizado con el calendario académico es fundamental para asegurarte de cumplir con todas tus responsabilidades tanto académicas como personales.
  </p>

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


      <div class="console-log" id="calendart">
        <div class="log-content">
          <div id="calendar" style="margin-bottom: 30px;"></div>
        </div>
      </div>
      <a id="ca" href="javascript:void(0)" style="display: none; text-decoration: none; padding: 15px" class="md-ripples ripples-bg-immer-weiss">Mostrar calendario</a>
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