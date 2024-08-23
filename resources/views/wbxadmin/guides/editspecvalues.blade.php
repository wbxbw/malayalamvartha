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
      <form action="{{ route('guides.updatespecvalue', $specvalue['id']) }}" method="post">
        @csrf
        @method('PUT')
      <div class="sa-entity-layout" data-sa-container-query='{"920":"sa-entity-layout--size--md","1100":"sa-entity-layout--size--lg"}' >
        <div class="sa-entity-layout__body">
          <div class="sa-entity-layout__main">
            <div class="card">
                <div class="card-body p-5">
                  <div class="mb-5">
                    <h2 class="mb-0 fs-exact-18">
                      Buying Guide Value Content information
                    </h2>
                  </div>
                  
                  <div class="form-colum">
                    <div class="mb-4">
                      <label for="first-name" class="form-label">Specification</label>
                      <input disabled class="form-control" id="titleInput" value="{{ $specification['name'] }}" />
                      <input type="hidden"  name="specification" value="{{ $specification['id'] }}" />
                    </div> 
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="mb-4">
                                <label for="name" class="form-label">Value Name</label>
                                <input disabled placeholder="Specification Name" class="form-control" id="titleInput" name="name" value="{{ $specvalue['name']}}" />
                              </div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="first-name" class="form-label">BG Description</label>
                        <textarea class="form-control" name="bg_description" id="summernote" cols="43" rows="5" class="textarea" tabindex="5" onkeydown="limitText(this.form.short_desc,this.form.countdown1,5000);"
                          onkeyup="limitText(this.form.product_desc,this.form.countdown1,5000);">{{ $specvalue['bg_description'] }}</textarea>
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
                        <input type="radio" class="form-check-input" name="status" value="Y" <?php if ($specvalue['status'] == 'Y') { ?>checked<?php } ?> /><span class="form-check-label" >Published</span ></label ><label class="form-check" >
                        <input type="radio" class="form-check-input" name="status" value="N" <?php if ($specvalue['status'] == 'N') { ?>checked<?php } ?> /><span class="form-check-label" >Drafted</span ></label >
                    </div>
                    <div class="mb-4">
                      <label for="form-product/seo-title" class="form-label" >Published date</label > 
                      <input type="disabled" class="form-control" data-auto-close="true" data-language="en" value="{{ date('d-M-Y', strtotime($specvalue['created_at'])) }}" />
                    </div>
                    <div class="mb-4">
                      <label for="form-product/seo-title" class="form-label" >Updated date</label > 
                      <input type="disabled" class="form-control" data-auto-close="true" data-language="en" value="{{ date('d-M-Y', strtotime($specvalue['updated_at'])) }}" /><label class="form-check mb-0" >
                    </div>
                  </div>
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
@endsection
