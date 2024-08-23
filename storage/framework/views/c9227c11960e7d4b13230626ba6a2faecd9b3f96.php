<footer class="footer pt-3  ">
    <div class="container-fluid">
      <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6 mb-lg-0 mb-4">
            <div class="copyright text-center text-sm text-muted text-lg-start">
                © <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>
                  document.write(new Date().getFullYear())
                </script>,
                made with <i class="fa fa-heart"></i> by
                <a href="#" class="font-weight-bold" target="_blank">Qotz Application</a>
                for a better web.
            </div>
          </div>
          <div class="col-lg-6">
            <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                  <a href="#" class="nav-link text-muted" target="_blank">Terms</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link text-muted" target="_blank">Conditions</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link text-muted" target="_blank">Privacy</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link pe-0 text-muted" target="_blank">Declaration</a>
                </li>
            </ul>
          </div>
      </div>
    </div>
</footer>
</div>
</main>
<script src="<?php echo e(url('admin/assets/js/core/popper.min.js')); ?>"></script>
<script src="<?php echo e(url('admin/assets/js/core/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(url('admin/assets/js/plugins/perfect-scrollbar.min.js')); ?>"></script>
<script src="<?php echo e(url('admin/assets/js/plugins/smooth-scrollbar.min.js')); ?>"></script>
<script src="<?php echo e(url('admin/assets/js/plugins/dragula/dragula.min.js')); ?>"></script>
<script src="<?php echo e(url('admin/assets/js/plugins/jkanban/jkanban.js')); ?>"></script>
<script src="<?php echo e(url('admin/assets/js/plugins/chartjs.min.js')); ?>"></script>
<script>
var ctx1 = document.getElementById("chart-line").getContext("2d");

var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

gradientStroke1.addColorStop(1, 'rgba(94, 114, 228, 0.2)');
gradientStroke1.addColorStop(0.2, 'rgba(94, 114, 228, 0.0)');
gradientStroke1.addColorStop(0, 'rgba(94, 114, 228, 0)');
new Chart(ctx1, {
type: "line",
data: {
  labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
  datasets: [{
    label: "Mobile apps",
    tension: 0.4,
    borderWidth: 0,
    pointRadius: 0,
    borderColor: "#5e72e4",
    backgroundColor: gradientStroke1,
    borderWidth: 3,
    fill: true,
    data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
    maxBarThickness: 6

  }],
},
options: {
  responsive: true,
  maintainAspectRatio: false,
  plugins: {
    legend: {
      display: false,
    }
  },
  interaction: {
    intersect: false,
    mode: 'index',
  },
  scales: {
    y: {
      grid: {
        drawBorder: false,
        display: true,
        drawOnChartArea: true,
        drawTicks: false,
        borderDash: [5, 5]
      },
      ticks: {
        display: true,
        padding: 10,
        color: '#fbfbfb',
        font: {
          size: 11,
          family: "Open Sans",
          style: 'normal',
          lineHeight: 2
        },
      }
    },
    x: {
      grid: {
        drawBorder: false,
        display: false,
        drawOnChartArea: false,
        drawTicks: false,
        borderDash: [5, 5]
      },
      ticks: {
        display: true,
        color: '#ccc',
        padding: 20,
        font: {
          size: 11,
          family: "Open Sans",
          style: 'normal',
          lineHeight: 2
        },
      }
    },
  },
},
});
</script>
<script>
var win = navigator.platform.indexOf('Win') > -1;
if (win && document.querySelector('#sidenav-scrollbar')) {
var options = {
  damping: '0.5'
}
Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
}
</script>
<script async defer src="<?php echo e(url('admin/assets/js/buttons.js')); ?>"></script>
<script src="<?php echo e(url('admin/assets/js/argon-dashboard.min9c7f.js?v=2.0.5')); ?>"></script>
<script src="<?php echo e(url('admin/summernote/9556cd6744b0b19628598270bd385082cda6a269.js')); ?>"></script>
<script src="<?php echo e(url('admin/summernote/4d1a036b76aac76cf6eb934f143fb4fb9f41835e.js')); ?>"></script>
<script>
    $(document).ready(function() {
        $('#editor1').summernote({
            height: 500
        });
        $('#editor2').summernote({
            height: 500
        });
    });
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"8a723f646bfba8f9","version":"2024.7.0","serverTiming":{"name":{"cfL4":true}},"token":"1b7cbb72744b40c580f8633c6b62637e","b":1}' crossorigin="anonymous"></script>
</body>
</html>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/qotz/resources/views/wbxadmin/footer.blade.php ENDPATH**/ ?>