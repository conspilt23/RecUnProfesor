<div class="general4">
    <footer>
        <section class="le-footer">
            <div class="logo2"><img id="logo2" alt=""></div>

        <nav class="nav-footer">
            <div class="terminos-legales">
                <h3>Términos legales</h3>
                <a href="<?php echo e(route('terminos')); ?>">Términos y condiciones</a>
                <a href="<?php echo e(route('privacidad')); ?>">Política de privacidad</a>
                <a href="<?php echo e(route('cookies')); ?>">Política de cookies</a>
            </div>

            <div class="enlaces-internos">
                <h3>Enlaces internos</h3>
                <a  target="_blank" href="https://forms.gle/fcU4RANS38uYkdH88">Contacto</a>
                <a  target="_blank" href="https://forms.gle/Nc2MFoe8MRxPA9FSA">Feedback</a>
                <a  target="_blank" href="https://forms.gle/1EEgYtBKfbMJ5ghQ7">Sugerencias</a>
            </div>

            <div class="enlaces-de-interes">
                <h3>Enlaces de interés</h3> 
                <a href="javascript:void(0)" class="shert" id="show_recent_opinions">Ver opiniones recientes</a>
                <a href="<?php echo e(route('historia')); ?>">Breve historia de UNAPEC</a>
                <a href="<?php echo e(route('calendario')); ?>">Calendario académico</a>
            </div>
        </nav>
    </section>
    <section class="recent_opinions" id="opinions_show">
<div class="teach-container" id="recent-opinions">
    <span class="loader_recent"></span>
</div>
    </section>

        <section class="info-creador">
        <div class="parrafos">
            <p>&copy; Recomiéndame un profesor <?php echo e(now()->year); ?></p>
            <p>Web creada con el <span>&#10084;</span> de un estudiante de Ingeniería de Software | Orgulloso por pertenercer a esta casa de estudios superiores</p>
        </div>
    </section>
        
    </footer>
</div>   

</body>
</html>
<?php /**PATH C:\Users\Harve\Desktop\RecUnProfesor\RecUnProfesor\resources\views/components/layouts/footer.blade.php ENDPATH**/ ?>