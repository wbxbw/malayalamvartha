<?php $__env->startSection('content'); ?>
<div class="row">
  <div class="col-12">
      <div class="card">
        <div class="card-header pb-0">
            <div class="d-lg-flex">
              <div>
                  <h5 class="mb-0">List Organizations</h5>
                  <!-- <p class="text-sm mb-0">
                    Complete lists of buyers, sellers and administrators.
                  </p> -->
              </div>
              <div class="ms-auto my-auto mt-lg-0 mt-4">
                  <div class="ms-auto my-auto">
                    <a href="<?php echo e(route('organizations.create')); ?>" class="btn bg-gradient-primary btn-sm mb-0" >+&nbsp; New Organization</a>
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
                        <th>Country</th>
                        <th>City</th>
                        <th>Address</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php $__currentLoopData = $orgs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $org): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="text-sm"><?php echo e($loop->iteration); ?></td>
                        <td>
                          <a href="<?php echo e(route('organizations.edit',Crypt::encrypt($org['id']))); ?>">
                            <div class="">
                            <h6 class="my-auto"><?php echo e($org['name']); ?></h6>
                            </div>
                          </a>
                        </td>
                        <td class="text-sm"><?php echo e($org->country_id); ?></td>
                        <td class="text-sm"><?php echo e($org['city']); ?></td>
                        <td class="text-sm"><?php echo e($org['address']); ?></td>
                        <td>
                          <?php if($org->status == 'Y'): ?>
                          <span class="badge badge-success badge-sm">Active</span>
                          <?php elseif($org->status == 'N'): ?>
                          <span class="badge badge-danger badge-sm">Inactive</span>
                          <?php endif; ?>
                        </td>
                        <td class="text-sm">
                          <a href="<?php echo e(route('organizations.edit',Crypt::encrypt($org['id']))); ?>" data-bs-toggle="tooltip" data-bs-original-title="Preview product">
                          <i class="fas fa-pencil-square text-secondary"></i>
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

<?php echo $__env->make('wbxadmin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/qotz/resources/views/wbxadmin/organizations/index.blade.php ENDPATH**/ ?>