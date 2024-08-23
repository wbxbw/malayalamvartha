
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
            <a href="<?php echo e(route('contents.sectioncreate',['parent' => Crypt::encrypt($parentDetails->id)])); ?>" class="btn btn-primary"
              >New Section</a
            >
          </div>
        </div>
      </div>
      <div class="card">
        <div class="p-4">
        <div class="mb-5">
            <h2 class="mb-0 fs-exact-18"><?php echo e($parentDetails->name); ?> / Sections</h2>
        </div>
          <input type="text" placeholder="Start typing to search for sections" class="form-control form-control--search mx-auto" id="table-search"/>
        </div>
        <div class="sa-divider"></div>
        
        <table
          class="sa-datatables-init"
          data-sa-search-input="#table-search"
              >
          <thead>
          <tr>
            <th class="w-min" data-orderable="false">No</th>
            <th class="">Section Name</th>
            <th >Order</th>
            <th class="w-min">Status</th>
            <th class="w-min" data-orderable="false"></th>
          </tr>
          </thead>
          <tbody>
          <?php $__currentLoopData = $contents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $content): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
              <td><?php echo e($loop->iteration); ?></td>
              <td><?php echo e($content['name']); ?></td>
              <td><?php echo e($loop->iteration); ?></td>
              <td>
                <?php if($content['status'] == 'N'): ?>
                <div class="badge badge-sa-danger">Disabled</div>
                <?php endif; ?>
                <?php if($content['status'] == 'Y'): ?>
                 <div class="badge badge-sa-success">Active</div>
                <?php endif; ?>
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
                      <a class="dropdown-item" href="<?php echo e(route('contents.sectionedit',Crypt::encrypt($content['id']))); ?>">Edit</a>
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

<?php echo $__env->make('wbxadmin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home4/maichavx/public_html/lulu_demo/resources/views/wbxadmin/contents/section.blade.php ENDPATH**/ ?>