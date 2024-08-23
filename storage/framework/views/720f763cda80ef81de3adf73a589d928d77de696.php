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
            <a href="<?php echo e(route('users.create')); ?>" class="btn btn-primary">New Administrator</a>
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
          data-sa-search-input="#table-search"
        >
          <thead>
            <tr>
              <th>No</th>
              <th class="min-w-20x">Name</th>
              <th>Admin Type</th>
              <th class="w-min" >Status</th>
              <th class="w-min" >Edit Permission</th>
              <th class="w-min" >Reset Password</th>
              <th class="w-min" >Edit</th>
              <th class="w-min" data-orderable="false"></th>
            </tr>
          </thead>
          <tbody>

            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
              <td>
                <?php echo e($loop->iteration); ?>

              </td>
              <td>
                <div class="d-flex align-items-center">
                  <div>
                    <a href="<?php echo e(route('users.edit',Crypt::encrypt($user['id']))); ?>" class="text-reset"
                      ><?php echo e($user['name']); ?></a
                    >
                    <div class="text-muted mt-n1">
                    <?php echo e($user['email']); ?>

                    </div>
                  </div>
                </div>
              </td>
              <td>
                <?php echo e($user->type); ?>

              </td>
              <td>
                <?php if($user->status == 'Y'){?>
                 <div class="badge badge-sa-success">Active</div>
                <?php } ?>
                <?php if($user->status == 'N'){ ?>
                 <div class="badge badge-sa-danger">Disabled</div>
                <?php } ?>
              </td>
              <td>
              <a href="<?php echo e(route('users.permission',Crypt::encrypt($user['id']))); ?>"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="blackr" class="bi bi-pencil-square" viewBox="0 0 16 16">
              <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
              <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
              </svg></a>
              </td>
              <td class="text-nowrap ">
                  <a href="<?php echo e(route('users.reset',Crypt::encrypt($user['id']))); ?>"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="blackr" class="bi bi-lock" viewBox="0 0 16 16">
                  <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2zM5 8h6a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1z"/>
                </svg></a>
              </td>
              
              
              <td>
              <a href="<?php echo e(route('users.edit',Crypt::encrypt($user['id']))); ?>"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="blackr" class="bi bi-pencil-square" viewBox="0 0 16 16">
              <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
              <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
              </svg></a>
              </td>
              <td>
                <div class="dropdown">
                  <button
                    class="btn btn-sa-muted btn-sm"
                    type="button"
                    id="customer-context-menu-0"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                    aria-label="More"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="3"
                      height="13"
                      fill="currentColor"
                    >
                      <path
                        d="M1.5,8C0.7,8,0,7.3,0,6.5S0.7,5,1.5,5S3,5.7,3,6.5S2.3,8,1.5,8z M1.5,3C0.7,3,0,2.3,0,1.5S0.7,0,1.5,0 S3,0.7,3,1.5S2.3,3,1.5,3z M1.5,10C2.3,10,3,10.7,3,11.5S2.3,13,1.5,13S0,12.3,0,11.5S0.7,10,1.5,10z"
                      ></path>
                    </svg>
                  </button>
                  <ul
                    class="dropdown-menu dropdown-menu-end"
                    aria-labelledby="customer-context-menu-0"
                  >
                    <li><a class="dropdown-item" href="<?php echo e(route('users.edit',Crypt::encrypt($user['id']))); ?>">Edit</a></li>
                    <li>
                      <a class="dropdown-item text-danger" href="#"
                        >Delete</a
                      >
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

<?php echo $__env->make('wbxadmin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/luluconnect/resources/views/wbxadmin/users/index.blade.php ENDPATH**/ ?>