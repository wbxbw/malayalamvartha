<?php $__env->startSection('title', 'Malayalam Vartha Live | Home Page'); ?>
<?php $__env->startSection('content'); ?>
<!-- Slider Start -->
<div class="main-content--section pbottom--30">
   <div class="container-fluid">
      <div class="main--content mt-3">
         <div class="row custom-order">
            <div class="col-md-12">
                  <div class="post--items-title" style="padding:0px;"></div>
                  <div class="banner-image-container" style="padding-bottom:10px;">
                     <img class="img-fluid" src="<?php echo e(url('img/latest-image/world-cup.webp')); ?>" alt="">
                  </div>
            </div>
            
            <?php echo $editorsPick; ?>


            <div class="  col-md-6 col-lg-8 second-col ">
               <div class="post--items-title" data-ajax="tab">
                  <h2 class="h4">Breaking News</h2>
               </div>
               <div class="slider-container">
                  <div class="slider">
                     <?php $__currentLoopData = $homeBannerNews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $newsingle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="slide">
                           <div class="title">
                              <h2 style="margin-top:-10px;"><a href="<?php echo e(route ('home.newsinglev1',$newsingle->link)); ?>" class="btn-link"><?php echo $newsingle->name; ?></a></h2>
                           </div>
                           <div class="banner-img">
                              <a href="<?php echo e(route ('home.newsinglev1',$newsingle->link)); ?>"><img class="img-fluid" src="<?php echo e(url('img/articles/products/'.$newsingle->images->first()->image)); ?>" alt=""></a>
                           </div>
                        </div>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </div>
                  <div class="button-container">
                        <button class="button" id="prevBtn"><i class='bx bx-chevron-left'></i></button>
                        <button class="button" id="nextBtn"><i class='bx bx-chevron-right'></i></button>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="main--content col-md-8 col-sm-7" data-sticky-content="true">
            <div class="sticky-content-inner">
               <div class="row">
                  <?php echo $politicsNews; ?>

                  <?php echo $techNews; ?>


                  <?php

                     foreach($categories as $category){

                        $functionName = 'catNews2';

                        if (method_exists(\App\Models\Section::class, $functionName)) {

                              $id = $category['name'];

                              $count = 4;

                              $sectionInstance = new \App\Models\Section();

                              $result = $sectionInstance->$functionName($id, $count);

                              echo $result;

                        }

                     };

                  ?>

                  <!-- ========== -->
                  <!-- <div class="col-md-12 ptop--30 pbottom--30">
                     <div class="ad--space"> <a href="#"> <img src="img/ads-img/ad-728x90-01.jpg" alt="" class="center-block"> </a> </div>
                     </div> -->
                  
                  <div class="col-md-12 ptop--30 pbottom--30">
                     <div class="post--items-title" data-ajax="tab">
                        <h2 class="h4">Finance</h2>
                     </div>
                     <div class="post--items post--items-2" data-ajax-content="outer">
                        <ul class="nav row" data-ajax-content="inner">
                           <li class="col-md-6">
                              <div class="post--item post--layout-2">
                                 <div class="post--img">
                                    <a href="<?php echo e(route ('home.newsinglev1',$newsingle->link)); ?>" class="thumb"><img src="img/latest-image/Kasavu-mundu-SQ.avif" alt=""></a> <a href="#" class="cat">Business</a> <a href="#" class="icon"><i class="fa fa-star-o"></i></a> 
                                    <div class="post--info">
                                       <ul class="nav meta">
                                          <li><a href="#">Vassago</a></li>
                                          <li><a href="#">Today 03:30 am</a></li>
                                       </ul>
                                       <div class="title">
                                          <h3 class="h4"><a href="<?php echo e(route ('home.newsinglev1',$newsingle->link)); ?>" class="layou_text">സ്വർണ വിലയുടെ തിളക്കത്തിൽ മിന്നിത്തിളങ്ങി കസവ് സാരികളും മുണ്ടുകളും"</a></h3>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </li>
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
                  <div class="col-md-6 ptop--30 pbottom--30">
                     <div class="post--items-title" data-ajax="tab">
                        <h2 class="h4">Politics</h2>
                     </div>
                     <div class="post--items post--items-3" data-ajax-content="outer">
                        <ul class="nav" data-ajax-content="inner">
                           <li>
                              <div class="post--item post--layout-1">
                                 <div class="post--img">
                                    <a href="<?php echo e(route ('home.newsinglev1',$newsingle->link)); ?>" class="thumb"><img src="img/latest-image/pi.avif" alt=""></a> <a href="#" class="cat">Computer</a> <a href="#" class="icon"><i class="fa fa-heart-o"></i></a> 
                                    <div class="post--info">
                                       <ul class="nav meta">
                                          <li><a href="#">Bathin</a></li>
                                          <li><a href="#">Yeasterday 03:52 pm</a></li>
                                       </ul>
                                       <div class="title">
                                          <h3 class="h4"><a href="<?php echo e(route ('home.newsinglev1',$newsingle->link)); ?>" class="layou_text">സോഫ്റ്റ്വെയർ: പ്രോഗ്രാമുകളും ഡോക്യുമെന്റേഷനും</a></h3>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </li>
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
                  <div class="col-md-6 ptop--30 pbottom--30">
                     <div class="post--items-title" data-ajax="tab">
                        <h2 class="h4">Technology</h2>
                     </div>
                     <div class="post--items post--items-3" data-ajax-content="outer">
                        <ul class="nav" data-ajax-content="inner">
                           <li>
                              <div class="post--item post--layout-1">
                                 <div class="post--img">
                                    <a href="<?php echo e(route ('home.newsinglev1',$newsingle->link)); ?>" class="thumb"><img src="<?php echo e(url('img/articles/products/'.$newsingle->images->first()->image)); ?>" alt=""></a> <a href="#" class="cat">Computer</a> <a href="#" class="icon"><i class="fa fa-heart-o"></i></a> 
                                    <div class="post--info">
                                       <ul class="nav meta">
                                          <li><a href="#">Bathin</a></li>
                                          <li><a href="#">Yeasterday 03:52 pm</a></li>
                                       </ul>
                                       <div class="title">
                                          <h3 class="h4"><a href="<?php echo e(route ('home.newsinglev1',$newsingle->link)); ?>" class="layou_text">സോഫ്റ്റ്വെയർ: പ്രോഗ്രാമുകളും ഡോക്യുമെന്റേഷനും</a></h3>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </li>
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
      <div class="card-section mt-4">
         <div class="row">
            <div class="post--items-title" data-ajax="tab">
               <h2 class="h4">Youth & Kids</h2>
            </div>
            <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $newsingle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-3">
               <div class="card">
                  <div class="card-body">
                     <img src="<?php echo e(url('img/articles/products/'.$newsingle->images->first()->image)); ?>" alt="">
                     <div class="post--info">
                        <ul class="nav meta mt-5">
                           <li><a href="#">Politics News</a></li>
                           <li><a href="#">Today 03:45 pm</a></li>
                        </ul>
                        <div class="title">
                           <h3 class="h4"><a href="<?php echo e(route ('home.newsinglev1',$newsingle->link)); ?>" class="layou_text"><?php echo $newsingle->name; ?></a></h3>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         </div>
      </div>
   </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/newsportal/resources/views/welcome.blade.php ENDPATH**/ ?>