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
            <form action="{{ route('contents.sectionupdate', $section['id'] ) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
              <div class="card-body p-5">
                <div class="mb-5">
                  <h2 class="mb-0 fs-exact-18">
                    Section information
                  </h2>
                </div>
                <div class="form-colum">
                  <div class="mb-4">
                    <label for="first-name" class="form-label">Page</label>
                    <input disabled class="form-control" id="titleInput" name="name" value="{{ $parentDetails->name }}"  />
                    <input type="hidden" name="content_id" value="{{ $parentDetails->id }}"  />
                  </div>
                  <div class="mb-4">
                    <label for="first-name" class="form-label">Section Type</label>
                    <input disabled class="form-control" id="titleInput" name="name" value="{{ $section['type'] }}"  />
                  </div>  
                  <div class="row" id="sectiontypefields">
                    <div class="mb-4">
                      <label for="first-name" class="form-label">Section Type</label>
                      <select class="form-select" name="type" id="sectiontype" onchange="SecTypeChange()">
                        <option value="">Select</option>
                        <option value="TextSection" <?php if ($section['type'] == 'TextSection') { ?> selected <?php } ?>>Text Section</option>
                        <option value="SectionHeroBanner" <?php if ($section['type'] == 'SectionHeroBanner') { ?> selected <?php } ?> >Hero Banner</option>
                        <option value="Section2ColoumnBanner" <?php if ($section['type'] == 'Section2ColoumnBanner') { ?> selected <?php } ?>>2 Coloumn Image Banner</option>
                        <option value="Section3ColoumnBanner" <?php if ($section['type'] == 'Section3ColoumnBanner') { ?> selected <?php } ?>>3 Coloumn Image Banner</option>
                        <option value="Section4ColoumnBanner" <?php if ($section['type'] == 'Section4ColoumnBanner') { ?> selected <?php } ?>>4 Coloumn Image Banner</option>
                        <option value="Section6ColoumnBanner" <?php if ($section['type'] == 'Section6ColoumnBanner') { ?> selected <?php } ?>>6 Coloumn Image Banner</option>
                        <option value="Section12ColoumnBanner" <?php if ($section['type'] == 'Section12ColoumnBanner') { ?> selected <?php } ?>>12 Coloumn Image Banner</option>
                      </select>
                    </div>
                    <div class="mb-4" id="bannertypefields" style="display:none;">
                      <label for="first-name" class="form-label">Banner Type</label>
                      <select class="form-select" name="image_type" id="image_type">
                        <option value="">Select</option>
                        <option value="featured">Featured</option>
                        <option value="carousel" selected>Carousel</option>
                      </select>
                    </div>
                  </div>
                    <div class="mb-4">
                        <label for="name" class="form-label">Section Name</label>
                        <input type="text" placeholder="Section Name" class="form-control" id="titleInput" name="name" value="{{ $section['name'] }}" />
                    </div>
                  <div class="mb-4" id="pagefields1">
                    <label for="first-name" class="form-label">Description</label>
                    <textarea class="sa-quill-control form-control" rows="1" id="description" name="description"></textarea>
                  </div>
                  <div class="row g-4" id="singleimagefield">
                    <div class="col">
                      <label for="form-product/price" class="form-label">Image</label>
                      <input type="file" class="form-control" id="formFile-1"/>
                    </div>
                    <div class="col">
                      <label for="form-product/old-price" class="form-label">Alt text</label>
                      <input type="text" class="form-control" id="">
                    </div>
                  </div>
                </div>
              </div>
              <div class="mt-n5" id="imagetablefields" style="display:none;">
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
                      <!-- repeat -->
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
                      <!-- repeat -->
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
              </form>
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


@endsection
