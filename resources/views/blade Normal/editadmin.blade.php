@extends('layout')
@section('title','Administrator Dashboard || E-commerce Edit Admin')
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
                          <a href="index.html">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item">
                          <a href="#">Add Admin</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                          Jessica Moore
                        </li>
                      </ol>
                    </nav>
                    <h1 class="h3 m-0">Jessica Moore</h1>
                  </div>
                  <div class="col-auto d-flex">
                    <a href="#" class="btn btn-secondary me-3">Delete</a
                    ><a href="#" class="btn btn-primary">Edit</a>
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
                              src="images/customers/customer-1-96x96.jpg"
                              width="96"
                              height="96"
                              alt=""
                            />
                          </div>
                        </div>
                        <div class="text-center mt-4">
                          <div class="fs-exact-16 fw-medium">Jessica Moore</div>
                          <div class="fs-exact-13 text-muted">
                            <div class="mt-1">
                              <a href="#">jessica-moore@example.com</a>
                            </div>
                            <div class="mt-1">+38 (094) 730-24-25</div>
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
                             Basic information
                            </h2>
                            <!-- <div class="mt-3 text-muted">
                              Provide information that will help improve the
                              snippet and bring your product to the top of search
                              engines.
                            </div> -->
                          </div>
                          <div class="form-colum">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="mb-4">
                                        <label for="first-name" class="form-label">First Name</label>
                                        <input type="text" class="form-control" id="first-name" name="first_name" />
                                      </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="mb-4">
                                        <label for="last-name" class="form-label">Last Name</label>
                                        <input type="text" class="form-control" id="last-name" name="last_name" />
                                      </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="mb-4">
                                        <label for="username" class="form-label">Username</label>
                                        <input type="text" class="form-control" id="username" name="email" />
                                      </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="mb-4">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="password" name="phone_number" />
                                      </div>
                                </div>
                                 <div class="col-lg-6">
                                  <div class="mb-4">
                                  <label for="confirm-password" class="form-label">Confirm Password</label>
                                  <input type="password" class="form-control" id="password" name="password" />
                                </div>
                            </div>
                          </div>        
                          </div>
                          <div class="radio-text">
                            <h6>Status</h6>
                          </div>
                          <div class="col">
                            <label class="form-check">
                                <input type="radio" class="form-check-input" name="exampleRadio1" id="radio1"><span class="form-check-label">Active</span>
                            </label>
                            <label class="form-check">
                                <input type="radio" class="form-check-input" name="exampleRadio1" id="radio2"><span class="form-check-label">Inactive</span>
                            </label>
                        </div>
                          <div class=" d-flex justify-content-end mt-5">
                            <a href="#" class="btn btn-secondary me-3">Save</a
                            ><a href="#" class="btn btn-primary">Cancel</a>
                          </div>                     
                        </div>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>



@endsection
