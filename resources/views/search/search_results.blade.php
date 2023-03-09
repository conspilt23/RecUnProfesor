<x-layouts.guest
    title="Resultado de búsqueda — Recomiéndame un profesor"
    h1="Resultado de búsqueda para: {{$query}}"
    pAfterH1="No dudes en dar clic en algún resultado para tener más información al respecto."
>

<x-slot name="metadesc">
  ➫ En esta página, encontrarás todos los resultados relacionados con {{$query}}. ➤ ➤ ¡No dudes en dar clic en alguno, para que puedas ver las secciones u opiniones del docente en cuestión y tener referencia para tu selección de asignaturas! ;&#x29;
</x-slot>


<x-slot name="otherstyle">
    <link rel="stylesheet" href="{{asset('css/consejos.css')}}">
    <link rel="stylesheet" href="{{asset('css/search_results.css')}}">
    <link rel="stylesheet" href="{{asset('css/searchs.css')}}">
    <link rel="stylesheet" href="{{asset('css/pagination.css')}}">
    <style>
      .Inhalt .TextInBox .botones {
      justify-content: flex-start !important; 
  }

.conti01 .tarj .circl,
.conti01 .tarj .tex a::before {
    background: #f3492b !important;
}

.conti01 .tarj .tex a span::before {
  border-top: 2px solid #f3492b !important;
  border-left: 2px solid #f3492b !important;

}
.conti01 .tarj .tex a span::after{
  border-bottom: 2px solid #f3492b !important;
  border-right: 2px solid #f3492b !important;

}


.conti02 .tarj .circl,
.conti02 .tarj .tex a::before {
    background: #352bf3 !important;
}

.cont02 .tarj .tex a span::before {
  border-top: 2px solid #352bf3 !important;
  border-left: 2px solid #352bf3 !important;

}
.cont02 .tarj .tex a span::after{
  border-bottom: 2px solid #352bf3 !important;
  border-right: 2px solid #352bf3 !important;

}

.conti03 .tarj .circl,
.conti03 .tarj .tex a::before{
    background: #2d7b87 !important;
}

.conti03 .tarj .tex a span::before {
  border-top: 2px solid #2d7b87 !important;
  border-left: 2px solid #2d7b87 !important;

}
.conti03 .tarj .tex a span::after{
  border-bottom: 2px solid #2d7b87 !important;
  border-right: 2px solid #2d7b87 !important;

}

.conti04 .tarj .circl,
.conti04 .tarj .tex a::before{
    background: #712ab3 !important;
}

.conti04 .tarj .tex a span::before {
  border-top: 2px solid #712ab3 !important;
  border-left: 2px solid #712ab3 !important;

}
.conti04 .tarj .tex a span::after{
  border-bottom: 2px solid #712ab3 !important;
  border-right: 2px solid #712ab3 !important;

}

.conti05 .tarj .circl,
.conti05 .tarj .tex a::before{
    background: #ffaf00 !important;
}

.conti05 .tarj .tex a span::before {
  border-top: 2px solid #ffaf00 !important;
  border-left: 2px solid #ffaf00 !important;

}
.conti05 .tarj .tex a span::after{
  border-bottom: 2px solid #ffaf00 !important;
  border-right: 2px solid #ffaf00 !important;
}

.conti06 .tarj .circl,
.conti06 .tarj .tex a::before {
  background: #2badf7 !important;
}

.conti06 .tarj .tex a span::before {
  border-top: 2px solid #2badf7 !important;
  border-left: 2px solid #2badf7 !important;

}
.conti06 .tarj .tex a span::after{
  border-bottom: 2px solid #2badf7 !important;
  border-right: 2px solid #2badf7 !important;
}


.conti07 .tarj .circl,
.conti07 .tarj .tex a::before{
  background: #039440 !important;
}

.conti07 .tarj .tex a span::before {
  border-top: 2px solid #039440 !important;
  border-left: 2px solid #039440 !important;

}
.conti07 .tarj .tex a span::after{
  border-bottom: 2px solid #039440 !important;
  border-right: 2px solid #039440 !important;
}


.conti08 .tarj .circl,
.conti08 .tarj .tex a::before{
  background: #d40573 !important;
}

.conti08 .tarj .tex a span::before {
  border-top: 2px solid #d40573 !important;
  border-left: 2px solid #d40573 !important;

}
.conti08 .tarj .tex a span::after{
  border-bottom: 2px solid #d40573 !important;
  border-right: 2px solid #d40573 !important;
}


.conti09 .tarj .circl,
.conti09 .tarj .tex a::before{
  background: #ee0f0f !important;
}

.conti09 .tarj .tex a span::before {
  border-top: 2px solid #ee0f0f !important;
  border-left: 2px solid #ee0f0f !important;

}
.conti09 .tarj .tex a span::after{
  border-bottom: 2px solid #ee0f0f !important;
  border-right: 2px solid #ee0f0f !important;
}


.conti10 .tarj .circl,
.conti10 .tarj .tex a::before{
  background: #11a28a !important;
}

.conti10 .tarj .tex a span::before {
  border-top: 2px solid #11a28a !important;
  border-left: 2px solid #11a28a !important;

}
.conti10 .tarj .tex a span::after{
  border-bottom: 2px solid #11a28a !important;
  border-right: 2px solid #11a28a !important;
}
  </style>
  </x-slot>

  <x-slot name="otherjs">
    <script src="{{asset('js/search_results.js')}}" defer></script>
    <script src="{{asset('js/searchs.js')}}" defer></script>
    <script src="{{asset('js/pagination.js')}}" defer></script>
  </x-slot>

<x-slot name="imgpage">
    {{asset('img/result.svg')}}
</x-slot>

<x-slot name="buttons">
  <div class="botones">   

      <a class="button_r Buscar-R md-ripples ripples-bg" id="search-R" href="javascript:void(0)">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          Buscar otra recomendación
      </a>
      </div>

    <form class="prev-form" action="{{'/result'}}" method="GET">
      <div class="search-parent">
          <div class="search">
              <button type="submit" class="icon prev-button"></button>
              <div class="input">
                  <input type="text" name="search_query" id="searchBar" placeholder="Escribe algún profesor, NRC o asignatura." required>
              </div>
              <span class="clear" id="clearBar"></span>
          </div>
          <span class="closeSearch"></span>
      </div>
    </form>

</x-slot>


  <x-slot name="general1">
    <div class="general1">
        <section class="esta-pagina">
    <h2>Resultados generales &#x28;{{'coincidencias: ' . $results->total() }}&#x29;</h2>
    <div class="settings_class">
      <div class="modality md-ripples ripples-bg" id="modalt">
        <i class="fa-solid fa-laptop first_i"></i>
        <span class="name" id="class_type">Seleccionar modalidad o tipo de clase</span>
        <i class="fa-solid fa-pen-to-square last_i"></i>
        <div class="fopr"></div>
      </div>
      <div class="modality md-ripples ripples-bg" id=schedult>
        <i class="fa-solid fa-clock first_i"></i>
        <span class="name" id="hour_type">Horarios</span>
        <i class="fa-solid fa-pen-to-square last_i"></i>
        <div class="fopr"></div>
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
    @foreach ($results as $result)
    <div class="cont {{'conti' . str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}" id="results">
      <div class="tarj">
        <div class="circl">
          <h2>{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</h2>
        </div>
      <a href="{{ URL::asset('/opiniones' .'/'. str(str_replace('-', ' ', $result->teacher->name))->slug()) }}" class="prof_info">
        <div class="titl md-ripples ripples-bg">
          <h3>{{ $result->teacher->name }}</h3>
        </div>
      </a>
        <div class="tex">
          <a href="{{ URL::asset('/opiniones' .'/'. str(str_replace('-', ' ', $result->teacher->name))->slug()) }}" class="md-ripples ripples-bg"><i class="fa-solid fa-comments"></i> Ver opiniones &#x28;{{$result->teacher->opinions()->count()}}&#x29;<span></span></a>
          <a href="{{ URL::asset('/secciones' .'/'. str(str_replace('-', ' ', $result->teacher->name))->slug()) }}" class="md-ripples ripples-bg"><i class="fa-solid fa-magnifying-glass"></i> Ver secciones &#x28;{{ $result->teacher->subjects()->count() }}&#x29; <span></span></a>
        </div>
      </div>
    </div>
  @endforeach
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

  
  {{ $results->appends(request()->only(['modality', 'schedule', 'search_query']))->links() }}


  
  </section>

    <div class="filter_back">
      <form action="/result" method="GET" id="form_filter">

      <div class="dropdown-container">
        <div class="textBox" effect="ripple" id="modality_filter" ></div>
        <i class="fa-solid fa-angle-down dropdown-before"></i>
        <span class="career-title">Tipo o modalidad:</span>
    </div>

    <div class="option" id="modality_option">
      <div class="career modali" effect="ripple"><i class="fa-solid fa-wand-sparkles"></i><span class="car">Cualquiera</span></div>
      <div class="career modali" effect="ripple">
        <i class="fa-solid fa-house-laptop"></i><span class="car">Virtual</span>
      </div>
      <div class="career modali" effect="ripple">
        <i class="fa-solid fa-school"></i><span class="car">Presencial</span>
      </div>
      <div class="career modali" effect="ripple">
        <i class="fa-solid fa-circle-half-stroke"></i><span class="car">Semipresencial</span>
      </div>
      <div class="career modali" effect="ripple"><i class="fa-solid fa-flask"></i><span class="car">Laboratorio</span></div>
      <div class="career modali" effect="ripple"><i class="fa-solid fa-chalkboard-user"></i><span class="car">Teoría</span></div>
    </div>

  <div class="dropdown-container">
    <div class="textBox" effect="ripple" id="schedule_filter"></div>
    <i class="fa-solid fa-angle-down dropdown-before"></i>
    <span class="career-title">Hora de inicio:</span>
</div>

<div class="option" id="schedule_option">
  <div class="career schedul" effect="ripple"><i class="fa-solid fa-wand-sparkles"></i><span class="car">Cualquiera</span></div>
  @foreach($hours as $hour)
  @if(trim($hour) !== ':' && trim($hour) !== null)
  <div class="career schedul" effect="ripple"><i class="fa-solid fa-clock"></i><span class="car">{{$hour}}</span></div>
  @endif
  @endforeach
</div>

<input type="hidden" name="search_query" value="{{$query}}" id="search_term">
<input type="hidden" name="modality" value="" id='modality_selected'>
<input type="hidden" name="schedule" value="" id="schedule_selected">

<input type="submit" value="Aplicar filtro" id="submit_button" class="md-ripples ripples-bg-immer-weiss">
</form>
    </div>
  <div class="filter_background"></div>
  </div>
  </x-slot>

</x-layouts.guest>