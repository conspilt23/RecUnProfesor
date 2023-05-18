<nav>
    <ul class="le-nav" id="le_nav">
        <li><a href="{{ route('inicio') }}" class="home bo rip_c_smd"><i class="fa-solid fa-house"></i>Inicio</a></li>
        <li><a href="{{ route('calificar') }}" class="Prof bo rip_c_smd"><i class="fa-solid fa-chalkboard-user"></i>Calificar a un profesor</a></li>
        <li><a href="javascript:void(0)" class="submenu sub-1 bo rip_c_smd" id="cuenta"><i class="fa-solid fa-user"></i>Cuenta<i class="fa-solid fa-chevron-down dow-1"></i></a>
        <div class="menu-desplegable" id="MenuDesplegable">
            <ul>
                @guest
                <li class="login1"><a href="javascript:void(0)" class="login rip_c" id="Login">Iniciar sesión</a></li>
                <li class="register"><a href="{{ route('registro') }}" class="register1 rip_c" >Regístrate aquí</a></li>
                @endguest
                @auth
                <li class="login1"><a href="javascript:void(0)" class="login rip_c" id="Account">Mi cuenta</a></li>
                    <li class="register">
                        <form class="prev-form notClose"style="display: inline-block; width: 100%;" action="/logout" method="POST">
                            @csrf
                        <a href="javascript:void(0)" class="register1 rip_c" onclick="this.closest('form').submit();" class="register1 rip_c" >Cerrar sesión</a>
                    </form>
                    </li> 
                @endauth
            </ul>
        </div>
    </li>
    <li><a href="javascript:void(0)" class="submenu sub-2 bo rip_c_smd" id="outil"><i class="fa-solid fa-screwdriver-wrench"></i>Más herramientas<i class="fa-solid fa-chevron-down down-2"></i></a>
        <div class="menu-desplegable-2">
            <ul>
                <li><a href="{{ route('calendario') }}" class="rip_c">Calendario Académico</a></li>
                <li><a href="{{ route('indice') }}" class="rip_c">Calcular índice académico</a></li>
                <li><a href="{{ route('carreras') }}" class="rip_c">Carreras en UNAPEC</a></li>
                <li><a href="{{ route('faq') }}" class="rip_c">Preguntas frecuentes</a></li>
                @if(auth()->check() && auth()->user()->role == 'admin')<li><a href="{{ route('reports') }}" class="rip_c">Ver reportes</a></li>@endif
                <li><a href="{{route('math_reinforcement')}}" class="rip_c">Horario de tutorías de MAT</a></li>
                <li class="consejo"><a href="{{ route('consejos') }}" class="rip_c">Consejos para estudiantes</a></li>
            </ul>
        </div>
    </li>
        <li><button class="boton-dark light-Dark"><span class="ripp"><i class="fa-solid fa-moon famoo"></i></span></button></li>
    </ul>
    <div class="responsive-button-parent">
    <button id="light-Dark" class="responsive-boton-dark light-Dark md-ripples ripples-bg"><span class="ripp"><i class="fa-solid fa-moon famoo"></i></span></button>
</div>
</nav>

    <button class="responsive-nav" effect="ripple" id="responsive_nav">
        <img alt="Icono de la pagina" id="mini-coin">
    </button>
    </header>
    <script src="{{ asset('/js/darkMode.js') }}"></script>