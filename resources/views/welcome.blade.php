<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @component('layouts.components.header')
    @endcomponent 
    <body class="antialiased">
        
        @component('layouts.components.navbar')
        @endcomponent 

        <!-- Start Banner Hero -->
        <div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
                <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">

                <div class="carousel-item active">
                    <div class="container">
                        <div class="row p-5">
                                <div class="mx-auto col-md-12 col-lg-12 order-lg-last">
                                    <img class="img-fluid" src="1.jpg" alt="">
                                </div>
                        </div>
                    </div>
                </div>


                @for ($i = 2; $i < 4; $i++)
                    <div class="carousel-item">
                        <div class="container">
                            <div class="row p-5">
                                <div class="mx-auto col-md-12 col-lg-12 order-lg-last">
                                    <img class="img-fluid" src="{{$i}}.jpg" alt="">
                                </div>
                                <!-- <div class="col-lg-6 mb-0 d-flex align-items-center">
                                    <div class="text-align-left">
                                        <h1 class="h1">Repr in voluptate {{ $i }}</h1>
                                        <h3 class="h2">Ullamco laboris nisi ut </h3>
                                        <p>
                                            We bring you 100% free CSS templates for your websites. 
                                            If you wish to support TemplateMo, please make a small contribution via PayPal or tell your friends about our website. Thank you.
                                        </p>
                                    </div>
                                </div>
-->
                            </div>
                        </div>
                    </div>
                @endfor

            </div>
            <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="prev">
                <i class="fas fa-chevron-left"></i>
            </a>
            <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="next">
                <i class="fas fa-chevron-right"></i>
            </a>
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
                            <a href="/products">
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
                                <a href="/products" class="h2 text-decoration-none text-dark">Ginecología</a>
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
                            <a href="/products">
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
                                <a href="shop-single.html" class="h2 text-decoration-none text-dark">Pediatría</a>
<!--                                 <p class="card-text">
                                    Aenean gravida dignissim finibus. Nullam ipsum diam, posuere vitae pharetra sed, commodo ullamcorper.
                                </p>
                                <p class="text-muted">Reviews (48)</p> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 mb-4">
                        <div class="card h-100">
                            <a href="#">
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
                                <a href="#" class="h2 text-decoration-none text-dark">Traumatología</a>
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
