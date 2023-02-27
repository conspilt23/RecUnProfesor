@guest
<div class="an-form-re">
<div class="contenedor-login" id="contenedor-login1">
    <i class="fa-solid fa-circle-arrow-left" id="arrow-left"></i>
    <i class="fa-solid fa-circle-xmark marca-x marcaX close"></i>
    <div class="formularios">
        <div class="titulo-cont cont_2"><span class="titulo">Recuperar contraseña</span></div>
        <form class="prev-form" action="/forget-password" method="POST">
            @csrf
            <div class="campo-entrada">
            <input type="email" name="email" id="labe_recovery"  placeholder=" " required>
            <span class="form_span">Introduce tu correo</span>
            <label for="labe_recovery" class="eee_mail">
                <i class="fa-solid fa-envelope icono01"></i>
            </label>
            </div>
            @error('email')
            <small style="color: rgba(248, 6, 26, 0.642)">{{$message}}</small>
            @enderror

             <div class="campo-entrada boton md-ripples ripples-bg-immer-weiss">
                <div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
                <input type="submit" class="prev-button" id="" value="Enviar correo">
                </div>
        </form>

        <div class="iniciar-registro">
            <span class="textoCheck pad-bo">Cuando hayas puesto tu correo con el que te registraste, te enviaremos un e-mail para restablecer tu contraseña. </span>
            <br>
           <span class="textoCheck pad-bo" style="position: relative; top: 12px; font-size: 10px;"> Si no lo encuentras, revisa tu bandeja de correos no deseados o SPAM.</span>
        </div>
    </div>
</div>
</div>
@endguest