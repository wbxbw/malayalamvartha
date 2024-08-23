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
      <form action="<?php echo e(route('guides.update', $category['id'])); ?>" method="post">
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
                     
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="mb-4">
                                <label for="name" class="form-label">Category Name</label>
                                <input disabled placeholder="Page Name" class="form-control" id="titleInput" name="name" value="<?php echo e($category['name']); ?>" />
                              </div>
                        </div>
                    </div>
                    <div class="mb-4">
                      <label for="first-name" class="form-label">Parent Category</label>
                      <select class="form-select" name="bg_status" id="bg_status" required>
                        <option value="">BG Visibility</option>
                        <option value="Y" <?php if($category['bg_status'] == 'Y'){ ?> selected <?php } ?> >Show</option>
                        <option value="N" <?php if($category['bg_status'] == 'N'){ ?> selected <?php } ?>>Hidden</option>
                      </select>
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

<?php echo $__env->make('wbxadmin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home4/maichavx/public_html/lulu_demo/resources/views/wbxadmin/guides/edit.blade.php ENDPATH**/ ?>