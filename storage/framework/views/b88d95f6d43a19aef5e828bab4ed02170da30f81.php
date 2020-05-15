<?php $__env->startSection('main'); ?> 
                    <div class="cart-items">

                    <!-- ========================================== -->
                         <?php
                            //print_r($carts);
                         ?>

                         <?php echo $__env->make('shop.cart-standard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                       
                    <!-- ========================================== -->                   
                   </div>
                        <div class="row clear">
                            <div class="clear-all-button">
                                <a href="#">Clear all cart</a>
                            </div>
                        </div>
                        <form action="<?php echo e(route('clearall')); ?>" method="post" name="form_clearall" style="display:none">
                                     <?php echo e(csrf_field()); ?>

                        </form>
                
                
            
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<!-- <script src="<?php echo e(asset('public/js/main.js')); ?>"></script> -->
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('shop.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/laravel-shop/resources/views/shop/cart.blade.php ENDPATH**/ ?>