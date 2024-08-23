
<?php $__env->startSection('content'); ?>
<style>
   /* edit permission table */
#dataTable {
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
}
  #dataTable th, #dataTable td {
    text-align: left;
    padding: 8px;
    border: #CCCCCC 1px solid;
}
</style>
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
              Switch to invisible
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
            <h5>Permission Information</h5>
        </div>
        <div class="card-body pt-0">
            <div class="row">
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
                                             <td width="25%"><p class="mb-0 font-weight-bold text-sm"><?php echo e($page->name); ?></p></td>
                                             <td width="75%"><p class="mb-0 text-sm">
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
                                                </p>
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
                           <input type="submit" class="btn bg-gradient-dark me-3" name="Save"/>
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

<?php echo $__env->make('wbxadmin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/qotz/resources/views/wbxadmin/users/permission.blade.php ENDPATH**/ ?>