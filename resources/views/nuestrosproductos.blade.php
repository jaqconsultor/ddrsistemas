<?php
            use App\Models\Product;
            $products = Product::all();

        ?> 
    <!-- Start Brands -->
    <section class="bg-light py-5">
        <div class="container my-4">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">Nuestros Productos</h1>
                </div>
                                    
                                        
                <div class="row">
                    @foreach($products as $pro)
                    <div class="card col-4 border-0" >
                        <a href="/detail/{{$pro->id}}">
                            <img class=" w-25 card-img-top img-fluid" src="assets/img/software/{{strtolower($pro->image_path)}}.jpg" alt="Card image cap">
                            <div class="card-body">
                            <h5 class="card-title">{{$pro->name}}</h5>
                            </div>
                        </a>
                    </div>   

                    @endforeach

                                          
                </div> 
            </div>
                                                                 
                                                                    
        </div>
        
    </section>
    <!--End Brands-->
