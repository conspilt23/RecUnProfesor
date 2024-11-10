<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.guest','data' => ['title' => 'No se han encontrado resultados para tu búsqueda — Recomiéndame un profesor','h1' => 'No se han encontrado resultados','pAfterH1' => 'Los resultados para: \''.e($query).'\' no se han encontrado. Puede deberse a varias razones que explicaremos a continuación']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layouts.guest'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'No se han encontrado resultados para tu búsqueda — Recomiéndame un profesor','h1' => 'No se han encontrado resultados','pAfterH1' => 'Los resultados para: \''.e($query).'\' no se han encontrado. Puede deberse a varias razones que explicaremos a continuación']); ?>

 <?php $__env->slot('metadesc', null, []); ?> 
  ➫ Lamentamos decirte que, No encontramos resultados relacionados con <?php echo e($query); ?>. ➤ ➤ ¡Te recomendamos revisar la búsqueda e intentarlo de nuevo! ;&#x29;
 <?php $__env->endSlot(); ?>

 <?php $__env->slot('otherstyle', null, []); ?> 
    <link rel="stylesheet" href="<?php echo e(asset('css/consejos.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/no_results.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/searchs.css')); ?>">
    <style>
      .Inhalt .TextInBox .botones {
      justify-content: flex-start !important; 
  }

  main .general1 {
    display: block !important;
}
  </style>
   <?php $__env->endSlot(); ?>

   <?php $__env->slot('otherjs', null, []); ?> 
    <script src="<?php echo e(asset('js/search_results.js')); ?>" defer></script>
    <script src="<?php echo e(asset('js/searchs.js')); ?>" defer></script>
   <?php $__env->endSlot(); ?>

 <?php $__env->slot('imgpage', null, []); ?> 
    <?php echo e(asset('img/no_results.svg')); ?>

 <?php $__env->endSlot(); ?>

 <?php $__env->slot('buttons', null, []); ?> 
  <div class="botones">   

      <a class="button_r Buscar-R md-ripples ripples-bg" id="search-R" href="javascript:void(0)">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          Buscar nuevamente una recomendación
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
    <h2>Consejos para encontrar lo que buscas</h2>
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
    <div class="cont">
        <div class="tarj">
          <div class="circl">
            <h2>01</h2>
          </div>
          <div class="titl">
            <h3>En caso de que buscar alguna asignatura...</h3>
          </div>
          <div class="tex">
            <p>Procura que hayas escrito el nombre de la misma correctamente. También te recomendamos buscar por el código de asignatura para una especificación más sólida en algunos casos. Un ejemplo de ello sería buscar "MAT132" en lugar de "Cálculo y geometría analítica II" para obtener resultados más específicos.</p>
  
            <p>Ten en cuenta que, por el momento, <strong>las asignaturas como pasantía, monográfico, electivas u optativas(para ciertas carreras) y trabajo de grado no están disponibles para la búsqueda</strong>, por lo que si esperabas encontrar resultados de algunas de esas asignaturas o requerimientos de graduación, nos disculpamos.</p>
  
            <p>Otra detalle es que, si estás buscando alguna materia de deporte, prueba intentar con el nombre de alguno (ejemplo: ajedrez o voleibol) o bien, por códigos como dep002 y así, y no con "OPTDEP" o con "Optativa deporte"</p>
            
          </div>
        </div>
      </div>

      <div class="cont">
        <div class="tarj">
          <div class="circl">
            <h2>02</h2>
          </div>
          <div class="titl">
            <h3>En caso de que hayas tratado de buscar algún NRC...</h3>
          </div>
          <div class="tex">
            <p>Te recomendamos, en primer lugar, verificar si está correcto el que has intentado buscar.</p>
  
            <p>El NRC solo se compone de <strong>4 números</strong>, por lo que debes asegurarte de haber escrito 4 dígitos numéricos, por lo que verifica que no hayas insertado otro tipo de caracteres. </p>
  
            <p>Tomando estos datos en cuenta, puedes intentar buscar nuevamente la sección que deseas mediante el NRC que has intentado buscar.</p>
            
          </div>
        </div>
      </div>

      <div class="cont">
        <div class="tarj">
          <div class="circl">
            <h2>03</h2>
          </div>
          <div class="titl">
            <h3>En caso de haber buscado algún profesor...</h3>
          </div>
          <div class="tex">
            <p>Como es lógico, asegúrate de haber escrito correctamente su nombre. Un detalle que te podemos dar también es buscarlo por su primer nombre en caso de que hayas insertado su nombre completo</p>
  
            <p>Un aspecto a tomar en cuenta es que, <strong>algunos profesores ya no imparten docencia en la unviersidad, y por ello no aparecen en los resultados</strong>, en ese caso, te recomendamos buscar a otros profesores que impartan asignaturas similares.</p>
  
            <p>Otro detalle que podría ocurrir es que, has colocado los nombres y apellidos del profesor de una forma diferente a su nombre original, por lo que te recomendamos, nuevamente, buscar por su primer nombre, o bien, buscarlo con el orden de su nombre escrito correctamente.</p>

            <p>Tomando en cuenta estos detalles, puedes encontrar al profesor que buscabas, o bien, una alternativa parecida.</p>
            
          </div>
        </div>
      </div>

      <div class="cont">
        <div class="tarj">
          <div class="circl">
            <h2>04</h2>
          </div>
          <div class="titl">
            <h3>En caso de haber buscado un código de asignatura...</h3>
          </div>
          <div class="tex">
            <p>Cuando realizas una búsqueda de una asignatura con su código, es importante tener en cuenta algunos detalles que pueden afectar el resultado de la búsqueda. Los códigos de asignatura están formados por 3 letras y 3 números, por lo que es importante asegurarse de que el código que estás utilizando cumple con este formato.</p>
  
            <p>Otro detalle que puede afectar el resultado de la búsqueda es si el código de asignatura que estás buscando no existe en el cuatrimestre actual. En este caso, te sugerimos revisar tu plan de estudios y asegurarte de que estás buscando el código correcto.</p>

            <p>También es posible que el código que estás buscando corresponda a una asignatura que ya no se imparte. En este caso, es posible que tengas que buscar en pensums antiguos para encontrar información sobre la asignatura en cuestión.</p>
            
          </div>
        </div>
      </div>


      <div class="cont">
        <div class="tarj">
          <div class="circl">
            <h2>05</h2>
          </div>
          <div class="titl">
            <h3>Si aplicaste el filtro y llegaste hasta aquí...</h3>
          </div>
          <div class="tex">
            <p>Parece que tu búsqueda con los filtros aplicados no ha producido ningún resultado. Esto puede deberse a que no existe ningún elemento que cumpla con los criterios especificados en la búsqueda.</p>
  
            <p>Te sugerimos intentar modificar los parámetros de búsqueda, como el horario, para ver si esto produce algún resultado diferente. También puede ser útil expandir tus criterios de búsqueda para incluir más opciones y aumentar las posibilidades de encontrar lo que estás buscando.</p>
  
            <p>Si aun así no encuentras lo que estás buscando, es posible que tengas que utilizar diferentes métodos de búsqueda o buscar en otras fuentes de información. Recuerda que siempre es importante asegurarse de que estás utilizando la búsqueda de la manera más efectiva posible para encontrar lo que necesitas. ¡Esperamos que esto te ayude a encontrar lo que estás buscando!</p>
            
          </div>
        </div>
      </div>

  
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
  <div class="career schedul" effect="ripple"><i class="fa-solid fa-clock"></i><span class="car"><?php echo e($hour); ?></span></div>
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
<?php endif; ?><?php /**PATH C:\Users\Harve\Desktop\RecUnProfesor\RecUnProfesor\resources\views/search/not_results.blade.php ENDPATH**/ ?>