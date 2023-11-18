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
        <p class="login-box-msg">FORMULARIO ( PAGAR A CUOTAS )</p>

        <?php

                    use App\Models\Transacciones;
                    use App\Models\Transaccionesd;
                    use App\Models\Transaccionesc;
                    use App\Models\Cart;

                    $reference = \Cart::getTotalQuantity();
                    $cantidad = \Cart::getTotalQuantity();
                    $totalusd = \Cart::getTotal();
                    $totalbs = \Cart::getTotal() * 35.5;
                    $cartCollection = \Cart::getContent();
                    $descripcion_t = "Compra de " . \Cart::getTotalQuantity() . " producto(s) de DDRSistemas";

                    use Carbon\Carbon;

                    $transacciones = new Transacciones;
                    $transacciones->fe_registro = date('Y-m-d H:i:s');;
                    $transacciones->ti_registro = date('Y-m-d H:i:s');;
                    $transacciones->tipo_facccionado = 1;
                    $transacciones->name_user = auth()->user()->name;
                    $transacciones->id_user = auth()->user()->id;
                    $transacciones->identificationNac = auth()->user()->tipocedula;
                    $transacciones->identificationNumber = auth()->user()->cedula;
                    $transacciones->cellphone = auth()->user()->celular;
                    $transacciones->email = auth()->user()->email;
                    $transacciones->reference_t = "REF " . $reference . " - " .  auth()->user()->cedula ;
                    $transacciones->cantidad = $cantidad;
                    $transacciones->totalusd = $totalusd;
                    $transacciones->totalbs = $totalbs;
                    $transacciones->tasa = 35.5;
                    $transacciones->cantcuotas = 2;
                    $transacciones->amount = $totalbs / 2;
                    $transacciones->title = "Compra Software De DDRSistemas";
                    $transacciones->description_t = $descripcion_t;
                    $transacciones->id_transaccion = null;
                    $transacciones->usercreated_at = null;
                    $transacciones->userupdated_at = null;
                    $transacciones->created_at = null;
                    $transacciones->updated_at = null;
                    $transacciones->status = 0;

                        $transacciones->save();

        $id = Transacciones::max('id');

        session(['idCarrito' => $id]);
        
// Guardar los Carritos

        foreach ($cartCollection as $item) {

                $transaccionesd = new Transaccionesd;

                $transaccionesd->name_producto = $item->name;
                $transaccionesd->slug_producto = $item->attributes->slug;
                $transaccionesd->id_item = $item->id;
                $transaccionesd->cantidad = $item->quantity;
                $transaccionesd->totalusd = $item->price;
                $transaccionesd->totalbs = $item->price * 35.5;
                $transaccionesd->tasa = 35.5;
                $transaccionesd->status = 0;
                $transaccionesd->id_trans = $id;

                $transaccionesd->save();
        }

        ?>        

        <form action="https://www.ddrsistemas.com/pasarela/Index.php" method="post">
           
            @csrf

            <div class="input-group mb-3">
                <input type="text" name="id" class="form-control" value="{{ $id }}" readonly >
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-envelope">Identificador</span>
                    </div>
                </div>
            </div>


            <div class="input-group mb-3">
                <input type="text" name="name" class="form-control" value="{{ auth()->user()->name }}" readonly >
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                    </div>
                </div>
            </div>

            <div class="input-group mb-3">

                <input type="hidden" name="id" id="id" class="form-control" value="{{ $id }}" readonly>

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
                    <input type="input" id="cantcuotas" name="cantcuotas" class="form-control" value="<?php echo $_POST["cantcuotas"]; ?>" readonly>
<!--                    <select id="cantcuotas" name="cantcuotas" onchange="calcular()" class="form-select">
                                        <option value="1">
                                                    1
                                                </option>
                                                <option value="2">
                                                    2
                                                </option>
                                                <option value="3">
                                                    3
                                                </option>
                                            </select>
        -->
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

        	<div class="row">
            <div class="col-4">
                <button type="submit" class="btn btn-primary btn-block">Proceder a Pagar</button>
            </div>
            <div class="col-4">
                    <a href="/" class="btn  btn-outline-secondary btn-sm" style="width: 100px; height: 45px;" class="tooltip-test" title="Volver">
					<i class="fa fa-refresh"> Volver</i>
        			</a>
            </div>

        	</div>

        </form>

    </div>
    </div>
    </div>
    <!-- /.card-body -->

    <script>

calcular();

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


<?php

// Guardar los Carritos

$cantidad = $_POST["cantcuotas"];

$ffecha = date('Y-m-d H:i:s');

$ffecha = date('Y-m-d H:i:s');

for ($r = 1; $r <= $cantidad; $r++ ) {

    $transaccionesc = new Transaccionesc;

    $transaccionesc->usercreated_at = null;
    $transaccionesc->userupdated_at = null;
    $transaccionesc->created_at = null;
    $transaccionesc->updated_at = null;
    $transaccionesc->updated_at = null;
    $transaccionesc->fe_cuota = $ffecha;

    $ffecha = date("Y-m-d H:i:s",strtotime($ffecha."+ 7 days"));

    $transaccionesc->id_trans = $id;
    $transaccionesc->status = 0;
    $transaccionesc->nro_cuota = $r;
    
    $transaccionesc->totalusd = $totalbs / 35.5 ;
    $transaccionesc->totalbs = $totalbs;
    $transaccionesc->tasa = 35.5;
    
    $transaccionesc->save();

}
 ?>


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
