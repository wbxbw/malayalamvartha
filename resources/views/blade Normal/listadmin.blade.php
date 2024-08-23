@extends('layout')
@section('title','Administrator Dashboard || E-commerce List Admin')
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
                  Administrator
                </li>
              </ol>
            </nav>
            <h1 class="h3 m-0">Administrator</h1>
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
              <th class="w-min" data-orderable="false">
                <input
                  type="checkbox"
                  class="form-check-input m-0 fs-exact-16 d-block"
                  aria-label="..."
                />
              </th>
              <th class="min-w-20x">Name</th>
              <th>Reset Password</th>
              <th>Edit Permission</th>
              <th>Status</th>
              <th>Edit</th>
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
                <div class="d-flex align-items-center">
                  <a href="app-customer.html" class="me-4"
                    ><div
                      class="sa-symbol sa-symbol--shape--rounded sa-symbol--size--lg"
                    >
                      <img
                        src="images/customers/customer-1-40x40.jpg"
                        width="40"
                        height="40"
                        alt=""
                      /></div
                  ></a>
                  <div>
                    <a href="app-customer.html" class="text-reset"
                      >Jessica Moore</a
                    >
                    <div class="text-muted mt-n1">
                      moore-jessica@example.com
                    </div>
                  </div>
                </div>
              </td>
              <td class="text-nowrap ">
                  <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="blackr" class="bi bi-lock" viewBox="0 0 16 16">
                  <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2zM5 8h6a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1z"/>
                </svg></a>
              </td>
              <td>
              <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="blackr" class="bi bi-pencil-square" viewBox="0 0 16 16">
              <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
              <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
              </svg></a>
              </td>
              <td>
              <a href="#"> <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="blackr" class="bi bi-check2" viewBox="0 0 16 16">
                  <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                </svg></a>
              </td>
              <td>
              <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="blackr" class="bi bi-pencil-square" viewBox="0 0 16 16">
              <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
              <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
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
                <input
                  type="checkbox"
                  class="form-check-input m-0 fs-exact-16 d-block"
                  aria-label="..."
                />
              </td>
              <td>
                <div class="d-flex align-items-center">
                  <a href="app-customer.html" class="me-4"
                    ><div
                      class="sa-symbol sa-symbol--shape--rounded sa-symbol--size--lg"
                    >
                      <img
                        src="images/customers/customer-1-40x40.jpg"
                        width="40"
                        height="40"
                        alt=""
                      /></div
                  ></a>
                  <div>
                    <a href="app-customer.html" class="text-reset"
                      >Jessica Moore</a
                    >
                    <div class="text-muted mt-n1">
                      moore-jessica@example.com
                    </div>
                  </div>
                </div>
              </td>
              <td class="text-nowrap ">
                  <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="blackr" class="bi bi-lock" viewBox="0 0 16 16">
                  <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2zM5 8h6a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1z"/>
                </svg></a>
              </td>
              <td>
              <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="blackr" class="bi bi-pencil-square" viewBox="0 0 16 16">
              <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
              <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
              </svg></a>
              </td>
              <td>
              <a href="#"> <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="blackr" class="bi bi-check2" viewBox="0 0 16 16">
                  <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                </svg></a>
              </td>
              <td>
              <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="blackr" class="bi bi-pencil-square" viewBox="0 0 16 16">
              <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
              <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
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
                <input
                  type="checkbox"
                  class="form-check-input m-0 fs-exact-16 d-block"
                  aria-label="..."
                />
              </td>
              <td>
                <div class="d-flex align-items-center">
                  <a href="app-customer.html" class="me-4"
                    ><div
                      class="sa-symbol sa-symbol--shape--rounded sa-symbol--size--lg"
                    >
                      <img
                        src="images/customers/customer-1-40x40.jpg"
                        width="40"
                        height="40"
                        alt=""
                      /></div
                  ></a>
                  <div>
                    <a href="app-customer.html" class="text-reset"
                      >Jessica Moore</a
                    >
                    <div class="text-muted mt-n1">
                      moore-jessica@example.com
                    </div>
                  </div>
                </div>
              </td>
              <td class="text-nowrap ">
                  <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="blackr" class="bi bi-lock" viewBox="0 0 16 16">
                  <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2zM5 8h6a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1z"/>
                </svg></a>
              </td>
              <td>
              <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="blackr" class="bi bi-pencil-square" viewBox="0 0 16 16">
              <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
              <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
              </svg></a>
              </td>
              <td>
              <a href="#"> <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="blackr" class="bi bi-check2" viewBox="0 0 16 16">
                  <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                </svg></a>
              </td>
              <td>
              <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="blackr" class="bi bi-pencil-square" viewBox="0 0 16 16">
              <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
              <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
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
@endsection
