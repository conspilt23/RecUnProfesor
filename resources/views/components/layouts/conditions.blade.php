@if (session('succes'))
    <div class="banerr Sign_up_succesfully">
        <div class="banner-content">
            <i class="fa-solid fa-user-check check"></i>
    
            <div class="message">
                <span class="text text-1">Cuenta creada con éxito</span>
                <span class="text text-2">¡No dudes en iniciar sesión!</span>
            </div>
        </div>
        <i class="fa-solid fa-xmark closs"></i>
    
        <div class="progress"></div>
    </div>
@elseif(session('message'))
    <div class="banerr recovery-send">
        <div class="banner-content">
            <i class="fa-solid fa-key check"></i>
    
            <div class="message">
                <span class="text text-1">Enlace enviado</span>
                <span class="text text-2">Revisa tu correo.</span>
            </div>
        </div>
        <i class="fa-solid fa-xmark closs"></i>
    
        <div class="progress"></div>
    </div>
@elseif(session('Errorlogin'))
<div class="banerr Error">
    <div class="banner-content">
        <i class="fa-solid fa-xmark check"></i>

        <div class="message">
            <span class="text text-1">Sesión fallida</span>
            <span class="text text-2">Revisa tus credenciales.</span>
        </div>
    </div>
    <i class="fa-solid fa-xmark closs"></i>

    <div class="progress"></div>
</div>
@elseif(session('errorSend'))
<div class="banerr Error">
    <div class="banner-content">
        <i class="fa-solid fa-user-xmark check"></i>

        <div class="message">
            <span class="text text-1">Error</span>
            <span class="text text-2">Cuenta inexistente</span>
        </div>
    </div>
    <i class="fa-solid fa-xmark closs"></i>

    <div class="progress"></div>
</div>
@elseif(session('error_reset'))
<div class="banerr Error">
    <div class="banner-content">
        <i class="fa-solid fa-xmark check"></i>

        <div class="message">
            <span class="text text-1">Error de expiración</span>
            <span class="text text-2">Credenciales expiradas</span>
        </div>
    </div>
    <i class="fa-solid fa-xmark closs"></i>

    <div class="progress"></div>
</div>
@elseif(session('Loginsuccesfully'))
    <div class="banerr action_succesfully">
        <div class="banner-content">
            <i class="fa-solid fa-check check"></i>
    
            <div class="message">
                <span class="text text-1">¡Hola {{ auth()->user()->username }}!</span>
                <span class="text text-2">¡Un gusto que estés aquí!</span>
            </div>
        </div>
        <i class="fa-solid fa-xmark closs"></i>
    
        <div class="progress"></div>
    </div>
@elseif(session('reseted'))
    <div class="banerr action_succesfully">
        <div class="banner-content">
            <i class="fa-solid fa-unlock-keyhole check"></i>
    
            <div class="message">
                <span class="text text-1">Cambio correcto</span>
                <span class="text text-2">Tu contraseña ha sido cambiada.</span>
            </div>
        </div>
        <i class="fa-solid fa-xmark closs"></i>
    
        <div class="progress"></div>
    </div>

@elseif(session('loggedout'))
    <div class="banerr information_blue_bg">
        <div class="banner-content">
            <i class="fa-solid fa-info check"></i>
    
            <div class="message">
                <span class="text text-1">Sesión cerrada</span>
                <span class="text text-2">Tu sesión ha sido cerrada correctamente.</span>
            </div>
        </div>
        <i class="fa-solid fa-xmark closs"></i>
    
        <div class="progress"></div>
    </div>
    @elseif (session('ok_comment'))
    <div class="banerr action_succesfully">
        <div class="banner-content">
            <i class="fa-solid fa-check check"></i>
    
            <div class="message">
                <span class="text text-1">Comentario publicado exitosamente</span>
                <span class="text text-2">¡Échale un vistazo!</span>
            </div>
        </div>
        <i class="fa-solid fa-xmark closs"></i>
    
        <div class="progress"></div>
    </div>
    @elseif(session('ok_reply'))
    <div class="banerr action_succesfully">
        <div class="banner-content">
            <i class="fa-solid fa-check check"></i>
    
            <div class="message">
                <span class="text text-1">Respuesta publicada con éxito</span>
                <span class="text text-2">Tu respuesta fue publicada exitosamente</span>
            </div>
        </div>
        <i class="fa-solid fa-xmark closs"></i>
    
        <div class="progress"></div>
    </div>
    @elseif(session('ok_report'))
    <div class="banerr action_succesfully">
        <div class="banner-content">
            <i class="fa-solid fa-check check"></i>
    
            <div class="message">
                <span class="text text-1">Reporte enviado correctamente</span>
                <span class="text text-2">Gracias por reportar, revisaremos tu reporte.</span>
            </div>
        </div>
        <i class="fa-solid fa-xmark closs"></i>
    
        <div class="progress"></div>
    </div>
    @elseif(session('error_same_comment'))
<div class="banerr Error">
    <div class="banner-content">
        <i class="fa-solid fa-xmark check"></i>

        <div class="message">
            <span class="text text-1">Error al enviar reporte</span>
            <span class="text text-2">No puedes reportar tu propia opinión</span>
        </div>
    </div>
    <i class="fa-solid fa-xmark closs"></i>

    <div class="progress"></div>
</div>
@elseif(session('error_same_reply'))
<div class="banerr Error">
    <div class="banner-content">
        <i class="fa-solid fa-xmark check"></i>

        <div class="message">
            <span class="text text-1">Error al enviar reporte</span>
            <span class="text text-2">No puedes reportar tu propia respuesta</span>
        </div>
    </div>
    <i class="fa-solid fa-xmark closs"></i>

    <div class="progress"></div>
</div>
@elseif(session('error_already_sent'))
<div class="banerr Error">
    <div class="banner-content">
        <i class="fa-solid fa-xmark check"></i>

        <div class="message">
            <span class="text text-1">Error al enviar reporte</span>
            <span class="text text-2">Ya has reportado este comentario</span>
        </div>
    </div>
    <i class="fa-solid fa-xmark closs"></i>

    <div class="progress"></div>
</div>
@elseif(session('reply_exceeded'))
<div class="banerr Error">
    <div class="banner-content">
        <i class="fa-solid fa-xmark check"></i>

        <div class="message">
            <span class="text text-1">Error al publicar respuesta</span>
            <span class="text text-2">Has excedido el límite de respuestas a esta opinión por hoy</span>
        </div>
    </div>
    <i class="fa-solid fa-xmark closs"></i>

    <div class="progress"></div>
</div>
@elseif(session('error_no_admin'))
<div class="banerr Error">
    <div class="banner-content">
        <i class="fa-solid fa-xmark check"></i>

        <div class="message">
            <span class="text text-1">Error al tratar de vetar al usuario</span>
            <span class="text text-2">{{session('error_no_admin')}}</span>
        </div>
    </div>
    <i class="fa-solid fa-xmark closs"></i>

    <div class="progress"></div>
</div>
@elseif(session('error_banned_aggain'))
<div class="banerr Error">
    <div class="banner-content">
        <i class="fa-solid fa-xmark check"></i>

        <div class="message">
            <span class="text text-1">Error al tratar de vetar al usuario</span>
            <span class="text text-2">{{session('error_banned_aggain')}}</span>
        </div>
    </div>
    <i class="fa-solid fa-xmark closs"></i>

    <div class="progress"></div>
</div>
@elseif(session('ok_banned'))
<div class="banerr action_succesfully">
    <div class="banner-content">
        <i class="fa-solid fa-check check"></i>

        <div class="message">
            <span class="text text-1">Usuario vetado</span>
            <span class="text text-2">{{session('ok_banned')}}</span>
        </div>
    </div>
    <i class="fa-solid fa-xmark closs"></i>

    <div class="progress"></div>
</div>
@elseif(session('error_no_permission'))
<div class="banerr Error">
    <div class="banner-content">
        <i class="fa-solid fa-xmark check"></i>

        <div class="message">
            <span class="text text-1">Ha ocurrido un error</span>
            <span class="text text-2">{{session('error_no_permission')}}</span>
        </div>
    </div>
    <i class="fa-solid fa-xmark closs"></i>

    <div class="progress"></div>
</div>
@elseif(session('ok_deleted'))
<div class="banerr action_succesfully">
    <div class="banner-content">
        <i class="fa-solid fa-check check"></i>

        <div class="message">
            <span class="text text-1">Comentario eliminado exitosamente</span>
            <span class="text text-2">{{session('ok_deleted')}}</span>
        </div>
    </div>
    <i class="fa-solid fa-xmark closs"></i>

    <div class="progress"></div>
</div>
@elseif(session('success_delete_report'))
<div class="banerr action_succesfully">
    <div class="banner-content">
        <i class="fa-solid fa-check check"></i>

        <div class="message">
            <span class="text text-1">Reporte eliminado exitosamente</span>
            <span class="text text-2">{{session('success_delete_report')}}</span>
        </div>
    </div>
    <i class="fa-solid fa-xmark closs"></i>

    <div class="progress"></div>
</div>
@elseif(session('banned_account'))
<div class="banerr Error">
    <div class="banner-content">
        <i class="fa-solid fa-xmark check"></i>

        <div class="message">
            <span class="text text-1">Tu cuenta ya no está disponible</span>
            <span class="text text-2">{{session('banned_account')}}</span>
        </div>
    </div>
    <i class="fa-solid fa-xmark closs"></i>

    <div class="progress"></div>
</div>
@endif

@if($errors->has('teacher'))
<div class="banerr Error">
    <div class="banner-content">
        <i class="fa-solid fa-xmark check"></i>

        <div class="message">
            <span class="text text-1">Error</span>
            <span class="text text-2">{{ $errors->first('teacher') }}</span>
        </div>
    </div>
    <i class="fa-solid fa-xmark closs"></i>

    <div class="progress"></div>
</div>
@endif