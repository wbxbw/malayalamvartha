<?php $__env->startSection('content'); ?>
<div id="top" class="sa-app__body">
  <div class="mx-sm-2 px-2 px-sm-3 px-xxl-4 pb-6">
      <div class="container container--max--xl">
        <div class="py-5">
            <div class="row g-4 align-items-center">
                <div class="col">
                    <nav class="mb-2" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-sa-simple">
                        <li class="breadcrumb-item">
                        <a href="<?php echo e(route('wbxadmin')); ?>">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Admin Dashboard</li>
                    </ol>
                    </nav>
                    <h1 class="h3 m-0">Admin Dashboard</h1>
                </div>
            </div>
        </div>
          <div class="row g-4">
            <?php $__currentLoopData = $modules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="col-6 col-md-4 col-lg-3">
                  <div class="card text-center">
                      <a href="<?php echo e(route($module->defaultPage['link'])); ?>" class="text-reset p-5 text-decoration-none sa-hover-area">
                          <div class="fs-4 mb-4 text-muted opacity-50" > 
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor">
                                <path d="<?php echo e($module['icon']); ?>"></path>
                            </svg>
                          </div>
                          <h2 class="fs-6 fw-medium mb-3"><?php echo e($module['name']); ?></h2>
                          <div class="text-muted fs-exact-14">
                             <?php echo e($module['title']); ?>

                          </div>
                        </a>
                  </div>
              </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
      </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('wbxadmin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\saswa\Downloads\ecommerceadmin\ecommerceadmin\resources\views/wbxadmin/dashboard.blade.php ENDPATH**/ ?>