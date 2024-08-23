@extends('layout') @section('title', 'Malayalam Vartha Live | Home Page') @section('content')
<!-- Slider Start -->
<div class="main-content--section pbottom--30">
    <div class="container-fluid">
        <div class="banner--content mt-3">
            <div class="row custom-order second-col">
                
                {!! $editorsPick !!}

                <div class="col-lg-6 col-md-6 col-sm-9">
                    <div class="banner-tittle" data-ajax="tab">
                        <h2 class="h4">Breaking News</h2>
                    </div>
                    <div class="slider-container">
                        <div class="slider">
                            <div class="slides">
                                @foreach($homeBannerNews as $newsingle)
                                <div class="slide">
                                    <div class="tittle-box">
                                        <h6 class="tittle-heading">
                                            <a href="{{ route ('home.newsinglev1',$newsingle->link)}}">{!! $newsingle->name !!}</a>
                                        </h6>
                                    </div>
                                    <img src="{{ url('img/articles/products/'.$newsingle->images->first()->image)}}" alt="Image 1">
                                </div> 
                                @endforeach
                            </div>
                            <div class="slider-btn">
                                <button class="prev" onclick="moveSlide(-1)">&#10094;</button>
                                <button class="next" onclick="moveSlide(1)">&#10095;</button>
                            </div>
                        </div>
                    </div>

                </div>
                
                
                <div class="col-lg-3 col-md-3 col-sm-3" data-sticky-content="false">
                    <div class="sticky-content-inner">
                        <div class="widget">
                            <div class="side-show-ads">
                            @foreach($homeSidebarSecAdsImages as $homeSidebarSecAdsImage)
                            <div class="img-fluid side-image"> <img src="{{ url('wx.images/contents/articles/'.$homeSidebarSecAdsImage->image)}}" alt=""> </div>
                            @endforeach
                            </div> 
                        </div>
                    </div>
                </div>

                {!! $editorsPick0 !!}

                {!! $editorsPick1 !!}

                {!! $editorsPick2 !!}
            </div>
        </div>
        <div class="row">
            <div class="main--content col-md-8 col-sm-7" data-sticky-content="true">
                <div class="sticky-content-inner">
                    <div class="row">
                        @php foreach($categories as $category){ $functionName = 'catNews'; if (method_exists(\App\Models\Section::class, $functionName)) { $id = $category['name']; $count = 4; $sectionInstance = new \App\Models\Section(); $result = $sectionInstance->$functionName($id,
                        $count); echo $result; } }; @endphp
                    </div>
                </div>
            </div>
            <div class="main--sidebar col-md-4 col-sm-5 ptop--20 pbottom--30" data-sticky-content="true">
                <div class="sticky-content-inner">
                    <!-- <div class="widget">
                  <div class="ad--widget"> <a href="#"> <img src="img/ads-img/ad-300x250-1.jpg" alt=""> </a> </div>
                  </div> -->
                    <div class="widget">
                        <div class="widget--title">
                            <h2 class="h4">Recommended for you</h2>
                            <!-- <i class="icon fa fa-newspaper-o"></i> -->
                        </div>
                        <div class="list--widget list--widget-1">
                            <div class="post--items post--items-3" data-ajax-content="outer">
                                <ul class="nav" data-ajax-content="inner">
                                    @foreach($news as $newsingle)
                                    <li>
                                        <div class="post--item post--layout-3">
                                            <div class="post--img">
                                                <a href="{{ route ('home.newsinglev1',$newsingle->link)}}" class="small-img-news"><img src="{{ url('img/articles/products/'.$newsingle->images->first()->image)}}" alt=""></a>
                                                <div class="post--info">
                                                    <div class="title">
                                                        <h3 class="text-weight" style="text-align: justify; text-justify: inter-word;"><a href="{{ route ('home.newsinglev1',$newsingle->link)}}" class="layou_text--2">{!! $newsingle->name !!}</a></h3>
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
                        </div>
                        <div class="ad--widget">
                            <a href="#"> <img  src="img/ads-img/ad-300x250-2.jpg" alt=""> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
          <div class="slide-ads-spice">
            <img class= "img-fluid ads-slide-image" src="{{ url('img/latest-image/world-cup.webp')}}" style="width:100%">
            <img class= "img-fluid ads-slide-image" src="{{ url('img/latest-image/ad-img1.png')}}" style="width:100%">
            <img class= "img-fluid ads-slide-image" src="{{ url('img/latest-image/ad-img2.png')}}" style="width:100%">
            </div>
        <!-- <div class="ad--space pd--30-0">
            <a href="#"> <img src="img/ads-img/ad-970x90.jpg" alt="" class="center-block"> </a>
        </div> -->
        <div class="card-section">
            <div class="row">
                <div class="post--items-title" data-ajax="tab">
                    <h2 class="h4">Youth & Kids</h2>
                </div>
                @foreach($news as $newsingle)
                <div class="col-lg-3" style = "margin-top:10px;">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{ url('img/articles/products/'.$newsingle->images->first()->image)}}" alt="">
                            <div class="post--info">
                                <!-- <ul class="nav meta mt-5">
                           <li><a href="#">Politics News</a></li>
                           <li><a href="#">Today 03:45 pm</a></li>
                        </ul> -->
                                <div class="title">
                                    <h3 class="h4" style="text-align: justify; text-justify: inter-word;"><a href="{{ route ('home.newsinglev1',$newsingle->link)}}" class="layou_text">{!! $newsingle->name !!}</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<script>
</script>

@endsection