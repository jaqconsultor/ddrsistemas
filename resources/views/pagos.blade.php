<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@component('layouts.components.header')
@endcomponent

<body class="antialiased">

    @component('layouts.components.navbar')
    @endcomponent
    <div class="container">
        <h1 class="h1">PAGOS</h1>
        <br>
        <?php
                    use App\Models\Transacciones;
                    $products = Transacciones::where('id_user', auth()->user()->id)->get();
                ?>

        @foreach($products as $pro)

        <div class="row">
            <strong>Formulario {{ $pro->id }}</strong>
            {{ $pro->fe_registro }}<br>
            {{ $pro->ti_registro }}<br>
            {{ $pro->tipo_facccionado }}<br>
            {{ $pro->name_user }}<br>
            {{ $pro->id_user }}<br>
            {{ $pro->identificationNac }}<br>
            {{$pro->identificationNumber }}<br>
            {{$pro->cellphone }}<br>
            {{$pro->email }}<br>
            {{$pro->reference_t }}<br>
            {{$pro->cantidad }}<br>
            {{$pro->totalusd }}<br>
            {{$pro->totalbs }}<br>
            {{$pro->tasa }}<br>
            {{$pro->cantcuotas }}<br>
            {{$pro->amount }}<br>
            {{$pro->title }}<br>
            {{$pro->description_t }}<br>
            {{$pro->id_transaccion }}<br>
            {{$pro->usercreated_at }}<br>
            {{$pro->userupdated_at }}<br>
            {{$pro->created_at }}<br>
            {{$pro->updated_at }}<br>
            {{$pro->status }}<br>
            <hr>
            <br><br>
        </div>

        @endforeach


        <br><br>

    </div>

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