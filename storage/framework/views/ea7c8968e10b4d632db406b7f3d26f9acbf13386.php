 <?php $__env->startSection('title', 'CT News | Home Page'); ?> <?php $__env->startSection('content'); ?>
<!-- Slider Start -->
<div class="main-content--section pbottom--30">
    <div class="container-fluid">
        <div class="row">
            <div class="main--content col-md-12 col-sm-12" data-sticky-content="true">
                <div class="sticky-content-inner">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="post--items-title" data-ajax="tab">
                                <h1 class="inner-head"><?php echo e($category->name); ?></h1>
                            </div>
                            <div class="list-news-click">
                                <ul>
                                    <?php $__currentLoopData = $category->subCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><a href="<?php echo e(route('home.newsinglev2',$category->link)); ?>"><?php echo e($subCategory->name); ?></a></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>

                            </div>
                            <!-- <div class="banner-image-container">
                                <img class="img-fluid" src="<?php echo e(url('img/latest-image/world-cup.webp')); ?>" alt="">
                            </div> -->
                        </div>
                        <?php echo $catNews; ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="main-content--section pbottom--30">
   <div class="container-fluid">
      
      <div class="row">
         <div class="main--content col-md-8 col-sm-7" data-sticky-content="true">
            <div class="sticky-content-inner">
               <div class="row">
                  <?php echo $politicsNews; ?>

                  <?php echo $techNews; ?>


                  <div class="col-md-12 ptop--30 pbottom--30">
                     <div class="post--items-title" data-ajax="tab">
                        <h2 class="h4">Finance</h2>
                     </div>
                     <div class="post--items post--items-2" data-ajax-content="outer">
                        <ul class="nav row" data-ajax-content="inner">
                           
                           <li class="col-md-6">
                              <ul class="nav row">
                                 <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $newsingle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                 <?php if($index % 2 == 0 && $index > 1): ?>
                                 <li class="col-xs-12">
                                    <hr class="divider">
                                 </li>
                                 <?php endif; ?>
                                 <li class="col-xs-6">
                                    <div class="post--item post--layout-2">
                                       <div class="post--img">
                                          <a href="<?php echo e(route ('home.newsinglev1',$newsingle->link)); ?>" class="thumb"><img src="<?php echo e(url('img/articles/products/'.$newsingle->images->first()->image)); ?>" alt=""></a> 
                                          <div class="post--info">
                                             <ul class="nav meta">
                                                <li><a href="#">Zepar</a></li>
                                                <li><a href="#">Today 03:52 pm</a></li>
                                             </ul>
                                             <div class="title">
                                                <h3 class="h4"><a href="<?php echo e(route ('home.newsinglev1',$newsingle->link)); ?>" class="layou_text"><?php echo $newsingle->name; ?></a></h3>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </li>
                                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              </ul>
                           </li>
                        </ul>
                        <div class="preloader bg--color-0--b" data-preloader="1">
                           <div class="preloader--inner"></div>
                        </div>
                     </div>
                  </div>
                  
                  
               </div>
            </div>
         </div>
         <div class="main--sidebar col-md-4 col-sm-5 ptop--30 pbottom--30" data-sticky-content="true">
            <div class="sticky-content-inner">
               <!-- <div class="widget">
                  <div class="ad--widget"> <a href="#"> <img src="img/ads-img/ad-300x250-1.jpg" alt=""> </a> </div>
                  </div> -->
               <div class="widget">
                  <div class="widget--title">
                     <h2 class="h4">Recommended for you</h2>
                     <i class="icon fa fa-newspaper-o"></i> 
                  </div>
                  <div class="list--widget list--widget-1">
                     <div class="post--items post--items-3" data-ajax-content="outer">
                        <ul class="nav" data-ajax-content="inner">
                           <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $newsingle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <li>
                              <div class="post--item post--layout-3">
                                 <div class="post--img">
                                    <a href="<?php echo e(route ('home.newsinglev1',$newsingle->link)); ?>" class="thumb"><img src="<?php echo e(url('img/articles/products/'.$newsingle->images->first()->image)); ?>" alt=""></a> 
                                    <div class="post--info">
                                       <div class="title">
                                          <h3 class="h4"><a href="<?php echo e(route ('home.newsinglev1',$newsingle->link)); ?>" class="layou_text"><?php echo $newsingle->name; ?></a></h3>
                                       </div>
                                       <ul class="nav meta mt-5">
                                          <li><a href="#">Politics News</a></li>
                                          <li><a href="#">Today 03:45 pm</a></li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                        <div class="preloader bg--color-0--b" data-preloader="1">
                           <div class="preloader--inner"></div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="widget">
                  <div class="widget--title">
                     <h2 class="h4">Advertisement</h2>
                     <i class="icon fa fa-bullhorn"></i> 
                  </div>
                  <div class="ad--widget"> <a href="#"> <img src="img/ads-img/ad-300x250-2.jpg" alt=""> </a> </div>
               </div>
            </div>
         </div>
      </div>
      <div class="ad--space pd--30-0"> <a href="#"> <img src="img/ads-img/ad-970x90.jpg" alt="" class="center-block"> </a> </div>
      
   </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/newsportal/resources/views/newsinglev2.blade.php ENDPATH**/ ?>