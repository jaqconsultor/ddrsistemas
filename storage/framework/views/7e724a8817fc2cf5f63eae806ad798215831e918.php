<!DOCTYPE html>
<html lang="en">

<?php $__env->startComponent('layouts.components.header'); ?>
<?php echo $__env->renderComponent(); ?>

<body>
    <?php $__env->startComponent('layouts.components.navbar'); ?>
    <?php echo $__env->renderComponent(); ?> 

      <div class="container py-5">
    	<div class="card">
    		<form action="<?php echo e(route('cart.store')); ?>" method="POST">
                                        <?php echo e(csrf_field()); ?>

    		<div class="card-header">
    			<div class="row">
    				<div class="col-lg-4">
    					
    					<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
						  <div class="carousel-inner">
						    <div class="carousel-item active">
						      <img src="/assets/img/software/<?php echo e(strtolower($product->image_path)); ?>1.jpg" class="w-100" alt="...">
						    </div>
						    <div class="carousel-item">
						      <img src="/assets/img/software/<?php echo e(strtolower($product->image_path)); ?>2.jpg" class="w-100" alt="...">
						    </div>
						    <div class="carousel-item">
						      <img src="/assets/img/software/<?php echo e(strtolower($product->image_path)); ?>3.jpg" class="w-100" alt="...">
						    </div>
						  </div>
						</div>
    				</div>
    				<div class="col-lg-8">
    					<div class="row">
    						<div class="col">
    							
    					 		<span class="h1 text-success text fw-bold"><?php echo e($product->name); ?></span>	
    						</div>
    						<div class="col">
    							<img class="col-md-6 card-img rounded-0 img-fluid" src="/assets/img/software/<?php echo e(strtolower($product->image_path)); ?>.jpg">
    						</div>
    						

    					</div>
    					<div class="row">
    					  <span class="h4 mx-3"><?php echo e($product->price); ?> Bs.</span>
    						
    					</div>
    					 
                        <div class="row">
                        	<p class="h4 fw-bold">Descripci&oacute;n</p>
                        	
                         <p class="text-justify " style="font-size: 8px;"><?php echo e($product->description); ?></p>	
                        </div>
    					<button class="col-md-6 btn btn-primary btn-sm" style="width: 100px; height: 45px;" class="tooltip-test" title="add to cart">
    					<i class="fa fa-shopping-cart"> Comprar</i>
    					</button>
    					<a href="/products" class="col-md-6 btn  btn-outline-secondary btn-sm" style="width: 100px; height: 45px;" class="tooltip-test" title="Volver">
    					<i class="fa fa-refresh"> Volver</i>
    					</a>
    					
    				</div>

    			</div>
    			
    			
    		</div>
    		<div class="card-body">
    			<div class="row">
    				<div class="col-lg-12">
    					<p class="fw-bold" >Detalles</p>
    					<hr>
    					<p class="text-justify" style="font-size: 10px"><?php echo e($product->details); ?></p>
                                        
                                        

                                        <input type="hidden" value="<?php echo e($product->id); ?>" id="id" name="id">
                                        <input type="hidden" value="<?php echo e($product->name); ?>" id="name" name="name">
                                        <input type="hidden" value="<?php echo e($product->price); ?>" id="price" name="price">
                                        <input type="hidden" value="<?php echo e($product->image_path); ?>" id="img" name="img">
                                        <input type="hidden" value="<?php echo e($product->slug); ?>" id="slug" name="slug">
                                        <input type="hidden" value="1" id="quantity" name="quantity">
                                        
    					
                                    
    				</div>
    			</div>
    		</div>
    		</form>
    	</div>
    </div>
    <?php $__env->startComponent('layouts.components.footer'); ?>
<?php echo $__env->renderComponent(); ?>
    

</body>

</html>
<?php /**PATH C:\DDRSistemasWeb\repo\ddrsistemas\resources\views/detail.blade.php ENDPATH**/ ?>