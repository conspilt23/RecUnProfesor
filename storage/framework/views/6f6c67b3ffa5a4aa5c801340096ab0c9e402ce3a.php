<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.layouts.guest','data' => ['title' => 'Recuperar contraseña','h1' => 'Recuperación de contraseña','pAfterH1' => 'Con sólo unos cuantos pasos, podrás tener acceso a tu cuenta nuevamente. ¡Sólo vasta con llenar el formulario!']] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layouts.guest'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Recuperar contraseña','h1' => 'Recuperación de contraseña','pAfterH1' => 'Con sólo unos cuantos pasos, podrás tener acceso a tu cuenta nuevamente. ¡Sólo vasta con llenar el formulario!']); ?>

     <?php $__env->slot('otherstyle', null, []); ?> 
        <link rel="stylesheet" href="<?php echo e(URL::asset('css/rg.css')); ?>">
        <style>
    .container form .user-details {
    display: block !important; 
}

.user-details .input-box input {
    width: 100% !important;
}

@media  screen and (max-width: 382px){
    .dropdown-container .career-title, .user-details .input-box .details, .user-details .input-box input, .car {
    font-size: 10px !important;
}
.button input {
    font-size: 12px !important;
}
}


@media  screen and (max-width: 338px){
    .dropdown-container .career-title, .user-details .input-box .details, .user-details .input-box input, .car {
    font-size: 8px !important;
    }
}

        </style>
     <?php $__env->endSlot(); ?>

     <?php $__env->slot('otherjs', null, []); ?> 
        <script src="<?php echo e(URL::asset('js/rg.js')); ?>" defer></script>
     <?php $__env->endSlot(); ?>

     <?php $__env->slot('imgpage', null, []); ?> 
        <?php echo e(URL('img/Reset_password.svg')); ?>

     <?php $__env->endSlot(); ?>

    <?php if(auth()->guard()->guest()): ?>
         <?php $__env->slot('buttons', null, []); ?> 
            <div class="botones">
                <p>LLena el formulario a continuación y recupera immediatamente el acceso a tu cuenta &#40;Asegúrate de colocar bien tu dirección de correo electrónico y que tu nueva contraseña coincida con la confirmación&#41;.</p>
            </div>
         <?php $__env->endSlot(); ?>

         <?php $__env->slot('general1', null, []); ?> 
            <div class="general1">
                <div class="container">
                    <div class="title">Recupera tu contraseña</div>

                    <form action="/reset-password" method="POST" id="formulario">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="token" value="<?php echo e($token); ?>">
                        <div class="user-details">
                            <div class="input-box">
                                <i class="fa-regular fa-envelope izq"></i>
                                <input type="email" name="r_email" id="" placeholder=" "
                                    value="<?php echo e(old('registration_email')); ?>" required>
                                <span class="details">Correo de tu cuenta</span>
                                <?php $__errorArgs = ['r_email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <p style="color: rgb(251, 75, 75); font-size: 12px;"><?php echo e($message); ?></p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="input-box">
                                <i class="fa-solid fa-lock izq"></i>
                                <input type="password" class="pas1" name="r_password" id=""
                                    placeholder=" " value="<?php echo e(old('r_password')); ?>" required>
                                <span class="details">Nueva contraseña</span>
                                <i class="fa-regular fa-eye-slash der contra1"></i>
                                <?php $__errorArgs = ['r_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <p style="color: rgb(251, 75, 75); font-size: 12px;"><?php echo e($message); ?></p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="input-box">
                                <i class="fa-solid fa-lock izq"></i>
                                <input type="password" class="pas2" name="r_password_confirmation" id=""
                                    placeholder=" " value="<?php echo e(old('r_password_confirmation')); ?>" required>
                                <span class="details">Repite la nueva contraseña</span>
                                <i class="fa-regular fa-eye-slash der contra2"></i>
                                <?php $__errorArgs = ['r_password_confirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <p style="color: rgb(251, 75, 75); font-size: 12px;"><?php echo e($message); ?></p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                        


                        <div class="button md-ripples ripples-bg-immer-weiss" >
                            <input type="submit" id="submitB" value="Restablecer contraseña">
                        </div>

                    </form>
                </div>
            </div>

         <?php $__env->endSlot(); ?>
    <?php endif; ?>

    <?php if(auth()->guard()->check()): ?>
         <?php $__env->slot('general1', null, []); ?> 
            <div class="general1">
                <section class="esta-pagina">
                    <h2>No hace falta que estés aquí...</h2>
                    <p style="margin-bottom: 150px;">Ya tienes una cuenta con sesión iniciada, por lo que no hace falta que recuperes la contraseña. <br> En caso contrario, te recomendamos cerrarla e intertar recuperarla ;&#41;.</p>
                </section>
            </div>
         <?php $__env->endSlot(); ?>
    <?php endif; ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?><?php /**PATH C:\Users\Harve\OneDrive\Bureau\Recomiendame un Profesor\RecomiendameUnProfesor\resources\views/reset.blade.php ENDPATH**/ ?>