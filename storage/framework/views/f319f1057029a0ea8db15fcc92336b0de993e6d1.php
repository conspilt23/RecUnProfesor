<?php if($paginator->hasPages()): ?>
<button id="pa" style="display: none;" class="md-ripples ripples-bg-immer-weiss">Mostrar paginación</button>
  <div id="background-pagination">
  </div>
  <div id="pagination">
    <nav>
        <ul class="page">
            
            <?php if($paginator->onFirstPage()): ?>
                <li class="disabled page__btn" aria-disabled="true" aria-label="<?php echo app('translator')->get('pagination.previous'); ?>">
                    <span aria-hidden="true"><i class="fa-solid fa-angles-left"></i></span>
                </li>
            <?php else: ?>
                <li class="page__btn">
                    <a href="<?php echo e($paginator->previousPageUrl()); ?>" rel="prev" aria-label="<?php echo app('translator')->get('pagination.previous'); ?>"><i class="fa-solid fa-angles-left"></i></a>
                </li>
            <?php endif; ?>

            
            <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                <?php if(is_string($element)): ?>
                    <li class="disabled page__dots" aria-disabled="true"><span><?php echo e($element); ?></span></li>
                <?php endif; ?>

                
                <?php if(is_array($element)): ?>
                    <?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($page == $paginator->currentPage()): ?>
                            <li class="page__numbers active" aria-current="page"><span><?php echo e($page); ?></span></li>
                        <?php else: ?>
                            <li class="page__numbers"><a href="<?php echo e($url); ?>"><?php echo e($page); ?></a></li>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            
            <?php if($paginator->hasMorePages()): ?>
                <li class="page__btn">
                    <a href="<?php echo e($paginator->nextPageUrl()); ?>" rel="next" aria-label="<?php echo app('translator')->get('pagination.next'); ?>"><i class="fa-solid fa-angles-right"></i></a>
                </li>
            <?php else: ?>
                <li class="page__btn disabled" aria-disabled="true" aria-label="<?php echo app('translator')->get('pagination.next'); ?>">
                    <span aria-hidden="true"><i class="fa-solid fa-angles-right"></i></span>
                </li>
            <?php endif; ?>
        </ul>
    </nav>
</div>
<?php endif; ?>
<?php /**PATH C:\Users\Harve\Desktop\RecUnProfesor\RecUnProfesor\resources\views/vendor/pagination/default.blade.php ENDPATH**/ ?>