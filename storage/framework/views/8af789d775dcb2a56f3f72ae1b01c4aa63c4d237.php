<?php $__env->startSection('title','Administrator Dashboard || E-commerce List Brands'); ?>
<?php $__env->startSection('content'); ?>
<div id="top" class="sa-app__body">
  <div class="mx-sm-2 px-2 px-sm-3 px-xxl-4 pb-6">
    <div class="container">
      <div class="py-5">
        <div class="row g-4 align-items-center">
          <div class="col">
            <nav class="mb-2" aria-label="breadcrumb">
              <ol class="breadcrumb breadcrumb-sa-simple">
                <li class="breadcrumb-item">
                  <a href="index.html">Dashboard</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  Brands
                </li>
              </ol>
            </nav>
            <h1 class="h3 m-0">Brands</h1>
          </div>
          <div class="col-auto d-flex">
            <a href="<?php echo e(route('brands.create')); ?>" class="btn btn-primary"
              >New Brand</a
            >
          </div>
        </div>
      </div>
      <div class="card">
        <div class="p-4">
          <input
            type="text"
            placeholder="Start typing to search for customers"
            class="form-control form-control--search mx-auto"
            id="table-search"
          />
        </div>
        <div class="sa-divider"></div>
        <table
          class="sa-datatables-init"
          data-order='[[ 1, "asc" ]]'
          data-sa-search-input="#table-search"
        >
          <thead>
            <tr>
<th>#</th>
              <th class="min-w-20x">Brand Name</th>

              <th>Image</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
          <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>

                <td><?php echo e($loop->iteration); ?></td>
              <td>
                <div class="d-flex align-items-center">
                  <a href="#" class="text-reset"><?php echo e($brand['name']); ?></a>
                </div>
              </td>

                <td>

                    <img
                        src="<?php echo e(asset('storage/'.$brand['image'])); ?>"
                        style="height:40px;width:auto"
                        alt=""
                    />

                </td>


                <td>
                    <div class="dropdown">
                      <button class="btn btn-sa-muted btn-sm" type="button" id="customer-context-menu-0" data-bs-toggle="dropdown" aria-expanded="false" aria-label="More">
                        <svg xmlns="http://www.w3.org/2000/svg" width="3" height="13" fill="currentColor">
                          <path d="M1.5,8C0.7,8,0,7.3,0,6.5S0.7,5,1.5,5S3,5.7,3,6.5S2.3,8,1.5,8z M1.5,3C0.7,3,0,2.3,0,1.5S0.7,0,1.5,0 S3,0.7,3,1.5S2.3,3,1.5,3z M1.5,10C2.3,10,3,10.7,3,11.5S2.3,13,1.5,13S0,12.3,0,11.5S0.7,10,1.5,10z"></path>
                        </svg>
                      </button>
                      <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="customer-context-menu-0">
                        <li>
                          <a class="dropdown-item" href="<?php echo e(route('brands.edit',Crypt::encrypt($brand['id']))); ?>">Edit</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#">Duplicate</a>
                        </li>
                        <li>
                          <hr class="dropdown-divider" />
                        </li>
                        <li>
                          <a class="dropdown-item text-danger" href="#">Delete</a>
                        </li>
                      </ul>
                    </div>
                  </td>


            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('wbxadmin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\saswa\Downloads\ecommerceadmin\ecommerceadmin\resources\views/wbxadmin/brands/index.blade.php ENDPATH**/ ?>