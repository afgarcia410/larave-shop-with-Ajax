<?php $__env->startSection('content'); ?>
<!-- Home Section -->
    <div id="home">
        <div class="container text-center">
            <nav id="menu" data-toggle="offcanvas" data-target=".navmenu">
                <span class="fa fa-bars"></span>
            </nav>
            <div class="content">
                <h4>Welcome.Take a look of our products</h4>
                <hr>
                <div class="header-text btn">
                    <h1><span id="head-title"></span></h1>
                </div>
            </div>
            
<div style="width: 100%; height: auto; margin: 50px 0; display: flex; flex-wrap: wrap; justify-content: center;">
     <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div style="width: 300px; height: auto; border: 1px solid black; margin: 20px;">
            <div style="width: 100%; height: 280px; background-image: url('assets/products/<?php echo e($product->image); ?>'); 
                        background-size: cover; background-position: center center;"></div>
            <div style="width: 100%; height: auto;">
                <a href="product/<?php echo e($product->id); ?>" style="text-align: center; font-weight: bold; font-style: normal; color: inherit;"><h3 ><?php echo e($product->name); ?></h3></a>
                <h4 style="display: flex; justify-content: flex-start; padding: 10px; padding-top: 30px;"> <?php echo e($product->price); ?>€</h4>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <?php if(session('message')): ?>
        <div class="alert alert-success myalert"><?php echo e(session('message')); ?></div>
    <?php endif; ?>
    <!-- Services Section -->
    <div id="services">
        <div class="container text-center">

            <div class="space"></div>

            
            <?php if(auth()->guard()->check()): ?>
                <div class="text-center" style="margin: 30px 0;">
                   
                </div>
            <?php endif; ?>
            <a href="#works" class="down-btn page-scroll">
                <span class="fa fa-angle-down"></span>
            </a>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/laravel/shopAjax/resources/views/welcome.blade.php ENDPATH**/ ?>