@extends('layout')
@section('title','Administrator Dashboard || E-commerce Category List')
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
                          Categories
                        </li>
                      </ol>
                    </nav>
                    <h1 class="h3 m-0">Categories</h1>
                  </div>
                  <div class="col-auto d-flex">
                    <a href="app-category.html" class="btn btn-primary"
                      >New category</a
                    >
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="p-4">
                  <input
                    type="text"
                    placeholder="Start typing to search for categories"
                    class="form-control form-control--search mx-auto"
                    id="table-search"
                  />
                </div>
                <div class="sa-divider"></div>
                <table
                  class="sa-datatables-init"
                  data-order='[[ 1, "asc" ]]'
                  data-sa-search-input="#table-search"
                >
                  <thead>
                    <tr>
                      <th class="w-min" data-orderable="false">
                        <input
                          type="checkbox"
                          class="form-check-input m-0 fs-exact-16 d-block"
                          aria-label="..."
                        />
                      </th>
                      <th class="min-w-15x">Name</th>
                      <th>Items</th>
                      <th>Visibility</th>
                      <th class="w-min" data-orderable="false"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <input
                          type="checkbox"
                          class="form-check-input m-0 fs-exact-16 d-block"
                          aria-label="..."
                        />
                      </td>
                      <td>
                        <a href="app-category.html" class="text-reset"
                          >Headlights &amp; Lighting</a
                        >
                      </td>
                      <td>3</td>
                      <td><div class="badge badge-sa-success">Visible</div></td>
                      <td>
                        <div class="dropdown">
                          <button
                            class="btn btn-sa-muted btn-sm"
                            type="button"
                            id="category-context-menu-0"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                            aria-label="More"
                          >
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="3"
                              height="13"
                              fill="currentColor"
                            >
                              <path
                                d="M1.5,8C0.7,8,0,7.3,0,6.5S0.7,5,1.5,5S3,5.7,3,6.5S2.3,8,1.5,8z M1.5,3C0.7,3,0,2.3,0,1.5S0.7,0,1.5,0 S3,0.7,3,1.5S2.3,3,1.5,3z M1.5,10C2.3,10,3,10.7,3,11.5S2.3,13,1.5,13S0,12.3,0,11.5S0.7,10,1.5,10z"
                              ></path>
                            </svg>
                          </button>
                          <ul
                            class="dropdown-menu dropdown-menu-end"
                            aria-labelledby="category-context-menu-0"
                          >
                            <li><a class="dropdown-item" href="#">Edit</a></li>
                            <li>
                              <a class="dropdown-item" href="#">Duplicate</a>
                            </li>
                            <li>
                              <a class="dropdown-item" href="#">Add tag</a>
                            </li>
                            <li>
                              <a class="dropdown-item" href="#">Remove tag</a>
                            </li>
                            <li><hr class="dropdown-divider" /></li>
                            <li>
                              <a class="dropdown-item text-danger" href="#"
                                >Delete</a
                              >
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <input
                          type="checkbox"
                          class="form-check-input m-0 fs-exact-16 d-block"
                          aria-label="..."
                        />
                      </td>
                      <td>
                        <a href="app-category.html" class="text-reset"
                          >Interior Parts</a
                        >
                      </td>
                      <td>15</td>
                      <td><div class="badge badge-sa-primary">8 March</div></td>
                      <td>
                        <div class="dropdown">
                          <button
                            class="btn btn-sa-muted btn-sm"
                            type="button"
                            id="category-context-menu-1"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                            aria-label="More"
                          >
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="3"
                              height="13"
                              fill="currentColor"
                            >
                              <path
                                d="M1.5,8C0.7,8,0,7.3,0,6.5S0.7,5,1.5,5S3,5.7,3,6.5S2.3,8,1.5,8z M1.5,3C0.7,3,0,2.3,0,1.5S0.7,0,1.5,0 S3,0.7,3,1.5S2.3,3,1.5,3z M1.5,10C2.3,10,3,10.7,3,11.5S2.3,13,1.5,13S0,12.3,0,11.5S0.7,10,1.5,10z"
                              ></path>
                            </svg>
                          </button>
                          <ul
                            class="dropdown-menu dropdown-menu-end"
                            aria-labelledby="category-context-menu-1"
                          >
                            <li><a class="dropdown-item" href="#">Edit</a></li>
                            <li>
                              <a class="dropdown-item" href="#">Duplicate</a>
                            </li>
                            <li>
                              <a class="dropdown-item" href="#">Add tag</a>
                            </li>
                            <li>
                              <a class="dropdown-item" href="#">Remove tag</a>
                            </li>
                            <li><hr class="dropdown-divider" /></li>
                            <li>
                              <a class="dropdown-item text-danger" href="#"
                                >Delete</a
                              >
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <input
                          type="checkbox"
                          class="form-check-input m-0 fs-exact-16 d-block"
                          aria-label="..."
                        />
                      </td>
                      <td>
                        <a href="app-category.html" class="text-reset"
                          >Floor Mats</a
                        >
                      </td>
                      <td>0</td>
                      <td><div class="badge badge-sa-success">Visible</div></td>
                      <td>
                        <div class="dropdown">
                          <button
                            class="btn btn-sa-muted btn-sm"
                            type="button"
                            id="category-context-menu-2"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                            aria-label="More"
                          >
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="3"
                              height="13"
                              fill="currentColor"
                            >
                              <path
                                d="M1.5,8C0.7,8,0,7.3,0,6.5S0.7,5,1.5,5S3,5.7,3,6.5S2.3,8,1.5,8z M1.5,3C0.7,3,0,2.3,0,1.5S0.7,0,1.5,0 S3,0.7,3,1.5S2.3,3,1.5,3z M1.5,10C2.3,10,3,10.7,3,11.5S2.3,13,1.5,13S0,12.3,0,11.5S0.7,10,1.5,10z"
                              ></path>
                            </svg>
                          </button>
                          <ul
                            class="dropdown-menu dropdown-menu-end"
                            aria-labelledby="category-context-menu-2"
                          >
                            <li><a class="dropdown-item" href="#">Edit</a></li>
                            <li>
                              <a class="dropdown-item" href="#">Duplicate</a>
                            </li>
                            <li>
                              <a class="dropdown-item" href="#">Add tag</a>
                            </li>
                            <li>
                              <a class="dropdown-item" href="#">Remove tag</a>
                            </li>
                            <li><hr class="dropdown-divider" /></li>
                            <li>
                              <a class="dropdown-item text-danger" href="#"
                                >Delete</a
                              >
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <input
                          type="checkbox"
                          class="form-check-input m-0 fs-exact-16 d-block"
                          aria-label="..."
                        />
                      </td>
                      <td>
                        <a href="app-category.html" class="text-reset"
                          >Gauges</a
                        >
                      </td>
                      <td>0</td>
                      <td><div class="badge badge-sa-success">Visible</div></td>
                      <td>
                        <div class="dropdown">
                          <button
                            class="btn btn-sa-muted btn-sm"
                            type="button"
                            id="category-context-menu-3"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                            aria-label="More"
                          >
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="3"
                              height="13"
                              fill="currentColor"
                            >
                              <path
                                d="M1.5,8C0.7,8,0,7.3,0,6.5S0.7,5,1.5,5S3,5.7,3,6.5S2.3,8,1.5,8z M1.5,3C0.7,3,0,2.3,0,1.5S0.7,0,1.5,0 S3,0.7,3,1.5S2.3,3,1.5,3z M1.5,10C2.3,10,3,10.7,3,11.5S2.3,13,1.5,13S0,12.3,0,11.5S0.7,10,1.5,10z"
                              ></path>
                            </svg>
                          </button>
                          <ul
                            class="dropdown-menu dropdown-menu-end"
                            aria-labelledby="category-context-menu-3"
                          >
                            <li><a class="dropdown-item" href="#">Edit</a></li>
                            <li>
                              <a class="dropdown-item" href="#">Duplicate</a>
                            </li>
                            <li>
                              <a class="dropdown-item" href="#">Add tag</a>
                            </li>
                            <li>
                              <a class="dropdown-item" href="#">Remove tag</a>
                            </li>
                            <li><hr class="dropdown-divider" /></li>
                            <li>
                              <a class="dropdown-item text-danger" href="#"
                                >Delete</a
                              >
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <input
                          type="checkbox"
                          class="form-check-input m-0 fs-exact-16 d-block"
                          aria-label="..."
                        />
                      </td>
                      <td>
                        <a href="app-category.html" class="text-reset"
                          >Consoles &amp; Organizers</a
                        >
                      </td>
                      <td>0</td>
                      <td><div class="badge badge-sa-success">Visible</div></td>
                      <td>
                        <div class="dropdown">
                          <button
                            class="btn btn-sa-muted btn-sm"
                            type="button"
                            id="category-context-menu-4"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                            aria-label="More"
                          >
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="3"
                              height="13"
                              fill="currentColor"
                            >
                              <path
                                d="M1.5,8C0.7,8,0,7.3,0,6.5S0.7,5,1.5,5S3,5.7,3,6.5S2.3,8,1.5,8z M1.5,3C0.7,3,0,2.3,0,1.5S0.7,0,1.5,0 S3,0.7,3,1.5S2.3,3,1.5,3z M1.5,10C2.3,10,3,10.7,3,11.5S2.3,13,1.5,13S0,12.3,0,11.5S0.7,10,1.5,10z"
                              ></path>
                            </svg>
                          </button>
                          <ul
                            class="dropdown-menu dropdown-menu-end"
                            aria-labelledby="category-context-menu-4"
                          >
                            <li><a class="dropdown-item" href="#">Edit</a></li>
                            <li>
                              <a class="dropdown-item" href="#">Duplicate</a>
                            </li>
                            <li>
                              <a class="dropdown-item" href="#">Add tag</a>
                            </li>
                            <li>
                              <a class="dropdown-item" href="#">Remove tag</a>
                            </li>
                            <li><hr class="dropdown-divider" /></li>
                            <li>
                              <a class="dropdown-item text-danger" href="#"
                                >Delete</a
                              >
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <input
                          type="checkbox"
                          class="form-check-input m-0 fs-exact-16 d-block"
                          aria-label="..."
                        />
                      </td>
                      <td>
                        <a href="app-category.html" class="text-reset"
                          >Mobile Electronics</a
                        >
                      </td>
                      <td>0</td>
                      <td><div class="badge badge-sa-success">Visible</div></td>
                      <td>
                        <div class="dropdown">
                          <button
                            class="btn btn-sa-muted btn-sm"
                            type="button"
                            id="category-context-menu-5"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                            aria-label="More"
                          >
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="3"
                              height="13"
                              fill="currentColor"
                            >
                              <path
                                d="M1.5,8C0.7,8,0,7.3,0,6.5S0.7,5,1.5,5S3,5.7,3,6.5S2.3,8,1.5,8z M1.5,3C0.7,3,0,2.3,0,1.5S0.7,0,1.5,0 S3,0.7,3,1.5S2.3,3,1.5,3z M1.5,10C2.3,10,3,10.7,3,11.5S2.3,13,1.5,13S0,12.3,0,11.5S0.7,10,1.5,10z"
                              ></path>
                            </svg>
                          </button>
                          <ul
                            class="dropdown-menu dropdown-menu-end"
                            aria-labelledby="category-context-menu-5"
                          >
                            <li><a class="dropdown-item" href="#">Edit</a></li>
                            <li>
                              <a class="dropdown-item" href="#">Duplicate</a>
                            </li>
                            <li>
                              <a class="dropdown-item" href="#">Add tag</a>
                            </li>
                            <li>
                              <a class="dropdown-item" href="#">Remove tag</a>
                            </li>
                            <li><hr class="dropdown-divider" /></li>
                            <li>
                              <a class="dropdown-item text-danger" href="#"
                                >Delete</a
                              >
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <input
                          type="checkbox"
                          class="form-check-input m-0 fs-exact-16 d-block"
                          aria-label="..."
                        />
                      </td>
                      <td>
                        <a href="app-category.html" class="text-reset"
                          >Steering Wheels</a
                        >
                      </td>
                      <td>0</td>
                      <td><div class="badge badge-sa-success">Visible</div></td>
                      <td>
                        <div class="dropdown">
                          <button
                            class="btn btn-sa-muted btn-sm"
                            type="button"
                            id="category-context-menu-6"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                            aria-label="More"
                          >
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="3"
                              height="13"
                              fill="currentColor"
                            >
                              <path
                                d="M1.5,8C0.7,8,0,7.3,0,6.5S0.7,5,1.5,5S3,5.7,3,6.5S2.3,8,1.5,8z M1.5,3C0.7,3,0,2.3,0,1.5S0.7,0,1.5,0 S3,0.7,3,1.5S2.3,3,1.5,3z M1.5,10C2.3,10,3,10.7,3,11.5S2.3,13,1.5,13S0,12.3,0,11.5S0.7,10,1.5,10z"
                              ></path>
                            </svg>
                          </button>
                          <ul
                            class="dropdown-menu dropdown-menu-end"
                            aria-labelledby="category-context-menu-6"
                          >
                            <li><a class="dropdown-item" href="#">Edit</a></li>
                            <li>
                              <a class="dropdown-item" href="#">Duplicate</a>
                            </li>
                            <li>
                              <a class="dropdown-item" href="#">Add tag</a>
                            </li>
                            <li>
                              <a class="dropdown-item" href="#">Remove tag</a>
                            </li>
                            <li><hr class="dropdown-divider" /></li>
                            <li>
                              <a class="dropdown-item text-danger" href="#"
                                >Delete</a
                              >
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <input
                          type="checkbox"
                          class="form-check-input m-0 fs-exact-16 d-block"
                          aria-label="..."
                        />
                      </td>
                      <td>
                        <a href="app-category.html" class="text-reset"
                          >Cargo Accessories</a
                        >
                      </td>
                      <td>0</td>
                      <td><div class="badge badge-sa-success">Visible</div></td>
                      <td>
                        <div class="dropdown">
                          <button
                            class="btn btn-sa-muted btn-sm"
                            type="button"
                            id="category-context-menu-7"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                            aria-label="More"
                          >
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="3"
                              height="13"
                              fill="currentColor"
                            >
                              <path
                                d="M1.5,8C0.7,8,0,7.3,0,6.5S0.7,5,1.5,5S3,5.7,3,6.5S2.3,8,1.5,8z M1.5,3C0.7,3,0,2.3,0,1.5S0.7,0,1.5,0 S3,0.7,3,1.5S2.3,3,1.5,3z M1.5,10C2.3,10,3,10.7,3,11.5S2.3,13,1.5,13S0,12.3,0,11.5S0.7,10,1.5,10z"
                              ></path>
                            </svg>
                          </button>
                          <ul
                            class="dropdown-menu dropdown-menu-end"
                            aria-labelledby="category-context-menu-7"
                          >
                            <li><a class="dropdown-item" href="#">Edit</a></li>
                            <li>
                              <a class="dropdown-item" href="#">Duplicate</a>
                            </li>
                            <li>
                              <a class="dropdown-item" href="#">Add tag</a>
                            </li>
                            <li>
                              <a class="dropdown-item" href="#">Remove tag</a>
                            </li>
                            <li><hr class="dropdown-divider" /></li>
                            <li>
                              <a class="dropdown-item text-danger" href="#"
                                >Delete</a
                              >
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <input
                          type="checkbox"
                          class="form-check-input m-0 fs-exact-16 d-block"
                          aria-label="..."
                        />
                      </td>
                      <td>
                        <a href="app-category.html" class="text-reset"
                          >Engine &amp; Drivetrain</a
                        >
                      </td>
                      <td>0</td>
                      <td>
                        <div class="badge badge-sa-secondary">Hidden</div>
                      </td>
                      <td>
                        <div class="dropdown">
                          <button
                            class="btn btn-sa-muted btn-sm"
                            type="button"
                            id="category-context-menu-8"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                            aria-label="More"
                          >
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="3"
                              height="13"
                              fill="currentColor"
                            >
                              <path
                                d="M1.5,8C0.7,8,0,7.3,0,6.5S0.7,5,1.5,5S3,5.7,3,6.5S2.3,8,1.5,8z M1.5,3C0.7,3,0,2.3,0,1.5S0.7,0,1.5,0 S3,0.7,3,1.5S2.3,3,1.5,3z M1.5,10C2.3,10,3,10.7,3,11.5S2.3,13,1.5,13S0,12.3,0,11.5S0.7,10,1.5,10z"
                              ></path>
                            </svg>
                          </button>
                          <ul
                            class="dropdown-menu dropdown-menu-end"
                            aria-labelledby="category-context-menu-8"
                          >
                            <li><a class="dropdown-item" href="#">Edit</a></li>
                            <li>
                              <a class="dropdown-item" href="#">Duplicate</a>
                            </li>
                            <li>
                              <a class="dropdown-item" href="#">Add tag</a>
                            </li>
                            <li>
                              <a class="dropdown-item" href="#">Remove tag</a>
                            </li>
                            <li><hr class="dropdown-divider" /></li>
                            <li>
                              <a class="dropdown-item text-danger" href="#"
                                >Delete</a
                              >
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <input
                          type="checkbox"
                          class="form-check-input m-0 fs-exact-16 d-block"
                          aria-label="..."
                        />
                      </td>
                      <td>
                        <a href="app-category.html" class="text-reset"
                          >Repair Manuals</a
                        >
                      </td>
                      <td>45</td>
                      <td><div class="badge badge-sa-success">Visible</div></td>
                      <td>
                        <div class="dropdown">
                          <button
                            class="btn btn-sa-muted btn-sm"
                            type="button"
                            id="category-context-menu-9"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                            aria-label="More"
                          >
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="3"
                              height="13"
                              fill="currentColor"
                            >
                              <path
                                d="M1.5,8C0.7,8,0,7.3,0,6.5S0.7,5,1.5,5S3,5.7,3,6.5S2.3,8,1.5,8z M1.5,3C0.7,3,0,2.3,0,1.5S0.7,0,1.5,0 S3,0.7,3,1.5S2.3,3,1.5,3z M1.5,10C2.3,10,3,10.7,3,11.5S2.3,13,1.5,13S0,12.3,0,11.5S0.7,10,1.5,10z"
                              ></path>
                            </svg>
                          </button>
                          <ul
                            class="dropdown-menu dropdown-menu-end"
                            aria-labelledby="category-context-menu-9"
                          >
                            <li><a class="dropdown-item" href="#">Edit</a></li>
                            <li>
                              <a class="dropdown-item" href="#">Duplicate</a>
                            </li>
                            <li>
                              <a class="dropdown-item" href="#">Add tag</a>
                            </li>
                            <li>
                              <a class="dropdown-item" href="#">Remove tag</a>
                            </li>
                            <li><hr class="dropdown-divider" /></li>
                            <li>
                              <a class="dropdown-item text-danger" href="#"
                                >Delete</a
                              >
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <input
                          type="checkbox"
                          class="form-check-input m-0 fs-exact-16 d-block"
                          aria-label="..."
                        />
                      </td>
                      <td>
                        <a href="app-category.html" class="text-reset"
                          >Suspension</a
                        >
                      </td>
                      <td>28</td>
                      <td><div class="badge badge-sa-success">Visible</div></td>
                      <td>
                        <div class="dropdown">
                          <button
                            class="btn btn-sa-muted btn-sm"
                            type="button"
                            id="category-context-menu-10"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                            aria-label="More"
                          >
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="3"
                              height="13"
                              fill="currentColor"
                            >
                              <path
                                d="M1.5,8C0.7,8,0,7.3,0,6.5S0.7,5,1.5,5S3,5.7,3,6.5S2.3,8,1.5,8z M1.5,3C0.7,3,0,2.3,0,1.5S0.7,0,1.5,0 S3,0.7,3,1.5S2.3,3,1.5,3z M1.5,10C2.3,10,3,10.7,3,11.5S2.3,13,1.5,13S0,12.3,0,11.5S0.7,10,1.5,10z"
                              ></path>
                            </svg>
                          </button>
                          <ul
                            class="dropdown-menu dropdown-menu-end"
                            aria-labelledby="category-context-menu-10"
                          >
                            <li><a class="dropdown-item" href="#">Edit</a></li>
                            <li>
                              <a class="dropdown-item" href="#">Duplicate</a>
                            </li>
                            <li>
                              <a class="dropdown-item" href="#">Add tag</a>
                            </li>
                            <li>
                              <a class="dropdown-item" href="#">Remove tag</a>
                            </li>
                            <li><hr class="dropdown-divider" /></li>
                            <li>
                              <a class="dropdown-item text-danger" href="#"
                                >Delete</a
                              >
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <input
                          type="checkbox"
                          class="form-check-input m-0 fs-exact-16 d-block"
                          aria-label="..."
                        />
                      </td>
                      <td>
                        <a href="app-category.html" class="text-reset"
                          >Fuel Systems</a
                        >
                      </td>
                      <td>11</td>
                      <td>
                        <div class="badge badge-sa-danger">For premium</div>
                      </td>
                      <td>
                        <div class="dropdown">
                          <button
                            class="btn btn-sa-muted btn-sm"
                            type="button"
                            id="category-context-menu-11"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                            aria-label="More"
                          >
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="3"
                              height="13"
                              fill="currentColor"
                            >
                              <path
                                d="M1.5,8C0.7,8,0,7.3,0,6.5S0.7,5,1.5,5S3,5.7,3,6.5S2.3,8,1.5,8z M1.5,3C0.7,3,0,2.3,0,1.5S0.7,0,1.5,0 S3,0.7,3,1.5S2.3,3,1.5,3z M1.5,10C2.3,10,3,10.7,3,11.5S2.3,13,1.5,13S0,12.3,0,11.5S0.7,10,1.5,10z"
                              ></path>
                            </svg>
                          </button>
                          <ul
                            class="dropdown-menu dropdown-menu-end"
                            aria-labelledby="category-context-menu-11"
                          >
                            <li><a class="dropdown-item" href="#">Edit</a></li>
                            <li>
                              <a class="dropdown-item" href="#">Duplicate</a>
                            </li>
                            <li>
                              <a class="dropdown-item" href="#">Add tag</a>
                            </li>
                            <li>
                              <a class="dropdown-item" href="#">Remove tag</a>
                            </li>
                            <li><hr class="dropdown-divider" /></li>
                            <li>
                              <a class="dropdown-item text-danger" href="#"
                                >Delete</a
                              >
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <input
                          type="checkbox"
                          class="form-check-input m-0 fs-exact-16 d-block"
                          aria-label="..."
                        />
                      </td>
                      <td>
                        <a href="app-category.html" class="text-reset"
                          >Air Filters</a
                        >
                      </td>
                      <td>0</td>
                      <td>
                        <div class="badge badge-sa-secondary">Hidden</div>
                      </td>
                      <td>
                        <div class="dropdown">
                          <button
                            class="btn btn-sa-muted btn-sm"
                            type="button"
                            id="category-context-menu-12"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                            aria-label="More"
                          >
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="3"
                              height="13"
                              fill="currentColor"
                            >
                              <path
                                d="M1.5,8C0.7,8,0,7.3,0,6.5S0.7,5,1.5,5S3,5.7,3,6.5S2.3,8,1.5,8z M1.5,3C0.7,3,0,2.3,0,1.5S0.7,0,1.5,0 S3,0.7,3,1.5S2.3,3,1.5,3z M1.5,10C2.3,10,3,10.7,3,11.5S2.3,13,1.5,13S0,12.3,0,11.5S0.7,10,1.5,10z"
                              ></path>
                            </svg>
                          </button>
                          <ul
                            class="dropdown-menu dropdown-menu-end"
                            aria-labelledby="category-context-menu-12"
                          >
                            <li><a class="dropdown-item" href="#">Edit</a></li>
                            <li>
                              <a class="dropdown-item" href="#">Duplicate</a>
                            </li>
                            <li>
                              <a class="dropdown-item" href="#">Add tag</a>
                            </li>
                            <li>
                              <a class="dropdown-item" href="#">Remove tag</a>
                            </li>
                            <li><hr class="dropdown-divider" /></li>
                            <li>
                              <a class="dropdown-item text-danger" href="#"
                                >Delete</a
                              >
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

@endsection
