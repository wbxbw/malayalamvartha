<header class="header--section header--style-1">
   <div class="header--topbar">
      <div class="container-fluid">
         <div class="top-header">
            <div class=" ">
               <ul class="header--topbar-info nav text-sm-center">
                  <li><i class="fa fm fa-map-marker"></i>Thrissur, Kerala</li>
                  <li><i class="fa fm fa-mixcloud"></i>21<sup>0</sup> C</li>
                  <li>
                     <i class="fa fm fa-calendar"></i>
                  <span id="clock"></span></li>
               </ul>
            </div>
            <div class="">
               <ul class="header--topbar-action nav">
                  <li>
                     <a href="#" style="color:#000;">Malayalam Vartha Live Online Newspaper</a>
                  </li>
               </ul>
               <ul class="header--topbar-social nav hidden-sm hidden-xxs">
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
   <div
      class="header--navbar navbar bd--color-1 bg--color-1"
      data-trigger="sticky"
      >
      <div class="container">
         <div class="navbar-header">
            <button
               type="button"
               class="navbar-toggle collapsed"
               data-toggle="collapse"
               data-target="#headerNav"
               aria-expanded="false"
               aria-controls="headerNav"
               >
            <span class="sr-only">Toggle Navigation</span>
            <span class="icon-bar"></span> <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
         </div>
         <div id="headerNav" class="navbar-collapse collapse float--left">
            <ul
               class="header--menu-links nav navbar-nav"
               data-trigger="hoverIntent"
               >
               <li><a href="<?php echo e(route('home.index')); ?>">Home</a></li>
               <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <li><a href="<?php echo e(route('home.newsinglev2',$category->link)); ?>"><?php echo e($category->name); ?></a></li>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>               
            </ul>
         </div>
         <form
            action="#"
            class="header--search-form float--right"
            data-form="validate"
            >
            <input
               type="search"
               name="search"
               placeholder="Search..."
               class="header--search-control form-control"
               required
               />
            <button type="submit" class="header--search-btn btn">
            <i class="header--search-icon fa fa-search"></i>
            </button>
         </form>
      </div>
   </div>
</header>
<div class="header--logo  text-sm-center">
   <h1 class="h1"> <a href="<?php echo e(route('home.index')); ?>" class="btn-link"> <img class="team-logo" src="<?php echo e(url('img/news-logo.png')); ?>" alt=""> <span class="hidden"></span> </a> </h1>
</div>
<div class="posts--filter-bar style--1 hidden-xs">
   <div class="container">
      <ul class="nav">
      <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <li>
            <a href="#"> <i class="<?php echo e($tag->img); ?>"></i> <span><?php echo e($tag->name); ?></span> </a>
         </li>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </ul>
   </div>
</div><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/newsportal/resources/views/header.blade.php ENDPATH**/ ?>