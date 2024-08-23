@extends('wbxadmin.layout')
@section('content')
<div id="top" class="sa-app__body">
  <div class="mx-sm-2 px-2 px-sm-3 px-xxl-4 pb-6">
    <div class="container"> 
      <div class="py-5">
      <!-- {!! $moduleDetails !!} -->
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
        <div class="col-auto d-flex">
            <a href="{{ route('modules.create')}}" class="btn btn-primary">New Module</a>
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
              <th class="min-w-20x">Module Name</th>
              <th>Title</th>
              <th>Icon</th>
              <th>Image</th>
              <th>Order</th>
              <th>Status</th>
              <th class="w-min" data-orderable="false"></th>
            </tr>
          </thead>
          <tbody>
          @foreach ($modules as $module)
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
                  <a href="#" class="text-reset">{{ $module['name'] }}</a>
                </div>
              </td>
              <td>
                <div class="d-flex align-items-center">
                  <a href="#" class="text-reset">{{ $module['title'] }}</a>
                </div>
              </td>
              <td class="text-nowrap ">
                  <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="blackr" class="bi bi-lock" viewBox="0 0 16 16">
                  <path d="{{ $module['icon'] }}"/>
                </svg></a>
              </td>

              <td>
                <div class="d-flex align-items-center">
                  <a href="#" class="text-reset">{{ $module['image'] }}</a>
                </div>
              </td>

              <td>
                <div class="d-flex align-items-center">
                  <a href="#" class="text-reset">{{ $module['order'] }}</a>
                </div>
              </td>
              <td>
                <div class="d-flex align-items-center">
                  <a href="#" class="text-reset">Active</a>
                </div>
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
                    <li><a class="dropdown-item" href="{{ route('modules.edit',$module['id'])}}">Edit</a></li>
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
            @endforeach
            
           
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection
