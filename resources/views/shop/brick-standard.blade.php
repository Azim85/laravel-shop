 @foreach($products as $product)
    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-4">
        <div class="card products" style="width: 22rem;">
            <a href="{{route('product', [$product->id])}}"><img class="card-img-top" src="{{ asset('public/images/img/'. $product->image) }}" alt="Card image cap"></a>
                <!-- <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-outline-light">Go somewhere</a>
                </div> -->
        </div>
        </div>
    </div>    
    @endforeach    