
<?php $__env->startSection('content'); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.14.0/Sortable.min.js"></script>
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
            <a href="<?php echo e(route('categories.sectioncreate',['parent' => Crypt::encrypt($parentDetails->id)])); ?>" class="btn btn-primary"
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
        </div>
        <div class="sa-divider"></div>
        <form id="orderForm" method="POST" action="<?php echo e(route('updateCatOrderRoute')); ?>">
        <?php echo csrf_field(); ?>
        <table
          class="sa-datatables-init"
          data-sa-search-input="#table-search" id="myTable"
              >
          <thead>
          <tr>
              <th class="w-min" data-orderable="false">No</th>
              <th class="" data-orderable="false">Section Name</th>
              <th class="" data-orderable="false">Section Type</th>
              <th data-orderable="false">Order</th>
              <th class="w-min" data-orderable="false">Status</th>
              <th class="w-min" data-orderable="false">Action</th>
              <th class="">#</th>
            </tr>
          </thead>
          <tbody>
          <?php $__currentLoopData = $sections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $section): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr class="sortable-row">
              <td class="slno"><?php echo e($loop->iteration); ?></td>
              <td><a href="<?php echo e(route('categories.sectionedit',Crypt::encrypt($section['id']))); ?>" class="text-reset"><?php echo e($section['name']); ?></a></td>
              <td>
                    <?php if($section['function_ret'] == 'textSection'): ?>
                        Text Section
                    <?php elseif($section['function_ret'] == 'heroSlider'): ?>
                        Hero Banner
                    <?php elseif($section['function_ret'] == 'twoSectionSlider' || $section['function_ret'] == 'threeSectionSlider'): ?>
                        2 Col Banner - Carousel
                    <?php elseif($section['function_ret'] == 'twoSectionSliderFixed' || $section['function_ret'] == 'threeSectionSliderFixed' || $section['function_ret'] == 'fourSectionSliderFixed' || $section['function_ret'] == 'sixSectionSliderFixed'): ?>
                        2 Col Banner - Featured
                    <?php elseif($section['function_ret'] == 'yellowRoundSlider'): ?>
                        9 Col Banner - Yellow
                    <?php else: ?>
                        Field for selected section type not defined.
                    <?php endif; ?>
                </td>
              <input type="hidden" name="order[]" value="<?php echo e($section['id']); ?>" data-id="<?php echo e($section['id']); ?>">
              <td><?php echo e($loop->iteration); ?></td>
              <td>
                <?php if($section['status'] == 'N'): ?>
                <div class="badge badge-sa-danger">Disabled</div>
                <?php endif; ?>
                <?php if($section['status'] == 'Y'): ?>
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
                      <a class="dropdown-item" href="<?php echo e(route('categories.sectionedit',Crypt::encrypt($section['id']))); ?>">Edit</a>
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
              <td class="sortable-handle">&#9776;</td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tbody>
        </table>
        </form>
      </div>
    </div>
  </div>
</div>
<script>
  document.addEventListener('DOMContentLoaded', function () {
      var table = document.getElementById('myTable').getElementsByTagName('tbody')[0];
      new Sortable(table, {
          handle: '.sortable-handle', // Ensure there's a handle if needed, or remove this line if the whole row is draggable
          animation: 150,
          onEnd: function (evt) {
              updateOrder();
              submitForm();
          }
      });
  });

  function updateOrder() {
    var rows = document.querySelectorAll('#myTable .sortable-row');
    rows.forEach(function (row, index) {
        // Update the displayed number in the No column
        var slnoCell = row.querySelector(".slno");
        slnoCell.textContent = index + 1;

        // Update the hidden input for order
        var orderInput = row.querySelector("input[name='order[]']");
        if (orderInput) {
            orderInput.value = orderInput.dataset.id; // Use the data-id as the value
        }
    });
}
  function submitForm() {
      var form = document.getElementById('orderForm'); // Make sure the ID matches your form
      form.submit(); // Submit the form programmatically
  }
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('wbxadmin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/luluconnect/resources/views/wbxadmin/categories/section.blade.php ENDPATH**/ ?>