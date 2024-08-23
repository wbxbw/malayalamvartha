@extends('layout')
@section('title','Administrator Dashboard || E-commerce  Admin dashboard')
@section('content')
<div id="top" class="sa-app__body">
  <div class="mx-sm-2 px-2 px-sm-3 px-xxl-4 pb-6">
      <div class="container container--max--xl">
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
                                      >Home</a
                                  >
                              </li>
                              <li
                                  class="breadcrumb-item active"
                                  aria-current="page"
                              >
                                  Admin Dashboard
                              </li>
                          </ol>
                      </nav>
                      <h1 class="h3 m-0">Admin Dashboard</h1>
                  </div>
              </div>
          </div>
          <div class="row g-4">
              <div class="col-6 col-md-4 col-lg-3">
                  <div class="card text-center">
                      <a
                          href="{{ route('home.listadmin') }}"
                          class="text-reset p-5 text-decoration-none sa-hover-area"
                          ><div
                              class="fs-4 mb-4 text-muted opacity-50"
                          >
                                            <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="1em"
                          height="1em"
                          viewBox="0 0 16 16"
                          fill="currentColor"
                        >
                          <path
                            d="M8,6C4.7,6,2,4.7,2,3s2.7-3,6-3s6,1.3,6,3S11.3,6,8,6z M2,5L2,5L2,5C2,5,2,5,2,5z M8,8c3.3,0,6-1.3,6-3v3c0,1.7-2.7,3-6,3S2,9.7,2,8V5C2,6.7,4.7,8,8,8z M14,5L14,5C14,5,14,5,14,5L14,5z M2,10L2,10L2,10C2,10,2,10,2,10z M8,13c3.3,0,6-1.3,6-3v3c0,1.7-2.7,3-6,3s-6-1.3-6-3v-3C2,11.7,4.7,13,8,13z M14,10L14,10C14,10,14,10,14,10L14,10z"
                          ></path></svg>
                                  <path
                                      d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"
                                  ></path>
                                  <polyline
                                      points="3.27 6.96 12 12.01 20.73 6.96"
                                  ></polyline>
                                  <line
                                      x1="12"
                                      y1="22.08"
                                      x2="12"
                                      y2="12"
                                  ></line>
                              </svg>
                          </div>
                          <h2 class="fs-6 fw-medium mb-3">
                              Administrator
                          </h2>
                          <div class="text-muted fs-exact-14">
                              Mathematics began to develop at
                              an accelerating pace
                          </div></a
                      >
                  </div>
              </div>
              <div class="col-6 col-md-4 col-lg-3">
                  <div class="card text-center">
                      <a
                          href="{{ route('home.productlist') }}"
                          class="text-reset p-5 text-decoration-none sa-hover-area"
                          ><div
                              class="fs-4 mb-4 text-muted opacity-50"
                          >
                          <svg xmlns="http://www.w3.org/2000/svg"
                            width="1em" 
                            height="1em" 
                            fill="currentColor" 
                            class="bi bi-bag-fill" 
                            viewBox="0 0 16 16">
                          <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5
                          2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2
                            2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5z"/>
                        </svg>
                                  <rect
                                      x="1"
                                      y="3"
                                      width="15"
                                      height="13"
                                  ></rect>
                                  <polygon
                                      points="16 8 20 8 23 11 23 16 16 16 16 8"
                                  ></polygon>
                                  <circle
                                      cx="5.5"
                                      cy="18.5"
                                      r="2.5"
                                  ></circle>
                                  <circle
                                      cx="18.5"
                                      cy="18.5"
                                      r="2.5"
                                  ></circle>
                              </svg>
                          </div>
                          <h2 class="fs-6 fw-medium mb-3">
                              Product Management
                          </h2>
                          <div class="text-muted fs-exact-14">
                              The study of quantity starts
                              with numbers
                          </div></a
                      >
                  </div>
              </div>
              <div class="col-6 col-md-4 col-lg-3">
                  <div class="card text-center">
                      <a
                          href="{{ route('home.categorylist') }}"
                          class="text-reset p-5 text-decoration-none sa-hover-area"
                          ><div
                              class="fs-4 mb-4 text-muted opacity-50"
                          >
                          <svg xmlns="http://www.w3.org/2000/svg"
                            width="1em"
                            height="1em"
                              fill="currentColor"
                              class="bi bi-menu-down"
                                viewBox="0 0 16 16">
                                <path d="M7.646.146a.5.5 0 0 1 
                                .708 0L10.207 2H14a2 2 0 0 1 2 
                                2v9a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4a2 
                                2 0 0 1 2-2h3.793L7.646.146zM1 7v3h14V7H1zm14-1V4a1 1
                                0 0 0-1-1h-3.793a1 1 0 0 1-.707-.293L8 1.207l-1.5 1.5A1 1 0 0 1 5.793 3H2a1
                                  1 0 0 0-1 1v2h14zm0 5H1v2a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2zM2 4.5a.5.5 0 0
                                  1 .5-.5h8a.5.5 0 0 1 0 1h-8a.5.5 0 0 1-.5-.5zm0 4a.5.5 0 0 1 .5-.5h11a.5.5 0 
                                  0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0 4a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5z"/>
                              </svg>
                                  <rect
                                      x="1"
                                      y="4"
                                      width="22"
                                      height="16"
                                      rx="2"
                                      ry="2"
                                  ></rect>
                                  <line
                                      x1="1"
                                      y1="10"
                                      x2="23"
                                      y2="10"
                                  ></line>
                              </svg>
                          </div>
                          <h2 class="fs-6 fw-medium mb-3">
                              category Management
                          </h2>
                          <div class="text-muted fs-exact-14">
                              Mathematicians seek and use
                              patterns
                          </div></a
                      >
                  </div>
              </div>
              <div class="col-6 col-md-4 col-lg-3">
                  <div class="card text-center">
                      <a
                          href="{{ route('home.listcontent') }}"
                          class="text-reset p-5 text-decoration-none sa-hover-area"
                          ><div
                              class="fs-4 mb-4 text-muted opacity-50"
                          >
                          <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-journal-album" viewBox="0 0 16 16">
            <path d="M5.5 4a.5.5 0 0 0-.5.5v5a.5.5 0 0 0 .5.5h5a.5.5 0 0 0 .5-.5v-5a.5.5 0 0 0-.5-.5h-5zm1 7a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3z"/>
            <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
            <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
          </svg>
                                  <path
                                      d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"
                                  ></path>
                                  <circle
                                      cx="9"
                                      cy="7"
                                      r="4"
                                  ></circle>
                                  <path
                                      d="M23 21v-2a4 4 0 0 0-3-3.87"
                                  ></path>
                                  <path
                                      d="M16 3.13a4 4 0 0 1 0 7.75"
                                  ></path>
                              </svg>
                          </div>
                          <h2 class="fs-6 fw-medium mb-3">
                              content Management
                          </h2>
                          <div class="text-muted fs-exact-14">
                              Practical applications for what
                              began
                          </div></a
                      >
                  </div>
              </div>
              <div class="col-6 col-md-4 col-lg-3">
                  <div class="card text-center">
                      <a
                          href="{{ route('home.listblog') }}"
                          class="text-reset p-5 text-decoration-none sa-hover-area"
                          ><div
                              class="fs-4 mb-4 text-muted opacity-50"
                          >
                          <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-substack" viewBox="0 0 16 16">
          <path d="M15 3.604H1v1.891h14v-1.89ZM1 7.208V16l7-3.926L15 16V7.208H1ZM15 0H1v1.89h14V0Z"/>
        </svg>
                                  <path
                                      d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"
                                  ></path>
                                  <polyline
                                      points="22,6 12,13 2,6"
                                  ></polyline>
                              </svg>
                          </div>
                          <h2 class="fs-6 fw-medium mb-3">
                              Blog Management
                          </h2>
                          <div class="text-muted fs-exact-14">
                              As evidenced by tallies found on
                              bone
                          </div></a
                      >
                  </div>
              </div>
              <div class="col-6 col-md-4 col-lg-3">
                  <div class="card text-center">
                      <a
                          href="{{ route('home.listbrand') }}"
                          class="text-reset p-5 text-decoration-none sa-hover-area"
                          ><div
                              class="fs-4 mb-4 text-muted opacity-50"
                          >
                          <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-award-fill" viewBox="0 0 16 16">
          <path d="m8 0 1.669.864 1.858.282.842 1.68 1.337 1.32L13.4 6l.306 1.854-1.337 1.32-.842 1.68-1.858.282L8 12l-1.669-.864-1.858-.282-.842-1.68-1.337-1.32L2.6 6l-.306-1.854 1.337-1.32.842-1.68L6.331.864 8 0z"/>
          <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z"/>
        </svg>
                                  <line
                                      x1="12"
                                      y1="1"
                                      x2="12"
                                      y2="23"
                                  ></line>
                                  <path
                                      d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"
                                  ></path>
                              </svg>
                          </div>
                          <h2 class="fs-6 fw-medium mb-3">
                              Brand Management
                          </h2>
                          <div class="text-muted fs-exact-14">
                              Three leading types of
                              definition of mathematics today
                          </div></a
                      >
                  </div>
              </div>
              <div class="col-6 col-md-4 col-lg-3">
                  <div class="card text-center">
                      <a
                          href="{{ route('home.listadmin') }}"
                          class="text-reset p-5 text-decoration-none sa-hover-area"
                          ><div
                              class="fs-4 mb-4 text-muted opacity-50"
                          >
                          <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-basket-fill" viewBox="0 0 16 16">
        <path d="M5.071 1.243a.5.5 0 0 1 .858.514L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15.5a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H15v5a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V9H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 6h1.717L5.07 1.243zM3.5 10.5a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3z"/>
      </svg>
                                  <circle
                                      cx="12"
                                      cy="12"
                                      r="10"
                                  ></circle>
                                  <line
                                      x1="2"
                                      y1="12"
                                      x2="22"
                                      y2="12"
                                  ></line>
                                  <path
                                      d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"
                                  ></path>
                              </svg>
                          </div>
                          <h2 class="fs-6 fw-medium mb-3">
                              Buying Guid Management
                          </h2>
                          <div class="text-muted fs-exact-14">
                              An early definition of
                              mathematics in terms
                          </div></a
                      >
                  </div>
              </div>
              <div class="col-6 col-md-4 col-lg-3">
                  <div class="card text-center">
                      <a
                          href="{{ route('home.listadmin') }}"
                          class="text-reset p-5 text-decoration-none sa-hover-area"
                          ><div
                              class="fs-4 mb-4 text-muted opacity-50"
                          >
                          <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-info-square-fill" viewBox="0 0 16 16">
        <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm8.93 4.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
      </svg>
                                  <rect
                                      x="3"
                                      y="11"
                                      width="18"
                                      height="11"
                                      rx="2"
                                      ry="2"
                                  ></rect>
                                  <path
                                      d="M7 11V7a5 5 0 0 1 9.9-1"
                                  ></path>
                              </svg>
                          </div>
                          <h2 class="fs-6 fw-medium mb-3">
                              Informative Guid
                          </h2>
                          <div class="text-muted fs-exact-14">
                              Mathematics arises from many
                              different kinds of problems
                          </div></a
                      >
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
@endsection
