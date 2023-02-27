<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.layouts.guest','data' => ['title' => 'Política de cookies','h1' => 'Política de cookies','pAfterH1' => 'Aquí te señalaremos los puntos esenciales de la política de cookies.']] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layouts.guest'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Política de cookies','h1' => 'Política de cookies','pAfterH1' => 'Aquí te señalaremos los puntos esenciales de la política de cookies.']); ?>

 <?php $__env->slot('imgpage', null, []); ?> 
    <?php echo e(asset('img/cookie.svg')); ?>

 <?php $__env->endSlot(); ?>


 <?php $__env->slot('otherstyle', null, []); ?> 
    <link rel="stylesheet" href="<?php echo e(asset('css/consejos.css')); ?>">
    <style>
        .list-legal {
            margin-top: 35px;
            margin-left: 9px;
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
   <?php $__env->endSlot(); ?>


 <?php $__env->slot('buttons', null, []); ?> 
    <div class="botones">
      <div class="box" style="--Color:#fc6045;">
        <div class="content">
          <div class="icon"><i class="fa-solid fa-cookie"></i></div>
          <div class="text">
            <h3>Política de Cookies del sitio web</h3>
            <p>Si deseas obtener más información acerca del uso de cookies en este sitio web, te invitamos a seguir leyendo. A continuación, te explicaremos en qué consisten las cookies, qué tipo de cookies utilizamos y para qué las usamos.</p>
          </div>
        </div>
      </div>
    </div>
   <?php $__env->endSlot(); ?>

   <?php $__env->slot('general1', null, []); ?> 
    <div class="general1">
        <section class="esta-pagina">
            <h2>¿Qué es una cookie?</h2>
            <h6>La cookie informática</h6>
  
    <p>Las cookies son pequeños archivos que se descargan en tu ordenador cuando accedes a determinadas páginas web o blogs.</p>

    <p>Las cookies permiten a dicha página almacenar y recuperar información sobre tus hábitos de navegación o de tu equipo, y en función de la información que contienen y de cómo uses tu equipo, pueden ser utilizadas para reconocerte.</p>

    <p>Las cookies se almacenan en la memoria del navegador del usuario durante la sesión actual, ocupando un espacio mínimo y sin perjudicar al ordenador. La mayoría de las cookies se borran del disco duro al finalizar la sesión de navegador (conocidas como cookies de sesión).</p>
    
    <p>La mayoría de los navegadores aceptan las cookies como estándar y, independientemente de ellas, permiten o impiden en los ajustes de seguridad las cookies temporales o almacenadas.</p>

    <p>Es importante destacar que las cookies se asocian al navegador, no a la persona, por lo que generalmente no contienen información personal sensible como números de tarjetas de crédito o datos bancarios, fotografías o información personal. En cambio, almacenan datos técnicos, estadísticos, preferencias personales, personalización de contenidos, etc.</p>
    
  </section>
  </div>
   <?php $__env->endSlot(); ?>


   <?php $__env->slot('general2', null, []); ?> 
    <div class="general2">
        <section class="Average">
            <h2>Aceptación de las cookies: normativas vigentes</h2>
            <h6>De las diversas variedades que hay</h6>

            <p style="margin-top: 20px;">Al acceder a este sitio web, y de acuerdo a la normativa vigente en materia de protección de datos, te informamos del uso de cookies, dándote la opción de aceptarlas expresamente y de acceder a más información a través de esta Política de Cookies.</p>

            <p style="margin-top: 20px;">Debes saber que, en el caso de continuar navegando, estarás prestando tu consentimiento para el empleo de estas cookies. Pero, en cualquier momento, podrás cambiar de opinión y bloquear su utilización a través de tu navegador.</p>

            <p style="margin-top: 20px;">Esta Política de Cookies podría modificarse en cualquier momento para adaptarse a novedades normativas o cambios en nuestras actividades, siendo vigente la que en cada momento se encuentre publicada en la web.</p>


        </section>
    </div>
 <?php $__env->endSlot(); ?>


 <?php $__env->slot('general3', null, []); ?> 
    <div class="general3">
        <section class="main-final">
            <h2>Tipos de cookies</h2>
            <h6>Para que sepas de qué va</h6>
            <p>Para poder ofrecerte una mejor experiencia de usuario, obtener datos analíticos, almacenar y recuperar información sobre tus hábitos de navegación o de tu equipo y desarrollar su actividad, este sitio web <strong>https://recomiendameunprofesor.com</strong>, utiliza cookies propias y de terceros.</p>

            <p style="margin-top:40px;">Las cookies que se utilizan en este sitio son:


                <ul class="list-legal">
                    <li><strong>Cookies técnicas:</strong> Son aquellas que permiten al usuario la navegación a través de una página web, plataforma o aplicación y la utilización de las diferentes opciones o servicios que en ella existan como, por ejemplo, controlar el tráfico y la comunicación de datos, identificar la sesión, acceder a partes de acceso restringido, recordar los elementos que integran un pedido, realizar el proceso de compra de un pedido, realizar la solicitud de inscripción o participación en un evento, utilizar elementos de seguridad durante la navegación, almacenar contenidos para la difusión de videos o sonido o compartir contenidos a través de redes sociales.</li>


                    <li><strong>Cookies de personalización:</strong> Son aquellas que permiten al usuario acceder al servicio con algunas características de carácter general predefinidas en función de una serie de criterios en el terminal del usuario como por ejemplo serian el idioma, el tipo de navegador a través del cual accede al servicio, la configuración regional desde donde accede al servicio, etc.</li>

                    <li><strong>Cookies de análisis:</strong> Son aquellas que bien tratadas por nosotros o por terceros, nos permiten cuantificar el número de usuarios y así realizar la medición y análisis estadístico de la utilización que hacen los usuarios del servicio ofertado. Para ello se analiza tu navegación en nuestra página web con el fin de mejorar la oferta de productos o servicios que le ofrecemos.</li>

                    <li><strong>Cookies publicitarias:</strong> Son aquellas que, bien tratadas por nosotros o por terceros, nos permiten gestionar de la forma más eficaz posible la oferta de los espacios publicitarios que hay en la página web, adecuando el contenido del anuncio al contenido del servicio solicitado o al uso que realice de nuestra página web. Para ello podemos analizar tus hábitos de navegación en Internet y podemos mostrarte publicidad relacionada con tu perfil de navegación.</li>

                    <li><strong>Cookies de publicidad comportamental:</strong> Son aquellas que permiten la gestión, de la forma más eficaz posible, de los espacios publicitarios que, en su caso, el editor haya incluido en una página web, aplicación o plataforma desde la que presta el servicio solicitado. Estas cookies almacenan información del comportamiento de los usuarios obtenida a través de la observación continuada de sus hábitos de navegación, lo que permite desarrollar un perfil específico para mostrar publicidad en función del mismo.</li>

                    <li><strong>Cookies de terceros:</strong> Esta web <strong>https://recomiendameunprofesor.com</strong> puede utilizar servicios de terceros que, por cuenta de Google, recopilarán información con fines estadísticos, de uso del sitio por parte del usuario y para la prestación de otros servicios relacionados con la actividad del sitio web y otros servicios de Internet.</li>
                </ul>
            </p>

            <p style="margin-top: 40px;">En particular, este sitio web utiliza <strong>Google Analytics</strong>, un servicio analítico de web prestado por <strong>Google, Inc</strong>. Con domicilio en los Estados Unidos con sede central en 1600 Amphitheatre Parkway, Mountain View, California 94043. Para la prestación de estos servicios, Google utiliza cookies que recopilan la información, incluida la dirección IP del usuario, que será transmitida, tratada y almacenada por Google en los términos fijados en la web Google.com. Esto incluye la posible transmisión de dicha información a terceros por razones de exigencia legal o cuando dichos terceros procesen la información por cuenta de Google.</p>


            <p style="margin-top: 40px;">En cualquier momento, puedes adaptar la configuración del navegador para gestionar, desestimar el uso de cookies y ser notificado antes de que se descarguen. También puedes adaptar la configuración de forma que el navegador rechace todas las cookies, o únicamente las cookies de terceros. Y también puedes eliminar cualquiera de las cookies que ya se encuentren en tu equipo.</p>
                
              <p style="margin-top: 40px;"> Para esto, debes tener en cuenta que tendrás que adaptar por separado la configuración de cada navegador y equipo que utilices ya que, como te hemos comentado anteriormente las cookies se asocian al navegador, no a la persona.</p> 
            
              <p style="margin-top: 40px;">
            <ul class="list-legal">

                <li>Google Chrome: <a target="_blank" href="https://support.google.com/chrome/answer/95647?hl=es-419">Ir a la página</a></li>
                <li> Internet Explorer: <a target="_blank" href="https://support.microsoft.com/es-es/help/17442/windows-internet-explorer-delete-manage-cookies#ie=ie-10">Ir a la página</a></li>

                    <li>
                        Mozilla Firefox: <a target="_blank" href="https://support.mozilla.org/es/kb/habilitar-y-deshabilitar-cookies-sitios-web-rastrear-preferencias?redirectlocale=es&redirectslug=habilitar-y-deshabilitar-cookies-que-los-sitios-we">Ir a la página</a>
                    </li>

                    <li> Apple Safari: <a target="_blank" href="https://support.apple.com/es-es/HT201265">Ir a la página</a></li>
            </ul></p>

            <p style="margin-top: 40px;">Si tienes cualquier duda sobre esta Política de Cookies, puedes contactar con nosotros a través del enlace de contacto que encontrarás en el pie de la página.</p>


        </section>
    </div>
 <?php $__env->endSlot(); ?>


 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?><?php /**PATH C:\Users\Harve\OneDrive\Bureau\Recomiendame un Profesor\RecomiendameUnProfesor\resources\views/cookies.blade.php ENDPATH**/ ?>