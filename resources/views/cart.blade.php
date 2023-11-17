<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @component('layouts.components.header')
    @endcomponent 
    <body class="antialiased">
        
        @component('layouts.components.navbar')
        @endcomponent 

        <!-- Start Shop -->
        
        <div class="container" style="margin-top: 80px">
            Carrito de Compra
            @if(session()->has('success_msg'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session()->get('success_msg') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                @endif
            @if(session()->has('alert_msg'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    {{ session()->get('alert_msg') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
            @endif
            @if(count($errors) > 0)
                @foreach($errors0>all() as $error)
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ $error }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                @endforeach
            @endif
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <br>
                    @if(\Cart::getTotalQuantity()>0)
                        <h4>{{ \Cart::getTotalQuantity()}} Producto(s) en el carrito</h4><br>
                    @else
                        <h4>No Existen Productos en el Carrito de Compra</h4><br>
                        <a href="/products" class="btn btn-dark">Seleccionar mas Productos</a>
                    @endif

                    @foreach($cartCollection as $item)
                        <div class="row">
                            <div class="col-lg-3">
                                <img src="/assets/img/software/{{strtolower($item->attributes->image)}}.jpg" class="img-thumbnail" width="200" height="200">
                            </div>
                            <div class="col-lg-5">
                                <p>
                                    <b><a href="/shop/{{ $item->attributes->slug }}">{{ $item->name }}</a></b><br>
                                    <b>Precio: </b>{{ $item->price }} USD / {{ $item->price * 35.5 }} BS <br>
                                    <b>Sub Total: </b>{{ \Cart::get($item->id)->getPriceSum() }} USD / {{ \Cart::get($item->id)->getPriceSum() * 35.5 }} BS <br>
                                    {{--                                <b>With Discount: </b>${{ \Cart::get($item->id)->getPriceSumWithConditions() }}--}}
                                </p>
                            </div>
                            <div class="col-lg-4">
                                <div class="row">
                                    <div class="col-md-9 p-0 m-0">
                                        <form action="{{ route('cart.update') }}" method="POST">
                                            {{ csrf_field() }}
                                            <div class="row">
                                                <div class="col-6">
                                                    <input type="hidden" value="{{ $item->id}}" id="id" name="id">
                                                    <input type="number" class="form-control" value="{{ $item->quantity }}"
                                                    id="quantity" name="quantity">
                                                </div>
                                                <!-- <div class="col-4">
                                                    <button class="btn btn-secondary"><i class="fa fa-edit"></i></button>
                                                </div> -->
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-md-2">
                                        <form action="{{ route('cart.remove') }}" method="POST">
                                            {{ csrf_field() }}
                                            <input type="hidden" value="{{ $item->id }}" id="id" name="id">
                                            <button class="btn btn-dark"><i class="fa fa-trash"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                    @endforeach
                    @if(count($cartCollection)>0)
                        <form action="{{ route('cart.clear') }}" method="POST">
                            {{ csrf_field() }}
                            <button class="btn btn-secondary btn-md">Vaciar Carrito</button> 
                        </form>
                    @endif
                </div>
                @if(count($cartCollection)>0)
                    <div class="col-lg-5">
                        <div class="card">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><b>Total: </b>{{ \Cart::getTotal() }} USD / {{ \Cart::getTotal() * 35.5 }} BS </li>
                            </ul>
                        </div>
                        <!-- <br><a href="/products" class="btn btn-dark">Continue en la tienda</a> -->

                        <a href="https://ddrsistemas.com/pasarela/Index.php" class="btn btn-primary">Proceder a Pagar Completo</a>
                        <!-- <a href="https://ddrsistemas.com/pasarela/Index.php" class="btn btn-success">Proceder a Pagar</a> -->

                        <a href="https://ddrsistemas.com/pasarela/Index.php" class="btn btn-info">Proceder a Pagar a Crédito</a>

                    </div>
                @endif
            </div>
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
