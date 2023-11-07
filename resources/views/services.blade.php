<!DOCTYPE html>
<html lang="en">

@component('layouts.components.header')
@endcomponent

<body>
    @component('layouts.components.navbar')
    @endcomponent 

    <!-- Start Content -->
    <div class="container py-5">
        <div class="row">

            <div class="col-lg-3">
                <h1 class="h2 pb-4">Categorías</h1>
                <ul class="list-unstyled templatemo-accordion">
                    <li class="pb-3">
                        <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
                            Categoría
                            <i class="fa fa-fw fa-chevron-circle-down mt-1"></i>
                        </a>
                        <ul class="collapse show list-unstyled pl-3">
                            <li><a class="text-decoration-none" href="#">Software</a></li>
                            <li><a class="text-decoration-none" href="#">Artículos</a></li>
                        </ul>
                    </li>
                    <li class="pb-3">
                        <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
                            Venta
                            <i class="pull-right fa fa-fw fa-chevron-circle-down mt-1"></i>
                        </a>
                        <ul id="collapseTwo" class="collapse list-unstyled pl-3">
                            <li><a class="text-decoration-none" href="#">Sport</a></li>
                            <li><a class="text-decoration-none" href="#">Luxury</a></li>
                        </ul>
                    </li>
                    <li class="pb-3">
                        <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
                            Productos
                            <i class="pull-right fa fa-fw fa-chevron-circle-down mt-1"></i>
                        </a>
                        <ul id="collapseThree" class="collapse list-unstyled pl-3">
                            <li><a class="text-decoration-none" href="#">Computadoras</a></li>
                            <li><a class="text-decoration-none" href="#">Redes</a></li>
                            <li><a class="text-decoration-none" href="#">Impresoras</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

            <div class="col-lg-9">
                <div class="row">
                    <div class="col-md-6">
                        <ul class="list-inline shop-top-menu pb-3 pt-1">
                            <li class="list-inline-item">
                                <a class="h3 text-dark text-decoration-none mr-3" href="#">Todos</a>
                            </li>
                            <li class="list-inline-item">
                                <a class="h3 text-dark text-decoration-none mr-3" href="#">Software</a>
                            </li>
                            <li class="list-inline-item">
                                <a class="h3 text-dark text-decoration-none" href="#">Artículos</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 pb-4">
                        <div class="d-flex">
                            <select class="form-control">
                                <option>Características</option>
                                <option>A a Z</option>
                                <option>Artículo</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card mb-4 product-wap rounded-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                    <img class="card-img rounded-0 img-fluid" src="assets/img/software/cardioreport_0.jpg">
                                    </div>
                                    <div class="col-md-6">
                                        <span class="text-success text-bold">CardioReport</span>
                                        <hr />
                                        <span>CARDIOLOGÍA</span>
                                    </div>
                                </div>
                                <div>
                                    <span class="text-justify">Genere y manipule gráficas e indicadores, imprima revisiones pre-operatorias, resultados de ecografías, récipes, constancias, referencias, informes médicos, etc.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 product-wap rounded-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                    <img class="card-img rounded-0 img-fluid" src="assets/img/software/dermoreport.jpg">
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <span class="text-success text-bold">DermaReport</span>
                                        <hr />
                                        <span>DERMATOLOGÍA</span>
                                    </div>
                                </div>
                                <div>
                                    <span class="text-justify">Imprima recetas, informes médicos, visualice y compare las imágenes de sus pacientes. Lleve el control de las intervenciones quirúrgicas y centralice la gestión de las historias clínicas.</span>
                                </div>
                            </div>
                        </div>
                    </div>                    
                    <div class="col-md-4">
                        <div class="card mb-4 product-wap rounded-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                    <img class="card-img rounded-0 img-fluid" src="assets/img/software/ecoreport.jpg">
                                    </div>
                                    <div class="col-md-6">
                                        <span class="text-success text-bold">EcoReport</span>
                                        <hr />
                                        <span>ECOGRAFÍA</span>
                                    </div>
                                </div>
                                <div>
                                    <span class="text-justify">Incorpore a sus reportes todos los formatos que produzca el ultrasonido, maneje las citas, genere estadísticas y ejecute tareas de administración propias de la operación del consultorio.
</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card mb-4 product-wap rounded-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                    <img class="card-img rounded-0 img-fluid" src="assets/img/software/estheticreport.jpg">
                                    </div>
                                    <div class="col-md-6">
                                        <span class="text-success text-bold">EstheticReport</span>
                                        <hr />
                                        <span>MEDICINA ESTÉTICA</span>
                                    </div>
                                </div>
                                <div>
                                    <span class="text-justify">Controle tratamientos de láser, peeling, bótox, elabore la ficha facial, etc. Imprima los consentimientos informados, recetas, constancias, reposos, presupuestos, etc.
</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 product-wap rounded-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                    <img class="card-img rounded-0 img-fluid" src="assets/img/software/ginecoreport.jpg">
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <span class="text-success text-bold">GinecoReport</span>
                                        <hr />
                                        <span>GINECOLOGÍA</span>
                                    </div>
                                </div>
                                <div>
                                    <span class="text-justify">Lleve el control pre-natal, imprima el reporte de exámenes especializados como ecos y colposcopias, emita con comodidad recetas, constancias, informes médicos, etc.</span>
                                </div>
                            </div>
                        </div>
                    </div>                    
                    <div class="col-md-4">
                        <div class="card mb-4 product-wap rounded-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                    <img class="card-img rounded-0 img-fluid" src="assets/img/software/medicalreport.jpg">
                                    </div>
                                    <div class="col-md-6">
                                        <span class="text-success text-bold">MedicReport</span>
                                        <hr />
                                        <span>MEDICINA INTERNA</span>
                                    </div>
                                </div>
                                <div>
                                    <span class="text-justify">Genere gráficas de indicadores, maneje la información de cada paciente, imprima evaluaciones pre-operatorias, recetas, constancias, informes médicos, etc.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div div="row">
                    <ul class="pagination pagination-lg justify-content-end">
                        <li class="page-item disabled">
                            <a class="page-link active rounded-0 mr-3 shadow-sm border-top-0 border-left-0" href="#" tabindex="-1">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link rounded-0 mr-3 shadow-sm border-top-0 border-left-0 text-dark" href="#">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link rounded-0 shadow-sm border-top-0 border-left-0 text-dark" href="#">3</a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
    <!-- End Content -->

    <!-- Start Brands -->
    <section class="bg-light py-5">
        <div class="container my-4">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">Nuestras Marcas</h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        Lorem ipsum dolor sit amet.
                    </p>
                </div>
                <div class="col-lg-9 m-auto tempaltemo-carousel">
                    <div class="row d-flex flex-row">
                        <!--Controls-->
                        <div class="col-1 align-self-center">
                            <a class="h1" href="#multi-item-example" role="button" data-bs-slide="prev">
                                <i class="text-light fas fa-chevron-left"></i>
                            </a>
                        </div>
                        <!--End Controls-->

                        <!--Carousel Wrapper-->
                        <div class="col">
                            <div class="carousel slide carousel-multi-item pt-2 pt-md-0" id="multi-item-example" data-bs-ride="carousel">
                                <!--Slides-->
                                <div class="carousel-inner product-links-wap" role="listbox">

                                    <!--First slide-->
                                    <div class="carousel-item active">
                                        <div class="row">
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/brand_01.png" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/brand_02.png" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/brand_03.png" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/brand_04.png" alt="Brand Logo"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End First slide-->

                                    <!--Second slide-->
                                    <div class="carousel-item">
                                        <div class="row">
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/brand_01.png" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/brand_02.png" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/brand_03.png" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/brand_04.png" alt="Brand Logo"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End Second slide-->

                                    <!--Third slide-->
                                    <div class="carousel-item">
                                        <div class="row">
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/brand_01.png" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/brand_02.png" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/brand_03.png" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/brand_04.png" alt="Brand Logo"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End Third slide-->

                                </div>
                                <!--End Slides-->
                            </div>
                        </div>
                        <!--End Carousel Wrapper-->

                        <!--Controls-->
                        <div class="col-1 align-self-center">
                            <a class="h1" href="#multi-item-example" role="button" data-bs-slide="next">
                                <i class="text-light fas fa-chevron-right"></i>
                            </a>
                        </div>
                        <!--End Controls-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Brands-->

    @component('layouts.components.footer')
    @endcomponent

    
</body>

</html>