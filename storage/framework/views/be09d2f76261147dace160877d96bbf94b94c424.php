
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
        <li><a href="#">Home</a><span><img src="./assets/group-39-8ME.png" alt=""></span></li>
        <li style="padding-left: 10px;">Product Comparison</li>
      </ul>
    </div> 
  </div>

    <!-- <div class="banner">
        <img class="banner-img" src='assets/asus.png' alt="Banner Image"/>
        <div class="banner-content">
            <h1>Top Smartphones</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum corrupti quae sed hic</p>
            <button>Explore More</button>
        </div>
    </div> -->

    <!-- Comparison -->
    <section class="container comparison-section">
      <div class="comp-table-container" id="source">
        <table class="comparison-table"  >
          <thead>
            <tr class="first-row">
              <td class="title-td comp-bold-head">
                  <img src="./assets/compare_icon.png" alt="compare" width="40" height="40"/>
                  <h4>Compare</h4>
                  <h4>products</h4>
              </td>

              <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <?php
                    $reduced_price = ($product->price * $product->discount / 100);
                    $discounted_price = $product->price - $reduced_price;
             ?>

              <td class="content-td">
                <div class="comp-product-card">
                  <div class="cross-container"><i class="bi bi-x-lg"></i></div>
                  <div class="comp-card-image">
                      
                           
                      <img src="<?php echo e(url('img/articles/products/'.$product->images->first()->image)); ?>" alt=""/>
                  </div>
                  <div class="row comp-content">
                      <div class="col">
                      <!-- <p class="comp-price">&#8377;<?php echo e(number_format($discounted_price, 0, '.', ',')); ?></p> -->
                      </div>
                  </div>
                  <p class="p-id"><?php echo e($product->name); ?></p>
                  <!--<p class="comp-name"><?php echo e($product->name); ?></p>-->
                </div>
              </td>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </tr>
          </thead>
          <tbody>
            
    
            <tr>
              <td class="comp-bold-head">
                <p >Key Features</p>
              </td>
            </tr>

            <!-- <tr>
              <td>
                <p class="feature-key">Original Price</p>
              </td>
                  <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <td>
                    <p><?php echo e($product->price); ?></p>
                  </td>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tr>
            <tr>
              <td>
                <p class="feature-key">Offer Price</p>
              </td>
                  <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <?php
                    $reduced_price = ($product->price * $product->discount / 100);
                    $discounted_price = $product->price - $reduced_price;
                ?>
                  <td>
                    <p><?php echo e(number_format($discounted_price, 0, '.', ',')); ?></p>
                  </td>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tr> -->

            

            <tr>
              <td>
                <p class="feature-key">Brand</p>
              </td>
                  <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <?php
                  $brands = DB::table('brands')->where('id',$product->brand)->get();
                  ?>
                  <td>
                    <p>
                      <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <?php echo e($brand->name); ?>

                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </p>
                  </td>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tr>

            <?php $__currentLoopData = $specifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $specification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
              <td>
                <p class="feature-key"><?php echo e($specification->name); ?></p>
              </td>
              <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <?php
                  $product_specs = DB::table('product_specs')->where('spec_id',$specification->id)->where('product_id',$product->id)->get();
              ?>
                
                  <td>
                    <p>
                    <?php $__currentLoopData = $product_specs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product_spec): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo e($product_spec->spec_value); ?>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </p>
                  </td>
                
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tr>
            
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <tr>
              <td>
                <p class="feature-key">Purchase Link</p>
              </td>
                  <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <td>
                    <div class="">
                      <div class="col-md-10 col-sm-12">
                        <button class="cart-btn"><a href="<?php echo e($product['ext_link']); ?>" target="_blank"><img src="<?php echo e(url('assets/shopping-cart.png')); ?>" width="20"/>&nbsp;&nbsp;&nbsp;Buy Online</a></button>
                      </div>
                    </div>
                  </td>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tr>
          </tbody>
        </table>
      </div>
      
    </section>

  <script src="<?php echo e(url('js/jquery.min.js')); ?>"></script>
  <script src="<?php echo e(url('js/owl/owl.carousel.min.js')); ?>"></script>
  <script src="<?php echo e(url('js/product_detail.js')); ?>"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
  <!-- Owl-carousel JavaScript -->
  <script src="./js/index.js"></script>

  <script>
    let dropdowns = document.querySelectorAll('.dropdown-toggle')
    dropdowns.forEach((dd) => {
      dd.addEventListener('click', function (e) {
        var el = this.nextElementSibling
        el.style.display = el.style.display === 'block' ? 'none' : 'block'
      })
    })
  </script>

<script>
  $(document).ready(function() {
    $(".arrow-left").on("click", function() {
      $(".comp-table-container").animate({scrollLeft: "-=200px"}, "slow");
    });

    $(".arrow-right").on("click", function() {
      $(".comp-table-container").animate({scrollLeft: "+=200px"}, "slow");
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
    <!--Dragging-->
    <script>
      var isDragging = false;
      var startPosition = 0;
    
      var scrollContainer = document.getElementById('source');
    
      scrollContainer.addEventListener('mousedown', function (e) {
        isDragging = true;
        startPosition = e.clientX;
      });
    
      document.addEventListener('mouseup', function () {
        isDragging = false;
      });
    
      document.addEventListener('mousemove', function (e) {
        if (isDragging) {
          var delta = e.clientX - startPosition;
          scrollContainer.scrollLeft -= delta;
          startPosition = e.clientX;
        }
      });
    </script>
        <?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/luluconnect/resources/views/comparison.blade.php ENDPATH**/ ?>