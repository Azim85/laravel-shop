<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{config('app.name')}}</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{ asset('public/font-awesome-4.7.0/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('public/bootstrap-4.4.1/dist/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('public/style/style.css') }}">
</head>
<body>
    

<div class="super-container">
    <div class="main_layout">
        <div class="row all">
            <div class=" col-sm-12 col-md-3 col-lg-2 left">
                <div class="logo">
                    <h1>Eshop</h1>
                </div>
                <div class="navigation">
                    <a href="{{route('home')}}"><i class="fa fa-home" aria-hidden="true"></i><span>  Home</span></a>
                    <!-- <a href="#" class="search"><i class="fa fa-search" aria-hidden="true"></i><span>  Search</span></a> -->
                    <!-- @yield('search-button') -->
                    <a href="{{route('cart')}}"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span> Cart</span></a>
                </div>
            </div>
            <div class="col-sm-12 col-md-9 col-lg-10 right">
            @if (\Request::is('/'))  
                <!-- Search -->
                <div class="row search_row">
                    <div class="searches col-12">
                        <form action="{{route('home')}}" id="header_search_form" method="get"class="form_search">
                            <input type="text" name="search" class="search_input form-control input_text" placeholder="Поиск...">
                            <button type="button" class="header_search_button form-control submit_button btn btn-success" value="Search">Search</button>
                            
                        </form>
                    </div>    
                </div>
               @endif
                <!-- <div class="row search_row">
                    <div class="searches col-12">
                        <form action="/" class="form_search">
                            <input type="text" class="form-control input_text">
                            <input type="submit" value="Search" class="form-control submit_button btn btn-success">
                        </form>
                    </div>    
                </div> -->
                <!-- @yield('search') -->
                <div class="row changable_content">

                    <!-- Changable contents will appear here -->
                    @yield('main')
                     <!-- ========================================== -->
                    <!-- <div class="card products" style="width: 18rem;">
                        <img class="card-img-top" src="images/4.jpg" alt="Card image cap"> -->
                        <!-- <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-outline-light">Go somewhere</a>
                        </div> -->
                    <!-- </div> -->
                    <!-- ========================================== -->
                   
               </div>
               <div class="nothing_found text-center" style="color:white">
       
                </div>
               <div class="row more">
                   @yield('more')
               </div>

            </div>
            
            <div class="row footer">
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="mailform">
                        <input type="text" class="form-control textemail" placeholder="Your email">
                        <input type="button" value="send" class="form-control submitbutton sendbutton"><br>
                    </div>
                    <div class="result"></div>

                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="mediaform">
                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-google" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="footer-navigation">
                        <a href="{{route('home')}}"><i class="fa fa-home" aria-hidden="true"></i><span>Home</span></a>
                        <!-- <a href="#" class="search"><i class="fa fa-search" aria-hidden="true"></i><span>Search</span></a> -->
                        <!-- @yield('search-button') -->
                        <a href="{{route('cart')}}"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span>Cart</span></a>
                    </div>
                </div>
            </div>
            <div class="inc row">
                <span class="global"><i class="fa fa-globe" aria-hidden="true"></i></span><span> Choose your language</span>
                <span><a href="#">English</a></span>
                <span><a href="#">Russian</a></span>
                <span><a href="#">More-></a></span>
            </div>
        </div>
    </div>
</div>




    <script src="{{ asset('public/js/jquery-3.4.1.js') }}"></script>
    <script src="{{ asset('public/js/jQueryRotate.js') }}"></script>
    <script src="{{ asset('public/bootstrap-4.4.1/dist/js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('public/bootstrap-4.4.1/dist/js/bootstrap.js') }}"></script>
    <script src="{{ asset('public/js/main.js') }}"></script>
    <script >
        $(document).ready(function(){
            $('.sendbutton').click(function(){
            BaseRecord.mailer($('.textemail').val());
            });
        });

    </script>
    @yield('js')
</body>
</html>
