
<?php $__env->startSection('content'); ?>
<script src="https://cdn.jsdelivr.net/npm/slugify"></script>
<script src="https://cdn.jsdelivr.net/npm/sortablejs@1.14.0/Sortable.min.js"></script>
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
      <form action="<?php echo e(route('products.store')); ?>" method="post" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
      <div class="sa-entity-layout" data-sa-container-query='{"920":"sa-entity-layout--size--md","1100":"sa-entity-layout--size--lg"}' >
        <div class="sa-entity-layout__body">
          <div class="sa-entity-layout__main">
            <div class="card">
              <div class="card-body p-5">
                <div class="mb-5">
                  <h2 class="mb-0 fs-exact-18">
                    Product information
                  </h2>
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
                <div class="form-colum">
                  <div class="mb-4">
                      <label for="name" class="form-label">Product Name</label>
                      <input type="text" placeholder="Product Name" class="form-control" id="titleInput" name="name" />
                  </div>
                  <div class="row" id="pagefields" style="display:block;">
                    <div class="mb-4">
                      <label for="form-product/slug" class="form-label">Slug</label>
                      <div class="input-group input-group--sa-slug">
                        <span class="input-group-text" id="form-product/slug-addon" ><?php echo e($settings->values); ?>/products/</span >
                        <input type="text" class="form-control" id="slugOutput" name="link" aria-describedby="form-product/slug-addon form-product/slug-help" value="content-slug-data"/>
                      </div>
                      <div id="form-product/slug-help" class="form-text">
                        Unique human-readable product identifier. No longer
                        than 255 characters.
                      </div>
                    </div>
                    
                    <div class="mb-4">
                        <label for="meta-tittle" class="form-label">Meta Tittle</label>
                        <input type="text" placeholder="Meta Title" class="form-control" id="meta_title" name="meta_title" />
                    </div>
                    <div class="mb-4">
                        <label for="meta-keywords" class="form-label ">Meta Keywords</label>
                            <textarea placeholder="Text Area" class="form-control" rows="3" id="meta_keyword" name="meta_keyword"></textarea> 
                    </div>
                    <div class="mb-3">
                        <label for="meta-keywords" class="form-label">Meta Description</label>
                        <textarea placeholder="Text Area" class="form-control" rows="3" id="meta_description" name="meta_description"></textarea> 
                    </div>   
                    
                    <div class="mb-4">
                        <label for="first-name" class="form-label">Short Description</label>
                        <textarea class="form-control" name="short_description" id="editor1" cols="43" rows="5" class="textarea" tabindex="5" onkeydown="limitText(this.form.short_desc,this.form.countdown1,5000);"
                          onkeyup="limitText(this.form.product_desc,this.form.countdown1,5000);"></textarea>
                    </div>
                    <div class="mb-4">
                        <label for="first-name" class="form-label">Description</label>
                        <textarea class="form-control" name="long_description" id="editor2" cols="43" rows="5" class="textarea" tabindex="5" onkeydown="limitText(this.form.short_desc,this.form.countdown1,5000);"
                          onkeyup="limitText(this.form.product_desc,this.form.countdown1,5000);"></textarea>
                    </div>
                    
                  </div>
                  <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="mb-4">
                              <label for="meta-tittle" class="form-label">Product Price</label>
                              <input type="text" placeholder="0.00" class="form-control" id="price" name="price" />
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="mb-4">
                              <label for="meta-tittle" class="form-label">Discount %</label>
                              <input type="number" min="0" max="100" placeholder="%" class="form-control" id="discount" name="discount" />
                            </div>
                        </div>
                  </div>
                  <div class="row">    
                    <div class="mb-4">
                        <label for="meta-tittle" class="form-label">Product Stock</label>
                        <input type="number" placeholder="Stock" class="form-control" id="stock" name="stock" />
                    </div>
                    <div class="mb-4">
                        <label for="first-name" class="form-label">Product Avaliability</label>
                        <select class="form-select" name="availability" id="availability">
                                <option value="">Select Avaliability</option>
                                <option value="Available">Available</option>
                                <option value="OOS">Out of Stock</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="meta-tittle" class="form-label">Images</label>
                    </div> 
                  </div>
                </div>
              </div>
              <div class="mt-n5" id="imagetablefields">
                <div class="sa-divider"></div>
                <div class="table-responsive">
                <table class="sa-table" id="myTable">
                      <thead>
                      <tr>
                          <th>Handle</th>
                          <th>No</th>
                          <th>Image</th>
                          <th>Select</th>
                          <th class="min-w-10x">Alt text</th>
                          <!-- <th class="w-min">Default</th> -->
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
                              <input type="text" name="alt[]" class="form-control form-control-sm"/>
                          </td>
                          <!-- <td>
                              <input type="radio" name="default" id="default" class="form-check-input module-radio" checked/>
                          </td> -->
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
                    <input type="radio" class="form-check-input" name="status" value="Y" checked /><span class="form-check-label" >Publish</span ></label ><label class="form-check" >
                    <input type="radio" class="form-check-input" name="status" value="N" /><span class="form-check-label" >Draft</span ></label ><label class="form-check mb-0">
                </div>
                <div class="mb-5">
                  <h2 class="mb-0 fs-exact-18">Product Categories</h2>
                </div>
                <div class="mb-4">
                    <label for="first-name" class="form-label">Select Category</label>
                    <div class="sa-example" style="max-height: 300px; overflow-y: auto;">
                      <div class="sa-example__body">
                        <div class="row">
                          <div class="col">
                            <?php echo $ProdCategoriesChkbox; ?>

                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="mb-4">
                      <label for="name" class="form-label">Brand Name</label>
                      <select class="form-select" name="brand" id="brand">
                            <option value="">Select Brand</option>
                            <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($brand->id); ?>"><?php echo e($brand->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </select>
                  </div>
                  <div class="mb-4">
                      <label for="name" class="form-label">Product Unique Id</label>
                      <input type="text" placeholder="PRD0001253" class="form-control" name="unique_id" />
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
  $(document).ready(function() {
  $('#note1').summernote();
  $('#note2').summernote();
});
</script>
<script type="text/javascript">
    function ConTypeChange() {
    var pagefields = document.getElementById("pagefields");
    var pagefields1 = document.getElementById("pagefields1");
    var sectiontypefields = document.getElementById("sectiontypefields");
    var select = document.getElementById("type");
    if (select.value === null || select.value === "") {
        sectiontypefields.style.display = "none";
        pagefields.style.display = "none";
    }
    if (select.value === "Section")
    {
        sectiontypefields.style.display = "block";
        pagefields.style.display = "none";
    }
    if (select.value === "Page")
    {
        sectiontypefields.style.display = "none";
        pagefields.style.display = "block";
        pagefields1.style.display = "block";

    }
}
function SecTypeChange() {
    var bannertypefields = document.getElementById("bannertypefields");
    var pagefields1 = document.getElementById("pagefields1");
    var singleimagefield = document.getElementById("singleimagefield");
    var imagetablefields = document.getElementById("imagetablefields");
    var select = document.getElementById("sectiontype");
    if (select.value === "TextSection")
    {
      bannertypefields.style.display = "none";
      pagefields1.style.display = "block";
      singleimagefield.removeAttribute("style");
      imagetablefields.style.display = "none";
    }
    else if (select.value === null || select.value === "") {
      bannertypefields.style.display = "none";
      pagefields1.style.display = "none";
      singleimagefield.style.display = "none";
      imagetablefields.style.display = "none";
    }
    else
    {
      bannertypefields.style.display = "block";
      pagefields1.style.display = "none";
      singleimagefield.style.display = "none";
      imagetablefields.style.display = "block";
    }
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

<?php echo $__env->make('wbxadmin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home4/maichavx/public_html/lulu_demo/resources/views/wbxadmin/products/create.blade.php ENDPATH**/ ?>