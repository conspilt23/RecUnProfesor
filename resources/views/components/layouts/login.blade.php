@guest
@if(session('Errorlogin'))
<div class="an-form" style="display: block; transform: translateX(0px);">
<div class="contenedor-login contenedor-login-actived" id="contenedor-login">
@else 
<div class="an-form">
<div class="contenedor-login" id="contenedor-login">
@endif
<i class="fa-solid fa-circle-xmark marca-x marcaX close"></i>
<div class="formularios">
    <div class="titulo-cont"><span class="titulo">Iniciar sesión</span></div>

    <form class="prev-form" action="/login" method="POST" id="form">
        @csrf
        <div class="campo-entrada">
        <input type="text" class="validate" name="username" minlength="4" id="e_mail" value="{{ old("username") }}"  placeholder=" "  required>
        <span class="form_span">Escribe tu correo o usuario</span>
        <label for="e_mail" class="ee_mail">
            <i class="fa-solid fa-user-lock icono1"></i>
        </label>
        </div>
        @error('username')
            <small style="color: rgb(247, 74, 74);">{{$message}}</small>
        @enderror

         <div class="campo-entrada">
         <input type="password" class="contrasena validate" minlength="8" name="password" id="pass" placeholder=" " required>
         <span class="form_span">Introduce tu contraseña</span>
         <label for="pass" class="label-pass">
         <i class="fa-solid fa-lock icono01"></i>
         <i class="fa-solid fa-eye-slash" id="mostrarEsconder"></i>
        </label>
         </div>
         @error('password')
         <small  style="color: rgb(247, 74, 74);">{{$message}}</small>
         @enderror

         <div class="le-checkbox">
            <div class="checkbox-contenido">
                <input type="checkbox" name="remember" id="loginCheckbox">
                <label for="loginCheckbox" class="textoCheck">Recuérdame</label>
            </div>

            <a href="javascript:void(0)" class="textoCheck" id="forgot-password">¿Has olvidado tu contraseña?</a>
         </div>

         <div class="campo-entrada boton md-ripples ripples-bg-immer-weiss">
            <div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
            <input type="submit" class="prev-button" id="submit_login" value="Iniciar sesión ahora">
            </div>
          
    </form>
    <div class="iniciar-registro">
        <span class="textoCheck pad-bo">¿Aún no eres miembro de la comunidad? ¡Date una vuelta y no dudes en <a href="{{ route('registro') }}" id="Reg">registrarte aquí!</a></span>
    </div>
</div>
</div>
</div>

@endguest
