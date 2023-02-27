<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.layouts.guest','data' => ['title' => 'Error 404','h1' => 'Error 404: página no encontrada','pAfterH1' => 'La página que estás tratando de ver no existe o ha sido removida, nos disculpamos por los inconvenientes que esto pueda ocasionarte.']] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layouts.guest'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Error 404','h1' => 'Error 404: página no encontrada','pAfterH1' => 'La página que estás tratando de ver no existe o ha sido removida, nos disculpamos por los inconvenientes que esto pueda ocasionarte.']); ?>

 <?php $__env->slot('otherstyle', null, []); ?> 
    <style>
            main .general1 {
                padding: 28px 387px 131px 100px !important;
        }
        @media (min-width: 1740px){
            main .general1{
                padding: 28px 484px 200px 100px !important;
            }
        }

        @media (max-width: 971px){
            main .general1 {
           padding: 28px 215px 119px 100px !important;
        }

        @media (max-width: 889px){
            main .general1 {
    padding: 28px 211px 119px 50px !important;
}
        }

        @media (max-width: 770px){
            main .general1 {
    padding: 28px 81px 119px 37px !important;
}
        }
        }
    </style>
 <?php $__env->endSlot(); ?>

 <?php $__env->slot('imgpage', null, []); ?> 
    <?php echo e(URL('img/404.svg')); ?>

 <?php $__env->endSlot(); ?>

 <?php $__env->slot('buttons', null, []); ?>  
    <div class="botones">
        <p>Esto suele suceder cuando buscamos alguna página y escribimos mal el nombre, o bien, ya no existe o nunca existió.</p>
    </div>
 <?php $__env->endSlot(); ?>

 <?php $__env->slot('general1', null, []); ?> 
    <div class="general1">
        <section class="esta-pagina">
            <h2>Como has llegado aquí...</h2>

    <p>Te invitamos a retornar a la página de inicio. Si has intentado buscar algún profesor y/o recomendación, te pedimos nuestras más sinceras disculpas. </p> 
    </section>
</div>
 <?php $__env->endSlot(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?><?php /**PATH C:\Users\Harve\OneDrive\Bureau\Recomiendame un Profesor\RecomiendameUnProfesor\resources\views/errors/404.blade.php ENDPATH**/ ?>