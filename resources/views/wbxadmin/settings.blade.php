@extends('wbxadmin.layout')
@section('title','General Settings || E-commerce Admin')
@section('content')
<div id="top" class="sa-app__body">
  <div class="mx-sm-2 px-2 px-sm-3 px-xxl-4 pb-6">
      <div class="container container--max--lg">
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
          <div class="col-auto d-flex"><a href="#" class="btn btn-secondary me-3">Reset</a><a href="#" class="btn btn-primary">Save</a></div>
        </div>
        </div>
        <div class="card">
            <div class="card-body p-5">
            @foreach ($settings as $setting)
              <div class="mb-4"><label for="{{ $setting['caption'] }}" class="form-label">{{ $setting['caption'] }}</label><input type="text" class="form-control" id="form-settings/name" value="{{ $setting['values'] }}"/></div>
            @endforeach
            </div>
        </div>
      </div>
  </div>
</div>
@endsection
