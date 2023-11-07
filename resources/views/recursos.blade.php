<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @component('layouts.components.header')
    @endcomponent
    <body class="antialiased">
        
        @component('layouts.components.navbar')
        @endcomponent 
        <div class="container">
            <h1 class="h1">Recursos - Manuales & DEMOS</h1>
                <br>
                <?php
                    use App\Models\Product;
                    $products = Product::all();
                ?>        

            @foreach($products as $pro)
                                        
            <div class="row">
                    <strong>Recursos de {{ $pro->name }}</strong>
                    <a href="{{ $pro->name }}.pdf"><span class="text-info h6">Manual de <strong>{{ $pro->name }}</strong></span></a>
                    <a href="{{ $pro->name }}.msi"><span class="text-info h6">DEMO para Windows</strong></span></a>
                    <br><br><br>
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
