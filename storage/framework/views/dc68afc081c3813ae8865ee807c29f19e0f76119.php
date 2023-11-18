<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <?php $__env->startComponent('layouts.components.header'); ?>
    <?php echo $__env->renderComponent(); ?> 
    <body class="antialiased">
        
        <?php $__env->startComponent('layouts.components.navbar'); ?>
        <?php echo $__env->renderComponent(); ?> 

        <!-- Start Shop -->
        
        <div class="container" style="margin-top: 80px">
            Carrito de Compra
            <?php if(session()->has('success_msg')): ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?php echo e(session()->get('success_msg')); ?>

                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <?php endif; ?>
            <?php if(session()->has('alert_msg')): ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <?php echo e(session()->get('alert_msg')); ?>

                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
            <?php endif; ?>
            <?php if(count($errors) > 0): ?>
                <?php $__currentLoopData = $errors0>all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <?php echo e($error); ?>

                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <br>
                    <?php if(\Cart::getTotalQuantity()>0): ?>
                        <h4><?php echo e(\Cart::getTotalQuantity()); ?> Producto(s) en el carrito</h4><br>
                    <?php else: ?>
                        <h4>No Existen Productos en el Carrito de Compra</h4><br>
                    <?php endif; ?>
                    <br>
                    <?php $__currentLoopData = $cartCollection; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="row">
                            <div class="col-lg-3">
                                <img src="/assets/img/software/<?php echo e(strtolower($item->attributes->image)); ?>.jpg" class="img-thumbnail" width="200" height="200">
                            </div>
                            <div class="col-lg-5">
                                <p>
                                    <b><a href="/shop/<?php echo e($item->attributes->slug); ?>"><?php echo e($item->name); ?></a></b><br>
                                    <b>Precio: </b><?php echo e($item->price); ?> USD / <?php echo e($item->price * 35.5); ?> BS <br>
                                    <b>Sub Total: </b><?php echo e(\Cart::get($item->id)->getPriceSum()); ?> USD / <?php echo e(\Cart::get($item->id)->getPriceSum() * 35.5); ?> BS <br>
                                    
                                </p>
                            </div>
                            <div class="col-lg-4">
                                <div class="row">
                                    <div class="col-md-9 p-0 m-0">
                                        <form action="<?php echo e(route('cart.update')); ?>" method="POST">
                                            <?php echo e(csrf_field()); ?>

                                            <div class="row">
                                                <div class="col-6">
                                                    <input type="hidden" value="<?php echo e($item->id); ?>" id="id" name="id">
                                                    <input type="number" class="form-control" value="<?php echo e($item->quantity); ?>"
                                                    id="quantity" name="quantity" readonly>
                                                </div>
                                                <!-- <div class="col-4">
                                                    <button class="btn btn-secondary"><i class="fa fa-edit"></i></button>
                                                </div> -->
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-md-2">
                                        <form action="<?php echo e(route('cart.remove')); ?>" method="POST">
                                            <?php echo e(csrf_field()); ?>

                                            <input type="hidden" value="<?php echo e($item->id); ?>" id="id" name="id">
                                            <button class="btn btn-dark"><i class="fa fa-trash"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php if(count($cartCollection)>0): ?>
                        <form action="<?php echo e(route('cart.clear')); ?>" method="POST">
                            <?php echo e(csrf_field()); ?>

                            <button class="btn btn-secondary btn-md">Vaciar Carrito</button> 
                        </form>
                    <?php endif; ?>
                </div>

                <?php if(count($cartCollection)>0): ?>
                    <div class="col-lg-5">
                        <div class="card">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><b>Total: </b><?php echo e(\Cart::getTotal()); ?> USD / <?php echo e(\Cart::getTotal() * 35.5); ?> BS </li>
                            </ul>
                        </div>
                        <!-- <br><a href="/products" class="btn btn-dark">Continue en la tienda</a> -->

                        <!-- <a href="https://ddrsistemas.com/pasarela/Index.php" class="btn btn-primary">Proceder a Pagar Completo</a> -->
                        <br><br>
                        <a href="/pagadodecontado/1" class="btn btn-primary">Proceder a Pagar Completo</a>
                        <!-- <a href="https://ddrsistemas.com/pasarela/Index.php" class="btn btn-success">Proceder a Pagar</a> -->
                        <br><br>

                        <form action="/pagadoacredito/1" method="POST">
                            <?php echo e(csrf_field()); ?>

                            <div class="col-6">
                            <select id="cantcuotas" name="cantcuotas" class="form-select">
                                        <option value="1">
                                                    1
                                                </option>
                                                <option value="2">
                                                    2
                                                </option>
                                                <option value="3">
                                                    3
                                                </option>
                                            </select>
                                            <button class="btn btn-secondary btn-md">Pagar Por Cuotas</button> 
                            </div>
                            
                        </form>

                        <!-- <a href="/pagadoacredito/1" class="btn btn-info">Proceder a Pagar Por Cuotas</a>
-->

                    </div>
                <?php endif; ?>
                <br><br>
                <?php if(\Cart::getTotalQuantity()>0): ?>
                        <a href="/products" class="btn btn-dark">Seleccionar más Productos</a>
                    <?php else: ?>
                        <a href="/products" class="btn btn-dark">Seleccione un Producto</a>
                    <?php endif; ?>

            </div>
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
<?php /**PATH C:\DDRSistemasWeb\repo\ddrsistemas\resources\views/cart.blade.php ENDPATH**/ ?>