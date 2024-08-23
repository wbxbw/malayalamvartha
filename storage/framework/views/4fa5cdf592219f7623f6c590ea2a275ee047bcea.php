<!DOCTYPE html>
<html lang="en" dir="ltr" data-scompiler-id="0">
   <head>
      <meta charSet="UTF-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1"/>
      <meta name="format-detection" content="telephone=no"/>
      <title>E-Commerce Admin - Login Form</title>
      <!-- icon -->
      <link rel="icon" type="image/png" href="images/favicon.png"/>
      <!-- fonts -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i"/>
      <!-- css -->
      <link rel="stylesheet" href="<?php echo e(url('admin/vendor/highlight.js/styles/github.css')); ?>"/>
      <link rel="stylesheet" href="<?php echo e(url('admin/vendor/bootstrap/css/bootstrap.ltr.css')); ?>"/>
      <link rel="stylesheet" href="<?php echo e(url('admin/vendor/simplebar/simplebar.min.css')); ?>"/>
      <link rel="stylesheet" href="<?php echo e(url('admin/vendor/quill/quill.snow.css')); ?>"/>
      <link rel="stylesheet" href="<?php echo e(url('admin/vendor/air-datepicker/css/datepicker.min.css')); ?>"/>
      <link rel="stylesheet" href="<?php echo e(url('admin/vendor/select2/css/select2.min.css')); ?>"/>
      <link rel="stylesheet" href="<?php echo e(url('admin/vendor/datatables/css/dataTables.bootstrap5.min.css')); ?>"/>
      <link rel="stylesheet" href="<?php echo e(url('admin/vendor/nouislider/nouislider.min.css')); ?>"/>
      <link rel="stylesheet" href="<?php echo e(url('admin/vendor/fullcalendar/main.min.css')); ?>"/>
      <link rel="stylesheet" href="<?php echo e(url('admin/css/style.css')); ?>"/>
      <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-97489509-8"></script><script>
         window.dataLayer = window.dataLayer || [];
         function gtag(){dataLayer.push(arguments);}
         gtag('js', new Date());
         
         gtag('config', 'UA-97489509-8');
      </script>
   </head>
   <body>
      <div class="min-h-100 p-0 p-sm-6 d-flex align-items-stretch">
         <div class="card w-25x flex-grow-1 flex-sm-grow-0 m-sm-auto">
         <form method="POST" action="<?php echo e(route('admin.login')); ?>">
            <?php echo csrf_field(); ?>
            <div class="card-body p-sm-5 m-sm-3 flex-grow-0">
               <h1 class="mb-0 fs-3">Sign In</h1>
               <div class="fs-exact-14 text-muted mt-2 pt-1 mb-5 pb-2">Log in to your account to continue.</div>
               <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.auth-validation-errors','data' => ['class' => 'mb-4','errors' => $errors]]); ?>
<?php $component->withName('auth-validation-errors'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'mb-4','errors' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
               <div class="mb-4"><label class="form-label">Email Address</label>
                  <input type="email" name="email" id="email" class="form-control form-control-lg"/>
               </div>
               <div class="mb-4"><label class="form-label">Password</label>
                  <input type="password" name="password" id="password" class="form-control form-control-lg"/>
               </div>
               <div class="mb-4 row py-2 flex-wrap">
                  <div class="col-auto me-auto">
                     <label class="form-check mb-0"><input type="checkbox" class="form-check-input"/>
                     <span class="form-check-label">Remember me</span></label>
                  </div>
                  <div class="col-auto d-flex align-items-center"><a href="auth-forgot-password.html">Forgot password?</a></div>
               </div>
               <div>
                  <button type="submit" class="btn btn-primary btn-lg w-100">Sign In</button>
               </div>
               
               <?php if($errors->has('email')): ?>
               <span class="invalid-feedback">
                  <strong><?php echo e($errors->first('email')); ?></strong>
               </span>
               <?php endif; ?>
            </div>
          </form>
            <!-- <div class="sa-divider sa-divider--has-text">
               <div class="sa-divider__text">Or continue with</div>
            </div>
            <div class="card-body p-sm-5 m-sm-3 flex-grow-0">
               <div class="d-flex flex-wrap me-n3 mt-n3"><button type="button" class="btn btn-secondary flex-grow-1 me-3 mt-3">Google</button><button type="button" class="btn btn-secondary flex-grow-1 me-3 mt-3">Facebook</button><button type="button" class="btn btn-secondary flex-grow-1 me-3 mt-3">Twitter</button></div>
               <div class="form-group mb-0 mt-4 pt-2 text-center text-muted">Don&#x27;t have an account? <a href="auth-sign-up.html">Sign up</a></div>
            </div> -->
         </div>
      </div>
      <!-- scripts --><script src="<?php echo e(url('admin/vendor/jquery/jquery.min.js')); ?>"></script>
      <script src="<?php echo e(url('admin/vendor/feather-icons/feather.min.js')); ?>"></script>
      <script src="<?php echo e(url('admin/vendor/simplebar/simplebar.min.js')); ?>"></script>
      <script src="<?php echo e(url('admin/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
      <script src="<?php echo e(url('admin/vendor/highlight.js/highlight.pack.js')); ?>"></script>
      <script src="<?php echo e(url('admin/vendor/quill/quill.min.js')); ?>"></script>
      <script src="<?php echo e(url('admin/vendor/air-datepicker/js/datepicker.min.js')); ?>"></script>
      <script src="<?php echo e(url('admin/vendor/air-datepicker/js/i18n/datepicker.en.js')); ?>"></script>
      <script src="<?php echo e(url('admin/vendor/select2/js/select2.min.js')); ?>"></script>
      <script src="<?php echo e(url('admin/vendor/fontawesome/js/all.min.js')); ?>" data-auto-replace-svg="" async=""></script>
      <script src="<?php echo e(url('admin/vendor/chart.js/chart.min.js')); ?>"></script>
      <script src="<?php echo e(url('admin/vendor/datatables/js/jquery.dataTables.min.js')); ?>"></script>
      <script src="<?php echo e(url('admin/vendor/datatables/js/dataTables.bootstrap5.min.js')); ?>"></script>
      <script src="<?php echo e(url('admin/vendor/nouislider/nouislider.min.js')); ?>"></script>
      <script src="<?php echo e(url('admin/vendor/fullcalendar/main.min.js')); ?>"></script>
      <script src="<?php echo e(url('admin/js/stroyka.js')); ?>"></script>
      <script src="<?php echo e(url('admin/js/custom.js')); ?>"></script>
      <script src="<?php echo e(url('admin/js/calendar.js')); ?>"></script>
      <script src="<?php echo e(url('admin/js/demo.js')); ?>"></script>
      <script src="<?php echo e(url('admin/js/demo-chart-js.js')); ?>"></script>
   </body>
</html>
<?php /**PATH C:\Users\saswa\Downloads\ecommerceadmin\ecommerceadmin\resources\views/auth/login.blade.php ENDPATH**/ ?>