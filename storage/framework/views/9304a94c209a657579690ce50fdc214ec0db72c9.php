<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.layouts.guest','data' => ['title' => '★ Califica a un profesor de UNAPEC ★ — Recomiéndame un profesor','h1' => 'Califica a un profesor','pAfterH1' => 'Aquí podrás calificar a cualquier profesor disponible con los que hayas cursado, para orientar a los demás sobre cómo es dicho profesor.']] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layouts.guest'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => '★ Califica a un profesor de UNAPEC ★ — Recomiéndame un profesor','h1' => 'Califica a un profesor','pAfterH1' => 'Aquí podrás calificar a cualquier profesor disponible con los que hayas cursado, para orientar a los demás sobre cómo es dicho profesor.']); ?>

     <?php $__env->slot('metadesc', null, []); ?> 
        ➜ Califica al docente de la Universidad APEC con el que hayas cursado y desees, así ayudas a los demás a saber si es un profesor recomendable . ➤ ➤ ¡Vamos, date una vuelta por aquí y prueba esta herramienta! ;&#x29;
     <?php $__env->endSlot(); ?>


     <?php $__env->slot('otherstyle', null, []); ?> 
        <link rel="stylesheet" href="<?php echo e(asset('css/consejos.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('css/professors_subjects.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('css/qualif.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('css/roundslider.min.css')); ?>" />
     <?php $__env->endSlot(); ?>

     <?php $__env->slot('otherjs', null, []); ?> 
        <script src="<?php echo e(asset('js/qualif.js')); ?>" defer></script>
        <script src="<?php echo e(asset('js/roundslider.min.js')); ?>" defer></script>
     <?php $__env->endSlot(); ?>

     <?php $__env->slot('imgpage', null, []); ?> 
        <?php if(auth()->guard()->check()): ?><?php echo e(asset('img/rate.svg')); ?><?php endif; ?>
        <?php if(auth()->guard()->guest()): ?><?php echo e(asset('img/need_auth.svg')); ?><?php endif; ?>
     <?php $__env->endSlot(); ?>

     <?php $__env->slot('buttons', null, []); ?> 
        <div class="botones">
            <div class="box" style="--Color:#fc6045;">
                <div class="content">
                    <div class="icon">
                        <?php if(auth()->guard()->check()): ?><i class="fa-solid fa-circle-exclamation"></i><?php endif; ?>
                        <?php if(auth()->guard()->guest()): ?><i class="fa-solid fa-user-astronaut"></i><?php endif; ?>
                    </div>
                    <div class="text">
                        <?php if(auth()->guard()->check()): ?>
                            <h3>Ten en cuenta que...</h3>
                            <p>Debes ser justo al calificar, el objetivo de la calificación y opinión hacia un maestro es
                                dar a conocer sus diferentes ámbitos profesionales en la enseñanza desde el punto de vista
                                de los estudiantes que han cursado algún período con dicho maestro. No se trata de
                                insultarlo o difamarlo con alguna mala intención.</p>
                        <?php endif; ?>
                        <?php if(auth()->guard()->guest()): ?>
                            <h3>Lo sentimos, pero...</h3>
                            <p>Aún no has iniciado sesión. Para calificar a algún profesor, tienes que tener una cuenta con
                                sesión iniciada, así que no dudes en iniciar sesión, o bien, registrarte en caso de no tener
                                una cuenta creada. ¡Es fácil y rápido hacerlo!</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
     <?php $__env->endSlot(); ?>

     <?php $__env->slot('general1', null, []); ?> 
        <div class="general1">
            <section class="esta-pagina">
                <?php if(auth()->guard()->check()): ?>

                    <h2>Formulario para calificación</h2>
                    <div class="filter_back">
                        <form action="<?php echo e(route('calificar.store')); ?>" method="POST" id="form_filter">
                            <?php echo csrf_field(); ?>

                            <div class="dropdown-container">
                                <div class="textBox" effect="ripple" id="modality_filter"><?php if(request()->query('teacher')): ?><div class="career modali"><i class="fa-solid fa-chalkboard-user"></i><span class="car"><?php echo e(str(str_replace('-', ' ', request()->query('teacher')))->title()); ?></span></div><?php endif; ?></div>
            
                                <i class="fa-solid fa-angle-down dropdown-before"></i>
                                <span class="career-title">Selecciona al profesor:</span>
                            </div>
                            <?php $__errorArgs = ['teacher_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <small style="color:#fc6045; font-style:italic;"><?php echo e($message); ?></small>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                            <div class="option" id="modality_option">
                                <div class="search-box" id="search_teacher_content">
                                    <input type="text" name="search_teacher" id="search_teacher" class="search"
                                        placeholder="Nombre del profesor..." value="">
                                    <span class="loader" id="loader"></span>
                                    <label for="search_subject" class="glass"><i class="fa-solid fa-magnifying-glass"></i>
                                    </label>
                                    <div class="border-expand"></div>
                                </div>
                                <section id="the_teachers">
                                    <span class="info_teach"><i class="fa-brands fa-searchengin"></i>Escribe el nombre del
                                        profesor al que deseas calificar</span>
                                </section>
                            </div>


                            <div class="dropdown-container">
                                <div class="textBox" effect="ripple" id="schedule_filter"></div>
                                <i class="fa-solid fa-angle-down dropdown-before"></i>
                                <span class="career-title">Cuatrimestre cursado:</span>
                            </div>
                            <?php $__errorArgs = ['quarter'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <small style="color:#fc6045; font-style:italic;"><?php echo e($message); ?></small>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                            <div class="option" id="schedule_option">
                                <div class="search-box" id="search_period_cont">
                                    <input type="text" name="" id="search_period" class="search"
                                        placeholder="Escribe el período, año o cuatrimestre">
                                    <label for="search_subject" class="glass"><i class="fa-solid fa-magnifying-glass"></i>
                                    </label>
                                    <div class="border-expand"></div>
                                </div>
                                <?php if($quarters != null): ?>
                                <?php $__currentLoopData = $quarters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $quarter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="career schedul" effect="ripple"><i
                                            class="fa-regular fa-calendar-days"></i></i><span
                                            class="car"><?php echo e($quarter['period']); ?></span>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                                <div class="notFound" id="sch_not_f" aria-disabled="true">
                                    <div class="icon-not-found">
                                        <i class="fa-solid fa-exclamation"></i>
                                    </div> Período especificado no encontrado
                                </div>
                            </div>

                            <div class="range_inputs">

                                <div class="circle_container">
                                    <span class="descr">¿Cómo explica?</span>
                                    <span id="condition_1" class="condition_status"></span>
                                    <div id="explaining_rate"></div>
                                    <?php $__errorArgs = ['explaining_rate'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <small style="color:#fc6045; font-style:italic;"><?php echo e($message); ?></small>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>

                                <div class="circle_container">
                                    <span class="descr">¿Cómo evalúa?</span>
                                    <span id="condition_2" class="condition_status"></span>
                                    <div id="evaluation_rate"></div>
                                    <?php $__errorArgs = ['evaluation_rate'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <small style="color:#fc6045; font-style:italic;"><?php echo e($message); ?></small>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>

                                <div class="circle_container">
                                    <span class="descr">¿Retomarías con él/ella?</span>
                                    <span id="condition_3" class="condition_status"></span>
                                    <div id="class_again_rate"></div>
                                    <?php $__errorArgs = ['class_again_rate'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <small style="color:#fc6045; font-style:italic;"><?php echo e($message); ?></small>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>

                                <div class="circle_container">
                                    <span class="descr">¿Qué tan puntual fue?</span>
                                    <span id="condition_4" class="condition_status"></span>
                                    <div id="puntuality_rate"></div>
                                    <?php $__errorArgs = ['puntuality_rate'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <small style="color:#fc6045; font-style:italic;"><?php echo e($message); ?></small>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>



                                <div class="circle_container">
                                    <span class="descr">Calificación general</span>
                                    <span id="condition_5" class="condition_status"></span>
                                    <div id="general_rate"></div>
                                    <?php $__errorArgs = ['general_rate'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <small style="color:#fc6045; font-style:italic;"><?php echo e($message); ?></small>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>

                            </div>

                            <div class="comment_body">
                                <textarea class="text_c" name="body" id="body_opinion"
                                    placeholder="Describe cómo fue, para ti, y en general, cursar alguna asignatura con este docente" required></textarea>
                                    <?php $__errorArgs = ['body'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <small style="color:#fc6045; font-style:italic;"><?php echo e($message); ?></small>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                                    <span id="error_slider"></span>
                            </div>



                            <input type="hidden" name="teacher_id" value="<?php echo e(str(str_replace('-', ' ', request()->query('teacher')))->title()); ?>" id="teacher_selected">
                            <input type="hidden" name="quarter" value="" id="quarter_selected">
                            <button type="submit" id="submit_button" class="md-ripples ripples-bg-immer-weiss">Publicar
                                opinión</button>
                        </form>
                    </div>
                    <div class="fondo-select-responsive"></div>
                <?php endif; ?>

                <?php if(auth()->guard()->guest()): ?>
                    <h2>Para tener sesión iniciada</h2>

                    <p id="p_guest">Puedes acceder a la opción de <a id="login_guest" href="javascript:void(0)">Iniciar
                            sesión haciendo click aquí</a>, o bien, si aún no tienes una cuenta, puedes <a
                            href="<?php echo e(route('registro')); ?>">registrarte haciendo clic aquí</a>. Con esto podrás tener
                        acceso al formulario de evaluación docente y calificar a cualquier profesor disponible en el
                        sistema. Recuerda que es importante tener una cuenta activa para poder utilizar la mayor parte de
                        funcionalidades del sitio web. Si tienes alguna duda o problema con el inicio de sesión o el
                        registro, no dudes en ponerte en contacto con nosotros. ¡Esperamos verte pronto calificando a tus
                        profesores!</p>
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
<?php /**PATH C:\Users\Harve\OneDrive\Bureau\Recomiendame un Profesor\RecomiendameUnProfesor\resources\views/calificar.blade.php ENDPATH**/ ?>