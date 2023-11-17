<!DOCTYPE html>
<html lang="en">

@component('layouts.components.header')
@endcomponent

<body>
    @component('layouts.components.navbar')
    @endcomponent 

      <div class="container py-5">
    	<div class="card">
    		<form action="{{ route('cart.store') }}" method="POST">
                                        {{ csrf_field() }}
    		<div class="card-header">
    			<div class="row">
    				<div class="col-lg-4">
    					
    					<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
						  <div class="carousel-inner">
						    <div class="carousel-item active">
						      <img src="/assets/img/software/{{strtolower($product->image_path)}}1.jpg" class="w-100" alt="...">
						    </div>
						    <div class="carousel-item">
						      <img src="/assets/img/software/{{strtolower($product->image_path)}}2.jpg" class="w-100" alt="...">
						    </div>
						    <div class="carousel-item">
						      <img src="/assets/img/software/{{strtolower($product->image_path)}}3.jpg" class="w-100" alt="...">
						    </div>
						  </div>
						</div>
    				</div>
    				<div class="col-lg-8">
    					<div class="row">
    						<div class="col">
    							
    					 		<span class="h1 text-success text fw-bold">{{$product->name}}</span>	
    						</div>
    						<div class="col">
    							<img class="col-md-6 card-img rounded-0 img-fluid" src="/assets/img/software/{{strtolower($product->image_path)}}.jpg">
    						</div>
    						

    					</div>
    					<div class="row">
    					  <span class="h4 mx-3">{{$product->price}} Bs.</span>
    						
    					</div>
    					 
                        <div class="row">
                        	<p class="h4 fw-bold">Descripci&oacute;n</p>
                        	
                         <p class="text-justify " style="font-size: 8px;">{{$product->description}}</p>	
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
    					<p class="text-justify" style="font-size: 10px">{{$product->details}}</p>
                                        
                                        

                                        <input type="hidden" value="{{ $product->id }}" id="id" name="id">
                                        <input type="hidden" value="{{ $product->name }}" id="name" name="name">
                                        <input type="hidden" value="{{ $product->price }}" id="price" name="price">
                                        <input type="hidden" value="{{ $product->image_path }}" id="img" name="img">
                                        <input type="hidden" value="{{ $product->slug }}" id="slug" name="slug">
                                        <input type="hidden" value="1" id="quantity" name="quantity">
                                        
    					
                                    
    				</div>
    			</div>
    		</div>
    		</form>
    	</div>
    </div>
    @component('layouts.components.footer')
@endcomponent
    

</body>

</html>
