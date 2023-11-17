<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @component('layouts.components.header')
    @endcomponent 
    <body class="antialiased">
        
        @component('layouts.components.navbar')
        @endcomponent 

        <!-- Start Banner Hero -->
        
            <div id="carouselExampleInterval" class="carousel slide my-1" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                  <img src="1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                  <img src="2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="3.jpg" class="d-block w-100" alt="...">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>   
        
        <!-- End Banner Hero -->


        <!-- Start Categories of The Month -->
        <section class="container py-5">
            <div class="row text-center pt-3">
                <div class="col-lg-6 m-auto">
                    <!-- <h1 class="h1">Categorías del Mes</h1>
                    <p>
                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                        deserunt mollit anim id est laborum.
                    </p> -->
                </div>
            </div>
                <!-- 
            <div class="row">
                <div class="col-12 col-md-4 p-5 mt-3">
                    <a href="/products"><img src="./assets/img/category_img_01.png" class="rounded-circle img-fluid border"></a>
                    <h5 class="text-center mt-3 mb-3">Software</h5>
                    <p class="text-center"><a href="/products#software" class="btn btn-success">Ir a Tienda</a></p>
                </div>
                <div class="col-12 col-md-4 p-5 mt-3">
                    <a href="#"><img src="./assets/img/category_img_02.png" class="rounded-circle img-fluid border"></a>
                    <h2 class="h5 text-center mt-3 mb-3">Artículos</h2>
                    <p class="text-center"><a href="/products#product" class="btn btn-success">Ir a Tienda</a></p>
                </div> 
            </div>                -->

        </section>
        <!-- End Categories of The Month -->


        <!-- Start Featured Product -->
        <section class="bg-light">
            <div class="container py-5">
                <div class="row text-center py-3">
                    <div class="col-lg-6 m-auto">
                        <h1 class="h1">Productos destacados</h1>
                        <img src="boton.thumbnail.png" />
                        <!--
                         <p>
                            Reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                            Excepteur sint occaecat cupidatat non proident.
                        </p>
                        -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-4 mb-4">
                        <div class="card h-100">
                            <a href="/detail/{{1}}">
                                <img src="ginecoreport_logo.jpg" height="200px" class="card-img-top" alt="...">
                            </a>
                            <div class="card-body">
                                <ul class="list-unstyled d-flex justify-content-between">
                                    <li>
                                    <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>                                    </li>
                                    <!-- <li class="text-muted text-right">$240.00</li> -->
                                </ul>
                                <a href="/detail/{{1}}" class="h2 text-decoration-none text-dark">Ginecología</a>
<!--                                <p class="card-text">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt in culpa qui officia deserunt.
                                </p>
                                <p class="text-muted">Reviews (24)</p>
-->
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 mb-4">
                        <div class="card h-100">
                            <a href="/detail/{{12}}">
                                <img src="pediareport_logo.jpg" class="card-img-top" height="200px" alt="...">
                            </a>
                            <div class="card-body">
                                <ul class="list-unstyled d-flex justify-content-between">
                                    <li>
                                    <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>                                    </li>
                                    <!-- <li class="text-muted text-right">$480.00</li> -->
                                </ul>
                                <a href="/detail/{{12}}" class="h2 text-decoration-none text-dark">Pediatría</a>
<!--                                 <p class="card-text">
                                    Aenean gravida dignissim finibus. Nullam ipsum diam, posuere vitae pharetra sed, commodo ullamcorper.
                                </p>
                                <p class="text-muted">Reviews (48)</p> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 mb-4">
                        <div class="card h-100">
                            <a href="/detail/{{27}}">
                                <img src="orthoreport_logo.jpg" class="card-img-top" height="200px" alt="...">
                            </a>
                            <div class="card-body">
                                <ul class="list-unstyled d-flex justify-content-between">
                                    <li>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                    </li>
                                    <!-- <li class="text-muted text-right">$360.00</li> -->
                                </ul>
                                <a href="/detail/{{27}}" class="h2 text-decoration-none text-dark">Traumatología</a>
<!--                                <p class="card-text">
                                    Curabitur ac mi sit amet diam luctus porta. Phasellus pulvinar sagittis diam, et scelerisque ipsum lobortis nec.
                                </p>
                                <p class="text-muted">Reviews (74)</p> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Featured Product -->

        
        @component('nuestrosproductos')
        @endcomponent 

        @component('layouts.components.footer')
        @endcomponent
        
    </body>
</html>
