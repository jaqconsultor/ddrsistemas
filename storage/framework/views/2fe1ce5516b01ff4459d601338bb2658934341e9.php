<!DOCTYPE html>
<html lang="en">

<?php $__env->startComponent('layouts.components.header'); ?>
<?php echo $__env->renderComponent(); ?>

<body>
    <?php $__env->startComponent('layouts.components.navbar'); ?>
    <?php echo $__env->renderComponent(); ?> 

    <!-- Start Content -->
    <div class="container py-5">
        
        <?php
            use App\Models\Product;
            $products = Product::all();

        ?>        
        <div class="row">
            <h1 class="h1">Productos</h1>

            <div class="col-lg-4">
                
            </div>
            <div class="col-lg-12">
                <div class="row">
                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-4 my-2">
                            <div class="card mb-4 product-wap rounded-0 overflow-y" style="height: 450px;">
                                <div class="card-body">
                                    <form action="<?php echo e(route('cart.store')); ?>" method="POST">
                                         <a href="/detail/<?php echo e($pro->id); ?>" class="text-decoration-none">
                                        <?php echo e(csrf_field()); ?>

                                        <div class="row">                                       
                                            <img class="col-md-6 card-img rounded-0 img-fluid" src="assets/img/software/<?php echo e(strtolower($pro->image_path)); ?>.jpg">                                        
                                            <button class="col-md-6 btn btn-primary btn-sm" style="width: 45px; height: 45px;" class="tooltip-test" title="add to cart">
                                                <i class="fa fa-shopping-cart"> Comprar <br>( <?php echo e($pro->price); ?> USD )</i>
                                            </button>
                                        </div>
                                        
                                        <div class="row">
                                                <span class="text-success h6"><strong><?php echo e($pro->name); ?></strong></span>
                                                <hr style="width: 90%;" />
                                                <span class="pt-0"><strong><?php echo e($pro->slug); ?></strong></span> 
                                                <br> 
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div style="height: 250px; overflow:hidden;" class="overflow-auto text-justify"><?php echo e($pro->description); ?></div>
                                            </div>
                                        </div>
                                         </a>
                                        <input type="hidden" value="<?php echo e($pro->id); ?>" id="id" name="id">
                                        <input type="hidden" value="<?php echo e($pro->name); ?>" id="name" name="name">
                                        <input type="hidden" value="<?php echo e($pro->price); ?>" id="price" name="price">
                                        <input type="hidden" value="<?php echo e($pro->image_path); ?>" id="img" name="img">
                                        <input type="hidden" value="<?php echo e($pro->slug); ?>" id="slug" name="slug">
                                        <input type="hidden" value="1" id="quantity" name="quantity">
                                    </form>
                                </div>
                                
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    
    </div>
    <!-- End Content -->

    <?php $__env->startComponent('layouts.components.footer'); ?>
    <?php echo $__env->renderComponent(); ?>

    
</body>

</html><?php /**PATH C:\DDRSistemasWeb\repo\ddrsistemas\resources\views/products.blade.php ENDPATH**/ ?>