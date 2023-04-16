<x-layouts.guest title="★ Calcular índice académico UNAPEC ★ — Recomiéndame un profesor"
    h1="Calcula tu índice académico fácilmente"
    pAfterH1="Con esta herramienta a tu disposición, podrás tener una idea de cómo será tu índice al prever tus calificaciones, o bien, para confirmar. Así, sabrás con mejor detalle cómo te irá y en qué condición académica podrías estar. Así que, no dudes en echarle un vistazo y probarla.">

    <x-slot name="metadesc">
        ➫ En esta página, podrás calcular tu índice académico, sin importar de qué carreras seas o el pensum que sigas
        &#x28;Actual o antiguo&#x29; . ➤ ➤ ¡No dudes en darte una vuelta, para que puedas proyectar tu índice académico
        cuatrimestral con mucha facilidad con la calculadora unapec! ;&#x29;
    </x-slot>


    <x-slot name="otherstyle">
        <link rel="stylesheet" href="{{ asset('css/calc.css') }}">
        <style>
            table, th, td{
    border-collapse: collapse;
    padding: 1rem;
    text-align: left;
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

body.Dark thead th:hover {
    background-color: #575757;

}

thead th {
    position: sticky;
    top: 0;
    left: 0;
    background-color: #f0f0f0fe;
    transition: all .25s ease;
}

thead th:hover {
    background-color: #cececefe;
}

tbody{
    width: 100%;
}

tbody tr {
    font-size: 15px;
    transition: all .25s ease;
}

tbody tr:hover {
    background-color: rgba(202, 202, 202, 0.4) !important;
    box-shadow: 2px 2px 12px rgba(0, 0, 0 .2), -1px -1px 8px rbga(0, 0, 0, .2);
    width: 100%;
    transform: scale(1.01);
}

body.Dark tr:hover{
    background-color: rgba(109, 109, 109, 0.6) !important;}


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

    .table__header .search_filter {
        width: 70%;
        align-self: center;
    }

    .table__header .search_filte:hover,
    .table__header .search_filter:has(input:focus) {
        width: 100%;
    }
}
        </style>
    </x-slot>

    <x-slot name="otherjs">
        <script src="{{ asset('js/calc.js') }}" defer></script>
    </x-slot>

    <x-slot name="buttons">
        <div class="botones">
            <div class="box-c" style="--Color:#fc6045;">
                <div class="content">
                    <div class="icon"><i class="fa-solid fa-percent"></i></div>
                    <div class="text">
                        <h3>Con esta calculadora...</h3>
                        <p>Puedes calcular el índice académico con cualquier carrera que desees dentro de esta
                            universidad, incluyendo el pensum actual y antiguo (para las carreras que han sido
                            reformadas). Así que, no dudes en utilizar esta herramienta para dicho fin.</p>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>


    <x-slot name="imgpage">
        {{ asset('img/indice.svg') }}
    </x-slot>

    <x-slot name="general1">
        <div class="general1">
            <div class="container">
                <div class="title">Calcula tu promedio cuatrimestral</div>
                @guest
                    <div class="dropdown-container">
                        <div class="textBox" effect="ripple"></div>
                        <i class="fa-solid fa-angle-down dropdown-before"></i>
                        <span class="career-title">Selecciona tu carrera:</span>
                    </div>
                @endguest
                @auth
                    <div class="dropdown-container">
                        <div class="textBox" effect="ripple"><i class="fa-solid {{ $iconClass }}"></i><span
                                class="car">{{ $userCareer }}</span></div>
                        <i class="fa-solid fa-angle-down dropdown-before"></i>
                        <span class="career-title aut_t">Selecciona tu carrera:</span>
                    </div>
                @endauth

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

                <form action="javascript:void(0)" id="calcForm" novalidate>
                    <div class="boxes-container">
                        <div class="boxes-grades" id="null">
                            <div class="box">
                                <div class="select-box">
                                    <div class="option-container">
                                        <div class="search-box">
                                            <input type="text" name="" id="search_subjectdf" class="search"
                                                placeholder="Introduce el nombre de alguna asignatura...">
                                            <label for="search_subjectdf" class="glass"><i
                                                    class="fa-solid fa-magnifying-glass"></i>
                                            </label>
                                            <div class="border-expand"></div>
                                        </div>

                                        <div class="grade-center notFound" aria-disabled="true">
                                            <div class="icon-not-found">
                                                <i class="fa-solid fa-exclamation"></i>
                                            </div> Ninguna asignatura coincide con ese nombre
                                        </div>

                                        <div class="subjects"></div>

                                    </div>
                                    <div class="selected md-ripples ripples-bg">
                                        <span class="info-subject">Selecciona una asignatura:</span>
                                    </div>

                                </div>
                            </div>

                            <div class="box box-grade">
                                <div class="selected-grade md-ripples ripples-bg">
                                    <span class="info-subject-grade">Calificación:</span>
                                </div>
                                <div class="select-box-grade">
                                    <div class="option-container-grade">
                                        @foreach ($grades as $grade)
                                            <div
                                                class="option_subject-grade grade-center md-ripples ripples-bg-immer-weiss">
                                                <label class="label_grade">{{ $grade->grade }}<input type="radio"
                                                        name="grade_selection" value="{{ $grade->value }}"
                                                        class="radio-grade"></label>
                                            </div>
                                        @endforeach

                                    </div>

                                </div>
                            </div>

                        </div>
                        <div class="boxes-grades" id="1">
                            <div class="box">
                                <div class="select-box">
                                    <div class="option-container">
                                        <div class="search-box">
                                            <input type="text" name="" id="search_subject" class="search"
                                                placeholder="Introduce el nombre de alguna asignatura...">
                                            <label for="search_subject" class="glass"><i
                                                    class="fa-solid fa-magnifying-glass"></i>
                                            </label>
                                            <div class="border-expand"></div>
                                        </div>

                                        <div class="grade-center notFound" aria-disabled="true">
                                            <div class="icon-not-found">
                                                <i class="fa-solid fa-exclamation"></i>
                                            </div> Ninguna asignatura coincide con ese nombre
                                        </div>

                                        <div class="spinner-charge">
                                            <div class="lds-roller">
                                                <div></div>
                                                <div></div>
                                                <div></div>
                                                <div></div>
                                                <div></div>
                                                <div></div>
                                                <div></div>
                                                <div></div>
                                            </div>
                                            <small style="font-size: 13px; text-align: center;">Extrayendo asignaturas
                                                del pensum...</small>
                                        </div>

                                        <div class="subjects"></div>

                                    </div>
                                    <div class="selected s_length md-ripples ripples-bg">
                                        <span class="info-subject">Selecciona una asignatura:</span>
                                    </div>
                                </div>
                            </div>

                            <div class="box box-grade">
                                <div class="selected-grade s_length md-ripples ripples-bg">
                                    <span class="info-subject-grade">Calificación:</span>
                                </div>
                                <div class="select-box-grade">
                                    <div class="option-container-grade">
                                        @foreach ($grades as $grade)
                                            <div
                                                class="option_subject-grade grade-center md-ripples ripples-bg-immer-weiss">

                                                <label class="label_grade">{{ $grade->grade }}<input type="radio"
                                                        name="grade_selection" value="{{ $grade->value }}"
                                                        class="radio-grade"></label>
                                            </div>
                                        @endforeach

                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="info_calc">
                        <button type="button" class="md-ripples ripples-bg" id="add_calc"><i
                                class="fa-solid fa-circle-plus"></i></button>
                    </div>
                    <div class="button-calc md-ripples ripples-bg-immer-weiss">
                        <button type="button" id="ShowIndex">¡Calcula mi índice!</button>
                    </div>

                    @auth
<span style="display: none;" id="careerSelected">@if($careerSp){{ $userCareer }}@endif</span>
<span style="display: none" id="Career_multiple_pensum">@if($careerCmp){{ $userCareer }}@endif</span>
                    @endauth

                    @guest
                        <span style="display: none;" id="careerSelected"></span>
                        <span style="display: none" id="Career_multiple_pensum"></span>
                    @endguest
                </form>

                <div class="toast">
                    <div class="toast-content">
                        <i class="fa-solid fa-exclamation check"></i>

                        <div class="info_calc_message">
                            <span class="texto texto-1">Error de cálculo</span>
                            <span class="texto texto-2">No dejes opciones sin seleccionar</span>
                        </div>
                    </div>
                    <div class="bar-progress"></div>
                </div>

                <div class="container-index">
                    <div class="index-card">
                        <div class="percent">
                            <div class="dot-index"></div>
                            <svg>
                                <circle cx="70" cy="70" r="70"></circle>
                                <circle cx="70" cy="70" r="70"></circle>
                            </svg>
                            <div class="number">
                                <span class="span-title"></span>
                                <p>Índice</p>
                            </div>
                            <div class="academic-condition">Condición académica:</div>
                            <span class="condt">
                            </span>
                        </div>
                    </div>
                </div>

                <div class="fondo-index"></div>
                <div class="fondo-select-responsive"></div>
                <div class="fondo-select-responsive-subject"></div>
                <div class="fondo-select-responsive-grade"></div>

            </div>


        </div>

    </x-slot>

    <x-slot name="general2">
        <div class="general2">
            <section class="Average">
                <h2>Calcula tu índice manualmente de forma sencilla</h2>
                <h6>¿Crees que sea posible? Pues sí lo creemos</h6>


                <p style="margin-top:23px;">
                    Si estás interesado en saber cómo calcular tu índice académico y cuáles son las condiciones
                    académicas que existen, aquí te explicamos algunos conceptos importantes que debes conocer.
                </p>


                <p style="margin-top:23px;">En primer lugar, es importante saber qué es un crédito. Un crédito es el valor que se le asigna a una
                    asignatura y se mide por el número de horas teóricas y/o prácticas que se imparten en una semana.
                </p>

                <p style="margin-top:23px;">En cuanto a las condiciones académicas, existen tres posibles: <strong>normal</strong>, <strong>a
                        prueba académica</strong> o de <strong>baja académica</strong>. <strong>La condición
                        normal</strong> se da cuando el índice académico en un período académico es de 2.00 o más.
                    <strong>La prueba académica</strong> se da cuando el índice cuatrimestral está por debajo de 2.00
                    puntos &#40;1.99 o menos&#41;. Y <strong>la baja académica</strong> se da cuando, debido al índice
                    académico, el estudiante pierde su derecho a una nueva matriculación en UNAPEC al obtener varias
                    pruebas académicas.</p>

                <p style="margin-top:23px;">Para calcular el índice académico, se pueden utilizar dos tipos de índices: el índice académico
                    cuatrimestral &#40;I.A.C.&#41;, que permite conocer la condición académica del cuatrimestre actual;
                    y el índice académico acumulado &#40;I.A.A.&#41;, que permite conocer el promedio de las
                    calificaciones y créditos correspondientes a las asignaturas cursadas durante toda la carrera.</p>

                <p style="margin-top:23px;">Para calcular el índice académico, es necesario conocer el total de créditos y el total de puntos
                    obtenidos en las asignaturas y/o prácticas cursadas en el cuatrimestre. Los puntos se obtienen
                    multiplicando los créditos de la asignatura por el valor numérico correspondiente a la escala de
                    calificaciones de programas de grado.</p>

                <p style="margin-top:23px;">Aquí te presentamos la escala de calificaciones utilizada:</p>
                <div class="table__body">
                <table>
                    <thead>
                        <tr>
                            <th>Calificación Numérica</th>
                            <th>Literal</th>
                            <th>Calificación alfabética</th>
                            <th>Valor Numérico para cálculo de índice</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>90-100</td>
                            <td>Excelente</td>
                            <td>A</td>
                            <td>4 puntos</td>
                        </tr>
                        <tr>
                            <td>80-89</td>
                            <td>Bueno</td>
                            <td>B</td>
                            <td>3 puntos</td>
                        </tr>
                        <tr>
                            <td>70-79</td>
                            <td>Regular</td>
                            <td>C</td>
                            <td>2 puntos</td>
                        </tr>
                        <tr>
                            <td>60-69</td>
                            <td>Reprobado</td>
                            <td>D</td>
                            <td>1 punto</td>
                        </tr>
                        <tr>
                            <td>0-59</td>
                            <td>Reprobado</td>
                            <td>F</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>-</td>
                            <td>Reprobado por inasistencia</td>
                            <td>FN</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>-</td>
                            <td>Convalidado</td>
                            <td>L</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>-</td>
                            <td>Exonerado</td>
                            <td>E</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>-</td>
                            <td>Retirado</td>
                            <td>R</td>
                            <td>-</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            </section>
        </div>
    </x-slot>

    <x-slot name="general3">
        <div class="general3">
            <section class="main-final">
                <h2>Lo que debes hacer para calcular tu índice académico</h2>
                <p style="margin-top: 23px;">Para calcular el índice académico, es necesario tener en cuenta las calificaciones y
                    créditos correspondientes a las asignaturas cursadas en cada período académico. El cálculo se
                    realiza sumando los puntos obtenidos en cada asignatura, que se obtienen al multiplicar la
                    calificación numérica por el valor correspondiente a la calificación alfabética.</p>

                <p style="margin-top: 23px;">En primer lugar, se debe verificar si hay alguna asignatura que no tenga peso en el
                    índice académico (como MAT100, deporte, algunas asignaturas de inglés, etc) y que, por lo tanto, no se tenga en cuenta al calcularlo. Una vez hecho esto, se
                    suman los puntos y créditos de las asignaturas que sí cuentan para el cálculo.</p>

                <p style="margin-top: 23px;">Luego, se divide la suma total de puntos entre la suma total de créditos para obtener el índice
                    académico cuatrimestral (I.A.C) correspondiente a ese período académico. Si el resultado es mayor o
                    igual a 2.0, la condición académica se considera normal, de lo contrario, se considera prueba
                    académica. He aquí un ejemplo  (los datos de color diferente son los que no se toman en cuenta):</p>
                    <div class="table__body">
                <table>
                    <thead>
                        <tr>
                            <th>Código</th>
                            <th>Asignatura</th>
                            <th>Crédito</th>
                            <th>Calificación numérica</th>
                            <th>Calificación Alfabética</th>
                            <th>Valor</th>
                            <th>Puntos</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>CON107</td>
                            <td>Contabilidad Empresarial</td>
                            <td>5</td>
                            <td>85</td>
                            <td>B</td>
                            <td>3</td>
                            <td style="text-align: right !important;">15</td>
                        </tr>
                        <tr>
                            <td>ESP101</td>
                            <td>Análisis de textos discursivos</td>
                            <td>3</td>
                            <td>79</td>
                            <td>C</td>
                            <td>2</td>
                            <td style="text-align: right !important;">6</td>
                        </tr>
                        <tr>
                            <td style="color:#fc6045;">MAT100</td>
                            <td style="color:#fc6045;">Matemática Pre-universitaria</td>
                            <td style="color:#fc6045;">3</td>
                            <td style="color:#fc6045;">74</td>
                            <td style="color:#fc6045;">C</td>
                            <td style="color:#fc6045;">2</td>
                            <td style="text-align: right !important; color:#fc6045;">-</td>
                        </tr>
                        <tr>
                            <td>SOC011</td>
                            <td>Historia Social Dominicana</td>
                            <td>3</td>
                            <td>95</td>
                            <td>A</td>
                            <td>4</td>
                            <td style="text-align: right !important;">12</td>
                        </tr>
                        <tr>
                            <td style="color:#fc6045;">SOC200</td>
                            <td style="color:#fc6045;">Introducción a la Sociología</td>
                            <td style="color:#fc6045;">3</td>
                            <td style="color:#fc6045;">-</td>
                            <td style="color:#fc6045;">R</td>
                            <td style="color:#fc6045;">-</td>
                            <td style="text-align: right !important; color:#fc6045;">-</td>
                        </tr>
                        <tr>
                            <td colspan="4" style="text-align: center !important;">Créditos: 11</td>
                            <td colspan="3" style="text-align: right !important;">Puntos: 33</td>
                        </tr>
                        <tr>
                            <td colspan="7" style="text-align: center !important;">I.A.C = 33/11 = 3.00</td>
                        </tr>
                    </tbody>
                </table>
            </div>

                <p style="margin-top: 23px;">En esta tabla se presenta la información de las asignaturas cursadas por un estudiante en su primer cuatrimestre, junto con su crédito, calificación numérica, calificación alfabética, valor y puntos correspondientes. Además, se tiene en cuenta que, no se agregó SOC200 debido a que tiene una calificación "R", tampoco MAT100, debido a que no tiene peso en el índice académico.</p>
            </section>
        </div>
    </x-slot>

</x-layouts.guest>
