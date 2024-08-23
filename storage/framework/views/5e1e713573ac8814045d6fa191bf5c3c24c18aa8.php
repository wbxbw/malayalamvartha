
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
          <div class="col-auto d-flex">
            <a href="#" class="btn btn-secondary me-3">Duplicate</a
            ><a href="#" class="btn btn-primary">Save</a>
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
                <form action="<?php echo e(route('modules.store')); ?>" method="post">
                  <?php echo csrf_field(); ?>
                  <div class="form-colum">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="mb-4">
                                <label for="first-name" class="form-label">Module Name</label>
                                <input type="text" class="form-control" id="name" name="name" />
                              </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="mb-4">
                                <label for="last-name" class="form-label">Module Title</label>
                                <input type="text" class="form-control" id="title" name="title" />
                              </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="mb-4">
                                <label for="username" class="form-label">Module Icon</label>
                                <input type="text" class="form-control" id="icon" name="icon" />
                              </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="mb-4">
                                <label for="password" class="form-label">Module Image</label>
                                <input type="text" class="form-control" id="image" name="image" />
                              </div>
                        </div>
                    </div>        
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

<?php echo $__env->make('wbxadmin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\saswa\Downloads\ecommerceadmin\ecommerceadmin\resources\views/wbxadmin/modules/create.blade.php ENDPATH**/ ?>