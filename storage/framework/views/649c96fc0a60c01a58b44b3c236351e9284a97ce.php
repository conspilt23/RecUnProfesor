<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.layouts.guest','data' => ['title' => '▷ Regístrate en nuestra plataforma — Recomiéndame un profesor','h1' => 'Regístrate fácilmente','pAfterH1' => 'Con sólo unos cuantos pasos, podrás tener tu cuenta en nuestro sitio web, con el fin de que puedas dar tu opinión sobre los docentes con los que has cursado, al igual que más facilidades a la hora de buscar tus recomendaciones, ya sean individuales o cuatrimestrales.']] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layouts.guest'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => '▷ Regístrate en nuestra plataforma — Recomiéndame un profesor','h1' => 'Regístrate fácilmente','pAfterH1' => 'Con sólo unos cuantos pasos, podrás tener tu cuenta en nuestro sitio web, con el fin de que puedas dar tu opinión sobre los docentes con los que has cursado, al igual que más facilidades a la hora de buscar tus recomendaciones, ya sean individuales o cuatrimestrales.']); ?>


     <?php $__env->slot('metadesc', null, []); ?> 
        ➫ En esta página, podrás registrarte y disfrutar de diversos beneficios como estudiante de la Universidad APEC. ➤ ➤ ✅¡Siéntete cómodo y regístrate para dar tus opiniones sobre profesores con los que has cursado!✅ ;&#x29;
       <?php $__env->endSlot(); ?>

     <?php $__env->slot('otherstyle', null, []); ?> 
        <link rel="stylesheet" href="<?php echo e(asset('css/rg.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('css/consejos.css')); ?>">
     <?php $__env->endSlot(); ?>

     <?php $__env->slot('otherjs', null, []); ?> 
        <script src="<?php echo e(asset('js/rg.js')); ?>" defer></script>

        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        
     <?php $__env->endSlot(); ?>

     <?php $__env->slot('imgpage', null, []); ?> 
        <?php echo e(URL('img/registro.svg')); ?>

     <?php $__env->endSlot(); ?>

    <?php if(auth()->guard()->guest()): ?>

         <?php $__env->slot('buttons', null, []); ?> 
            <div class="botones">
              <div class="box" style="--Color:#fc6045;">
                <div class="content">
                  <div class="icon"><i class="fa-solid fa-user-plus"></i></div>
                  <div class="text">
                    <h3>Regístrate fácilmente</h3>
                    <p>Puedes registrarte con solo llenar los campos que te mostraremos a continuación. Sólo basta con llenar los campos, enviar el formulario de registro y ya tendrás tu cuenta en nuestro sitio para que puedas disfrutar de varios beneficios.</p>
                  </div>
                </div>
              </div>
            </div>
           <?php $__env->endSlot(); ?>
         <?php $__env->slot('general1', null, []); ?> 
            <div class="general1">
                <div class="container">
                    <div class="title">Regístrate</div>

                    <form class="prev-form" action="/registro" method="POST" id="formulario">
                        <?php echo csrf_field(); ?>
                        <div class="user-details">
                            <div class="input-box">
                                <i class="fa-regular fa-user izq"></i>
                                <input type="text" class="<?php echo e($errors->has('registration_username') ? 'error-input' : ''); ?>" name="registration_username" id="rg_username" placeholder=" "
                                    value="<?php echo e(old('registration_username')); ?>" maxlength="16" required>
                                <span class="details">Usuario</span>
                                <i class="fa-solid fa-circle-info der info_user"></i>
                                <?php $__errorArgs = ['registration_username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <p class="err-m" ><?php echo e($message); ?></p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="input-box">
                                <i class="fa-regular fa-envelope izq"></i>
                                <input type="email" class="<?php echo e($errors->has('registration_email') ? 'error-input' : ''); ?>" name="registration_email" id="rg_email" placeholder=" "
                                    value="<?php echo e(old('registration_email')); ?>" required>
                                <span class="details">Correo</span>
                                <?php $__errorArgs = ['registration_email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <p class="err-m" ><?php echo e($message); ?></p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="input-box">
                                <i class="fa-solid fa-lock izq"></i>
                                <input type="password" class="pas1 <?php echo e($errors->has('registration_password') ? 'error-input' : ''); ?>" name="registration_password" id="rg_password1"
                                    placeholder=" " value="<?php echo e(old('registration_password')); ?>" required>
                                <span class="details">Contraseña</span>
                                <i class="fa-regular fa-eye-slash der contra1"></i>
                                <?php $__errorArgs = ['registration_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <p class="err-m" ><?php echo e($message); ?></p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="input-box">
                                <i class="fa-solid fa-lock izq"></i>
                                <input type="password" class="pas2 <?php echo e($errors->has('password_confirmation') ? 'error-input' : ''); ?>" name="password_confirmation" id="rg_password2"
                                    placeholder=" " value="<?php echo e(old('password_confirmation')); ?>" required>
                                <span class="details">Repite la contraseña</span>
                                <i class="fa-regular fa-eye-slash der contra2"></i>
                                <?php $__errorArgs = ['password_confirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <p class="err-m"><?php echo e($message); ?></p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <span class="tool tool-info-user">El nombre de usuario es el que se mostrará cuando des tu
                                opinión.</span>
                        </div>

                        <div class="dropdown-container">
                            <div class="textBox" effect="ripple"></div>
                            <i class="fa-solid fa-angle-down dropdown-before"></i>
                            <span class="career-title">Selecciona tu carrera:</span>
                            <i class="fa-solid fa-circle-info info_career arriba"></i>
                        </div>
                        <?php $__errorArgs = ['career'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="err-m"><?php echo e($message); ?></p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        <span class="tool tool-info-career">Te solicitamos la carrera que estudias tanto para datos
                            estadísticos, como para tomarlo en cuenta en las diversas herramientas que tenemos preparadas para ti.</span>

                        <div class="option">
                            <?php $__currentLoopData = $careers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $career): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="career" effect="ripple">
                                    <i class="fa-solid <?php echo e($career->icon_class); ?>"></i><span class="car"><?php echo e($career->name); ?></span>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>

                        
                        <div style="margin: 40px 0; overflow-x: auto; overflow-y: hidden;">
                            <div class="g-recaptcha" data-sitekey="6LdP7ZIkAAAAANKq9Lwf1h883Kz0pOwrX9D-MvcX"></div>
                            <?php $__errorArgs = ['g-recaptcha-response'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="err-m"><?php echo e($message); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="button-check">
                            <input type="checkbox" id="confirm" required>
                            <label for="confirm">Acepto los <a href="<?php echo e(route('terminos')); ?>">términos y condiciones</a> de Recomiéndame Un
                                Profesor, al igual que su <a href="<?php echo e(route('privacidad')); ?>">política de privacidad.</a></label>
                        </div>

                        <div class="button md-ripples ripples-bg-immer-weiss">
                            <div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
                            <input type="submit" class="prev-button" id="submitB" value="Regístrame ahora" disabled="disabled">
                        </div>

                        <input type="hidden" name="career" id="carrer_selected" value="">
                    </form>
                </div>

  
            </div>

            <div class="fondo-select-responsive"></div>
         <?php $__env->endSlot(); ?>
    <?php endif; ?>

    <?php if(auth()->guard()->check()): ?>
         <?php $__env->slot('general1', null, []); ?> 
            <div class="general1">
                <section class="esta-pagina">
                    <h2>No hace falta que estés aquí...</h2>
                    
                    <p style="margin-bottom: 150px;">Ya tienes una cuenta con sesión iniciada. <br> Te recomendamos volver
                        al menú de inicio, o bien usar las herramientas que ya tenemos preparadas para ti ;&#41; .
                    
                    </p>

  


                </section>
            </div>
         <?php $__env->endSlot(); ?>
    <?php endif; ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH C:\Users\Harve\OneDrive\Bureau\Recomiendame un Profesor\RecomiendameUnProfesor\resources\views/registro.blade.php ENDPATH**/ ?>