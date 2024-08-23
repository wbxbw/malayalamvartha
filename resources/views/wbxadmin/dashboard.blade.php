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
                        <a href="{{route('wbxadmin')}}">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Admin Dashboard</li>
                    </ol>
                    </nav>
                    <h1 class="h3 m-0">Admin Dashboard</h1>
                </div>
            </div>
        </div>
          <div class="row g-4">
            @foreach($modules as $module)
              <div class="col-6 col-md-4 col-lg-3">
                  <div class="card text-center">
                      <a href="{{ route($module->defaultPage['link']) }}" class="text-reset p-5 text-decoration-none sa-hover-area">
                          <div class="fs-4 mb-4 text-muted opacity-50" > 
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor">
                                <path d="{{ $module['icon'] }}"></path>
                            </svg>
                          </div>
                          <h2 class="fs-6 fw-medium mb-3">{{ $module['name'] }}</h2>
                          <div class="text-muted fs-exact-14">
                             {{ $module['title'] }}
                          </div>
                        </a>
                  </div>
              </div>
              @endforeach
          </div>
      </div>
  </div>
</div>
@endsection
