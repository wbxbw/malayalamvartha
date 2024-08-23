<main class="main-content position-relative border-radius-lg ">
         <nav class="navbar navbar-main navbar-expand-lg  px-0 mx-4 shadow-none border-radius-xl z-index-sticky " id="navbarBlur" data-scroll="false">
            <div class="container-fluid py-1 px-3">
               
               <div class="sidenav-toggler sidenav-toggler-inner d-xl-block d-none ">
                  <a href="javascript:;" class="nav-link p-0">
                     <div class="sidenav-toggler-inner">
                        <i class="sidenav-toggler-line bg-white"></i>
                        <i class="sidenav-toggler-line bg-white"></i>
                        <i class="sidenav-toggler-line bg-white"></i>
                     </div>
                  </a>
               </div>
               <nav aria-label="breadcrumb">
                  <ol class="breadcrumb bg-transparent mb-0 me-sm-6 me-5">
                     <li class="breadcrumb-item text-sm">
                        <a class="text-white" href="javascript:;">
                        <i class="ni ni-box-2"></i>
                        </a>
                     </li>
                     <li class="breadcrumb-item text-sm text-white"><a class="opacity-5 text-white" href="javascript:;">Home</a></li>
                     <?php if($moduleDetails): ?>
                     <li class="breadcrumb-item text-sm text-white active" aria-current="page"><?php echo e($moduleDetails->name); ?></li>
                     <?php endif; ?>
                     <li class="breadcrumb-item text-sm text-white active" aria-current="page"><?php echo e($pageDetails->name); ?></li>
                  </ol>
               </nav>
               <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                  <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                     
                  </div>
                  <ul class="navbar-nav  justify-content-end">
                     
                     <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                           <div class="sidenav-toggler-inner">
                              <i class="sidenav-toggler-line bg-white"></i>
                              <i class="sidenav-toggler-line bg-white"></i>
                              <i class="sidenav-toggler-line bg-white"></i>
                           </div>
                        </a>
                     </li>
                    <li class="nav-item px-3 d-flex align-items-center">
                      <!-- <h6 class="mb-0">Light / Dark</h6> -->
                      <div class="form-check form-switch ps-0 ms-auto my-auto">
                          <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
                      </div>
                     </li>
                     <li class="nav-item px-3 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-white p-0">
                        <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
                        </a>
                     </li>
                     <li class="nav-item dropdown pe-2 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-white p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-bell cursor-pointer"></i>
                        </a>
                        
                     </li>
                     <li class="nav-item d-flex align-items-center">
                      <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="nav-link text-white font-weight-bold px-0" target="_blank">
                        <i class="fa fa-user me-sm-1" aria-hidden="true"></i>
                        <span class="d-sm-inline d-none">Log Out</span>
                        </a>
                     </li>
                  </ul>
               </div>
            </div>
         </nav>
         <form id="logout-form" action="<?php echo e(route('wbxadmin.logout')); ?>" method="POST" class="d-none">
        <?php echo csrf_field(); ?>
        </form>
         <div class="container-fluid py-4">
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/qotz/resources/views/wbxadmin/header.blade.php ENDPATH**/ ?>