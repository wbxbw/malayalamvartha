@extends('layout')
@section('title','Administrator Dashboard || E-commerce List Content')
@section('content')
<!--section start -->
        
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
                         List Content
                        </li>
                      </ol>
                    </nav>
                    <h1 class="h3 m-0">List Content</h1>
                  </div>
                  <div class="col-auto d-flex">
                    <a href="app-customer.html" class="btn btn-primary"
                      >New Administrator</a
                    >
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="p-4">
                  <input
                    type="text"
                    placeholder="Start typing to search for customers"
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
                    <th class="w-min" data-orderable="false">No</th>
                    <th class="">Page Name</th>
                    <th>Page Description</th>
                    <th>Access Level</th>
                    <th>View</th>
                    <th>Sub Pages</th>
                    <th>Show In Menu</th>
                    <th>Status</th>
                    <th class="w-min" data-orderable="false"></th>
                  </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                      1
                      </td>
                      <td>
                       Home Page
                      </td>
                      <td class="text-nowrap ">
                          Dashboard
                      </td>
                      <td>
                      Open
                      </td>
                      <td>
                     <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="black" class="bi bi-view-list" viewBox="0 0 16 16">
                      <path d="M3 4.5h10a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1H3zM1 2a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13A.5.5 0 0 1 1 2zm0 12a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13A.5.5 0 0 1 1 14z"/>
                     </svg></a>
                      </td>
                      <td>
                      <div class="notification-box">
                        <a href="#">
                          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="black" class="bi bi-card-text" viewBox="0 0 16 16">
                            <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
                            <path d="M3 5.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 8zm0 2.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5z"/>
                          </svg>
                          <span class="notification-counter">1</span> <!-- Change the number to your notification count -->
                        </a>
                      </div>
                      </td>
                      <td>
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="black" class="bi bi-menu-up" viewBox="0 0 16 16">
                        <path d="M7.646 15.854a.5.5 0 0 0 .708 0L10.207 14H14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h3.793l1.853 1.854zM1 9V6h14v3H1zm14 1v2a1 1 0 0 1-1 1h-3.793a1 1 0 0 0-.707.293l-1.5 1.5-1.5-1.5A1 1 0 0 0 5.793 13H2a1 1 0 0 1-1-1v-2h14zm0-5H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v2zM2 11.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 0-1h-8a.5.5 0 0 0-.5.5zm0-4a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 0-1h-11a.5.5 0 0 0-.5.5zm0-4a.5.5 0 0 0 .5.5h6a.5.5 0 0 0 0-1h-6a.5.5 0 0 0-.5.5z"/>
                        </svg></a>
                      </td>
                      <td>
                       <a href="#"> <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="blackr" class="bi bi-check2" viewBox="0 0 16 16">
                          <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"></path>
                        </svg></a>
                      </td>
                        <td>
                        <div class="dropdown">
                          <button
                            class="btn btn-sa-muted btn-sm"
                            type="button"
                            id="customer-context-menu-0"
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
                            aria-labelledby="customer-context-menu-0"
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
                        2
                      </td>
                      <td>
                       About
                      </td>
                      <td class="text-nowrap ">
                          Dashboard
                      </td>
                      <td>
                      Open
                      </td>
                      <td>
                     <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="black" class="bi bi-view-list" viewBox="0 0 16 16">
                      <path d="M3 4.5h10a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1H3zM1 2a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13A.5.5 0 0 1 1 2zm0 12a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13A.5.5 0 0 1 1 14z"/>
                     </svg></a>
                      </td>
                      <td>
                      <div class="notification-box">
                        <a href="#">
                          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="black" class="bi bi-card-text" viewBox="0 0 16 16">
                            <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
                            <path d="M3 5.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 8zm0 2.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5z"/>
                          </svg>
                          <span class="notification-counter">1</span> <!-- Change the number to your notification count -->
                        </a>
                      </div>
                      </td>
                      <td>
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="black" class="bi bi-menu-up" viewBox="0 0 16 16">
                        <path d="M7.646 15.854a.5.5 0 0 0 .708 0L10.207 14H14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h3.793l1.853 1.854zM1 9V6h14v3H1zm14 1v2a1 1 0 0 1-1 1h-3.793a1 1 0 0 0-.707.293l-1.5 1.5-1.5-1.5A1 1 0 0 0 5.793 13H2a1 1 0 0 1-1-1v-2h14zm0-5H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v2zM2 11.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 0-1h-8a.5.5 0 0 0-.5.5zm0-4a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 0-1h-11a.5.5 0 0 0-.5.5zm0-4a.5.5 0 0 0 .5.5h6a.5.5 0 0 0 0-1h-6a.5.5 0 0 0-.5.5z"/>
                        </svg></a>
                      </td>
                      <td>
                       <a href="#"> <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="blackr" class="bi bi-check2" viewBox="0 0 16 16">
                          <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"></path>
                        </svg></a>
                      </td>
                        <td>
                        <div class="dropdown">
                          <button
                            class="btn btn-sa-muted btn-sm"
                            type="button"
                            id="customer-context-menu-0"
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
                            aria-labelledby="customer-context-menu-0"
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
                        3
                      </td>
                      <td>
                       Facilities
                      </td>
                      <td class="text-nowrap ">
                          Dashboard
                      </td>
                      <td>
                      Open
                      </td>
                      <td>
                     <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="black" class="bi bi-view-list" viewBox="0 0 16 16">
                      <path d="M3 4.5h10a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1H3zM1 2a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13A.5.5 0 0 1 1 2zm0 12a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13A.5.5 0 0 1 1 14z"/>
                     </svg></a>
                      </td>
                      <td>
                      <div class="notification-box">
                        <a href="#">
                          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="black" class="bi bi-card-text" viewBox="0 0 16 16">
                            <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
                            <path d="M3 5.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 8zm0 2.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5z"/>
                          </svg>
                          <span class="notification-counter">1</span> <!-- Change the number to your notification count -->
                        </a>
                      </div>
                      </td>
                      <td>
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="black" class="bi bi-menu-up" viewBox="0 0 16 16">
                        <path d="M7.646 15.854a.5.5 0 0 0 .708 0L10.207 14H14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h3.793l1.853 1.854zM1 9V6h14v3H1zm14 1v2a1 1 0 0 1-1 1h-3.793a1 1 0 0 0-.707.293l-1.5 1.5-1.5-1.5A1 1 0 0 0 5.793 13H2a1 1 0 0 1-1-1v-2h14zm0-5H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v2zM2 11.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 0-1h-8a.5.5 0 0 0-.5.5zm0-4a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 0-1h-11a.5.5 0 0 0-.5.5zm0-4a.5.5 0 0 0 .5.5h6a.5.5 0 0 0 0-1h-6a.5.5 0 0 0-.5.5z"/>
                        </svg></a>
                      </td>
                      <td>
                       <a href="#"> <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="blackr" class="bi bi-check2" viewBox="0 0 16 16">
                          <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"></path>
                        </svg></a>
                      </td>
                        <td>
                        <div class="dropdown">
                          <button
                            class="btn btn-sa-muted btn-sm"
                            type="button"
                            id="customer-context-menu-0"
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
                            aria-labelledby="customer-context-menu-0"
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
        <!--section end -->
@endsection
