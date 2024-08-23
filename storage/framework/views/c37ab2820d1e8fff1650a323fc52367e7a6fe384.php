<footer class="footer-background">
    <div class="container"> 
      <hr class="hr-bottom" />
      <br />
      <div class="row text-nowrap">
        <div class="col-md-2">
          <ul class="footer-ul">
            <li class="li-title">Shop</li>
            <li>Mobile & Tablets</li>
            <li>Laptops & Computers</li>
            <li>Offers</li>
            <li>Blogs</li>
          </ul>
        </div>
        <div class="col-md-2">
          <ul class="footer-ul">
            <li class="li-title">Home Appliances</li>
            <li>Kitchen Appliances</li>
            <li>Bedroom Electronics</li>
            <li>Personal Choices</li>
            <li>Washing Machine</li>
            <li>Mixer</li>
            <li>Micro Oven</li>
            <li>Latest Products</li>
            <li>Offers</li>
          </ul>
        </div>
        <div class="col-md-2">
          <ul class="footer-ul">
            <li class="li-title">Grooming & Personal</li>
            <li>Personal Grooming</li>
            <li>Wearables</li>
            <li>Smart Watches</li>
            <li>Hair dryer</li>
            <li>Trimmer</li>
            <li>Massager</li>
          </ul>
        </div>
        <div class="col-md-2">
          <ul class="footer-ul">
            <li class="li-title">Television & Accessories</li>
            <li>Smart TV</li>
            <li>Video Game</li>
            <li>Android TV</li>
            <li>Home Theatre</li>
            <li>Sound Boxes</li>
            <li>Speakers</li>
          </ul>

        </div>
        <div class="col-md-2">
          <ul class="footer-ul">
            <li class="li-title">Outlets</li>
            <li>Ernakulam, India</li>
            <li>Singapore</li>
            <li>Canada</li>
            <li>Japan</li>
            <li>Germany</li>
          </ul>

        </div>
        <div class="col-md-2">
          <ul class="footer-ul">
            <li class="li-title">Policy</li>
            <li>Privacy policy</li>
            <li>Terms & Conditions</li>
          </ul>
        </div>
      </div>
      <hr class="hr-bottom" />
      <div class="copyright-2023-croma-all-rights-reserved-Yun">© Copyright 2023 luluconnect. All rights reserved</div>
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
    }

    function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
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
</body>

</html><?php /**PATH C:\Users\saswa\Downloads\ecommerceadmin\ecommerceadmin\resources\views/footer.blade.php ENDPATH**/ ?>