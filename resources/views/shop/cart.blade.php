@extends('shop.layout')

@section('main') 
                    <div class="cart-items">

                    <!-- ========================================== -->
                         @php
                            //print_r($carts);
                         @endphp

                         @include('shop.cart-standard')
                       
                    <!-- ========================================== -->                   
                   </div>
                        <div class="row clear">
                            <div class="clear-all-button">
                                <a href="#">Clear all cart</a>
                            </div>
                        </div>
                        <form action="{{route('clearall')}}" method="post" name="form_clearall" style="display:none">
                                     {{ csrf_field() }}
                        </form>
                
                
            
@endsection
@section('js')
<!-- <script src="{{ asset('public/js/main.js') }}"></script> -->
    <script>
        $(document).ready(function(){
            $('.clear-all-button').click(function(){
                //form_clearall.submit();
                BaseRecord.clearall();
                return false;
            });
            $('.listbuttonremove').click(function(){
                BaseRecord.removeone($(this).attr('id'));
                return false;
            });

            // $('.listbuttonremove').click(function(){
            //     form_delete_one.submit();
            //     return false;
            // });
        });
    </script>
@endsection