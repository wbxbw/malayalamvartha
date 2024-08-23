@extends('layout')
@section('title','Administrator Dashboard || E-commerce Edit Content')
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
                          Edit Content
                        </li>
                      </ol>
                    </nav>
                    <h1 class="h3 m-0">Edit Content</h1>
                  </div>
                </div>
              </div>
              <div
                class="sa-entity-layout"
                data-sa-container-query='{"920":"sa-entity-layout--size--md","1100":"sa-entity-layout--size--lg"}'
              >
                <div class="sa-entity-layout__body">
                  <div class="sa-entity-layout__main">
                    <div class="card">
                        <div class="card-body p-5">
                          <div class="mb-5">
                            <h2 class="mb-0 fs-exact-18">
                             Basic information
                            </h2>
                          </div>
                          <div class="form-colum">
                          <div class="mb-4">
                             <label for="first-name" class="form-label">Parent Page</label>
                              <select class="form-select mb-3" aria-label="Default select example">
                              <option selected>Open this select menu</option>
                              <option value="1">One</option>
                              <option value="2">Two</option>
                              <option value="3">Three</option>
                            </select> 
                             </div> 
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="mb-4">
                                        <label for="name" class="form-label"> Name</label>
                                        <input type="text" class="form-control" id="name" name="name" />
                                      </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="mb-4">
                                        <label for="meta-tittle" class="form-label">Meta Tittle</label>
                                        <input type="text" class="form-control" id="meta-tittle" name="meta-tittle" />
                                      </div>
                                </div>
                            </div>
                            <div class = "mb-4">
                            <label for="meta-keywords" class="form-label ">Meta Keywords</label>
                                <textarea placeholder="Text Area" class="form-control" rows="3"></textarea> 
                            </div>
                            <div class = "mb-3">
                            <label for="meta-keywords" class="form-label">Meta Description</label>
                            <textarea placeholder="Text Area" class="form-control" rows="3"></textarea> 
                            </div>   
                             <div class="mb-4">
                             <label for="first-name" class="form-label">Uses Access Level</label>
                              <select class="form-select mb-3" aria-label="Default select example">
                              <option selected>Open this select menu</option>
                              <option value="1">One</option>
                              <option value="2">Two</option>
                              <option value="3">Three</option>
                            </select> 
                             </div> 

                             <div class="mb-4">
                             <label for="first-name" class="form-label">Short Description</label>
                             <textarea
                            class="sa-quill-control form-control"
                            rows="1">
                              &lt;p&gt;Hello World!&lt;/p&gt;
                              &lt;p&gt;Some initial &lt;strong&gt;bold&lt;/strong&gt; text&lt;/p&gt;
                              &lt;p&gt;&lt;br/&gt;&lt;/p&gt;</textarea>
                               </div>
                               <div class="mb-4">
                             <label for="first-name" class="form-label">Long Description</label>
                             <textarea
                            class="sa-quill-control form-control"
                            rows="1">
                              &lt;p&gt;Hello World!&lt;/p&gt;
                              &lt;p&gt;Some initial &lt;strong&gt;bold&lt;/strong&gt; text&lt;/p&gt;
                              &lt;p&gt;&lt;br/&gt;&lt;/p&gt;</textarea>
                               </div>
                          </div>
                          <div class="mb-4">
                          <label for="formFile-1"
                          class="form-label"
                          >Image Upload</label>
                          <input
                          type="file"
                          class="form-control"
                          id="formFile-1"/>
                          </div>
                          <div class=" d-flex justify-content-end mt-5">
                            <a href="#" class="btn btn-secondary me-3">Save</a
                            ><a href="#" class="btn btn-primary">Cancel</a>
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
                          <label class="form-check"
                            ><input
                              type="radio"
                              class="form-check-input"
                              name="status"
                            /><span class="form-check-label"
                              >Published</span
                            ></label
                          ><label class="form-check"
                            ><input
                              type="radio"
                              class="form-check-input"
                              name="status"
                              checked=""
                            /><span class="form-check-label"
                              >Scheduled</span
                            ></label
                          ><label class="form-check mb-0"
                            ><input
                              type="radio"
                              class="form-check-input"
                              name="status"
                            /><span class="form-check-label"
                              >Hidden</span
                            ></label
                          >
                        </div>
                        <div>
                          <label for="form-product/seo-title" class="form-label"
                            >Publish date</label
                          ><input
                            type="text"
                            class="form-control datepicker-here"
                            id="form-product/publish-date"
                            data-auto-close="true"
                            data-language="en"
                          />
                        </div>
                      </div>
                    </div>
                    <div class="card w-100 mt-5">
                      <div class="card-body p-5">
                        <div class="mb-5">
                          <h2 class="mb-0 fs-exact-18">Categories</h2>
                        </div>
                        <select class="sa-select2 form-select" multiple="">
                          <option selected="">Power tools</option>
                          <option>Screwdrivers</option>
                          <option selected="">Chainsaws</option>
                          <option>Hand tools</option>
                          <option>Machine tools</option>
                          <option>Power machinery</option>
                          <option>Measurements</option>
                        </select>
                        <div class="mt-4 mb-n2">
                          <a href="#">Add new category</a>
                        </div>
                      </div>
                    </div>
                    <div class="card w-100 mt-5">
                      <div class="card-body p-5">
                        <div class="mb-5">
                          <h2 class="mb-0 fs-exact-18">Tags</h2>
                        </div>
                        <select
                          class="sa-select2 form-select"
                          data-tags="true"
                          multiple=""
                        >
                          <option selected="">Universe</option>
                          <option selected="">Sputnik</option>
                          <option selected="">Steel</option>
                          <option selected="">Rocket</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection
