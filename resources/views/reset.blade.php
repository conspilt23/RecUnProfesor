<x-layouts.guest title="Recuperar contraseña" h1="Recuperación de contraseña"
    pAfterH1="Con sólo unos cuantos pasos, podrás tener acceso a tu cuenta nuevamente. ¡Sólo vasta con llenar el formulario!">

    <x-slot name="otherstyle">
        <link rel="stylesheet" href="{{ URL::asset('css/rg.css') }}">
        <style>
    .container form .user-details {
    display: block !important; 
}

.user-details .input-box input {
    width: 100% !important;
}

@media screen and (max-width: 382px){
    .dropdown-container .career-title, .user-details .input-box .details, .user-details .input-box input, .car {
    font-size: 10px !important;
}
.button input {
    font-size: 12px !important;
}
}


@media screen and (max-width: 338px){
    .dropdown-container .career-title, .user-details .input-box .details, .user-details .input-box input, .car {
    font-size: 8px !important;
    }
}

        </style>
    </x-slot>

    <x-slot name="otherjs">
        <script src="{{ URL::asset('js/rg.js') }}" defer></script>
    </x-slot>

    <x-slot name="imgpage">
        {{ URL('img/Reset_password.svg') }}
    </x-slot>

    @guest
        <x-slot name="buttons">
            <div class="botones">
                <p>LLena el formulario a continuación y recupera immediatamente el acceso a tu cuenta &#40;Asegúrate de colocar bien tu dirección de correo electrónico y que tu nueva contraseña coincida con la confirmación&#41;.</p>
            </div>
        </x-slot>

        <x-slot name="general1">
            <div class="general1">
                <div class="container">
                    <div class="title">Recupera tu contraseña</div>

                    <form action="/reset-password" method="POST" id="formulario">
                        @csrf
                        <input type="hidden" name="token" value="{{ $token }}">
                        <div class="user-details">
                            <div class="input-box">
                                <i class="fa-regular fa-envelope izq"></i>
                                <input type="email" name="r_email" id="" placeholder=" "
                                    value="{{ old('registration_email') }}" required>
                                <span class="details">Correo de tu cuenta</span>
                                @error('r_email')
                                    <p style="color: rgb(251, 75, 75); font-size: 12px;">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="input-box">
                                <i class="fa-solid fa-lock izq"></i>
                                <input type="password" class="pas1" name="r_password" id=""
                                    placeholder=" " value="{{ old('r_password') }}" required>
                                <span class="details">Nueva contraseña</span>
                                <i class="fa-regular fa-eye-slash der contra1"></i>
                                @error('r_password')
                                    <p style="color: rgb(251, 75, 75); font-size: 12px;">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="input-box">
                                <i class="fa-solid fa-lock izq"></i>
                                <input type="password" class="pas2" name="r_password_confirmation" id=""
                                    placeholder=" " value="{{ old('r_password_confirmation') }}" required>
                                <span class="details">Repite la nueva contraseña</span>
                                <i class="fa-regular fa-eye-slash der contra2"></i>
                                @error('r_password_confirmation')
                                    <p style="color: rgb(251, 75, 75); font-size: 12px;">{{ $message }}</p>
                                @enderror
                            </div>

                        


                        <div class="button md-ripples ripples-bg-immer-weiss" >
                            <input type="submit" id="submitB" value="Restablecer contraseña">
                        </div>

                    </form>
                </div>
            </div>

        </x-slot>
    @endguest

    @auth
        <x-slot name="general1">
            <div class="general1">
                <section class="esta-pagina">
                    <h2>No hace falta que estés aquí...</h2>
                    <p style="margin-bottom: 150px;">Ya tienes una cuenta con sesión iniciada, por lo que no hace falta que recuperes la contraseña. <br> En caso contrario, te recomendamos cerrarla e intertar recuperarla ;&#41;.</p>
                </section>
            </div>
        </x-slot>
    @endauth
</x-layouts.guest>