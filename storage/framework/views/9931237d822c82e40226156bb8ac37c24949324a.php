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
                <a href="route('wbxadmin')">Dashboard</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page"><?php echo e($moduleDetails->name); ?></li>
            </ol>
          </nav>
            <h1 class="h3 m-0"><?php echo e($pageDetails->name); ?></h1>
        </div>
        </div>
      </div>
      <div
        class="sa-entity-layout"
        data-sa-container-query='{"920":"sa-entity-layout--size--md"}'
      >
        <div class="sa-entity-layout__body">
          <div class="sa-entity-layout__sidebar">
            <div class="card">
              <div
                class="card-body d-flex flex-column align-items-center"
              >
                <div class="pt-3">
                  <div
                    class="sa-symbol sa-symbol--shape--circle"
                    style="--sa-symbol--size: 6rem"
                  >
                    <img
                      src="<?php echo e(url('admin/images/customers/customer-4-128x128.jpg')); ?>"
                      width="96"
                      height="96"
                      alt=""
                    />
                  </div>
                </div>
                <div class="text-center mt-4">
                  <div class="fs-exact-16 fw-medium"><?php echo e($user['name']); ?></div>
                  <div class="fs-exact-13 text-muted">
                    <div class="mt-1">
                      <a href="#"><?php echo e($user['email']); ?></a>
                    </div>
                    <div class="mt-1"><?php echo e($user['phone']); ?></div>
                  </div>
                </div>
                <div class="sa-divider my-5"></div>
                <!-- <div class="w-100">
                  <dl class="list-unstyled m-0">
                    <dt class="fs-exact-14 fw-medium">Last Order</dt>
                    <dd class="fs-exact-13 text-muted mb-0 mt-1">
                      7 days ago – <a href="app-order.html">#80294</a>
                    </dd>
                  </dl>
                  <dl class="list-unstyled m-0 mt-4">
                    <dt class="fs-exact-14 fw-medium">
                      Average Order Value
                    </dt>
                    <dd class="fs-exact-13 text-muted mb-0 mt-1">
                      $574.00
                    </dd>
                  </dl>
                  <dl class="list-unstyled m-0 mt-4">
                    <dt class="fs-exact-14 fw-medium">Registered</dt>
                    <dd class="fs-exact-13 text-muted mb-0 mt-1">
                      2 months ago
                    </dd>
                  </dl>
                  <dl class="list-unstyled m-0 mt-4">
                    <dt class="fs-exact-14 fw-medium">
                      Email Marketing
                    </dt>
                    <dd class="fs-exact-13 text-muted mb-0 mt-1">
                      Subscribed
                    </dd>
                  </dl>
                </div> -->
              </div>
            </div>
          </div>
         
          <div class="sa-entity-layout__main">
            <div class="card">
                <div class="card-body p-5">
                  <div class="mb-5">
                    <h2 class="mb-0 fs-exact-18">
                      Basic information
                    </h2>
                    <!-- <div class="mt-3 text-muted">
                      Provide information that will help improve the
                      snippet and bring your product to the top of search
                      engines.
                    </div> -->
                  </div>
                  <?php if($errors->any()): ?>
                    <div class="alert alert-danger">
                        <label>Errors</label>
                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                  <?php endif; ?>
                  <form action="<?php echo e(route('users.update', $user['id'])); ?>" method="post" enctype="multipart/form-data">
                  <?php echo csrf_field(); ?>
                  <?php echo method_field('PUT'); ?>
                  <div class="form-colum">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="mb-4">
                                <label for="first-name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="first-name" name="name" value="<?php echo e($user['name']); ?>" />
                              </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="mb-4">
                                <label for="last-name" class="form-label">Username / Email</label>
                                <input type="email" class="form-control" id="last-name" name="email" value="<?php echo e($user['email']); ?>" />
                              </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="mb-4">
                                <label for="username" class="form-label">Phone</label>
                                <input type="text" class="form-control" id="username" name="phone" value="<?php echo e($user['phone']); ?>" />
                              </div>
                        </div>
                    </div> 
                         
                  </div>
                  <div class="radio-text">
                    <h6>Status</h6>
                  </div>
                  <div class="col">
                    <label class="form-check">
                        <input type="radio" class="form-check-input" name="status" id="radio" value="Y" <?php if($user->status == 'Y'){ ?>checked<?php } ?>><span class="form-check-label">Active</span>
                    </label>
                    <label class="form-check">
                        <input type="radio" class="form-check-input" name="status" id="radio" value="N" <?php if($user->status == 'N'){ ?>checked<?php } ?>><span class="form-check-label">Inactive</span>
                    </label>
                  </div>
                  <div class=" d-flex justify-content-end mt-5">
                  <input type="submit" class="btn btn-secondary me-3" name="Save"/>  
                  <a href="<?php echo e(route('users.index')); ?>" class="btn btn-primary">Cancel</a>
                  </div>  
                </form>                   
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('wbxadmin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/luluconnect/resources/views/wbxadmin/users/edit.blade.php ENDPATH**/ ?>