
<?php $__env->startSection('content'); ?>
<div id="top" class="sa-app__body">
  <div class="mx-sm-2 px-2 px-sm-3 px-xxl-4 pb-6">
    <div class="container">
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
        data-sa-container-query='{"920":"sa-entity-layout--size--md","1100":"sa-entity-layout--size--lg"}'
      >
        <div class="sa-entity-layout__body">
          <div class="sa-entity-layout__main">
            <div class="card mt-5">
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

                <form action="<?php echo e(route('users.store')); ?>" method="post" enctype="multipart/form-data">
                  <?php echo csrf_field(); ?>
                  <div class="form-colum">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="mb-4">
                                <label for="first-name" class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="first-name" name="name" />
                              </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="mb-4">
                                <label for="username" class="form-label">Email (Username)</label>
                                <input type="text" class="form-control" id="username" name="email" />
                              </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="mb-4">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="text" class="form-control" id="phone" name="phone" />
                              </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="mb-4">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="" name="password" />
                              </div>
                        </div>
                    </div>
                          
                  </div>
                  <div class="radio-text">
                    <h6>Status</h6>
                  </div>
                  <div class="col">
                    <label class="form-check">
                        <input type="radio" class="form-check-input" name="status" id="radio1" value="Y" checked><span class="form-check-label">Active</span>
                    </label>
                    <label class="form-check">
                        <input type="radio" class="form-check-input" name="status" id="radio2" value="N"><span class="form-check-label">Inactive</span>
                    </label>
                  </div>
                  <div class=" d-flex justify-content-end mt-5">
                    <input type="submit" class="btn btn-secondary me-3" name="Save"/>
                    <a href="#" class="btn btn-primary">Cancel</a>
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

<?php echo $__env->make('wbxadmin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/luluconnect/resources/views/wbxadmin/users/create.blade.php ENDPATH**/ ?>