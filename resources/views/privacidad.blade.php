<x-layouts.guest
    title="Política de privacidad"
    h1="Política de privacidad"
    pAfterH1="Aquí te señalaremos los puntos esenciales de la política de privacidad."
>

<x-slot name="imgpage">
    {{asset('img/privacidad.svg')}}
</x-slot>


<x-slot name="otherstyle">
    <link rel="stylesheet" href="{{asset('css/consejos.css')}}">
    <style>
        .list-legal {
            margin-top: 35px;
            margin-left: 25px;
            line-height: 28px;
        }

        .list-legal li {
            margin-bottom: 27px;
            text-align: left;
        }

        .list-legal li a {
            text-decoration: none;
            color: rgb(0, 166, 255);
        }


    </style>
  </x-slot>


<x-slot name="buttons">
    <div class="botones">
      <div class="box" style="--Color:#fc6045;">
        <div class="content">
          <div class="icon"><i class="fa-solid fa-lock"></i></div>
          <div class="text">
            <h3>Política de privacidad del sitio web</h3>
            <p>Si estás aquí es porque quieres saber más sobre las obligaciones y derechos que te corresponden como usuario de esta web, y eso está muy bien. Nuestro deber es informarte y el tuyo estar debidamente informado.</p>
          </div>
        </div>
      </div>
    </div>
  </x-slot>

  <x-slot name="general1">
    <div class="general1">
        <section class="esta-pagina">
            <h2>Políticas de privacidad de este sitio web</h2>
            <h6>¡Para que te sientas seguro!</h6>
  
    <p>En esta Política de Privacidad te informaremos con total transparencia sobre la finalidad de este sitio web y todo lo que afecta a los datos que nos facilites, así como de las obligaciones y derechos que te corresponden. Ten en cuenta que esta política se basa en la <strong>Ley No. 172-13, sobre protección de datos personales</strong> para ciertos aspectos.</p>

    <p>Debes saber, para tu tranquilidad, que siempre te solicitaremos tu consentimiento expreso para recabar tus datos con la correspondiente finalidad especificada en cada caso, lo que implica que, en caso de otorgar ese consentimiento, has leído y aceptado esta Política de Privacidad.</p>

    <p>Esta declaración de privacidad se refiere a cómo manejamos la información que se nos proporciona al registrarse en nuestra aplicación web.</p>
    
    <p>Es importante tener en cuenta que esta política de privacidad no se aplica a la información que es recolectada por terceros a través de servicios como Google Adsense y Google Analytics, que están integrados en el código de nuestro sitio web.</p>
    
  </section>
  </div>
  </x-slot>


  <x-slot name="general2">
    <div class="general2">
        <section class="Average">
            <h2>Información que recolecta el sitio web</h2>
            

            <p style="margin-top: 20px;">Recomiéndame un Profesor recopila cierta información cuando te registras en la aplicación web y cuando compartes una opinión sobre un maestro. Al registrarte, se te pide que completes un formulario que solicita tu nombre de usuario, dirección de correo electrónico y una contraseña, la cual se encripta mediante complejos sistemas para que nadie sepa cuál es, a tal punto que ni siquiera los desarrolladores del sitio pueden decodificar las contraseñas. También se solicita información estadística, como tu carrera, que a la vez te pueden ayudar  a agilizar el proceso para calcular tu índice y alguna que otra herramienta. Por último, obtiene tu dirección IP o proxy de tu dispositivo para determinar tu ubicación geográfica. </p>

            <p style="margin-top: 20px;"> Cuando compartes una opinión sobre un maestro, se recopila tu nombre de usuario para identificar quién escribió la opinión, el período académico para proporcionar contexto, y detalles específicos sobre la opinión, como la estructura de la opinión y el cuerpo del mensaje. También se obtiene tu dirección IP para determinar tu ubicación geográfica.</p>
                
            <p style="margin-top: 20px;">Es importante destacar que Recomiéndame un Profesor no compartirá tu nombre de usuario, opinión específica, período académico, fecha de envío u otra información personal con terceros. Sin embargo, la dirección IP y otros datos no identificativos pueden ser utilizados para fines estadísticos y de mejora del servicio.
            </p>


        </section>
    </div>
</x-slot>


<x-slot name="general3">
    <div class="general3">
        <section class="main-final">
            <h2>Otros detalles a tomar en cuenta</h2>
            <h6>Para que no se te escape nada</h6>
            <p>Recomiéndame un Profesor utiliza cookies para recopilar información sobre las páginas visitadas y brindar un mejor servicio web personalizado. El sitio web también contiene enlaces a terceros, por lo que no somos responsables de la privacidad y protección de los datos en esos sitios. Si quieres más detalles sobre el uso de cookies, puedes ir a la sección de políticas de cookies.</p>

            <p style="margin-top:40px;">Recomiéndame un Profesor no compartirá tu información a menos que sea requerido por el poder estatal correspondiente, y en ese caso se comprometen a notificarte. Además, no somos responsables de la información personal o sensible que decidas publicar en la aplicación, ya que es tu responsabilidad. Sin embargo, la aplicación se actualiza constantemente para evitar que la información personal se haga pública y para mantener el anonimato.</p>

        </section>
    </div>
</x-slot>


</x-layouts.guest>