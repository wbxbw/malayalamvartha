<footer class="footer-background">
    <div class="container">
      <hr class="hr-bottom" />
      <br />
      <div class="row text-nowrap">
      <?php $__currentLoopData = $footerContents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $footerContent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-2">
          <ul class="footer-ul">
          <li class="li-title"><?php echo e($footerContent->name); ?></li>
            <?php $footerlinks = DB::table('sections')->where('content_id', $footerContent->id)->get(); ?>
            <?php $__currentLoopData = $footerlinks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $footerlink): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><a href="<?php echo e($footerlink->description); ?>"><?php echo e($footerlink->name); ?></a></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul>
        </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <hr class="hr-bottom" />
      <div class="copyright-2023-croma-all-rights-reserved-Yun">© Copyright 2024 luluconnect. All rights reserved</div>
    </div>
  </footer>

  <script src="<?php echo e(url('js/jquery.min.js')); ?>"></script>
  <script src="<?php echo e(url('js/owl/owl.carousel.min.js')); ?>"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
  <!-- Owl-carousel JavaScript -->
  <script src="<?php echo e(url('js/index.js')); ?>"></script>
  <!--script for Menu item dropdown-->
  <script>
    let dropdowns = document.querySelectorAll('.dropdown-toggle')
    dropdowns.forEach((dd) => {
      dd.addEventListener('click', function (e) {
        var el = this.nextElementSibling
        el.style.display = el.style.display === 'block' ? 'none' : 'block'
      })
    })
  </script>
  <!--Script for mobile sidenav-->
  <script>
    function openNav1() {
      document.getElementById("mySidenav1").style.width = "250px";
    }

    function closeNav1() {
      document.getElementById("mySidenav1").style.width = "0";
    }
  </script>
  <!--Script for desktop sidenav-->
  <script>
    function openNav() {
      document.getElementById("mySidenav").style.width = "250px";
      document.getElementById("mySidenav").style.display = "block";
    }

    function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
      document.getElementById("mySidenav").style.display = "none";
    }
  </script>
  <!--Dropdown single-->
  <script>
    /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
    var dropdown = document.getElementsByClassName("dropdown-btn");
    var i;

    for (i = 0; i < dropdown.length; i++) {
      dropdown[i].addEventListener("click", function () {
        this.classList.toggle("active");
        var dropdownContent = this.nextElementSibling;
        if (dropdownContent.style.display === "block") {
          dropdownContent.style.display = "none";
        } else {
          dropdownContent.style.display = "block";
        }
      });
    }
  </script>


<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
<script>
    $(document).ready(function() {
        const products = <?php echo json_encode($formattedProducts, 15, 512) ?>;
        const categories = <?php echo json_encode($formattedCategories, 15, 512) ?>;

        $('#search-input').on('input', function() {
            let query = $(this).val().toLowerCase();
            $('#search-results').empty();

            if (query) {
                const filteredProducts = products.filter(product => 
                    product.name.toLowerCase().includes(query) || 
                    product.category.toLowerCase().includes(query)
                );

                const filteredCategories = categories.filter(category => 
                    category.name.toLowerCase().includes(query)
                );

                if (filteredProducts.length > 0 || filteredCategories.length > 0) {
                    filteredProducts.forEach(product => {
                        $('#search-results').append(
                            `<div class="search-item dropdown-item" data-type="product" data-name="${product.name}">
                                <strong>${product.name}</strong><br>
                                <small>${product.category}</small>
                            </div>`
                        );
                    });

                    filteredCategories.forEach(category => {
                        $('#search-results').append(
                            `<div class="search-item dropdown-item" data-type="category" data-name="${category.name}">
                                <strong>${category.name}</strong><br>
                                <small>Category</small>
                            </div>`
                        );
                    });

                    $('#search-results').show();
                } else {
                    $('#search-results').append(
                        `<div class="search-item dropdown-item">
                            <strong>Item not found</strong>
                        </div>`
                    );
                    $('#search-results').show();
                }
            } else {
                $('#search-results').hide();
            }
        });

        $(document).on('click', function(event) {
            if (!$(event.target).closest('#search-container').length) {
                $('#search-results').hide();
            }
        });

        $(document).on('click', '.search-item', function() {
            var itemName = $(this).data('name');
            var itemType = $(this).data('type');
            $('#search-input').val(itemName);
            $('#search-type').val(itemType);
            $('#search-form').submit(); // Trigger form submission
        });
    });
</script>
</body>

</html>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/luluconnect/resources/views/footer.blade.php ENDPATH**/ ?>