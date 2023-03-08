<!DOCTYPE html>
<html lang="es" translate="no">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ $metadesc ?? '✴ Aquí encontrarás ✅lo más importante relacionado a la Universidad APEC.✅ Básicamente, lo que necesites para que te vaya bien ➤ ➤ ¡No dudes en darte una vuelta, para que puedas dar y conocer opiniones de maestros! ;)!'}}">
    <meta name="theme-color" content="#f35337">
    <link rel="shortcut icon" href="{{$theme == 'Dark' ? '/img/RUP-Icono-white.ico' : '/img/RUP Icono.ico'}}" type="image/x-icon" id="icon-page">
    <meta property="og:locale" content="es_DO"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="https://recomiendameunprofesor.com/"/>
    <meta property="og:site_name" content="Recomiéndame un Profesor"/>
    <meta property="og:title" content="{{$title}}"/>
    <meta property="og:description" content="{{ $metadesc ?? '✴ Aquí encontrarás ✅lo más importante relacionado a la Universidad APEC.✅ Básicamente, lo que necesites para que te vaya bien ➤ ➤ ¡No dudes en darte una vuelta, para que puedas dar y conocer opiniones de maestros! ;)!'}}"/>
    <meta property="og:image" content="../Imagenes/Foto2.jpg"/>
    <meta property="og:image:width" content="900"/>
	<meta property="og:image:height" content="432"/>
    <title>{{ $title }}</title>
    {{$otherstyle ?? ''}}
    <style>
      .ads {
    margin-bottom: 10px;
    background:#EEEEED;
    width: max-content;
    height: max-content;
    box-shadow: 0px 7px 30px 3px rgba(0,0,0,0.56);
-webkit-box-shadow: 0px 7px 30px 3px rgba(0,0,0,0.56);
-moz-box-shadow: 0px 7px 30px 3px rgba(0,0,0,0.56);
}

body.Dark .ads {
    background:#373737;
}


      </style>
    <link rel="stylesheet" href="{{ asset('css/RUP.css') }}">
    <link rel="stylesheet" href="{{ asset('css/darkMode.css') }}">
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <link rel='stylesheet' href="{{ asset('css/nprogress.css') }}">
    <link rel="stylesheet" href="{{ asset('css/conditions.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ripples.css') }}">
    <script src="{{ asset('js/nprogress.js') }}"></script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3525189773538188"
    crossorigin="anonymous"></script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3525189773538188"
     crossorigin="anonymous"></script>
    <script src="{{asset ('js/ripples.js')}}" defer></script>
    <script src="{{ asset('js/RUP.js') }}" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/0cc2924b77.js" crossorigin="anonymous"></script> 
    {{$otherjs ?? ''}}
    <script>
var noti_route = "{{ route('notifications.index') }}";
    </script>
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-T8WSX5S');</script>
</head>

<body class="{{$theme}}"> 
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T8WSX5S"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <script>
    </script>
    <x-layouts.conditions />
    <div class="general">
        <div class="circulo"> 
            <div class="undrew">
                <img src="{{ $imgpage ?? URL('img/agree2.svg')}}" alt="">
            </div>  
        </div>
        <header>
        <a href="{{route('inicio')}}"><img class="logo" id="Logo" alt="logo"></a>

<x-layouts.navigation />

<section class="Inhalt">
    <div class="TextInBox">
        <h1>{{ $h1}}</h1>
        <p>{{ $pAfterH1}}</p>
        {{$buttons ?? ''}}
    </div>
</section>
</div>

<main>
    {{$general1 ?? ''}}

    {{$general2 ?? ''}}

    {{$general3 ?? ''}}
</main>
<script type="text/javascript">

NProgress.start();

var interval = setInterval(function() { NProgress.inc(); }, 750);  

window.addEventListener('beforeunload', function(){
    let spinnerUnload = document.querySelector('.lds-parent');
    function fadeInt( elem, ms )
{
  if(!elem)
    return;

  elem.style.opacity = 0;
  elem.style.filter = "alpha(opacity=0)";
  elem.style.display = "inline-block";
  elem.style.visibility = "visible";

  if( ms )
  {
    var opacity = 0;
    var timer = setInterval( function() {
      opacity += 50 / ms;
      if( opacity >= 1 )
      {
        clearInterval(timer);
        opacity = 1;
      }
      elem.style.opacity = opacity;
      elem.style.filter = "alpha(opacity=" + opacity * 100 + ")";
    }, 50 );
  }
  else
  {
    elem.style.opacity = 1;
    elem.style.filter = "alpha(opacity=1)";
  }
}
fadeInt(spinnerUnload, 240);
});


window.addEventListener('unload', function () {
NProgress.start();
});

window.addEventListener('load', function () {
clearInterval(interval);
NProgress.done();
});

</script>

<x-layouts.fondos />
<x-layouts.login />
<x-layouts.passwordrecovery />
<x-layouts.cookiebanner />
<x-layouts.notificationPanel /> 
<x-layouts.footer />