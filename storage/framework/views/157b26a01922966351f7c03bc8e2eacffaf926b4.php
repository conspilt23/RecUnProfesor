<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.layouts.guest','data' => ['title' => 'Términos de uso','h1' => 'Términos de uso','pAfterH1' => 'Aquí te señalaremos los puntos de los términos y condiciones de uso de esta aplicación web.']] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layouts.guest'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Términos de uso','h1' => 'Términos de uso','pAfterH1' => 'Aquí te señalaremos los puntos de los términos y condiciones de uso de esta aplicación web.']); ?>

 <?php $__env->slot('imgpage', null, []); ?> 
    <?php echo e(asset('img/terminos.svg')); ?>

 <?php $__env->endSlot(); ?>


 <?php $__env->slot('otherstyle', null, []); ?> 
    <link rel="stylesheet" href="<?php echo e(asset('css/consejos.css')); ?>">
    <style>
        .list-legal {
            margin-top: 35px;
            margin-left: 25px;
            line-height: 28px;
        }

        .list-legal li {
            margin-bottom: 20px;
        }


    </style>
   <?php $__env->endSlot(); ?>


 <?php $__env->slot('buttons', null, []); ?> 
    <div class="botones">
      <div class="box" style="--Color:#fc6045;">
        <div class="content">
          <div class="icon"><i class="fa-solid fa-gavel"></i></div>
          <div class="text">
            <h3>Términos y condiciones</h3>
            <p>Estos términos y condiciones de uso indican las responsabilidades tanto de los usuarios como del proprietario del sitio web para que sea un lugar agradable en donde se puedan usar herramientas que faciliten la vida de los estudiantes universitarios en la Universidad APEC</p>
          </div>
        </div>
      </div>
    </div>
   <?php $__env->endSlot(); ?>

   <?php $__env->slot('general1', null, []); ?> 
    <div class="general1">
        <section class="esta-pagina">
            <h2>Términos y condiciones del sitio web</h2>
            <h6>Para que todo esté en orden</h6>
  
    <p>Estos términos y condiciones tiene el objetivo de informarte de tus derechos y obligaciones como usuario de este sitio web. Aquí encontrarás toda la información que necesitas sobre este sitio web, su actividad, los datos personales que recaba y su finalidad, así como las normas de uso que regulan el uso de esta web.</p>

    <p> En el momento en que accedas a este sitio web <strong>https://recomiendameunprofesor.com</strong>, asumes la condición de usuario, por lo que el contenido de estos términos y condiciones te afecta directamente. Por eso, es importante que lo leas para disipar cualquier duda que puedas tener y tener conocimiento de causa sobre las condiciones que estás aceptando.  </p>
    
    
  </section>
  </div>
   <?php $__env->endSlot(); ?>


   <?php $__env->slot('general2', null, []); ?> 
    <div class="general2">
        <section class="Average">
            <h2>Normativas del sitio web</h2>
            <h6>Deben ser respetadas</h6>

            <p>Recomiéndame un Profesor (en adelante: "El Sitio") es una aplicación web creada por estudiantes de la Universidad APEC, los cuales no tienen ningún tipo de alianza con dicha institución. El objetivo del sitio es ofrecer a los estudianes de la Universidad APEC diversas herramientas para que puedan tener una vida estudiantil más cómoda, ya sea con los comentarios sobre los diferentes docentes, cálculo de índice académico, y demás.</p>

    <p>No obstante, se debe tener en cuenta los siguientes puntos:
        <ul class="list-legal">
            <li><strong>Sobre el objetivo.</strong> El Sitio tiene como objetivo ofrecer a los estudiantes de la Universidad APEC un espacio en línea para evaluar y compartir sus opiniones sobre los profesores que cursan sus períodos cuatrimestrales. De igual forma, diversas herramientas que pueden servir de apoyo durante el tiempo que estarán en esta casa de estudio.</li>

            <li><strong>Sobre las opiniones.</strong> Las opiniones expresadas por los usuarios son de su exclusiva responsabilidad y no reflejan necesariamente la opinión de los propietarios del Sitio. Los propietarios del Sitio no se hacen responsables de ninguna mala reputación u opinión inadecuada que pueda dar el usuario, pero se reservan el derecho de eliminar cualquier comentario que incumpla con las normas establecidas sin previo aviso.</li>

            <li><strong>Sobre las normas de opiniones y respuestas.</strong> Los usuarios del Sitio deben abstenerse de utilizar la plataforma para escribir obsenidades o comentarios ofensivos sobre cualquier docente. Los propietarios del Sitio se reservan el derecho de eliminar cualquier comentario que contenga lenguaje ofensivo o que incumpla con las normas establecidas. En caso de que un usuario incumpla con esta norma de manera reiterada, el propietario del Sitio se reserva el derecho de cancelar su cuenta.</li>

            <li><strong>Sobre violación a la ley.</strong> Si algún usuario infringe la ley o si se presenta una situación de emergencia o peligro para la seguridad pública, los propietarios del Sitio se verán forzados a ofrecer la dirección IP del dispositivo o proxy a las autoridades competentes para cumplir con la ley.</li>

            <li><strong>Sobre el control de opiniones y respuestas.</strong> El usuario reconoce y acepta que el Sitio no tiene control total sobre la calidad, precisión, veracidad o legalidad de los comentarios publicados por otros usuarios.</li>

            <li><strong>Sobre la responsabilidad.</strong> Los propietarios del Sitio no serán responsables por ningún daño o perjuicio, directo o indirecto, que pudiera derivarse del uso del Sitio o de la información contenida en él.</li>
        </ul>
    </p>

    <p>Se debe tener en cuenta que, lo que se realice con una cuenta registrada en el Sitio, queda a responsabilidad del proprietario o titular de la cuenta. Por lo que si decides registrarte en el Sitio, aceptas que serás el responsable de cualquier acción que se haga con la cuenta registrada. Por ello, te recomendamos mantener datos privados o sensibles privados, ya sean propios o de terceros.</p>


        </section>
    </div>
 <?php $__env->endSlot(); ?>


 <?php $__env->slot('general3', null, []); ?> 
    <div class="general3">
        <section class="main-final">
            <h2>Sobre las opiniones y respuestas</h2>
            <h6>Para que sepas de qué va</h6>
            <p>Las opiniones y respuestas de los usuarios registrados serán 100% hechas por personas, pero como indicamos, no tenemos el control de saber cuán cierto es, ya que depende de la experiencia de cada persona con el profesor en cuestión.</p>

            <p style="margin-top:40px;">No obstante, al utilizar El Sitio, aceptas que cualquier opinión que compartas será objetiva y sin prejuicios, y se limitará exclusivamente a tu experiencia académica relacionada con el profesor en cuestión dentro de la Universidad APEC. Además, comprendes que las opiniones que no cumplan con estas pautas podrán ser eliminadas sin previo aviso.</p>

            <p style="margin-top:40px;">Al utilizar El Sitio, te comprometes a cumplir con los siguientes postulados:


                <ul class="list-legal">
                    <li><strong>Acerca del acoso y hostigamiento:</strong> Aceptas no escribir testimonios falsos o hacer comentarios negativos solo para difamar a un profesor. Cualquier participación en hostigamiento, acoso, amenazas, acecho, publicidad no solicitada (spam) o vandalismo podría resultar en la expulsión permanente del sitio web.</li>
                    <li><strong>Acerca de las declaraciones falsas, suplantaciones o fraude:</strong> Comprendes que publicar de manera intencional o con conocimiento contenido que sea difamatorio, contenga injurias o calumnias, sea falso o inexacto, intentar usurpar la identidad de otro usuario o persona, o utilizar el nombre de usuario de otro usuario con el propósito de engañar, y realizar o participar en actividades fraudulentas conllevará a la expulsión permanente del sitio web.</li>
                    <li><strong>Acerca de utilizar nuestros servicios de manera indebida:</strong> Entiendes que la pornografía infantil, el relato de encuentros sexuales, contenido relacionado con armas de fuego o drogas ilícitas son inapropiados y no están permitidos en el sitio web. Cualquier publicación de este tipo será motivo de expulsión permanente. </li>
                </ul>
            </p>

            <p>Por favor, ten en cuenta que estas normas están regidas por la <strong>Ley No. 53-07 sobre Crímenes y Delitos de Alta Tecnología</strong>. Nos reservamos el derecho de cambiar estos términos y condiciones en cualquier momento. Te recomendamos que revises periódicamente estos términos para estar al tanto de las actualizaciones.</p>

            <p style="margin-top: 40px;">Última fecha de modificación: a los veintisiete días (27) del mes dos (2) del año dos mil veintitrés(2023).</p>
        </section>
    </div>
 <?php $__env->endSlot(); ?>


 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?><?php /**PATH C:\Users\Harve\OneDrive\Bureau\Recomiendame un Profesor\RecomiendameUnProfesor\resources\views/terminos.blade.php ENDPATH**/ ?>