<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.layouts.guest','data' => ['title' => '★ Calendario académico de la Universidad APEC ★ — Recomiéndame un profesor','h1' => 'Calendario académico de UNAPEC','pAfterH1' => 'Aquí puedes dar seguimiento al cuatrimestre actual, para que tengas un control más fácil y prepararte mejor para las fechas importantes que tengas pendiente.']] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layouts.guest'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => '★ Calendario académico de la Universidad APEC ★ — Recomiéndame un profesor','h1' => 'Calendario académico de UNAPEC','pAfterH1' => 'Aquí puedes dar seguimiento al cuatrimestre actual, para que tengas un control más fácil y prepararte mejor para las fechas importantes que tengas pendiente.']); ?>

 <?php $__env->slot('metadesc', null, []); ?> 
    ➫ ¿Deseas dar un seguimiento más dinámico al calendario y saber cuándo comienza cada actividad o evento? ¡Estás en el lugar indicado!. ➤ ➤ ¡No dudes en darte una vuelta, para que puedas observar durante el período completo las actividades que hay en UNAPEC! ;&#x29;
 <?php $__env->endSlot(); ?>

 <?php $__env->slot('otherstyle', null, []); ?> 
  <link rel="stylesheet" href="<?php echo e(asset('css/calendar.css')); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/evo-calendar.min.css')); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/evo-calendar.orange-coral.css')); ?>">
 <?php $__env->endSlot(); ?>

 <?php $__env->slot('otherjs', null, []); ?> 
<script src="<?php echo e(asset('js/evo-calendar.min.js')); ?>" defer></script>
<script type="module" src="<?php echo e(asset('js/events.js')); ?>" defer></script>
 <?php $__env->endSlot(); ?>

 <?php $__env->slot('imgpage', null, []); ?> 
    <?php echo e(asset('img/calendar.svg')); ?>

 <?php $__env->endSlot(); ?>

 <?php $__env->slot('buttons', null, []); ?> 
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
 <?php $__env->endSlot(); ?>

 <?php $__env->slot('general1', null, []); ?> 
  <div class="general1">
      <section class="esta-pagina">
          <h2>Seguimiento del calendario académico en el período actual</h2>
          <h6>¡Sin rodeos!</h6>

  <p>Darle un seguimiento adecuado al calendario académico es muy importante, ya que tendrás en cuenta cada detalle en las fechas propuestas por el calendario académico oficial de la Universidad APEC. Sólo basta con seleccionar el día que necesites, o cualquiera dentro del período actual.</p>

  <p>
   Básicamente, este calendario académico extraído de la Universidad APEC muestra las fechas importantes del cuatrimestre en curso, incluyendo los exámenes parciales y finales, así como otras actividades académicas y eventos especiales. El rango de fechas cubre desde el inicio hasta el final del período. Dispones también de una leyenda que te indicará el significado de cada color del evento. Mantenerse actualizado con el calendario académico es fundamental para asegurarte de cumplir con todas tus responsabilidades tanto académicas como personales.
  </p>


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


  
  </section>
</div>
 <?php $__env->endSlot(); ?>


 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?><?php /**PATH C:\Users\Harve\OneDrive\Bureau\Recomiendame un Profesor\RecomiendameUnProfesor\resources\views/calendario.blade.php ENDPATH**/ ?>