<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.layouts.guest','data' => ['title' => '★ Ver el progreso de tu carrera en el pensum que sigues ★ — Recomiéndame un profesor','h1' => 'Mirar el progreso en tu pensum','pAfterH1' => 'Aquí podrás visualizar de forma efectiva el progreso que llevas en tu carrera, por medio del pensum que sigues.']] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layouts.guest'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => '★ Ver el progreso de tu carrera en el pensum que sigues ★ — Recomiéndame un profesor','h1' => 'Mirar el progreso en tu pensum','pAfterH1' => 'Aquí podrás visualizar de forma efectiva el progreso que llevas en tu carrera, por medio del pensum que sigues.']); ?>

     <?php $__env->slot('metadesc', null, []); ?> 
        ➫ En esta página, encontrarás herramientas que te ayudarán con el cálculo del progreso que llevas del pensum! ;&#x29;
     <?php $__env->endSlot(); ?>

     <?php $__env->slot('otherstyle', null, []); ?> 
        <link rel="stylesheet" href="<?php echo e(asset('css/consejos.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('css/calc.css')); ?>">

        <link rel="stylesheet" href="<?php echo e(asset('css/professors_subjects.css')); ?>">
        <style>

    table, th, td{
    border-collapse: collapse;
    padding: 1rem;
    text-align: left;
}

.box {
    width: inherit !important;
}

.approved_gr {
    background: rgba(28, 245, 12, 0.4);
    pointer-events: all;
}

.pending td select {
    pointer-events: all;
    background: inherit;
}
.approved_gr td select,
.pending td select {
    opacity: 1;
}

.in_progress_ye {
    background: rgba(255, 255, 2, 0.4);
}

.blocked_re {
    background: rgba(250, 16, 16, 0.2);
    pointer-events: none;
}

.blocked_re td select {
    opacity: .4;
}

thead, tr {
    border-bottom: 1px solid #cccccc;
}


body.Dark thead, body.Dark tr {
    border-bottom: 1px solid #545454;
}

body.Dark table {
    background-color: #424242;
}

body.Dark thead th {
    background-color: #383838;

}

body.Dark thead th:hover {
    background-color: #575757;

}

thead th {
    position: sticky;
    top: 0;
    left: 0;
    background-color: #f0f0f0fe;
    transition: all .25s ease;
}

thead th:hover {
    background-color: #cececefe;
}

tbody{
    width: 100%;
}

tbody tr {
    font-size: 15px;
    transition: all .25s ease;
}

tbody tr:hover {
    background-color: rgba(202, 202, 202, 0.4) !important;
    box-shadow: 2px 2px 12px rgba(0, 0, 0 .2), -1px -1px 8px rbga(0, 0, 0, .2);
    width: 100%;
    transform: scale(1.01);
}

body.Dark tr:hover{
    background-color: rgba(109, 109, 109, 0.6) !important;}


.table__body {
    width: 95%;
    max-height: calc(89% - 1.6rem);
    background-color: #fff;
    margin: .8rem auto;
    border-radius: .6rem;
    box-shadow: 0px 0px 9px 5px rgb(0 0 0 / 30%);
    overflow: overlay;
}

body.Dark .table__body {
    background-color: #424242;
}

.table__body::-webkit-scrollbar {
    width: 0.43rem;
    height: 0.43rem;
}

.table__body::-webkit-scrollbar-thumb {
    border-radius: .5rem;
    background-color: rgba(10, 10, 10, 0.267);
}
tbody tr td, 
tbody tr td section {
    transition: .2s ease-in-out;
}

table {
    width: 100%;
}

main .general3 {
    display: block !important;
}


@media (max-width: 1000px){
    td:not(:first-of-type){
        min-width: 12.1rem;
    }


}

@media (max-width: 766px){
    .table__header {
        flex-direction: column;
    }
    .table__header .info_teacher {
        margin-bottom: 20px;
    }

    .table__header .search_filter {
        width: 70%;
        align-self: center;
    }

    .table__header .search_filte:hover,
    .table__header .search_filter:has(input:focus) {
        width: 100%;
    }
}
        </style>
     <?php $__env->endSlot(); ?>

     <?php $__env->slot('otherjs', null, []); ?> 
        <script src="<?php echo e(asset('js/progresPensum.js')); ?>" defer></script>
     <?php $__env->endSlot(); ?>



     <?php $__env->slot('imgpage', null, []); ?> 
        <?php echo e(asset('img/pensum.svg')); ?>

     <?php $__env->endSlot(); ?>

     <?php $__env->slot('buttons', null, []); ?> 
        <div class="botones">
            <div class="box" style="--Color:#fc6045;">
                <div class="content">
                    <div class="icon"><i class="fa-solid fa-building-columns"></i></div>
                    <div class="text">
                        <h3>¡Calcula el progreso con tu pensum!</h3>
                        <p>En esta sección, podrás ver tu progreso en la carrera de <?php echo e($userCareer); ?>, con el objetivo de que puedas mantener un control y orden de las asignaturas que llevas. ¡Esperemos que encuentres esta herramienta útil para ti!</p>
                    </div>
                </div>
            </div>
        </div>
     <?php $__env->endSlot(); ?>

     <?php $__env->slot('general1', null, []); ?> 
        <div class="general1">
            <section class="esta-pagina">
                <h2>Cuatrimestres desglozados</h2>
                <h6>Para la carrera de <?php echo e($userCareer); ?></h6>


                <p style="margin-top:23px;">A continuación, encontrarás todos los cuatrimestres desglozados relacionados a la carrera que estudias. Solo basta con seleccionar la caja de opciones de las materias que tienes "liberadas" a partir del primer cuatrimestre, ya sea la opción: cursando o aprobada. Las asignaturas que aún no hayas desbloqueado o liberado, aparecerán de forma rojiza hasta que apruebes el o los pre-requisitos necesarios.</p>

                <p  style="margin-top:23px;">La acción de "cursando" te ayuda a mantener aún más el control de las asignaturas que llevas actualmente en el cuatrimestre en curso. Así que, te recomendamos usarlo para el cuatrimestre actual que lleves en curso</p>


                <p style="margin-top:23px;">Aquí te presentamos los cuatrimestres de tu carrera y demás detalles: </p>
            </section>
        </div>
     <?php $__env->endSlot(); ?>

     <?php $__env->slot('general2', null, []); ?> 
        <div class="general2">
            <section class="Average">
                <h2>Todos los cuatrimestres de la carrera que cursas</h2>
                
                <div id="quarters">
                    <?php if($careerCmp): ?><div class="dropdown-container_pensum" id="pen_cont"><div class="textBox_pensum" effect="ripple"></div><i class="fa-solid fa-angle-down dropdown-before_pensum"></i><span class="career-title_pensum">Selecciona el pensum:</span></div><div class="option_pensum" id="multiple_pensum"></div></div><?php endif; ?>
            </section>
                </div>
        


            <span style="display: none;" id="careerSelected"><?php if($careerSp): ?><?php echo e($userCareer); ?><?php endif; ?></span>
            <span style="display: none;" id="Career_multiple_pensum"><?php if($careerCmp): ?><?php echo e($userCareer); ?><?php endif; ?></span>

        </div>
     <?php $__env->endSlot(); ?>

     <?php $__env->slot('general3', null, []); ?> 
        <div class="general3">
            <section class="main-final">
                <h2>¡Te deseamos lo mejor en la asignatura que estés cursando!</h2>

                <p style="margin-top:23px;">En tu camino académico, es normal encontrarse con desafíos y dificultades al enfrentar ciertas asignaturas. Sin embargo, recuerda que tienes a tu disposición recursos y herramientas para superar cualquier obstáculo.</p>

                <p style="margin-top:23px;">Los refuerzos y secciones dedicadas a las asignaturas clave son una oportunidad invaluable para fortalecer tus habilidades, adquirir nuevos conocimientos y alcanzar el éxito en tus estudios. Aprovecha estas oportunidades adicionales de aprendizaje, ya sea a través de profesores especializados, materiales de estudio complementarios o compañeros de clase que pueden brindarte apoyo.</p>

                <p style="margin-top:23px;">Te exhortamos a mantener una mentalidad positiva, también, mantén la motivación y la perseverancia en tu camino hacia el dominio de las asignaturas que estás cursando. Recuerda que cada obstáculo superado es un paso más hacia el logro de tus metas académicas y profesionales.</p>
            </section>
        </div>
     <?php $__env->endSlot(); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH C:\Users\Harve\OneDrive\Bureau\Recomiendame un Profesor\RecomiendameUnProfesor\resources\views/pensum.blade.php ENDPATH**/ ?>