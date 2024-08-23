 <?php $__env->startSection('content'); ?>

<div class="row mb-5">
    <div class="col-12">
        <div class="multisteps-form mb-5">


            <div class="row">
                <div class="col-12 col-lg-12 m-auto">
                    <form class="multisteps-form__form mb-8" action="<?php echo e(route('users.sendinvite')); ?>" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="card multisteps-form__panel p-3 border-radius-xl bg-white js-active" data-animation="FadeIn">
                            <h5 class="font-weight-bolder mb-0">User Invite Information</h5>
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
                                        <input class="multisteps-form__input form-control" type="text" name="first_name" id="first_name" placeholder="eg. Michael" value="<?php echo e(old('first_name')); ?>" onkeyup="updateEmailTemplate()" />
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
                                        <input class="multisteps-form__input form-control" type="text" name="last_name" id="last_name" placeholder="eg. Jackson" value="<?php echo e(old('last_name')); ?>" onkeyup="updateEmailTemplate()" />
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
                                        <input class="multisteps-form__input form-control" type="text" name="org_id" id="org_id" placeholder="eg. Qotz Application" value="<?php echo e(old('org_id')); ?>" />
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <label>Invite As <?php $__errorArgs = ['org_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"> * <?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></label>
                                        <select name="type" id="user_type" class="multisteps-form__input form-control" onchange="updateEmailTemplate()">
                                            <option value="">Select</option>
                                            <option value="Buyer" <?php echo e(old('type') == 'Buyer' ? 'selected' : ''); ?> >Buyer</option>
                                            <option value="Seller" <?php echo e(old('type') == 'Seller' ? 'selected' : ''); ?>>Seller</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-12 col-sm-12 mt-3 mt-sm-0">
                                        <label>Business Email <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"> * <?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></label>
                                        <input class="multisteps-form__input form-control" id="choices-skills" type="text" name="email"  value="swathyvasudev@gmail.com" placeholder="eg. michael@qotz.online" />
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-12 col-sm-12">
                                        <label>Email Format <?php $__errorArgs = ['org_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"> * <?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></label>
                                        <textarea class="multisteps-form__input form-control" name="long_description" id="editor1" cols="43" rows="10" class="textarea" tabindex="5" onkeydown="limitText(this.form.short_desc,this.form.countdown1,5000);"
                                         onkeyup="limitText(this.form.product_desc,this.form.countdown1,5000);">
                                         <div id="buyerDiv"></div>
                                        </textarea>

                                        <input type="hidden" name="email_template_content" id="email_template_content">
                                        <input type="hidden" name="invited_by" value="<?php echo e(Auth::user()->email); ?>">
                                    </div>
                                </div>
                                

                            
                                
                                <div class="button-row d-flex mt-4">
                                    <input type="submit" class="btn bg-gradient-dark ms-auto mb-0" name="Submit"/>
                                </div>
                                
                            </div>
                        </div>

                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
        function updateEmailTemplate() {

            var userType = document.getElementById('user_type').value;
            var firstName = document.getElementById('first_name').value;
            var lastName = document.getElementById('last_name').value;
            var fullName = firstName + ' ' + lastName;

            var emailTemplate = '';

            if (userType === 'Buyer') {
                emailTemplate = `
                    <body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333; background-color: #f4f4f4; margin: 0; padding: 20px;">
                        <div style="background-color: #ffffff; border-radius: 5px; padding: 20px; max-width: 600px; margin: auto; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);">
                            <div style="border-bottom: 1px solid #dddddd; padding-bottom: 20px; margin-bottom: 20px;">
                                <h2>Welcome to Qotz App!</h2>
                            </div>
                            <div style="padding-bottom: 20px;">
                                <p>Hi <span style="color: #007bff; font-weight: bold;">${fullName}</span>,</p>
                                <p>We are excited to invite you to join the Qotz Application platform as a <span style="color: #007bff; font-weight: bold;">Buyer</span>.</p>
                                <p>You have a 6 months free Buyer account to use the Quote Management application QOTZ. This application makes your day-to-day (B2B) business transactions very simple. As a Buyer, you can
                                </p><ul><li>
                                Quickly create RFQs and send to your suppliers using our "Touch the tile" user interface.</li><li>Receive quotes from suppliers with comparisons based on price, payment &amp; delivery conditions.
                                </li><li>Provide feedback to suppliers whose quotes weren’t selected, automatically.
                                </li><li>Refer to current market prices of all your products under the section "My Products"
                                </li><li>Get to know the lowest quoted price of each product in the same week thereby assessing the competitivity of your current suppliers
                                </li><li>Get connected to more suppliers (with Premium membership)</li></ul>
                                <p>
                                There's a lot you can do with our basic membership. We are planning to launch our Premium features in the next 3 months. I am sure you will be able to boost your business and increase savings through the same.
                                </p>
                                <p>To get started, please click the button below to set up your account:</p>
                                <p><a href="https://example.com/invitation-link" style="background-color: #007bff; color: white; padding: 10px 20px; border-radius: 5px; text-decoration: none; display: inline-block;">Get Started</a></p>
                                <p>If you have any questions or need assistance, please don't hesitate to reach out to our support team.</p>
                                <p>Thank you,<br>The Qotz Application Team</p>
                            </div>
                            <div style="border-top: 1px solid #dddddd; padding-top: 20px; font-size: 0.9em; color: #777;">
                                <p>If you received this email by mistake or do not wish to join Qotz Application, please ignore this email.</p>
                                <p>&copy; 2024 Qotz Application, All rights reserved.</p>
                            </div>
                        </div>
                    </body>
                `;
            } else if (userType === 'Seller') {
                emailTemplate = `
                    <body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333; background-color: #f4f4f4; margin: 0; padding: 20px;">
                        <div style="background-color: #ffffff; border-radius: 5px; padding: 20px; max-width: 600px; margin: auto; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);">
                            <div style="border-bottom: 1px solid #dddddd; padding-bottom: 20px; margin-bottom: 20px;">
                                <h2>Welcome to Qotz App!</h2>
                            </div>
                            <div style="padding-bottom: 20px;">
                                <p>Hi <span style="color: #007bff; font-weight: bold;">${fullName}</span>,</p>
                                <p>We are excited to invite you to join the Qotz Application platform as a <span style="color: #007bff; font-weight: bold;">Seller</span>. Our platform provides exceptional features and services to help you reach a broader market and grow your business.</p>
                                <p>To get started, please click the button below to set up your account:</p>
                                <p><a href="https://example.com/invitation-link" style="background-color: #007bff; color: white; padding: 10px 20px; border-radius: 5px; text-decoration: none; display: inline-block;">Get Started</a></p>
                                <p>If you have any questions or need assistance, please don't hesitate to reach out to our support team.</p>
                                <p>Thank you,<br>The Qotz Application Team</p>
                            </div>
                            <div style="border-top: 1px solid #dddddd; padding-top: 20px; font-size: 0.9em; color: #777;">
                                <p>If you received this email by mistake or do not wish to join Qotz Application, please ignore this email.</p>
                                <p>&copy; 2024 Qotz Application, All rights reserved.</p>
                            </div>
                        </div>
                    </body>
                `;
            }
            buyerDiv.innerHTML = emailTemplate;
            document.getElementById('email_template_content').value = emailTemplate;
        }

        window.onload = function() {
            document.getElementById('user_type').addEventListener('change', updateEmailTemplate);
        }
    </script>

<script src="<?php echo e(url('admin/assets/js/plugins/datatables.js')); ?>"></script>
<script src="<?php echo e(url('admin/assets/js/plugins/dragula/dragula.min.js')); ?>"></script>
<script src="<?php echo e(url('admin/assets/js/plugins/choices.min.js')); ?>"></script>
<script src="<?php echo e(url('admin/assets/js/core/popper.min.js')); ?>"></script>
<script src="<?php echo e(url('admin/assets/js/core/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(url('admin/assets/js/plugins/perfect-scrollbar.min.js')); ?>"></script>
<script src="<?php echo e(url('admin/assets/js/plugins/smooth-scrollbar.min.js')); ?>"></script>
<script src="<?php echo e(url('admin/assets/js/plugins/multistep-form.js')); ?>"></script>
<script src="<?php echo e(url('admin/assets/js/plugins/dragula/dragula.min.js')); ?>"></script>
<script src="<?php echo e(url('admin/assets/js/plugins/jkanban/jkanban.js')); ?>"></script>
<script>
    if (document.getElementById('choices-skills')) {
      var skills = document.getElementById('choices-skills');
      const example = new Choices(skills, {
        delimiter: ',',
        editItems: true,
        maxItemCount: 5,
        removeItemButton: true,
        addItems: true
      });
    }
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('wbxadmin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/qotz/resources/views/wbxadmin/users/invite.blade.php ENDPATH**/ ?>