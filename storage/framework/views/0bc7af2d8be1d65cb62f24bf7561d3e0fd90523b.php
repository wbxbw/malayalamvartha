<body>
<div
class="sa-app sa-app--desktop-sidebar-shown sa-app--mobile-sidebar-hidden sa-app--toolbar-fixed">
<div class="sa-app__sidebar">
        <div class="sa-sidebar">
          <div class="sa-sidebar__header">
            <a class="sa-sidebar__logo" href="index.html">
              <div class="sa-sidebar-logo">
                <img src="<?php echo e(url('admin/images/logo.png')); ?>" width="150px" alt="WBX Admin Logo">
              </div>
            </a>
          </div>
          <div class="sa-sidebar__body" data-simplebar="">
            <ul class="sa-nav sa-nav--sidebar" data-sa-collapse="">
              <li class="sa-nav__section">
                <div class="sa-nav__section-title">
                  <span>Application</span>
                </div>
                <ul class="sa-nav__menu sa-nav__menu--root">
                  <li class="sa-nav__menu-item sa-nav__menu-item--has-icon">
                    <a href="<?php echo e(route('wbxadmin')); ?>" class="sa-nav__link"
                      ><span class="sa-nav__icon"
                        ><svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="1em"
                          height="1em"
                          viewBox="0 0 16 16"
                          fill="currentColor"
                        >
                          <path
                            d="M8,13.1c-4.4,0-8,3.4-8-3C0,5.6,3.6,2,8,2s8,3.6,8,8.1C16,16.5,12.4,13.1,8,13.1zM8,4c-3.3,0-6,2.7-6,6c0,4,2.4,0.9,5,0.2C7,9.9,7.1,9.5,7.4,9.2l3-2.3c0.4-0.3,1-0.2,1.3,0.3c0.3,0.5,0.2,1.1-0.2,1.4l-2.2,1.7c2.5,0.9,4.8,3.6,4.8-0.2C14,6.7,11.3,4,8,4z"
                          ></path></svg></span
                      ><span class="sa-nav__title">Dashboard</span></a
                    >
                  </li>


                  <?php $__currentLoopData = $modules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <li class="sa-nav__menu-item sa-nav__menu-item--has-icon" data-sa-collapse-item="sa-nav__menu-item--open">
                    <a href="#" class="sa-nav__link" data-sa-collapse-trigger="">
                      <span class="sa-nav__icon">
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 16 16"fill="currentColor">
                        <path d="<?php echo e($module['icon']); ?>" ></path>
                      </svg>
                      </span >
                      <span class="sa-nav__title"><?php echo e($module['title']); ?></span>
                      <span class="sa-nav__arrow">
                        <svg xmlns="http://www.w3.org/2000/svg" width="6" height="9" viewBox="0 0 6 9" fill="currentColor" >
                          <path d="M5.605,0.213 C6.007,0.613 6.107,1.212 5.706,1.612 L2.696,4.511 L5.706,7.409 C6.107,7.809 6.107,8.509 5.605,8.808 C5.204,9.108 4.702,9.108 4.301,8.709 L-0.013,4.511 L4.401,0.313 C4.702,-0.087 5.304,-0.087 5.605,0.213 Z"></path>
                        </svg>
                      </span>
                    </a>
                    <ul class="sa-nav__menu sa-nav__menu--sub" data-sa-collapse-content="" >
                    <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <?php if($page->module_id == $module->id): ?>
                      <li class="sa-nav__menu-item">
                        <a href="<?php echo e(route($page->link)); ?>" class="sa-nav__link"><span class="sa-nav__menu-item-padding"></span>
                        <span class="sa-nav__title"><?php echo e($page->name); ?></span></a>
                      </li>
                      <?php endif; ?>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                  </li>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  <!-- <li class="sa-nav__menu-item sa-nav__menu-item--has-icon sa-nav__menu-item--open" data-sa-collapse-item="sa-nav__menu-item--open">
                    <a href="#" class="sa-nav__link" data-sa-collapse-trigger="">
                      <span class="sa-nav__icon">
                        <svg class="svg-inline--fa fa-bars fa-w-14" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bars" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                          <path fill="currentColor" d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"></path>
                        </svg>
                      </span>
                      <span class="sa-nav__title">Menu Level 0</span>
                      <span class="sa-nav__arrow">
                        <svg xmlns="http://www.w3.org/2000/svg" width="6" height="9" viewBox="0 0 6 9" fill="currentColor">
                          <path d="M5.605,0.213 C6.007,0.613 6.107,1.212 5.706,1.612 L2.696,4.511 L5.706,7.409 C6.107,7.809 6.107,8.509 5.605,8.808 C5.204,9.108 4.702,9.108 4.301,8.709 L-0.013,4.511 L4.401,0.313 C4.702,-0.087 5.304,-0.087 5.605,0.213 Z"></path>
                        </svg>
                      </span>
                    </a>
                    <ul class="sa-nav__menu sa-nav__menu--sub" data-sa-collapse-content="" style="">
                      <li class="sa-nav__menu-item sa-nav__menu-item--open" data-sa-collapse-item="sa-nav__menu-item--open">
                        <a href="#" class="sa-nav__link" data-sa-collapse-trigger="">
                          <span class="sa-nav__menu-item-padding"></span>
                          <span class="sa-nav__title">Menu Level 1</span>
                          <span class="sa-nav__arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" width="6" height="9" viewBox="0 0 6 9" fill="currentColor">
                              <path d="M5.605,0.213 C6.007,0.613 6.107,1.212 5.706,1.612 L2.696,4.511 L5.706,7.409 C6.107,7.809 6.107,8.509 5.605,8.808 C5.204,9.108 4.702,9.108 4.301,8.709 L-0.013,4.511 L4.401,0.313 C4.702,-0.087 5.304,-0.087 5.605,0.213 Z"></path>
                            </svg>
                          </span>
                        </a>
                        <ul class="sa-nav__menu sa-nav__menu--sub" data-sa-collapse-content="" style="">
                          <li class="sa-nav__menu-item" data-sa-collapse-item="sa-nav__menu-item--open">
                            <a href="#" class="sa-nav__link" data-sa-collapse-trigger="">
                              <span class="sa-nav__menu-item-padding"></span>
                              <span class="sa-nav__menu-item-padding"></span>
                              <span class="sa-nav__title">Menu Level 2</span>
                              <span class="sa-nav__arrow">
                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="9" viewBox="0 0 6 9" fill="currentColor">
                                  <path d="M5.605,0.213 C6.007,0.613 6.107,1.212 5.706,1.612 L2.696,4.511 L5.706,7.409 C6.107,7.809 6.107,8.509 5.605,8.808 C5.204,9.108 4.702,9.108 4.301,8.709 L-0.013,4.511 L4.401,0.313 C4.702,-0.087 5.304,-0.087 5.605,0.213 Z"></path>
                                </svg>
                              </span>
                            </a>
                            <ul class="sa-nav__menu sa-nav__menu--sub" data-sa-collapse-content="" style="">
                              <li class="sa-nav__menu-item">
                                <a href="#" class="sa-nav__link">
                                  <span class="sa-nav__menu-item-padding"></span>
                                  <span class="sa-nav__menu-item-padding"></span>
                                  <span class="sa-nav__menu-item-padding"></span>
                                  <span class="sa-nav__title">Menu Level 3</span>
                                </a>
                              </li>
                            </ul>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li> -->




                  <!-- <li
                    class="sa-nav__menu-item sa-nav__menu-item--has-icon"
                    data-sa-collapse-item="sa-nav__menu-item--open"
                  >
                    <a href="#" class="sa-nav__link" data-sa-collapse-trigger=""
                      ><span class="sa-nav__icon"
                        ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-fill" viewBox="0 0 16 16">
                          <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5z"/>
                        </svg></span
                      ><span class="sa-nav__title">Product management</span
                      ><span class="sa-nav__arrow"
                        ><svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="6"
                          height="9"
                          viewBox="0 0 6 9"
                          fill="currentColor"
                        >
                          <path
                            d="M5.605,0.213 C6.007,0.613 6.107,1.212 5.706,1.612 L2.696,4.511 L5.706,7.409 C6.107,7.809 6.107,8.509 5.605,8.808 C5.204,9.108 4.702,9.108 4.301,8.709 L-0.013,4.511 L4.401,0.313 C4.702,-0.087 5.304,-0.087 5.605,0.213 Z"
                          ></path></svg></span
                    ></a>
                    <ul
                      class="sa-nav__menu sa-nav__menu--sub"
                      data-sa-collapse-content=""
                    >
                      <li class="sa-nav__menu-item">
                        <a href="<?php echo e(route('home.productlist')); ?>" class="sa-nav__link"
                          ><span class="sa-nav__menu-item-padding"></span
                          ><span class="sa-nav__title">Products List</span></a
                        >
                      </li>
                      <li class="sa-nav__menu-item">
                        <a href="<?php echo e(route('home.addproduct')); ?>" class="sa-nav__link"
                          ><span class="sa-nav__menu-item-padding"></span
                          ><span class="sa-nav__title">Add Product</span></a
                        >
                      </li>
                      <li class="sa-nav__menu-item">
                        <a href="<?php echo e(route('home.editproduct')); ?>" class="sa-nav__link"
                          ><span class="sa-nav__menu-item-padding"></span
                          ><span class="sa-nav__title">Edit Product</span></a
                        >
                      </li>
                    </ul>
                  </li>


                  
                  <li
                    class="sa-nav__menu-item sa-nav__menu-item--has-icon"
                    data-sa-collapse-item="sa-nav__menu-item--open"
                  >
                    <a href="#" class="sa-nav__link" data-sa-collapse-trigger=""
                      ><span class="sa-nav__icon"
                        ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-menu-down" viewBox="0 0 16 16">
                            <path d="M7.646.146a.5.5 0 0 1 .708 0L10.207 2H14a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h3.793L7.646.146zM1 7v3h14V7H1zm14-1V4a1 1 0 0 0-1-1h-3.793a1 1 0 0 1-.707-.293L8 1.207l-1.5 1.5A1 1 0 0 1 5.793 3H2a1 1 0 0 0-1 1v2h14zm0 5H1v2a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2zM2 4.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 0 1h-8a.5.5 0 0 1-.5-.5zm0 4a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0 4a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5z"/>
                          </svg></span
                      ><span class="sa-nav__title">Category Management</span
                      ><span class="sa-nav__arrow"
                        ><svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="6"
                          height="9"
                          viewBox="0 0 6 9"
                          fill="currentColor"
                        >
                          <path
                            d="M5.605,0.213 C6.007,0.613 6.107,1.212 5.706,1.612 L2.696,4.511 L5.706,7.409 C6.107,7.809 6.107,8.509 5.605,8.808 C5.204,9.108 4.702,9.108 4.301,8.709 L-0.013,4.511 L4.401,0.313 C4.702,-0.087 5.304,-0.087 5.605,0.213 Z"
                          ></path></svg></span
                    ></a>
                    <ul
                      class="sa-nav__menu sa-nav__menu--sub"
                      data-sa-collapse-content=""
                    >
                      <li class="sa-nav__menu-item">
                        <a href="<?php echo e(route('home.categorylist')); ?>" class="sa-nav__link"
                          ><span class="sa-nav__menu-item-padding"></span
                          ><span class="sa-nav__title">List Catogeries</span></a
                        >
                      </li>
                      <li class="sa-nav__menu-item">
                        <a href="<?php echo e(route('home.addcategory')); ?>" class="sa-nav__link"
                          ><span class="sa-nav__menu-item-padding"></span
                          ><span class="sa-nav__title">Add Catogery</span></a
                        >
                      </li>
                      <li class="sa-nav__menu-item">
                        <a href="<?php echo e(route('home.editcategory')); ?>" class="sa-nav__link"
                          ><span class="sa-nav__menu-item-padding"></span
                          ><span class="sa-nav__title">Edit Catogery</span></a
                        >
                      </li>
                    </ul>
                  </li>


                  <li
                    class="sa-nav__menu-item sa-nav__menu-item--has-icon"
                    data-sa-collapse-item="sa-nav__menu-item--open"
                  >
                    <a href="#" class="sa-nav__link" data-sa-collapse-trigger=""
                      ><span class="sa-nav__icon"
                        ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-journal-album" viewBox="0 0 16 16">
                              <path d="M5.5 4a.5.5 0 0 0-.5.5v5a.5.5 0 0 0 .5.5h5a.5.5 0 0 0 .5-.5v-5a.5.5 0 0 0-.5-.5h-5zm1 7a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3z"/>
                              <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                              <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
                            </svg></span
                      ><span class="sa-nav__title">Content management</span
                      ><span class="sa-nav__arrow"
                        ><svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="6"
                          height="9"
                          viewBox="0 0 6 9"
                          fill="currentColor"
                        >
                          <path
                            d="M5.605,0.213 C6.007,0.613 6.107,1.212 5.706,1.612 L2.696,4.511 L5.706,7.409 C6.107,7.809 6.107,8.509 5.605,8.808 C5.204,9.108 4.702,9.108 4.301,8.709 L-0.013,4.511 L4.401,0.313 C4.702,-0.087 5.304,-0.087 5.605,0.213 Z"
                          ></path></svg></span
                    ></a>
                    <ul
                      class="sa-nav__menu sa-nav__menu--sub"
                      data-sa-collapse-content=""
                    >
                      <li class="sa-nav__menu-item">
                        <a href="<?php echo e(route('home.listcontent')); ?>" class="sa-nav__link"
                          ><span class="sa-nav__menu-item-padding"></span
                          ><span class="sa-nav__title">List Content</span></a
                        >
                      </li>
                      <li class="sa-nav__menu-item">
                        <a href="<?php echo e(route('home.editcontent')); ?>" class="sa-nav__link"
                          ><span class="sa-nav__menu-item-padding"></span
                          ><span class="sa-nav__title">Edit Content</span></a
                        >
                      </li>
                      <li class="sa-nav__menu-item">
                        <a href="<?php echo e(route('home.addcontent')); ?>" class="sa-nav__link"
                          ><span class="sa-nav__menu-item-padding"></span
                          ><span class="sa-nav__title">Add Content</span></a
                        >
                      </li>
                    </ul>
                  </li>

                  <li
                    class="sa-nav__menu-item sa-nav__menu-item--has-icon"
                    data-sa-collapse-item="sa-nav__menu-item--open"
                  >
                    <a href="#" class="sa-nav__link" data-sa-collapse-trigger=""
                      ><span class="sa-nav__icon"
                        ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-substack" viewBox="0 0 16 16">
                            <path d="M15 3.604H1v1.891h14v-1.89ZM1 7.208V16l7-3.926L15 16V7.208H1ZM15 0H1v1.89h14V0Z"/>
                          </svg></span
                      ><span class="sa-nav__title">Blog management</span
                      ><span class="sa-nav__arrow"
                        ><svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="6"
                          height="9"
                          viewBox="0 0 6 9"
                          fill="currentColor"
                        >
                          <path
                            d="M5.605,0.213 C6.007,0.613 6.107,1.212 5.706,1.612 L2.696,4.511 L5.706,7.409 C6.107,7.809 6.107,8.509 5.605,8.808 C5.204,9.108 4.702,9.108 4.301,8.709 L-0.013,4.511 L4.401,0.313 C4.702,-0.087 5.304,-0.087 5.605,0.213 Z"
                          ></path></svg></span
                    ></a>
                    <ul
                      class="sa-nav__menu sa-nav__menu--sub"
                      data-sa-collapse-content=""
                    >
                      <li class="sa-nav__menu-item">
                        <a href="<?php echo e(route('home.listblog')); ?>" class="sa-nav__link"
                          ><span class="sa-nav__menu-item-padding"></span
                          ><span class="sa-nav__title">List Blog</span></a
                        >
                      </li>
                      <li class="sa-nav__menu-item">
                        <a href="<?php echo e(route('home.editblog')); ?>" class="sa-nav__link"
                          ><span class="sa-nav__menu-item-padding"></span
                          ><span class="sa-nav__title">Edit Blog</span></a
                        >
                      </li>
                      <li class="sa-nav__menu-item">
                        <a href="<?php echo e(route('home.addblog')); ?>" class="sa-nav__link"
                          ><span class="sa-nav__menu-item-padding"></span
                          ><span class="sa-nav__title">Add Blog</span></a
                        >
                      </li>
                    </ul>
                  </li>

                  <li
                    class="sa-nav__menu-item sa-nav__menu-item--has-icon"
                    data-sa-collapse-item="sa-nav__menu-item--open"
                  >
                    <a href="#" class="sa-nav__link" data-sa-collapse-trigger=""
                      ><span class="sa-nav__icon"
                        ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-award-fill" viewBox="0 0 16 16">
                            <path d="m8 0 1.669.864 1.858.282.842 1.68 1.337 1.32L13.4 6l.306 1.854-1.337 1.32-.842 1.68-1.858.282L8 12l-1.669-.864-1.858-.282-.842-1.68-1.337-1.32L2.6 6l-.306-1.854 1.337-1.32.842-1.68L6.331.864 8 0z"/>
                            <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z"/>
                          </svg></span
                      ><span class="sa-nav__title">Brand management</span
                      ><span class="sa-nav__arrow"
                        ><svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="6"
                          height="9"
                          viewBox="0 0 6 9"
                          fill="currentColor"
                        >
                          <path
                            d="M5.605,0.213 C6.007,0.613 6.107,1.212 5.706,1.612 L2.696,4.511 L5.706,7.409 C6.107,7.809 6.107,8.509 5.605,8.808 C5.204,9.108 4.702,9.108 4.301,8.709 L-0.013,4.511 L4.401,0.313 C4.702,-0.087 5.304,-0.087 5.605,0.213 Z"
                          ></path></svg></span
                    ></a>
                    <ul
                      class="sa-nav__menu sa-nav__menu--sub"
                      data-sa-collapse-content=""
                    >
                      <li class="sa-nav__menu-item">
                        <a href="<?php echo e(route('home.listbrand')); ?>" class="sa-nav__link"
                          ><span class="sa-nav__menu-item-padding"></span
                          ><span class="sa-nav__title">List Brand</span></a
                        >
                      </li>
                      <li class="sa-nav__menu-item">
                        <a href="<?php echo e(route('home.editbrand')); ?>" class="sa-nav__link"
                          ><span class="sa-nav__menu-item-padding"></span
                          ><span class="sa-nav__title">Edit Brand</span></a
                        >
                      </li>
                      <li class="sa-nav__menu-item">
                        <a href="<?php echo e(route('home.addbrand')); ?>" class="sa-nav__link"
                          ><span class="sa-nav__menu-item-padding"></span
                          ><span class="sa-nav__title">Add Brand</span></a
                        >
                      </li>
                    </ul>
                  </li>
                  <li
                class="sa-nav__menu-item sa-nav__menu-item--has-icon"
                data-sa-collapse-item="sa-nav__menu-item--open"
              >
                <a href="#" class="sa-nav__link" data-sa-collapse-trigger=""
                  ><span class="sa-nav__icon"
                    ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-basket-fill" viewBox="0 0 16 16">
                      <path d="M5.071 1.243a.5.5 0 0 1 .858.514L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15.5a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H15v5a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V9H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 6h1.717L5.07 1.243zM3.5 10.5a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3z"/>
                    </svg></span
                  ><span class="sa-nav__title">BG Management</span
                  ><span class="sa-nav__arrow"
                    ><svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="6"
                      height="9"
                      viewBox="0 0 6 9"
                      fill="currentColor"
                    >
                      <path
                        d="M5.605,0.213 C6.007,0.613 6.107,1.212 5.706,1.612 L2.696,4.511 L5.706,7.409 C6.107,7.809 6.107,8.509 5.605,8.808 C5.204,9.108 4.702,9.108 4.301,8.709 L-0.013,4.511 L4.401,0.313 C4.702,-0.087 5.304,-0.087 5.605,0.213 Z"
                      ></path></svg></span
                ></a>
                <ul
                  class="sa-nav__menu sa-nav__menu--sub"
                  data-sa-collapse-content=""
                >
                  <li class="sa-nav__menu-item">
                    <a href="<?php echo e(route('home.productlist')); ?>" class="sa-nav__link"
                      ><span class="sa-nav__menu-item-padding"></span
                      ><span class="sa-nav__title">Products List</span></a
                    >
                  </li>
                  <li class="sa-nav__menu-item">
                    <a href="<?php echo e(route('home.addproduct')); ?>" class="sa-nav__link"
                      ><span class="sa-nav__menu-item-padding"></span
                      ><span class="sa-nav__title">Add Product</span></a
                    >
                  </li>
                  <li class="sa-nav__menu-item">
                    <a href="<?php echo e(route('home.editproduct')); ?>" class="sa-nav__link"
                      ><span class="sa-nav__menu-item-padding"></span
                      ><span class="sa-nav__title">Edit Product</span></a
                    >
                  </li>
                </ul>
              </li> -->
                </ul>
              </li>
              <!---------------- Pages -------------->
              <li class="sa-nav__section">
                <div class="sa-nav__section-title"><span>Pages</span></div>
                <ul class="sa-nav__menu sa-nav__menu--root">
                  <li
                    class="sa-nav__menu-item sa-nav__menu-item--has-icon"
                    data-sa-collapse-item="sa-nav__menu-item--open"
                  >
                    <a href="#" class="sa-nav__link" data-sa-collapse-trigger=""
                      ><span class="sa-nav__icon"
                        ><i class="fas fa-lock"></i></span
                      ><span class="sa-nav__title">Authentication</span
                      ><span class="sa-nav__arrow"
                        ><svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="6"
                          height="9"
                          viewBox="0 0 6 9"
                          fill="currentColor"
                        >
                          <path
                            d="M5.605,0.213 C6.007,0.613 6.107,1.212 5.706,1.612 L2.696,4.511 L5.706,7.409 C6.107,7.809 6.107,8.509 5.605,8.808 C5.204,9.108 4.702,9.108 4.301,8.709 L-0.013,4.511 L4.401,0.313 C4.702,-0.087 5.304,-0.087 5.605,0.213 Z"
                          ></path></svg></span
                    ></a>
                    <ul
                      class="sa-nav__menu sa-nav__menu--sub"
                      data-sa-collapse-content=""
                    >
                      <li class="sa-nav__menu-item">
                        <a href="auth-sign-in.html" class="sa-nav__link"
                          ><span class="sa-nav__menu-item-padding"></span
                          ><span class="sa-nav__title">Sign In</span></a
                        >
                      </li>
                      <li class="sa-nav__menu-item">
                        <a href="auth-sign-up.html" class="sa-nav__link"
                          ><span class="sa-nav__menu-item-padding"></span
                          ><span class="sa-nav__title">Sign Up</span></a
                        >
                      </li>
                      <li class="sa-nav__menu-item">
                        <a href="auth-forgot-password.html" class="sa-nav__link"
                          ><span class="sa-nav__menu-item-padding"></span
                          ><span class="sa-nav__title">Forgot Password</span></a
                        >
                      </li>
                      <li class="sa-nav__menu-item">
                        <a href="auth-reset-password.html" class="sa-nav__link"
                          ><span class="sa-nav__menu-item-padding"></span
                          ><span class="sa-nav__title">Reset Password</span></a
                        >
                      </li>
                      <li class="sa-nav__menu-item">
                        <a
                          href="auth-email-confirmation.html"
                          class="sa-nav__link"
                          ><span class="sa-nav__menu-item-padding"></span
                          ><span class="sa-nav__title">Verify Account</span></a
                        >
                      </li>
                    </ul>
                  </li>
                  <li class="sa-nav__menu-item sa-nav__menu-item--has-icon">
                    <a href="page-invoice.html" class="sa-nav__link"
                      ><span class="sa-nav__icon"
                        ><i class="fas fa-file-alt"></i></span
                      ><span class="sa-nav__title">Invoice</span></a
                    >
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
        <div class="sa-app__sidebar-shadow"></div>
        <div class="sa-app__sidebar-backdrop" data-sa-close-sidebar="">
        </div>
      </div><?php /**PATH C:\Users\saswa\Downloads\ecommerceadmin\ecommerceadmin\resources\views/wbxadmin/sidebar.blade.php ENDPATH**/ ?>