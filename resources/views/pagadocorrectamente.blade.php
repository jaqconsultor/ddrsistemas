<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@component('layouts.components.header')
@endcomponent

<body class="antialiased">

    @component('layouts.components.navbar')
    @endcomponent

    <div class="container">
        <div class="row justify-content-md-center">
            <div class="card-body col-12">
                <p class="login-box-msg">PAGADO SATISFACTORIAMENTE</p>

                <?php

                    use App\Models\Transacciones;
                    $id1 = session('idCarrito');
            
                    $transacciones = Transacciones::find($id1);
                    $transacciones->id_transaccion = $_GET['token1'] ;

                    $transacciones->save();

                ?>

            </div>
        </div>
    </div>
    <!-- /.card-body -->


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