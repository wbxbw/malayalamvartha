<nav class="navbar navbar-expand-lg" style="background-color: #0d4f9d;padding:0;">
    <div class="container" style="display: list-item; list-style: none;">
      <div class="d-flex d-lg-none justify-content-between">
        <div class="d-flex">
          <a class="logo-link mt-3" href="index.html"><img src="assets/browire-sam-logo-1.png" alt="">
          </a>
          <a href="#" class="menu-link d-flex mt-4" onclick="openNav1()">
            <img class="menu-icon" src="./assets/align-left.png" alt="Menu Icon" />
            <span class="menu-text">Menu</span>
          </a>
        </div>

        <ul class="d-flex mt-2 ml-5 d-sm-none" style="list-style: none;">
          <li class="nav-item" style="font-size: 13px;">
            <i class="bi bi-heart-fill"></i>
          </li>
          <li class="nav-item " style="font-size: 13px;">
            <i class="bi bi-cart-fill"></i>
          </li>
          <!--  -->
          <li class="nav-item" style="font-size: 13px;">
            <i class="bi bi-person-fill"></i>
          </li>
        </ul>
        <!--Mobile Sidenav-->
        <div id="mySidenav1" class="sidenav">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav1()">&times;</a>
          <button class="dropdown-btn">Category
            <i class="bi bi-chevron-down"></i>
          </button>
          <div class="dropdown-container">
            <a href="<?php echo e(route('home.productlist')); ?>">Product Listing</a>
            <a href="product_detail.html">Product Details</a>
            <a href="comparison.html">Product Comparison</a>
            <a href="product_buying_detailed_guide.html">Product Buying Detailed Guide</a>
            <a href="product_buying_guide_listing.html">Product Buying Guide Listing</a>
            <a href="product_speciality.html">Product Speciality</a>
            <a href="search_results.html">Search Results</a>
            <a href="category.html">Category</a>
            <a href="category_listing.html">Category Listing</a>
            <a href="special_category.html">Special Category</a>
            <a href="faq.html">FAQ</a>
            <a href="customer_support_page.html">Customer Support</a>
            <a href="brand_listing.html">Brand Listing</a>
            <a href="brand_wise_listing_page.html">Brand Details Page</a>
            <a href="blog.html">Blog</a>
            <a href="general_content.html">General Content</a>
            <button class="dropdown-btn">Subcategory
              <i class="bi bi-chevron-down"></i>
            </button>
            <div class="dropdown-container">
              <a href="#">Link 1</a>
              <a href="#">Link 2</a>
              <button class="dropdown-btn">Subcategory list
                <i class="bi bi-chevron-down"></i>
              </button>
              <a href="#">Link 3</a>
            </div>
          </div>
          <a href="#">About</a>
          <a href="#">Services</a>
          <a href="#">Clients</a>
          <a href="#">Contact</a>
        </div>

      </div>
      <div class="col-sm-12 mx-1 mt-1 mb-2 d-sm-block d-lg-none">
        <div class="input-group mb-0">
          <span class="input-group-text"><i class="bi bi-search"></i></span>
          <input class="form-control search-text shadow-none" type="text" class="form-control"
            placeholder="Search your products">
          <span class="input-group-text"><i class="bi bi-funnel funnel-icon"></i></span>
        </div>
      </div>

      <!-- DEsktop Navbar -->
      <div class="navbar-collapse d-lg-flex" id="navbarSupportedContent">
        <div class="px-1">
          <ul class="navbar-nav mb-2 mb-lg-0">
            <!-- d-none d-sm-none d-md-none d-lg-block -->
            <li class="nav-item">
              <a class="navbar logo-link" href="index.html"><img src="assets/browire-sam-logo-1.png" alt="">
              </a>
            </li>

            <li class="nav-item  ">
              <div class="dropdown mt-4">
                <!--Desktop Sidenav-->
                <a href="#" class="menu-link d-flex" onclick="openNav()" style="padding-right: 0;">
                  <img class="menu-icon" src="./assets/align-left.png" alt="Menu Icon" />
                  <span class="menu-text">Menu</span>
                </a>
                <div id="mySidenav" class="sidenav">
                  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                  <button class="dropdown-btn"> <i class="bi bi-shield-fill mx-2"></i>Exclusive

                  </button>
                  <hr>
                  <button class="dropdown-btn"> <i class="bi bi-trophy-fill mx-2"></i>Top Brand

                  </button>
                  <hr>
                  <button class="dropdown-btn"> <i class="bi bi-shop mx-2"></i>Store Locator

                  </button>
                  <hr>
                  <button class="dropdown-btn"> <i class="bi bi-tag-fill mx-2"></i>Category
                    <i class="bi bi-chevron-down"></i>
                  </button>
                  <div class="dropdown-container">
                    <a href="<?php echo e(route('home.productlist')); ?>">Product Listing</a>
                    <a href="product_detail.html">Product Details</a>
                    <a href="comparison.html">Product Comparison</a>
                    <a href="product_buying_detailed_guide.html">Product Buying Detailed Guide</a>
                    <a href="product_buying_guide_listing.html">Product Buying Guide Listing</a>
                    <a href="product_speciality.html">Product Speciality</a>
                    <a href="search_results.html">Search Results</a>
                    <a href="category.html">Category</a>
                    <a href="category_listing.html">Category Listing</a>
                    <a href="special_category.html">Special Category</a>
                    <a href="faq.html">FAQ</a>
                    <a href="customer_support_page.html">Customer Support</a>
                    <a href="brand_listing.html">Brand Listing</a>
                    <a href="brand_wise_listing_page.html">Brand Details Page</a>
                    <a href="blog.html">Blog</a>
                    <a href="general_content.html">General Content</a>
                    <button class="dropdown-btn">Subcategory
                      <i class="bi bi-chevron-down"></i>
                    </button>
                    <div class="dropdown-container">
                      <a href="#">Link 1</a>
                      <a href="#">Link 2</a>
                      <button class="dropdown-btn">Subcategory list
                        <i class="bi bi-chevron-down"></i>
                      </button>
                      <a href="#">Link 3</a>
                    </div>
                  </div>
                  <a href="#"> <i class="bi bi-info-lg mx-2"></i></i>About</a>
                  <a href="#"> <i class="bi bi-tag-fill mx-2"></i>Services</a>
                  <a href="#"> <i class="bi bi-collection-fill mx-2"></i>Clients</a>
                  <a href="#"><i class="bi bi-person-fill mx-2"></i>Contact</a>
                </div>
              </div>
            </li>
          </ul>
        </div>

        <div class="col-lg-5 col-xl-6 mx-5">
          <div class="input-group mb-0">
            <span class="input-group-text"><i class="bi bi-search"></i></span>
            <input class="form-control search-text shadow-none" type="text" class="form-control"
              placeholder="Search your products">
            <span class="input-group-text"><i class="bi bi-funnel funnel-icon"></i></span>
          </div>
        </div>
        <div class="col-md-4">
          <ul class="navbar-nav ml-auto">
            <!-- d-none d-sm-none d-md-none d-lg-block  -->
            <li class="nav-item dropdown pr-15px text-start" style="display: block;padding-right: 5px;">
              <div class="geo-padding">
                <i class="bi bi-geo-alt" style="font-size: 18px;"></i>
              </div>
              <!-- <p class="username pl-5">Hi Alex!</p> -->
              <a class="nav-link dropdown-toggle username " href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                <div class="dropdown-a">
                  Ernakulam, Kerala<i class="bi bi-chevron-down px-2" style="color:#B3B3B3;"></i>
                </div>

              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
            <li class="nav-item" style="font-size: 16px;padding-top: 7px;">
              <i class="bi bi-heart-fill"></i>
            </li>
            <li class="nav-item " style="font-size: 15px;padding-top: 7px;">
              <i class="bi bi-cart-fill"></i>
            </li>
            <!--  -->
            <li class="nav-item" style="font-size: 18px;padding-top: 5px;">
              <i class="bi bi-person-fill"></i>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
<?php /**PATH C:\Users\saswa\Downloads\ecommerceadmin\ecommerceadmin\resources\views/header.blade.php ENDPATH**/ ?>