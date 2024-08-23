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
            <a href="#" class="btn btn-secondary me-3">Duplicate</a
            ><a href="#" class="btn btn-primary">Save</a>
          </div>
        </div>
      </div>
      <div class="sa-entity-layout"
        data-sa-container-query='{"920":"sa-entity-layout--size--md","1100":"sa-entity-layout--size--lg"}'>
        <div class="sa-entity-layout__body">
          <div class="sa-entity-layout__main">
            <div class="card mt-5">
                <div class="card-body p-5">
                <div class="mb-5">
                  <h2 class="mb-0 fs-exact-18">Edit Module</h2>
                </div>
                <form action="<?php echo e(route('modules.update', $module['id'])); ?>" method="post">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                  <div class="form-colum">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="mb-4">
                                <label for="first-name" class="form-label">Module Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="<?php echo e($module['name']); ?>" />
                              </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="mb-4">
                                <label for="last-name" class="form-label">Module Title</label>
                                <input type="text" class="form-control" id="title" name="title" value="<?php echo e($module['title']); ?>" />
                              </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="mb-4">
                                <label for="username" class="form-label">Module Icon</label>
                                <input type="text" class="form-control" id="icon" name="icon" value="<?php echo e($module['icon']); ?>" />
                              </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="mb-4">
                                <label for="password" class="form-label">Module Image</label>
                                <input type="text" class="form-control" id="image" name="image" value="<?php echo e($module['image']); ?>" />
                              </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="mb-4">
                                <label for="password" class="form-label">Module Order</label>
                                <input type="text" class="form-control" id="order" name="order" value="<?php echo e($module['order']); ?>" />
                              </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="mb-4">
                                <label for="password" class="form-label">Module Status</label>
                                <input type="text" class="form-control" id="status" name="status" value="<?php echo e($module['status']); ?>" />
                              </div>
                        </div>
                    </div>        
                  </div>
                  
                  <div class=" d-flex justify-content-end mt-5">
                    <input type="submit" class="btn btn-secondary me-3" name="Save"/>
                    <a href="#" class="btn btn-primary">Cancel</a>
                  </div>
                </form>

                </div>
              </div>
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
              <th class="w-min" data-orderable="false">
                <input
                  type="checkbox"
                  class="form-check-input m-0 fs-exact-16 d-block"
                  aria-label="..."
                />
              </th>
              <th class="min-w-10x">Page Name</th>
              <th>Title</th>
              <th>Menu Display</th>
              <th>Default</th>
              <th>View</th>
              <th>Add</th>
              <th>Edit</th>
              <th>Delete</th>
              <th>Status</th>
              <th class="w-min" data-orderable="false"></th>
            </tr>
          </thead>
          <tbody>
          <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
              
              <td>
                <input
                  type="checkbox"
                  class="form-check-input m-0 fs-exact-16 d-block"
                  aria-label="..."
                />
              </td>
              <td>
                <div class="d-flex align-items-center">
                  <a href="#" class="text-reset"><?php echo e($page['name']); ?></a>
                </div>
              </td>
              <td>
                <div class="d-flex align-items-center">
                  <a href="#" class="text-reset"><?php echo e($page['title']); ?></a>
                </div>
              </td>

              <td>
                <div class="d-flex align-items-center">
                  <a href="#" class="text-reset"><?php echo e($page['menu_display']); ?></a>
                </div>
              </td>

              <td>
                <div class="d-flex align-items-center">
                  <a href="#" class="text-reset"><?php echo e($page['menu_default']); ?></a>
                </div>
              </td>

              <td>
                <div class="d-flex align-items-center">
                  <a href="#" class="text-reset"><?php echo e($page['view']); ?></a>
                </div>
              </td>

              <td>
                <div class="d-flex align-items-center">
                  <a href="#" class="text-reset"><?php echo e($page['add']); ?></a>
                </div>
              </td>

              <td>
                <div class="d-flex align-items-center">
                  <a href="#" class="text-reset"><?php echo e($page['edit']); ?></a>
                </div>
              </td>
              

              <td>
                <div class="d-flex align-items-center">
                  <a href="#" class="text-reset"><?php echo e($page['delete']); ?></a>
                </div>
              </td>

              <td>
                <div class="d-flex align-items-center">
                  <a href="#" class="text-reset"><?php echo e($page['status']); ?></a>
                </div>
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
                    <li><a class="dropdown-item" href="<?php echo e(route('modules.edit',$module['id'])); ?>">Edit</a></li>
                    <li>
                      <a class="dropdown-item" href="#">Duplicate</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">Add tag</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">Remove tag</a>
                    </li>
                    <li><hr class="dropdown-divider" /></li>
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




      <div class="sa-entity-layout"
        data-sa-container-query='{"920":"sa-entity-layout--size--md","1100":"sa-entity-layout--size--lg"}'>
        <div class="sa-entity-layout__body">
          <div class="sa-entity-layout__main">
            <div class="card mt-5">
                <div class="card-body p-5">
                <div class="mb-5">
                  <h2 class="mb-0 fs-exact-18">Add Page</h2>
                </div>
                <form action="<?php echo e(route('modules.page_store', $module['id'])); ?>" method="post">
                <?php echo csrf_field(); ?>
                  <div class="form-colum">
                    <div class="row">
                        <div class="col-lg-4 col-md-4">
                            <div class="mb-4">
                                <label for="first-name" class="form-label">Page Name</label>
                                <input type="hidden" class="form-control" id="module_id" name="module_id" value="<?php echo e($module['id']); ?>" />
                                <input type="text" class="form-control" id="name" name="name" />
                              </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="mb-4">
                                <label for="last-name" class="form-label">Page Title</label>
                                <input type="text" class="form-control" id="title" name="title" />
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="mb-4">
                                <label for="username" class="form-label">Page Link</label>
                                <input type="text" class="form-control" id="link" name="link" />
                              </div>
                        </div>
                    </div>
                    <div class="row">
                        
                        <div class="col-lg-2 col-md-2">
                            <div class="mb-4">
                                <label for="password" class="form-label">Display On Menu</label>
                                <input type="checkbox" class="form-check-input" id="menu_display" name="menu_display" value="Y" />
                              </div>
                        </div>
                        <div class="col-lg-2 col-md-2">
                            <div class="mb-4">
                                <label for="password" class="form-label">Default Menu</label>
                                <input type="checkbox" class="form-check-input" id="menu_default" name="menu_default" value="Y" />
                              </div>
                        </div>
                        <div class="col-lg-2 col-md-2">
                            <div class="mb-4">
                                <label for="password" class="form-label">View</label>
                                <input type="checkbox" class="form-check-input" id="view" name="view" value="Y" />
                              </div>
                        </div>
                        <div class="col-lg-2 col-md-2">
                            <div class="mb-4">
                                <label for="password" class="form-label">Add</label>
                                <input type="checkbox" class="form-check-input" id="add" name="add" value="Y" />
                              </div>
                        </div>
                        <div class="col-lg-2 col-md-2">
                            <div class="mb-4">
                                <label for="password" class="form-label">Edit</label>
                                <input type="checkbox" class="form-check-input" id="edit" name="edit" value="Y" />
                              </div>
                        </div>
                        <div class="col-lg-2 col-md-2">
                            <div class="mb-4">
                                <label for="password" class="form-label">Delete</label>
                                <input type="checkbox" class="form-check-input" id="delete" name="delete" value="Y" />
                              </div>
                        </div>
                    </div>        
                  </div>
                  
                  <div class=" d-flex justify-content-end mt-5">
                    <input type="submit" class="btn btn-secondary me-3" name="Save"/>
                    <a href="#" class="btn btn-primary">Cancel</a>
                  </div>
                </form>

                </div>
              </div>
          </div>
        </div>
      </div>


    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('wbxadmin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\saswa\Downloads\ecommerceadmin\ecommerceadmin\resources\views/wbxadmin/modules/edit.blade.php ENDPATH**/ ?>