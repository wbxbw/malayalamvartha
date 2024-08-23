<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title><?php echo e($contents['bg_title']); ?></title>
  <meta name="description" content="<?php echo e($contents['bg_description']); ?>">
  <meta name="keywords" content="<?php echo e($contents['bg_keywords']); ?>">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter%3A400%2C500%2C600%2C700" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro%3A400%2C500%2C600%2C700" />
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
  <link rel="stylesheet" href="<?php echo e(url('styles/owl/owl.carousel.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(url('styles/owl/owl.theme.default.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(url('styles/product_detail.css')); ?>" />
  <link rel="stylesheet" href="<?php echo e(url('styles/guides.css')); ?>" />
  <link rel="stylesheet" href="<?php echo e(url('styles/style.css')); ?>">

</head>
<body>


<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="bread-crumbs">
    <div class="container">
      <ul>
        <li><a href="#">Lulu Connect</a><span><img src="<?php echo e(url('assets/group-39-8ME.png')); ?>" alt=""></span></li>
        <li><a href="#">Buying guides</a><span><img src="<?php echo e(url('assets/group-39-8ME.png')); ?>" alt=""></span></li>
        <li style="padding-left: 10px;"><?php echo e($category['name']); ?></li>
      </ul>
    </div>
  </div>

  <!-- <div class="guid-banner">
    <img src="assets/asus.png"/>
    <h1>Buying Guides</h1>
    <div class="yellow-vertical mt-1"></div>
    <h4>Brand Guides</h4>
  </div> -->

  <br/><br/>
  <!-- <div class="container">
    <div class="row">
      <p class="main-heading">Laptops that streamline your workflow</p>
     <p>Laptops are compact enough to take with you, yet powerful enough to run heavy applications. With so many options in the market, it becomes difficult to choose the one with the right specification. Here is our handy buying guide to help you understand Laptop specifications and features better.</p>
    </div>
  </div> -->
  <br/> 
  <div class="container spec-sections">
    <div class="row">
      <p class="main-heading">What are the Factors to Consider Before Buying a <?php echo e($category['name']); ?> ?</p>
      <ul>
        <?php $__currentLoopData = $specifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $specification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><a href="#section<?php echo e($specification['id']); ?>" class="section-link"><?php echo e($specification['name']); ?></a></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
    </div>
  </div>
  <?php $__currentLoopData = $specifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $specification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <br/>
    <div class="container" id="section<?php echo e($specification['id']); ?>">
      <div class="row">
        <p class="main-heading"><?php echo e($specification['name']); ?></p>
      </div>
      <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <?php $__currentLoopData = $specification->specVlues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $specVlue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li class="nav-item" role="presentation">
          <button class="nav-link <?php echo e($loop->first ? 'active' : ''); ?>" id="pills-<?php echo e($specVlue->id); ?>-tab" data-bs-toggle="pill" data-bs-target="#pills-<?php echo e($specVlue->id); ?>" type="button" role="tab" aria-controls="pills-<?php echo e($specVlue->id); ?>" aria-selected="<?php echo e($loop->first ? 'true' : 'false'); ?>"><?php echo e($specVlue->name); ?></button>
        </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </ul><br/>
      <div class="tab-content" id="pills-tabContent">
        <?php $__currentLoopData = $specification->specVlues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $specVlue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="tab-pane fade <?php echo e($loop->first ? 'show active' : ''); ?>" id="pills-<?php echo e($specVlue->id); ?>" role="tabpanel" aria-labelledby="pills-<?php echo e($specVlue->id); ?>-tab">
          <?php echo $specVlue->bg_description; ?>

          </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
    </div>
    <br/><br/>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



  <br/><br/>
  
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

<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/luluconnect/resources/views/productbuyingdetail.blade.php ENDPATH**/ ?>