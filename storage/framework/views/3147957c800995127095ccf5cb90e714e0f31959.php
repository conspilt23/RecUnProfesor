<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.layouts.guest','data' => ['title' => '★ Horarios de reforzamientos de asignaturas de Matemáticas de UNAPEC ★ — Recomiéndame un profesor','h1' => 'Horarios de reforzamientos','pAfterH1' => 'Aquí podrás visualizar las secciones, o bien, horarios disponibles de refuerzos de asignaturas de matemáticas de tu preferencia.']] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layouts.guest'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => '★ Horarios de reforzamientos de asignaturas de Matemáticas de UNAPEC ★ — Recomiéndame un profesor','h1' => 'Horarios de reforzamientos','pAfterH1' => 'Aquí podrás visualizar las secciones, o bien, horarios disponibles de refuerzos de asignaturas de matemáticas de tu preferencia.']); ?>

     <?php $__env->slot('metadesc', null, []); ?> 
        ➫ En esta página, encontrarás todas las secciones relacionadas con reforzamientos de matemáticas. ➤ ➤ ¡No dudes en darte una vuelta, para que puedas ver las secciones de te convengan y mejorar tus habilidades con los números! ;&#x29;
     <?php $__env->endSlot(); ?>

     <?php $__env->slot('otherstyle', null, []); ?> 
        <link rel="stylesheet" href="<?php echo e(asset('css/consejos.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('css/professors_subjects.css')); ?>">
        <style>
            table, th, td{
    border-collapse: collapse;
    padding: 1rem;
    text-align: left;
}

thead, tr {
    border-bottom: 1px solid #cccccc;
}


body.Dark thead, body.Dark tr {
    border-bottom: 1px solid #545454;
}

body.Dark table {
    background-color: #424242;
}

body.Dark thead th {
    background-color: #383838;

}

body.Dark thead th:hover {
    background-color: #575757;

}

thead th {
    position: sticky;
    top: 0;
    left: 0;
    background-color: #f0f0f0fe;
    transition: all .25s ease;
}

thead th:hover {
    background-color: #cececefe;
}

tbody{
    width: 100%;
}

tbody tr {
    font-size: 15px;
    transition: all .25s ease;
}

tbody tr:hover {
    background-color: rgba(202, 202, 202, 0.4) !important;
    box-shadow: 2px 2px 12px rgba(0, 0, 0 .2), -1px -1px 8px rbga(0, 0, 0, .2);
    width: 100%;
    transform: scale(1.01);
}

body.Dark tr:hover{
    background-color: rgba(109, 109, 109, 0.6) !important;}


.table__body {
    width: 95%;
    max-height: calc(89% - 1.6rem);
    background-color: #fff;
    margin: .8rem auto;
    border-radius: .6rem;
    box-shadow: 0px 0px 9px 5px rgb(0 0 0 / 30%);
    overflow: overlay;
}

body.Dark .table__body {
    background-color: #424242;
}

.table__body::-webkit-scrollbar {
    width: 0.43rem;
    height: 0.43rem;
}

.table__body::-webkit-scrollbar-thumb {
    border-radius: .5rem;
    background-color: rgba(10, 10, 10, 0.267);
}
tbody tr td, 
tbody tr td section {
    transition: .2s ease-in-out;
}

table {
    width: 100%;
}

main .general3 {
    display: block !important;
}


@media (max-width: 1000px){
    td:not(:first-of-type){
        min-width: 12.1rem;
    }


}

@media (max-width: 766px){
    .table__header {
        flex-direction: column;
    }
    .table__header .info_teacher {
        margin-bottom: 20px;
    }

    .table__header .search_filter {
        width: 70%;
        align-self: center;
    }

    .table__header .search_filte:hover,
    .table__header .search_filter:has(input:focus) {
        width: 100%;
    }
}
        </style>
     <?php $__env->endSlot(); ?>



     <?php $__env->slot('imgpage', null, []); ?> 
        <?php echo e(asset('img/Maths.svg')); ?>

     <?php $__env->endSlot(); ?>

     <?php $__env->slot('buttons', null, []); ?> 
        <div class="botones">
            <div class="box" style="--Color:#fc6045;">
                <div class="content">
                    <div class="icon"><i class="fa-solid fa-square-root-variable"></i></div>
                    <div class="text">
                        <h3>En este período...</h3>
                        <p>Podrás encontrar diversas secciones de refuerzo de matemáticas de la asignatura con la cual lo necesites o mejor te convenga. De igual forma, podrás ver qué tan bueno es el profesor en cuestión con sólo hacer clic sobre su nombre y ver si es adecuado para ti. ¡Mira las secciones disponibles y mejora tus habilidades matemáticas!</p>
                    </div>
                </div>
            </div>
        </div>
     <?php $__env->endSlot(); ?>

     <?php $__env->slot('general1', null, []); ?> 
        <div class="general1">
            <section class="esta-pagina">
                <h2>Horarios de los reforzamientos de matemáticas</h2>
                <h6>De muchas asignaturas para que mejores</h6>


                <p style="margin-top:23px;">Tienes la opción de explorar las secciones, teniendo en cuenta que no todas las asignaturas de matemáticas tienen horarios de refuerzo disponibles, pero encontrarás una amplia variedad para elegir. Además, Cada sección de refuerzo tiene una duración de 1 hora, lo que te brinda la oportunidad de concentrarte en un tema específico con el docente en cuestión y reforzar tus conocimientos.</p>

                <p  style="margin-top:23px;">Por otro lado, tendrás la oportunidad de ver las opiniones de los profesores que ofrecen estas tutorías (Si tiene alguna), simplemente haciendo clic en sus nombres y descubriendo información relevante sobre ellos que los estudiantes han dejado sobre ellos. ¡No pierdas la oportunidad de fortalecer tus conocimientos matemáticos y alcanzar tus metas académicas!</p>


                <p style="margin-top:23px;">Aquí te presentamos las diferentes asignaturas que se encuentran en tutoría, y demás detalles: </p>
            </section>
        </div>
     <?php $__env->endSlot(); ?>

     <?php $__env->slot('general2', null, []); ?> 
        <div class="general2">
            <section class="Average">
                <h2>Secciones de reforzamientos de las matemáticas básicas</h2>

                <p style="margin-top:23px;">
                  Las matemáticas básicas constituyen un pilar importante en muchas de las carreras de UNAPEC, tanto para conocimiento general, como para entender los conceptos de las demás asignaturas que "liberan" al aprobarla. Por ello, te presentamos los horarios y demás detalles:
                </p>


                <div class="table__body" style="margin-top:23px;">
                <table>
                    <thead>
                        <tr>
                            <th>Docente</th>
                            <th>Día</th>
                            <th>Asignatura (código)</th>
                            <th>Hora</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $basic_maths; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $basic_math): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($basic_math->teacher); ?></td>
                            <td><?php echo e($basic_math->day); ?></td>
                            <td><?php echo e($basic_math->subject); ?></td>
                            <td><?php echo e($basic_math->schedule); ?></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
                </div>

                <h2 style="margin-top:120px;">Secciones de reforzamientos de Matemática Superior (MAT-127)</h2>

                <p style="margin-top:23px;">
                    Sabemos que la asignatura de Matemática Superior para Ingeniería puede representar un desafío para muchos estudiantes debido a los temas complejos que abarca. Es comprensible que algunos alumnos necesiten refuerzo adicional para comprender y dominar estos conceptos.
                    
                </p>

                <p style="margin-top:23px;">Por suerte, existen secciones de refuerzo especialmente diseñadas para esta asignatura. Estas secciones brindan la oportunidad de recibir apoyo adicional y profundizar en los temas clave de Matemática Superior.</p>

                <p style="margin-top:23px;">A continuación, encontrarás los detalles de las secciones de refuerzo disponibles para esta asignatura:</p>


                <div class="table__body" style="margin-top:23px;">
                <table>
                    <thead>
                        <tr>
                            <th>Docente</th>
                            <th>Día</th>
                            <th>Asignatura (código)</th>
                            <th>Hora</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $higher_math; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $high_math): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($high_math->teacher); ?></td>
                            <td><?php echo e($high_math->day); ?></td>
                            <td><?php echo e($high_math->subject); ?></td>
                            <td><?php echo e($high_math->schedule); ?></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
                </div>


                <h2 style="margin-top:120px;">Secciones de reforzamientos de asignaturas de álgebra</h2>

                <p style="margin-top:23px;">
                    El álgebra es una disciplina fundamental en el campo de las matemáticas y puede presentar desafíos para muchos estudiantes. Con el fin de brindar apoyo adicional a aquellos que lo necesiten, se ofrecen secciones de refuerzo para diversas asignaturas de álgebra.

                    
                </p>

                <p style="margin-top:23px;">Estas secciones de refuerzo están diseñadas para ayudar a los estudiantes a dominar los conceptos fundamentales y desarrollar habilidades sólidas en el álgebra. Si te encuentras estudiando asignaturas como Álgebra Universitaria, Álgebra Lineal u otras relacionadas, estas secciones de refuerzo pueden ser de gran utilidad.</p>

                <p style="margin-top:23px;">No te preocupes si encuentras dificultades en el álgebra, ya que estas secciones de refuerzo están destinadas a brindarte el apoyo necesario para superar los obstáculos y fortalecer tus conocimientos en el área.</p>

                <p style="margin-top:23px;">A continuación, encontrarás los detalles de las secciones de refuerzo disponibles para las asignaturas de álgebra:</p>


                <div class="table__body" style="margin-top:23px;">
                <table>
                    <thead>
                        <tr>
                            <th>Docente</th>
                            <th>Día</th>
                            <th>Asignatura (código)</th>
                            <th>Hora</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $college_algebra; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $college_alg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($college_alg->teacher); ?></td>
                            <td><?php echo e($college_alg->day); ?></td>
                            <td><?php echo e($college_alg->subject); ?></td>
                            <td><?php echo e($college_alg->schedule); ?></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php $__currentLoopData = $linear_algebra; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $linear_alg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($linear_alg->teacher); ?></td>
                        <td><?php echo e($linear_alg->day); ?></td>
                        <td><?php echo e($linear_alg->subject); ?></td>
                        <td><?php echo e($linear_alg->schedule); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
                </div>


                <h2 style="margin-top:120px;">Secciones de reforzamientos para asignaturas de cálculo (I Y II)</h2>

                <p style="margin-top:23px;">Sabemos que estas asignaturas pueden resultar difíciles para algunos estudiantes debido a la complejidad de los temas y la cantidad de habilidades requeridas. Para ayudarte a superar los obstáculos y fortalecer tus conocimientos en cálculo, se ofrecen secciones de refuerzo específicas para estas asignaturas.</p>

                <p style="margin-top:23px;">Estas secciones de refuerzo están diseñadas para brindarte apoyo adicional, reforzar los conceptos clave y mejorar tus habilidades en cálculo. Ya sea que estés estudiando Cálculo 1 o Cálculo 2, estas secciones de refuerzo pueden ser de gran utilidad para tu aprendizaje y desarrollo académico.</p>

                <p style="margin-top:23px;">A continuación, encontrarás los detalles de las secciones de refuerzo disponibles para las asignaturas de Cálculo y Geometría Analítica I y II:</p>


                <div class="table__body" style="margin-top:23px;">
                <table>
                    <thead>
                        <tr>
                            <th>Docente</th>
                            <th>Día</th>
                            <th>Asignatura (código)</th>
                            <th>Hora</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $first_calculus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $first_c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($first_c->teacher); ?></td>
                            <td><?php echo e($first_c->day); ?></td>
                            <td><?php echo e($first_c->subject); ?></td>
                            <td><?php echo e($first_c->schedule); ?></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php $__currentLoopData = $second_calculus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $second_c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($second_c->teacher); ?></td>
                        <td><?php echo e($second_c->day); ?></td>
                        <td><?php echo e($second_c->subject); ?></td>
                        <td><?php echo e($second_c->schedule); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
                </div>


                <h2 style="margin-top:120px;">Secciones de reforzamientos de asignaturas relacionadas a finanzas, probabilidades y estadísticas </h2>

                <p style="margin-top:23px;">En el ámbito de las finanzas, las probabilidades y las estadísticas desempeñan un papel crucial. Estas asignaturas pueden presentar un desafío para muchos estudiantes debido a la complejidad de los conceptos y su aplicación en el mundo real. Sin embargo, comprender estos temas es fundamental para el análisis financiero y la toma de decisiones informadas.</p>

                <p style="margin-top:23px;">Para apoyarte en tu aprendizaje y fortalecer tus habilidades en finanzas, probabilidades y estadísticas, se ofrecen secciones de refuerzo diseñadas específicamente para estas asignaturas. Estas secciones de refuerzo te brindan la oportunidad de repasar los conceptos clave, practicar ejercicios y mejorar tu comprensión de los métodos estadísticos y probabilísticos aplicados en el contexto financiero.</p>

                <p style="margin-top:23px;">Si estás estudiando asignaturas relacionadas a finanzas, probabilidades y estadísticas, estas secciones de refuerzo son una excelente herramienta para mejorar tus habilidades y lograr un mejor rendimiento académico. A través de estas secciones, podrás abordar los temas más desafiantes con mayor confianza y desarrollar una base sólida en estos campos.</p>

                <p style="margin-top:23px;">A continuación, encontrarás los detalles de las secciones de refuerzo disponibles para las asignaturas relacionadas a finanzas, probabilidades y estadísticas. Aprovecha esta oportunidad para fortalecer tus conocimientos y alcanzar tus metas académicas en estos campos fundamentales:</p>


                <div class="table__body" style="margin-top:23px;">
                <table>
                    <thead>
                        <tr>
                            <th>Docente</th>
                            <th>Día</th>
                            <th>Asignatura (código)</th>
                            <th>Hora</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $financial_maths_II; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $financial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($financial->teacher); ?></td>
                            <td><?php echo e($financial->day); ?></td>
                            <td><?php echo e($financial->subject); ?></td>
                            <td><?php echo e($financial->schedule); ?></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php $__currentLoopData = $statistics_I; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stac_I): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($stac_I->teacher); ?></td>
                        <td><?php echo e($stac_I->day); ?></td>
                        <td><?php echo e($stac_I->subject); ?></td>
                        <td><?php echo e($stac_I->schedule); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php $__currentLoopData = $statistics_II; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stac_II): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($stac_II->teacher); ?></td>
                    <td><?php echo e($stac_II->day); ?></td>
                    <td><?php echo e($stac_II->subject); ?></td>
                    <td><?php echo e($stac_II->schedule); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php $__currentLoopData = $probability_statistics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prob_stac): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($prob_stac->teacher); ?></td>
                <td><?php echo e($prob_stac->day); ?></td>
                <td><?php echo e($prob_stac->subject); ?></td>
                <td><?php echo e($prob_stac->schedule); ?></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php $__currentLoopData = $probability_statistics_engineering; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prob_stac_eng): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($prob_stac_eng->teacher); ?></td>
            <td><?php echo e($prob_stac_eng->day); ?></td>
            <td><?php echo e($prob_stac_eng->subject); ?></td>
            <td><?php echo e($prob_stac_eng->schedule); ?></td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
                </div>


                <h2 style="margin-top:120px;">Reforzamientos de asignaturas relacionadas a matemática discreta, aplicada y ecuaciones diferenciales</h2>

                <p style="margin-top:23px;">La matemática discreta, la matemática aplicada y las ecuaciones diferenciales son áreas fundamentales en el campo de las matemáticas y su aplicación en diversos campos científicos y tecnológicos. Estas asignaturas pueden plantear desafíos particulares para los estudiantes debido a su enfoque en conceptos y técnicas específicas.
                </p>

                <p style="margin-top:23px;">Para ayudarte a superar estos desafíos y fortalecer tus habilidades en matemática discreta, matemática aplicada y ecuaciones diferenciales, se ofrecen secciones de refuerzo dedicadas a estas asignaturas. Estas secciones de refuerzo están diseñadas para proporcionarte un espacio adicional de aprendizaje y práctica, donde podrás revisar los temas clave, resolver problemas y consolidar tu comprensión de estos campos matemáticos especializados.</p>

                <p style="margin-top:23px;">A continuación, encontrarás los detalles de las secciones de refuerzo disponibles para las asignaturas relacionadas a matemática discreta, matemática aplicada y ecuaciones diferenciales:</p>


                <div class="table__body" style="margin-top:23px;">
                <table>
                    <thead>
                        <tr>
                            <th>Docente</th>
                            <th>Día</th>
                            <th>Asignatura (código)</th>
                            <th>Hora</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $discrete_maths; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $discrete): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($discrete->teacher); ?></td>
                            <td><?php echo e($discrete->day); ?></td>
                            <td><?php echo e($discrete->subject); ?></td>
                            <td><?php echo e($discrete->schedule); ?></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php $__currentLoopData = $applied_maths; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $applied): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($applied->teacher); ?></td>
                        <td><?php echo e($applied->day); ?></td>
                        <td><?php echo e($applied->subject); ?></td>
                        <td><?php echo e($applied->schedule); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php $__currentLoopData = $differential_equations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $differential): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($differential->teacher); ?></td>
                    <td><?php echo e($differential->day); ?></td>
                    <td><?php echo e($differential->subject); ?></td>
                    <td><?php echo e($differential->schedule); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
                </div>
            </div>

            </section>
        </div>
     <?php $__env->endSlot(); ?>

     <?php $__env->slot('general3', null, []); ?> 
        <div class="general3">
            <section class="main-final">
                <h2>¡Te deseamos lo mejor en la asignatura que estés cursando!</h2>

                <p style="margin-top:23px;">En tu camino académico, es normal encontrarse con desafíos y dificultades al enfrentar ciertas asignaturas. Sin embargo, recuerda que tienes a tu disposición recursos y herramientas para superar cualquier obstáculo.</p>

                <p style="margin-top:23px;">Los refuerzos y secciones dedicadas a las asignaturas clave son una oportunidad invaluable para fortalecer tus habilidades, adquirir nuevos conocimientos y alcanzar el éxito en tus estudios. Aprovecha estas oportunidades adicionales de aprendizaje, ya sea a través de profesores especializados, materiales de estudio complementarios o compañeros de clase que pueden brindarte apoyo.</p>

                <p style="margin-top:23px;">Te exhortamos a mantener una mentalidad positiva, también, mantén la motivación y la perseverancia en tu camino hacia el dominio de las asignaturas que estás cursando. Recuerda que cada obstáculo superado es un paso más hacia el logro de tus metas académicas y profesionales.</p>
            </section>
        </div>
     <?php $__env->endSlot(); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH C:\Users\Harve\OneDrive\Bureau\Recomiendame un Profesor\RecomiendameUnProfesor\resources\views/reforzamientos_mates.blade.php ENDPATH**/ ?>