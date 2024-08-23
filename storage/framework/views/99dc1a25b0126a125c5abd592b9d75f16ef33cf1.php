
<?php $__env->startSection('title','Lulu Connect || Product Detail'); ?>
<?php $__env->startSection('content'); ?>

<section class="product-detail-section container" style="padding-top:0px;">
      <div class="row gx-2">
        <div class="d-none d-lg-block col-lg-1 col-md-1 col-sm-12">
          <div class="preview-imgs">
            <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php $activeClass = $image['default_status'] === 'Y' ? 'selected-preview' : ''; ?>
            <div class="img-box <?php echo e($activeClass); ?>">
              <img class="prev-img " src="<?php echo e(url('img/articles/products/'.$image['image'])); ?>" alt="preview"/>
            </div>
            <br/>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12"><br/>
          <div class="wishlist-icon"><i id="heart-icon" class="bi bi"></i></div><br/>
          <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($image['default_status'] == 'Y'): ?>
            <img id="main-preview" src="<?php echo e(url('img/articles/products/'.$image['image'])); ?>" alt="product preview" class="img-fluid"/>
            <?php endif; ?>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <div class="row preview-imgs d-lg-none ">
            <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <?php if($image['default_status'] == 'N'): ?>
              <div class="col-3">
                <div class="img-box small selected-preview">
                  <img class="prev-img" src="<?php echo e(url('img/articles/products/'.$image['image'])); ?>" alt="preview"/>
                </div>
              </div>
              <img id="main-preview" src="" alt="product preview" class="img-fluid"/>
              <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
        </div>
        <div class="col-lg-7 col-md-6 col-sm-12" style="padding: 30px !important;">
          <p class="product-title"><?php echo e($products['name']); ?></p>
          <div class="row">
            <?php if($brand && $brand->name): ?>
            <div class="col-auto">
              <p class="brand-name">Brand : <?php echo e($brand->name); ?></p>
            </div>
            <?php endif; ?>
          </div>
          <?php
          $reduced_price = ($products->price * $products->discount / 100);
          $discounted_price = $products->price - $reduced_price;
          ?>
          <div class="row">
            <div class="col-auto">
              <p class="product-price">&#8377; <?php echo e(number_format($discounted_price, 0, '.', ',')); ?></p>
              <p class="brand-name">Incl. All Taxes</p>
            </div>
            <?php if($products->discount != 0 || $products->discount != ''): ?>
              <div class="col-auto">
                <p class="product-price strike">&#8377;<?php echo e(number_format($products->price, 0, '.', ',')); ?></p>

                <p class="brand-name">You saved &#8377;<?php echo e(number_format($reduced_price, 0, '.', ',')); ?></p>
              </div><span class="offer-capsule"><?php echo e($products['discount']); ?>% off</span>
            <?php endif; ?>


            <div class="col-md-3 offset-md-2" style="display:none;">        
                  <div class="add-container">
                    <p style="padding-top: 12px;">Quantity</p>
                    <button id="decrement" class="plus-minus-btn">-</button>
                    <span id="number">1</span> 
                    <button id="increment" class="plus-minus-btn">+</button>
                  </div>
            </div>
          </div>
          <hr class="horizontal"/>

          <?php echo $products['short_description']; ?>

          <!-- <div class="row">
            <div class="col-auto">
              <p><b>Delivery at:</b> Edappally, Eranakulam, 658412</p>
            </div>
          </div>
          </br> -->

          <?php if(count($productspecs) > 0): ?>
          <div class="row">
            <div class="extra-detail-box">
            <div class="row gy-3">
                <div class="col-lg-12">
                  <b>Product Specifications & Informations</b>
                  <br/>
                  <table class="spec-table">
                    <?php $__currentLoopData = $productspecs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $productspec): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr><td><?php echo e($productspec->spec); ?></td><td> <?php echo e($productspec->spec_value); ?></td></tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <?php endif; ?>
        </div>
      </div>
    </section>  
    <br/>


    <?php echo $productrel; ?>

    
    <!-- Similar Product -->
    
    <!-- top Product -->
 <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="<?php echo e(url('js/jquery.min.js')); ?>"></script>
<script src="<?php echo e(url('js/owl/owl.carousel.min.js')); ?>"></script>
  <script src="<?php echo e(url('js/product_detail.js')); ?>"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

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

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home4/maichavx/public_html/lulu_demo/resources/views/productdetail.blade.php ENDPATH**/ ?>