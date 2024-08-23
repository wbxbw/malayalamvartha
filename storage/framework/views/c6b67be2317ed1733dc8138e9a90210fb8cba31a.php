<body class="g-sidenav-show   bg-gray-100">
      <div class="min-height-300 bg-primary position-absolute w-100"></div>
      <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
         <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href="#" target="_blank">
            <img src="<?php echo e(url('admin/assets/img/logo-ct-dark.png')); ?>" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-1 font-weight-bold">Qotz Application</span>
            </a>
         </div>
         <hr class="horizontal dark mt-0">
         <div class="collapse navbar-collapse  w-auto h-auto" id="sidenav-collapse-main">
            <ul class="navbar-nav">
              <li class="nav-item">
                  <a class="nav-link active" href="<?php echo e(route('wbxadmin')); ?>">
                    <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                        <i class="ni ni-shop text-primary text-sm opacity-10"></i>
                     </div>
                     <span class="nav-link-text ms-1">Dashboard</span>
                  </a>
               </li>
              <?php $__currentLoopData = $modules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="nav-item">
                  <a data-bs-toggle="collapse" href="#ecommerceExamples<?php echo e($module['id']); ?>" class="nav-link" aria-controls="ecommerceExamples<?php echo e($module['id']); ?>" role="button" aria-expanded="false">
                      <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                          <i class="<?php echo e($module['icon']); ?>"></i>
                      </div>
                      <span class="nav-link-text ms-1"><?php echo e($module['title']); ?></span>
                  </a>
                  <div class="collapse" id="ecommerceExamples<?php echo e($module['id']); ?>">
                      <ul class="nav ms-4">
                      <?php if(auth()->user()->isSuperadmin()): ?>
                        <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <?php if($page->module_id == $module->id): ?>
                          <!-- take initials -->
                          <?php
                            $pageName = $page->name;
                            $words = explode(' ', $pageName);
                            $initials = '';
                            foreach ($words as $word) {
                                if (!empty($word)) {
                                    $initials .= strtoupper(substr($word, 0, 1));
                                }
                            }
                          ?>
                          <!-- take initials -->
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route($page->link)); ?>">
                                    <span class="sidenav-mini-icon"> <?php echo e($initials); ?> </span>
                                    <span class="sidenav-normal"><?php echo e($page->name); ?></span>
                                </a>
                            </li>
                          <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      <?php endif; ?>

                      <?php if(auth()->user()->isGeneralAdmin()): ?>
                            <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if(is_object($page) && $page->module_id == $module->id): ?>
                                <?php
                                    $pageName = $page->name;
                                    $words = explode(' ', $pageName);
                                    $initials = '';
                                    foreach ($words as $word) {
                                        if (!empty($word)) {
                                            $initials .= strtoupper(substr($word, 0, 1));
                                        }
                                    }
                                ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route($page->link)); ?>">
                                        <span class="sidenav-mini-icon"> <?php echo e($initials); ?>  </span>
                                        <span class="sidenav-normal"><?php echo e($page->name); ?></span>
                                    </a>
                                </li>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                      </ul>
                    </div>
                </li>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
         </div>
      </aside><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/qotz/resources/views/wbxadmin/sidebar.blade.php ENDPATH**/ ?>