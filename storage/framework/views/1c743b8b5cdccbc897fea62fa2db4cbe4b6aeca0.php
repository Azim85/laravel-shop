<?php $__currentLoopData = $carts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="trash-box">
        <img class="card-img-top" src="<?php echo e(asset('public/images/img/'.$cart->image)); ?>" alt="Card image cap">
        <span class="product_name"><p><?php echo e($cart->name); ?></p></span>
        <span class="product_price"><p><?php echo e($cart->price); ?></p></span>
        <div class="trash-button">
            <a href="#" class="btn btn-danger listbuttonremove" id="<?php echo e($cart->id); ?>"><i class="fa fa-trash"></i></a>
        </div>
    </div>
    <hr/>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php /**PATH /var/www/html/laravel-shop/resources/views/shop/cart-standard.blade.php ENDPATH**/ ?>