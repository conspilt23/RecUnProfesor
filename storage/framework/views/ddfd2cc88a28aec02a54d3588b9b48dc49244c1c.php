<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.guest','data' => ['title' => 'Resultado de búsqueda — Recomiéndame un profesor','h1' => 'Resultado de búsqueda para: '.e($query).'','pAfterH1' => 'No dudes en dar clic en algún resultado para tener más información al respecto.']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layouts.guest'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Resultado de búsqueda — Recomiéndame un profesor','h1' => 'Resultado de búsqueda para: '.e($query).'','pAfterH1' => 'No dudes en dar clic en algún resultado para tener más información al respecto.']); ?>

 <?php $__env->slot('metadesc', null, []); ?> 
  ➫ En esta página, encontrarás todos los resultados relacionados con <?php echo e($query); ?>. ➤ ➤ ¡No dudes en dar clic en alguno, para que puedas ver las secciones u opiniones del docente en cuestión y tener referencia para tu selección de asignaturas! ;&#x29;
 <?php $__env->endSlot(); ?>


 <?php $__env->slot('otherstyle', null, []); ?> 
    <link rel="stylesheet" href="<?php echo e(asset('css/consejos.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/search_results.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/searchs.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/pagination.css')); ?>">
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

.conti02 .tarj .tex a span::before {
  border-top: 2px solid #352bf3 !important;
  border-left: 2px solid #352bf3 !important;

}
.conti02 .tarj .tex a span::after{
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
   <?php $__env->endSlot(); ?>

   <?php $__env->slot('otherjs', null, []); ?> 
    <script src="<?php echo e(asset('js/search_results.js')); ?>" defer></script>
    <script src="<?php echo e(asset('js/searchs.js')); ?>" defer></script>
    <script src="<?php echo e(asset('js/pagination.js')); ?>" defer></script>
   <?php $__env->endSlot(); ?>

 <?php $__env->slot('imgpage', null, []); ?> 
    <?php echo e(asset('img/result.svg')); ?>

 <?php $__env->endSlot(); ?>

 <?php $__env->slot('buttons', null, []); ?> 
  <div class="botones">   

      <a class="button_r Buscar-R md-ripples ripples-bg" id="search-R" href="javascript:void(0)">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          Buscar otra recomendación
      </a>
      </div>

    <form class="prev-form" action="<?php echo e('/result'); ?>" method="GET">
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

 <?php $__env->endSlot(); ?>


   <?php $__env->slot('general1', null, []); ?> 
    <div class="general1">
        <section class="esta-pagina">
    <h2>Resultados generales &#x28;<?php echo e('coincidencias: ' . $results->total()); ?>&#x29;</h2>
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
    <?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="cont <?php echo e('conti' . str_pad($loop->iteration, 2, '0', STR_PAD_LEFT)); ?>" id="results">
      <div class="tarj">
        <div class="circl">
          <h2><?php echo e(str_pad($loop->iteration, 2, '0', STR_PAD_LEFT)); ?></h2>
        </div>
      <a href="<?php echo e(URL::asset('/opiniones' .'/'. str(str_replace('-', ' ', $result->teacher->name))->slug())); ?>" class="prof_info">
        <div class="titl md-ripples ripples-bg">
          <h3><?php echo e($result->teacher->name); ?></h3>
        </div>
      </a>
        <div class="tex">
          <a href="<?php echo e(URL::asset('/opiniones' .'/'. str(str_replace('-', ' ', $result->teacher->name))->slug())); ?>" class="md-ripples ripples-bg"><i class="fa-solid fa-comments"></i> Ver opiniones &#x28;<?php echo e($result->teacher->opinions()->count()); ?>&#x29;<span></span></a>
          <a href="<?php echo e(URL::asset('/secciones' .'/'. str(str_replace('-', ' ', $result->teacher->name))->slug())); ?>" class="md-ripples ripples-bg"><i class="fa-solid fa-magnifying-glass"></i> Ver secciones &#x28;<?php echo e($result->teacher->subjects()->count()); ?>&#x29; <span></span></a>
        </div>
      </div>
    </div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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

  
  <?php echo e($results->appends(request()->only(['modality', 'schedule', 'search_query']))->links()); ?>



  
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
  <?php $__currentLoopData = $hours; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hour): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <?php if(trim($hour) !== ':' && trim($hour) !== null): ?>
  <div class="career schedul" effect="ripple"><i class="fa-solid fa-clock"></i><span class="car"><?php echo e($hour); ?></span></div>
  <?php endif; ?>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

<input type="hidden" name="search_query" value="<?php echo e($query); ?>" id="search_term">
<input type="hidden" name="modality" value="" id='modality_selected'>
<input type="hidden" name="schedule" value="" id="schedule_selected">

<input type="submit" value="Aplicar filtro" id="submit_button" class="md-ripples ripples-bg-immer-weiss">
</form>
    </div>
  <div class="filter_background"></div>
  </div>
   <?php $__env->endSlot(); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?><?php /**PATH C:\Users\Harve\Desktop\RecUnProfesor\RecUnProfesor\resources\views/search/search_results.blade.php ENDPATH**/ ?>