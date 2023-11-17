<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <?php $__env->startComponent('layouts.components.header'); ?>
    <?php echo $__env->renderComponent(); ?>
    <body class="antialiased">
        
        <?php $__env->startComponent('layouts.components.navbar'); ?>
        <?php echo $__env->renderComponent(); ?> 
        <div class="container">
            <h1 class="h1">Recursos - Manuales & DEMOS</h1>
                <br>
                <?php
                    use App\Models\Product;
                    $products = Product::all();
                ?>        

           <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                                        
            <div class="row">
                    <strong>Recursos de <?php echo e($pro->name); ?></strong>
                    <a href="/assets/pdf/<?php echo e($pro->name); ?>.pdf" target="blank"><span class="text-info h6">Manual de <strong><?php echo e($pro->name); ?></strong></span></a>
                   <!-- <a href="<?php echo e($pro->name); ?>.msi"><span class="text-info h6">DEMO para Windows</strong></span></a>-->
                    <br><br><br>
            </div>

           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
                      

             <br><br>

</div>

        <?php $__env->startComponent('layouts.components.footer'); ?>
        <?php echo $__env->renderComponent(); ?>

        <!-- Start Script -->
        <script src="assets/js/jquery-1.11.0.min.js"></script>
        <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/templatemo.js"></script>
        <script src="assets/js/custom.js"></script>
        <!-- End Script -->
    </body>
</html>
<?php /**PATH C:\DDRSistemasWeb\repo\ddrsistemas\resources\views/recursos.blade.php ENDPATH**/ ?>