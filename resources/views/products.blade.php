<!DOCTYPE html>
<html lang="en">

@component('layouts.components.header')
@endcomponent

<body>
    @component('layouts.components.navbar')
    @endcomponent 

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
                    @foreach($products as $pro)
                        <div class="col-lg-4 my-2">
                            <div class="card mb-4 product-wap rounded-0 overflow-y" style="height: 450px;">
                                <div class="card-body">
                                    <form action="{{ route('cart.store') }}" method="POST">
                                         <a href="/detail/{{$pro->id}}" class="text-decoration-none">
                                        {{ csrf_field() }}
                                        <div class="row">                                       
                                            <div class="col-4">
                                                <img  src="assets/img/software/{{strtolower($pro->image_path)}}.jpg">                                        
                                            </div>
                                            <div class="col-8">
                                                <button class="btn btn-primary btn-sm" style="width: 150px; height: 50px;" class="tooltip-test" title="add to cart">
                                                    <i class="fa fa-shopping-cart"> Comprar <br>( {{$pro->price}} USD )</i>
                                                </button>
                                            </div>
                                            <!-- <img class="col-md-6 card-img rounded-0 img-fluid" src="assets/img/software/{{strtolower($pro->image_path)}}.jpg">  -->
                                            
                                            <!-- <button class="col-md-6 btn btn-primary btn-sm" style="width: 45px; height: 45px;" class="tooltip-test" title="add to cart">
                                                <i class="fa fa-shopping-cart"> Comprar <br>( {{$pro->price}} USD )</i>
                                            </button>
                                            -->
                                        </div>
                                        
                                        <div class="row">
                                                <span class="text-success h6"><strong>{{ $pro->name }}</strong></span>
                                                <hr style="width: 90%;" />
                                                <span class="pt-0"><strong>{{ $pro->slug }}</strong></span> 
                                                <br> 
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div style="height: 250px; overflow:hidden;" class="overflow-auto text-justify">{{ $pro->description }}</div>
                                            </div>
                                        </div>
                                         </a>
                                        <input type="hidden" value="{{ $pro->id }}" id="id" name="id">
                                        <input type="hidden" value="{{ $pro->name }}" id="name" name="name">
                                        <input type="hidden" value="{{ $pro->price }}" id="price" name="price">
                                        <input type="hidden" value="{{ $pro->image_path }}" id="img" name="img">
                                        <input type="hidden" value="{{ $pro->slug }}" id="slug" name="slug">
                                        <input type="hidden" value="1" id="quantity" name="quantity">
                                    </form>
                                </div>
                                
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    
    </div>
    <!-- End Content -->

    @component('layouts.components.footer')
    @endcomponent

    
</body>

</html>