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
      <form action="{{ route('guides.update', $category['id']) }}" method="post" enctype="multipart/form-data">
                  @csrf
                  @method('PUT')
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
                                <input disabled placeholder="Page Name" class="form-control" id="titleInput" name="name" value="{{ $category['name'] }}" />
                              </div>
                        </div>
                    </div>
                    <div class="mb-4">
                      <label for="first-name" class="form-label">Buying Guide Visibility</label>
                      <select class="form-select" name="bg_status" id="bg_status" required>
                        <option value="">Select</option>
                        <option value="Y" <?php if($category['bg_status'] == 'Y'){ ?> selected <?php } ?> >Show</option>
                        <option value="N" <?php if($category['bg_status'] == 'N'){ ?> selected <?php } ?>>Hidden</option>
                      </select>
                    </div>
                    <div class="mb-4">
                      <label for="meta-tittle" class="form-label">Guide Meta Title</label>
                      <input type="text" placeholder="Meta Title" class="form-control" id="bg_title" name="bg_title" value="{{ $category['bg_title'] }}" />
                    </div>
                    <div class = "mb-4">
                    <label for="meta-keywords" class="form-label ">Guide Meta Keywords</label>
                        <textarea placeholder="Text Area" class="form-control" rows="3" id="bg_keywords" name="bg_keywords">{{ $category['bg_keywords'] }}</textarea> 
                    </div>
                    <div class = "mb-3">
                    <label for="meta-keywords" class="form-label">Guide Meta Description</label>
                    <textarea placeholder="Text Area" class="form-control" rows="3" id="bg_description" name="bg_description">{{ $category['bg_description'] }}</textarea> 
                    </div>   
                    <br>
                    <div class="row">
                        <div class="col-lg-2 col-md-2">
                            <div class="mb-4">
                              <label for="meta-tittle" class="form-label">Banner Image</label>
                              <div class="sa-symbol sa-symbol--shape--rounded sa-symbol--size--lg">
                                  <img <?php if ($category['bg_banner'] != '') { ?> src="{{ url('wx.images/categories/'.$category['bg_banner']) }}" <?php } else { ?> src="{{ url('sample/imgpreview.png') }}" <?php } ?> id="previmg" width="40" height="40" alt="">
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
                    <input type="disabled" class="form-control" data-auto-close="true" data-language="en" value="{{ date('d-M-Y', strtotime($category['created_at'])) }}" />
                  </div>
                  <div class="mb-4">
                    <label for="form-product/seo-title" class="form-label" >Updated date</label > 
                    <input type="disabled" class="form-control" data-auto-close="true" data-language="en" value="{{ date('d-M-Y', strtotime($category['updated_at'])) }}" /><label class="form-check mb-0" >
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
@endsection
