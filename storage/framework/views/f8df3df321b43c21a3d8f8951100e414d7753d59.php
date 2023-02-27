<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.layouts.guest','data' => ['title' => '▷ Preguntas frecuentes de estudiantes de UNAPEC — Recomiéndame un profesor','h1' => 'Preguntas frecuentes','pAfterH1' => 'Aquí te responderemos las principales preguntas e inquietudes que, a menudo se hacen los estudiantes de UNAPEC.','h2general1' => 'preguntas frecuentes']] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layouts.guest'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => '▷ Preguntas frecuentes de estudiantes de UNAPEC — Recomiéndame un profesor','h1' => 'Preguntas frecuentes','pAfterH1' => 'Aquí te responderemos las principales preguntas e inquietudes que, a menudo se hacen los estudiantes de UNAPEC.','h2general1' => 'preguntas frecuentes']); ?>

 <?php $__env->slot('metadesc', null, []); ?> 
  ➤ ➤ En esta página, podrás ver las preguntas más frecuentes y generales que se hacen muchas veces los estudiantes de la Universidad APEC &#x28;en especial los de nuevo ingreso&#x29; junto con sus respuestas. ➤ ➤ ✅¡Siéntete cómodo y echa un vistazo para ver si tu pregunta está enlistada y respondida!✅ ;&#x29;
 <?php $__env->endSlot(); ?>

 <?php $__env->slot('otherstyle', null, []); ?> 
    <link rel="stylesheet" href="<?php echo e(asset('css/faq.css')); ?>">
   <?php $__env->endSlot(); ?>

   <?php $__env->slot('otherjs', null, []); ?> 
    <script src="<?php echo e(asset('js/faq.js')); ?>" defer></script>
   <?php $__env->endSlot(); ?>

 <?php $__env->slot('imgpage', null, []); ?> 
    <?php echo e(asset('img/faq.svg')); ?>

 <?php $__env->endSlot(); ?>

 <?php $__env->slot('buttons', null, []); ?> 
  <div class="botones">
    <div class="box" style="--Color:#fc6045;">
      <div class="content">
        <div class="icon"><i class="fa-solid fa-person-circle-question"></i></div>
        <div class="text">
          <h3>Preguntas frecuentes con sus respuestas</h3>
          <p>Las preguntas enlistadas a continuación, responden a las preguntas más frecuentes que se hacen los estudiantes de la Universidad APEC (especialmente aquellos que son de nuevo ingreso). Ten en cuenta que, Las respuestas a las mismas están basadas de forma general, no a casos muy particulares.</p>
        </div>
      </div>
    </div>
  </div>
 <?php $__env->endSlot(); ?>

   <?php $__env->slot('general1', null, []); ?> 
    <div class="general1">
        <section class="esta-pagina">
            <h2>Preguntas e inquietudes más comunes</h2>
            <h6>¡Para que ya no te queden dudas!</h6>
  
    <p>Que se dé el caso en el cual nos surja una que otra pregunta sobre algo relacionado a la unviersidad es normal, en especial cuando se es de primer ingreso. Encontrarás a continuación, una lista de las preguntas más comunes que se hacen los estudiantes de APEC con sus respuestas detalladas.</p>

    <div class="container-grant">
    <div class="accordion">
      <div class="icono"></div>
      <h5>¿Las asignaturas de inglés afectan mi índice académico?</h5>
    </div>
    <div class="panell">
      <p>El impacto de las asignaturas de inglés en tu promedio académico depende de la carrera que estés cursando y del plan de estudios al que estés adherido. Las asignaturas como "Inglés I" y "Inglés II" generalmente no afectan al promedio académico, a excepción del antiguo plan de estudios de Negocios Internacionales. Sin embargo, las asignaturas de inglés de nivel más técnico, como "Inglés para Informática" o "Inglés para Cineastas", sí tienen peso en el promedio académico. Si quieres identificar qué asignaturas tienen peso en tu promedio, puedes fijarte en los códigos de las mismas: si contienen las iniciales "ENG", no tendrán peso en tu promedio, pero si contienen un código similar a "IDI***", sí tendrán peso en el mismo.</p>
    </div>

    <div class="accordion">
      <div class="icono"></div>
      <h5>¿Qué pasa si tengo una asignatura en F o FN?</h5>
    </div>
    <div class="panell">
      <p>Si obtienes una calificación de F (reprobado) o FN (reprobado por inasistencia) en una asignatura, tu promedio académico se verá afectado y perderás el derecho de recibir honores en tu universidad. Es importante tener en cuenta que esta calificación afectará significativamente tu promedio académico y puede ser difícil de recuperar. Por lo tanto, es recomendable que consideres retirar la asignatura si te das cuenta de que no puedes seguir el ritmo o si tu desempeño no es suficiente después de la segunda evaluación parcial. De esta manera, podrás evitar las consecuencias negativas que una calificación de F o FN puede tener en tu carrera universitaria.</p>
    </div>

    <div class="accordion">
      <div class="icono"></div>
      <h5>¿Cuál es la cantidad máxima de ausencias permitidas en una asignatura?</h5>
    </div>
    <div class="panell">
      <p>La cantidad máxima de ausencias permitidas en una asignatura depende del número de créditos que tenga y de la cantidad de horas que se imparta por semana. Según las reglas de UNAPEC, puedes faltar hasta un máximo del 20% del total de horas de la asignatura. Esto significa que si la asignatura se imparte una vez por semana, puedes faltar hasta tres veces en el cuatrimestre. No obstante, es importante tener en cuenta que faltar lo menos posible es recomendable para evitar caer en una calificación de FN (reprobado por inasistencia) y, en consecuencia, perjudicar tu desempeño académico.</p>
    </div>

    <div class="accordion">
      <div class="icono"></div>
      <h5>¿Qué pasa si retiro una asignatura?</h5>
    </div>
    <div class="panell">
      <p>Simplemente se eliminará del período actual y estará como si no la hubieras seleccionado. No obstante, se marcará con una calificación "R", y si acumulas 6 calificaciones "R", pues perderás el derecho a a graduarte con honores. Por ello, solo te recomendamos retirar en caso de que sea necesario, y si son todas las asignaturas, pues retirar el cuatrimestre completo en caso de ser necesario. Además, tienes que tener en cuenta que UNAPEC no te reembolsará el costo de matriculación de la asignatura retirada.</p>
    </div>

    <div class="accordion">
      <div class="icono"></div>
      <h5>¿Optativa deporte y las asignaturas que no afectan el índice 
        tienen costo de matriculación?</h5>
    </div>
    <div class="panell">
      <p>Sí, todas las asignaturas que se imparten en la Universidad APEC, incluyendo las optativas de deporte y las que no afectan el índice académico, tienen un costo de matriculación. En el caso de la asignatura de deporte, tiene un valor de 2 créditos cuyo costo variará según el precio de cada crédito por cuatrimestre.</p>
    </div>

    <div class="accordion">
      <div class="icono"></div>
      <h5>¿Cuántos créditos puedo seleccionar?</h5>
    </div>
    <div class="panell">
      <p>La cantidad de créditos que puedes seleccionar en un período académico depende de tu índice académico acumulado. Aquí te presentamos una lista de referencia que puedes utilizar como guía:</p>
<p>        <ul class="listt" style="margin-left: 50px">
  <li>27 créditos: para aquellos con un índice académico acumulado de 3.25 o más.</li>
  <li>15 créditos: para aquellos con un índice académico acumulado de 2.50 o más.</li>
  <li>13 créditos: para aquellos que han recibido una prueba académica (con un índice académico acumulado de 1.99 o menos).</li>  
  </ul>  </p>
        <p>Es importante tener en cuenta que esta es solo una guía y que, en algunos casos, pueden haber excepciones. Si tienes dudas acerca de la cantidad de créditos que puedes seleccionar, lo mejor es consultar con tu asesor académico.</p>
    </div>

    <div class="accordion">
      <div class="icono"></div>
      <h5>¿Cómo puedo calcular mi índice académico, o hacer proyecciones del mismo?</h5>
    </div>
    <div class="panell">
      <p>En nuestro sitio web, puedes utilizar nuestra herramienta de cálculo de índice académico, la cual se encuentra disponible en la sección "Más herramientas". Ahí podrás calcular tu índice cuatrimestral de forma sencilla, independientemente de si estás siguiendo el pensum antiguo o el actual de tu carrera. De esta manera, podrás hacer proyecciones y evaluar tu rendimiento académico en cualquier momento.</p>
    </div>

    <div class="accordion">
      <div class="icono"></div>
      <h5>¿Qué se necesita para graduarse con honores ?</h5>
    </div>
    <div class="panell">
      <p>En UNAPEC puedes graduarte con honores si cumples con ciertos requisitos generales y alcanzas un índice académico específico al finalizar tu carrera. Es importante destacar que debes evitar quemar (reprobar) alguna asignatura de tu pensum (exceptuando Matemática Pre-universitaria y Deporte), tener muchas asignaturas retiradas (6 o más), muchos cuatrimestres retirados (3 o más), caer en prueba académica o ser sancionado por motivos disciplinarios por parte de la universidad. En términos de índice, los rangos que debes alcanzar son los siguientes:</p>
      <p>
        <ul class="listt" style="margin-left: 50px">
          <li>Cum Laude: 3.30 - 3.59</li>
          <li>Magna Cum Laude: 3.60 - 3.85</li>
          <li>Summa Cum Laude: 3.86 - 4.00</li>
        </ul>
      </p>
      
      
    </div>

    <div class="accordion">
      <div class="icono"></div>
      <h5>¿Puedo repetir una asignatura que ya aprobé para aumentar el índice?</h5>
    </div>
    <div class="panell">
      <p>Sí, en general se puede repetir una asignatura que ya ha sido aprobada con el objetivo de mejorar el índice académico, siempre y cuando la universidad lo permita. Sin embargo, como se menciona en la respuesta, no todas las asignaturas pueden ser cursadas nuevamente, por lo que es importante verificar con la escuela o decanato correspondiente si es posible repetir la asignatura en cuestión y cuáles son los procedimientos a seguir. Es posible que haya restricciones o condiciones específicas para poder repetir una asignatura</p>
    </div>

    <div class="accordion">
      <div class="icono"></div>
      <h5>¿Cómo puedo cambiarme de carrera?</h5>
    </div>
    <div class="panell">
      <p>Si deseas cambiar de carrera, debes tener en cuenta que es importante evitar caer en Prueba Académica (tener un índice menor a 2.00) y que solo puedes solicitar cambio de carrera un máximo de 3 veces. Para ello, es recomendable que estés atento al calendario académico y revises las fechas operativas para solicitar el cambio de carrera en el Departamento de Registro.</p>
    </div>
  </div>
  </section>
  </div>
   <?php $__env->endSlot(); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?><?php /**PATH C:\Users\Harve\OneDrive\Bureau\Recomiendame un Profesor\RecomiendameUnProfesor\resources\views/faq.blade.php ENDPATH**/ ?>