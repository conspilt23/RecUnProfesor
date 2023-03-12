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

  <style>
    #calendart {
    display: block;
}

.orange-coral {
    -webkit-box-shadow: 0 10px 50px -20px rgb(255, 153, 102, 0.65);
            box-shadow: 0 10px 50px -20px rgb(255, 153, 102, 0.65);
    border: 2px solid #fc9567;
}
.orange-coral .calendar-sidebar {
    background: #fc9567;
    background: -o-linear-gradient(left, #ff5e62, #ff9966);
    background: -webkit-gradient(linear, left top, right top, from(#ff5e62), to(#ff9966));
    background: linear-gradient(to right, #ff5e62, #ff9966);
    -webkit-box-shadow: 5px 0 18px -3px rgb(255, 152, 101);
            box-shadow: 5px 0 18px -3px rgb(255, 152, 101);
}
.orange-coral.sidebar-hide .calendar-sidebar {
    -webkit-box-shadow: none;
            box-shadow: none;
}
.orange-coral .calendar-sidebar > .month-list::-webkit-scrollbar-thumb:hover {
    background: #ffd3bd;
}
.orange-coral .calendar-sidebar > .month-list > .calendar-months > li:hover {
    background-color: rgba(255, 255, 255, 0.20);
}
.orange-coral .calendar-sidebar > .month-list > .calendar-months > li.active-month {
    background-color: rgba(255, 255, 255, 0.40);
}
.orange-coral .calendar-sidebar > span#sidebarToggler,
.orange-coral #eventListToggler {
    background-color: #ff9665;
    -webkit-box-shadow: 0 0 18px -3px rgb(255, 153, 102, 0.65);
            box-shadow: 0 0 18px -3px rgb(255, 153, 102, 0.65);
}
.orange-coral th[colspan="7"] {
    position: relative;
    font-size: 30px;
    color: #fc9567;
}
.orange-coral th[colspan="7"]::after {
    content: '';
    display: block;
    width: 92%;
    height: 1px;
    margin: 0 auto;
    background: #ff9966;
}
.orange-coral tr.calendar-body .calendar-day .day:hover {
    background-color: rgba(255, 153, 102, 0.32);
    color: #ff6363;
}
.orange-coral tr.calendar-body .calendar-day .day.calendar-today {
    background: #ff2b30;  /* fallback for old browsers */  /* Chrome 10-25, Safari 5.1-6 */
    background: -o-linear-gradient(left, #ff2b30, #f16722);
    background: -webkit-gradient(linear, left top, right top, from(#ff2b30), to(#f16722));
    background: linear-gradient(to right, #ff2b30, #f16722); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
}
.orange-coral tr.calendar-body .calendar-day .day.calendar-active,
.orange-coral tr.calendar-body .calendar-day .day.calendar-active:hover {
    border-color: #f04b4e;
}
.orange-coral tr.calendar-body .calendar-day .day.calendar-today:hover {
    color: #fff;
}
.orange-coral .calendar-events {
    background-color: #fff;
}
.orange-coral .calendar-events::-webkit-scrollbar-thumb {
    background: #fc9567;
    border-radius: 5px;
}
.orange-coral .calendar-events::-webkit-scrollbar-thumb:hover {
    background: #dc855e;
}
.orange-coral .event-container > .event-icon > div.event-bullet-event,
.orange-coral .event-indicator > .type-bullet > div.type-event {
    background-color: #ff4d55;
}
.orange-coral .event-list > .event-empty {
    background-color: rgba(255, 150, 101, 0.15);
    border: 1px solid #ff9665;
}
.orange-coral .event-list > .event-empty > p {
    color: #ff6663;
}
.orange-coral .event-container > .event-info > p.event-title > span {
    color: #ff9665;
    background-color: rgba(255, 150, 101, 0.15);
    border: 1px solid #ff9665;
    transition: all .5s cubic-bezier(0.165, 0.84, 0.44, 1);
}

.orange-coral .event-container:hover > .event-info > p.event-title > span {
    color: #fff;
    background-color: rgba(255, 150, 101);
    border: 1px solid #ff9665;
}

@media only screen and (max-width: 1282px) {
    .orange-coral .calendar-inner::after {
        background-color: rgba(160, 131, 119, 0.5);
    }
    .orange-coral .calendar-events {
        -webkit-box-shadow: -5px 0 18px -3px rgba(255, 152, 101, 0.5);
                box-shadow: -5px 0 18px -3px rgba(255, 152, 101, 0.5);
    }
    .orange-coral.event-hide .calendar-events {
        -webkit-box-shadow: none;
                box-shadow: none;
    }
}

@media screen and (max-width: 1085px){
    .calendar-table tbody {
        right: 28px;
        position: relative;
    }
}

@media screen and (max-width: 1065px){
    .calendar-table tbody {
        right: auto !important;
    }
}

@media screen and (max-width: 516px){
    .orange-coral th[colspan="7"] {

        font-size: 20px;
        }

        body.Dark .orange-coral th[colspan="7"] {

            font-size: 20px;
            }
    
    tr.calendar-header .calendar-header-day, tr.calendar-body .calendar-day {
        font-size: 15px;
    }
    
    }
    
    @media screen and (max-width: 828px){
        .orange-coral .calendar-sidebar > .calendar-year {
            background: #fc9567;
            background: -o-linear-gradient(left,#ff7b64,#f96);
            background: -webkit-gradient(linear,left top, right top,from(#ff7b64),to(#f96));
            background: linear-gradient(to right,#ff7b64,#f96);
            -webkit-box-shadow: 0 5px 18px -3px rgba(152, 91, 61, 0.65);
            box-shadow: 0 3px 8px -3px rgba(152, 91, 61, 0.65);
            height: 45px;
            position: relative;
            top: -1px;
        }
        .orange-coral .calendar-sidebar > .month-list {
            background: -o-linear-gradient(left,#ff5e62,#f96);
            background: -webkit-gradient(linear,left top, right top,from(#ff5e62),to(#f96));
            background: linear-gradient(to right,#ff5e62,#f96);
        }
    
        body.Dark .orange-coral .calendar-sidebar {
            border-right: none;
        }
        body.Dark .orange-coral .calendar-sidebar > .calendar-year {
            background: #222831;
            -webkit-box-shadow: 0 3px 8px -3px rgba(0, 0, 0, 0.65);
                    box-shadow: 0 3px 8px -3px rgba(0, 0, 0, 0.65);
        }
        body.Dark .orange-coral .calendar-sidebar > .month-list {
            background: #192435;
        }
        body.Dark .orange-coral .calendar-sidebar > span#sidebarToggler {
            right: 0;
        }
        body.Dark .orange-coral #eventListToggler, body.Dark .orange-coral .calendar-sidebar>span#sidebarToggler {
            -webkit-box-shadow: none;
            box-shadow: none;
        }
        body.Dark .orange-coral .calendar-inner {
            -webkit-box-shadow: 5px 0 18px -3px rgba(0, 0, 0, 0.35);
            box-shadow: 0 5px 18px -3px rgba(0, 0, 0, 0.65);
        }
        body.Dark .orange-coral tr.calendar-body .calendar-day .day.calendar-active,
        body.Dark .orange-coral tr.calendar-body .calendar-day .day.calendar-active:hover {
            border-width: 1px;
        }
        body.Dark .orange-coral tr.calendar-body .calendar-day .day.calendar-today .event-indicator {
            -webkit-transform: translate(-50%, 3px);
            -ms-transform: translate(-50%, 3px);
            transform: translate(-50%, 3px);
        }
        body.Dark .orange-coral tr.calendar-body .calendar-day .day.calendar-active .event-indicator {
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }
        body.Dark .orange-coral .event-indicator {
            -webkit-transform: translate(-50%, 0);
            -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
        }
        body.Dark .orange-coral .calendar-events {
            padding: 20px 15px;
        }
        body.Dark .orange-coral.event-hide .calendar-events {
            padding: 0 15px;
        }
    }
    
@media screen and (max-width: 425px) {
    tr.calendar-header .calendar-header-day, tr.calendar-body .calendar-day {
        font-size: 14px;
    
    }

    body.Dark  tr.calendar-header .calendar-header-day, tr.calendar-body .calendar-day {
        font-size: 14px;
    
    }

}

@media screen and (max-width: 374px){
    .orange-coral th[colspan="7"] {
        font-size: 15px;
    }
    body.Dark .orange-coral th[colspan="7"] {
        font-size: 15px;
    }
}

body.Dark .orange-coral {
    -webkit-box-shadow: 0 10px 50px -20px rgba(19, 31, 51, 0.65);
            box-shadow: 0 10px 50px -20px rgba(19, 31, 51, 0.65);
    border: 2px solid #222831;
    color: #EEEEEE;
}
body.Dark .orange-coral .calendar-sidebar {
    background: #222831;
    border-right: 2px solid #222831;
    -webkit-box-shadow: 0 0 18px -3px rgba(0, 0, 0, 0.65);
            box-shadow: 0 0 18px -3px rgba(0, 0, 0, 0.65);
}
body.Dark .orange-coral.sidebar-hide .calendar-sidebar {
    -webkit-box-shadow: none;
            box-shadow: none;
}
body.Dark .orange-coral .calendar-sidebar > .month-list::-webkit-scrollbar-thumb:hover {
    background: #cee1ff;
}
body.Dark .orange-coral .calendar-sidebar > .month-list > .calendar-months > li {
    text-transform: uppercase;
}
body.Dark .orange-coral .calendar-sidebar > .month-list > .calendar-months > li:hover {
    background-color: rgba(255, 255, 255, 0.20);
}
body.Dark .orange-coral .calendar-sidebar > .month-list > .calendar-months > li.active-month {
    background-color: #00adb5;
    font-weight: 600;
}
body.Dark .orange-coral .calendar-sidebar > span#sidebarToggler,
body.Dark .orange-coral #eventListToggler {
    background-color: #222831;
    /* right: -2px; */
    -webkit-box-shadow: 0 0 18px -3px rgba(0, 0, 0, 0.65);
            box-shadow: 0 0 18px -3px rgba(0, 0, 0, 0.65);
}
body.Dark .orange-coral .calendar-sidebar > span#sidebarToggler {
    right: -2px;
}
body.Dark .orange-coral button.icon-button > span.bars {
    background-color: #00adb5;
}
body.Dark .orange-coral button.icon-button > span.bars::before {
    background-color: #12cbd4;
}
body.Dark .orange-coral button.icon-button > span.bars::after {
    background-color: #027e84;
}
body.Dark .orange-coral .calendar-sidebar > .calendar-year > button.icon-button > span,
body.Dark .orange-coral button.icon-button > span.chevron-arrow-right {
    display: block;
    border-right: 6px solid #00adb5;
    border-bottom: 6px solid #027e84;
}
body.Dark .orange-coral .calendar-sidebar > .calendar-year > button.icon-button > span {
    border-width: 4px;
}
body.Dark .orange-coral .calendar-inner {
    background-color: #393e46;
    -webkit-box-shadow: 5px 0 18px -3px rgba(0, 0, 0, 0.35);
            box-shadow: 5px 0 18px -3px rgba(0, 0, 0, 0.35);
}
body.Dark .orange-coral .calendar-inner td {
    color: #fff;
}
body.Dark .orange-coral th[colspan="7"] {
    position: relative;
    color: #00adb5;
}
body.Dark .orange-coral th[colspan="7"]::after {
    content: '';
    display: block;
    width: 92%;
    height: 1px;
    margin: 0 auto;
    background: #027e84;
}
body.Dark .orange-coral tr.calendar-body .calendar-day .day:hover {
    background-color: rgba(255, 255, 255, 0.12);
    color: #00f4ff;
}
body.Dark .orange-coral tr.calendar-body .calendar-day .day.calendar-today {
    background: #00adb5;
}
body.Dark .orange-coral tr.calendar-body .calendar-day .day {
    border-width: 2px;
    border-radius: 0;
    color: #fff;
}
body.Dark .orange-coral tr.calendar-body .calendar-day .day.calendar-active,
body.Dark .orange-coral tr.calendar-body .calendar-day .day.calendar-active:hover {
    border-color: #EEEEEE;
    color: #EEEEEE;
}
body.Dark .orange-coral tr.calendar-body .calendar-day .day.calendar-today:hover {
    color: #EEEEEE;
}
body.Dark .orange-coral .calendar-events {
    background-color: #192435;
    padding: 70px 20px 60px 20px;
}
body.Dark .orange-coral .calendar-events::-webkit-scrollbar-thumb {
    background: #fff;
    border-radius: 5px;
}
body.Dark .orange-coral .calendar-events::-webkit-scrollbar-thumb:hover {
    background: #cee1ff;
}
body.Dark .orange-coral .calendar-events p {
    color: #EEEEEE;
    text-align: left;
}
body.Dark .orange-coral .calendar-inner::after {
    background-color: rgba(25, 36, 53, 0.65);
}
body.Dark .orange-coral .event-container {
    border-radius: 0;
}
body.Dark .orange-coral .event-container:hover {
    background-color: #5d6979;
}
body.Dark .orange-coral .event-container > .event-icon > div {
    border: 2px solid transparent;
}
body.Dark .orange-coral .event-container:hover > .event-icon > div {
    border-color: #fff;
} 
body.Dark .orange-coral .event-container > .event-icon > div.event-bullet-birthday,
body.Dark .orange-coral .event-indicator > .type-bullet > div.type-birthday {
    background-color: #6c72bf;
}

body.Dark .orange-coral .event-container > .event-info > p.event-title > span {
    color: #fff;
    border-radius: 0;
    background-color: rgba(0,173,181,.15);
    border: 1px solid #00adb5;
}
body.Dark .orange-coral .event-container:hover > .event-info > p.event-title > span {
    background-color: rgb(0 173 181);
}

body.Dark .orange-coral .event-list > .event-empty {
    background-color: rgba(0, 173, 181, 0.15);
    border: 1px solid #00adb5;
}
body.Dark .orange-coral .event-list > .event-empty > p {
    color: #ffff;
}
@media only screen and (max-width: 1282px) {
    body.Dark .orange-coral .event-indicator {
        -webkit-transform: translate(-50%, -100%);
        -ms-transform: translate(-50%, -100%);
        transform: translate(-50%, -100%);
    }
    body.Dark .orange-coral .calendar-events {
        -webkit-box-shadow: -5px 0 18px -3px rgba(0, 0, 0, 0.65);
        box-shadow: -5px 0 18px -3px rgba(0, 0, 0, 0.65);
    }
    body.Dark .orange-coral.event-hide .calendar-events {
        -webkit-box-shadow: none;
        box-shadow: none;
    }
}

@media screen and (max-width: 1011px){
    .event-container>.event-info>p.event-title>span {
        right: -17px;
        font-size: 9px;
        padding: 1px 3px;
    }

    .event-container>.event-info>p.event-title {
        font-size: 16px;
    }
}


</style>
</x-slot>

<x-slot name="otherjs">
<script src="{{asset('js/evo-calendar.js')}}" defer></script>
<script type="module" >
    import CalendarEvents from "{{asset('js/calendarEvents.json')}}" assert {type: 'json'}
    $(document).ready(function(){
        $('#calendar').evoCalendar({
           theme: 'Orange Coral',
           language: 'es',
           calendarEvents: CalendarEvents,
           eventHeaderFormat: 'MM d, yyyy',
           firstDayOfWeek: 1,
           todayHighlight: true
    });
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