<x-layouts.guest  title="➤ Opiniones de {{ str($professor->name)->title() }} UNAPEC — Recomiéndame un profesor"
        h1="Opiniones de {{ str($professor->name)->title() }}"
        pAfterH1="Aquí podrás visualizar todas las opiniones de {{$first_word}}.">

        <x-slot name="metadesc">
            ➫ En esta página, podrás ver las opiniones generales de estudiantes de la Universidad APEC sobre {{ str($professor->name)->title() }} . ➤ ➤ ✅¡Siéntete cómodo y mira las opiniones de {{$first_word}} que los estudiantes han redactado para ti!✅ ;&#x29;
          </x-slot>

    <x-slot name="otherstyle">
        <link rel="stylesheet" href="{{ asset('css/consejos.css') }}">
        <link rel="stylesheet" href="{{ asset('css/professors_subjects.css') }}">
        <link rel="stylesheet" href="{{ asset('css/teachers_opinions.css') }}">
        <link rel="stylesheet" href="{{asset('css/pagination.css')}}" />
    </x-slot>

    <x-slot name="otherjs">
        <script src="{{ asset('js/teachers_opinions.js') }}" defer></script>
        <script src="{{asset('js/pagination.js')}}" defer></script>
    </x-slot>

    <x-slot name="imgpage">
        {{ asset('img/comments.svg') }}
    </x-slot>

    <x-slot name="buttons">
        @if($opinions->count() > 0)
        @if($general_rate_avg <= 40)
        <div class="botones">
            <div class="box" style="--Color:#ff1818;">
                <div class="content">
                    <div class="icon"><i class="fa-solid fa-circle-exclamation"></i></div>
                    <div class="text">
                        <h3>Este profesor no es recomendable...</h3>
                        <p>De acuerdo a las opiniones y evaluaciones hechas por los estudiantes que han tomando clase con este docente, se estimó que no es recomendable.</p>
                    </div>
                </div>
            </div>
        </div>
        @elseif($general_rate_avg >= 41 && $general_rate_avg <= 71)
        <div class="botones">
            <div class="box" style="--Color:#ff7700;">
                <div class="content">
                    <div class="icon"><i class="fa-solid fa-triangle-exclamation"></i></div>
                    <div class="text">
                        <h3>Profesor recomendable, pero a medias.</h3>
                        <p>De acuerdo a las opiniones y evaluaciones hechas por los estudiantes, se estimó que es más o menos recomendable. Puedes revisar las opiniones más abajo para determinar si deseas cursar con este docente.</p>
                    </div>
                </div>
            </div>
        </div>
        @elseif($general_rate_avg > 71)
        <div class="botones">
            <div class="box" style="--Color:#0af92a;">
                <div class="content">
                    <div class="icon"><i class="fa-regular fa-circle-check"></i></div>
                    <div class="text">
                        <h3>¡Profesor muy recomendable!</h3>
                        <p>Según las opiniones y evaluaciones de los alumnos, este profesor es muy recomendable, por lo que puedes sin dudar seleccionar una de sus secciones y pasar un cuatrimestre agradable. Así que no dudes en ver sus secciones para ver cúal es la más favorable para ti.</p>
                    </div>
                </div>
            </div>
        </div>
        @endif
    @else
    <div class="botones">
        <div class="box" style="--Color:#0ab9f9;">
            <div class="content">
                <div class="icon"><i class="fa-solid fa-user-slash"></i></div>
                <div class="text">
                    <h3>Actualmente</h3>
                    <p>Nadie ha comentado sobre este profesor, por lo que no podemos decirte con certeza qué tan recomendable es. Si ya has tomado alguna asignatura con él, no dudes en comentar tu opinión para tener una referencia de cuán recomendable es.</p>
                </div>
            </div>
        </div>
    </div>
    @endif
    </x-slot>

    <x-slot name="general1">
        <div class="general1">
            <section class="esta-pagina">

                <h2>Resultados generales de calificación</h2>
                <div class="rating-panel">
                    <div class="rate">
                        <div class="percent" style="--color:{{$opinions->count() > 0 ? $explaining_color : '#0ab9f9;'}} --percent:{{$explaining_rate ?? '0'}}">
                            <div class="dot_p"></div>
                        <svg>
                            <circle cx="70" cy="70" r="70" ></circle>
                            <circle cx="70" cy="70" r="70" ></circle>
                        </svg>
                        <div class="number">
                            <span class="number_percent">{{$explaining_rate ?? '0'}}<span class="sign_percent">%</span></span>
                        </div>
                        </div>
                        <p class="info_rate">Claridad al explicar</p>
                    </div>

                    <div class="rate">
                        <div class="percent" style="--color:{{$opinions->count() > 0 ? $evaluation_color : '#0ab9f9;'}} --percent:{{$evaluation_rate ?? '0'}}">
                            <div class="dot_p"></div>
                        <svg>
                            <circle cx="70" cy="70" r="70" ></circle>
                            <circle cx="70" cy="70" r="70" ></circle>
                        </svg>
                        <div class="number">
                            <span class="number_percent">{{$evaluation_rate ?? '0'}}<span class="sign_percent">%</span></span>
                        </div>
                        </div>
                        <p class="info_rate">Evaluación</p>
                    </div>

                    <div class="rate">
                        <div class="percent" style="--color:{{$opinions->count() > 0 ? $class_again_color : '#0ab9f9;'}} --percent:{{$class_again_rate ?? '0'}}">
                            <div class="dot_p"></div>
                        <svg>
                            <circle cx="70" cy="70" r="70" ></circle>
                            <circle cx="70" cy="70" r="70" ></circle>
                        </svg>
                        <div class="number">
                            <span class="number_percent">{{$class_again_rate ?? '0'}}<span class="sign_percent">%</span></span>
                        </div>
                        </div>
                        <p class="info_rate">Retomar clases</p>
                    </div>

                    <div class="rate">
                        <div class="percent" style="--color:{{$opinions->count() > 0 ? $puntuality_color : '#0ab9f9;'}} --percent:{{$puntuality_rate ?? '0'}}">
                            <div class="dot_p"></div>
                        <svg>
                            <circle cx="70" cy="70" r="70" ></circle>
                            <circle cx="70" cy="70" r="70" ></circle>
                        </svg>
                        <div class="number">
                            <span class="number_percent">{{$puntuality_rate ?? '0'}}<span class="sign_percent">%</span></span>
                        </div>
                        </div>
                        <p class="info_rate">Puntualidad</p>
                    </div>

                    <div class="rate">
                        <div class="percent" style="--color:{{$opinions->count() > 0 ? $general_color : '#0ab9f9;'}} --percent:{{$general_rate ?? '0'}}">
                            <div class="dot_p"></div>
                        <svg>
                            <circle cx="70" cy="70" r="70" ></circle>
                            <circle cx="70" cy="70" r="70" ></circle>
                        </svg>
                        <div class="number">
                            <span class="number_percent">{{$general_rate ?? '0'}}<span class="sign_percent">%</span></span>
                        </div>
                        </div>
                        <p class="info_rate">Calificación general</p>
                    </div>
                   
                    </div>
                    
                </div>
            </section>
        </div>
    </x-slot>
    <x-slot name="general3">
        <div class="general3">
            <section class="main-final">
                <h2>Opiniones</h2>

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


    @if ($errors->any())
    <div style="border: 0;
    font: inherit;
    font-size: 100%;
    margin: 0;
    padding: 0;
    vertical-align: initial;"><div icondescription="describes the close button" role="status" class="cds--toast-notification cds--toast-notification--error"><svg focusable="false" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" fill="currentColor" width="20" height="20" viewBox="0 0 20 20" aria-hidden="true" class="cds--toast-notification__icon"><path d="M10,1c-5,0-9,4-9,9s4,9,9,9s9-4,9-9S15,1,10,1z M13.5,14.5l-8-8l1-1l8,8L13.5,14.5z"></path><path d="M13.5,14.5l-8-8l1-1l8,8L13.5,14.5z" data-icon-path="inner-path" opacity="0"></path><title>error icon</title></svg><div class="cds--toast-notification__details"><div class="cds--toast-notification__title">Hubo un problema al pubicar tu respuesta o al enviar reporte</div><div class="cds--toast-notification__subtitle"><span>Revisa los siguientes errores e inténtalo de nuevo:
    
    <ul style="margin-top: 10px;">
    @foreach ($errors->get('opinion_id') as $error)
        <li>{{ $error }}</li>
    @endforeach
@foreach ($errors->get('body') as $error)
    <li>{{ $error }}</li>
@endforeach
@foreach($errors->get('reason') as $error)
<li> {{ $error }}</li>
@endforeach
@foreach($errors->get('type') as $error)
<li> {{ $error }}</li>
@endforeach
@foreach($errors->get('_id') as $error)
<li> {{ $error }}</li>
@endforeach
    </ul>
    </span></div></div></div></div>
        
    


@endif


@if($opinions->count() > 0)
@foreach($opinions as $opinion)
  <div class="container">
        <div class="comment__container opened" id="{{ $opinion->id }}" data-type="opinion" data-commentid="{{$opinion->id}}">
            <div class="comment__card" data-container="{{$opinion->id}}">
              <div class="comment__user">
                  <div class="auth_name">
                  <span class="avatar_p">{!!Avatar::create($opinion->user->username)->setDimension(45)->setFontSize(22)->toSvg();!!}</span>
                  <h3 class="comment__title">{{ $opinion->user->username }}</h3>
              </div>
              <div class="date_ago">
                  <p class="comment__ago">{{ $opinion->created_at->diffForHumans() }}</p>
                  <p class="comment__ago">{{ $opinion->quarter}}</p>
              </div>
              </div>
              <p class="body-text">
                {{ $opinion->body }}
              </p>
              <div class="settings_comment">
              @auth<div class="report__flag md-ripples ripples-bg"><i class="fa-solid fa-flag"></i> Reportar</div>@endauth
              <div class="comment__card-footer">
                @auth
                    <div data-type="opinion" data-commentid="{{$opinion->id}}" class="md-ripples ripples-bg like-button"><i class="fa-solid fa-thumbs-up"></i><span class="like-count">{{$opinion->positive_reactions_count}}</span></div>
                @endauth
                @guest
                <div class="md-ripples ripples-bg"><i class="fa-solid fa-thumbs-up"></i><span class="like-count">{{$opinion->positive_reactions_count}}</span></div>
                @endguest
                @auth
                <div data-type="opinion" data-commentid="{{$opinion->id}}" class="md-ripples ripples-bg dislike-button"><i class="fa-solid fa-thumbs-down"></i><span class="dislike-count">{{$opinion->negative_reactions_count}}</span></div>
                @endauth
                @guest
                <div class="md-ripples ripples-bg"><i class="fa-solid fa-thumbs-down"></i><span class="dislike-count">{{$opinion->negative_reactions_count}}</span> </div>
                @endguest
                <div class="show-replies getR md-ripples ripples-bg"><i class="fa-regular fa-comments"></i>{{$opinion->replies_count}}</div>
                @auth<div class="answer md-ripples ripples-bg" data-parent-id="{{ $opinion->id }}">Responder</div>@endauth
              </div>
            </div>
        </div>


</div>
  </div>
@endforeach
@else 
<p>Ninguna opinión disponible por el momnento. Te recomendamos buscar a otro docente con asignaturas similares, o bien, si ya has tomado alguna asignatura con dicho docente, no dudes en comentar tu opinión.</p>
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
@endif


                <div class="conte">
                  <a href="{{'/evaluar-profesor?teacher=' . str(str_replace('-', ' ', $professor->name))->slug()}}" class="btn_form md-ripples ripples-bg-immer-weiss" id="showForm"><span> Comentar sobre este profesor</span></a>
                  <a href="{{'/secciones/' . str(str_replace('-', ' ', $professor->name))->slug()}}" class="btn_form md-ripples ripples-bg-immer-weiss"> <span> Ver las secciones de este docente</span></a>
                </div>

                  {{ $opinions->links() }}

                  {{-- The form for head_commment... --}}
                  
                  @auth
                  @if($opinions->count() > 0)

                  <div class="filter_back">
                    <form action="{{route('report')}}" method="POST" id="form_filter">
                        @csrf
                
                <div class="dropdown-container">
                  <div class="textBox" effect="ripple" id="schedule_filter"></div>
                  <i class="fa-solid fa-angle-down dropdown-before"></i>
                  <span class="career-title">Causa del reporte:</span>
              </div>
              <div class="warning_report"><i class="fa-solid fa-triangle-exclamation"></i>Si haces reportes innecesarios, serás penalizado.</div>
              
              <div class="option" id="schedule_option">
                <div class="career schedul" effect="ripple"><i class="fa-regular fa-flag"></i><span class="car">No tiene nada que ver con {{$first_word}} o dice información falsa</span></div>
                <div class="career schedul" effect="ripple"><i class="fa-regular fa-flag"></i><span class="car">Contiene lenguaje ofensivo o discriminatorio</span></div>
                <div class="career schedul" effect="ripple"><i class="fa-regular fa-flag"></i><span class="car">Incitación al odio</span></div>
                <div class="career schedul" effect="ripple"><i class="fa-regular fa-flag"></i><span class="car">Contiene contenido sexual o inapropiado</span></div>
                <div class="career schedul" effect="ripple"><i class="fa-regular fa-flag"></i><span class="car">Está fuera de tema o no es relevante</span></div>
                <div class="career schedul" effect="ripple"><i class="fa-regular fa-flag"></i><span class="car">Contiene información personal o privada</span></div>
                <div class="career schedul" effect="ripple"><i class="fa-regular fa-flag"></i><span class="car">Está relacionado con actividades ilegales</span></div>
                <div class="career schedul" effect="ripple"><i class="fa-regular fa-flag"></i><span class="car">Promueve el acoso o la violencia</span></div>
                <div class="career schedul" effect="ripple"><i class="fa-regular fa-flag"></i><span class="car">Está violando los términos y condiciones del sitio web</span></div>
                <div class="career schedul" effect="ripple"><i class="fa-regular fa-flag"></i><span class="car">Es spam o contiene enlaces no deseados</span></div>
                <div class="career schedul" effect="ripple"><i class="fa-regular fa-flag"></i><span class="car">Otro motivo</span></div>
              </div>
        
              <input type="hidden" name="reason" value="" id="report_reason">
              <input type="hidden" name="_id" value="" id="report_user">
              <input type="hidden" name="type" value="" id="report_type">
              
              <button type="submit" id="submit_button" class="md-ripples ripples-bg-immer-weiss">Enviar reporte</button>
              </form>
                  </div>
                <div class="filter_background"></div>
                  @endif
                @endauth    
                {{--End of form for head_comment.. --}}
            </section>
        </div>
    </x-slot>

</x-layouts.guest>
