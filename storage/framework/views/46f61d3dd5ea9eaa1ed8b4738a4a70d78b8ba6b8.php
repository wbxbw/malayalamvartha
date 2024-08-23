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
      <div class="sa-entity-layout" data-sa-container-query='{"920":"sa-entity-layout--size--md","1100":"sa-entity-layout--size--lg"}' >
        <div class="sa-entity-layout__body">
          <div class="sa-entity-layout__main">
            <div class="card">
                <div class="card-body p-5">
                  <div class="mb-5">
                    <h2 class="mb-0 fs-exact-18">
                      Category information
                    </h2>
                  </div>
                  <form action="<?php echo e(route('categories.store')); ?>" method="post" enctype="multipart/form-data">
                  <?php echo csrf_field(); ?>
                  <div class="form-colum">
                    <div class="mb-4">
                      <label for="first-name" class="form-label">Parent Category</label>
                      <select class="form-select" name="parent" id="parent">
                          <?php echo $CategoriesDropdownDetails; ?>

                      </select>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="mb-4">
                                <label for="name" class="form-label">Category Name</label>
                                <input type="text" placeholder="Page Name" class="form-control" id="titleInput" name="name" />
                              </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="mb-4">
                              <label for="form-product/slug" class="form-label">Slug</label>
                              <div class="input-group input-group--sa-slug">
                                <span class="input-group-text" id="form-product/slug-addon" ><?php echo e($settings->values); ?>/</span >
                                <input type="text" class="form-control" id="slugOutput" name="link" aria-describedby="form-product/slug-addon form-product/slug-help" value="content-slug-data"/>
                              </div>
                              <div id="form-product/slug-help" class="form-text">
                                Unique human-readable product identifier. No longer
                                than 255 characters.
                              </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="mb-4">
                                <label for="meta-tittle" class="form-label">Category Tittle</label>
                                <input type="text" placeholder="Meta Title" class="form-control" id="meta_title" name="meta_title" />
                              </div>
                        </div>
                    </div>
                    <div class = "mb-4">
                    <label for="meta-keywords" class="form-label ">Meta Keywords</label>
                        <textarea placeholder="Text Area" class="form-control" rows="3" id="meta_keyword" name="meta_keyword"></textarea>
                    </div>
                    <div class = "mb-3">
                    <label for="meta-keywords" class="form-label">Meta Description</label>
                    <textarea placeholder="Text Area" class="form-control" rows="3" id="meta_description" name="meta_description"></textarea>
                    </div>
                    <div class="mb-4">
                      <label for="formFile-1" class="form-label" >Image Upload</label>
                      <input type="file" name='image' class="form-control" id="formFile-1"/>

                      <?php if($errors->any()): ?>
                      <?php echo implode('', $errors->all('<div>:message</div>')); ?>

                  <?php endif; ?>

                    </div>
                    <div class=" d-flex justify-content-end mt-5">
                    <input type="submit" class="btn btn-secondary me-3" name="Save"/>
                    <a href="#" class="btn btn-primary">Cancel</a>
                    </div>
                  </div>
                  </form>
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
                    <input type="radio" class="form-check-input" name="status" /><span class="form-check-label" >Published</span ></label ><label class="form-check" >
                    <input type="radio" class="form-check-input" name="status" checked="" /><span class="form-check-label" >Scheduled</span ></label ><label class="form-check mb-0">
                    <input type="radio" class="form-check-input" name="status" /><span class="form-check-label" >Hidden</span ></label >
                </div>
                <div>
                  <label for="form-product/seo-title" class="form-label" >Publish date</label >
                  <input type="text" class="form-control datepicker-here" id="form-product/publish-date" data-auto-close="true" data-language="en" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
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

<?php echo $__env->make('wbxadmin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\saswa\Downloads\ecommerceadmin\ecommerceadmin\resources\views/wbxadmin/categories/create.blade.php ENDPATH**/ ?>