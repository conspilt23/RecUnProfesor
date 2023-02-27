<div class="fondo-transparente" id="fondoTransparente"></div>
@if(session('Errorlogin'))
<div class="fondo-login close fondo-login-activated" id="Login-fondo" style="display: block;"></div>
@else
<div class="fondo-login close" id="Login-fondo"></div>
@endif
<div class="lds-parent">
    <span class="loader-1"></span>
</div>