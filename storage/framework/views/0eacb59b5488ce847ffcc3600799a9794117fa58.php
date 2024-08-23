
<?php $__env->startSection('content'); ?>
<script src="https://cdn.jsdelivr.net/npm/slugify"></script>
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
      <form action="<?php echo e(route('categories.addspecval')); ?>" method="post">
      <?php echo csrf_field(); ?>
      <div class="sa-entity-layout" data-sa-container-query='{"920":"sa-entity-layout--size--md","1100":"sa-entity-layout--size--lg"}' >
        <div class="sa-entity-layout__body">
          <div class="sa-entity-layout__main">
            <div class="card">
                <div class="card-body p-5">
                  <div class="mb-5">
                    <h2 class="mb-0 fs-exact-18">
                      Value information
                    </h2>
                  </div>
                  
                  <div class="form-colum">
                    <div class="mb-4">
                      <label for="first-name" class="form-label">Specification</label>
                      <input disabled class="form-control" id="titleInput" value="<?php echo e($specification['name']); ?>" />
                      <input type="hidden"  name="specification" value="<?php echo e($specification['id']); ?>" />
                    </div> 
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="mb-4">
                                <label for="name" class="form-label">Value Name</label>
                                <input type="text" placeholder="Specification Name" class="form-control" id="titleInput" name="name" />
                              </div>
                        </div>
                    </div>
                    <div class = "mb-4">
                    <label for="meta-keywords" class="form-label ">Value Description</label>
                        <textarea placeholder="Description" class="form-control" rows="3" id="meta_keyword" name="description"></textarea> 
                    </div>
                         <div class="mb-4">
                        <label for="meta-keywords" class="form-label ">Image</label>
                        <input type="file" class="form-control" id="meta_keyword" name="image" />
                    </div>
                    <div class=" d-flex justify-content-end mt-5">
                    <input type="submit" class="btn btn-secondary me-3" name="Save"/>
                    <a href="#" class="btn btn-primary">Cancel</a>
                    </div>
                  </div>
                </div>
              </div>
          </div>
          <div class="sa-entity-layout__sidebar">
            <div class="card w-100">
              <div class="card-body p-5">
                <div class="mb-5">
                  <h2 class="mb-0 fs-exact-18">Visibility</h2>
                </div>
                <div class="mb-4">
                  <label class="form-check">
                    <input type="radio" class="form-check-input" name="status" value="Y" checked/><span class="form-check-label" >Publish</span ></label ><label class="form-check" >
                    <input type="radio" class="form-check-input" name="status" value="N" /><span class="form-check-label" >Draft</span ></label ><label class="form-check mb-0">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </form>
    </div>
  </div>
</div>
<script>
    function generateSlug() {
        var titleInput = document.getElementById('titleInput');
        var slug = slugify(titleInput.value);
        document.getElementById('slugOutput').value = slug;
    }
    document.getElementById('titleInput').addEventListener('input', generateSlug);
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('wbxadmin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home4/maichavx/public_html/lulu_demo/resources/views/wbxadmin/categories/createspecvalues.blade.php ENDPATH**/ ?>