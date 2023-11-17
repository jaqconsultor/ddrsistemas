<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <?php $__env->startComponent('layouts.components.header'); ?>
    <?php echo $__env->renderComponent(); ?>
    <body class="antialiased">
        
        <?php $__env->startComponent('layouts.components.navbar'); ?>
        <?php echo $__env->renderComponent(); ?> 

        <section class=" py-5">
            <div class="container">
                <div class="row align-items-center py-5  bg-primary text-white rounded-2 ">
                    <div class="col-8 ">

                        
                        <h1>Nosotros</h1>
                        <p>
                            La Empresa DDR Sistemas, C.A innova en el sector informático local con herramientas que asisten en el desempeño profesional de una gran gama de usuarios, destacándose como una empresa líder en la creación de software, que ofrece productos altamente competitivos adaptados a las diferentes necesidades o requerimientos de su comunidad de clientes.
                            Gracias al esfuerzo de un equipo profesional dedicado y comprometido, DDR Sistemas, C.A. ha consolidado un portafolio de aplicaciones tecnológicas enfocadas a cubrir las necesidades del mercado venezolano, desarrollando paralelamente un excelente sistema de soporte, pre y post ventas.
                        </p>
                        
                        

                    </div>
                    <div class="col-4">
                        <img src="2.thumbnail.png" alt="...">
                        
                    </div>

                   
                </div>
                 
                <div class="row align-items-center py-5 bg-white">
                    <div class="col-4 text-white">

                        <img src="1.thumbnail.png" alt="...">
                        
                        

                    </div>
                    <div class="col-8">
                        
                        <h1>TRAYECTORIA</h1>
                        
                        <p>
                            Tenemos una amplia trayectoria ofreciendo soluciones informáticas integrales tanto en el área del comercio como a personas naturales.
                            Contamos con soluciones que pueden satisfacer una amplia diversidad de requerimientos, desarrolladas completamente en Venezuela por un grupo de programadores altamente calificado, comprometido a brindarle el apoyo que usted necesite, cuando lo necesite.
                        </p>
                    </div>

                    

                   
                </div>

                <div class="row align-items-center py-5 bg-primary text-white rounded">
                    <div class="col-8 ">

                        
                        <h1>SOFTWARE DDR</h1>
                        <p>
                            Nuestros sistemas son desarrollados íntegramente por personal de la empresa, lo que asegura la continuidad y asistencia posterior a la venta, ofreciendo un servicio que le permitirá obtener un oportuno soporte multi modal, debidamente documentado.                        
                        </p>
                        

                    </div>
                    <div class="col-4">
                        <img src="boton.thumbnail.png" alt="...">
                        
                    </div>

                   
                </div>

             
                
        </section>
        


        <?php $__env->startComponent('nuestrosproductos'); ?>
        <?php echo $__env->renderComponent(); ?> 

        <?php $__env->startComponent('layouts.components.footer'); ?>
        <?php echo $__env->renderComponent(); ?>

        <!-- Start Script -->
        <script src="assets/js/jquery-1.11.0.min.js"></script>
        <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/templatemo.js"></script>
        <script src="assets/js/custom.js"></script>
        <!-- End Script -->
    </body>
</html>
<?php /**PATH C:\DDRSistemasWeb\repo\ddrsistemas\resources\views/about.blade.php ENDPATH**/ ?>