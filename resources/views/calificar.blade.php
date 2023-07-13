<x-layouts.guest title="★ Califica a un profesor de UNAPEC ★ — Recomiéndame un profesor" h1="Califica a un profesor"
    pAfterH1="Aquí podrás calificar a cualquier profesor disponible con los que hayas cursado, para orientar a los demás sobre cómo es dicho profesor.">

    <x-slot name="metadesc">
        ➜ Califica al docente de la Universidad APEC con el que hayas cursado y desees, así ayudas a los demás a saber si es un profesor recomendable . ➤ ➤ ¡Vamos, date una vuelta por aquí y prueba esta herramienta! ;&#x29;
    </x-slot>


    <x-slot name="otherstyle">
        <link rel="stylesheet" href="{{ asset('css/consejos.css') }}">
        <link rel="stylesheet" href="{{ asset('css/professors_subjects.css') }}">
        <link rel="stylesheet" href="{{ asset('css/qualif.css') }}">
        <link rel="stylesheet" href="{{ asset('css/roundslider.min.css') }}" />
    </x-slot>

    <x-slot name="otherjs">
        <script src="{{ asset('js/qualif.js') }}" defer></script>
        <script src="{{ asset('js/roundslider.min.js') }}" defer></script>
    </x-slot>

    <x-slot name="imgpage">
        @auth{{ asset('img/rate.svg') }}@endauth
        @guest{{ asset('img/need_auth.svg') }}@endguest
    </x-slot>

    <x-slot name="buttons">
        <div class="botones">
            <div class="box" style="--Color:#fc6045;">
                <div class="content">
                    <div class="icon">
                        @auth<i class="fa-solid fa-circle-exclamation"></i>@endauth
                        @guest<i class="fa-solid fa-user-astronaut"></i>@endguest
                    </div>
                    <div class="text">
                        @auth
                            <h3>Ten en cuenta que...</h3>
                            <p>Debes ser justo al calificar, el objetivo de la calificación y opinión hacia un maestro es
                                dar a conocer sus diferentes ámbitos profesionales en la enseñanza desde el punto de vista
                                de los estudiantes que han cursado algún período con dicho maestro. No se trata de
                                insultarlo o difamarlo con alguna mala intención.</p>
                        @endauth
                        @guest
                            <h3>Lo sentimos, pero...</h3>
                            <p>Aún no has iniciado sesión. Para calificar a algún profesor, tienes que tener una cuenta con
                                sesión iniciada, así que no dudes en iniciar sesión, o bien, registrarte en caso de no tener
                                una cuenta creada. ¡Es fácil y rápido hacerlo!</p>
                        @endguest
                    </div>
                </div>
            </div>
        </div>
    </x-slot>

    <x-slot name="general1">
        <div class="general1">
            <section class="esta-pagina">
                @auth

                    <h2>Formulario para calificación</h2>
                    <div class="filter_back">
                        <form action="{{ route('calificar.store') }}" method="POST" id="form_filter">
                            @csrf

                            <div class="dropdown-container">
                                <div class="textBox" effect="ripple" id="modality_filter">@if(request()->query('teacher'))<div class="career modali"><i class="fa-solid fa-chalkboard-user"></i><span class="car">{{ str(str_replace('-', ' ', request()->query('teacher')))->title()}}</span></div>@endif</div>
            
                                <i class="fa-solid fa-angle-down dropdown-before"></i>
                                <span class="career-title">Selecciona al profesor:</span>
                            </div>
                            @error('teacher_id')
                            <small style="color:#fc6045; font-style:italic;">{{$message}}</small>
                            @enderror

                            <div class="option" id="modality_option">
                                <div class="search-box" id="search_teacher_content">
                                    <input type="text" name="search_teacher" id="search_teacher" class="search"
                                        placeholder="Nombre del profesor..." value="">
                                    <span class="loader" id="loader"></span>
                                    <label for="search_subject" class="glass"><i class="fa-solid fa-magnifying-glass"></i>
                                    </label>
                                    <div class="border-expand"></div>
                                </div>
                                <section id="the_teachers">
                                    <span class="info_teach"><i class="fa-brands fa-searchengin"></i>Escribe el nombre del
                                        profesor al que deseas calificar</span>
                                </section>
                            </div>


                            <div class="dropdown-container">
                                <div class="textBox" effect="ripple" id="schedule_filter"></div>
                                <i class="fa-solid fa-angle-down dropdown-before"></i>
                                <span class="career-title">Cuatrimestre cursado:</span>
                            </div>
                            @error('quarter')
                            <small style="color:#fc6045; font-style:italic;">{{$message}}</small>
                            @enderror

                            <div class="option" id="schedule_option">
                                <div class="search-box" id="search_period_cont">
                                    <input type="text" name="" id="search_period" class="search"
                                        placeholder="Escribe el período, año o cuatrimestre">
                                    <label for="search_subject" class="glass"><i class="fa-solid fa-magnifying-glass"></i>
                                    </label>
                                    <div class="border-expand"></div>
                                </div>
                                @if($quarters != null)
                                @foreach ($quarters as $quarter)
                                    <div class="career schedul" effect="ripple"><i
                                            class="fa-regular fa-calendar-days"></i></i><span
                                            class="car">{{ $quarter['period'] }}</span>
                                    </div>
                                @endforeach
                                @endif
                                <div class="notFound" id="sch_not_f" aria-disabled="true">
                                    <div class="icon-not-found">
                                        <i class="fa-solid fa-exclamation"></i>
                                    </div> Período especificado no encontrado
                                </div>
                            </div>

                            <div class="range_inputs">

                                <div class="circle_container">
                                    <span class="descr">¿Cómo explica?</span>
                                    <span id="condition_1" class="condition_status"></span>
                                    <div id="explaining_rate"></div>
                                    @error('explaining_rate')
                                    <small style="color:#fc6045; font-style:italic;">{{$message}}</small>
                                    @enderror
                                </div>

                                <div class="circle_container">
                                    <span class="descr">¿Cómo evalúa?</span>
                                    <span id="condition_2" class="condition_status"></span>
                                    <div id="evaluation_rate"></div>
                                    @error('evaluation_rate')
                                    <small style="color:#fc6045; font-style:italic;">{{$message}}</small>
                                    @enderror
                                </div>

                                <div class="circle_container">
                                    <span class="descr">¿Retomarías con él/ella?</span>
                                    <span id="condition_3" class="condition_status"></span>
                                    <div id="class_again_rate"></div>
                                    @error('class_again_rate')
                                    <small style="color:#fc6045; font-style:italic;">{{$message}}</small>
                                    @enderror
                                </div>

                                <div class="circle_container">
                                    <span class="descr">¿Qué tan puntual fue?</span>
                                    <span id="condition_4" class="condition_status"></span>
                                    <div id="puntuality_rate"></div>
                                    @error('puntuality_rate')
                                    <small style="color:#fc6045; font-style:italic;">{{$message}}</small>
                                    @enderror
                                </div>



                                <div class="circle_container">
                                    <span class="descr">Calificación general</span>
                                    <span id="condition_5" class="condition_status"></span>
                                    <div id="general_rate"></div>
                                    @error('general_rate')
                                    <small style="color:#fc6045; font-style:italic;">{{$message}}</small>
                                    @enderror
                                </div>

                            </div>

                            <div class="comment_body">
                                <textarea class="text_c" name="body" id="body_opinion"
                                    placeholder="Describe cómo fue, para ti, y en general, cursar alguna asignatura con este docente" required></textarea>
                                    @error('body')
                                    <small style="color:#fc6045; font-style:italic;">{{$message}}</small>
                                    @enderror

                                    <span id="error_slider"></span>
                            </div>



                            <input type="hidden" name="teacher_id" value="{{ str(str_replace('-', ' ', request()->query('teacher')))->title()}}" id="teacher_selected">
                            <input type="hidden" name="quarter" value="" id="quarter_selected">
                            <button type="submit" id="submit_button" class="md-ripples ripples-bg-immer-weiss">Publicar
                                opinión</button>
                        </form>
                    </div>
                    <div class="fondo-select-responsive"></div>

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
                @endauth

                @guest
                    <h2>Para tener sesión iniciada</h2>

                    <p id="p_guest">Puedes acceder a la opción de <a id="login_guest" href="javascript:void(0)">Iniciar
                            sesión haciendo click aquí</a>, o bien, si aún no tienes una cuenta, puedes <a
                            href="{{ route('registro') }}">registrarte haciendo clic aquí</a>. Con esto podrás tener
                        acceso al formulario de evaluación docente y calificar a cualquier profesor disponible en el
                        sistema. Recuerda que es importante tener una cuenta activa para poder utilizar la mayor parte de
                        funcionalidades del sitio web. Si tienes alguna duda o problema con el inicio de sesión o el
                        registro, no dudes en ponerte en contacto con nosotros. ¡Esperamos verte pronto calificando a tus
                        profesores!</p>


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
                @endguest

            </section>
        </div>
    </x-slot>

</x-layouts.guest>
