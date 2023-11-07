<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @component('layouts.components.header')
    @endcomponent
    <body class="antialiased">
        
        @component('layouts.components.navbar')
        @endcomponent 
        <div class="container">
            <br>
                <?php
                    use App\Models\Product;
                    $products = Product::all();
                ?>        

            @foreach($products as $pro)
                                        
                <div class="row">
                        <span class="text-info h3"><strong>{{ $pro->name }}</strong></span>
                        <span class="pt-0"><strong>{{ $pro->slug }}</strong></span> 
                        <div class="col-md-12">
                             <div style="height: 100px; overflow:hidden;" class="overflow-auto text-justify">{{ $pro->description }}</div>
                        </div>
                        <br>
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
