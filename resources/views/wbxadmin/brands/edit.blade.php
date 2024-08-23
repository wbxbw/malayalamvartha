@extends('wbxadmin.layout')
@section('content')
<div id="top" class="sa-app__body">
  <div class="mx-sm-2 px-2 px-sm-3 px-xxl-4 pb-6">
    <div class="container">
      <div class="py-5">
        <div class="row g-4 align-items-center">
          <div class="col">
            <nav class="mb-2" aria-label="breadcrumb">
              <ol class="breadcrumb breadcrumb-sa-simple">
                <li class="breadcrumb-item">
                  <a href="index.html">Dashboard</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  brand
                </li>
              </ol>
            </nav>
            <h1 class="h3 m-0">Edit brand</h1>
          </div>
        </div>
      </div>
      <div class="sa-entity-layout"
        data-sa-container-query='{"920":"sa-entity-layout--size--md","1100":"sa-entity-layout--size--lg"}'>
        <div class="sa-entity-layout__body">
          <div class="sa-entity-layout__main">
            <div class="card mt-5">
                <div class="card-body p-5">
                <div class="mb-5">
                  <h2 class="mb-0 fs-exact-18">Edit brand</h2>
                </div>
                <form action="{{ route('brands.update', $brand['id']) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                  <div class="form-colum">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="mb-4">
                                <label for="first-name" class="form-label">brand Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ $brand['name'] }}" />
                              </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="mb-4">
                                <label for="password" class="form-label">brand Image</label>
                                <input type="file" class="form-control" id="image" name="image" />
                              </div>
                        </div>

                    </div>

                  </div>

                  <div class=" d-flex justify-content-end mt-5">
                    <input type="submit" class="btn btn-secondary me-3" name="Save"/>
                    <a href="#" class="btn btn-primary">Cancel</a>
                  </div>


                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                </form>

                </div>
              </div>
          </div>
        </div>
      </div>








    </div>
  </div>
</div>
@endsection
