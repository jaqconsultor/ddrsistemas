<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @component('layouts.components.header')
    @endcomponent
    <body class="antialiased">
        
        @component('layouts.components.navbar')
        @endcomponent 

        <div class="container">
        <div class="row justify-content-md-center">
                <div class="card-body col-6">
        <p class="login-box-msg">FORMULARIO ( PAGAR A CUOTAS )</p>

        <form action="https://www.ddrsistemas.com/pasarela/Index.php" method="post">
           
            @csrf
            <div class="input-group mb-3">
                <input type="text" name="name" class="form-control" value="{{ auth()->user()->name }}" readonly >
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                    </div>
                </div>
            </div>

            <div class="input-group mb-3">

                <input type="text" name="identificationNac" class="form-control" value="{{ auth()->user()->tipocedula }}" readonly>
                <input type="text" name="identificationNumber" class="form-control" value="{{ auth()->user()->cedula }}" readonly>

                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-number">CI</span>
                    </div>
                </div>
            </div>

            <div class="input-group mb-3">
                <input type="text" name="cellphone" max="11"  class="form-control" value="{{ auth()->user()->celular }}" readonly>
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-number">Celular</span>
                    </div>
                </div>
            </div>

            <div class="input-group mb-3">
                <input type="email" name="email" class="form-control" value="{{ auth()->user()->email }}" readonly>
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                    </div>
                </div>
            </div>

            <div class="input-group mb-3">
                <input type="input" name="reference" class="form-control"  value="REF {{ \Cart::getTotalQuantity()}} - {{ auth()->user()->cedula }}" readonly>
                <div class="input-group-append">
                   <div class="input-group-text">
                       <span class="fas fa-number">Referencia</span>
                    </div>
                </div>
            </div>

               <div class="input-group mb-3">
                <input type="input" name="password" class="form-control"  value="{{ \Cart::getTotalQuantity()}}" readonly>
                <div class="input-group-append">
                   <div class="input-group-text">
                       <span class="fas fa-number">Cantidad</span>
                    </div>
                </div>
            </div>

            <div class="input-group mb-3">
                <input type="input" name="password" class="form-control"  value="{{ \Cart::getTotal() }}" readonly>
                <div class="input-group-append">
                   <div class="input-group-text">
                       <span class="fas fa-number">USD</span>
                    </div>
                </div>
            </div>

            <div class="input-group mb-3">
                <input type="input" id="amountt" name="amountt" class="form-control"  value="{{ \Cart::getTotal() * 35.5 }}" readonly>
                <div class="input-group-append">
                   <div class="input-group-text">
                       <span class="fas fa-number">BS</span>
                    </div>
                </div>
            </div>

            <div class="input-group mb-3">
                    <select id="cantcuotas" name="cantcuotas" onchange="calcular()" class="form-select">
                                                <option value="2">
                                                    2
                                                </option>
                                                <option value="3">
                                                    3
                                                </option>
                                            </select>
                <div class="input-group-append">
                   <div class="input-group-text">
                       <span class="fas fa-number">Cantidad de Cuotas</span>
                    </div>
                </div>
            </div>

            <div class="input-group mb-3">
                <input type="input" id="amount" name="amount" class="form-control" value="{{ ( \Cart::getTotal() * 35.5 ) / 2 }}" readonly>
                <div class="input-group-append">
                   <div class="input-group-text">
                       <span class="fas fa-number">BS de la Cuota</span>
                    </div>
                </div>
            </div>

            <div class="input-group mb-3">
                <input type="input" name="title" class="form-control"  value="Compra Software De DDRSistemas" readonly>
                <div class="input-group-append">
                   <div class="input-group-text">
                       <span class="fas fa-number">Titulo</span>
                    </div>
                </div>
            </div>


            <div class="input-group mb-3">
                <input type="input" name="description" class="form-control"  value="Compra de {{ \Cart::getTotalQuantity()}} producto(s) de DDRSistemas" readonly>
                <div class="input-group-append">
                   <div class="input-group-text">
                       <span class="fas fa-number">Descripción</span>
                    </div>
                </div>
            </div>

            <div class="col-4">
                <button type="submit" class="btn btn-primary btn-block">Proceder a Pagar</button>
            </div>

            <br>
            <a href="/" class="col-md-6 btn  btn-outline-secondary btn-sm" style="width: 100px; height: 45px;" class="tooltip-test" title="Volver">
					<i class="fa fa-refresh"> Volver</i>
			</a>

        </form>

    </div>
    </div>
    </div>
    <!-- /.card-body -->

<script>

function calcular() {
    var cuota = 0;
    var cantcuotas = 0;
    var montot = 0;
    var amount = 0;

 
        cantcuotas = document.getElementById("cantcuotas").value;
        montot = document.getElementById("amountt").value;

        amount = Math.round(( montot / cantcuotas ),2);

        document.getElementById("amount").value = amount;

}
</script>


</div>
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
