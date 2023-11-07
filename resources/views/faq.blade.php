<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @component('layouts.components.header')
    @endcomponent
    <body class="antialiased">
        
        @component('layouts.components.navbar')
        @endcomponent 


        <section class="bg-primary  py-5">
            <div class="container">

            <div class="row align-items-center py-5">
                    <div class="col-md-8 text-white">

                        <h1>Preguntas frecuentes</h1>
                        <p>
                        <h4><strong>¿En qué Sistemas Operativos funcionan los Sistemas de DDR ?</strong><br></h4>
                         En los Sistemas Operativos de Windows XP, Windows Vista, Windows 8, Windows 7, Windows 10, Windows 11
                         <br><br>
 
                         <h4><strong>¿Cómo modificar datos de pacientes?</strong><br></h4>
                         En el menú archivo click en pacientes. Le aparecerá la lista de pacientes le da doble click en el nombre que desea modificar y en la parte superior puede editar la información y luego guardar.<br><br>
 
                         <h4><strong>¿Puedo tener el software en dos computadoras y si estoy en consulta mi secretaria puede estar trabajando con el programa?</strong><br></h4>
                         Si ambos pueden trabajar al mismo tiempo con el programa en computadoras diferentes y estar conectados de manera que lo que agregue el Dr.  Y / o la Secretaria se actualizara en ambas maquinas.<br><br>
 
                         <h4><strong>¿Puedo usar el Software en un consultorio compartido con varios colegas?</strong><br></h4>
                        Sí. En este caso simplemente deberá instalar el software en las diferentes computadoras o bien sea en una y tendrán acceso varios doctores respetando la privacidad (cada doctor tiene acceso solamente a la historia médica de sus pacientes)<br><br>
 
                        <h4><strong>¿Es posible que desarrollen un reporte o  función que no está incluido en el sistema?</strong><br></h4>
                        El sistema se adapta a la mayoría de las prácticas médicas. Contáctenos en caso de requerir un reporte o función que no esté incorporada en el software; incluya suficiente información sobre su solicitud para evaluar las opciones y prepararle una cotización de desarrollo a la medida que usted desee.<br><br>
  
                    </p>

                    </div>
                    <div class="col-md-4">
                        <!-- <img src="assets/img/about-hero.svg" alt="About Hero"> -->
                    </div>

        </div>
        </section>
        <!-- Close Banner -->

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
