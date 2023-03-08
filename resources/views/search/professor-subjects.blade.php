<x-layouts.guest
     title="★ Secciones de {{ str($professor->name)->title() }} UNAPEC ★ — Recomiéndame un profesor"
    h1="Secciones de {{ str($professor->name)->title() }}"
    pAfterH1="Aquí podrás visualizar las secciones actuales de este docente.">

    <x-slot name="metadesc">
        ➫ En esta página, encontrarás todas las secciones relacionadas con {{ str($professor->name)->title() }} en el cuatrimestre {{ $formatted_term }}. ➤ ➤ ¡No dudes en darte una vuelta, para que puedas ver las secciones de este docente y tener referencia para tu selección de asignaturas! ;&#x29;
    </x-slot>

    <x-slot name="otherstyle">
        <link rel="stylesheet" href="{{ asset('css/consejos.css') }}">
        <link rel="stylesheet" href="{{ asset('css/professors_subjects.css') }}">
    </x-slot>

    @if ($professor->subjects->count() > 0)
    <x-slot name="otherjs">
        <script src="{{ asset('js/profesor-subjects.js') }}" defer></script>
    </x-slot>
    @endif

    <x-slot name="imgpage">
        {{ asset('img/section.svg') }}
    </x-slot>

    <x-slot name="buttons">
        <div class="botones">
            <div class="box" style="--Color:#fc6045;">
                <div class="content">
                    <div class="icon"><i class="fa-solid fa-chalkboard-user"></i></div>
                    <div class="text">
                        <h3>En este período...</h3>
                        @if ($professor->subjects->count() > 0)
                            <p>{{ $first_word . ' tiene ' . $professor->subjects->count() . ($professor->subjects->count() > 1 ? ' secciones, por lo que puedes echar un vistazo y ver cuál de sus clases y horarios son los más adecuados para ti, en caso de que hayas decidido cursar este o cualquier otro cuatrimestre posterior con ' . $first_word . '.' : ' sección, puedes verificar si esa única sección es adecuada para ti en caso de que busques cursar con ' . $first_word . '.') }}
                            </p>
                        @else
                            <p>{{ $first_word . ' actualmente no tiene secciones disponibles. Esto puede ocurrir por varias razones, una de ellas podría ser que ' . $first_word . ' no dará docencia este cuatrimestre. Te recomendamos buscar a otros profesores con asignaturas similares.' }}
                            </p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </x-slot>

    <x-slot name="general1">
        <div class="general1">
            <section class="esta-pagina">

                @if ($professor->subjects->count() > 0)
                <h2>Secciones detalladas</h2>
                
                <div class="table-parent">
                    <div class="table__header">
                        <div class="info_teacher">
                            <h3>Secciones de {{ $first_word }}</h3>
                            <h4 style="margin-top: 12px;">{{ $formatted_term }}</h4>
                        </div>
                        <div class="search_filter">
                            <input type="search" placeholder="Escribe el dato que deseas encontrar"
                                id="filter_search_table">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </div>
                    </div>
                    <div class="table__body">
                        <table>
                            <thead>
                                <tr>
                                    <th class="header_table md-ripples ripples-bg">NRC <span class="class-arrow"><i
                                                class="fa-solid fa-circle-up"></i></span></th>
                                    <th class="header_table md-ripples ripples-bg">Código <span class="class-arrow"><i
                                                class="fa-solid fa-circle-up"></i></span></th>
                                    <th class="header_table md-ripples ripples-bg">Asignatura <span class="class-arrow"><i
                                                class="fa-solid fa-circle-up"></i></span></th>
                                    <th class="header_table md-ripples ripples-bg">Créditos <span class="class-arrow"><i
                                                class="fa-solid fa-circle-up"></i></span></th>
                                    <th class="header_table md-ripples ripples-bg">Modalidad <span class="class-arrow"><i
                                                class="fa-solid fa-circle-up"></i></span></th>
                                    <th class="header_table md-ripples ripples-bg">Edificio <span class="class-arrow"><i
                                                class="fa-solid fa-circle-up"></i></span></th>
                                    <th class="header_table md-ripples ripples-bg">Aula <span class="class-arrow"><i
                                                class="fa-solid fa-circle-up"></i></span></th>
                                    <th class="header_table md-ripples ripples-bg">Horario <span class="class-arrow"><i
                                                class="fa-solid fa-circle-up"></i></span></th>
                                    <th class="header_table md-ripples ripples-bg">Días <span class="class-arrow"><i
                                                class="fa-solid fa-circle-up"></i></span></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($sections as $section)
                                    <tr class="tr_count">
                                        <td>{{ $section->nrc }}</td>
                                        <td>{{ $section->course }}</td>
                                        <td>{{ $section->name }}</td>
                                        <td>
                                          @foreach ($section->schedules as $schedule)
                                          <section class="{{ $loop->count > 1 && $schedule->credits === 0 ? '' : 's_top' }}">{{ $loop->count > 1 && $schedule->credits === 0 ? '' : $schedule->credits }}</section>
                                          @endforeach
                                        </td>
                                        <td>
                                            @foreach ($section->schedules as $schedule)
                                                <section class="s_top">{{ $schedule->type }}</section>
                                            @endforeach
                                        </td>
                                        <td>
                                            @foreach ($section->schedules as $schedule)
                                                <section class="s_top">{{ $schedule->building }}</section>
                                            @endforeach
                                        </td>
                                        <td>
                                            @foreach ($section->schedules as $schedule)
                                                <section class="s_top">{{ $schedule->room ?? '-' }}</section>
                                            @endforeach
                                        </td>
                                        <td>
                                            @foreach ($section->schedules as $schedule)
                                                <section class="s_top">{{ $schedule->begin_time }} -
                                                    {{ $schedule->end_time }}</section>
                                            @endforeach
                                        </td>
                                        <td>
                                            @foreach ($section->schedules as $schedule)
                                                <section class="s_top">{{ $schedule->day ?? '-' }}</section>
                                            @endforeach
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div id="notF"><i class="fa-solid fa-triangle-exclamation" id="warning_notF"></i>
                            <p>Resultados no encontrados</p>
                        </div>
                    </div>
                    
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

                <div class="buttons_settings">
                    <a href="{{'/opiniones/' . str(str_replace('-', ' ', $professor->name))->slug()}}" class="md-ripples ripples-bg-immer-weiss"><span>Ver opiniones</span></a>
                    <a href="{{route('inicio')}}" class="md-ripples ripples-bg-immer-weiss"><span>Buscar a otro docente</span></a>
                </div>
                @else 
                <h2>Actualmente no hay secciones</h2>
                <p style="margin-bottom: 50px;">Lamentamos decirte que, en el período actual, el docente {{ str($professor->name)->title() }} no tiene secciones disponibles. Te recomendamos buscar otros docentes con secciones similares a las que estabas buscando. Quizá en otro período vuelva a tener secciones disponibles.</p>

                <div class="ads">
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
                @endif



            </section>
        </div>
    </x-slot>

</x-layouts.guest>
