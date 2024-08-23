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
            <form action="<?php echo e(route('products.update', $product['id'])); ?>" method="post" enctype="multipart/form-data">
              <?php echo csrf_field(); ?>
              <?php echo method_field('PUT'); ?>
              <div class="card-body p-5">
                <div class="mb-5">
                  <h2 class="mb-0 fs-exact-18">
                    Product information
                  </h2>
                </div>
                <div class="form-colum">
                  <div class="mb-4">
                    <label for="first-name" class="form-label">Product Category</label>
                    <div class="sa-example" style="max-height: 200px; overflow-y: auto;">
                      <div class="sa-example__body">
                        <div class="row">
                          <div class="col">
                            

                            <select class="form-select" name="category" id="category_id" >
                                <option value="">Select Category</option>
                                <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>

                            <select class="form-select" name="subcategory" id="subcategory_id">
                                <option value="">Select Subcategory</option>
                            </select>


                        <select name='brand' class="form-select">
                            <option value="">Select Brand</option>
                            <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($brand->id); ?>"><?php echo e($brand->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>


                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="mb-4">
                      <label for="name" class="form-label">Product Name</label>
                      <input type="text" placeholder="Product Name" class="form-control" id="titleInput" name="name" value="<?php echo e($product['name']); ?>" />
                  </div>
                  <div class="row" id="pagefields" style="display:block;">
                    <div class="mb-4">
                      <label for="form-product/slug" class="form-label">Slug</label>
                      <div class="input-group input-group--sa-slug">
                        <span class="input-group-text" id="form-product/slug-addon" ><?php echo e($settings->values); ?>/products/</span >
                        <input type="text" class="form-control" id="slugOutput" name="link" aria-describedby="form-product/slug-addon form-product/slug-help" value="<?php echo e($product['link']); ?>"/>
                      </div>
                      <div id="form-product/slug-help" class="form-text">
                        Unique human-readable product identifier. No longer
                        than 255 characters.
                      </div>
                    </div>

                    <div class="mb-4">
                        <label for="meta-tittle" class="form-label">Meta Tittle</label>
                        <input type="text" placeholder="Meta Title" class="form-control" id="meta_title" name="meta_title" value="<?php echo e($product['meta_title']); ?>" />
                    </div>
                    <div class="mb-4">
                        <label for="meta-keywords" class="form-label ">Meta Keywords</label>
                            <textarea placeholder="Text Area" class="form-control" rows="3" id="meta_keyword" name="meta_keyword"><?php echo e($product['meta_keyword']); ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="meta-keywords" class="form-label">Meta Description</label>
                        <textarea placeholder="Text Area" class="form-control" rows="3" id="meta_description" name="meta_description"><?php echo e($product['meta_description']); ?></textarea>
                    </div>
                    <div class="mb-4">
                        <label for="first-name" class="form-label">Short Description</label>
                        <textarea class="sa-quill-control form-control" rows="1" id="short_description" name="short_description"><?php echo e($product['short_description']); ?></textarea>
                    </div>
                    <div class="mb-4" id="pagefields1">
                        <label for="first-name" class="form-label">Description</label>
                        <textarea class="sa-quill-control form-control" rows="1" id="long_description" name="long_description"><?php echo e($product['long_description']); ?></textarea>
                    </div>
                    <div class="mb-4">
                        <label for="meta-tittle" class="form-label">Product Price</label>
                        <input type="text" placeholder="0.00" class="form-control" id="price" name="price" value="<?php echo e($product['price']); ?>" />
                    </div>
                    <div class="mb-4">
                        <label for="meta-tittle" class="form-label">Product Stock</label>
                        <input type="number" placeholder="Meta Title" class="form-control" id="stock" name="stock" value="<?php echo e($product['stock']); ?>" />
                    </div>
                    <div class="mb-4">
                        <label for="first-name" class="form-label">Product Avaliability</label>
                        <select class="form-select" name="availability" id="availability">
                                <option value="">Select Avaliability</option>
                                <option value="Available">Available</option>
                                <option value="OOS">Out of Stock</option>
                        </select>
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
                          <th>Images</th>
                          
                      </tr>
                      </thead>
                      <tbody>
                      <tr>
                          <td>



                              <input type="file" name="images[]" class="form-control" onchange="previewImage(this)"  multiple>
                          </td>
                          
                      </tr>
                      </tbody>
                  </table>
                </div>
                <div class="sa-divider"></div>
                
              </div>
              <div class="card-body p-5">
                <div class="form-colum">
                  <div class=" d-flex justify-content-end mt-5">
                    <input type="submit" class="btn btn-secondary me-3" name="Save"/>
                    <a href="#" class="btn btn-primary">Cancel</a>
                  </div>
                </div>
              </div>
              </form>


              <div class="card-body">

                <label for="first-name" class="form-label">Product Tags</label>
                <form action="<?php echo e(route('products.addTag', $product['id'])); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <input type="text" class="form-control" id="tags" name="tags"  />
                    <input type="submit" class="btn btn-secondary me-3" name="Save"/>

                </form>

                <div class="mt-4">
                    <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <span class="badge bg-dark"><?php echo e($tag->name); ?></span>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>


              </div>


              <div class="card-body">

                <label for="first-name" class="form-label">Product Sepcification</label>

                <form action="<?php echo e(route('products.addSpec', $product['id'])); ?>" method="post">
                    <?php echo csrf_field(); ?>

                <select name='spec_id'  id="spec"  class="form-select">
                    <option value="">Select Specification</option>
                    <?php $__currentLoopData = $specifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $specification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($specification->id); ?>"><?php echo e($specification->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>



                <select name='spec_value_id'  id="specVal"  class="form-select">
                    <option value="">Select Specification Value</option>
                </select>


                <input type="submit" class="btn btn-secondary me-3" name="Save"/>

                </form>

                <div class="mt-4">
                    <?php $__currentLoopData = $productSpec; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $productSpecs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <span class="badge bg-dark"><?php echo e($productSpecs->spec); ?> : <?php echo e($productSpecs->spec_value); ?></span>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
$('#category_id').on('change', function() {
let category_id = this.value;
$("#subcategory_id").html('');

$.ajax({
               url: "/fetchSubcategories", // Replace with your route
               type: "GET",
               data: {
                   category_id: category_id
               },
               dataType: 'json',
               success: function(result) {
                    console.log(result);
                   $('#subcategory_id').html('<option value="">Select Subcategory</option>');
                   $.each(result, function(key, value) {
                       $("#subcategory_id").append('<option value="' + value.id + '">' + value.name + '</option>');
                   });
               }
           });
       });

       $('#spec').on('change', function() {
        let spec_id = this.value;
      $("#specVal").html('');

$.ajax({
               url: "/fetchSpecValues", // Replace with your route
               type: "GET",
               data: {
                   spec_id: spec_id
               },
               dataType: 'json',
               success: function(result) {
                    console.log(result);
                   $('#specVal').html('<option value="">Select Specification Value</option>');
                   $.each(result, function(key, value) {
                       $("#specVal").append('<option value="' + value.id + '">' + value.name + '</option>');
                   });
               }
           });
       });


   });


</script>

<script>
    function generateSlug() {
        var titleInput = document.getElementById('titleInput');
        var slug = slugify(titleInput.value);
        document.getElementById('slugOutput').value = slug;
    }
    document.getElementById('titleInput').addEventListener('input', generateSlug);
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
    reader.onload = function (e) {
        var preview = input.parentElement.parentElement.querySelector("td:first-child img");
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
    } else {
        alert("At least one row is required.");
    }
}
</script>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('wbxadmin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\saswa\Downloads\ecommerceadmin\ecommerceadmin\resources\views/wbxadmin/products/edit.blade.php ENDPATH**/ ?>