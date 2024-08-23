@extends('wbxadmin.layout')
@section('content')
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
                <li class="breadcrumb-item active" aria-current="page">{{ $moduleDetails->name }}</li>
              </ol>
            </nav>
            <h1 class="h3 m-0">{{ $pageDetails->name }}</h1>
          </div>
        </div>
      </div>
      <div class="sa-entity-layout" data-sa-container-query='{"920":"sa-entity-layout--size--md","1100":"sa-entity-layout--size--lg"}' >
        <div class="sa-entity-layout__body">
          <div class="sa-entity-layout__main">
            <div class="card">
            <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
                @csrf
              <div class="card-body p-5">
                <div class="mb-5">
                  <h2 class="mb-0 fs-exact-18">
                    Product information
                  </h2>
                </div>
                <div class="form-colum">
                <!-- <div data-simplebar="">
                  <ul class="sa-nav--sidebar" data-sa-collapse="">
                    <ul class="sa-nav__menu sa-nav__menu--root">

                      <li class="sa-nav__menu-item sa-nav__menu-item--has-icon sa-nav__menu-item" data-sa-collapse-item="sa-nav__menu-item--open">
                        
                        <a href="#" class="sa-nav__link" style="background-color: #FFFF;" data-sa-collapse-trigger="">
                          <span class="sa-nav__title">Menu Level 0</span>
                          <span class="sa-nav__arrow">
                            <svg width="6" height="9" viewBox="0 0 6 9" fill="currentColor">
                              <path d="M5.605,0.213 C6.007,0.613 6.107,1.212 5.706,1.612 L2.696,4.511 L5.706,7.409 C6.107,7.809 6.107,8.509 5.605,8.808 C5.204,9.108 4.702,9.108 4.301,8.709 L-0.013,4.511 L4.401,0.313 C4.702,-0.087 5.304,-0.087 5.605,0.213 Z"></path>
                            </svg>
                          </span>
                        </a>
                        <ul class="sa-nav__menu sa-nav__menu--sub" data-sa-collapse-content="" style="">
                          <li class="sa-nav__menu-item sa-nav__menu-item" data-sa-collapse-item="sa-nav__menu-item--open">
                            <a href="#" class="sa-nav__link" style="background-color: #FFFF;" data-sa-collapse-trigger="">
                              <span class="sa-nav__menu-item-padding"></span>
                              <span class="sa-nav__title">Menu Level 1</span>
                              <span class="sa-nav__arrow">
                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="9" viewBox="0 0 6 9" fill="currentColor">
                                  <path d="M5.605,0.213 C6.007,0.613 6.107,1.212 5.706,1.612 L2.696,4.511 L5.706,7.409 C6.107,7.809 6.107,8.509 5.605,8.808 C5.204,9.108 4.702,9.108 4.301,8.709 L-0.013,4.511 L4.401,0.313 C4.702,-0.087 5.304,-0.087 5.605,0.213 Z"></path>
                                </svg>
                              </span>
                            </a>
                            <ul class="sa-nav__menu sa-nav__menu--sub" data-sa-collapse-content="" style="">
                              <li class="sa-nav__menu-item" data-sa-collapse-item="sa-nav__menu-item--open">
                                <a href="#" class="sa-nav__link" style="background-color: #FFFF;" data-sa-collapse-trigger="">
                                  <span class="sa-nav__menu-item-padding"></span>
                                  <span class="sa-nav__menu-item-padding"></span>
                                  <span class="sa-nav__title">Menu Level 2</span>
                                  <span class="sa-nav__arrow">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="6" height="9" viewBox="0 0 6 9" fill="currentColor">
                                      <path d="M5.605,0.213 C6.007,0.613 6.107,1.212 5.706,1.612 L2.696,4.511 L5.706,7.409 C6.107,7.809 6.107,8.509 5.605,8.808 C5.204,9.108 4.702,9.108 4.301,8.709 L-0.013,4.511 L4.401,0.313 C4.702,-0.087 5.304,-0.087 5.605,0.213 Z"></path>
                                    </svg>
                                  </span>
                                </a>
                                <ul class="sa-nav__menu sa-nav__menu--sub" data-sa-collapse-content="" style="">
                                  <li class="sa-nav__menu-item">
                                    <a href="#" class="sa-nav__link" style="background-color: #FFFF;">
                                      <span class="sa-nav__menu-item-padding"></span>
                                      <span class="sa-nav__menu-item-padding"></span>
                                      <span class="sa-nav__menu-item-padding"></span>
                                      <span class="sa-nav__title">Menu Level 3</span>
                                    </a>
                                  </li>
                                </ul>
                              </li>
                            </ul>
                          </li>
                        </ul>
                      </li>
                    </ul>  
                  </ul>
                </div> -->



                  <div class="mb-4">
                    <label for="first-name" class="form-label">Product Category</label>
                    <div class="sa-example" style="max-height: 200px; overflow-y: auto;">
                      <div class="sa-example__body">
                        <div class="row">
                          <div class="col">
                            {!! $ProdCategoriesChkbox !!}
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="mb-4">
                      <label for="name" class="form-label">Product Name</label>
                      <input type="text" placeholder="Product Name" class="form-control" id="titleInput" name="name" />
                  </div>
                  <div class="row" id="pagefields" style="display:block;">
                    <div class="mb-4">
                      <label for="form-product/slug" class="form-label">Slug</label>
                      <div class="input-group input-group--sa-slug">
                        <span class="input-group-text" id="form-product/slug-addon" >{{ $settings->values }}/products/</span >
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
                        <textarea class="sa-quill-control form-control" rows="1" id="short_description" name="short_description"></textarea>
                    </div>
                    <div class="mb-4" id="pagefields1">
                        <label for="first-name" class="form-label">Description</label>
                        <textarea class="sa-quill-control form-control" rows="1" id="long_description" name="long_description"></textarea>
                    </div>
                    <div class="mb-4">
                        <label for="meta-tittle" class="form-label">Product Price</label>
                        <input type="text" placeholder="0.00" class="form-control" id="price" name="price" />
                    </div>
                    <div class="mb-4">
                        <label for="meta-tittle" class="form-label">Product Stock</label>
                        <input type="number" placeholder="Meta Title" class="form-control" id="stock" name="stock" />
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
                          <th class="min-w-10x">Alt text</th>
                          <th class="w-min">Order</th>
                          <th class="w-min">Delete</th>
                      </tr>
                      </thead>
                      <tbody>
                      <tr>
                          <td>
                              <input type="file" name="images[]" class="form-control" onchange="previewImage(this)">
                          </td>
                          <td>
                              <input type="text" name="alt[]" class="form-control form-control-sm"/>
                          </td>
                          <td>
                              <input type="number" name="order[]" class="form-control form-control-sm w-4x" value="1"/>
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


@endsection
