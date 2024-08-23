
<?php $__env->startSection('content'); ?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<div class="row mb-5">
    <div class="col-12">
        <div class="multisteps-form mb-5">
            <div class="row">
                <div class="col-12 col-lg-12 m-auto">
                    <form class="multisteps-form__form mb-8" action="<?php echo e(route('products.store')); ?>" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="card multisteps-form__panel p-3 border-radius-xl bg-white js-active" data-animation="FadeIn">
                            <h5 class="font-weight-bolder mb-0">Add new product</h5>
                            <!-- <p class="mb-0 text-sm">Major informations</p> -->
                            <div class="multisteps-form__content">
                                
                                <div class="row mt-3">
                                    <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                        <label>Product Name <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"> * <?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></label>
                                        <input class="multisteps-form__input form-control" type="text" name="name" id="name" placeholder="eg. Product Name" value="<?php echo e(old('name')); ?>" />
                                    </div>
                                    <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                        <label>Sector <?php $__errorArgs = ['sector_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"> * <?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></label>
                                        <select name="sector_id" id="sector_id" class="multisteps-form__input form-control">
                                            <option value="">Select</option>
                                            <?php $__currentLoopData = $sectors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sector): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($sector['id']); ?>" <?php echo e(old('sector_id') == $sector['id'] ? 'selected' : ''); ?>><?php echo e($sector['name']); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    
                                </div>
                                <div class="row mt-3">
                                    <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                        <label>Category <?php $__errorArgs = ['category'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"> * <?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></label>
                                        <div class="choices">
                                            <input class="multisteps-form__input form-control choices__input" type="text" name="category" id="category-search" placeholder="eg. Category" value="<?php echo e(old('category')); ?>" />
                                            <ul id="category-list" class="choices__list--dropdown"></ul>
                                        </div>
                                    </div> 
                                    <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                        <label>Sub Category <?php $__errorArgs = ['sub_category'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"> * <?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></label>
                                        <div class="choices">
                                            <input class="multisteps-form__input form-control choices__input" type="text" name="sub_category" id="sub-category-search" placeholder="eg. Sub Category" value="<?php echo e(old('sub_category')); ?>" />
                                            <ul id="sub-category-list" class="choices__list--dropdown"></ul>
                                        </div>    
                                    </div>
                                    <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                        <label>Brand <?php $__errorArgs = ['org_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"> * <?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></label>
                                        <select name="org_id" id="org_id" class="multisteps-form__input form-control">
                                            <option value="">Select</option>
                                            <?php $__currentLoopData = $organizations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $org): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($org['id']); ?>" <?php echo e(old('org_id') == $org['id'] ? 'selected' : ''); ?>><?php echo e($org['name']); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="button-row d-flex mt-4">
                                    <input type="submit" class="btn bg-gradient-dark ms-auto mb-0" name="Submit"/>
                                </div>
                            </div>
                        </div>

                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo e(url('admin/assets/js/plugins/choices.min.js')); ?>"></script>
<script>
    $(document).ready(function () {

        var categories = <?php echo json_encode($categories, 15, 512) ?>;
        var subCategories = <?php echo json_encode($subCategories, 15, 512) ?>;

        $('#category-search').on('keyup', function () {
            let query = $(this).val().toLowerCase();

            $('#category-list').empty();

            if (query.length > 0) {
                let matches = categories.filter(item => item.toLowerCase().includes(query));

                if (matches.length > 0) {
                    $.each(matches, function (index, item) {
                        $('#category-list').append('<li class="choices__item">' + item + '</li>');
                    });
                    $('#category-list').addClass('is-active');
                } else {
                    $('#category-list').append('<li class="choices__item">No matches found</li>');
                    $('#category-list').addClass('is-active');
                }
            } else {
                $('#category-list').removeClass('is-active');
            }
        });

        $('#sub-category-search').on('keyup', function () {
            let query = $(this).val().toLowerCase();

            $('#sub-category-list').empty();

            if (query.length > 0) {
                let matches = subCategories.filter(item => item.toLowerCase().includes(query));

                if (matches.length > 0) {
                    $.each(matches, function (index, item) {
                        $('#sub-category-list').append('<li class="choices__item">' + item + '</li>');
                    });
                    $('#sub-category-list').addClass('is-active');
                } else {
                    $('#sub-category-list').append('<li class="choices__item">No matches found</li>');
                    $('#sub-category-list').addClass('is-active');
                }
            } else {
                $('#sub-category-list').removeClass('is-active');
            }
        });

        $('#category-list').on('click', 'li', function () {
            $('#category-search').val($(this).text());
            $('#category-list').removeClass('is-active');
        });

        $('#sub-category-list').on('click', 'li', function () {
            $('#sub-category-search').val($(this).text());
            $('#sub-category-list').removeClass('is-active'); // Hide the dropdown after selection
        });

        // Hide the dropdown if clicked outside
        $(document).on('click', function (event) {
            if (!$(event.target).closest('.choices').length) {
                $('#category-list').removeClass('is-active');
                $('#sub-category-list').removeClass('is-active');
            }
        });
    });
</script>
<script>
        if (document.getElementById('choices-language')) {
            var language = document.getElementById('choices-language');
            const example = new Choices(language);
        }
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('wbxadmin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/qotz/resources/views/wbxadmin/products/create.blade.php ENDPATH**/ ?>