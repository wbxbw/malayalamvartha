@extends('layout')
@section('title','Administrator Dashboard || E-commerce Edit Content')
@section('content')

<div id="top" class="sa-app__body">
                    <div class="mx-sm-2 px-2 px-sm-3 px-xxl-4 pb-6">
                        <div class="container container--max--lg">
                            <div class="py-5">
                                <div class="row g-4 align-items-center">
                                    <div class="col">
                                        <nav
                                            class="mb-2"
                                            aria-label="breadcrumb"
                                        >
                                            <ol
                                                class="breadcrumb breadcrumb-sa-simple"
                                            >
                                                <li class="breadcrumb-item">
                                                    <a href="index.html"
                                                        >Dashboard</a
                                                    >
                                                </li>
                                                <li class="breadcrumb-item">
                                                    <a
                                                        href="app-settings-toc.html"
                                                        >Settings</a
                                                    >
                                                </li>
                                                <li
                                                    class="breadcrumb-item active"
                                                    aria-current="page"
                                                >
                                                    General
                                                </li>
                                            </ol>
                                        </nav>
                                        <h1 class="h3 m-0">Edit Permission</h1>
                                    </div>
                                    <div class="col-auto d-flex">
                                        <a
                                            href="#"
                                            class="btn btn-secondary me-3"
                                            >Reset</a
                                        ><a href="#" class="btn btn-primary"
                                            >Save</a
                                        >
                                    </div>
                                </div>
                            </div>
                            <div class="card mt-5">
                                <div class="card-body p-5">
                                    <div class="mb-5">
                                        <h2 class="mb-0 fs-exact-18">
                                         Edit Permission
                                        </h2>
                                    </div>
                                    <div class="mb-4">
                                        <div class="form-label">
                                            Enable Reviews
                                        </div>
                                        <div>
                                            <label class="form-check form-check-inline mb-0">
                                                <input type="radio" class="form-check-input" name="settings[reviews]" id="enableRadio" checked>
                                                <span class="form-check-label">Enable</span>
                                            </label>
                                            <label class="form-check form-check-inline mb-0">
                                                <input type="radio" class="form-check-input" name="settings[reviews]" id="disableRadio">
                                                <span class="form-check-label">Disable</span>
                                            </label>
                                            
                                        </div>
                                    </div>
                                    <div class="editPermission">
                                          <table width="100%" border ="0" cellspacing="0" cellpadding="0" class="listing" id = "dataTable">
                                                      <tbody>
                                                        <tr>
                                                      <td width="25%"><strong>Manage Admin</strong></td>
                                                      <td width="75%">
                                                      <input
                                                        type="checkbox"
                                                        class="form-check-input"
                                                    /> View&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <input
                                                        type="checkbox"
                                                        class="form-check-input"
                                                    /> Delete&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                      </td>
                                                    </tr>
                                                                <tr>
                                                      <td width="25%">Add Admin</td>
                                                      <td width="75%">
                                                                      <input type="checkbox"  class="form-check-input">
                                                      Add&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                      <input
                                                        type="checkbox"
                                                        class="form-check-input"
                                                    /> Edit&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                      </td>
                                                    </tr>
                                                                <tr>
                                                      <td width="25%">Change Password</td>
                                                      <td width="75%">
                                                      <input
                                                        type="checkbox"
                                                        class="form-check-input"
                                                    /> Edit&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                      </td>
                                                    </tr>
                                                                <tr>
                                                      <td width="25%">Edit Administrator Permission</td>
                                                      <td width="75%">
                                                      <input
                                                        type="checkbox"
                                                        class="form-check-input"
                                                    /> Edit&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                      </td>
                                                    </tr>
                                                                <tr>
                                                      <td width="25%">Reset Password</td>
                                                      <td width="75%">
                                                      <input
                                                        type="checkbox"
                                                        class="form-check-input"
                                                    /> Edit&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                      </td>
                                                    </tr>
                                                      </tbody></table>
                                          <div class="spacer"></div>
                                          </div>
                      </div>
                  </div>
                        </div>
                    </div>
                </div>

@endsection
