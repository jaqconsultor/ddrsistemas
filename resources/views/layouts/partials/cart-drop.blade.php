@if(count(\Cart::getContent()) > 0)
    @foreach(\Cart::getContent() as $item)
        <li class="list-group-item">
            <div class="row">
                <div class="col-lg-3">
                    <img src="/assets/img/software/{{strtolower($item->attributes->image)}}.jpg"
                         style="width: 50px; height: 50px;"
                    >
                </div>
                <div class="col-lg-5">
                    <b>{{$item->name}}</b>
                    <br><small>Cant: {{$item->quantity}}</small>
                </div>
                <div class="col-lg-4">
                    <p>{{ \Cart::get($item->id)->getPriceSum() }} USD<br>{{ \Cart::get($item->id)->getPriceSum() * 35.41 }} Bs</p>
                </div>
                <br><br>
                </div>
        </li>
    @endforeach
    <br>
    <li class="list-group-item">
        <div class="row">
            <div class="col-lg-10">
                <b>Total: </b>{{ \Cart::getTotal() }} USD / {{ \Cart::getTotal() * 35.41 }} Bs
            </div>
            <div class="col-lg-2">
                <form action="{{ route('cart.clear') }}" method="POST">
                    {{ csrf_field() }}
                    <button class="btn btn-secondary btn-sm"><i class="fa fa-trash"></i></button>
                </form>
            </div>
        </div>
    </li>
    <br>
    <div class="row" style="margin: 0px;">
        <a class="btn btn-info btn-sm btn-block" href="{{ route('cart.index') }}">
            VERCARRITO <i class="fa fa-arrow-right"></i>
        </a>
    </div>
@else
    <li class="list-group-item">Tu carrito esta vacío</li>
@endif
