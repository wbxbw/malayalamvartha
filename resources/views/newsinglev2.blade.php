@extends('layout') @section('title', $category->meta_title ) @section('content')
<!-- Slider Start -->
<div class="main-content--section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
               <div class="post--items-title" data-ajax="tab">
                  <h1 class="inner-head">{{ $category->name }}</h1>
               </div>
               <div class="list-news-click">
                  <ul>
                     @foreach($category->subCategories as $subCategory)
                     <li><a href="{{ route('home.newsinglev2',$category->link)}}">{{ $subCategory->name }}</a></li>
                     @endforeach
                  </ul>
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
                  @php 
                  foreach($category->subCategories as $subCategory){ 
                     $functionName1 = 'CategoryNewsWithSub'; 
                     $functionName2 = 'catNewsList'; 
                     $functionName3 = 'catNewsList'; 
                     if (method_exists(\App\Models\Section::class, $functionName1)) { 
                        $id = $subCategory->name; 
                        $count = 4; 
                        $sectionInstance = new \App\Models\Section(); 
                        $result = $sectionInstance->$functionName1($id,$count); 
                        echo $result; 
                     }
                  }; 
                  @endphp
               </div>
            </div>
         </div>
         <div class="main--sidebar col-md-4 col-sm-5 ptop--20 pbottom--30" data-sticky-content="true">
            <div class="sticky-content-inner">
               <div class="widget">
                  <div class="widget--title">
                     <h2 class="h4">Recommended for you</h2>
                  </div>
                  <div class="list--widget list--widget-1">
                     <div class="post--items post--items-3" data-ajax-content="outer">
                        <ul class="nav" data-ajax-content="inner">
                           @foreach($news as $newsingle)
                           <li>
                              <div class="post--item post--layout-3">
                                 <div class="post--img">
                                    <a href="{{ route ('home.newsinglev1',$newsingle->link)}}" class="thumb"><img src="{{ url('img/articles/products/'.$newsingle->images->first()->image)}}" alt=""></a> 
                                    <div class="post--info">
                                       <div class="title">
                                          <h3 class="h4"><a href="{{ route ('home.newsinglev1',$newsingle->link)}}" class="layou_text">{!! $newsingle->name !!}</a></h3>
                                       </div>
                                       <ul class="nav meta mt-5">
                                          <li><a href="#">Politics News</a></li>
                                          <li><a href="#">Today 03:45 pm</a></li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           @endforeach
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
@endsection