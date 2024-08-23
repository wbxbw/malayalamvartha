<?php $__env->startSection('title','Lulu Connect || Product List'); ?>
<?php $__env->startSection('content'); ?>

<section>
        <div class="container-fluid product-listing-container pt-3">
            <div class="row">
                <div class="col-12 col-lg-3 col-md-4 order-2 order-md-1 left-col justify-content-center hide-on-md">
                    <div class="label sort-by-p">SORT BY</div>
                    <div class="input-group mb-3">

                        <select class="form-select sort-by-dropdown" aria-label="sort-by">
                            <option selected>Featured</option>
                            <option value="1">Price(Lowest First)</option>
                            <option value="2">Top Rated</option>
                            <option value="3">Price(Highest First)</option>
                            <option value="4">Discount(Decending)</option>
                            <option value="5">Latest Arrival</option>
                        </select>
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <p class="filter-by-p">FILTER BY</p>
                        </div>
                    </div>
                    <div class="divider"></div>

                    <p class="sort-by-p">Categories</p>
                    <div class="input-group mb-3">
                        <input class="form-check-input mt-0" type="checkbox" value="">
                        <span>Mobile Accessories(3196)</span>
                    </div>
                    <div class="input-group mb-3">
                        <input class="form-check-input mt-0" type="checkbox" value="">
                        <span>MobileCases & Covers(1192)</span>
                    </div>
                    <div class="input-group mb-3">
                        <input class="form-check-input mt-0" type="checkbox" value="">
                        <span>Smart Watches(1039)</span>
                    </div>
                    <div class="input-group mb-3">
                        <input class="form-check-input mt-0" type="checkbox" value="">
                        <span>Android Phones(739)</span>
                    </div>
                </div>

                <div class="col-12 col-lg-9 col-md-12 order-1 order-md-2 right-col">
                    <div class="row justify-content-center divider p-10">
                        <div class="col-6">
                            <h5 class="h5">Phones & Wearables</h5>
                        </div>
                        <div class="col-6 text-end">
                            <h5 class="h5"><?php echo e($count); ?> Products found</h5>
                        </div>
                    </div>



                 <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>






                    <div class="row pt-3 pb-3 ml-5px divider">
                        <div class="col col-4 d-grid justify-content-center align-items-center">
                          <div class="input-group mb-3 justify-content-center">
                            <input class="form-check-input mt-0" type="checkbox" value="">
                            <span>Compare</span>
                        </div>
                            <div class="product-image-wrapper">


                                <a href="<?php echo e(route('home.productdetail', ['id' => $product->id])); ?>">

                             <?php

                                 $result = \App\Http\Controllers\ProductsController::getImages($product->id);
                                    echo $result;
                             ?>

                                </a>


                            </div>

                        </div>
                        <div class="col col-8 pr-rem">
                            <div class="product-name d-flex">

                                <a  href="<?php echo e(route('home.productdetail', ['id' => $product->id])); ?>" class="product-heading text-bold text-md-start cursor-pointer"><?php echo e($product->name); ?></a>
                                <div class="heart-icon-container"><i id="product-card-wish" class="bi bi-heart-fill"></i>
                                </div>
                            </div>

                            <div class="amount">
                                <p class="product-heading text-bold text-md-start">&#8377;<?php echo e($product->price); ?></p>
                                <p class="rating-text text-start">(Incl. all Taxes)</p>
                            </div>
                            <div class="prev-amount d-flex center-y">
                                <p class="prev-price text-line-through pr-1">MRP: &#8377;29,000</p>
                                <p class="rating-text pl-1 text-nowrap pr-1">(Save &#8377;8,000)</p>
                                <span class="percent-off rating-text pl-1 text-nowrap">18% off</span>
                            </div>
                            <div class="delivery">
                                <div class="d-flex justify-content-start center-y">
                                    <span class="location-icon"><i class="bi bi-geo-alt"></i></span>
                                    <p class="rating-text">Delivery at: <a href="#">Mumbai, 900001</a></p>
                                </div>
                                <p class="rating-text">Standard Delivery by Fri, 20th Oct</p>
                            </div>

                            <div class="rating pt-1">
                              <p class="rating-text text-start">5 &#9733; (<a href="#">5 Ratings & 5 Reviews</a>)</p>
                          </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>

        <div class="bottom-bar d-lg-none bg-color-bottom-bar">
            <div class="row justify-content-center">
                <div class="col-6 filters d-flex justify-content-center right-divider">
                    <span><i class="bi bi-sort-down"></i></span>
                    <p>SORT</p>
                </div>
                <div class="col-6 filters d-flex justify-content-center">
                    <span><i class="bi bi-funnel"></i></span>
                    <p>SORT</p>
                </div>
            </div>
        </div>

    </section>

        <?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\saswa\Downloads\ecommerceadmin\ecommerceadmin\resources\views/productlist.blade.php ENDPATH**/ ?>