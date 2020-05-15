<!-- <?php $__env->startSection('search'); ?>
    <div class="row search_row">
                    <div class="searches col-12">
                        <form action="/" class="form_search">
                            <input type="text" class="form-control input_text">
                            <input type="submit" value="Search" class="form-control submit_button btn btn-success">
                        </form>
                    </div>    
                </div>
<?php $__env->stopSection(); ?> -->
<!-- <?php $__env->startSection('search-button'); ?>
<a href="#" class="search"><i class="fa fa-search" aria-hidden="true"></i><span>  Search</span></a>
<?php $__env->stopSection(); ?> -->

<?php $__env->startSection('main'); ?>

    <!-- ========================================== -->

<?php
//print_r($products);
?>

   <?php echo $__env->make('shop.brick-standard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   
    <!-- ========================================== -->
    
<?php $__env->stopSection(); ?>


<!-- <?php $__env->startSection('search-button'); ?>
<a href="#" class="search"><i class="fa fa-search" aria-hidden="true"></i><span>Search</span></a>
<?php $__env->stopSection(); ?> -->
<?php $__env->startSection('more'); ?>
        <div class="col-sm-12 col-md-12 col-lg-12 text-center">
            <div class="btn btn-outline-light load_more ml-auto mr-auto"><a href="#" class="link_again" >more</a></div>
        </div>    
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<!-- <script src="<?php echo e(asset('public/js/main.js')); ?>"></script> -->
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('shop.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/laravel-shop/resources/views/shop/index.blade.php ENDPATH**/ ?>