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
                    <?php if(auth()->user()->isSuperadmin()): ?>
                    <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <?php if($page->module_id == $module->id): ?>
                      <li class="sa-nav__menu-item">
                        <a href="<?php echo e(route($page->link)); ?>" class="sa-nav__link"><span class="sa-nav__menu-item-padding"></span>
                        <span class="sa-nav__title"><?php echo e($page->name); ?></span></a>
                      </li>
                      <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                    <?php if(auth()->user()->isGeneralAdmin()): ?>
                        <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            
                            <?php if(is_object($page)): ?>
                                <?php $__currentLoopData = $page->userPages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $userPage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    
                                    <?php if(is_object($userPage) && $userPage->module_id == $module->id): ?>
                                        <li class="sa-nav__menu-item">
                                            <a href="<?php echo e(route($page->link)); ?>" class="sa-nav__link">
                                                <span class="sa-nav__menu-item-padding"></span>
                                                <span class="sa-nav__title"><?php echo e($page->name); ?></span>
                                            </a>
                                        </li>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                    </ul>
                  </li>
                  <?php if($module->id == '4'): ?>
                  <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <li class="sa-nav__menu-item sa-nav__menu-item--has-icon" data-sa-collapse-item="sa-nav__menu-item--open">
                    <a href="#" class="sa-nav__link" data-sa-collapse-trigger="">
                      <span class="sa-nav__icon">
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 16 16"fill="currentColor">
                        <path d="M0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0 .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1 0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0 13.5zM12 14c.37 0 .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5z"/>
                        <path d="M2 3h10v2H2zm0 3h4v3H2zm0 4h4v1H2zm0 2h4v1H2zm5-6h2v1H7zm3 0h2v1h-2zM7 8h2v1H7zm3 0h2v1h-2zm-3 2h2v1H7zm3 0h2v1h-2zm-3 2h2v1H7zm3 0h2v1h-2z"/>
                      </svg>
                      </span >
                      <span class="sa-nav__title"><?php echo e($category->name); ?> News</span>
                      <span class="sa-nav__arrow">
                        <svg xmlns="http://www.w3.org/2000/svg" width="6" height="9" viewBox="0 0 6 9" fill="currentColor" >
                          <path d="M5.605,0.213 C6.007,0.613 6.107,1.212 5.706,1.612 L2.696,4.511 L5.706,7.409 C6.107,7.809 6.107,8.509 5.605,8.808 C5.204,9.108 4.702,9.108 4.301,8.709 L-0.013,4.511 L4.401,0.313 C4.702,-0.087 5.304,-0.087 5.605,0.213 Z"></path>
                        </svg>
                      </span>
                    </a>
                    <ul class="sa-nav__menu sa-nav__menu--sub" data-sa-collapse-content="" >

                    <?php if(auth()->user()->isSuperadmin()): ?>
                    <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <?php if($page->module_id == $module->id): ?>
                      <li class="sa-nav__menu-item">
                        <a href="<?php echo e(route($page->link)); ?>?category=<?php echo e($category->link); ?>" class="sa-nav__link"><span class="sa-nav__menu-item-padding"></span>
                        <span class="sa-nav__title"><?php echo e($page->name); ?></span></a>
                      </li>
                      <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                    <?php if(auth()->user()->isGeneralAdmin()): ?>
                        <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            
                            <?php if(is_object($page)): ?>
                                <?php $__currentLoopData = $page->userPages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $userPage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    
                                    <?php if(is_object($userPage) && $userPage->module_id == $module->id): ?>
                                        <li class="sa-nav__menu-item">
                                            <a href="<?php echo e(route($page->link)); ?>" class="sa-nav__link">
                                                <span class="sa-nav__menu-item-padding"></span>
                                                <span class="sa-nav__title"><?php echo e($page->name); ?></span>
                                            </a>
                                        </li>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                    
                    </ul>
                  </li>

                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  <?php endif; ?>
                  
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  
                </ul>
              </li>
            </ul>
          </div>
        </div>
        <div class="sa-app__sidebar-shadow"></div>
        <div class="sa-app__sidebar-backdrop" data-sa-close-sidebar="">
        </div>
      </div><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/newsportal/resources/views/wbxadmin/sidebar.blade.php ENDPATH**/ ?>