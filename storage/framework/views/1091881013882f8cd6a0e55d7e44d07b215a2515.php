<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.layouts.guest','data' => ['title' => 'Recuperacion de contraseña','h1' => 'Recupera tu contraseña olvidada','pAfterH1' => 'Con sólo unos cuantos pasos, podrás tener nuevamente acceso a tu cuenta en nuestro sitio web ; + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layouts.guest'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>.']])
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Recuperacion de contraseña','h1' => 'Recupera tu contraseña olvidada','pAfterH1' => 'Con sólo unos cuantos pasos, podrás tener nuevamente acceso a tu cuenta en nuestro sitio web ;).']); ?>

     <?php $__env->slot('general1', null, []); ?> 
        <div class="general1">
            <section class="esta-pagina">
            <h2>Verifica tu correo electrónico</h2>
            <?php if(session('resent')): ?>
            <p><?php echo e(__('Se envió un enlace con el que podrás restablecer tu contraseña.')); ?></p>
            <?php endif; ?>
            <a href="<?php echo e(URL::asset("$token/reset-password")); ?>">Clickea aqui</a>
        </section>
        </div>
     <?php $__env->endSlot(); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?><?php /**PATH C:\Users\Harve\OneDrive\Bureau\Recomiendame un Profesor\RecomiendameUnProfesor\resources\views/recovery/verifyRecovery.blade.php ENDPATH**/ ?>