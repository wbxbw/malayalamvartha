<?php $__env->startSection('content'); ?>


<?php

    $sections->each(function ($section) {

        $functionName = $section['function_ret'];

        if (method_exists(\App\Models\Section::class, $functionName)) {

            $id = $section['id'];

            $sectionInstance = new \App\Models\Section(); // Create an instance of Section

            $result = $sectionInstance->$functionName($id); // Call the method dynamically

            echo $result;

        }

    });

?>


<?php echo $dealofday; ?>





  <!-- <?php echo $homeText['description']; ?> -->
  

  
<?php $__env->stopSection(); ?>

  
  
  

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home4/maichavx/public_html/lulu_demo/resources/views/welcome.blade.php ENDPATH**/ ?>