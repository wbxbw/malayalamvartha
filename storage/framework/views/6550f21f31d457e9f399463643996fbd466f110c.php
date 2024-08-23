<?php $__env->startSection('content'); ?>
<?php
    $sections->each(function ($section) {
        $functionName = $section['function_ret'];
        if (method_exists(\App\Models\Section::class, $functionName)) {
            $id = $section['id'];
            $result = \App\Models\Section::$functionName($id);
            echo $result;
        }
    });
?>
<!-- <section class="container-fluid p-0">
  <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="carousel-button active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" class="carousel-button"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" class="carousel-button"
        aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active carousel-banner" data-bs-interval="5000">
        <img src="assets/banner_img.jpg" class="carousel-banner-img d-block w-100">
      </div>
      <div class="carousel-item carousel-banner" data-bs-interval="5000">
        <div class="carousel-caption" style="color: aliceblue;">
          <h1>The New Macbook Pro 1</h1>
          <h4>33.78 cm (13.3-inch) | Apple M2 chip | 256GB</h4>
        </div>
        <img src="assets/banner_img.jpg" class="carousel-banner-img d-block w-100">
      </div>
      <div class="carousel-item">
        <div class="carousel-caption" style="color: aliceblue;">
          <h1>The New Macbook Pro 1</h1>
          <h4>33.78 cm (13.3-inch) | Apple M2 chip | 256GB</h4>
        </div>
        <img src="assets/banner_img.jpg" class="carousel-banner-img d-block w-100">
      </div>
    </div>
  </div>
</section> -->




  <section class="container">
    <div class="owl-slider">
      <div id="carousel" class="owl-carousel" style="text-align: center;">
        <div class="item d-grid justify-content-center text-center align-center">
          <div class="product-round">
            <img src="./assets/quality-product-3980367-3297244-1.png" alt="1000X1000">

          </div>
          <p class="text-in">Top Offers</p>
        </div>

        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>




        <a href="<?php echo e(route('home.productlist').'/'.$category->id); ?>" class="item d-grid justify-content-center text-center align-center" style="cursor: pointer">
          <div class="product-round">

            <?php if($category->image): ?>


            <img src="<?php echo e(asset('storage/'.$category->image)); ?>" alt="1000X1000">
            <?php else: ?>
            <img src="./assets/pngimg-1.png" alt="1000X1000">
            <?php endif; ?>
          </div>
          <p class="text-in"><?php echo e($category->name); ?></p>
        </a>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
    </div>

  </section>

  <!-- upcoming offers -->
  <section class="container">
    <div class="row">
      <div class="col">
        <p class="main-heading">Upcoming Offer</p>
      </div>
    </div>
    <div class="row">
      <div class="owl-slider">
        <div id="upcoming-carousel" class="owl-carousel">

          <div class="item">
            <div class="upcoming-card">
              <img src="./assets/Group 263.png" alt="" class="upcoming-img img-fluid" />
            </div>
          </div>
          <div class="item">
            <div class="upcoming-card">
              <img src="./assets/rectangle-31.png" alt="" class="upcoming-img img-fluid" />
            </div>
          </div>
          <div class="item">
            <div class="upcoming-card">
              <img src="./assets/Group 263.png" alt="" class="upcoming-img img-fluid" />
            </div>
          </div>
          <div class="item">
            <div class="upcoming-card">
              <img src="./assets/rectangle-31.png" alt="" class="upcoming-img img-fluid" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Deal of the day Product -->
  <section class="sim-products container">
    <div class="row">
      <div class="col">
        <p class="main-heading">Deal of the day</p>
      </div>
      <div class="col" style="text-align: right;">
        <a href="#" class="product-link">View all</a>
      </div>
    </div>
    <div class="owl-slider">
      <div id="deal-carousel" class="owl-carousel">
        <div class="product-card">
          <div class="wish-container"><i class="bi bi-heart-fill product-card-wish"></i></div>
          <div class="product-card-image">
            <img
              src="https://media-ik.croma.com/prod/https://media.croma.com/image/upload/v1664416661/Croma%20Assets/Entertainment/Television/Images/248623_0_iwatzh.png?tr=w-480"
              alt="" />
          </div>
          <div class="off-row">
            <div class="offer-capsule">
              <p>10% off</p>
            </div>
            <p class="product-card-rate"><i class="bi bi-star-fill" style="color: yellow;"></i> 4.5</p>
          </div>
          <div class="row">
            <div class="col">
              <p class="card-price">&#8377;82500</p>
            </div>
            <div class="col">
              <p class="card-price strike">&#8377;92500</p>
            </div>
          </div>
          <p class="product-card-name">Oppo Reno10 Pro 5G (Silvery Grey, 256 GB) (12 GB RAM)</p>
        </div>
        <div class="product-card">
          <div class="wish-container"><i class="bi bi-heart-fill product-card-wish"></i></div>
          <div class="product-card-image">
            <img
              src="https://media-ik.croma.com/prod/https://media.croma.com/image/upload/h_300,w_300/v1690354493/Croma%20Assets/Entertainment/Television/Images/241271_u74sd4.png?tr=w-480"
              alt="" />
          </div>
          <div class="off-row">
            <div class="offer-capsule">
              <p>10% off</p>
            </div>
            <p class="product-card-rate"><i class="bi bi-star-fill" style="color: yellow;"></i> 4.5</p>
          </div>
          <div class="row">
            <div class="col">
              <p class="card-price">&#8377;82500</p>
            </div>
            <div class="col">
              <p class="card-price strike">&#8377;92500</p>
            </div>
          </div>
          <p class="product-card-name">Oppo Reno10 Pro 5G (Silvery Grey, 256 GB) (12 GB RAM) Text Overlfow overflow
            overflow</p>
        </div>
        <div class="product-card">
          <div class="wish-container"><i class="bi bi-heart-fill product-card-wish"></i></div>
          <div class="product-card-image">
            <img
              src="https://media-ik.croma.com/prod/https://media.croma.com/image/upload/v1697021578/Croma%20Assets/Large%20Appliances/Air%20Conditioner/Images/268607_0_xu6mqv.png?tr=w-480"
              alt="" />
          </div>
          <div class="off-row">
            <div class="offer-capsule">
              <p>10% off</p>
            </div>
            <p class="product-card-rate"><i class="bi bi-star-fill" style="color: yellow;"></i> 4.5</p>
          </div>
          <div class="row">
            <div class="col">
              <p class="card-price">&#8377;82500</p>
            </div>
            <div class="col">
              <p class="card-price strike">&#8377;92500</p>
            </div>
          </div>
          <p class="product-card-name">Oppo Reno10 Pro 5G (Silvery Grey, 256 GB) (12 GB RAM)</p>
        </div>
        <div class="product-card">
          <div class="wish-container"><i class="bi bi-heart-fill product-card-wish"></i></div>
          <div class="product-card-image">
            <img
              src="https://media-ik.croma.com/prod/https://media.croma.com/image/upload/h_300,w_300/v1685967802/Croma%20Assets/Computers%20Peripherals/Tablets%20and%20iPads/Images/264260_lsakad.png?tr=w-480"
              alt="" />
          </div>
          <div class="off-row">
            <div class="offer-capsule">
              <p>10% off</p>
            </div>
            <p class="product-card-rate"><i class="bi bi-star-fill" style="color: yellow;"></i> 4.5</p>
          </div>
          <div class="row">
            <div class="col">
              <p class="card-price">&#8377;82500</p>
            </div>
            <div class="col">
              <p class="card-price strike">&#8377;92500</p>
            </div>
          </div>
          <p class="product-card-name">Oppo Reno10 Pro 5G (Silvery Grey, 256 GB) (12 GB RAM)</p>
        </div>
        <div class="product-card">
          <div class="wish-container"><i class="bi bi-heart-fill product-card-wish"></i></div>
          <div class="product-card-image">
            <img src="./assets/image-1-er4.png" alt="" />
          </div>
          <div class="off-row">
            <div class="offer-capsule">
              <p>10% off</p>
            </div>
            <p class="product-card-rate"><i class="bi bi-star-fill" style="color: yellow;"></i> 4.5</p>
          </div>
          <div class="row">
            <div class="col">
              <p class="card-price">&#8377;82500</p>
            </div>
            <div class="col">
              <p class="card-price strike">&#8377;92500</p>
            </div>
          </div>
          <p class="product-card-name">Oppo Reno10 Pro 5G (Silvery Grey, 256 GB) (12 GB RAM)</p>
        </div>
        <div class="product-card">
          <div class="wish-container"><i class="bi bi-heart-fill product-card-wish"></i></div>
          <div class="product-card-image">
            <img src="./assets/image-1-er4.png" alt="" />
          </div>
          <div class="off-row">
            <div class="offer-capsule">
              <p>10% off</p>
            </div>
            <p class="product-card-rate"><i class="bi bi-star-fill" style="color: yellow;"></i> 4.5</p>
          </div>
          <div class="row">
            <div class="col">
              <p class="card-price">&#8377;82500</p>
            </div>
            <div class="col">
              <p class="card-price strike">&#8377;92500</p>
            </div>
          </div>
          <p class="product-card-name">Oppo Reno10 Pro 5G (Silvery Grey, 256 GB) (12 GB RAM)</p>
        </div>
        <div class="product-card">
          <div class="wish-container"><i class="bi bi-heart-fill product-card-wish"></i></div>
          <div class="product-card-image">
            <img src="./assets/image-1-er4.png" alt="" />
          </div>
          <div class="off-row">
            <div class="offer-capsule">
              <p>10% off</p>
            </div>
            <p class="product-card-rate"><i class="bi bi-star-fill" style="color: yellow;"></i> 4.5</p>
          </div>
          <div class="row">
            <div class="col">
              <p class="card-price">&#8377;82500</p>
            </div>
            <div class="col">
              <p class="card-price strike">&#8377;92500</p>
            </div>
          </div>
          <p class="product-card-name">Oppo Reno10 Pro 5G (Silvery Grey, 256 GB) (12 GB RAM)</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Home Appliances -->
  <section class="sim-products container">
    <div class="row">
      <div class="col">
        <p class="main-heading">Home Appliances</p>
      </div>
      <div class="col" style="text-align: right;">
        <a href="#" class="product-link">View all</a>
      </div>
    </div>
    <div class="owl-slider">
      <div id="home-carousel" class="owl-carousel">
        <div class="product-card">
          <div class="wish-container"><i class="bi bi-heart-fill product-card-wish"></i></div>
          <div class="product-card-image">
            <img
              src="https://media-ik.croma.com/prod/https://media.croma.com/image/upload/v1666277428/Croma%20Assets/Computers%20Peripherals/Tablets%20and%20iPads/Images/256345_0_hccyqp.png?tr=w-480"
              alt="" />
          </div>
          <div class="off-row">
            <div class="offer-capsule">
              <p>10% off</p>
            </div>
            <p class="product-card-rate"><i class="bi bi-star-fill" style="color: yellow;"></i> 4.5</p>
          </div>
          <div class="row">
            <div class="col">
              <p class="card-price">&#8377;82500</p>
            </div>
            <div class="col">
              <p class="card-price strike">&#8377;92500</p>
            </div>
          </div>
          <p class="product-card-name">Oppo Reno10 Pro 5G (Silvery Grey, 256 GB) (12 GB RAM)</p>
        </div>
        <div class="product-card">
          <div class="wish-container"><i class="bi bi-heart-fill product-card-wish"></i></div>
          <div class="product-card-image">
            <img
              src="https://media-ik.croma.com/prod/https://media.croma.com/image/upload/v1664411764/Croma%20Assets/Entertainment/Television/Images/251388_0_hz5pqn.png?tr=w-480"
              alt="" />
          </div>
          <div class="off-row">
            <div class="offer-capsule">
              <p>10% off</p>
            </div>
            <p class="product-card-rate"><i class="bi bi-star-fill" style="color: yellow;"></i> 4.5</p>
          </div>
          <div class="row">
            <div class="col">
              <p class="card-price">&#8377;82500</p>
            </div>
            <div class="col">
              <p class="card-price strike">&#8377;92500</p>
            </div>
          </div>
          <p class="product-card-name">Oppo Reno10 Pro 5G (Silvery Grey, 256 GB) (12 GB RAM)</p>
        </div>
        <div class="product-card">
          <div class="wish-container"><i class="bi bi-heart-fill product-card-wish"></i></div>
          <div class="product-card-image">
            <img src="./assets/image-1-er4.png" alt="" />
          </div>
          <div class="off-row">
            <div class="offer-capsule">
              <p>10% off</p>
            </div>
            <p class="product-card-rate"><i class="bi bi-star-fill" style="color: yellow;"></i> 4.5</p>
          </div>
          <div class="row">
            <div class="col">
              <p class="card-price">&#8377;82500</p>
            </div>
            <div class="col">
              <p class="card-price strike">&#8377;92500</p>
            </div>
          </div>
          <p class="product-card-name">Oppo Reno10 Pro 5G (Silvery Grey, 256 GB) (12 GB RAM)</p>
        </div>
        <div class="product-card">
          <div class="wish-container"><i class="bi bi-heart-fill product-card-wish"></i></div>
          <div class="product-card-image">
            <img src="./assets/image-1-er4.png" alt="" />
          </div>
          <div class="off-row">
            <div class="offer-capsule">
              <p>10% off</p>
            </div>
            <p class="product-card-rate"><i class="bi bi-star-fill" style="color: yellow;"></i> 4.5</p>
          </div>
          <div class="row">
            <div class="col">
              <p class="card-price">&#8377;82500</p>
            </div>
            <div class="col">
              <p class="card-price strike">&#8377;92500</p>
            </div>
          </div>
          <p class="product-card-name">Oppo Reno10 Pro 5G (Silvery Grey, 256 GB) (12 GB RAM)</p>
        </div>
        <div class="product-card">
          <div class="wish-container"><i class="bi bi-heart-fill product-card-wish"></i></div>
          <div class="product-card-image">
            <img src="./assets/image-1-er4.png" alt="" />
          </div>
          <div class="off-row">
            <div class="offer-capsule">
              <p>10% off</p>
            </div>
            <p class="product-card-rate"><i class="bi bi-star-fill" style="color: yellow;"></i> 4.5</p>
          </div>
          <div class="row">
            <div class="col">
              <p class="card-price">&#8377;82500</p>
            </div>
            <div class="col">
              <p class="card-price strike">&#8377;92500</p>
            </div>
          </div>
          <p class="product-card-name">Oppo Reno10 Pro 5G (Silvery Grey, 256 GB) (12 GB RAM)</p>
        </div>
        <div class="product-card">
          <div class="wish-container"><i class="bi bi-heart-fill product-card-wish"></i></div>
          <div class="product-card-image">
            <img src="./assets/image-1-er4.png" alt="" />
          </div>
          <div class="off-row">
            <div class="offer-capsule">
              <p>10% off</p>
            </div>
            <p class="product-card-rate"><i class="bi bi-star-fill" style="color: yellow;"></i> 4.5</p>
          </div>
          <div class="row">
            <div class="col">
              <p class="card-price">&#8377;82500</p>
            </div>
            <div class="col">
              <p class="card-price strike">&#8377;92500</p>
            </div>
          </div>
          <p class="product-card-name">Oppo Reno10 Pro 5G (Silvery Grey, 256 GB) (12 GB RAM)</p>
        </div>
        <div class="product-card">
          <div class="wish-container"><i class="bi bi-heart-fill product-card-wish"></i></div>
          <div class="product-card-image">
            <img src="./assets/image-1-er4.png" alt="" />
          </div>
          <div class="off-row">
            <div class="offer-capsule">
              <p>10% off</p>
            </div>
            <p class="product-card-rate"><i class="bi bi-star-fill" style="color: yellow;"></i> 4.5</p>
          </div>
          <div class="row">
            <div class="col">
              <p class="card-price">&#8377;82500</p>
            </div>
            <div class="col">
              <p class="card-price strike">&#8377;92500</p>
            </div>
          </div>
          <p class="product-card-name">Oppo Reno10 Pro 5G (Silvery Grey, 256 GB) (12 GB RAM)</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Top brands -->
  <section class="container">
    <div class="row">
      <div class="col">
        <p class="main-heading">Top Brands</p>
      </div>
    </div>
    <div class="owl-slider">
      <div id="brand-carousel" class="owl-carousel">
        <div class="item">
          <div class="brand-card">
            <img src="./assets/image-8.png" alt="" class="brand-img img-fluid" />
          </div>
        </div>
        <div class="item">
          <div class="brand-card">
            <img src="./assets/image-9.png" alt="" class="brand-img img-fluid" />
          </div>
        </div>
        <div class="item">
          <div class="brand-card">
            <img src="./assets/image-7.png" alt="" class="brand-img img-fluid" />
          </div>
        </div>
        <div class="item">
          <div class="brand-card">
            <img src="./assets/xiaomi-logo-2014-1.png" alt="" class="brand-img img-fluid" />
          </div>
        </div>
        <div class="item">
          <div class="brand-card">
            <img src="./assets/image-6.png" alt="" class="brand-img img-fluid" />
          </div>
        </div>
        <div class="item">
          <div class="brand-card">
            <img src="./assets/image-10.png" alt="" class="brand-img img-fluid" />
          </div>
        </div>
        <div class="item">
          <div class="brand-card">
            <img src="./assets/image-8.png" alt="" class="brand-img img-fluid" />
          </div>
        </div>
        <div class="item">
          <div class="brand-card">
            <img src="./assets/image-9.png" alt="" class="brand-img img-fluid" />
          </div>
        </div>
        <div class="item">
          <div class="brand-card">
            <img src="./assets/xiaomi-logo-2014-1.png" alt="" class="brand-img img-fluid" />
          </div>
        </div>
        <div class="item">
          <div class="brand-card">
            <img src="./assets/image-6.png" alt="" class="brand-img img-fluid" />
          </div>
        </div>
      </div>
  </section>

  <!-- Featured brands-->
  <section class="container">
    <div class="row">
      <div class="col">
        <p class="main-heading">Featured brands</p>
      </div>
    </div>
    <div class="row mb-4">
      <div class="owl-slider">
        <div id="featured-carousel" class="owl-carousel">
          <div class="item">
            <div class="upcoming-card">
              <img src="./assets/ban-4.png" alt="" class="upcoming-img img-fluid" />
            </div>
          </div>
          <div class="item">
            <div class="upcoming-card">
              <img src="./assets/ban-5.png" alt="" class="upcoming-img img-fluid" />
            </div>
          </div>
          <div class="item">
            <div class="upcoming-card">
              <img src="./assets/ban-4.png" alt="" class="upcoming-img img-fluid" />
            </div>
          </div>
          <div class="item">
            <div class="upcoming-card">
              <img src="./assets/ban-5.png" alt="" class="upcoming-img img-fluid" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="owl-slider">
        <div id="featured-carousel2" class="owl-carousel">
          <div class="item">
            <div class="featured-card container-sm">
              <img src="./assets/Group 80.png" alt="" class="upcoming-img" />
            </div>
          </div>
          <div class="item">
            <div class="featured-card container-sm">
              <img src="./assets/Group 85.png" alt="" class="upcoming-img" />
            </div>
          </div>
          <div class="item">
            <div class="featured-card container-sm">
              <img src="./assets/Group 86.png" alt="" class="upcoming-img" />
            </div>
          </div>
          <div class="item">
            <div class="featured-card container-sm">
              <img src="./assets/Group 80.png" alt="" class="upcoming-img" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- New at browire -->
  <section class="container">
    <div class="row">
      <div class="col">
        <p class="main-heading">SmartPhones</p>
      </div>
      <div class="col" style="text-align: right;">
        <a href="#" class="product-link">View all</a>
      </div>
    </div>
    <div class="owl-slider">
      <div id="smart-carousel" class="owl-carousel">
        <div class="product-card">
          <div class="wish-container"><i class="bi bi-heart-fill product-card-wish"></i></div>
          <div class="product-card-image">
            <img src="./assets/image-1-er4.png" alt="" />
          </div>
          <div class="off-row">
            <div class="offer-capsule">
              <p>10% off</p>
            </div>
            <p class="product-card-rate"><i class="bi bi-star-fill" style="color: yellow;"></i> 4.5</p>
          </div>
          <div class="row">
            <div class="col">
              <p class="card-price">&#8377;82500</p>
            </div>
            <div class="col">
              <p class="card-price strike">&#8377;92500</p>
            </div>
          </div>
          <p class="product-card-name">Oppo Reno10 Pro 5G (Silvery Grey, 256 GB) (12 GB RAM)</p>
        </div>
        <div class="product-card">
          <div class="wish-container"><i class="bi bi-heart-fill product-card-wish"></i></div>
          <div class="product-card-image">
            <img src="./assets/image-1-er4.png" alt="" />
          </div>
          <div class="off-row">
            <div class="offer-capsule">
              <p>10% off</p>
            </div>
            <p class="product-card-rate"><i class="bi bi-star-fill" style="color: yellow;"></i> 4.5</p>
          </div>
          <div class="row">
            <div class="col">
              <p class="card-price">&#8377;82500</p>
            </div>
            <div class="col">
              <p class="card-price strike">&#8377;92500</p>
            </div>
          </div>
          <p class="product-card-name">Oppo Reno10 Pro 5G (Silvery Grey, 256 GB) (12 GB RAM)</p>
        </div>
        <div class="product-card">
          <div class="wish-container"><i class="bi bi-heart-fill product-card-wish"></i></div>
          <div class="product-card-image">
            <img src="./assets/image-1-er4.png" alt="" />
          </div>
          <div class="off-row">
            <div class="offer-capsule">
              <p>10% off</p>
            </div>
            <p class="product-card-rate"><i class="bi bi-star-fill" style="color: yellow;"></i> 4.5</p>
          </div>
          <div class="row">
            <div class="col">
              <p class="card-price">&#8377;82500</p>
            </div>
            <div class="col">
              <p class="card-price strike">&#8377;92500</p>
            </div>
          </div>
          <p class="product-card-name">Oppo Reno10 Pro 5G (Silvery Grey, 256 GB) (12 GB RAM)</p>
        </div>
        <div class="product-card">
          <div class="wish-container"><i class="bi bi-heart-fill product-card-wish"></i></div>
          <div class="product-card-image">
            <img src="./assets/image-1-er4.png" alt="" />
          </div>
          <div class="off-row">
            <div class="offer-capsule">
              <p>10% off</p>
            </div>
            <p class="product-card-rate"><i class="bi bi-star-fill" style="color: yellow;"></i> 4.5</p>
          </div>
          <div class="row">
            <div class="col">
              <p class="card-price">&#8377;82500</p>
            </div>
            <div class="col">
              <p class="card-price strike">&#8377;92500</p>
            </div>
          </div>
          <p class="product-card-name">Oppo Reno10 Pro 5G (Silvery Grey, 256 GB) (12 GB RAM)</p>
        </div>
        <div class="product-card">
          <div class="wish-container"><i class="bi bi-heart-fill product-card-wish"></i></div>
          <div class="product-card-image">
            <img src="./assets/image-1-er4.png" alt="" />
          </div>
          <div class="off-row">
            <div class="offer-capsule">
              <p>10% off</p>
            </div>
            <p class="product-card-rate"><i class="bi bi-star-fill" style="color: yellow;"></i> 4.5</p>
          </div>
          <div class="row">
            <div class="col">
              <p class="card-price">&#8377;82500</p>
            </div>
            <div class="col">
              <p class="card-price strike">&#8377;92500</p>
            </div>
          </div>
          <p class="product-card-name">Oppo Reno10 Pro 5G (Silvery Grey, 256 GB) (12 GB RAM)</p>
        </div>
        <div class="product-card">
          <div class="wish-container"><i class="bi bi-heart-fill product-card-wish"></i></div>
          <div class="product-card-image">
            <img src="./assets/image-1-er4.png" alt="" />
          </div>
          <div class="off-row">
            <div class="offer-capsule">
              <p>10% off</p>
            </div>
            <p class="product-card-rate"><i class="bi bi-star-fill" style="color: yellow;"></i> 4.5</p>
          </div>
          <div class="row">
            <div class="col">
              <p class="card-price">&#8377;82500</p>
            </div>
            <div class="col">
              <p class="card-price strike">&#8377;92500</p>
            </div>
          </div>
          <p class="product-card-name">Oppo Reno10 Pro 5G (Silvery Grey, 256 GB) (12 GB RAM)</p>
        </div>
        <div class="product-card">
          <div class="wish-container"><i class="bi bi-heart-fill product-card-wish"></i></div>
          <div class="product-card-image">
            <img src="./assets/image-1-er4.png" alt="" />
          </div>
          <div class="off-row">
            <div class="offer-capsule">
              <p>10% off</p>
            </div>
            <p class="product-card-rate"><i class="bi bi-star-fill" style="color: yellow;"></i> 4.5</p>
          </div>
          <div class="row">
            <div class="col">
              <p class="card-price">&#8377;82500</p>
            </div>
            <div class="col">
              <p class="card-price strike">&#8377;92500</p>
            </div>
          </div>
          <p class="product-card-name">Oppo Reno10 Pro 5G (Silvery Grey, 256 GB) (12 GB RAM)</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Top Trending -->
  <section class="container">
    <div class="row">
      <div class="col">
        <p class="main-heading">Top Trending</p>
      </div>
      <div class="col" style="text-align: right;">
        <a href="#" class="product-link">View all</a>
      </div>
    </div>
    <div class="owl-slider">
      <div id="top-carousel" class="owl-carousel">
        <div class="product-card">
          <div class="wish-container"><i class="bi bi-heart-fill product-card-wish"></i></div>
          <div class="product-card-image">
            <img src="./assets/image-1-er4.png" alt="" />
          </div>
          <div class="off-row">
            <div class="offer-capsule">
              <p>10% off</p>
            </div>
            <p class="product-card-rate"><i class="bi bi-star-fill" style="color: yellow;"></i> 4.5</p>
          </div>
          <div class="row">
            <div class="col">
              <p class="card-price">&#8377;82500</p>
            </div>
            <div class="col">
              <p class="card-price strike">&#8377;92500</p>
            </div>
          </div>
          <p class="product-card-name">Oppo Reno10 Pro 5G (Silvery Grey, 256 GB) (12 GB RAM)</p>
        </div>
        <div class="product-card">
          <div class="wish-container"><i class="bi bi-heart-fill product-card-wish"></i></div>
          <div class="product-card-image">
            <img src="./assets/image-1-er4.png" alt="" />
          </div>
          <div class="off-row">
            <div class="offer-capsule">
              <p>10% off</p>
            </div>
            <p class="product-card-rate"><i class="bi bi-star-fill" style="color: yellow;"></i> 4.5</p>
          </div>
          <div class="row">
            <div class="col">
              <p class="card-price">&#8377;82500</p>
            </div>
            <div class="col">
              <p class="card-price strike">&#8377;92500</p>
            </div>
          </div>
          <p class="product-card-name">Oppo Reno10 Pro 5G (Silvery Grey, 256 GB) (12 GB RAM)</p>
        </div>
        <div class="product-card">
          <div class="wish-container"><i class="bi bi-heart-fill product-card-wish"></i></div>
          <div class="product-card-image">
            <img src="./assets/image-1-er4.png" alt="" />
          </div>
          <div class="off-row">
            <div class="offer-capsule">
              <p>10% off</p>
            </div>
            <p class="product-card-rate"><i class="bi bi-star-fill" style="color: yellow;"></i> 4.5</p>
          </div>
          <div class="row">
            <div class="col">
              <p class="card-price">&#8377;82500</p>
            </div>
            <div class="col">
              <p class="card-price strike">&#8377;92500</p>
            </div>
          </div>
          <p class="product-card-name">Oppo Reno10 Pro 5G (Silvery Grey, 256 GB) (12 GB RAM)</p>
        </div>
        <div class="product-card">
          <div class="wish-container"><i class="bi bi-heart-fill product-card-wish"></i></div>
          <div class="product-card-image">
            <img src="./assets/image-1-er4.png" alt="" />
          </div>
          <div class="off-row">
            <div class="offer-capsule">
              <p>10% off</p>
            </div>
            <p class="product-card-rate"><i class="bi bi-star-fill" style="color: yellow;"></i> 4.5</p>
          </div>
          <div class="row">
            <div class="col">
              <p class="card-price">&#8377;82500</p>
            </div>
            <div class="col">
              <p class="card-price strike">&#8377;92500</p>
            </div>
          </div>
          <p class="product-card-name">Oppo Reno10 Pro 5G (Silvery Grey, 256 GB) (12 GB RAM)</p>
        </div>
        <div class="product-card">
          <div class="wish-container"><i class="bi bi-heart-fill product-card-wish"></i></div>
          <div class="product-card-image">
            <img src="./assets/image-1-er4.png" alt="" />
          </div>
          <div class="off-row">
            <div class="offer-capsule">
              <p>10% off</p>
            </div>
            <p class="product-card-rate"><i class="bi bi-star-fill" style="color: yellow;"></i> 4.5</p>
          </div>
          <div class="row">
            <div class="col">
              <p class="card-price">&#8377;82500</p>
            </div>
            <div class="col">
              <p class="card-price strike">&#8377;92500</p>
            </div>
          </div>
          <p class="product-card-name">Oppo Reno10 Pro 5G (Silvery Grey, 256 GB) (12 GB RAM)</p>
        </div>
        <div class="product-card">
          <div class="wish-container"><i class="bi bi-heart-fill product-card-wish"></i></div>
          <div class="product-card-image">
            <img src="./assets/image-1-er4.png" alt="" />
          </div>
          <div class="off-row">
            <div class="offer-capsule">
              <p>10% off</p>
            </div>
            <p class="product-card-rate"><i class="bi bi-star-fill" style="color: yellow;"></i> 4.5</p>
          </div>
          <div class="row">
            <div class="col">
              <p class="card-price">&#8377;82500</p>
            </div>
            <div class="col">
              <p class="card-price strike">&#8377;92500</p>
            </div>
          </div>
          <p class="product-card-name">Oppo Reno10 Pro 5G (Silvery Grey, 256 GB) (12 GB RAM)</p>
        </div>
        <div class="product-card">
          <div class="wish-container"><i class="bi bi-heart-fill product-card-wish"></i></div>
          <div class="product-card-image">
            <img src="./assets/image-1-er4.png" alt="" />
          </div>
          <div class="off-row">
            <div class="offer-capsule">
              <p>10% off</p>
            </div>
            <p class="product-card-rate"><i class="bi bi-star-fill" style="color: yellow;"></i> 4.5</p>
          </div>
          <div class="row">
            <div class="col">
              <p class="card-price">&#8377;82500</p>
            </div>
            <div class="col">
              <p class="card-price strike">&#8377;92500</p>
            </div>
          </div>
          <p class="product-card-name">Oppo Reno10 Pro 5G (Silvery Grey, 256 GB) (12 GB RAM)</p>
        </div>
      </div>
    </div>
  </section>



  <!-- Featured brands-->
  <section class="container">
    <div class="row">
      <div class="col">
        <p class="main-heading">Mega Offers</p>
      </div>
    </div>
    <div class="row">
      <div class="owl-slider">
        <div id="mega-carousel2" class="owl-carousel">

          <div class="item">
            <div class="featured-card">
              <img src="./assets/Group 80.png" alt="" class="img-fluid upcoming-img" />
            </div>
          </div>
          <div class="item">
            <div class="featured-card">
              <img src="./assets/Group 85.png" alt="" class=" img-fluid upcoming-img" />
            </div>
          </div>
          <div class="item">
            <div class="featured-card">
              <img src="./assets/Group 86.png" alt="" class="img-fluid upcoming-img" />
            </div>
          </div>
          <div class="item">
            <div class="featured-card">
              <img src="./assets/Group 80.png" alt="" class="img-fluid upcoming-img" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- New at browire -->
  <section class="container">
    <div class="row">
      <div class="col">
        <p class="main-heading">New at BRO WIRE</p>
      </div>
      <div class="col" style="text-align: right;">
        <a href="#" class="product-link">View all</a>
      </div>
    </div>
    <div class="owl-slider">
      <div id="new-carousel" class="owl-carousel">
        <div class="product-card">
          <div class="wish-container"><i class="bi bi-heart-fill product-card-wish"></i></div>
          <div class="product-card-image">
            <img src="./assets/image-1-er4.png" alt="" />
          </div>
          <div class="off-row">
            <div class="offer-capsule">
              <p>10% off</p>
            </div>
            <p class="product-card-rate"><i class="bi bi-star-fill" style="color: yellow;"></i> 4.5</p>
          </div>
          <div class="row">
            <div class="col">
              <p class="card-price">&#8377;82500</p>
            </div>
            <div class="col">
              <p class="card-price strike">&#8377;92500</p>
            </div>
          </div>
          <p class="product-card-name">Oppo Reno10 Pro 5G (Silvery Grey, 256 GB) (12 GB RAM)</p>
        </div>
        <div class="product-card">
          <div class="wish-container"><i class="bi bi-heart-fill product-card-wish"></i></div>
          <div class="product-card-image">
            <img src="./assets/image-1-er4.png" alt="" />
          </div>
          <div class="off-row">
            <div class="offer-capsule">
              <p>10% off</p>
            </div>
            <p class="product-card-rate"><i class="bi bi-star-fill" style="color: yellow;"></i> 4.5</p>
          </div>
          <div class="row">
            <div class="col">
              <p class="card-price">&#8377;82500</p>
            </div>
            <div class="col">
              <p class="card-price strike">&#8377;92500</p>
            </div>
          </div>
          <p class="product-card-name">Oppo Reno10 Pro 5G (Silvery Grey, 256 GB) (12 GB RAM)</p>
        </div>
        <div class="product-card">
          <div class="wish-container"><i class="bi bi-heart-fill product-card-wish"></i></div>
          <div class="product-card-image">
            <img src="./assets/image-1-er4.png" alt="" />
          </div>
          <div class="off-row">
            <div class="offer-capsule">
              <p>10% off</p>
            </div>
            <p class="product-card-rate"><i class="bi bi-star-fill" style="color: yellow;"></i> 4.5</p>
          </div>
          <div class="row">
            <div class="col">
              <p class="card-price">&#8377;82500</p>
            </div>
            <div class="col">
              <p class="card-price strike">&#8377;92500</p>
            </div>
          </div>
          <p class="product-card-name">Oppo Reno10 Pro 5G (Silvery Grey, 256 GB) (12 GB RAM)</p>
        </div>
        <div class="product-card">
          <div class="wish-container"><i class="bi bi-heart-fill product-card-wish"></i></div>
          <div class="product-card-image">
            <img src="./assets/image-1-er4.png" alt="" />
          </div>
          <div class="off-row">
            <div class="offer-capsule">
              <p>10% off</p>
            </div>
            <p class="product-card-rate"><i class="bi bi-star-fill" style="color: yellow;"></i> 4.5</p>
          </div>
          <div class="row">
            <div class="col">
              <p class="card-price">&#8377;82500</p>
            </div>
            <div class="col">
              <p class="card-price strike">&#8377;92500</p>
            </div>
          </div>
          <p class="product-card-name">Oppo Reno10 Pro 5G (Silvery Grey, 256 GB) (12 GB RAM)</p>
        </div>
        <div class="product-card">
          <div class="wish-container"><i class="bi bi-heart-fill product-card-wish"></i></div>
          <div class="product-card-image">
            <img src="./assets/image-1-er4.png" alt="" />
          </div>
          <div class="off-row">
            <div class="offer-capsule">
              <p>10% off</p>
            </div>
            <p class="product-card-rate"><i class="bi bi-star-fill" style="color: yellow;"></i> 4.5</p>
          </div>
          <div class="row">
            <div class="col">
              <p class="card-price">&#8377;82500</p>
            </div>
            <div class="col">
              <p class="card-price strike">&#8377;92500</p>
            </div>
          </div>
          <p class="product-card-name">Oppo Reno10 Pro 5G (Silvery Grey, 256 GB) (12 GB RAM)</p>
        </div>
        <div class="product-card">
          <div class="wish-container"><i class="bi bi-heart-fill product-card-wish"></i></div>
          <div class="product-card-image">
            <img src="./assets/image-1-er4.png" alt="" />
          </div>
          <div class="off-row">
            <div class="offer-capsule">
              <p>10% off</p>
            </div>
            <p class="product-card-rate"><i class="bi bi-star-fill" style="color: yellow;"></i> 4.5</p>
          </div>
          <div class="row">
            <div class="col">
              <p class="card-price">&#8377;82500</p>
            </div>
            <div class="col">
              <p class="card-price strike">&#8377;92500</p>
            </div>
          </div>
          <p class="product-card-name">Oppo Reno10 Pro 5G (Silvery Grey, 256 GB) (12 GB RAM)</p>
        </div>
        <div class="product-card">
          <div class="wish-container"><i class="bi bi-heart-fill product-card-wish"></i></div>
          <div class="product-card-image">
            <img src="./assets/image-1-er4.png" alt="" />
          </div>
          <div class="off-row">
            <div class="offer-capsule">
              <p>10% off</p>
            </div>
            <p class="product-card-rate"><i class="bi bi-star-fill" style="color: yellow;"></i> 4.5</p>
          </div>
          <div class="row">
            <div class="col">
              <p class="card-price">&#8377;82500</p>
            </div>
            <div class="col">
              <p class="card-price strike">&#8377;92500</p>
            </div>
          </div>
          <p class="product-card-name">Oppo Reno10 Pro 5G (Silvery Grey, 256 GB) (12 GB RAM)</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Kitchen appliances -->
  <section class="container">
    <div class="row">
      <div class="col">
        <p class="main-heading">Kitchen appliances</p>
      </div>
      <div class="col" style="text-align: right;">
        <a href="#" class="product-link">View all</a>
      </div>
    </div>
    <div class="owl-slider">
      <div id="kitchen-carousel" class="owl-carousel">
        <div class="product-card">
          <div class="wish-container"><i class="bi bi-heart-fill product-card-wish"></i></div>
          <div class="product-card-image">
            <img src="./assets/image-1-er4.png" alt="" />
          </div>
          <div class="off-row">
            <div class="offer-capsule">
              <p>10% off</p>
            </div>
            <p class="product-card-rate"><i class="bi bi-star-fill" style="color: yellow;"></i> 4.5</p>
          </div>
          <div class="row">
            <div class="col">
              <p class="card-price">&#8377;82500</p>
            </div>
            <div class="col">
              <p class="card-price strike">&#8377;92500</p>
            </div>
          </div>
          <p class="product-card-name">Oppo Reno10 Pro 5G (Silvery Grey, 256 GB) (12 GB RAM)</p>
        </div>
        <div class="product-card">
          <div class="wish-container"><i class="bi bi-heart-fill product-card-wish"></i></div>
          <div class="product-card-image">
            <img src="./assets/image-1-er4.png" alt="" />
          </div>
          <div class="off-row">
            <div class="offer-capsule">
              <p>10% off</p>
            </div>
            <p class="product-card-rate"><i class="bi bi-star-fill" style="color: yellow;"></i> 4.5</p>
          </div>
          <div class="row">
            <div class="col">
              <p class="card-price">&#8377;82500</p>
            </div>
            <div class="col">
              <p class="card-price strike">&#8377;92500</p>
            </div>
          </div>
          <p class="product-card-name">Oppo Reno10 Pro 5G (Silvery Grey, 256 GB) (12 GB RAM)</p>
        </div>
        <div class="product-card">
          <div class="wish-container"><i class="bi bi-heart-fill product-card-wish"></i></div>
          <div class="product-card-image">
            <img src="./assets/image-1-er4.png" alt="" />
          </div>
          <div class="off-row">
            <div class="offer-capsule">
              <p>10% off</p>
            </div>
            <p class="product-card-rate"><i class="bi bi-star-fill" style="color: yellow;"></i> 4.5</p>
          </div>
          <div class="row">
            <div class="col">
              <p class="card-price">&#8377;82500</p>
            </div>
            <div class="col">
              <p class="card-price strike">&#8377;92500</p>
            </div>
          </div>
          <p class="product-card-name">Oppo Reno10 Pro 5G (Silvery Grey, 256 GB) (12 GB RAM)</p>
        </div>
        <div class="product-card">
          <div class="wish-container"><i class="bi bi-heart-fill product-card-wish"></i></div>
          <div class="product-card-image">
            <img src="./assets/image-1-er4.png" alt="" />
          </div>
          <div class="off-row">
            <div class="offer-capsule">
              <p>10% off</p>
            </div>
            <p class="product-card-rate"><i class="bi bi-star-fill" style="color: yellow;"></i> 4.5</p>
          </div>
          <div class="row">
            <div class="col">
              <p class="card-price">&#8377;82500</p>
            </div>
            <div class="col">
              <p class="card-price strike">&#8377;92500</p>
            </div>
          </div>
          <p class="product-card-name">Oppo Reno10 Pro 5G (Silvery Grey, 256 GB) (12 GB RAM)</p>
        </div>
        <div class="product-card">
          <div class="wish-container"><i class="bi bi-heart-fill product-card-wish"></i></div>
          <div class="product-card-image">
            <img src="./assets/image-1-er4.png" alt="" />
          </div>
          <div class="off-row">
            <div class="offer-capsule">
              <p>10% off</p>
            </div>
            <p class="product-card-rate"><i class="bi bi-star-fill" style="color: yellow;"></i> 4.5</p>
          </div>
          <div class="row">
            <div class="col">
              <p class="card-price">&#8377;82500</p>
            </div>
            <div class="col">
              <p class="card-price strike">&#8377;92500</p>
            </div>
          </div>
          <p class="product-card-name">Oppo Reno10 Pro 5G (Silvery Grey, 256 GB) (12 GB RAM)</p>
        </div>
        <div class="product-card">
          <div class="wish-container"><i class="bi bi-heart-fill product-card-wish"></i></div>
          <div class="product-card-image">
            <img src="./assets/image-1-er4.png" alt="" />
          </div>
          <div class="off-row">
            <div class="offer-capsule">
              <p>10% off</p>
            </div>
            <p class="product-card-rate"><i class="bi bi-star-fill" style="color: yellow;"></i> 4.5</p>
          </div>
          <div class="row">
            <div class="col">
              <p class="card-price">&#8377;82500</p>
            </div>
            <div class="col">
              <p class="card-price strike">&#8377;92500</p>
            </div>
          </div>
          <p class="product-card-name">Oppo Reno10 Pro 5G (Silvery Grey, 256 GB) (12 GB RAM)</p>
        </div>
        <div class="product-card">
          <div class="wish-container"><i class="bi bi-heart-fill product-card-wish"></i></div>
          <div class="product-card-image">
            <img src="./assets/image-1-er4.png" alt="" />
          </div>
          <div class="off-row">
            <div class="offer-capsule">
              <p>10% off</p>
            </div>
            <p class="product-card-rate"><i class="bi bi-star-fill" style="color: yellow;"></i> 4.5</p>
          </div>
          <div class="row">
            <div class="col">
              <p class="card-price">&#8377;82500</p>
            </div>
            <div class="col">
              <p class="card-price strike">&#8377;92500</p>
            </div>
          </div>
          <p class="product-card-name">Oppo Reno10 Pro 5G (Silvery Grey, 256 GB) (12 GB RAM)</p>
        </div>
      </div>
    </div>
  </section>

  <!-- About browire -->
  <section class="container">
    <div class="row">
      <div class="col">
        <p class="main-heading">About Bro Wire</p>
      </div>
    </div>
    <hr />
    <p class="main-heading">
      Buy Electronics from Oxygen Digital Shop, Kerala's Premier Online Electronics Shopping Website
    </p>
    <p class="font-size-p">
      Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
      standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a
      type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,
      remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing
      Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions
      of Lorem Ipsum.
    </p>
    <p class="main-heading">
      What Can I Buy From Bro Wire Shop?
    </p>
    <div>
      <p style="font-weight: bold; font-size: 17px;">
        Electronics
      </p>
      <hr style="height: 0; margin-bottom: 15px;" />
      <p class="font-size-p">
        It is a long established fact that a reader will be distracted by the readable content of a page when looking at
        its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as
        opposed to using 'Content here, content here', making it look like readable English.
      </p>
    </div>

    <div style="width: 100%;">
      <p style="font-weight: bold; font-size: 17px;">
        Home Appliances
      </p>
      <hr style="height: 0; margin-bottom: 15px;" />
      <p class="font-size-p">
        It is a long established fact that a reader will be distracted by the readable content of a page when looking at
        its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as
        opposed to using 'Content here, content here', making it look like readable English.
      </p>
    </div>

    <div>
      <p style="font-weight: bold; font-size: 17px;">
        Laptops
      </p>
      <hr style="height: 0; margin-bottom: 15px;" />
      <p class="font-size-p">
        It is a long established fact that a reader will be distracted by the readable content of a page when looking at
        its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as
        opposed to using 'Content here, content here', making it look like readable English.
      </p>
    </div>

    <div>
      <p style="font-weight: bold; font-size: 17px;">
        Digital products
      </p>
      <hr style="height: 0; margin-bottom: 15px;" />
      <p class="font-size-p">
        It is a long established fact that a reader will be distracted by the readable content of a page when looking at
        its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as
        opposed to using 'Content here, content here', making it look like readable English.
      </p>
    </div>

    <p class="main-heading">Why Buy Electronics from Bro Wire Shop?</p>
    <p class="pb-40px font-size-p">
      Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
      standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a
      type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,
      remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing
      Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions
      of Lorem Ipsum.
    </p>

  </section>
<?php $__env->stopSection(); ?>





<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\saswa\Downloads\ecommerceadmin\ecommerceadmin\resources\views/welcome.blade.php ENDPATH**/ ?>