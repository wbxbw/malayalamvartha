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

<div class="bread-crumbs">
    <div class="container">
      <ul>
        <li><a href="#">Lulu Connect</a><span><img src="./assets/group-39-8ME.png" alt=""></span></li>
        <li><a href="#">Buying guides</a><span><img src="./assets/group-39-8ME.png" alt=""></span></li>
      </ul>
    </div>
</div>

<div class="guid-banner">
    <img src="assets/asus.png"/>
    <h1>Buying Guides</h1>
    <div class="yellow-vertical mt-1"></div>
    <h4>Brand Guides</h4>
</div>

<br/><br/>
<div class="container ">
    <div class="buying_productCard py-5">
       <div class="row">

        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-lg-3 col-md-4 col-sm-6 col-6 ">
          <a href="buying-guide/<?php echo e($category['link']); ?>">
            <div class="card">
                <div class="card-body">
                  <img class="img-fluid mx-auto d-block" src="<?php echo e(url('wx.images/categories/'.$category['img'])); ?>" alt="<?php echo e($category['name']); ?>-Bguide-Image">
                  <div class=" text-center tittle-head">
                    <h3 class="pro_tittle"><?php echo e($category['name']); ?></h3>
                    <button><a href="buying-guide/<?php echo e($category['link']); ?>">Learn More</a></button>
                  </div>
                </div>
              </div>
          </a>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       </div>
    </div>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="./js/jquery.min.js"></script>
<script src="./js/owl.carousel.min.js"></script>
  <script src="./js/product_detail.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const links = document.querySelectorAll(".section-link");

            links.forEach(link => {
                link.addEventListener("click", function(e) {
                    e.preventDefault();
                    links.forEach(l => l.classList.remove("active"));
                    this.classList.add("active");
                    const targetId = this.getAttribute("href").substring(1);
                    const targetSection = document.getElementById(targetId);
                    if (targetSection) {
                        targetSection.scrollIntoView({ behavior: "smooth" });
                    }
                });
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

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/luluconnect/resources/views/guides.blade.php ENDPATH**/ ?>