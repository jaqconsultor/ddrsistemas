<?php if(count(\Cart::getContent()) > 0): ?>
    <?php $__currentLoopData = \Cart::getContent(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li class="list-group-item">
            <div class="row">
                <div class="col-lg-3">
                    <img src="/assets/img/software/<?php echo e(strtolower($item->attributes->image)); ?>.jpg"
                         style="width: 50px; height: 50px;"
                    >
                </div>
                <div class="col-lg-6">
                    <b><?php echo e($item->name); ?></b>
                    <br><small>Cant: <?php echo e($item->quantity); ?></small>
                </div>
                <div class="col-lg-3">
                    <p>Bs<?php echo e(\Cart::get($item->id)->getPriceSum()); ?></p>
                </div>
                <hr>
                </div>
        </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <br>
    <li class="list-group-item">
        <div class="row">
            <div class="col-lg-10">
                <b>Total: </b>Bs<?php echo e(\Cart::getTotal()); ?>

            </div>
            <div class="col-lg-2">
                <form action="<?php echo e(route('cart.clear')); ?>" method="POST">
                    <?php echo e(csrf_field()); ?>

                    <button class="btn btn-secondary btn-sm"><i class="fa fa-trash"></i></button>
                </form>
            </div>
        </div>
    </li>
    <br>
    <div class="row" style="margin: 0px;">
        <a class="btn btn-info btn-sm btn-block" href="<?php echo e(route('cart.index')); ?>">
            CARRITO <i class="fa fa-arrow-right"></i>
        </a>
        <a class="btn btn-info btn-sm btn-block" href="">
            CHECKOUT <i class="fa fa-arrow-right"></i>
        </a>
    </div>
<?php else: ?>
    <li class="list-group-item">Tu carrito esta vacío</li>
<?php endif; ?>
<?php /**PATH C:\DDRSistemasWeb\repo\ddrsistemas\resources\views/layouts/partials/cart-drop.blade.php ENDPATH**/ ?>