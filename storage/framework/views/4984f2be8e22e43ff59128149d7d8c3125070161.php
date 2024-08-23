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
      <form action="<?php echo e(route('categories.update', $category['id'])); ?>" method="post" enctype="multipart/form-data">
                  <?php echo csrf_field(); ?>
                  <?php echo method_field('PUT'); ?>
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
                                <input type="text" placeholder="Page Name" class="form-control" id="titleInput" name="name" value="<?php echo e($category['name']); ?>" />
                              </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="mb-4">
                              <label for="form-product/slug" class="form-label">Slug</label>
                              <label for="form-product/slug" class="form-label" style="float:right; cursor:pointer;" onclick="copyPrefixedValue()">Click here to copy</label> 
                              <div class="input-group input-group--sa-slug">
                                <span class="input-group-text" id="form-product/slug-addon" ><?php echo e($settings->values); ?>/category/</span >
                                <input type="text" class="form-control" id="slugOutput" name="link" aria-describedby="form-product/slug-addon form-product/slug-help" value="<?php echo e($category['link']); ?>"/>
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
                                <input type="text" placeholder="Meta Title" class="form-control" id="meta_title" name="meta_title" value="<?php echo e($category['meta_title']); ?>" />
                              </div>
                        </div>
                    </div>
                    <div class = "mb-4">
                    <label for="meta-keywords" class="form-label ">Meta Keywords</label>
                        <textarea placeholder="Text Area" class="form-control" rows="3" id="meta_keyword" name="meta_keyword"><?php echo e($category['meta_keyword']); ?></textarea> 
                    </div>
                    <div class = "mb-3">
                    <label for="meta-keywords" class="form-label">Meta Description</label>
                    <textarea placeholder="Text Area" class="form-control" rows="3" id="meta_description" name="meta_description"><?php echo e($category['meta_description']); ?></textarea> 
                    </div>   
                    <!-- <div class="mb-4">
                      <label for="formFile-1" class="form-label" >Image Upload</label> 
                      <input type="file" name="img" class="form-control" id="formFile-1"/>
                    </div> -->
                    <br>
                    <div class="row">
                        <div class="col-lg-2 col-md-2">
                            <div class="mb-4">
                              <label for="meta-tittle" class="form-label">Image Preview</label>
                              <div class="sa-symbol sa-symbol--shape--rounded sa-symbol--size--lg">
                                  <img <?php if ($category['img'] != '') { ?> src="<?php echo e(url('wx.images/categories/'.$category['img'])); ?>" <?php } else { ?> src="<?php echo e(url('sample/imgpreview.png')); ?>" <?php } ?> id="previmg" width="40" height="40" alt="">
                              </div>
                            </div>
                        </div>
                        <div class="col-lg-10 col-md-10">
                            <div class="mb-4">
                              <label for="meta-tittle" class="form-label">Image Upload</label>
                              <input type="file" name="img" id="imginp" class="form-control" id="formFile-1" onchange="previewImage(this)"/>
                            </div>
                        </div>
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
                    <h2 class="mb-0 fs-exact-18">Visibility Status</h2>
                  </div>
                  <div class="mb-4">
                    <label class="form-check">
                      <input type="radio" class="form-check-input" name="status" value="Y" <?php if ($category['status'] == 'Y') { ?>checked<?php } ?> /><span class="form-check-label" >Published</span ></label ><label class="form-check" >
                      <input type="radio" class="form-check-input" name="status" value="N" <?php if ($category['status'] == 'N') { ?>checked<?php } ?> /><span class="form-check-label" >Drafted</span ></label >
                  </div>
                  <div class="mb-4">
                    <label for="form-product/seo-title" class="form-label" >Published date</label > 
                    <input type="disabled" class="form-control" data-auto-close="true" data-language="en" value="<?php echo e(date('d-M-Y', strtotime($category['created_at']))); ?>" />
                  </div>
                  <div class="mb-4">
                    <label for="form-product/seo-title" class="form-label" >Updated date</label > 
                    <input type="disabled" class="form-control" data-auto-close="true" data-language="en" value="<?php echo e(date('d-M-Y', strtotime($category['updated_at']))); ?>" /><label class="form-check mb-0" >
                  </div>
                </div>
              </div>

              <div class="card w-100 mt-5">
                <div class="card-body p-5">
                  <div class="mb-5">
                    <h2 class="mb-0 fs-exact-18">Brands</h2>
                  </div>
                  <select class="sa-select2 form-select" name="selectBrands[]" data-tags="true" multiple="">
                  <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <?php $selected = in_array($brand->id, $categoryBrands); ?>
                      <option value="<?php echo e($brand->id); ?>" <?php echo e($selected ? 'selected' : ''); ?>><?php echo e($brand->name); ?></option>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
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

function previewImage() {
    var fileInput = document.getElementById('imginp');
    var previewImg = document.getElementById('previmg');

    fileInput.addEventListener('change', function() {
        var file = this.files[0];
        if (file) {
            var reader = new FileReader();
            reader.onload = function(e) {
                previewImg.setAttribute('src', e.target.result);
            };
            reader.readAsDataURL(file);
        }
    });
}
previewImage();

    function generateSlug() {
        var titleInput = document.getElementById('titleInput');
        var slug = slugify(titleInput.value);
        document.getElementById('slugOutput').value = slug;
    }
    document.getElementById('titleInput').addEventListener('input', generateSlug);
</script>
<script>
function copyInputValue() {
  var inputField = document.getElementById("slugOutput");
  inputField.select();
  inputField.setSelectionRange(0, 99999); /* For mobile devices */
  document.execCommand("copy");
  alert("Category path to clipboard: " + inputField.value);
}

function copyPrefixedValue() {
  var inputField = document.getElementById("slugOutput");
  var prefixedValue = "http://www.luluconnect.com/category/" + inputField.value;
  var tempTextarea = document.createElement('textarea');
  tempTextarea.value = prefixedValue;
  document.body.appendChild(tempTextarea);
  tempTextarea.select();
  document.execCommand('copy');
  document.body.removeChild(tempTextarea);
  alert('Category path copied to clipboard: ' + prefixedValue);
}


</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('wbxadmin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/newsportal/resources/views/wbxadmin/categories/edit.blade.php ENDPATH**/ ?>