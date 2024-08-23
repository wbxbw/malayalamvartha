
<?php $__env->startSection('content'); ?>
<div class="row">
  <div class="col-12">
      <div class="card">
        <div class="card-header pb-0">
            <div class="d-lg-flex">
              <div>
                  <h5 class="mb-0">All Products</h5>
                  <p class="text-sm mb-0">
                    List down all products.
                  </p>
              </div>
              <div class="ms-auto my-auto mt-lg-0 mt-4">
                  <div class="ms-auto my-auto">
                    <a href="<?php echo e(route('products.create')); ?>" class="btn bg-gradient-primary btn-sm mb-0" >+&nbsp; New Product</a>
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
                        <th>Product</th>
                        <th>Category</th>
                        <th>Sub Category</th>
                        <!-- <th>Status</th> -->
                        <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                   <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="text-sm"><?php echo e($loop->iteration); ?></td>
                        <td>
                          <a href="<?php echo e(route('products.edit',Crypt::encrypt($product['id']))); ?>">
                          <div class="d-flex">
                              <h6 class="ms-3 my-auto"><?php echo e($product['name']); ?></h6>
                          </div>
                          </a>
                        </td>
                        <td class="text-sm"><?php echo e($product->category); ?></td>
                        <td class="text-sm"><?php echo e($product->sub_category); ?></td>
                        <!-- <td>
                          <?php if($product->status == 'Y'): ?>
                          <span class="badge badge-success badge-sm">Active</span>
                          <?php elseif($product->status == 'N'): ?>
                          <span class="badge badge-danger badge-sm">Inactive</span>
                          <?php endif; ?>
                        </td> -->
                        <td class="text-sm">
                          <a href="javascript:;" data-bs-toggle="tooltip" data-bs-original-title="Preview product">
                          <i class="fas fa-eye text-secondary"></i>
                          </a>
                          <a href="<?php echo e(route('products.edit',Crypt::encrypt($product['id']))); ?>" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Edit product">
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
                        <th>Sl</th>
                        <th>Product</th>
                        <th>Category</th>
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

<?php echo $__env->make('wbxadmin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/qotz/resources/views/wbxadmin/products/index.blade.php ENDPATH**/ ?>