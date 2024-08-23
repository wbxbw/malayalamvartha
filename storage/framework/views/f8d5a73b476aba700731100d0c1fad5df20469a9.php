<?php $__env->startSection('title','Lulu Connect || Product Detail'); ?>
<?php $__env->startSection('content'); ?>

<section class="product-detail-section container">
      <div class="row gx-2">
        <div class="d-none d-lg-block col-lg-1 col-md-1 col-sm-12">
          <div class="preview-imgs">
            <div class="img-box selected-preview">
                <?php

                $result = \App\Http\Controllers\ProductsController::getImages($products['id']);
                   echo $result;
            ?>
            </div>
            <br/>
            <div class="img-box">
                <?php

                $result = \App\Http\Controllers\ProductsController::getImages($products['id']);
                   echo $result;
            ?>
            </div>
            <br/>
            <div class="img-box">
                <?php

                $result = \App\Http\Controllers\ProductsController::getImages($products['id']);
                   echo $result;
            ?>
            </div>
            <br/>
            <div class="img-box">
                <?php

                $result = \App\Http\Controllers\ProductsController::getImages($products['id']);
                   echo $result;
            ?>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12"><br/>
          <div class="wishlist-icon"><i id="heart-icon" class="bi bi-heart-fill"></i></div><br/>

            <?php

            $result = \App\Http\Controllers\ProductsController::getImages($products['id']);
               echo $result;
        ?>


          <div class="row preview-imgs d-lg-none ">
            <div class="col-3">
              <div class="img-box small selected-preview">
                <?php

                $result = \App\Http\Controllers\ProductsController::getImages($products['id']);
                   echo $result;
            ?>
              </div>
            </div>
            <div class="col-3">
              <div class="img-box small">
                <?php

                $result = \App\Http\Controllers\ProductsController::getImages($products['id']);
                   echo $result;
            ?>
              </div>
            </div>
            <div class="col-3">
              <div class="img-box small">
                <?php

                $result = \App\Http\Controllers\ProductsController::getImages($products['id']);
                   echo $result;
            ?>
              </div>
            </div>
            <div class="col-3">
              <div class="img-box small">
                <?php

                $result = \App\Http\Controllers\ProductsController::getImages($products['id']);
                   echo $result;
            ?>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-7 col-md-6 col-sm-12" style="padding: 30px !important;">
          <p class="product-title"><?php echo e($products['name']); ?></p>
          <div class="row">
            <div class="col-auto p-detail-text">
              <p class="brand-name">Brand: Oppo</p>
            </div>
            <div class="col-auto p-detail-text"><div class="vertical"></div></div>
            <div class="col-auto p-detail-text"><img class="star" src="./assets/star-3BW.png" alt="rating"/>&nbsp;&nbsp;<span class="rate-int">4.5</span></div>
            <div class="col-auto p-detail-text"><a class="product-link" href="#">Ratings</a></div>
            <div class="col-auto p-detail-text"><div class="vertical"></div></div>
            <div class="col-auto p-detail-text"><a class="product-link" href="#">9 Answered Questions</a></div>
          </div>
          <!-- <br/> -->
          <div class="row">
            <div class="col-auto">
              <p class="product-price">&#8377;<?php echo e($products['price']); ?></p>
              <p class="brand-name">Incl. All Taxes</p>
            </div>
            <div class="col-auto"><p class="product-price strike">&#8377;<?php echo e($products['price']+10200); ?></p></div>
            <div class="col-md-3 offset-md-2">
                  <div class="add-container">
                    <p style="padding-top: 12px;">Quantity</p>
                    <button id="decrement" class="plus-minus-btn">-</button>
                    <span id="number">1</span>
                    <button id="increment" class="plus-minus-btn">+</button>
                  </div>

            </div>

          </div>
          <!-- <br/> -->
          <div class="row">
            <div class="col-auto p-detail-text">
              <p>EMI Starts at &#8377;1920. No cost EMI available</p>
            </div>
            <div class="col-auto p-detail-text"><div class="vertical"></div></div>
            <div class="col-auto p-detail-text"><a class="product-link" href="#">EMI Options <img src="./assets/group-139-4HW.png" height="30"/></a></div>
          </div>
          <hr class="horizontal"/>
          <div class="row">
            <div class="col-auto p-detail-text">
              <p><b>Delivery at:</b> Eranakulam, Kerala, India (658412)</p>
            </div>
            <div class="col-auto p-detail-text"><div class="vertical"></div></div>
            <div class="col-auto p-detail-text"><a class="product-link" href="#">Change Location</a></div>
          </div>
          <div class="row">
            <div class="extra-detail-box">
              <div class="row">
                <div class="col-auto">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                    <label class="form-check-label" for="inlineRadio1"><b>With Exchange</b></label>
                    <p style="color: red;">Up to &#8377;30000.00 off</p>
                  </div>

                </div>
                <div class="col-auto">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                    <label class="form-check-label" for="inlineRadio2"><b>Without Exchange</b></label>
                    <p style="color: red;">Up to &#8377;30000.00 off</p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-auto p-detail-text">
                  <p><b>Free</b> Delivery Saturday, <b>5 August</b></p>
                </div>
                <div class="col-auto p-detail-text"><div class="vertical"></div></div>
                <div class="col-auto p-detail-text"><a class="product-link" href="#">Details</a></div>
              </div>
              <div class="row">
                <div class="col-auto">
                  <img src="./assets/bxs-offer.png" width="25"/>
                </div>
                <div class="col-auto" style="padding-left: 0;">
                  <p><b>Offers</b></p>
                </div>
              </div>
              <div class="row gy-2">
                <div class="col-auto">
                  <div class="emi-box">
                    <p><b>No Cost EMI</b></p>
                    <p>Avail No Cost EMI on select cards for orders above <b>₹3000</b></p>
                    <hr/>
                  <a class="product-link" href="#">View offer</a>
                  </div>

                </div>
                <div class="col-auto">
                  <div class="emi-box">
                    <p><b>No Cost EMI</b></p>
                    <p>Avail No Cost EMI on select cards for orders above <b>₹3000</b></p>
                    <hr/>
                  <a class="product-link" href="#">View offer</a>
                  </div>
                </div>
                <div class="col-auto">
                  <div class="emi-box">
                    <p><b>No Cost EMI</b></p>
                    <p>Avail No Cost EMI on select cards for orders above <b>₹3000</b></p>
                    <hr/>
                  <a class="product-link" href="#">View offer</a>
                  </div>
                </div>
              </div>
              <br/>
              <div class="row gy-2">
                <div class="col-md-6 col-sm-12">
                  <button class="cart-btn"><img src="./assets/shopping-cart.png" width="20"/>&nbsp;&nbsp;&nbsp;Add to cart</button>
                </div>
                <div class="col-md-6 col-sm-12">
                  <button class="buy-btn">Buy now</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <br/>

    <!-- Rating and review section -->
    <section class="container">
      <div class="accordion" id="accordionPanelsStayOpenExample">
        <div class="accordion-item accordion-item-custom">
          <h2 class="accordion-header" id="panelsStayOpen-headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
              <b>Product Specifications & Informations</b> <span class="accordion-line"><hr/></span>
            </button>
          </h2>
          <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
            <div class="accordion-body">
              <div class="row gy-3">
                <div class="col-lg-6">
                  <b>Technical Details</b>
                  <br/>
                  <table class="spec-table">
                    <tr><td> Os</td><td>Android 13</td></tr>
                    <tr><td> RAM</td><td> 13 GB</td></tr>
                    <tr><td>Product Dimensions</td><td>16.7 x 7.7 x 0.7 cm; 182 Grams</td></tr>
                    <tr><td> Batteries</td><td>1 Lithium Polymer batteries required. (included)</td></tr>
                    <tr><td> Os</td><td>Android 13</td></tr>
                  </table>
                </div>
                <div class="col-lg-6">
                  <b>Additional Informations</b>
                  <br/>
                  <table class="spec-table">
                    <tr><td> Os</td><td>Android 13</td></tr>
                    <tr><td> RAM</td><td> 13 GB</td></tr>
                    <tr><td>Product Dimensions</td><td>16.7 x 7.7 x 0.7 cm; 182 Grams</td></tr>
                    <tr><td> Batteries</td><td>1 Lithium Polymer batteries required. (included)</td></tr>
                    <tr><td> Os</td><td>Android 13</td></tr>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="accordion-item accordion-item-custom">
          <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
              <b>Ratings & Reviews</b> <span class="accordion-line"><hr/></span>
            </button>
          </h2>
          <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
            <div class="accordion-body">
              <div class="row">
                <div class="reviews">
                  <div class="review">
                     <div class="avatar-row">
                      <div class="avatar"></div><p class="username">Jacob</p>
                     </div>
                      <p>Great product. I love it!</p>
                      <div class="rating">Rating: <span class="rating">5.0</span></div>
                  </div>
                  <div class="review">
                    <div class="avatar-row">
                      <div class="avatar"></div><p class="username">Jacob</p>
                     </div>
                      <p>Good product, but it could be better.</p>
                      <div class="rating">Rating: <span class="rating">3.5</span></div>
                  </div>
              </div>
              </div>
            </div>
          </div>
        </div>
        <div class="accordion-item accordion-item-custom">
          <h2 class="accordion-header" id="panelsStayOpen-headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
              <b>Overview</b> <span class="accordion-line"><hr/></span>
            </button>
          </h2>
          <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
            <div class="accordion-body">
              <ul class="overview-list">
                <li>【1.83" HD Display Smart Watch】- The 46.48mm (1.83-inch) HD display makes the display clear and true-to-life, with vivid colours ensuring smooth readability and keeping the watch as exquisite to look at as when you first lay your eyes on it. The watch has a 280 NITS Peak Brightness</li>
                <li>【1.83" HD Display Smart Watch】- The 46.48mm (1.83-inch) HD display makes the display clear and true-to-life, with vivid colours ensuring smooth readability and keeping the watch as exquisite to look at as when you first lay your eyes on it. The watch has a 280 NITS Peak Brightness</li>
                <li>【1.83" HD Display Smart Watch】- The 46.48mm (1.83-inch) HD display makes the display clear and true-to-life, with vivid colours ensuring smooth readability and keeping the watch as exquisite to look at as when you first lay your eyes on it. The watch has a 280 NITS Peak Brightness</li>
                <li>【1.83" HD Display Smart Watch】- The 46.48mm (1.83-inch) HD display makes the display clear and true-to-life, with vivid colours ensuring smooth readability and keeping the watch as exquisite to look at as when you first lay your eyes on it. The watch has a 280 NITS Peak Brightness</li>
                <li>【1.83" HD Display Smart Watch】- The 46.48mm (1.83-inch) HD display makes the display clear and true-to-life, with vivid colours ensuring smooth readability and keeping the watch as exquisite to look at as when you first lay your eyes on it. The watch has a 280 NITS Peak Brightness</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- Similar Product -->
    <section class="sim-products container">
      <div class="row">
        <div class="col">
          <p class="main-heading">Similar products</p>
        </div>
        <div class="col" style="text-align: right;">
          <a href="#" class="product-link">View all</a>
        </div>
      </div>
      <div class="owl-slider">
        <div id="carousel" class="owl-carousel">
          <div class="product-card">
            <div class="wish-container"><i class="bi bi-heart-fill product-card-wish"></i></div>
            <div class="product-card-image">
              <img src="./assets/image-1-er4.png" alt=""/>
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
              <img src="./assets/image-1-er4.png" alt=""/>
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
              <img src="./assets/image-1-er4.png" alt=""/>
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
              <img src="./assets/image-1-er4.png" alt=""/>
            </div>
            <div class="off-row">
              <div class="offer-capsule">
                <p>10% off</p>
              </div>
              <p class="product-card-rate"><i class="bi bi-star-fill " style="color: yellow;"></i> 4.5</p>
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
              <img src="./assets/image-1-er4.png" alt=""/>
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
              <img src="./assets/image-1-er4.png" alt=""/>
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
              <img src="./assets/image-1-er4.png" alt=""/>
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

    <!-- top Product -->
    <section class="sim-products container">
      <div class="row">
        <div class="col">
          <p class="main-heading">Top Items</p>
        </div>
        <div class="col" style="text-align: right;">
          <a href="#" class="product-link">View all</a>
        </div>
      </div>
      <div class="owl-slider">
        <div id="carousel2" class="owl-carousel">
          <div class="product-card">
            <div class="wish-container"><i class="bi bi-heart-fill product-card-wish"></i></div>
            <div class="product-card-image">
              <img src="./assets/image-1-er4.png" alt=""/>
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
              <img src="./assets/image-1-er4.png" alt=""/>
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
              <img src="./assets/image-1-er4.png" alt=""/>
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
              <img src="./assets/image-1-er4.png" alt=""/>
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
              <img src="./assets/image-1-er4.png" alt=""/>
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
              <img src="./assets/image-1-er4.png" alt=""/>
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
              <img src="./assets/image-1-er4.png" alt=""/>
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
 <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="./js/jquery.min.js"></script>
<script src="./js/owl/owl.carousel.min.js"></script>
  <script src="./js/product_detail.js"></script>
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

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\saswa\Downloads\ecommerceadmin\ecommerceadmin\resources\views/productdetail.blade.php ENDPATH**/ ?>