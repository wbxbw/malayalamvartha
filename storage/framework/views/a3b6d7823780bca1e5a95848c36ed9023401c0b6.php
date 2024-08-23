 <?php $__env->startSection('content'); ?>
<div class="row mb-5">
    <div class="col-12">
        <div class="multisteps-form mb-5">
            <!-- <div class="row">
                <div class="col-12 col-lg-10 mx-auto my-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="multisteps-form__progress">
                                <button class="multisteps-form__progress-btn js-active" type="button" title="User Info">
                                    <span>User Info</span>
                                </button>
                                <button class="multisteps-form__progress-btn" type="button" title="Address">
                                    Address
                                </button>
                                <button class="multisteps-form__progress-btn" type="button" title="Socials">
                                    Socials
                                </button>
                                <button class="multisteps-form__progress-btn" type="button" title="Profile">
                                    Profile
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            

            <div class="row">
                <div class="col-12 col-lg-12 m-auto">
                    <form class="multisteps-form__form mb-8" action="<?php echo e(route('users.store')); ?>" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="card multisteps-form__panel p-3 border-radius-xl bg-white js-active" data-animation="FadeIn">
                            <h5 class="font-weight-bolder mb-0">User Information</h5>
                            <p class="mb-0 text-sm">Mandatory informations</p>
                            <div class="multisteps-form__content">
                                <div class="row mt-3">
                                    <div class="col-12 col-sm-6">
                                        <label>First Name <?php $__errorArgs = ['first_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"> * <?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></label>
                                        <input class="multisteps-form__input form-control" type="text" name="first_name" id="first_name" placeholder="eg. Michael" value="<?php echo e(old('first_name')); ?>" />
                                    </div>
                                    <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                        <label>Last Name <?php $__errorArgs = ['last_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"> * <?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></label>
                                        <input class="multisteps-form__input form-control" type="text" name="last_name" id="last_name" placeholder="eg. Jackson" value="<?php echo e(old('last_name')); ?>" />
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
                                            <option value="<?php echo e($org['id']); ?>" <?php echo e(old('type') == $org['id'] ? 'selected' : ''); ?> ><?php echo e($org['name']); ?></option>
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
                                        <input class="multisteps-form__input form-control" type="email" name="email" id="email" placeholder="eg. michael@qotz.online" value="<?php echo e(old('email')); ?>" />
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
                                        <input class="multisteps-form__input form-control" type="text" name="phone" id="phone" placeholder="eg. 9876543210" value="<?php echo e(old('phone')); ?>" />
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
                                        <select name="type" id="type" class="multisteps-form__input form-control">
                                            <option value="">Select</option>
                                            <option value="App Admin" <?php echo e(old('type') == 'App Admin' ? 'selected' : ''); ?> >App Admin</option>
                                            <?php if(auth()->user()->isSuperadmin()): ?>
                                                <option value="Super Admin" <?php echo e(old('type') == 'Super Admin' ? 'selected' : ''); ?>>Super Admin</option>
                                            <?php endif; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="button-row d-flex mt-4">
                                    <!-- <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button" title="Next">
                                        Next
                                    </button> -->
                                    <input type="submit" class="btn bg-gradient-dark ms-auto mb-0" name="Submit"/>
                                </div>
                            </div>
                        </div>

                        <!-- <div class="card multisteps-form__panel p-3 border-radius-xl bg-white" data-animation="FadeIn">
                            <h5 class="font-weight-bolder">Permissions</h5>
                            <div class="multisteps-form__content">
                                <div class="row mt-3">
                                    <div class="col">
                                        <label>Address 1</label>
                                        <input class="multisteps-form__input form-control" type="text" placeholder="eg. Street 111" />
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col">
                                        <label>Address 2</label>
                                        <input class="multisteps-form__input form-control" type="text" placeholder="eg. Street 221" />
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-12 col-sm-6">
                                        <label>City</label>
                                        <input class="multisteps-form__input form-control" type="text" placeholder="eg. Tokyo" />
                                    </div>
                                    <div class="col-6 col-sm-3 mt-3 mt-sm-0">
                                        <label>State</label>
                                        <select class="multisteps-form__select form-control">
                                            <option selected="selected">...</option>
                                            <option value="1">State 1</option>
                                            <option value="2">State 2</option>
                                        </select>
                                    </div>
                                    <div class="col-6 col-sm-3 mt-3 mt-sm-0">
                                        <label>Zip</label>
                                        <input class="multisteps-form__input form-control" type="text" placeholder="7 letters" />
                                    </div>
                                </div>
                                <div class="button-row d-flex mt-4">
                                    <button class="btn bg-gradient-light mb-0 js-btn-prev" type="button" title="Prev">
                                        Prev
                                    </button>
                                    <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button" title="Next">
                                        Next
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="card multisteps-form__panel p-3 border-radius-xl bg-white" data-animation="FadeIn">
                            <h5 class="font-weight-bolder">Socials</h5>
                            <div class="multisteps-form__content">
                                <div class="row mt-3">
                                    <div class="col-12">
                                        <label>Twitter Handle</label>
                                        <input class="multisteps-form__input form-control" type="text" placeholder="@argon" />
                                    </div>
                                    <div class="col-12 mt-3">
                                        <label>Facebook Account</label>
                                        <input class="multisteps-form__input form-control" type="text" placeholder="https://..." />
                                    </div>
                                    <div class="col-12 mt-3">
                                        <label>Instagram Account</label>
                                        <input class="multisteps-form__input form-control" type="text" placeholder="https://..." />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="button-row d-flex mt-4 col-12">
                                        <button class="btn bg-gradient-light mb-0 js-btn-prev" type="button" title="Prev">
                                            Prev
                                        </button>
                                        <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button" title="Next">
                                            Next
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card multisteps-form__panel p-3 border-radius-xl bg-white h-100" data-animation="FadeIn">
                            <h5 class="font-weight-bolder">Profile</h5>
                            <div class="multisteps-form__content mt-3">
                                <div class="row">
                                    <div class="col-12">
                                        <label>Public Email</label>
                                        <input class="multisteps-form__input form-control" type="text" placeholder="Use an address you don't use frequently." />
                                    </div>
                                    <div class="col-12 mt-3">
                                        <label>Bio</label>
                                        <textarea class="multisteps-form__textarea form-control" rows="5" placeholder="Say a few words about who you are or what you're working on."></textarea>
                                    </div>
                                </div>
                                <div class="button-row d-flex mt-4">
                                    <button class="btn bg-gradient-light mb-0 js-btn-prev" type="button" title="Prev">
                                        Prev
                                    </button>
                                    <input type="submit" class="btn bg-gradient-dark ms-auto mb-0" name="Submit"/>
                                </div>
                            </div>
                        </div> -->
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo e(url('admin/assets/js/plugins/datatables.js')); ?>"></script>
<script src="<?php echo e(url('admin/assets/js/plugins/dragula/dragula.min.js')); ?>"></script>
<script src="<?php echo e(url('admin/assets/js/core/popper.min.js')); ?>"></script>
<script src="<?php echo e(url('admin/assets/js/core/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(url('admin/assets/js/plugins/perfect-scrollbar.min.js')); ?>"></script>
<script src="<?php echo e(url('admin/assets/js/plugins/smooth-scrollbar.min.js')); ?>"></script>
<script src="<?php echo e(url('admin/assets/js/plugins/multistep-form.js')); ?>"></script>
<script src="<?php echo e(url('admin/assets/js/plugins/dragula/dragula.min.js')); ?>"></script>
<script src="<?php echo e(url('admin/assets/js/plugins/jkanban/jkanban.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('wbxadmin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/qotz/resources/views/wbxadmin/users/create.blade.php ENDPATH**/ ?>