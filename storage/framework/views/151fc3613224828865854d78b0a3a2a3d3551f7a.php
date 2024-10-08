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

<div class="container">
<div class="bread-crumbs">
        <div class="container">
            <ul>
                <li><a href="#">Categories / <?php echo e($category->name); ?></a></li>
            </ul>
        </div>
    </div>
</div>
    

<?php

    $sections->each(function ($section) {

        $functionName = $section['function_ret'];

        if (method_exists(\App\Models\Section::class, $functionName)) {

            if ( $section['function_ret'] == 'brandList') {

                $id = $section['id'];

                $cid = $section['category_id'];

                $sectionInstance = new \App\Models\Section(); 

                $result = $sectionInstance->$functionName($id,$cid);

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



    
   
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="./js/jquery.min.js"></script>
<script src="./js/owl/owl.carousel.min.js"></script>
<script src="./js/product_detail.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
crossorigin="anonymous"></script>
<!-- Owl-carousel JavaScript -->
<script>
$(document).ready(function () {
    $("#trending").owlCarousel({
        items: 3, // Change the number of items displayed as per your design
        autoplay: true,
        rewind: true,
        margin: 20,
        responsiveClass: true,
        autoHeight: true,
        autoplayTimeout: 7000,
        smartSpeed: 800,
        nav: true,
        responsive: {
            0: {
                items: 2
            },
            600: {
                items: 2
            },
            620: {
                items: 2
            },
            920: {
                items: 3
            },
            980: {
                items: 4
            },
            1000: {
                items: 4
            },
            1040: {
                items: 4
            },
            1080: {
                items: 4
            }
        }
    });
    $("#tv1").owlCarousel({
        items: 3, // Change the number of items displayed as per your design
        autoplay: true,
        rewind: true,
        margin: 20,
        responsiveClass: true,
        autoHeight: true,
        autoplayTimeout: 7000,
        smartSpeed: 800,
        nav: true,
        responsive: {
            0: {
                items: 2
            },
            600: {
                items: 2
            },
            620: {
                items: 2
            },
            920: {
                items: 3
            },
            980: {
                items: 2
            },
            1000: {
                items: 4
            },
            1040: {
                items: 4
            },
            1080: {
                items: 4
            }
        }
    });

});
</script>
<!--Script for mobile sidenav-->
<script>
function openNav1() {
document.getElementById("mySidenav1").style.width = "250px";
}

function closeNav1() {
document.getElementById("mySidenav1").style.width = "0";
}
</script>
<!--Script for desktop sidenav-->
<script>
function openNav() {
document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
document.getElementById("mySidenav").style.width = "0";
}
</script>
<?php $__env->stopSection(); ?>

  
  
  

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/luluconnect/resources/views/category.blade.php ENDPATH**/ ?>