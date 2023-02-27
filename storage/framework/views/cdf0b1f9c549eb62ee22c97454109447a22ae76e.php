<?php if(auth()->guard()->guest()): ?>
<div>

<div class="contenedor-login" wire:dirty.class="contenedor-login-actived" wire:model.lazy="contenedor_login_actived" id="contenedor-login">
    
    <!-- Close Icon -->
    <i class="fa-solid fa-circle-xmark marca-x marcaX close"></i>

    <!-- Form -->
    <div class="formularios">

        <div class="titulo-cont"><span class="titulo">Iniciar sesión</span></div>

        <form action="/login" method="POST" id="form" wire:submit.prevent='test'>
            <?php echo csrf_field(); ?>

            <!-- Username -->
            <div class="campo-entrada">
                <input type="text" class="validate" name="username" id="e_mail" wire:model="username"  placeholder=" " required>
                <span class="form_span">Escribe tu correo o usuario</span>
                <label for="e_mail" class="ee_mail">
                    <i class="fa-solid fa-user-lock icono1"></i>
                </label>
            </div>

            <div>
                <input type="text" wire:model='username' />
            </div>

            <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p><?php echo e($message); ?><p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

            <!-- Password -->

            <div class="campo-entrada">
                <input type="password" class="contrasena validate" name="password" id="pass" wire:model='password' placeholder=" " required>
                <span class="form_span">Introduce tu contraseña</span>
                <label for="pass" class="label-pass">
                    <i class="fa-solid fa-lock icono01"></i>
                    <i class="fa-solid fa-eye-slash" id="mostrarEsconder"></i>
                </label>
            </div>

            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p><?php echo e($message); ?><p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

         <div class="le-checkbox">
            <div class="checkbox-contenido">
                <input type="checkbox" name="remember" id="loginCheckbox">
                <label for="loginCheckbox" class="textoCheck">Recuérdame</label>
            </div>

            <a href="javascript:void(0)" class="textoCheck" id="forgot-password">¿Has olvidado tu contraseña?</a>
         </div>

         <div class="campo-entrada boton" effect="ripple">
            <input type="submit" name="" id="submit_login" value="Iniciar sesión ahora">
            </div>
    </form>

    <div class="iniciar-registro">
        <span class="textoCheck pad-bo">¿Aún no eres miembro de la comunidad? ¡Date una vuelta y no dudes en <a href="<?php echo e(route('registro')); ?>" id="Reg">registrarte aquí!</a></span>
    </div>
</div>
</div>
</div>
<?php endif; ?>
<?php /**PATH C:\Users\Harve\OneDrive\Bureau\Recomiendame un Profesor\RecomiendameUnProfesor\resources\views/livewire/login-form.blade.php ENDPATH**/ ?>