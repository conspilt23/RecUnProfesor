<div class="fondo-transparente" id="fondoTransparente"></div>
<div class="fondo-login close" id="Login-fondo"></div>
<div class="lds-parent"><div class="lds-hourglass"></div></div>

<div class="contenedor-login" id="contenedor-login">
    <i class="fa-solid fa-circle-xmark marca-x marcaX close"></i>
    <div class="formularios">
        <div class="titulo-cont"><span class="titulo">Iniciar sesión</span></div>

        <form action="" method="post">
            <?php echo csrf_field(); ?>
            <div class="campo-entrada">
            <input type="email" name="email" id="e_mail"  placeholder=" " required>
            <span class="form_span">Introduce tu correo</span>
            <label for="e_mail" class="ee_mail">
            <i class="fa-solid fa-envelope icono1"></i>
            </label>
            </div>

             <div class="campo-entrada">
             <input type="password" class="contrasena" name="password" id="pass" placeholder=" " required>
             <span class="form_span">Introduce tu contraseña</span>
             <label for="pass" class="label-pass">
             <i class="fa-solid fa-lock icono1"></i>
             <i class="fa-solid fa-eye-slash" id="mostrarEsconder"></i>
            </label>
             </div>

             <div class="le-checkbox">
                <div class="checkbox-contenido">
                    <input type="checkbox" name="" id="loginCheckbox">
                    <label for="loginCheckbox" class="textoCheck">Recuérdame</label>
                </div>

                <a href="javascript:void(0)" class="textoCheck" id="forgot-password">¿Has olvidado tu contraseña?</a>
             </div>

             <div class="campo-entrada boton" effect="ripple">
                <input type="submit" name="" id="" value="Iniciar sesión ahora">
                </div>
        </form>

        <div class="iniciar-registro">
            <span class="textoCheck pad-bo">¿Aún no eres miembro de la comunidad? ¡Date una vuelta y no dudes en <a href="<?php echo e(route('registro')); ?>" id="Reg">registrarte aquí!</a></span>
        </div>
    </div>
</div>

    <div class="contenedor-login" id="contenedor-login1">
        <i class="fa-solid fa-circle-arrow-left" id="arrow-left"></i>
        <i class="fa-solid fa-circle-xmark marca-x marcaX close"></i>
        <div class="formularios">
            <div class="titulo-cont cont_2"><span class="titulo">Recuperar contraseña</span></div>
            <form action="#" method="#">
                <div class="campo-entrada">
                <input type="email" name="" id="labe_recovery"  placeholder=" " required>
                <span class="form_span">Introduce tu correo</span>
                <label for="labe_recovery" class="eee_mail">
                    <i class="fa-solid fa-envelope icono01"></i>
                </label>
                </div>

                 <div class="campo-entrada boton" effect="ripple">
                    <input type="submit" name="" id="" value="Enviar correo">
                    </div>
            </form>

            <div class="iniciar-registro">
                <span class="textoCheck pad-bo">Cuando hayas puesto tu correo con el que te registraste, te enviaremos un e-mail para restablecer tu contraseña.</span>
            </div>
        </div>
    </div>

    <section class="avisoDeCookies" id="Cookies">
        <div class="titulos-galletas">
        <h3 class="titulo-galleta">¡Hey!</h3>
        <i class="fa-solid fa-cookie-bite"></i>
        </div>
        <div class="parrafo-boton">
        <p class="parrafo-galleta">Sabemos que esto es molesto para ti, pero es nuestro deber informarte que usamos cookies. <a href="<?php echo e(route('cookies')); ?>" class="enlace">Más detalles aquí</a></p>
        <div class="centrar">
        <button class="acorde" id="acorde">¡De acuerdo!</button>
        </div>
        </div>
    </section>

<?php /**PATH C:\Users\Harve\OneDrive\Bureau\Recomiendame un Profesor\RecomiendameUnProfesor\resources\views/components/layouts/LoginAndCookies.blade.php ENDPATH**/ ?>