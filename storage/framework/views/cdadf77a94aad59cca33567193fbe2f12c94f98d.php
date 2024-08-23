<?php $__env->startSection('title','General Settings || E-commerce Admin'); ?>
<?php $__env->startSection('content'); ?>
<div id="top" class="sa-app__body">
  <div class="mx-sm-2 px-2 px-sm-3 px-xxl-4 pb-6">
      <div class="container container--max--lg">
        <div class="py-5">
          <div class="row g-4 align-items-center">
          <div class="col">
          <nav class="mb-2" aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-sa-simple">
              <li class="breadcrumb-item">
                <a href="route('wbxadmin')">Dashboard</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page"><?php echo e($moduleDetails->name); ?></li>
            </ol>
          </nav>
            <h1 class="h3 m-0"><?php echo e($pageDetails->name); ?></h1>
        </div>
          <div class="col-auto d-flex"><a href="#" class="btn btn-secondary me-3">Reset</a><a href="#" class="btn btn-primary">Save</a></div>
        </div>
        </div>
        <div class="card">
            <div class="card-body p-5">
            <?php $__currentLoopData = $settings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $setting): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="mb-4"><label for="<?php echo e($setting['caption']); ?>" class="form-label"><?php echo e($setting['caption']); ?></label><input type="text" class="form-control" id="form-settings/name" value="<?php echo e($setting['values']); ?>"/></div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
      </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('wbxadmin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home4/maichavx/public_html/lulu_demo/resources/views/wbxadmin/settings.blade.php ENDPATH**/ ?>