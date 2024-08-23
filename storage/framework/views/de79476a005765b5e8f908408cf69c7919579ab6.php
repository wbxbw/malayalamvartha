<?php $__env->startSection('title','Lulu Connect || Product List'); ?>
<?php $__env->startSection('content'); ?>
<style>
    #submit-button {
        display: none;
        position: fixed;
        top: 50%;
        right: 20px;
        transform: translateY(-50%);
        background-color: #0d4f9d;
        color: white;
        border: none;
        border-radius: 50px; /* Adjust to make it more oval-shaped */
        padding: 10px 20px;
        font-size: 16px;
        cursor: pointer;
        outline: none;
    }
</style>
<section style="padding-top:0px;">
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
                    <?php $__currentLoopData = $specifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $spec): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <p class="sort-by-p"><?php echo e($spec->name); ?></p>
                        <?php
                            $spec_values = DB::table('spec_vlues')->where('specification_id',$spec->id)->get();
                        ?>

                        <?php $__currentLoopData = $spec_values; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $spval): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                            $count = DB::table('product_specs')->where('spec_value_id',$spval->id)->count();
                        ?>
                        <div class="input-group mb-3">
                            <input class="form-check-input mt-0" type="checkbox" value="">
                            <span><?php echo e($spval->name); ?>(<?php echo e($count); ?>)</span>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
            </div>

            <div class="col-12 col-lg-9 col-md-12 order-1 order-md-2 right-col">
                <div class="row justify-content-center divider p-10">
                    <div class="col-6">
                        <h5 class="h5"><?php echo e($category['name']); ?></h5>
                    </div>
                    <div class="col-6 text-end">
                        <h5 class="h5"><?php echo e($prcount); ?> Products found</h5>
                    </div>
                </div>

                <form action="<?php echo e(route('home.comparison')); ?>" method="get" id="myFormCompare">
                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                    $reduced_price = ($product->price * $product->discount / 100);
                    $discounted_price = $product->price - $reduced_price;
                    ?>
                    <div class="row pt-3 pb-3 ml-5px divider">
                        <div class="col col-4 d-grid justify-content-center align-items-center">
                            
                            
                            <div class="product-image-wrapper">
                                <img class="image-fluid product-image" src="<?php echo e(url('img/articles/products/'.$product->images->first()->image)); ?>" alt=""
                                    srcset="">
                            </div>
                            <div class="input-group mb-3 mt-3 justify-content-center">
                            <input class="form-check-input mt-0" type="checkbox" name="prd[]" id="checkbox<?php echo e($product->id); ?>" value="<?php echo e($product->id); ?>">
                            <span>Compare</span>
                            </div>

                        </div>
                        <div class="col col-8 pr-rem">
                            
                            <div class="product-name d-flex">
                                <p class="product-heading text-bold text-md-start"><a href="<?php echo e(route('home.productdetail', ['id' => $product->link])); ?>"><?php echo e($product->name); ?></a></p>
                            </div>
                            <?php if($product->brand): ?>
                            <div class="amount">
                                <p class="rating-text text-start">Brand : <?php echo e($product->brandn->name); ?></p>
                            </div>
                            <?php endif; ?>

                            <div class="amount">
                                <p class="prod-price">&#8377;<?php echo e(number_format($discounted_price, 0, '.', ',')); ?></p>
                                <p class="rating-text text-start">(Incl. all Taxes)</p>
                            </div>
                            <?php if($product->discount != 0 || $product->discount != ''): ?>
                            <div class="prev-amount d-flex center-y">
                                <p class="prev-price text-line-through pr-1">MRP: &#8377;<?php echo e(number_format($product->price, 0, '.', ',')); ?></p>
                                <p class="rating-text pl-1 text-nowrap pr-1">(Save &#8377;<?php echo e(number_format($reduced_price, 0, '.', ',')); ?>)</p>
                                <span class="offer-capsule"><?php echo e($product->discount); ?>% off</span>
                            </div>
                            <?php endif; ?>
                            <div class="delivery">
                                <div class="d-flex justify-content-start center-y">
                                    <span class="location-icon"><i class="bi bi-geo-alt"></i></span>
                                    <p class="rating-text">Delivery at: <a href="#">Edapally, Kochi, 682021</a></p>
                                </div>
                                <p class="rating-text">Standard Delivery by 3 days</p>
                                <p class="rating-text">In Stock - 30 Units</p>
                            </div>

                            <!-- <div class="rating pt-1">
                                <p class="rating-text text-start">5 &#9733; (<a href="#">5 Ratings & 5 Reviews</a>)</p>
                            </div> -->
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <button id="submit-button">Compare Products</button>
                </form>
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
<script>
        const checkboxes = document.querySelectorAll('input[type="checkbox"]');
        const submitButton = document.getElementById('submit-button');

        const form = document.getElementById('myFormCompare');

        form.addEventListener('submit', function(event) {
            const checkedCheckboxes = document.querySelectorAll('input[type="checkbox"]:checked');
            
            if (checkedCheckboxes.length < 2) {
                event.preventDefault(); // Prevent form submission
                alert('Please select at least 2 products to compare.');
            }
        });

        checkboxes.forEach(function(checkbox) {
            checkbox.addEventListener('change', function() {
                // const checkedCheckboxes = document.querySelectorAll('input[type="checkbox"]:checked');
                const checkedCheckboxes = document.querySelectorAll('input[type="checkbox"][name="prd[]"]:checked');

                
                if (checkedCheckboxes.length >= 2 && checkedCheckboxes.length <= 4) {
                    submitButton.style.display = 'block';
                } else {
                    submitButton.style.display = 'none';
                }

                if (checkedCheckboxes.length > 4) {
                    alert('You can only select up to 4 checkboxes.');
                    this.checked = false;
                    submitButton.style.display = 'block';
                }
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home4/maichavx/public_html/lulu_demo/resources/views/productlist.blade.php ENDPATH**/ ?>