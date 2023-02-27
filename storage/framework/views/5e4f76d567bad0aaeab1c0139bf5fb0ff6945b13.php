<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.layouts.guest','data' => ['title' => 'Sección de reportes','h1' => 'Sección de reportes','pAfterH1' => 'Aquí podrás visualizar todos los reportes que se han hecho hasta ahora']] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layouts.guest'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Sección de reportes','h1' => 'Sección de reportes','pAfterH1' => 'Aquí podrás visualizar todos los reportes que se han hecho hasta ahora']); ?>

     <?php $__env->slot('otherstyle', null, []); ?> 
        <link rel="stylesheet" href="<?php echo e(asset('css/consejos.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('css/professors_subjects.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('css/pagination.css')); ?>" />
        <style>
header .le-nav li .menu-desplegable, header .le-nav li .menu-desplegable-2 {
    z-index: 1;
}
            .items_actins {
                display: flex;
                flex-direction: row;
                gap: 10px;
            }

            table {
                width: 170vw !important;
            }

            .items_actins .acti {
                display: block;
                text-decoration: none;
                color: inherit;
                background: transparent;
                padding: 10px;
                width: max-content;
                border-radius: 15px;
                border: 1px solid #b8b8b8;
                transition: all .2s ease;

            }

            .items_actins .acti:hover {
                border: 1px solid #fc6045;
                color: #fc6045;
            }
            </style>
     <?php $__env->endSlot(); ?>

     <?php $__env->slot('otherjs', null, []); ?> 
        <script src="<?php echo e(asset('js/pagination.js')); ?>" defer></script>
        <script>
            function confirmAction(event, action, form) {
    event.preventDefault();
    if (confirm(`¿Estás seguro de que deseas ${action}?`)) {
        form.submit();
    }
}
        </script>
     <?php $__env->endSlot(); ?>

     <?php $__env->slot('imgpage', null, []); ?> 
        <?php echo e(asset('img/panel.svg')); ?>

     <?php $__env->endSlot(); ?>

     <?php $__env->slot('buttons', null, []); ?> 
        <div class="botones">
            <div class="box" style="--Color:#fc6045;">
                <div class="content">
                    <div class="icon"><i class="fa-solid fa-chalkboard-user"></i></div>
                    <div class="text">
                        <h3>¡Bienvenido administrador!</h3>
                            <p>Aquí podrás ver los reportes que se han heco dentro de la aplicación desde los más recientes hasta los más antiguos. De igual forma, la razón que produjo al usuario hacerlo.</p>
                    </div>
                </div>
            </div>
        </div>
     <?php $__env->endSlot(); ?>

     <?php $__env->slot('general1', null, []); ?> 
        <div class="general1">
            <section class="esta-pagina">

                <h2>Reportes detallados</h2>
                
                <div class="table-parent">
                    <div class="table__header">
                        <div class="info_teacher">
                            <h3>Todos los reportes</h3>
                        </div>
                    </div>
                    <div class="table__body">
                        <table>
                            <thead>
                                <tr>
                                    <th class="header_table md-ripples ripples-bg">Reportador<span class="class-arrow"></span></th>
                                    <th class="header_table md-ripples ripples-bg">Reportado<span class="class-arrow"></span></th>
                                    <th  class="header_table md-ripples ripples-bg">Razón<span class="class-arrow"></span></th>
                                    <th class="header_table md-ripples ripples-bg">Tipo<span class="class-arrow"></span></th>
                                    <th class="header_table md-ripples ripples-bg">Fecha<span class="class-arrow"></span></th>
                                                <th class="header_table md-ripples ripples-bg">Profesor<span class="class-arrow"></span></th>
                                                    <th class="header_table md-ripples ripples-bg">Contenido<span class="class-arrow"></span></th>
                                    <th class="header_table md-ripples ripples-bg">Acciones<span class="class-arrow"></span></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if($reports->count() > 0): ?>
                                <?php $__currentLoopData = $reports; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $report): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr class="tr_count">
                                        <td><?php echo e($report->user->username); ?></td>

                                        <td><?php echo e(($report->opinion_id === null) ? $report->replies->user->username  : $report->opinion->user->username); ?></td>

                                        <td ><?php echo e($report->reason); ?></td>

                                        <td><?php echo e(($report->opinion_id === null) ? 'Respuesta' : 'Opinión'); ?></td>

                                        <td><?php echo e($report->created_at->diffForHumans()); ?></td>

                                        <td><?php echo e(($report->opinion_id === null) ? $report->replies->opinion->teacher->name : $report->opinion->teacher->name); ?>

                                            </td>


                                        <td>
                                            <?php echo e(($report->opinion_id === null) ? $report->replies->body : $report->opinion->body); ?>

                                           </td>
                                        <td><div class="items_actins">
                                            <form action="<?php echo e(route('comment.delete')); ?>" method="POST">
                                                <?php echo csrf_field(); ?>
                                                <a class="acti" href="javascript:void(0)" onclick="confirmAction(event, 'borrar comentario', this.closest('form'))">Borrar comentario</a>
                                    
                                                <input type="hidden" name="type" value="<?php echo e(($report->opinion_id === null) ? 'reply' : 'opinion'); ?>">
                                                <input type="hidden" name="_id" value="<?php echo e(($report->opinion_id === null) ? $report->reply_id  : $report->opinion_id); ?>">
                                            </form>
                                    
                                            <form action="<?php echo e(route('destroy')); ?>" method="POST">
                                                <?php echo csrf_field(); ?>
                                                <a class="acti" href="javascript:void(0)" onclick="confirmAction(event, 'borrar reporte', this.closest('form'))">Borrar reporte</a>
                                                <input type="hidden" name="report_id" value="<?php echo e($report->id); ?>">
                                            </form>
                                                                                
                                            <form action="<?php echo e(route('reporter-ban')); ?>" method="POST">
                                                <?php echo csrf_field(); ?>
                                                <a class="acti" href="javascript:void(0)" onclick="confirmAction(event, 'banear usuario que reportó', this.closest('form'))">Banear usuario que reportó</a>
                                                <input type="hidden" name="report_id" value="<?php echo e($report->id); ?>">
                                                <input type="hidden" name="user_id" value="<?php echo e($report->user_id); ?>">
                                            </form>
                                                                                
                                                                                
                                            <form action="<?php echo e(route('reported-ban')); ?>" method="POST">
                                                <?php echo csrf_field(); ?>
                                                <a class="acti" href="javascript:void(0)" onclick="confirmAction(event, 'banear usuario reportado', this.closest('form'))">Banear usuario reportado</a>
                                    
                                                <input type="hidden" name="report_id" value="<?php echo e($report->id); ?>">
                                            </form>
                                        </div></td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php else: ?>
                                    <tr>
                                        <td colspan="8"><span style="display: flex; justify-content: center;">¡Bien, no hay reportes por ahora!</span></td>
                                    </tr>
                                    <?php endif; ?>

                            </tbody>
                        </table>
                        
                    </div>
                    
                </div>
                <?php if($errors->any()): ?>
                <div style="text-align: left ">
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li style="color:#fc6045; "><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
                <?php endif; ?>
                <?php echo e($reports->links()); ?>




            </section>
           
        </div>
     <?php $__env->endSlot(); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH C:\Users\Harve\OneDrive\Bureau\Recomiendame un Profesor\RecomiendameUnProfesor\resources\views/admin/reportes.blade.php ENDPATH**/ ?>