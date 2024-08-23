<?php $__env->startSection('css'); ?>
  <link rel="stylesheet" href="<?php echo e(url('styles/owl/owl.carousel.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(url('styles/owl/owl.theme.default.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(url('styles/product_detail.css')); ?>" />
  <link rel="stylesheet" href="<?php echo e(url('styles/blog.css')); ?>" />
  <link rel="stylesheet" href="<?php echo e(url('styles/brand_listing.css')); ?>" />
  <link rel="stylesheet" href="<?php echo e(url('styles/product-listing.css')); ?>" />
  <link rel="stylesheet" href="<?php echo e(url('styles/comparison.css')); ?>" />
  <link rel="stylesheet" href="<?php echo e(url('styles/customer_support.css')); ?>" />
  <link rel="stylesheet" href="<?php echo e(url('styles/guides.css')); ?>" />
  <link rel="stylesheet" href="<?php echo e(url('styles/special-category.css')); ?>" />
  <link rel="stylesheet" href="<?php echo e(url('styles/brand_wise_listing_page.css')); ?>" />
  <link rel="stylesheet" href="<?php echo e(url('styles/buyingnew.css')); ?>"> 
  <link rel="stylesheet" href="<?php echo e(url('styles/style.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>


<?php

    $sections->each(function ($section) {

        $functionName = $section['function_ret'];

        if (method_exists(\App\Models\Section::class, $functionName)) {

          if ( $section['function_ret'] == 'tagSection') {

              $name = $section['image_type'];

              $sectionInstance = new \App\Models\Section(); 

              $result = $sectionInstance->$functionName($name);

          }
          elseif ( $section['function_ret'] == 'newsSection') {

                $sectionInstance = new \App\Models\Section(); 

                $result = $sectionInstance->$functionName();

            }
          else {

              $id = $section['id'];

              $sectionInstance = new \App\Models\Section(); // Create an instance of Section

              $result = $sectionInstance->$functionName($id); // Call the method dynamically

          }

            echo $result;

        }

    });

?>


  
<?php $__env->stopSection(); ?>

  
  
  

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/luluconnect/resources/views/welcome.blade.php ENDPATH**/ ?>