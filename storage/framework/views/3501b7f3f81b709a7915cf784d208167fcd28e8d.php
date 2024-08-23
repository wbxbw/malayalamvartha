
<?php $__env->startSection('content'); ?>
<div id="top" class="sa-app__body">
   <div class="mx-sm-2 px-2 px-sm-3 px-xxl-4 pb-6">
      <div class="container container--max--lg">
         <div class="py-5">
            <div class="row g-4 align-items-center">
               <div class="col">
                  <nav
                     class="mb-2"
                     aria-label="breadcrumb"
                     >
                     <ol
                        class="breadcrumb breadcrumb-sa-simple"
                        >
                        <li class="breadcrumb-item">
                           <a href="index.html"
                              >Dashboard</a
                              >
                        </li>
                        <li class="breadcrumb-item">
                           <a
                              href="app-settings-toc.html"
                              >Users</a
                              >
                        </li>
                        <li
                           class="breadcrumb-item active"
                           aria-current="page"
                           >
                           Settings
                        </li>
                     </ol>
                  </nav>
                  <h1 class="h3 m-0">Manage Permission</h1>
               </div>
               <!-- <div class="col-auto d-flex">
                  <a
                     href="#"
                     class="btn btn-secondary me-3"
                     >Reset</a
                     ><a href="#" class="btn btn-primary"
                     >Save</a
                     >
               </div> -->
            </div>
         </div>
         <div class="card mt-5">
            <div class="card-body p-5">
               <div class="mb-5">
                  <h2 class="mb-0 fs-exact-18">
                     Edit Permission
                  </h2>
               </div>
               <form action="<?php echo e(route('users.permissionupdate', $user['id'])); ?>" method="post" enctype="multipart/form-data">
                  <?php echo csrf_field(); ?>
                  <?php echo method_field('PUT'); ?>
                  <?php $__currentLoopData = $userModules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $userModule): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <div class="mb-4">
                     <div class="form-label">
                     <?php echo e($userModule->module->name); ?>

                     </div>
                     <div>
                        <label class="form-check form-check-inline mb-0">
                           <input type="radio" class="form-check-input module-radio" name="module_id_<?php echo e($userModule->id); ?>" value="Y" <?php echo e($userModule->status == 'Y' ? 'checked' : ''); ?>>
                           <span class="form-check-label">Enable</span>
                        </label>
                        <label class="form-check form-check-inline mb-0">
                           <input type="radio" class="form-check-input module-radio" name="module_id_<?php echo e($userModule->id); ?>" value="N" <?php echo e($userModule->status == 'N' ? 'checked' : ''); ?>>
                           <span class="form-check-label">Disable</span>
                        </label>
                     </div>
                  </div>
                  <div class="editPermission_<?php echo e($userModule->id); ?>" style="<?php echo e($userModule->status == 'Y' ? '' : 'display:none;'); ?>">
                     <table width="100%" border ="0" cellspacing="0" cellpadding="0" class="listing" id = "dataTable">
                        <tbody>
                           <tr>
                              <td width="25%"><strong>Manage Pages</strong></td>
                              <td width="75%"></td>
                           </tr>
                           <?php $__currentLoopData = $userModule->module->pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <?php if($page->view == 'Y' || $page->add == 'Y' || $page->edit == 'Y' || $page->delete == 'Y'): ?>
                                 <?php $__currentLoopData = $page->userPages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $userPage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($userPage->user_id == $user['id']): ?>
                                       <tr>
                                          <td width="25%"><?php echo e($page->name); ?></td>
                                          <td width="75%">
                                             <?php if($page->view == 'Y'): ?>
                                             <input type="checkbox" name="view_<?php echo e($userPage->id); ?>" <?php if($userPage->page_view == 'Y'){ ?> checked <?php } ?> value="Y" class="form-check-input">
                                             View&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                             <?php endif; ?>
                                             <?php if($page->add == 'Y'): ?>
                                             <input type="checkbox" name="add_<?php echo e($userPage->id); ?>" <?php if($userPage->page_add == 'Y'){ ?> checked <?php } ?> value="Y" class="form-check-input">
                                             Add&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                             <?php endif; ?>
                                             <?php if($page->edit == 'Y'): ?>
                                             <input type="checkbox" name="edit_<?php echo e($userPage->id); ?>" <?php if($userPage->page_edit == 'Y'){ ?> checked <?php } ?> value="Y" class="form-check-input">
                                             Edit&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                             <?php endif; ?>
                                             <?php if($page->delete == 'Y'): ?>
                                             <input type="checkbox" name="delete_<?php echo e($userPage->id); ?>" <?php if($userPage->page_delete == 'Y'){ ?> checked <?php } ?> value="Y" class="form-check-input" />
                                             Delete&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                             <?php endif; ?>
                                          </td>
                                       </tr>
                                    <?php endif; ?>
                                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              <?php endif; ?>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                     </table>
                     <div class="spacer"></div>
                  </div>
                  </br>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  <div class="card-body p-5">
                     <div class="form-colum">
                     <div class=" d-flex justify-content-end mt-5">
                        <input type="submit" class="btn btn-secondary me-3" name="Save"/>
                        <a href="#" class="btn btn-primary">Cancel</a>
                     </div>
                     </div>
                  </div>
               </form>
         </div>
      </div>
   </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const moduleRadios = document.querySelectorAll('.module-radio');

        moduleRadios.forEach(function (radio) {
            radio.addEventListener('change', function () {
                const moduleId = this.name.replace('module_id_', '');
                const editPermission = document.querySelector('.editPermission_' + moduleId);

                if (this.value === 'Y') {
                    editPermission.style.display = '';
                } else {
                    editPermission.style.display = 'none';
                }
            });
        });
    });
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('wbxadmin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home4/maichavx/public_html/lulu_demo/resources/views/wbxadmin/users/permission.blade.php ENDPATH**/ ?>