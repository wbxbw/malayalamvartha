
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
                <a href="route('wbxadmin')">Dashboard</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo e($moduleDetails->name); ?></li>
              </ol>
            </nav>
            <h1 class="h3 m-0"><?php echo e($pageDetails->name); ?></h1>
          </div>
          <div class="col-auto d-flex">
            <a href="<?php echo e(route('products.create')); ?>" class="btn btn-primary">Add News</a>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="p-4">
          <input
            type="text"
            placeholder="Start typing to search for news"
            class="form-control form-control--search mx-auto"
            id="table-search"
          />
        </div>
        <div class="sa-divider"></div>
        <table
          class="sa-datatables-init"
          data-sa-search-input="#table-search">
          <thead>
            <tr>
              <th class="w-min" data-orderable="false">No</th>
              <th class="min-w-20x">News Title</th>
              <th>Categories</th>
              <th>Tags</th>
              <th class="w-min">Status</th>
              <th>Published</th>
              <th class="w-min" data-orderable="false"></th>
            </tr>
          </thead>
          <tbody>
          <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
              <td><?php echo e($loop->iteration); ?></td>
              <td>
                <div class="d-flex align-items-center">
                  <a href="<?php echo e(route('products.edit',Crypt::encrypt($product['id']))); ?>" class="me-4"><div class="sa-symbol sa-symbol--shape--rounded sa-symbol--size--lg" >
                    <?php if($product->images->isNotEmpty()): ?>
                      <img src="<?php echo e(url('img/articles/products/'.$product->images->first()->image)); ?>" width="40" height="40" alt=""/>
                    <?php else: ?>
                      <img src="<?php echo e(url('sample/imgpreview.png')); ?>" width="40" height="40" alt=""/>
                    <?php endif; ?>

                    </div></a> 
                  <div>
                    <a href="<?php echo e(route('products.edit',Crypt::encrypt($product['id']))); ?>" class="text-reset"><?php echo e($product['name']); ?></a>
                    <div class="sa-meta mt-0">
                      <ul class="sa-meta__list">
                        <li class="sa-meta__item">
                          Published: <span class="st-copy"><?php echo e(date('d-M-Y', strtotime($product['created_at']))); ?></span>
                        </li>
                        <li class="sa-meta__item">
                          Updated: <span class="st-copy"><?php echo e(date('d-M-Y', strtotime($product['updated_at']))); ?></span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </td>
              <td><a href="#" class="text-reset"><?php echo e($product->categories); ?></a></td>
              <td><a href="#" class="text-reset-sa-danger"><?php echo e($product->tags); ?></a></td>
              <td>
                <?php if($product['status'] == 'N'): ?>
                <div class="badge badge-sa-danger">Disabled</div>
                <?php endif; ?>
                <?php if($product['status'] == 'Y'): ?>
                 <div class="badge badge-sa-success">Active</div>
                <?php endif; ?>
              </td>
              <td>
                <div class="sa-price">
                  <span class="sa-price__integer"><?php echo e(date('d-M-Y', strtotime($product['created_at']))); ?></span>
                </div>
              </td>
              <!-- <td>
                <a href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="black" class="bi bi-view-list" viewBox="0 0 16 16">
                    <path d="M3 4.5h10a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1H3zM1 2a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13A.5.5 0 0 1 1 2zm0 12a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13A.5.5 0 0 1 1 14z" />
                  </svg>
                </a>
              </td> -->
              <td>
                <div class="dropdown">
                  <button class="btn btn-sa-muted btn-sm" type="button" id="customer-context-menu-0" data-bs-toggle="dropdown" aria-expanded="false" aria-label="More">
                    <svg xmlns="http://www.w3.org/2000/svg" width="3" height="13" fill="currentColor">
                      <path d="M1.5,8C0.7,8,0,7.3,0,6.5S0.7,5,1.5,5S3,5.7,3,6.5S2.3,8,1.5,8z M1.5,3C0.7,3,0,2.3,0,1.5S0.7,0,1.5,0 S3,0.7,3,1.5S2.3,3,1.5,3z M1.5,10C2.3,10,3,10.7,3,11.5S2.3,13,1.5,13S0,12.3,0,11.5S0.7,10,1.5,10z"></path>
                    </svg>
                  </button>
                  <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="customer-context-menu-0">
                    <li>
                      <a class="dropdown-item" href="<?php echo e(route('products.edit',Crypt::encrypt($product['id']))); ?>">Edit</a>
                    </li>
                    <!-- <li>
                      <a class="dropdown-item" href="#">Duplicate</a>
                    </li>
                    <li>
                      <hr class="dropdown-divider" />
                    </li>
                    <li>
                      <a class="dropdown-item text-danger" href="#">Delete</a>
                    </li> -->
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

<?php echo $__env->make('wbxadmin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/newsportal/resources/views/wbxadmin/products/index.blade.php ENDPATH**/ ?>