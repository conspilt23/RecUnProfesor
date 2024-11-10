<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.guest','data' => ['title' => '★ Secciones de '.e(str($professor->name)->title()).' UNAPEC ★ — Recomiéndame un profesor','h1' => 'Secciones de '.e(str($professor->name)->title()).'','pAfterH1' => 'Aquí podrás visualizar las secciones actuales de este docente.']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layouts.guest'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => '★ Secciones de '.e(str($professor->name)->title()).' UNAPEC ★ — Recomiéndame un profesor','h1' => 'Secciones de '.e(str($professor->name)->title()).'','pAfterH1' => 'Aquí podrás visualizar las secciones actuales de este docente.']); ?>

     <?php $__env->slot('metadesc', null, []); ?> 
        ➫ En esta página, encontrarás todas las secciones relacionadas con <?php echo e(str($professor->name)->title()); ?> en el cuatrimestre <?php echo e($formatted_term); ?>. ➤ ➤ ¡No dudes en darte una vuelta, para que puedas ver las secciones de este docente y tener referencia para tu selección de asignaturas! ;&#x29;
     <?php $__env->endSlot(); ?>

     <?php $__env->slot('otherstyle', null, []); ?> 
        <link rel="stylesheet" href="<?php echo e(asset('css/consejos.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('css/professors_subjects.css')); ?>">
     <?php $__env->endSlot(); ?>

    <?php if($professor->subjects->count() > 0): ?>
     <?php $__env->slot('otherjs', null, []); ?> 
        <script src="<?php echo e(asset('js/profesor-subjects.js')); ?>" defer></script>
     <?php $__env->endSlot(); ?>
    <?php endif; ?>

     <?php $__env->slot('imgpage', null, []); ?> 
        <?php echo e(asset('img/section.svg')); ?>

     <?php $__env->endSlot(); ?>

     <?php $__env->slot('buttons', null, []); ?> 
        <div class="botones">
            <div class="box" style="--Color:#fc6045;">
                <div class="content">
                    <div class="icon"><i class="fa-solid fa-chalkboard-user"></i></div>
                    <div class="text">
                        <h3>En este período...</h3>
                        <?php if($professor->subjects->count() > 0): ?>
                            <p><?php echo e($first_word . ' tiene ' . $professor->subjects->count() . ($professor->subjects->count() > 1 ? ' secciones, por lo que puedes echar un vistazo y ver cuál de sus clases y horarios son los más adecuados para ti, en caso de que hayas decidido cursar este o cualquier otro cuatrimestre posterior con ' . $first_word . '.' : ' sección, puedes verificar si esa única sección es adecuada para ti en caso de que busques cursar con ' . $first_word . '.')); ?>

                            </p>
                        <?php else: ?>
                            <p><?php echo e($first_word . ' actualmente no tiene secciones disponibles. Esto puede ocurrir por varias razones, una de ellas podría ser que ' . $first_word . ' no dará docencia este cuatrimestre. Te recomendamos buscar a otros profesores con asignaturas similares.'); ?>

                            </p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
     <?php $__env->endSlot(); ?>

     <?php $__env->slot('general1', null, []); ?> 
        <div class="general1">
            <section class="esta-pagina">

                <?php if($professor->subjects->count() > 0): ?>
                <h2>Secciones detalladas</h2>
                
                <div class="table-parent">
                    <div class="table__header">
                        <div class="info_teacher">
                            <h3>Secciones de <?php echo e($first_word); ?></h3>
                            <h4 style="margin-top: 12px;"><?php echo e($formatted_term); ?></h4>
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
                                <?php $__currentLoopData = $sections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $section): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr class="tr_count">
                                        <td><?php echo e($section->nrc); ?></td>
                                        <td><?php echo e($section->course); ?></td>
                                        <td><?php echo e($section->name); ?></td>
                                        <td>
                                          <?php $__currentLoopData = $section->schedules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $schedule): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                          <section class="<?php echo e($loop->count > 1 && $schedule->credits === 0 ? '' : 's_top'); ?>"><?php echo e($loop->count > 1 && $schedule->credits === 0 ? '' : $schedule->credits); ?></section>
                                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </td>
                                        <td>
                                            <?php $__currentLoopData = $section->schedules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $schedule): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <section class="s_top"><?php echo e($schedule->type); ?></section>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </td>
                                        <td>
                                            <?php $__currentLoopData = $section->schedules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $schedule): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <section class="s_top"><?php echo e($schedule->building); ?></section>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </td>
                                        <td>
                                            <?php $__currentLoopData = $section->schedules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $schedule): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <section class="s_top"><?php echo e($schedule->room ?? '-'); ?></section>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </td>
                                        <td>
                                            <?php $__currentLoopData = $section->schedules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $schedule): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <section class="s_top"><?php echo e($schedule->begin_time); ?> -
                                                    <?php echo e($schedule->end_time); ?></section>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </td>
                                        <td>
                                            <?php $__currentLoopData = $section->schedules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $schedule): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <section class="s_top"><?php echo e($schedule->day ?? '-'); ?></section>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                        <div id="notF"><i class="fa-solid fa-triangle-exclamation" id="warning_notF"></i>
                            <p>Resultados no encontrados</p>
                        </div>
                    </div>
                    
                </div>


                <div class="buttons_settings">
                    <a href="<?php echo e('/opiniones/' . str(str_replace('-', ' ', $professor->name))->slug()); ?>" class="md-ripples ripples-bg-immer-weiss"><span>Ver opiniones</span></a>
                    <a href="<?php echo e(route('inicio')); ?>" class="md-ripples ripples-bg-immer-weiss"><span>Buscar a otro docente</span></a>
                </div>
                <?php else: ?> 
                <h2>Actualmente no hay secciones</h2>
                <p style="margin-bottom: 50px;">En este período, el docente <?php echo e(str($professor->name)->title()); ?> no tiene secciones disponibles. Te recomendamos buscar otros docentes que ofrezcan secciones similares a las que estás buscando. Es posible que en un futuro el docente tenga secciones disponibles nuevamente, por lo que te sugerimos que estés atento a su perfil y a las actualizaciones de su disponibilidad.</p>
                <?php endif; ?>



            </section>
        </div>
     <?php $__env->endSlot(); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH C:\Users\Harve\Desktop\RecUnProfesor\RecUnProfesor\resources\views/search/professor-subjects.blade.php ENDPATH**/ ?>