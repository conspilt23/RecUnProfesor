<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.layouts.admin','data' => []] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layouts.admin'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

 <?php $__env->slot('content', null, []); ?>        
        <!-- ======================= Cards ================== -->
        <div class="cardBox">
            <div class="card">
                <div>
                    <div class="numbers">1,504</div>
                    <div class="cardName">Profesores calificados</div>
                </div>

                <div class="iconBx">
                    <ion-icon name="accessibility-outline"></ion-icon>
                </div>
            </div>

            <div class="card">
                <div>
                    <div class="numbers">80</div>
                    <div class="cardName">Reportes</div>
                </div>

                <div class="iconBx">
                    <ion-icon name="flag-outline"></ion-icon>
                </div>
            </div>

            <div class="card">
                <div>
                    <div class="numbers">284</div>
                    <div class="cardName">Opiniones</div>
                </div>

                <div class="iconBx">
                    <ion-icon name="chatbubbles-outline"></ion-icon>
                </div>
            </div>

            <div class="card">
                <div>
                    <div class="numbers">1,222</div>
                    <div class="cardName">Usuarios registrados</div>
                </div>

                <div class="iconBx">
                    <ion-icon name="people-circle-outline"></ion-icon>
                </div>
            </div>
        </div>

        <!-- ================ Order Details List ================= -->
        <div class="details">
            <div class="recentOrders">
                <div class="cardHeader">
                    <h2>Reportes</h2>
                    <a href="#" class="btn">View All</a>
                </div>

                <table>
                    <thead>
                        <tr>
                            <td>Usuario reportado</td>
                            <td>Usuario que reportó</td>
                            <td>Razón</td>
                            <td>Contenido del comentario</td>
                            <td>Profesor que incluye</td>
                            <td>Acción</td>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>Prueba11</td>
                            <td>Conspilt</td>
                            <td>No tiene nada que ver con Profesor o dice información falsa</td>
                            <td>
                                <button><span class="status">Banear usuario reportado</span></button>
                               <button><span class="status">Banear usuario que reportó</span></button> 
                            </td>
                        </tr>

                        <tr>
                            <td>Dell Laptop</td>
                            <td>$110</td>
                            <td>Due</td>
                            <td><span class="status pending">Pending</span></td>
                        </tr>

                        <tr>
                            <td>Apple Watch</td>
                            <td>$1200</td>
                            <td>Paid</td>
                            <td><span class="status return">Return</span></td>
                        </tr>

                        <tr>
                            <td>Addidas Shoes</td>
                            <td>$620</td>
                            <td>Due</td>
                            <td><span class="status inProgress">In Progress</span></td>
                        </tr>

                        <tr>
                            <td>Star Refrigerator</td>
                            <td>$1200</td>
                            <td>Paid</td>
                            <td><span class="status delivered">Delivered</span></td>
                        </tr>

                        <tr>
                            <td>Dell Laptop</td>
                            <td>$110</td>
                            <td>Due</td>
                            <td><span class="status pending">Pending</span></td>
                        </tr>

                        <tr>
                            <td>Apple Watch</td>
                            <td>$1200</td>
                            <td>Paid</td>
                            <td><span class="status return">Return</span></td>
                        </tr>

                        <tr>
                            <td>Addidas Shoes</td>
                            <td>$620</td>
                            <td>Due</td>
                            <td><span class="status inProgress">In Progress</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- ================= New Customers ================ -->
            <div class="recentCustomers">
                <div class="cardHeader">
                    <h2>Usuarios recientes</h2>
                </div>

                <table>
                    <tr>
                        <td width="60px">
                            <div class="imgBx"><img src="assets/imgs/customer02.jpg" alt=""></div>
                        </td>
                        <td>
                            <h4>David <br> <span>Registrado hace x días</span></h4>
                        </td>
                    </tr>

                    <tr>
                        <td width="60px">
                            <div class="imgBx"><img src="assets/imgs/customer01.jpg" alt=""></div>
                        </td>
                        <td>
                            <h4>Amit <br> <span>India</span></h4>
                        </td>
                    </tr>

                    <tr>
                        <td width="60px">
                            <div class="imgBx"><img src="assets/imgs/customer02.jpg" alt=""></div>
                        </td>
                        <td>
                            <h4>David <br> <span>Italy</span></h4>
                        </td>
                    </tr>

                    <tr>
                        <td width="60px">
                            <div class="imgBx"><img src="assets/imgs/customer01.jpg" alt=""></div>
                        </td>
                        <td>
                            <h4>Amit <br> <span>India</span></h4>
                        </td>
                    </tr>

                    <tr>
                        <td width="60px">
                            <div class="imgBx"><img src="assets/imgs/customer02.jpg" alt=""></div>
                        </td>
                        <td>
                            <h4>David <br> <span>Italy</span></h4>
                        </td>
                    </tr>

                    <tr>
                        <td width="60px">
                            <div class="imgBx"><img src="assets/imgs/customer01.jpg" alt=""></div>
                        </td>
                        <td>
                            <h4>Amit <br> <span>India</span></h4>
                        </td>
                    </tr>

                    <tr>
                        <td width="60px">
                            <div class="imgBx"><img src="assets/imgs/customer01.jpg" alt=""></div>
                        </td>
                        <td>
                            <h4>David <br> <span>Italy</span></h4>
                        </td>
                    </tr>

                    <tr>
                        <td width="60px">
                            <div class="imgBx"><img src="assets/imgs/customer02.jpg" alt=""></div>
                        </td>
                        <td>
                            <h4>Amit <br> <span>India</span></h4>
                        </td>
                    </tr>
                </table>
            </div>
        </div>

 <?php $__env->endSlot(); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?><?php /**PATH C:\Users\Harve\OneDrive\Bureau\Recomiendame un Profesor\RecomiendameUnProfesor\resources\views/admin/adm.blade.php ENDPATH**/ ?>