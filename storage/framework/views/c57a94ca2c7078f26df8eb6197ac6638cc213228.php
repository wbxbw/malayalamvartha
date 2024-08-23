
<?php $__env->startSection('content'); ?>
<div class="row">
  <div class="col-12">
      <div class="card">
        <div class="card-header pb-0">
            <div class="d-lg-flex">
              <div>
                  <h5 class="mb-0">List Categories</h5>
                  <!-- <p class="text-sm mb-0">
                    Complete lists of buyers, sellers and administrators.
                  </p> -->
              </div>
              <div class="ms-auto my-auto mt-lg-0 mt-4">
                  <div class="ms-auto my-auto">
                    <a href="<?php echo e(route('categories.create')); ?>" class="btn bg-gradient-primary btn-sm mb-0" >+&nbsp; New Category</a>
                  </div>
              </div>
            </div>
        </div>
        <div class="card-body px-0 pb-0">
            <div class="table-responsive">
              <table class="table table-flush" id="products-list">
                  <thead class="thead-light">
                    <tr>
                    <th>No</th>
                    <th class="min-w-15x">Category Name</th>
                    <th>Sub Category</th>
                    <th>Status</th>
                    <th data-orderable="false">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="text-sm"><?php echo e($loop->iteration); ?></td>
                        <td>
                          <a href="<?php echo e(route('categories.edit',Crypt::encrypt($category['id']))); ?>">
                            <div class="">
                            <h6 class="my-auto"><?php echo e($category['name']); ?></h6>
                            </div>
                          </a>
                        </td>
                        <td>
                        <div class="notification-box">
                          <a href="<?php echo e(route('categories.subindex',Crypt::encrypt($category['id']))); ?>">
                            <i class="fa fa-list-alt text-secondary" aria-hidden="true"></i>
                            <span class="notification-counter"><?php echo e($category->sub_categories_count); ?></span> <!-- Change the number to your notification count -->
                          </a>
                        </div>
                        </td>
                        <td>
                          <?php if($category->status == 'Y'): ?>
                          <span class="badge badge-success badge-sm">Active</span>
                          <?php elseif($category->status == 'N'): ?>
                          <span class="badge badge-danger badge-sm">Inactive</span>
                          <?php endif; ?>
                        </td>
                        <td class="text-sm">
                          <a href="<?php echo e(route('categories.edit',Crypt::encrypt($category['id']))); ?>" data-bs-toggle="tooltip" data-bs-original-title="Preview product">
                          <i class="fas fa-pencil-square text-secondary"></i>
                          </a>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>No</th>
                      <th class="min-w-15x">Category Name</th>
                      <th>Sub Category</th>
                      <th>Status</th>
                      <th class="w-min" data-orderable="false">Action</th>
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

<?php echo $__env->make('wbxadmin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/qotz/resources/views/wbxadmin/categories/index.blade.php ENDPATH**/ ?>