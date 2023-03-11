<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.layouts.guest','data' => ['title' => '★ Recomiéndame un profesor de APEC ★ — Opiniones y secciones de profesores de UNAPEC','h1' => 'Recomiéndame un profesor de APEC','pAfterH1' => 'La web donde encontrarás recomendaciones confiables y valiosas sobre profesores de la Universidad APEC  de estudiantes y ex-alumnos, para ayudarte a tomar la mejor decisión en cuanto a la elección de tu profesor. ¡Explora y encuentra al mejor profesor para ti!']] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layouts.guest'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => '★ Recomiéndame un profesor de APEC ★ — Opiniones y secciones de profesores de UNAPEC','h1' => 'Recomiéndame un profesor de APEC','pAfterH1' => 'La web donde encontrarás recomendaciones confiables y valiosas sobre profesores de la Universidad APEC  de estudiantes y ex-alumnos, para ayudarte a tomar la mejor decisión en cuanto a la elección de tu profesor. ¡Explora y encuentra al mejor profesor para ti!']); ?>

 <?php $__env->slot('otherstyle', null, []); ?> 
<link rel="stylesheet" href="css/searchs.css">
<style>
    .Inhalt .TextInBox .botones {
    justify-content: flex-start !important; 
}
</style>
 <?php $__env->endSlot(); ?>

 <?php $__env->slot('otherjs', null, []); ?> 
    <script src="js/searchs.js" defer></script>
 <?php $__env->endSlot(); ?>

 <?php $__env->slot('buttons', null, []); ?> 
    <div class="botones">   

        <a class="button_r Buscar-R md-ripples ripples-bg" id="search-R" href="javascript:void(0)">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            Buscar recomendación
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
            <h2>Todo lo necesario para un cuatrimestre agradable en un solo lugar</h2>
            <h6>Con muchas herramientas para ello</h6>

            <p>Esta web ha sido creada con el propósito de ayudar a los estudiantes de la Universidad APEC, con el fin de que tengan una agradable experiencia dentro de la misma a lo largo de la carrera que hayan elegido. Con la búsqueda de profesores, asignaturas individuales o todo un cuatrimestre, junto con otras herramientas bastante útiles, podrás ahorrar tiempo y/o recursos económicos en la selección de tus asignaturas y en la elección de los horarios más convenientes para ti. </p> 

            <p>Asimismo, tienes la posibilidad de calcular tu índice académico sin importar si usas el pensum antiguo o actual de tu carrera, o hacer proyecciones del mismo, con el objetivo de conocer cómo te podría ir en el cuatrimestre en curso o calcular el de un período ya concluido. Por otro lado, puedes verificar los eventos del calendario académico oficial de UNAPEC, para estar al tanto de los eventos más importantes que ocurren cada día del cuatrimestre actual, como las fechas de los parciales, fechas límite, inicio de actividades, entre otros.</p>

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

            <p>En la web también encontrarás secciones dedicadas específicamente a ti, como respuestas a preguntas frecuentes y una lista de las carreras actualmente impartidas por UNAPEC, incluyendo información como el número de créditos, la cantidad de asignaturas de cada una, entre otros datos.</p>

            <p>Además, esta web te brinda la posibilidad de leer opiniones y comentarios de estudiantes y ex-alumnos, para que puedas tomar una decisión informada y asegurarte de elegir al mejor profesor y asignatura para ti.</p>

            <p>En pocas palabras, con esta web tendrás todo lo necesario para tener un cuatrimestre agradable y exitoso en la Universidad APEC, con herramientas útiles y fáciles de usar en un solo lugar.</p>

            <div class="ads">
                <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3525189773538188"
     crossorigin="anonymous"></script>
<ins class="adsbygoogle"
     style="display:block; text-align:center;"
     data-ad-layout="in-article"
     data-ad-format="fluid"
     data-ad-client="ca-pub-3525189773538188"
     data-ad-slot="4646767923"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
            </div>
</div>
 <?php $__env->endSlot(); ?>

 <?php $__env->slot('general2', null, []); ?> 
    <div class="general2">
        <section class="Average">
            <h2>¡Ver opiniones sobre los maestros y dar la que tienes es muy simple!</h2>
            <h6>¿O tal vez aún más?</h6>

            <p style="margin-bottom: 23px;">Cada opinión de los usuarios que consultes reflejará la evaluación que han realizado sobre el profesor en cuestión, y se obtiene un promedio general a partir de todas las evaluaciones realizadas por otros estudiantes o ex-estudiantes. Puedes expresar tu reacción a la opinión o respuestas dando un "me gusta" o "no me gusta" según consideres. Además, puedes reportar cualquier comentario o respuesta inapropiada.</p>


            <p>Si deseas evaluar a un docente, es importante tener en cuenta factores como la calidad de sus clases, la claridad en la exposición, su disponibilidad para resolver dudas, y su capacidad para motivar a los estudiantes. Por lo tanto, es fundamental evaluar de manera objetiva y sin ningún tipo de mala intención. A continuación, te mencionamos algunos puntos clave para considerar:</p>

            <div class="container">

                <div class="card">
                    <div class="ImgBx">
                        <img src="/img/forma_explicar_profesor_de_apec.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>¿Explica correctamente?</h3>
                        <p>La claridad en la explicación del profesor es un aspecto fundamental para entender el contenido de las clases. Por ello se considera si el profesor logra transmitir el conocimiento de manera efectiva y si responde de manera clara a las dudas de los estudiantes.</p>
                    </div>
                </div>

                <div class="card">
                    <div class="ImgBx">
                        <img src="/img/evaluacion_justa.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>¿Evalúa justamente?</h3>
                        <p>Es fundamental por parte del profesor, ya que así se mide el progreso de los estudiantes y se  motiva a seguir mejorando. Por ello, se toma en cuenta si el profesor brinda retroalimentación constructiva y evalúa de manera equitativa a todos los estudiantes.</p>
                    </div>
                </div>

                <div class="card">
                    <div class="ImgBx">
                        <img src="img/retomar-clases-con-ese-profesor.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>¿Tomarías clases con él/ella de nuevo?</h3>
                        <p>La experiencia en clases con un profesor es un factor importante a la hora de considerar si se tomarían clases con él o ella de nuevo en el futuro, basándose tanto en la experiencia como en otros factores que consideres.</p>
                    </div>
                </div>

                <div class="card">
                    <div class="ImgBx">
                        <img src="/img/puntualidad.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>¿Es puntual?</h3>
                        <p>La puntualidad del profesor es un aspecto que influye en la organización y eficiencia de las clases. Es indispensable considerar si el profesor inicia y termina las clases, publica las calificaciones a tiempo y si respeta los horarios establecidos.</p>
                    </div>
                </div>

                <div class="card">
                    <div class="ImgBx">
                        <img src="/img/evaluacion-estudiante.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>¿Qué calificación merece de tu parte?</h3>
                        <p>La calificación que se brinda al profesor es un reflejo de la satisfacción con su desempeño y la experiencia en clases. Así que solo basta con elegir en una determinada escala tu grado de satisfacción con el docente en cuestión.</p>
                    </div>
                </div>

                <div class="card">
                    <div class="ImgBx">
                        <img src="/img/opinion-definitiva.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>¿Cuál es tu opinión sobre él/ella?</h3>
                        <p>La opinión que se tiene sobre un profesor es un resumen de la experiencia en clases y de los aspectos valorados por el estudiante. Debes expresar una opinión honesta y considerada respecto al profesor en cuestión.</p>
                    </div>
                </div>
            </div>

        </section>
    </div>
 <?php $__env->endSlot(); ?>

 <?php $__env->slot('general3', null, []); ?> 
    <div class="general3">
        <section class="main-final">
            <h2>¡El proceso de seleccionar  asignaturas es ahora mucho más sencillo!</h2>
            <div class="ads">
                <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3525189773538188"
     crossorigin="anonymous"></script>
<!-- anuncio vertical -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-3525189773538188"
     data-ad-slot="3540735666"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
            </div>
            <p>Tienes a tu dispocisión las herramientas y/o información necesaria para tener un cuatrimestre agradable a la palma de tu mano.
                Básicamente, con esta aplicación web tendrás la ayuda para ahorar dinero en el proceso de matriculación o inscripción de cuatrimestre,
                de igual forma, el conocimiento brindado por los demás estudiantes que ya han dado el paso.
            </p>
        </section>
    </div>
 <?php $__env->endSlot(); ?>


 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?><?php /**PATH C:\Users\Harve\OneDrive\Bureau\Recomiendame un Profesor\RecomiendameUnProfesor\resources\views/inicio.blade.php ENDPATH**/ ?>