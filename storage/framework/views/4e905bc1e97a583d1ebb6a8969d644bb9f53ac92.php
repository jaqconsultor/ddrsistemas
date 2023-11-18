<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<?php $__env->startComponent('layouts.components.header'); ?>
<?php echo $__env->renderComponent(); ?>

<body class="antialiased">

    <?php $__env->startComponent('layouts.components.navbar'); ?>
    <?php echo $__env->renderComponent(); ?>
    <div class="container">
        <h1 class="h1">PAGOS</h1>
        <br>
        <?php
                    use App\Models\Transacciones;
                    $products = Transacciones::where('id_user', auth()->user()->id)->get();
                ?>

        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <div class="row">
            <strong>Formulario <?php echo e($pro->id); ?></strong>
            <?php echo e($pro->fe_registro); ?><br>
            <?php echo e($pro->ti_registro); ?><br>
            <?php echo e($pro->tipo_facccionado); ?><br>
            <?php echo e($pro->name_user); ?><br>
            <?php echo e($pro->id_user); ?><br>
            <?php echo e($pro->identificationNac); ?><br>
            <?php echo e($pro->identificationNumber); ?><br>
            <?php echo e($pro->cellphone); ?><br>
            <?php echo e($pro->email); ?><br>
            <?php echo e($pro->reference_t); ?><br>
            <?php echo e($pro->cantidad); ?><br>
            <?php echo e($pro->totalusd); ?><br>
            <?php echo e($pro->totalbs); ?><br>
            <?php echo e($pro->tasa); ?><br>
            <?php echo e($pro->cantcuotas); ?><br>
            <?php echo e($pro->amount); ?><br>
            <?php echo e($pro->title); ?><br>
            <?php echo e($pro->description_t); ?><br>
            <?php echo e($pro->id_transaccion); ?><br>
            <?php echo e($pro->usercreated_at); ?><br>
            <?php echo e($pro->userupdated_at); ?><br>
            <?php echo e($pro->created_at); ?><br>
            <?php echo e($pro->updated_at); ?><br>
            <?php echo e($pro->status); ?><br>
            <hr>
            <br><br>
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

</html><?php /**PATH C:\DDRSistemasWeb\repo\ddrsistemas\resources\views/pagos.blade.php ENDPATH**/ ?>