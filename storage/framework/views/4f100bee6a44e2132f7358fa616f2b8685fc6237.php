 <?php $__env->startSection('title','Ct News'); ?> 
<?php $__env->startSection('content'); ?>

<?php
      $publishedTime = new DateTime($news['created_at']);
      $now = new DateTime();

      $diff = $now->diff($publishedTime);
      $daysDiff = $diff->days;

      if ($daysDiff === 0) {
         $time_crt = 'Today ' . $publishedTime->format('h:i A');
      } elseif ($daysDiff === 1) {
         $time_crt = 'Yesterday ' . $publishedTime->format('h:i A');
      } else {
         $time_crt = $publishedTime->format('d-m-Y');
      }
?>
<!-- Section Start  -->
<div class="main-content--section pbottom--30">
   <div class="container-fluid">
      <div class="row">
         <div class="main--content col-md-12" data-sticky-content="true">
            <div class="sticky-content-inner">
               <div class="post--item post--single post--title-largest">
                  <div class="post--info">
                     <div class="title">
                        <h1 class="inner-head">Movies News</h1>
                        <h1 class="h4"><?php echo $news['name']; ?>

                        </h1>
                     </div>
                  </div>
                  <div class="post--cats">
                     <ul class="nav">
                        <li>
                           <span><i class="fa fa-folder-open-o"></i></span>
                        </li>
                        <li><a href="#">Fashion</a></li>
                        <li><a href="#">Travel</a></li>
                        <li><a href="#">Fitness</a></li>
                        <li><a href="#">Music</a></li>
                     </ul>
                  </div>
                  <div class="post--info">
                     <ul class="nav meta">
                        <li><a href="#">Author : Daya Hameed,</a></li>
                        <li><a href="#">Published : <?php echo e($time_crt); ?></a></li>
                        <!-- <li>
                           <span><i class="fa fm fa-eye"></i>45k</span>
                        </li>
                        <li>
                           <a href="#"><i class="fa fm fa-comments-o"></i>02</a>
                        </li> -->
                     </ul>
                  </div>
                  <div class="post--content">
                     <div class="inner-img">
                        <img class="img-fluid w-100" src="<?php echo e(url('img/articles/products/'.$images->image)); ?> " alt="inner-image">
                     </div>
                     <?php echo $news['long_description']; ?>

                  </div>
               </div>
               <div class="ad--space pd--20-0-40">
                  <a href="#">
                  <img src="img/ads-img/ad-728x90-02.jpg" alt="" class="center-block" />
                  </a>
               </div>
               <div class="post--tags">
                  <ul class="nav">
                     <li>
                        <span><i class="fa fa-tags"></i></span>
                     </li>
                     <li><a href="#">Fashion</a></li>
                     <li><a href="#">News</a></li>
                     <li><a href="#">Image</a></li>
                     <li><a href="#">Music</a></li>
                     <li><a href="#">Video</a></li>
                     <li><a href="#">Audio</a></li>
                     <li><a href="#">Latest</a></li>
                     <li><a href="#">Trendy</a></li>
                     <li><a href="#">Special</a></li>
                     <li><a href="#">Recipe</a></li>
                  </ul>
               </div>
               <div class="post--social pbottom--30">
                  <span class="title"><i class="fa fa-share-alt"></i></span>
                  <div class="social--widget style--4">
                     <ul class="nav">
                        <li>
                           <a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li>
                           <a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li>
                           <a href="#"><i class="fa fa-google-plus"></i></a>
                        </li>
                        <li>
                           <a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                        <li>
                           <a href="#"><i class="fa fa-rss"></i></a>
                        </li>
                        <li>
                           <a href="#"><i class="fa fa-youtube-play"></i></a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>

         
         
      </div>
   </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/newsportal/resources/views/newsinglev1.blade.php ENDPATH**/ ?>