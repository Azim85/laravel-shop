
@extends('shop.layout')

<!-- @section('search')
    <div class="row search_row">
                    <div class="searches col-12">
                        <form action="/" class="form_search">
                            <input type="text" class="form-control input_text">
                            <input type="submit" value="Search" class="form-control submit_button btn btn-success">
                        </form>
                    </div>    
                </div>
@endsection -->
<!-- @section('search-button')
<a href="#" class="search"><i class="fa fa-search" aria-hidden="true"></i><span>  Search</span></a>
@endsection -->

@section('main')

    <!-- ========================================== -->

@php
//print_r($products);
@endphp

   @include('shop.brick-standard')
   
    <!-- ========================================== -->
    
@endsection


<!-- @section('search-button')
<a href="#" class="search"><i class="fa fa-search" aria-hidden="true"></i><span>Search</span></a>
@endsection -->
@section('more')
        <div class="col-sm-12 col-md-12 col-lg-12 text-center">
            <div class="btn btn-outline-light load_more ml-auto mr-auto"><a href="#" class="link_again" >more</a></div>
        </div>    
@endsection
@section('js')
<!-- <script src="{{ asset('public/js/main.js') }}"></script> -->
    <script>
        $(document).ready(function(){
            // $('.products').css('opacity', '0.7')
            // .mouseover(function(){
            //     $(this).css('opacity', '1');
            // })
            // .mouseout(function(){
            //     $(this).css('opacity', '0.7');
            // })
            $('.load_more').click(function(){
                BaseRecord.top9 = 0;
                BaseRecord.more();
                return false;
            });

            $('.header_search_button').click(function(){
                BaseRecord.search($('.search_input').val());
                return false;
            });

            
        });
    </script>
@endsection