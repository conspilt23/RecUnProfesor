<x-layouts.guest
     title="★ Ver el progreso de tu carrera en el pensum que sigues ★ — Recomiéndame un profesor"
    h1="Mirar el progreso en tu pensum"
    pAfterH1="Aquí podrás visualizar de forma efectiva el progreso que llevas en tu carrera, por medio del pensum que sigues.">

    <x-slot name="metadesc">
        ➫ En esta página, encontrarás herramientas que te ayudarán con el cálculo del progreso que llevas del pensum! ;&#x29;
    </x-slot>

    <x-slot name="otherstyle">
        <link rel="stylesheet" href="{{ asset('css/consejos.css') }}">
        <link rel="stylesheet" href="{{ asset('css/calc.css') }}">

        <link rel="stylesheet" href="{{ asset('css/professors_subjects.css') }}">
        <style>

#button_saver {
    display: none;
    font-size: 14px;
    width: 50% !important;
    margin: auto;
}
#data_table {
    display: flex;
    justify-content: space-between;
    flex-flow: row wrap;
    width: 100%;
}

.status-selector {
    background: #ede8e8;
    box-shadow: 0px 0px 3px 6px rgba(217, 217, 217, 0.2);
    border-radius: 17px;

}
body.Dark .status-selector {
    background: #3f3e3e;
    color: #fff;
    box-shadow: 0px 0px 3px 3px rgba(0,0,0,0.1);
}
.container-master-doughnut {
    margin-top: 50px;
}
.container-master-doughnut, .container-master-pie {
    width: 100%;
    height: 100%;
    display: none;
    box-shadow: 0px 0px 9px 5px rgb(0 0 0 / 30%);
    background-color: #fff; 
    border-radius: 5px;
    flex-flow: row nowwrap;
    padding: 25px;
}

body.Dark .container-master-doughnut, body.Dark .container-master-pie {
    background-color: #424242;
}

#container-pie, #container-doughnut {
    width: 100%;
    max-width: 700px;
    height: 100%;
    max-height: 600px;
}
    table, th, td{
    border-collapse: collapse;
    padding: 1rem;
    text-align: left;
}



.box {
    width: inherit !important;
}

.alert-success {
    background: #059911;
    padding: 20px;
    text-align: center;
    width: 50%;
    border-radius: 10px;
    margin: auto;
    color: #fff;
}

.alert-danger {
    background: #bb0706;
    padding: 20px;
    text-align: center;
    width: 50%;
    border-radius: 10px;
    margin: auto;
    color: #fff;

}

.in_progresss, tr:has(#in_progress_subjects), #in_progress_subjects {
    background: rgb(245 240 12 / 54%);
    pointer-events: all;
}

.pending td select {
    pointer-events: all;
}
.approved_gr td select,
.pending td select {
    opacity: 1;
}

.approved, tr:has(#approv_subcj), #approv_subcj {
    background: rgb(19 213 35 / 54%);
}

tr:has(#pendings_subjects), #pendings_subjects{background: #A3AFF9;}

.blocked_re {
    background: rgba(250, 16, 16, 0.2);
    pointer-events: none;
}
tr:has(#blocked_subjectss), #blocked_subjectss {
    background: rgba(250, 16, 16, 0.2);
}

.approved td, .blocked_re td, .in_progresss td {
    color: #4a4747;
}

body.Dark .approved td, body.Dark .blocked_re td, body.Dark .in_progresss td {
    color: #fff;
}

.blocked_re td select {
    opacity: .4;
}

thead, tr {
    border-bottom: 1px solid #cccccc;
}


body.Dark thead, body.Dark tr {
    border-bottom: 1px solid #545454;
}

body.Dark table {
    background-color: #424242;
}

body.Dark thead th {
    background-color: #383838;

}



thead th {
    position: sticky;
    top: 0;
    left: 0;
    background-color: #f0f0f0fe;
    transition: all .25s ease;
}



tbody{
    width: 100%;
}

tbody tr {
    font-size: 15px;
    transition: all .25s ease;
}

tbody tr:hover {
 
    width: 100%;
    transform: scale(1.01);
}




.table__body {
    width: 95%;
    max-height: calc(89% - 1.6rem);
    background-color: #fff;
    margin: .8rem auto;
    border-radius: .6rem;
    box-shadow: 0px 0px 9px 5px rgb(0 0 0 / 30%);
    overflow: overlay;
}

body.Dark .table__body {
    background-color: #424242;
}

.table__body::-webkit-scrollbar {
    width: 0.43rem;
    height: 0.43rem;
}

.table__body::-webkit-scrollbar-thumb {
    border-radius: .5rem;
    background-color: rgba(10, 10, 10, 0.267);
}
tbody tr td, 
tbody tr td section {
    transition: .2s ease-in-out;
}

table {
    width: 100%;
}

main .general3 {
    display: block !important;
}

@media (max-width: 1043px){
    .container-master-doughnut, .container-master-pie{
        flex-flow: row wrap;
        overflow:auto;
    }

    #container-pie .table__body table, #container-doughnut .table__body table {
        width: 100%;
    }


}


@media (max-width: 1000px){
    td:not(:first-of-type){
        min-width: 12.1rem;
    }


}

@media (max-width: 766px){
    .table__header {
        flex-direction: column;
    }
    .table__header .info_teacher {
        margin-bottom: 20px;
    }


}


@media screen and (max-width: 889px){
main .general1 {
    padding: 0 100px 10px 50px !important;
}
}

@media screen and (max-width: 809px) {
    main .general1 {
    padding: 0 100px 10px 50px !important;
}

}

@media screen and (max-width: 770px) {
main .general1 {
    padding: 0 100px 10px 31px !important;
}
}

@media screen and (max-width: 567px){
    main .general1 {
    padding: 0 59px 10px 30px !important;
}
}

@media screen and (max-width: 523px){
    main .general1 {
    padding: 0 52px 0 30px !important;
}
}

@media screen and (max-width: 447px){
    main .general1 {
    padding: 0 33px 10px 30px !important;
}
}
        </style>
    </x-slot>

    <x-slot name="otherjs">
        <script src="{{ asset('js/progresPensum.js') }}" defer></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        @auth
        @if(!is_null($progress))
        <script defer>
            var userProgress = @json($progress);
            
            function applyUserProgress() {
                // Itera a través de los datos de progreso del usuario y aplica las clases CSS correspondientes
                userProgress.forEach(function (item) {
                    var selectName = item.select_name;
                    var optionValue = item.option_value;

                    // Busca el select por su name y configura las clases CSS
                    var select = $('select[name="' + selectName + '"]');
                    var tr = select.parent().parent();
                     // Elimina todas las clases
                    if (optionValue == 1) {
                        tr.removeClass('in_progress approved blocked_re');
                        tr.addClass('pending');
                        select.val(optionValue);
                        select.attr('disabled', false);
                        
                    } else if (optionValue == 2) {
                        tr.removeClass('pending approved blocked_re');
                        tr.addClass('in_progresss');
                        select.val(optionValue);
                        select.attr('disabled', false);
                        
                    } else if (optionValue == 3) {
                        tr.removeClass('pending in_progresss blocked_re');
                        tr.addClass('approved');
                        select.val(optionValue);
                        select.attr('disabled', false);
                    }

                    
                });
            }

        </script>
        @endif
        @endauth
    </x-slot>

    <x-slot name="imgpage">
        {{ asset('img/pensum.svg') }}
    </x-slot>

    <x-slot name="buttons">
        <div class="botones">
            <div class="box" style="--Color:#fc6045;">
                <div class="content">
                    <div class="icon"><i class="fa-solid fa-building-columns"></i></div>
                    <div class="text">
                        <h3>¡Calcula el progreso con tu pensum!</h3>
                        <p>En esta sección, podrás ver tu progreso en la carrera @auth{{$userCareer}}@endauth @guest {{"que estudies"}} @endguest, con el objetivo de que puedas mantener un control y orden de las asignaturas que llevas. ¡Esperemos que encuentres esta herramienta útil para ti!</p>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>

    <x-slot name="general1">
        <div class="general1">
            <section class="esta-pagina">
                <h2>Cuatrimestres desglozados</h2>
                <h6>Para la carrera @auth{{$userCareer}}@endauth @guest {{"Que estudies"}} @endguest </h6>


                <p style="margin-top:23px;">A continuación, encontrarás todos los cuatrimestres desglozados relacionados a la carrera que estudias. Solo basta con seleccionar la caja de opciones de las materias que tienes "<span><strong>liberadas</strong></span>" a partir del primer cuatrimestre, ya sea la opción: en curso, aprobada o pendiente. Las asignaturas que aún no hayas desbloqueado o liberado, aparecerán de forma <span style="color: red;">rojiza</span> hasta que apruebes el o los pre-requisitos necesarios.</p>

                <p style="margin-top:23px;">La acción de "<span><strong>cursando</strong></span>" te ayuda a mantener aún más el control de las asignaturas que llevas actualmente en el cuatrimestre en curso. Así que, te recomendamos usarlo para el cuatrimestre actual que lleves en curso.</p>

                <p style="margin-top:23px;">Ten en cuenta que, para aprovechar al máximo nuestras funciones de seguimiento y guardar tu progreso de manera segura, es esencial que dispongas de una cuenta con <strong>sesión iniciada</strong>. Tu cuenta te brindará la capacidad de almacenar y acceder a tu información académica de manera conveniente y personalizada.</p>

                
                <p style="margin-top:23px;">A continuación, te proporcionamos una vista detallada de los cuatrimestres correspondientes a tu carrera (si ya está seleccionada), así como otros detalles relevantes para tu formación académica:</p>
                
            </section>

            <div class="fondo-index"></div>
            <div class="fondo-select-responsive"></div>
            <div class="fondo-select-responsive-subject"></div>
        </div>
    </x-slot>

    <x-slot name="general2">
        <div class="general2">
            <section class="Average">
                <h2>Todos los cuatrimestres de la carrera que cursas</h2>

            @guest
            <div id="quarters">
                <div class="dropdown-container">
                    <div class="textBox" effect="ripple"></div>
                    <i class="fa-solid fa-angle-down dropdown-before"></i>
                    <span class="career-title">Selecciona tu carrera:</span>
                </div>
            <div class="option">
                @foreach ($careers as $career)
                    <div class="{{ $career->class }}" effect="ripple">
                        <i class="fa-solid {{ $career->icon_class }}"></i><span
                            class="car">{{ $career->name }}</span>
                    </div>
                @endforeach
            </div>

            <div class="dropdown-container_pensum">
                <div class="textBox_pensum" effect="ripple"></div>
                <i class="fa-solid fa-angle-down dropdown-before_pensum"></i>
                <span class="career-title_pensum">Selecciona el pensum:</span>
            </div>

            <div class="option_pensum" id="multiple_pensum"></div>
        </div>
            @endguest


                
            @auth
            <form action="" method="" id="saving_changes">
                @csrf
                <div id="quarters">@if($careerCmp)<div class="dropdown-container_pensum" id="pen_cont"><div class="textBox_pensum" effect="ripple"></div><i class="fa-solid fa-angle-down dropdown-before_pensum"></i><span class="career-title_pensum">Selecciona el pensum:</span></div><div class="option_pensum" id="multiple_pensum"></div>@endif</div>
             <div class="button-calc">  
            <button type="submit" id="button_saver" class="md-ripples ripples-bg-immer-weiss">Guardar cambios</button>
            <div id="status-messages" style="margin-top: 30px;"></div>
                </div>
                <input type="hidden" name="user_id" value={{Auth::user()->id}}>
            </form>
            @endauth  
            </section>
                </div>
        

            @auth
            <span style="display: none;" id="careerSelected">@if($careerSp){{ $userCareer }}@endif</span>
            <span style="display: none;" id="Career_multiple_pensum">@if($careerCmp){{ $userCareer }}@endif</span>
            @endauth

            @guest
            <span style="display: none;" id="careerSelected"></span>
            <span style="display: none" id="Career_multiple_pensum"></span>
            @endguest

        </div>
    </x-slot>

    <x-slot name="general3">
        <div class="general3">
            <section class="main-final">
                <h2>Representación gráfica de tu progreso</h2>
                @auth
                <p>Una vez hayas cargado tu pensum, tendrás a tu disposición una herramienta gráfica intuitiva que te permitirá llevar un seguimiento detallado de tu progreso en la maravillosa carrera de {{$userCareer}}. Estos gráficos proporcionarán una visión clara y fácil de entender de tus logros y avances a lo largo de tu trayecto académico, lo que te ayudará a mantenerte motivado y enfocado en tus metas educativas.</p>

                
                <p style="margin-top: 23px;">Los gráficos te mostrarán información valiosa, como las materias completadas, las que están pendientes, en progreso y las bloqueadas, al igual que tu promedio académico, y otros datos relevantes para tu carrera. Esta herramienta te permitirá identificar áreas en las que puedes mejorar y celebrar tus éxitos a medida que avanzas en tu formación universitaria. Además, podrás personalizar los gráficos según tus preferencias para que se adapten mejor a tus necesidades específicas.</p>

                <p style="margin-top: 23px;">La visualización gráfica de tu progreso en tu carrera de {{$userCareer}} no solo te ayudará a planificar tu carga académica de manera más efectiva, sino que también te proporcionará una visión clara de tu camino hacia la graduación. Esto te permitirá tomar decisiones informadas sobre tus estudios, como la elección de materias electivas, la distribución del tiempo y los recursos, y la identificación de áreas en las que necesitas dedicar más esfuerzo. En pocas palabras, estos gráficos serán una herramienta valiosa para tu éxito universitario.</p>
                @endauth

                @guest
                <p>Una vez hayas seleccionado tu carrera y hayacargado tu pensum, tendrás a tu disposición una herramienta gráfica intuitiva que te permitirá llevar un seguimiento detallado de tu progreso la carrera que estudies. Estos gráficos proporcionarán una visión clara y fácil de entender de tus logros y avances a lo largo de tu trayecto académico, lo que te ayudará a mantenerte motivado y enfocado en tus metas educativas.</p>

                <p style="margin-top: 23px;">Los gráficos te mostrarán información valiosa, como las materias completadas, las que están pendientes, en progreso y las bloqueadas, al igual que tu promedio académico, y otros datos relevantes para tu carrera. Esta herramienta te permitirá identificar áreas en las que puedes mejorar y celebrar tus éxitos a medida que avanzas en tu formación universitaria. Además, podrás personalizar los gráficos según tus preferencias para que se adapten mejor a tus necesidades específicas.</p>

                <p style="margin-top: 23px;">La visualización gráfica de tu progreso en la carrera que estudies, no solo te ayudará a planificar tu carga académica de manera más efectiva, sino que también te proporcionará una visión clara de tu camino hacia la graduación. Esto te permitirá tomar decisiones informadas sobre tus estudios, como la elección de materias electivas, la distribución del tiempo y los recursos, y la identificación de áreas en las que necesitas dedicar más esfuerzo. En pocas palabras, estos gráficos serán una herramienta valiosa para tu éxito universitario.</p>


                @endguest

                <div class="container-master-pie">
                    <div id="container-pie">
                        <canvas id="pieChart"></canvas>
                    </div>
                    <div class="table__body" id="data_table">
                        <table style="width: 95%; margin-right: 10px;" border="1" cellpadding="1">
                            <tbody>
                            <tr>
                            <td colspan="2" style="text-align: center;">&nbsp;Leyenda</td>
                            </tr>
                            <tr>
                            <td>Aprobadas</td>
                            <td id="approv_subcj">&nbsp;0</td>
                            </tr>
                            <tr>
                            <td style="width: 92.8177%;">&nbsp;En curso</td>
                            <td id="in_progress_subjects">&nbsp;0</td>
                            </tr>
                            <tr>
                            <td style="width: 92.8177%;">&nbsp;Bloqueadas</td>
                            <td id="blocked_subjectss">&nbsp;0</td>
                            </tr>
                            <tr>
                            <td style="width: 92.8177%;">&nbsp;Pendiente</td>
                            <td id="pendings_subjects">0</td>
                            </tr>
                            </tbody>
                            </table>
    
                            <table style="
                            width: 95%; margin-top: 10px;"  border="1" cellpadding="1">
                                <tbody>
                                <tr>
                                <td style="width: 99.1626%; text-align: center;" colspan="2">&nbsp;Asignaturas</td>
                                </tr>
                                <tr>
                                <td style="width: 92.8177%;">&nbsp;Totales</td>
                                <td style="width: 6.34496%;" id="total_subjects">&nbsp;0</td>
                                </tr>
                                <tr>
                                <td style="width: 92.8177%;">&nbsp;Aprobadas</td>
                                <td style="width: 6.34496%;" id="approved_subjects">&nbsp;0</td>
                                </tr>
                                <tr>
                                <td style="width: 92.8177%;">&nbsp;Restante</td>
                                <td style="width: 6.34496%;" id="reamining_subjects">&nbsp;0</td>
                                </tr>
                                <tr>
                                <td style="width: 92.8177%;">&nbsp;% Aprobadas</td>
                                <td style="width: 6.34496%;" id="percentage_approved_subjects">&nbsp;0</td>
                                </tr>
                                <tr>
                                <td style="width: 92.8177%;">% Restantes</td>
                                <td style="width: 6.34496%;" id="percentage_remaining_subjects">&nbsp;0</td>
                                </tr>
                                </tbody>
                                </table>
    
                    </div>
                </div>



                <div class="container-master-doughnut">
                    <div id="container-doughnut">
                        <canvas id="doughnutChart"></canvas>
                    </div>

                    <div class="table__body">
                        <table style="width: 98%; height: 98%; margin: auto;" border="1" cellpadding="1">
                            <tbody>
                            <tr>
                            <td style="width: 99.1626%; text-align: center;" colspan="2">&nbsp;Creditos</td>
                            </tr>
                            <tr>
                            <td style="width: 92.8177%;">&nbsp;Total</td>
                            <td style="width: 6.34496%;" id="total_credits">&nbsp;0</td>
                            </tr>
                            <tr>
                            <td style="width: 92.8177%;">&nbsp;Aprobados</td>
                            <td style="width: 6.34496%;" id="approved_credits">&nbsp;0</td>
                            </tr>
                            <tr>
                            <td style="width: 92.8177%;">&nbsp;Restante</td>
                            <td style="width: 6.34496%;" id="remaining_credits">&nbsp;0</td>
                            </tr>
                            <tr>
                            <td style="width: 92.8177%;">&nbsp;% Aprobados</td>
                            <td style="width: 6.34496%;" id="percentage_approved_credits">&nbsp;0</td>
                            </tr>
                            <tr>
                            <td style="width: 92.8177%;">% Restante</td>
                            <td style="width: 6.34496%;" id="remaining_percentage">&nbsp;0</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
           
            </section>
        </div>
    </x-slot>

</x-layouts.guest>
