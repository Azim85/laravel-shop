@foreach($carts as $cart)
    <div class="trash-box">
        <img class="card-img-top" src="{{ asset('public/images/img/'.$cart->image) }}" alt="Card image cap">
        <span class="product_name"><p>{{$cart->name}}</p></span>
        <span class="product_price"><p>{{$cart->price}}</p></span>
        <div class="trash-button">
            <a href="#" class="btn btn-danger listbuttonremove" id="{{$cart->id}}"><i class="fa fa-trash"></i></a>
        </div>
    </div>
    <hr/>
@endforeach
    