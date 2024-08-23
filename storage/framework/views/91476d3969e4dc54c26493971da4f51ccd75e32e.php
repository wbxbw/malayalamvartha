
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
      <form action="<?php echo e(route('contents.update', $content['id'])); ?>" method="post" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
      <div class="sa-entity-layout" data-sa-container-query='{"920":"sa-entity-layout--size--md","1100":"sa-entity-layout--size--lg"}' >
        <div class="sa-entity-layout__body">
          <div class="sa-entity-layout__main">
            <div class="card">
              
                <div class="card-body p-5">
                  <div class="mb-5">
                    <h2 class="mb-0 fs-exact-18">
                      Content information
                    </h2>
                  </div>
                  
                  <div class="form-colum">
                    <div class="mb-4">
                      <label for="first-name" class="form-label">Parent Page</label>
                      <select class="form-select" name="parent" id="parent">
                          <?php echo $ContentsDropdownDetails; ?>

                      </select>
                    </div> 
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="mb-4">
                                <label for="name" class="form-label">Content Name</label>
                                <input type="text" placeholder="Page Name" class="form-control" id="titleInput" name="name" value="<?php echo e($content['name']); ?>" />
                              </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="mb-4">
                              <label for="form-product/slug" class="form-label">Slug</label>
                              <label for="form-product/slug" class="form-label" style="float:right; cursor:pointer;" onclick="copyPrefixedValue()">Click here to copy</label> 
                              <div class="input-group input-group--sa-slug">
                                <span class="input-group-text" id="form-product/slug-addon" ><?php echo e($settings->values); ?>/</span >
                                <input type="text" class="form-control" id="slugOutput" name="link" aria-describedby="form-product/slug-addon form-product/slug-help" value="<?php echo e($content['link']); ?>"/>
                              </div>
                              <div id="form-product/slug-help" class="form-text">
                                Unique human-readable product identifier. No longer
                                than 255 characters.
                              </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="mb-4">
                                <label for="meta-tittle" class="form-label">Meta Tittle</label>
                                <input type="text" placeholder="Meta Title" class="form-control" id="meta_title" name="meta_title" value="<?php echo e($content['meta_title']); ?>" />
                              </div>
                        </div>
                    </div>
                    <div class = "mb-4">
                    <label for="meta-keywords" class="form-label ">Meta Keywords</label>
                        <textarea placeholder="Text Area" class="form-control" rows="3" id="meta_keyword" name="meta_keyword"><?php echo e($content['meta_keyword']); ?></textarea> 
                    </div>
                    <div class = "mb-3">
                    <label for="meta-keywords" class="form-label">Meta Description</label>
                    <textarea placeholder="Text Area" class="form-control" rows="3" id="meta_description" name="meta_description"><?php echo e($content['meta_description']); ?></textarea> 
                    </div>
                    <div class="mb-4">
                        <label for="first-name" class="form-label">Short Description</label>
                        <textarea class="form-control" name="short_description" id="summernote" cols="43" rows="5" class="textarea" tabindex="5" onkeydown="limitText(this.form.short_desc,this.form.countdown1,5000);"
                          onkeyup="limitText(this.form.product_desc,this.form.countdown1,5000);"><?php echo e($content['short_description']); ?></textarea>
                    </div>
                    <div class="mb-4">
                          <label for="first-name" class="form-label">Description</label>
                          <textarea class="form-control" name="long_description" id="editor2" cols="43" rows="5" class="textarea" tabindex="5" onkeydown="limitText(this.form.short_desc,this.form.countdown1,5000);"
                            onkeyup="limitText(this.form.product_desc,this.form.countdown1,5000);"><?php echo e($content['long_description']); ?></textarea>
                    </div>   
                  </div>
                </div>

                               
                <div class="mt-n5" id="imagetablefields" style="display:block;">
                 <div class="sa-divider"></div>
                  <div class="table-responsive">
                  <table class="sa-table" id="myTable">
                      <thead>
                      <tr>
                          <th>#</th>
                          <th>No</th>
                          <th>Image</th>
                          <th>Select</th>
                          <th class="min-w-10x">link</th>
                          <th class="w-min">Delete</th>
                      </tr>
                      </thead>
                      <tbody>
                      <tr class="sortable-row">
                          <td class="sortable-handle">&#9776;</td>
                          <td id="slno">1</td>
                          <input type="hidden" name="order[]" id="multicol-last-name" class="form-control" value="1" />
                          <td>
                              <div class="sa-symbol sa-symbol--shape--rounded sa-symbol--size--lg">
                                <img src="<?php echo e(url('sample/imgpreview.png')); ?>" width="40" height="40" alt="">
                              </div>
                          </td>
                          <td>
                              <input type="file" name="images[]" class="form-control" onchange="previewImage(this)">
                          </td>
                          <td>
                              <input type="text" name="alt[]" class="form-control"/>
                          </td>
                          <td>
                              <button class="btn btn-sa-muted btn-sm mx-n3" type="button" aria-label="Delete image"
                                      data-bs-toggle="tooltip" data-bs-placement="right" title="Delete image"
                                      onclick="deleteRow(this)">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12"
                                        fill="currentColor">
                                      <path
                                          d="M10.8,10.8L10.8,10.8c-0.4,0.4-1,0.4-1.4,0L6,7.4l-3.4,3.4c-0.4,0.4-1,0.4-1.4,0l0,0c-0.4-0.4-0.4-1,0-1.4L4.6,6L1.2,2.6 c-0.4-0.4-0.4-1,0-1.4l0,0c0.4-0.4,1-0.4,1.4,0L6,4.6l3.4-3.4c0.4-0.4,1-0.4,1.4,0l0,0c0.4,0.4,0.4,1,0,1.4L7.4,6l3.4,3.4 C11.2,9.8,11.2,10.4,10.8,10.8z"></path>
                                  </svg>
                              </button>
                          </td>
                      </tr>
                      </tbody>
                  </table>
                  </div>
                  <div class="sa-divider"></div>
                  <div class="px-5 py-4 my-2">
                  <button class="btn btn-primary me-3" onclick="addTableRow()" type="button">Add Image Row</button>
                  </div>
                </div>
                <div class="card-body p-5">
                  <div class="form-colum">
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
                      <input type="radio" class="form-check-input" name="status" value="Y" <?php if ($content['status'] == 'Y') { ?>checked<?php } ?> /><span class="form-check-label" >Published</span ></label ><label class="form-check" >
                      <input type="radio" class="form-check-input" name="status" value="N" <?php if ($content['status'] == 'N') { ?>checked<?php } ?> /><span class="form-check-label" >Drafted</span ></label >
                  </div>
                  <div class="mb-4">
                    <label for="form-product/seo-title" class="form-label" >Published date</label > 
                    <input type="disabled" class="form-control" data-auto-close="true" data-language="en" value="<?php echo e(date('d-M-Y', strtotime($content['created_at']))); ?>" />
                  </div>
                  <div class="mb-4">
                    <label for="form-product/seo-title" class="form-label" >Updated date</label > 
                    <input type="disabled" class="form-control" data-auto-close="true" data-language="en" value="<?php echo e(date('d-M-Y', strtotime($content['updated_at']))); ?>" /><label class="form-check mb-0" >
                  </div>
                </div>
                <?php if(count($images) > 0): ?>
                <div class="card-body p-5">
                  <div class="mb-5">
                    <h2 class="mb-0 fs-exact-18">Added Images</h2>
                  </div>
                  <div class="table-responsive">
                    <table class="sa-table" id="myTables">
                        <tbody>
                        <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <tr>
                              <td>
                                <div class="sa-symbol sa-symbol--shape--rounded sa-symbol--size--lg">
                                  <a data-bs-toggle="offcanvas" href="#fileManagerDetails<?php echo e($image['id']); ?>" ><img src="<?php echo e(url('wx.images/contents/articles/'.$image['image'])); ?>" width="40" height="40" alt=""></a>
                                </div>
                              </td>
                              <td>
                                <a data-bs-toggle="offcanvas" href="#fileManagerDetails<?php echo e($image['id']); ?>" >Edit</a>
                              </td>
                              <td>
                                  <button class="btn btn-sa-muted btn-sm mx-n3" type="button" aria-label="Delete image"
                                          data-bs-toggle="tooltip" data-bs-placement="right" title="Delete image"
                                          onclick="deleteRow(this)">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12"
                                            fill="currentColor">
                                          <path
                                              d="M10.8,10.8L10.8,10.8c-0.4,0.4-1,0.4-1.4,0L6,7.4l-3.4,3.4c-0.4,0.4-1,0.4-1.4,0l0,0c-0.4-0.4-0.4-1,0-1.4L4.6,6L1.2,2.6 c-0.4-0.4-0.4-1,0-1.4l0,0c0.4-0.4,1-0.4,1.4,0L6,4.6l3.4-3.4c0.4-0.4,1-0.4,1.4,0l0,0c0.4,0.4,0.4,1,0,1.4L7.4,6l3.4,3.4 C11.2,9.8,11.2,10.4,10.8,10.8z"></path>
                                      </svg>
                                  </button>
                              </td>
                          </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                  </div>
                </div>
                <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
      </form>
    </div>
  </div>
</div>
<?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="offcanvas offcanvas-end offcanvas-sa-card" tabindex="-1" id="fileManagerDetails<?php echo e($image['id']); ?>" aria-labelledby="fileManagerDetailsLabel">
  <div class="offcanvas-header py-3">
      <div class="my-2">
        <h5 class="offcanvas-title fs-exact-18" id="fileManagerDetailsLabel"><?php echo e($image['name']); ?></h5>
      </div>
      <button type="button" class="sa-close sa-close--modal" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body" data-simplebar="">
      <div class="border p-4 d-flex justify-content-center mb-4">
        <div class="max-w-20x"><img src="<?php echo e(url('wx.images/contents/articles/'.$image['image'])); ?>" class="w-100 h-auto" width="320" height="320" alt=""/></div>
      </div>
      <div class="mb-4">
        <label class="form-label">link</label>
        <input type="text" name="alt" value="<?php echo e($image['alt']); ?>" class="form-control"/>
      </div>
      <div class="sa-divider my-4"></div>
      <div class="hstack gap-3"><button type="button" class="btn btn-primary flex-grow-1">Update</button><button type="button" class="btn btn-secondary flex-grow-1">Delete</button></div>
  </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
  alert("Content path to clipboard: " + inputField.value);
}

function copyPrefixedValue() {
  var inputField = document.getElementById("slugOutput");
  var prefixedValue = "http://www.luluconnect.com/" + inputField.value;
  var tempTextarea = document.createElement('textarea');
  tempTextarea.value = prefixedValue;
  document.body.appendChild(tempTextarea);
  tempTextarea.select();
  document.execCommand('copy');
  document.body.removeChild(tempTextarea);
  alert('Content path copied to clipboard: ' + prefixedValue);
}
</script>
<script>
        document.addEventListener('DOMContentLoaded', function () {
            var table = document.getElementById('myTable').getElementsByTagName('tbody')[0];
            new Sortable(table, {
                handle: '.sortable-handle',
                animation: 150,
                onEnd: function (evt) {
                    updateOrder();
                }
            });
        });
    
        function addTableRow() {
            var table = document.getElementById("myTable");
            var lastRow = table.querySelector("tbody tr:last-child");
            var newRow = lastRow.cloneNode(true);
    
            // Find the order input in the cloned row
            var orderInput = newRow.querySelector("input[name='order[]']");
    
            if (orderInput) {
                // Get the current value and increment by 1
                var currentValue = parseInt(orderInput.value, 10) || 0;
                orderInput.value = currentValue + 1;
            }
            var slnoCell = newRow.querySelector("#slno");
            var currentSlno = parseInt(slnoCell.textContent);
            slnoCell.textContent = currentSlno + 1;
    
            // Clear other input values in the new row
            var inputs = newRow.querySelectorAll("input:not([name='order[]'])");
            inputs.forEach(function (input) {
                input.value = "";
            });

            
    
            // Append the new row to the table
            table.querySelector("tbody").appendChild(newRow);
        }

        function previewImage(input) {
            var reader = new FileReader();
            var preview = input.parentElement.previousElementSibling.querySelector("img");

            reader.onload = function (e) {
                preview.src = e.target.result;
            };

            reader.readAsDataURL(input.files[0]);
        }
    
        function deleteRow(button) {
            var table = document.getElementById("myTable");
            var rows = table.querySelectorAll("tbody tr");
            if (rows.length > 1) {
                var row = button.closest("tr");
                row.remove();
                updateOrder();
            } else {
                alert("At least one row is required.");
            }
        }
    
        function updateOrder() {
            var rows = document.querySelectorAll('.sortable-row');
            rows.forEach(function (row, index) {
                var orderInput = row.querySelector("input[name='order[]']");
                if (orderInput) {
                    orderInput.value = index + 1;
                }
            });
            // Update slno values
            var slnoCells = document.querySelectorAll('.sortable-row #slno');
            slnoCells.forEach(function(cell, index) {
                cell.textContent = index + 1;
            });
        }
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('wbxadmin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home4/maichavx/public_html/lulu_demo/resources/views/wbxadmin/contents/edit.blade.php ENDPATH**/ ?>