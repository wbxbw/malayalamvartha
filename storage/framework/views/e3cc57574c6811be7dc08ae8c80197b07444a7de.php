
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
  <section class="container">
    <div class="row gx-4">
      <div class="col-md-12 col-sm-12">
        <div class="row">
            <h1 class="title1"><?php echo e($blog['name']); ?></h1>
            <small class="author text-muted">Published date : <?php echo e(date('d/m/Y', strtotime($blog['updated_at']))); ?></small>
            <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <img class="blog-banner img-fluid" src="<?php echo e(url('wx.images/blogs/articles/'.$image->image)); ?>" alt="">
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class="row">
          <?php echo $blog['long_description']; ?>

        </div>
      </div>
    </div>
  </section>

    <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="./js/jquery.min.js"></script>
  <script src="./js/owl/owl.carousel.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
  <!-- Owl-carousel JavaScript -->
  <script src="./js/index.js"></script>
<!--script for Menu item dropdown-->
  <script>
    let dropdowns = document.querySelectorAll('.dropdown-toggle')
    dropdowns.forEach((dd) => {
      dd.addEventListener('click', function (e) {
        var el = this.nextElementSibling
        el.style.display = el.style.display === 'block' ? 'none' : 'block'
      })
    })
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
      <!--Dropdown single-->
  <script>
    /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
    var dropdown = document.getElementsByClassName("dropdown-btn");
    var i;

    for (i = 0; i < dropdown.length; i++) {
      dropdown[i].addEventListener("click", function () {
        this.classList.toggle("active");
        var dropdownContent = this.nextElementSibling;
        if (dropdownContent.style.display === "block") {
          dropdownContent.style.display = "none";
        } else {
          dropdownContent.style.display = "block";
        }
      });
    }
  </script>
        <?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/luluconnect/resources/views/blog.blade.php ENDPATH**/ ?>