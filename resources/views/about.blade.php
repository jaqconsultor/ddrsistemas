<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @component('layouts.components.header')
    @endcomponent
    <body class="antialiased">
        
        @component('layouts.components.navbar')
        @endcomponent 

        <section class="bg-primary py-5">
            <div class="container">
                <div class="row align-items-center py-5">
                    <div class="col-md-8 text-white">

                        <img src="2.thumbnail.png" alt="...">
                        <h1>Nosotros</h1>
                        <p>
                            La Empresa DDR Sistemas, C.A innova en el sector informático local con herramientas que asisten en el desempeño profesional de una gran gama de usuarios, destacándose como una empresa líder en la creación de software, que ofrece productos altamente competitivos adaptados a las diferentes necesidades o requerimientos de su comunidad de clientes.
                            Gracias al esfuerzo de un equipo profesional dedicado y comprometido, DDR Sistemas, C.A. ha consolidado un portafolio de aplicaciones tecnológicas enfocadas a cubrir las necesidades del mercado venezolano, desarrollando paralelamente un excelente sistema de soporte, pre y post ventas.
                        </p>
                        <br><br>
                        <img src="1.thumbnail.png" alt="...">
                        <h1>TRAYECTORIA</h1>
                        
                        <p>
                            Tenemos una amplia trayectoria ofreciendo soluciones informáticas integrales tanto en el área del comercio como a personas naturales.
                            Contamos con soluciones que pueden satisfacer una amplia diversidad de requerimientos, desarrolladas completamente en Venezuela por un grupo de programadores altamente calificado, comprometido a brindarle el apoyo que usted necesite, cuando lo necesite.
                        </p>
                        <br><br>
                        <img src="boton.thumbnail.png" alt="...">
                        <h1>SOFTWARE DDR</h1>
                        <p>
                            Nuestros sistemas son desarrollados íntegramente por personal de la empresa, lo que asegura la continuidad y asistencia posterior a la venta, ofreciendo un servicio que le permitirá obtener un oportuno soporte multi modal, debidamente documentado.                        
                        </p>

                    </div>
                    <div class="col-md-4">
                        <img src="assets/img/about-hero.svg" alt="About Hero">
                    </div>
                </div>
            </div>
        </section>
        <!-- Close Banner -->

        <!-- Start Section 
        <section class="container py-5">
            <div class="row text-center pt-5 pb-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">Nuestros Servicios</h1>
                </div>
            </div>
            <div class="row">

                <div class="col-md-6 col-lg-3 pb-5">
                    <div class="h-100 py-5 services-icon-wap shadow">
                        <div class="h1 text-success text-center"><i class="fa fa-truck fa-lg"></i></div>
                        <h2 class="h5 mt-4 text-center">Servicio de Delivery</h2>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 pb-5">
                    <div class="h-100 py-5 services-icon-wap shadow">
                        <div class="h1 text-success text-center"><i class="fas fa-exchange-alt"></i></div>
                        <h2 class="h5 mt-4 text-center">Envío y devolución</h2>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 pb-5">
                    <div class="h-100 py-5 services-icon-wap shadow">
                        <div class="h1 text-success text-center"><i class="fa fa-percent"></i></div>
                        <h2 class="h5 mt-4 text-center">Promoción</h2>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 pb-5">
                    <div class="h-100 py-5 services-icon-wap shadow">
                        <div class="h1 text-success text-center"><i class="fa fa-user"></i></div>
                        <h2 class="h5 mt-4 text-center">Servicio las 24 Horas</h2>
                    </div>
                </div>
            </div>
        </section>
        -->
        <!-- End Section -->


        @component('nuestrosproductos')
        @endcomponent 

        @component('layouts.components.footer')
        @endcomponent

        <!-- Start Script -->
        <script src="assets/js/jquery-1.11.0.min.js"></script>
        <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/templatemo.js"></script>
        <script src="assets/js/custom.js"></script>
        <!-- End Script -->
    </body>
</html>
