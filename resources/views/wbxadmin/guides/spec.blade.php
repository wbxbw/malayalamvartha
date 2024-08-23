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
                <a href="route('wbxadmin')">Dashboard</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">{{ $moduleDetails->name }}</li>
              </ol>
            </nav>
            <h1 class="h3 m-0">{{ $pageDetails->name }}</h1>
          </div>
          <!-- <div class="col-auto d-flex">
            <a href="{{ route('categories.createspec', [Crypt::encrypt($category->id)] )}}" class="btn btn-primary"
              >New Specification</a
            >
          </div> -->
        </div>
      </div>
      <div class="card">
        <div class="p-4">
        <div class="mb-5">
            <h2 class="mb-0 fs-exact-18"><a href="{{ route('guides.index')}}">Categories</a> / {{ $category['name'] }} </h2>
        </div>
          <input
            type="text"
            placeholder="Start typing to search for specifications"
            class="form-control form-control--search mx-auto"
            id="table-search"
          />
        </div>
        <div class="sa-divider"></div>
        <table class="sa-datatables-init" data-sa-search-input="#table-search" >
          <thead>
            <tr>
              <th>No</th>
              <th class="min-w-15x">Specification Name</th>
              <th>Spec Values</th>
              <th>Status</th>
              <th class="w-min" data-orderable="false"></th>
            </tr>
          </thead>
          <tbody>
          @foreach ($specifications as $specification)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>
                <a href="#" class="text-reset">{{ $specification['name'] }}</a>
              </td>
              <td>
              <div class="notification-box">
                <a href="{{ route('guides.specvalues',Crypt::encrypt($specification['id']))}}">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="black" class="bi bi-card-text" viewBox="0 0 16 16">
                    <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
                    <path d="M3 5.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 8zm0 2.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5z"/>
                  </svg>
                  <span class="notification-counter">{{ $specification->spec_vlues_count }}</span> <!-- Change the number to your notification count -->
                </a>
              </div>
              </td>
              <td>
                @if($specification['status'] == 'N')
                <div class="badge badge-sa-danger">Disabled</div>
                @endif
                @if($specification['status'] == 'Y')
                 <div class="badge badge-sa-success">Active</div>
                @endif
              </td>
              <td>
                <div class="dropdown">
                  <button class="btn btn-sa-muted btn-sm" type="button" id="category-context-menu-0" data-bs-toggle="dropdown" aria-expanded="false" aria-label="More" >
                    <svg xmlns="http://www.w3.org/2000/svg" width="3" height="13" fill="currentColor" >
                      <path d="M1.5,8C0.7,8,0,7.3,0,6.5S0.7,5,1.5,5S3,5.7,3,6.5S2.3,8,1.5,8z M1.5,3C0.7,3,0,2.3,0,1.5S0.7,0,1.5,0 S3,0.7,3,1.5S2.3,3,1.5,3z M1.5,10C2.3,10,3,10.7,3,11.5S2.3,13,1.5,13S0,12.3,0,11.5S0.7,10,1.5,10z" ></path>
                    </svg>
                  </button>
                  <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="category-context-menu-0" >
                    <li><a class="dropdown-item" href="{{ route('categories.editspec',Crypt::encrypt($specification['id']))}}">Edit</a></li>
                    <!-- <li>
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
                      <a class="dropdown-item text-danger" href="#" >Delete</a >
                    </li> -->
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
