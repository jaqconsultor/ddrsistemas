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
        <p class="login-box-msg">FORMULARIO ( PAGAR COMPLETO )</p>

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
    $transacciones->fe_registro = date('Y-m-d H:i:s');
    $transacciones->ti_registro = date('Y-m-d H:i:s');
    $transacciones->tipo_facccionado = 0;
    $transacciones->name_user = auth()->user()->name;
    $transacciones->id_user = auth()->user()->id;
    $transacciones->identificationNac = auth()->user()->tipocedula;
    $transacciones->identificationNumber = auth()->user()->cedula;
    $transacciones->cellphone = auth()->user()->celular;
    $transacciones->email = auth()->user()->email;
    $transacciones->reference_t = "REF " . $reference . " - " . auth()->user()->cedula ;
    $transacciones->cantidad = $cantidad;
    $transacciones->totalusd = $totalusd;
    $transacciones->totalbs = $totalbs;
    $transacciones->tasa = 35.5;
    $transacciones->cantcuotas = 1;
    $transacciones->amount = $totalbs;
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

        $transaccionesc1 = new Transaccionesc;

        $transaccionesc1->usercreated_at = null;
        $transaccionesc1->userupdated_at = null;
        $transaccionesc1->created_at = null;
        $transaccionesc1->updated_at = null;
        $transaccionesc1->updated_at = null;
        $transaccionesc1->fe_cuota = date('Y-m-d H:i:s');

        $transaccionesc1->id_trans = $id;
        $transaccionesc1->status = 0;
        $transaccionesc1->nro_cuota = 1;

        $transaccionesc1->totalusd = $totalusd;
        $transaccionesc1->totalbs = $totalbs;
        $transaccionesc1->tasa = 35.5;

        $transaccionesc1->save();

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
                <input type="input" name="amount" class="form-control"  value="{{ \Cart::getTotal() * 35.5 }}" readonly>
                <div class="input-group-append">
                   <div class="input-group-text">
                       <span class="fas fa-number">BS</span>
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
    <!-- /.card-body -->

    </div>

    </div>

                <br><br>


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
