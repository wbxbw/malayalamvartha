<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="apple-touch-icon" sizes="76x76" href="<?php echo e(url('admin/assets/img/apple-icon.png')); ?>">
      <link rel="icon" type="image/png" href="<?php echo e(url('admin/assets/img/favicon.png')); ?>">
      <title>Qotz Online Login Page</title>
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
      <link href="<?php echo e(url('admin/assets/css/nucleo-icons.css')); ?>" rel="stylesheet" />
      <link href="<?php echo e(url('admin/assets/css/nucleo-svg.css')); ?>" rel="stylesheet" />
      <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
      <link href="<?php echo e(url('admin/assets/css/nucleo-svg.css')); ?>" rel="stylesheet" />
      <link id="pagestyle" href="<?php echo e(url('admin/assets/css/argon-dashboard.min.css?v=2.0.5')); ?>" rel="stylesheet" />
      <style>
         .async-hide {
         opacity: 0 !important
         }
      </style>
      
   </head>
   <body class>
      <main class="main-content  mt-0">
         <section>
            <div class="page-header min-vh-100">
               <div class="container">
                  <div class="row">
                     <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
                        <div class="card card-plain">
                           <div style="display: flex; justify-content: center;">
                              <img src="<?php echo e(url('admin/assets/img/logo-ct-dark.png')); ?>" style="width:100px; margin: auto;" class="navbar-brand-img h-100" alt="main_logo">
                              </div>
                           <div class="card-header pb-0 text-start">
                              <h4 class="font-weight-bolder">Sign In</h4>
                              <p class="mb-0">Enter your email and password to sign in</p>
                           </div>
                           <div class="card-body">
                              <form method="POST" action="<?php echo e(route('admin.login')); ?>">
                              <?php echo csrf_field(); ?>
                                 <div class="mb-3">
                                    <input type="email" name="email" class="form-control form-control-lg" placeholder="Email" aria-label="Email">
                                 </div>
                                 <div class="mb-3">
                                    <input type="password" name="password" class="form-control form-control-lg" placeholder="OTP" aria-label="Password">
                                 </div>
                                 <div class="text-center">
                                    <button type="submit" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">Sign in</button>
                                 </div>
                              </form>
                           </div>
                           <div class="card-footer text-center pt-0 px-lg-2 px-1">
                              <p class="mb-4 text-sm mx-auto">Invalid OTP</p>
                              <p class="mb-4 text-sm mx-auto">OTP expired!</p>
                              <p class="mb-4 text-sm mx-auto">User is not recognized as an Admin</p>
                           </div>
                        </div>
                     </div>
                     <!-- <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
                        <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden" style="background-image: url('<?php echo e(url('admin/assets/img/loginBackGround.jpg')); ?>');
                           background-size: cover;">
                           <span class="mask bg-gradient-primary opacity-6"></span>
                        </div>
                     </div> -->
                  </div>
               </div>
            </div>
         </section>
      </main>
      <script src="<?php echo e(url('admin/assets/js/core/popper.min.js')); ?>"></script>
      <script src="<?php echo e(url('admin/assets/js/core/bootstrap.min.js')); ?>"></script>
      <script src="<?php echo e(url('admin/assets/js/plugins/perfect-scrollbar.min.js')); ?>"></script>
      <script src="<?php echo e(url('admin/assets/js/plugins/smooth-scrollbar.min.js')); ?>"></script>
      <script src="<?php echo e(url('admin/assets/js/plugins/dragula/dragula.min.js')); ?>"></script>
      <script src="<?php echo e(url('admin/assets/js/plugins/jkanban/jkanban.js')); ?>"></script>
      <script>
         var win = navigator.platform.indexOf('Win') > -1;
         if (win && document.querySelector('#sidenav-scrollbar')) {
           var options = {
             damping: '0.5'
           }
           Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
         }
      </script>
      <script async defer src="https://buttons.github.io/buttons.js"></script>
      <script src="<?php echo e(url('admin/assets/js/argon-dashboard.min.js?v=2.0.5')); ?>"></script>
      <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"8a7431d5dce2a8fc","serverTiming":{"name":{"cfL4":true}},"version":"2024.7.0","token":"1b7cbb72744b40c580f8633c6b62637e"}' crossorigin="anonymous"></script>
   </body>
</html>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/qotz/resources/views/auth/login.blade.php ENDPATH**/ ?>