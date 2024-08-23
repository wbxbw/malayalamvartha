@extends('layout') @section('title', $news['meta_title']) 
@section('content')

@php
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
@endphp
<!-- Section Start  -->
<div class="main-content--section pbottom--30">
   <div class="container-fluid">
      <div class="row">
         <div class="main--content col-md-12" data-sticky-content="true">
            <div class="sticky-content-inner">
               <div class="post--item post--single post--title-largest">
                  <div class="post--info">
                     <div class="title">
                     <h1 class="inner-head">{{ $news->categories }}</h1>
                     <h1 class="h4">{!! $news['name'] !!}
                        </h1>
                     </div>
                  </div>
               
                  <div class="post--info">
                     <ul class="nav meta">
                        <li><a href="#">Published : {{ $time_crt }}</a></li>
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
                        <img class="img-fluid" src="{{ url('img/articles/products/'.$images->image)}} " alt="inner-image">
                     </div>
                     <div class="ptop--30">
                        {!! $news['long_description'] !!}
                     </div>
                  </div>
               </div>
               <div class="ad--space pd--20-0-40">
                  <a href="#">
                  <img src="img/ads-img/ad-728x90-02.jpg" alt="" class="center-block" />
                  </a>
               </div>
               
               <div class="post--social pbottom--30">
                  <span class="title"><i class="fa fa-share-alt"></i></span>
                  <div class="social--widget style--4">
                     <ul class="nav">
                        <li>
                           <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https://maichosting.com/malayalamvartha/public/News/{{$news['link']}}&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">
                                 <i class="fa fa-facebook"></i>
                           </a>
                        </li>
                        <li>
                           <a href="https://wa.me/?text=Check%20out%20this%20blog%20post:%20https%3A%2F%2Fwww.manoramaonline.com%2Fnews%2Flatest-news%2F2024%2F08%2F05%2Fwayanad-landslide-updates.html" target="_blank">
                                 <i class="fa fa-whatsapp"></i>
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection