
@extends('shop.layout')

@section('main')            
                    <div class="row">
                         @if ($errors->any())
                            @component('shop.components.alert')
                                @slot('type')
                                    danger
                                @endslot
                                @foreach ($errors->all() as $error)
                                    {{ $error }}<br>
                                @endforeach
                            @endcomponent
                        @endif
                    </div>
                    <!-- ========================================== -->
                    <div class="product-box row">
                        <!-- @php
                        print_r($product);
                        @endphp -->
                        <div class="card product" style="width: 25rem;">
                            <img class="card-img-top productimg" src="{{ asset('public/images/img/'. $product->image) }}" alt="Card image cap">
                        </div>
                   
                        <div class="card product-info" style="width: 25rem;">
                            <div class="price"><span>${{$product->price}}</span></div>
                            <div class="product-name"><h2>{{$product->name}}</h2></div>
                            <div class="rating">
                                <div class="stars">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                                <div class="review">
                                    <span>Write a Review</span>
                                </div>
                            </div>
                            <div class="stock"><div class="mark"></div><span> In Stock</span></div>
                            <div class="size">
                                <span>Choose your size</span>
                                <ul>
                                    <li>
                                        <input type="radio" id="radio_1" name="product_radio" class="regular_radio">
                                        <label for="radio_1">XS</label>
                                    </li>
                                    <li>
                                        <input type="radio" id="radio_2" name="product_radio" class="regular_radio">
                                        <label for="radio_2">S</label>
                                    </li>
                                    <li>
                                        <input type="radio" id="radio_3" name="product_radio" class="regular_radio">
                                        <label for="radio_3">M</label>
                                    </li>
                                    <li>
                                        <input type="radio" id="radio_4" name="product_radio" class="regular_radio">
                                        <label for="radio_4">XL</label>
                                    </li>
                                    <li>
                                        <input type="radio" id="radio_5" name="product_radio" class="regular_radio">
                                        <label for="radio_5">XXL</label>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-description">
                                <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium deserunt laborum iusto voluptatem ratione tenetur consectetur sequi neque dolorum, saepe molestias doloribus sit eius maiores.
                                </p>
                            </div>
                            <div class="cart-button">
                                <a href="#">Add to cart</a>
                            </div>
                            <form name="form_tocart" method="post" action="{{route('tocart')}}" style="display:none;">
                                            {{ csrf_field() }}
                                <input type="hidden" name="name" value="{{$product->name}}">
                                <input type="hidden" name="price" value="{{$product->price}}">
                                <input type="hidden" name="image" value="{{$product->image}}">
                            </form>
                        </div>
                        
                    </div> 
                    <!-- ========================================== -->
                    
@endsection               

@section('js')
    <script>
        $(document).ready(function(){
            $('.cart-button').click(function(){
                form_tocart.submit();
                return false;
            });
        });
    </script>
@endsection
