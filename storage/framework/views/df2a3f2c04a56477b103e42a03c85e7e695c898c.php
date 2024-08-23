<?php $__env->startSection('content'); ?>
<div class="row">
  <div class="col-12">
      <div class="card">
        <div class="card-header pb-0">
            <div class="d-lg-flex">
              <div>
                  <h5 class="mb-0">List Users</h5>
                  <p class="text-sm mb-0">
                    Complete lists of administrators.
                  </p>
              </div>
              <div class="ms-auto my-auto mt-lg-0 mt-4">
                  <div class="ms-auto my-auto">
                    <a href="<?php echo e(route('users.create')); ?>" class="btn bg-gradient-primary btn-sm mb-0" >+&nbsp; New User</a>
                  </div>
              </div>
            </div>
        </div>
        <div class="card-body px-0 pb-0">
            <div class="table-responsive">
              <table class="table table-flush" id="products-list">
                  <thead class="thead-light">
                    <tr>
                        <th>Sl</th>
                        <th>Name</th>
                        <th>User Type</th>
                        <th>Organization</th>
                        <th>Mobile</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="text-sm"><?php echo e($loop->iteration); ?></td>
                        <td>
                          <a href="<?php echo e(route('users.edit',Crypt::encrypt($user['id']))); ?>">
                            <div class="d-flex">
                            <h6 class="my-auto"><?php echo e($user['first_name']); ?> <?php echo e($user['last_name']); ?></h6>
                            </div>
                          </a>
                        </td>
                        <td class="text-sm"><?php echo e($user->type); ?></td>
                        <?php $__currentLoopData = $orgs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $org): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <?php if($org['id'] == $user->org_id ): ?>
                          <td class="text-sm"><?php echo e($org->name); ?></td>
                          <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <td class="text-sm"><?php echo e($user['phone']); ?></td>
                        <td class="text-sm"><?php echo e($user['email']); ?></td>
                        <td>
                          <?php if($user->status == 'Y'): ?>
                          <span class="badge badge-success badge-sm">Active</span>
                          <?php elseif($user->status == 'N'): ?>
                          <span class="badge badge-danger badge-sm">Inactive</span>
                          <?php endif; ?>
                        </td>
                        <td class="text-sm">
                          <!-- <a href="javascript:;" data-bs-toggle="tooltip" data-bs-original-title="Preview product">
                          <i class="fas fa-eye text-secondary"></i>
                          </a> -->
                          <a href="<?php echo e(route('users.permission',Crypt::encrypt($user['id']))); ?>" data-bs-toggle="tooltip" data-bs-original-title="Preview product">
                          <i class="fas fa-pencil-square text-secondary"></i>
                          </a>
                          <a href="<?php echo e(route('users.edit',Crypt::encrypt($user['id']))); ?>" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Edit product">
                          <i class="fas fa-user-edit text-secondary"></i>
                          </a>
                          <a href="javascript:;" data-bs-toggle="tooltip" data-bs-original-title="Delete product">
                          <i class="fas fa-trash text-secondary"></i>
                          </a>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tbody>
                  <tfoot>
                    <tr>
                        <th>Product</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>SKU</th>
                        <th>Quantity</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                  </tfoot>
              </table>
            </div>
        </div>
      </div>
  </div>
</div>
<script src="<?php echo e(url('admin/assets/js/plugins/datatables.js')); ?>"></script>
<script src="<?php echo e(url('admin/assets/js/plugins/dragula/dragula.min.js')); ?>"></script>
<script src="<?php echo e(url('admin/assets/js/plugins/jkanban/jkanban.js')); ?>"></script>

<script>
  if (document.getElementById('products-list')) {
    const dataTableSearch = new simpleDatatables.DataTable("#products-list", {
      searchable: true,
      fixedHeight: false,
      perPage: 7
    });
  
    document.querySelectorAll(".export").forEach(function(el) {
      el.addEventListener("click", function(e) {
        var type = el.dataset.type;
  
        var data = {
          type: type,
          filename: "soft-ui-" + type,
        };
  
        if (type === "csv") {
          data.columnDelimiter = "|";
        }
  
        dataTableSearch.export(data);
      });
    });
  };
</script>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('wbxadmin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/qotz/resources/views/wbxadmin/users/index.blade.php ENDPATH**/ ?>