<x-layouts.guest title="★ Calcular índice académico UNAPEC ★ — Recomiéndame un profesor" 
h1="Calcula tu índice académico fácilmente"
    pAfterH1="Con esta herramienta a tu disposición, podrás tener una idea de cómo será tu índice al prever tus calificaciones, o bien, para confirmar. Así, sabrás con mejor detalle cómo te irá y en qué condición académica podrías estar. Así que, no dudes en echarle un vistazo y probarla.">

    <x-slot name="metadesc">
        ➫ En esta página, podrás calcular tu índice académico, sin importar de qué carreras seas o el pensum que sigas &#x28;Actual o antiguo&#x29; . ➤ ➤ ¡No dudes en darte una vuelta, para que puedas proyectar tu índice académico cuatrimestral con mucha facilidad! ;&#x29;
    </x-slot>


    <x-slot name="otherstyle">
        <link rel="stylesheet" href="{{ asset('css/calc.css') }}">
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
                <p>Puedes calcular el índice académico con cualquier carrera que desees dentro de esta universidad, incluyendo el pensum actual y antiguo (para las carreras que han sido reformadas). Así que, no dudes en utilizar esta herramienta para dicho fin.</p>
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
      <div class="textBox" effect="ripple"><i class="fa-solid {{ $iconClass }}"></i><span class="car">{{ $userCareer}}</span></div>
      <i class="fa-solid fa-angle-down dropdown-before"></i>
      <span class="career-title aut_t">Selecciona tu carrera:</span>
    </div>
@endauth

                <div class="option">
                    @foreach ($careers as $career)
                        <div class="{{$career->class}}" effect="ripple">
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
                                        <label class="label_grade">{{$grade->grade}}<input type="radio" name="grade_selection" value="{{$grade->value}}" class="radio-grade"></label>
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
                                        <div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
                                        <small style="font-size: 13px; text-align: center;">Extrayendo asignaturas del pensum...</small>
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
                                        
                                        <label class="label_grade">{{$grade->grade}}<input type="radio" name="grade_selection" value="{{$grade->value}}" class="radio-grade"></label>
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
        </div>

    </x-slot>

</x-layouts.guest>
