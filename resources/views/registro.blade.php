<x-layouts.guest 
title="▷ Regístrate en nuestra plataforma — Recomiéndame un profesor" 
h1="Regístrate fácilmente"
    pAfterH1="Con sólo unos cuantos pasos, podrás tener tu cuenta en nuestro sitio web, con el fin de que puedas dar tu opinión sobre los docentes con los que has cursado, al igual que más facilidades a la hora de buscar tus recomendaciones, ya sean individuales o cuatrimestrales.">


    <x-slot name="metadesc">
        ➫ En esta página, podrás registrarte y disfrutar de diversos beneficios como estudiante de la Universidad APEC. ➤ ➤ ✅¡Siéntete cómodo y regístrate para dar tus opiniones sobre profesores con los que has cursado!✅ ;&#x29;
      </x-slot>

    <x-slot name="otherstyle">
        <link rel="stylesheet" href="{{ asset('css/rg.css') }}">
        <link rel="stylesheet" href="{{ asset('css/consejos.css') }}">
    </x-slot>

    <x-slot name="otherjs">
        <script src="{{ asset('js/rg.js') }}" defer></script>

        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        
    </x-slot>

    <x-slot name="imgpage">
        {{ URL('img/registro.svg') }}
    </x-slot>

    @guest

        <x-slot name="buttons">
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
          </x-slot>
        <x-slot name="general1">
            <div class="general1">
                <div class="container">
                    <div class="title">Regístrate</div>

                    <form class="prev-form" action="/registro" method="POST" id="formulario">
                        @csrf
                        <div class="user-details">
                            <div class="input-box">
                                <i class="fa-regular fa-user izq"></i>
                                <input type="text" class="{{$errors->has('registration_username') ? 'error-input' : ''}}" name="registration_username" id="rg_username" placeholder=" "
                                    value="{{ old('registration_username') }}" maxlength="16" required>
                                <span class="details">Usuario</span>
                                <i class="fa-solid fa-circle-info der info_user"></i>
                                @error('registration_username')
                                    <p class="err-m" >{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="input-box">
                                <i class="fa-regular fa-envelope izq"></i>
                                <input type="email" class="{{$errors->has('registration_email') ? 'error-input' : ''}}" name="registration_email" id="rg_email" placeholder=" "
                                    value="{{ old('registration_email') }}" required>
                                <span class="details">Correo</span>
                                @error('registration_email')
                                    <p class="err-m" >{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="input-box">
                                <i class="fa-solid fa-lock izq"></i>
                                <input type="password" class="pas1 {{$errors->has('registration_password') ? 'error-input' : ''}}" name="registration_password" id="rg_password1"
                                    placeholder=" " value="{{ old('registration_password') }}" required>
                                <span class="details">Contraseña</span>
                                <i class="fa-regular fa-eye-slash der contra1"></i>
                                @error('registration_password')
                                    <p class="err-m" >{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="input-box">
                                <i class="fa-solid fa-lock izq"></i>
                                <input type="password" class="pas2 {{$errors->has('password_confirmation') ? 'error-input' : ''}}" name="password_confirmation" id="rg_password2"
                                    placeholder=" " value="{{ old('password_confirmation') }}" required>
                                <span class="details">Repite la contraseña</span>
                                <i class="fa-regular fa-eye-slash der contra2"></i>
                                @error('password_confirmation')
                                    <p class="err-m">{{ $message }}</p>
                                @enderror
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
                        @error('career')
                            <p class="err-m">{{ $message }}</p>
                        @enderror
                        <span class="tool tool-info-career">Te solicitamos la carrera que estudias tanto para datos
                            estadísticos, como para tomarlo en cuenta en las diversas herramientas que tenemos preparadas para ti.</span>

                        <div class="option">
                            @foreach ($careers as $career)
                                <div class="career" effect="ripple">
                                    <i class="fa-solid {{ $career->icon_class }}"></i><span class="car">{{ $career->name }}</span>
                                </div>
                            @endforeach
                        </div>

                        
                        <div style="margin: 40px 0; overflow-x: auto; overflow-y: hidden;">
                            <div class="g-recaptcha" data-sitekey="6LdP7ZIkAAAAANKq9Lwf1h883Kz0pOwrX9D-MvcX"></div>
                            @error('g-recaptcha-response')
                            <p class="err-m">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="button-check">
                            <input type="checkbox" id="confirm" required>
                            <label for="confirm">Acepto los <a href="{{route('terminos')}}">términos y condiciones</a> de Recomiéndame Un
                                Profesor, al igual que su <a href="{{route('privacidad')}}">política de privacidad.</a></label>
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
        </x-slot>
    @endguest

    @auth
        <x-slot name="general1">
            <div class="general1">
                <section class="esta-pagina">
                    <h2>No hace falta que estés aquí...</h2>
                    <p style="margin-bottom: 150px;">Ya tienes una cuenta con sesión iniciada. <br> Te recomendamos volver
                        al menú de inicio, o bien usar las herramientas que ya tenemos preparadas para ti ;&#41; .</p>
                </section>
            </div>
        </x-slot>
    @endauth
</x-layouts.guest>
