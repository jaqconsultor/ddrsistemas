<!DOCTYPE html>
<html lang="en">

@component('layouts.components.header')
@endcomponent

<body>
    @component('layouts.components.navbar')
    @endcomponent 

    <!-- Start Content -->
    <div class="container py-5">
    	<div class="card">
    		<form action="{{ route('cart.store') }}" method="POST">
                                        {{ csrf_field() }}
    		<div class="card-header">
    			<div class="row">
    				<div class="col-lg-12">
    					<span class="h3 text-success">{{$product->name}}</span>
    					<span class="h4 mx-3">{{$product->price}} Bs.</span>
    					<button class="col-md-6 btn btn-primary btn-sm" style="width: 100px; height: 45px;" class="tooltip-test" title="add to cart">
    					<i class="fa fa-shopping-cart"> Comprar</i>
    					</button>
    					<a href="/products" class="col-md-6 btn btn-primary btn-sm" style="width: 100px; height: 45px;" class="tooltip-test" title="Volver">
    					<i class="fa fa-refresh"> Volver</i>
    					</a>
    				</div>
    			</div>
    			<div class="row">
    				<div class="col-lg-2">
                        
    					<img class="col-md-6 card-img rounded-0 img-fluid" src="assets/img/software/{{strtolower($product->image_path)}}.jpg"> 
    				</div>
    				<div class="col-lg-10">
    					<p class="h3">{{$product->details}}</p>
    				</div>
    			</div>
    			
    		</div>
    		<div class="card-body">
    			<div class="row">
    				<div class="col-lg-12">
    					<p class="h3">{{$product->description}}</p>
                                        
                                      <div class="row">
                                            <div class="col-md-12">
                                                <div style="height: 250px; overflow:hidden;" class="overflow-auto text-justify">{{ $product->description }}</div>
                                            </div>
                                        </div>

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