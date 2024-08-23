<?php $__env->startSection('content'); ?>
<div class="row mb-5">
  <div class="col-lg-12 mt-lg-0 mt-4">
      <div class="card card-body" id="profile">
        <div class="row justify-content-center align-items-center">
            <div class="col-sm-auto col-4">
              <div class="avatar avatar-xl position-relative">
                  <img src="<?php echo e(url('admin/assets/img/team-3.jpg')); ?>" alt="" class="w-100 border-radius-lg shadow-sm">
              </div>
            </div>
            <div class="col-sm-auto col-8 my-auto">
              <div class="h-100">
                  <h5 class="mb-1 font-weight-bolder">
                  <?php echo e($user['first_name']); ?> <?php echo e($user['last_name']); ?>

                  </h5>
                  <p class="mb-0 font-weight-bold text-sm">
                  <?php echo e($user['type']); ?>

                  </p>
              </div>
            </div>
            <div class="col-sm-auto ms-sm-auto mt-sm-0 mt-3 d-flex">
              <label class="form-check-label mb-0">
              <small id="profileVisibility">
              Deactivate
              </small>
              </label>
              <div class="form-check form-switch ms-2">
                  <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault23" checked onchange="visible()">
              </div>
            </div>
        </div>
      </div>
      <div class="card mt-4" id="basic-info">
        <div class="card-header">
            <h5>User Information</h5>
        </div>
        <form action="<?php echo e(route('users.update', $user['id'])); ?>" method="post" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="card-body pt-0">
            <div class="row">
              <div class="col-6">
                  <label class="form-label">First Name</label>
                  <div class="input-group">
                    <input type="text" class="form-control" id="first-name" name="first_name" placeholder="eg: Michael" value="<?php echo e($user['first_name']); ?>" />
                  </div>
              </div>
              <div class="col-6">
                  <label class="form-label">Last Name</label>
                  <div class="input-group">
                    <input type="text" class="form-control" id="last-name" name="last_name" placeholder="eg: Jackson" value="<?php echo e($user['last_name']); ?>" />
                  </div>
              </div>
            </div>
            <div class="row mt-3">
                <div class="col-12 col-sm-6">
                    <label>Organization <?php $__errorArgs = ['org_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"> * <?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></label>
                    <select name="org_id" id="org_id" class="multisteps-form__input form-control">
                        <option value="">Select</option>
                        <?php $__currentLoopData = $orgs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $org): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($org['id']); ?>" <?php echo e($user['org_id'] == $org['id'] ? 'selected' : ''); ?> ><?php echo e($org['name']); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                    <label>Business Email <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"> * <?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></label>
                    <input class="form-control" type="email" name="email" id="email" placeholder="eg. michael@qotz.online" value="<?php echo e($user['email']); ?>" />
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12 col-sm-6">
                    <label>Phone <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"> * <?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></label>
                    <input class="form-control" type="text" name="phone" id="phone" placeholder="eg. 9876543210" value="<?php echo e($user['phone']); ?>" />
                </div>
                <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                    <label>Admin Type <?php $__errorArgs = ['type'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"> * <?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></label>
                    <select name="type" id="type" class="form-control">
                        <option value="">Select</option>
                        <option value="App Admin" <?php echo e($user['type'] == 'App Admin' ? 'selected' : ''); ?> >App Admin</option>
                        <?php if(auth()->user()->isSuperadmin()): ?>
                          <option value="Super Admin" <?php echo e($user['type'] == 'Super Admin' ? 'selected' : ''); ?>>Super Admin</option>
                        <?php endif; ?>
                    </select>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12 col-sm-6">
                    <label>User Status <?php $__errorArgs = ['status'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"> * <?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></label>
                    <label class="form-check">
                        <input type="radio" class="form-check-input" name="status" id="radio" value="Y" <?php if($user->status == 'Y'){ ?>checked<?php } ?>><span class="form-check-label">Active</span>
                    </label>
                    <label class="form-check">
                        <input type="radio" class="form-check-input" name="status" id="radio" value="N" <?php if($user->status == 'N'){ ?>checked<?php } ?>><span class="form-check-label">Inactive</span>
                    </label>
                </div>
                
            </div>
            <div class="button-row d-flex mt-4">
                <input type="submit" class="btn bg-gradient-dark ms-auto mb-0" name="Submit"/>
            </div>
        </div>
      </div>
      </form>           



      <!-- <div class="card mt-4" id="password">
        <div class="card-header">
            <h5>Change Password</h5>
        </div>
        <div class="card-body pt-0">
            <label class="form-label">Current password</label>
            <div class="form-group">
              <input class="form-control" type="password" placeholder="Current password">
            </div>
            <label class="form-label">New password</label>
            <div class="form-group">
              <input class="form-control" type="password" placeholder="New password">
            </div>
            <label class="form-label">Confirm new password</label>
            <div class="form-group">
              <input class="form-control" type="password" placeholder="Confirm password">
            </div>
            <h5 class="mt-5">Password requirements</h5>
            <p class="text-muted mb-2">
              Please follow this guide for a strong password:
            </p>
            <ul class="text-muted ps-4 mb-0 float-start">
              <li>
                  <span class="text-sm">One special characters</span>
              </li>
              <li>
                  <span class="text-sm">Min 6 characters</span>
              </li>
              <li>
                  <span class="text-sm">One number (2 are recommended)</span>
              </li>
              <li>
                  <span class="text-sm">Change it often</span>
              </li>
            </ul>
            <button class="btn bg-gradient-dark btn-sm float-end mt-6 mb-0">Update password</button>
        </div>
      </div> -->


      
      
      
      
      <div class="card mt-4" id="delete">
        <div class="card-header">
            <h5>Delete Account</h5>
            <p class="text-sm mb-0">Once you delete your account, there is no going back. Please be certain.</p>
        </div>
        <div class="card-body d-sm-flex pt-0">
            <div class="d-flex align-items-center mb-sm-0 mb-4">
              <div>
                  <div class="form-check form-switch mb-0">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault0">
                  </div>
              </div>
              <div class="ms-2">
                  <span class="text-dark font-weight-bold d-block text-sm">Confirm</span>
                  <span class="text-xs d-block">I want to delete my account.</span>
              </div>
            </div>
            <button class="btn btn-outline-secondary mb-0 ms-auto" type="button" name="button">Deactivate</button>
            <button class="btn bg-gradient-danger mb-0 ms-2" type="button" name="button">Delete Account</button>
        </div>
      </div>
  </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('wbxadmin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/qotz/resources/views/wbxadmin/users/edit.blade.php ENDPATH**/ ?>