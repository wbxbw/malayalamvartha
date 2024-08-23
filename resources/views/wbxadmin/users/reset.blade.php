@extends('wbxadmin.layout')
@section('content')
<div id="top" class="sa-app__body">
  <div class="mx-sm-2 px-2 px-sm-3 px-xxl-4 pb-6">
    <div class="container container--max--xl">
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
      <div
        class="sa-entity-layout"
        data-sa-container-query='{"920":"sa-entity-layout--size--md"}'
      >
        <div class="sa-entity-layout__body">
          <div class="sa-entity-layout__sidebar">
            <div class="card">
              <div
                class="card-body d-flex flex-column align-items-center"
              >
                <div class="pt-3">
                  <div
                    class="sa-symbol sa-symbol--shape--circle"
                    style="--sa-symbol--size: 6rem"
                  >
                    <img
                      src="{{url('admin/images/customers/customer-4-128x128.jpg')}}"
                      width="96"
                      height="96"
                      alt=""
                    />
                  </div>
                </div>
                <div class="text-center mt-4">
                  <div class="fs-exact-16 fw-medium">{{ $user['name'] }}</div>
                  <div class="fs-exact-13 text-muted">
                    <div class="mt-1">
                      <a href="#">{{ $user['email'] }}</a>
                    </div>
                    <div class="mt-1">{{ $user['phone'] }}</div>
                  </div>
                </div>
                <div class="sa-divider my-5"></div>
                <!-- <div class="w-100">
                  <dl class="list-unstyled m-0">
                    <dt class="fs-exact-14 fw-medium">Last Order</dt>
                    <dd class="fs-exact-13 text-muted mb-0 mt-1">
                      7 days ago – <a href="app-order.html">#80294</a>
                    </dd>
                  </dl>
                  <dl class="list-unstyled m-0 mt-4">
                    <dt class="fs-exact-14 fw-medium">
                      Average Order Value
                    </dt>
                    <dd class="fs-exact-13 text-muted mb-0 mt-1">
                      $574.00
                    </dd>
                  </dl>
                  <dl class="list-unstyled m-0 mt-4">
                    <dt class="fs-exact-14 fw-medium">Registered</dt>
                    <dd class="fs-exact-13 text-muted mb-0 mt-1">
                      2 months ago
                    </dd>
                  </dl>
                  <dl class="list-unstyled m-0 mt-4">
                    <dt class="fs-exact-14 fw-medium">
                      Email Marketing
                    </dt>
                    <dd class="fs-exact-13 text-muted mb-0 mt-1">
                      Subscribed
                    </dd>
                  </dl>
                </div> -->
              </div>
            </div>
          </div>
         
          <div class="sa-entity-layout__main">
            <div class="card">
                <div class="card-body p-5">
                  <div class="mb-5">
                    <h2 class="mb-0 fs-exact-18">
                      Password Reset
                    </h2>
                    <!-- <div class="mt-3 text-muted">
                      Provide information that will help improve the
                      snippet and bring your product to the top of search
                      engines.
                    </div> -->
                  </div>
                  @if ($errors->any())
                    <div class="alert alert-danger">
                        <label>Errors</label>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                  @endif
                  <form action="{{ route('users.updatepassword', $user['id']) }}" method="post" enctype="multipart/form-data">
                  @csrf
                  @method('PUT')
                  <div class="form-colum">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="mb-4">
                                <label for="first-name" class="form-label">Password</label>
                                <input type="password" class="form-control" id="first-name" placeholder="Password" name="password" />
                              </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="mb-4">
                                <label for="last-name" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" id="last-name" placeholder="Confirm Password" name="password_confirmation" />
                              </div>
                        </div>
                    </div>
                    
                         
                  </div>
                  
                  <div class=" d-flex justify-content-end mt-5">
                  <input type="submit" class="btn btn-secondary me-3" name="Save"/>  
                  <a href="{{ route('users.index')}}" class="btn btn-primary">Cancel</a>
                  </div>  
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
