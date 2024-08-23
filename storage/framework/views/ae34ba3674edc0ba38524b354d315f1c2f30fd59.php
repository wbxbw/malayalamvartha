<?php $__env->startSection('title','Lulu Connect || Category Listing'); ?>
<?php $__env->startSection('content'); ?>
<div class="bread-crumbs">
    <div class="container">
        <ul>
            <li><a href="#"><?php echo e($category['name']); ?></a></li>
            <!-- <li>LED TVs</li> -->
        </ul>
    </div>
</div>

<section>
    <div class="container">
        <h1><?php echo e($category['name']); ?></h1>
    </div>
    <div class="container">
       
        <p class="font-size-p"><?php echo e($category['meta_description']); ?></p>
    </div>
</section>
<!--<section>-->
<!--    <div class="container">-->
<!--        <h4><b>Latest Cameras For You</b></h4>-->
<!--        <div class="row gy-5">-->
<!--            <div class="col-6">-->
<!--                <div class="card">-->
<!--                    <img src="assets/camera-1.webp">-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-6">-->
<!--                <div class="card">-->
<!--                    <img src="assets/camera-2.webp">-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->

<section>
    <div class="container">
       <?php $__currentLoopData = $specifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $spec): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php
$specval = DB::table('spec_vlues')->where('specification_id',$spec->id)->get();
?>

        <h4><b><?php echo e($spec->name); ?></b></h4>
        <div class="row gy-5">
            
             <?php $__currentLoopData = $specval; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <div class="col-md-3 col-6"> <!-- col-6 for small screens -->
                <div class="card">
                    <img class="img-fluid" src="<?php echo e(asset('storage/'.$val->image)); ?>">
                       <div class="card-footer">
                    <?php echo e($val->name); ?>

                   </div>
                </div>
            </div>
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
             </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</section>


<!-- Top Trending -->


 
<section>
    <div class="container">
        <h1></h1>
    </div>
    <div class="container">
        <h4>Which type of camera is best?</h4>
        <p class="font-size-p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam in
            corporis nesciunt nisi. Veniam illum nostrum porro doloremque maxime dolore blanditiis
            est suscipit magnam sapiente? Ipsum repudiandae aliquid dolor quis!</p>
    </div>
</section>
<section>
    <div class="container">
        <h1></h1>
    </div>
    <div class="container">
        <h4>Shop Cameras Online at the Best Prices in India at Croma</h4>
        <p class="font-size-p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam in
            corporis nesciunt nisi. Veniam illum nostrum porro doloremque maxime dolore blanditiis
            est suscipit magnam sapiente? Ipsum repudiandae aliquid dolor quis!</p>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home4/maichavx/public_html/lulu_demo/resources/views/categoryDetails.blade.php ENDPATH**/ ?>