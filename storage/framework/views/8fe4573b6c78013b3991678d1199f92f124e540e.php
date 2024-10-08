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
              <div class="mb-4"><label for="form-settings/description" class="form-label">Store Description</label><textarea class="form-control" id="form-settings/description" rows="4">Tools Store HTML eCommerce Template</textarea></div>
              <div class="mb-n2">
                  <label for="form-settings/email" class="form-label">Email Address</label><input type="email" class="form-control" id="form-settings/email" aria-describedby="form-settings/email/help" value="stroyka@example.com"/>
                  <div id="form-settings/email/help" class="form-text">The contact email address of the store administrator.</div>
              </div>
            </div>
        </div>
        <div class="card mt-5">
            <div class="card-body p-5">
              <div class="mb-5">
                  <h2 class="mb-0 fs-exact-18">Measurements</h2>
                  <div class="mt-3 text-muted">The units of measurement that will be used to determine the weight, height, width and length of goods.</div>
              </div>
              <div class="row g-4">
                  <div class="col-6">
                    <label for="form-settings/weight-unit" class="form-label">Weight Unit</label>
                    <select id="form-settings/weight-unit" class="form-select">
                        <option selected="">kg</option>
                        <option>g</option>
                        <option>lbs</option>
                        <option>oz</option>
                    </select>
                  </div>
                  <div class="col-6">
                    <label for="form-settings/dimensions-unit" class="form-label">Dimensions Unit</label>
                    <select id="form-settings/dimensions-unit" class="form-select">
                        <option selected="">m</option>
                        <option>cm</option>
                        <option>mm</option>
                        <option>in</option>
                        <option>yd</option>
                    </select>
                  </div>
              </div>
            </div>
        </div>
        <div class="card mt-5">
            <div class="card-body p-5">
              <div class="mb-5">
                  <h2 class="mb-0 fs-exact-18">Date &amp; Time</h2>
                  <div class="mt-3 text-muted">Timezone, date and time format settings used in the admin panel and storefront.</div>
              </div>
              <div class="mb-4">
                  <label for="form-settings/timezone" class="form-label">Timezone</label>
                  <select id="form-settings/timezone" class="form-select">
                    <option>Europe/Berlin</option>
                    <option selected="">Europe/Kiev</option>
                    <option>Europe/London</option>
                    <option>Europe/Minsk</option>
                    <option>Europe/Moscow</option>
                    <option>Europe/Paris</option>
                    <option>Europe/Warsaw</option>
                  </select>
              </div>
              <div class="mb-4">
                  <label for="form-settings/date-format" class="form-label">Date Format</label>
                  <select id="form-settings/date-format" class="form-select">
                    <option selected="">October 19, 2020 (F j, Y)</option>
                    <option>2020-11-08 (Y-m-d)</option>
                    <option>11/08/2020 (m/d/Y)</option>
                    <option>08/11/2020 (d/m/Y)</option>
                    <option>Custom</option>
                  </select>
              </div>
              <div>
                  <label for="form-settings/time-format" class="form-label">Time Format</label>
                  <select id="form-settings/time-format" class="form-select">
                    <option selected="">10:57 am (g:i a)</option>
                    <option>10:57 AM (g:i A)</option>
                    <option>10:57 (H:i)</option>
                    <option>Custom</option>
                  </select>
              </div>
            </div>
        </div>
        <div class="card mt-5">
            <div class="card-body p-5">
              <div class="mb-5">
                  <h2 class="mb-0 fs-exact-18">Reviews &amp; Comments</h2>
                  <div class="mt-3 text-muted">All settings related to feedback and comments system.</div>
              </div>
              <div class="mb-4">
                  <div class="form-label">Enable Reviews</div>
                  <div><label class="form-check form-check-inline mb-0"><input type="radio" class="form-check-input" name="settings[reviews]"/><span class="form-check-label">No</span></label><label class="form-check form-check-inline mb-0"><input type="radio" class="form-check-input" name="settings[reviews]" checked=""/><span class="form-check-label">Yes</span></label></div>
              </div>
              <div>
                  <div class="form-label">Product Ratings</div>
                  <div><label class="form-check"><input type="checkbox" class="form-check-input" checked=""/><span class="form-check-label">Enable star rating on reviews</span></label><label class="form-check mb-0"><input type="checkbox" class="form-check-input"/><span class="form-check-label">Star ratings should be required, not optional</span></label></div>
              </div>
            </div>
        </div>
      </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('wbxadmin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\saswa\Downloads\ecommerceadmin\ecommerceadmin\resources\views/wbxadmin/settings.blade.php ENDPATH**/ ?>