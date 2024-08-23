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
          <div class="col-auto d-flex">
            <a href="{{ route('contents.create',['parent' => Crypt::encrypt(0)])}}" class="btn btn-primary"
              >New Content</a
            >
          </div>
        </div>
      </div>
      <div class="card">
        <div class="p-4">
          <input
            type="text"
            placeholder="Start typing to search for contents"
            class="form-control form-control--search mx-auto"
            id="table-search"
          />
        </div>
        <div class="sa-divider"></div>
        <table
          class="sa-datatables-init"
          data-sa-search-input="#table-search">
          <thead>
          <tr>
            <th class="w-min">No</th>
            <th>Name</th>
            <th  data-orderable="false">Description</th>
            <th  data-orderable="false">Sub Pages</th>
            <th class="align-items-center"  data-orderable="false">Sections</th>
            <th class="d-flex align-items-center"  data-orderable="false">Menu</th>
            <th  data-orderable="false">Status</th>
            <th class="w-min" data-orderable="false"></th>
          </tr>
          </thead>
          <tbody>
          @foreach ($contents as $content)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td><a href="{{ route('contents.edit',Crypt::encrypt($content['id']))}}" class="text-reset">{{ $content['name'] }}</a></td>
              <td class="text-nowrap "> {{ $content['meta_title'] }} </td>
              <!-- <td>
                <a href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="black" class="bi bi-view-list" viewBox="0 0 16 16">
                    <path d="M3 4.5h10a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1H3zM1 2a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13A.5.5 0 0 1 1 2zm0 12a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13A.5.5 0 0 1 1 14z" />
                  </svg>
                </a>
              </td> -->
              <td>
                <div class="notification-box">
                  <a href="{{ route('contents.subindex',Crypt::encrypt($content['id']))}}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="black" class="bi bi-card-text" viewBox="0 0 16 16">
                      <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z" />
                      <path d="M3 5.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 8zm0 2.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5z" />
                    </svg>
                    <span class="notification-counter">{{ $content->sub_contents_count }}</span>
                  </a>
                </div>
              </td>
              <td>
                <div class="notification-box">
                  <a href="{{ route('contents.section',Crypt::encrypt($content['id']))}}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="black" class="bi bi-card-text" viewBox="0 0 16 16">
                      <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z" />
                      <path d="M3 5.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 8zm0 2.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5z" />
                    </svg>
                    <span class="notification-counter">{{ $content->sub_sections_count }}</span>
                  </a>
                </div>
              </td>
              <td class="d-flex align-items-center">
                <a href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="black" class="bi bi-menu-up" viewBox="0 0 16 16">
                    <path d="M7.646 15.854a.5.5 0 0 0 .708 0L10.207 14H14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h3.793l1.853 1.854zM1 9V6h14v3H1zm14 1v2a1 1 0 0 1-1 1h-3.793a1 1 0 0 0-.707.293l-1.5 1.5-1.5-1.5A1 1 0 0 0 5.793 13H2a1 1 0 0 1-1-1v-2h14zm0-5H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v2zM2 11.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 0-1h-8a.5.5 0 0 0-.5.5zm0-4a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 0-1h-11a.5.5 0 0 0-.5.5zm0-4a.5.5 0 0 0 .5.5h6a.5.5 0 0 0 0-1h-6a.5.5 0 0 0-.5.5z" />
                  </svg>
                </a>
              </td>
              <td>
                <a href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="blackr" class="bi bi-check2" viewBox="0 0 16 16">
                    <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"></path>
                  </svg>
                </a>
              </td>
              <td>
                <div class="dropdown">
                  <button class="btn btn-sa-muted btn-sm" type="button" id="customer-context-menu-0" data-bs-toggle="dropdown" aria-expanded="false" aria-label="More">
                    <svg xmlns="http://www.w3.org/2000/svg" width="3" height="13" fill="currentColor">
                      <path d="M1.5,8C0.7,8,0,7.3,0,6.5S0.7,5,1.5,5S3,5.7,3,6.5S2.3,8,1.5,8z M1.5,3C0.7,3,0,2.3,0,1.5S0.7,0,1.5,0 S3,0.7,3,1.5S2.3,3,1.5,3z M1.5,10C2.3,10,3,10.7,3,11.5S2.3,13,1.5,13S0,12.3,0,11.5S0.7,10,1.5,10z"></path>
                    </svg>
                  </button>
                  <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="customer-context-menu-0">
                    <li>
                      <a class="dropdown-item" href="{{ route('contents.edit',Crypt::encrypt($content['id']))}}">Edit</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">Duplicate</a>
                    </li>
                    <li>
                      <hr class="dropdown-divider" />
                    </li>
                    <li>
                      <a class="dropdown-item text-danger" href="#">Delete</a>
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
