<header class="header--section header--style-1">
    <div class="header--topbar">
        <div class="container-fluid">
            <div class="top-header">
                <div class="top-underline">
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
    <div class="container-fluid">
        <div class=" logo-header">
            <div class="header--logo  text-sm-center">
                <a href="{{ route('home.index') }}" class="btn-link">
                <img class="team-logo" src="{{ url('img/latest-image/gif-logo.gif') }}" alt="Team Logo">  </a>
            </div>
            <div class="slide-show-ads">
            @foreach($headerSecAdsImages as $headerSecAdsImage)
            <img class= "img-fluid slide-image" src="{{ url('wx.images/contents/articles/'.$headerSecAdsImage->image)}}" style="width:100%">
            @endforeach
            </div>
            <div class="mobile-show-ads">
            <img class= " mobile-slide-img" src="{{ url('img/latest-image/mobile-ad.png')}}">
            <img class= " mobile-slide-img" src="" style="width:100%">
            <img class= " mobile-slide-img" src="" style="width:100%">
            </div>
        </div>
        <div class="header--navbar navbar bd--color-1 bg--color-1" data-trigger="sticky">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#headerNav" aria-expanded="false" aria-controls="headerNav">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span> <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div id="headerNav" class="navbar-collapse collapse float--left">
                    <ul class="header--menu-links nav navbar-nav" data-trigger="hoverIntent">
                        @foreach($menucontents as $menucontent)
                            @if($menucontent->function_ret == 'MenuLink')
                            <li><a href="{{ $menucontent->description }}">{{ $menucontent->name }}</a></li>
                            @elseif($menucontent->function_ret == 'MenuLinkSub')
                            {!! $menucontent->description !!}
                            @endif
                        @endforeach
                        <!-- <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu<i class="fa flm fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Sub Menu 1</a></li>
                                <li><a href="#">Sub Menu 2</a></li>
                                <li><a href="#">Sub Menu 3</a></li>
                            </ul>
                        </li> -->
                        
                    </ul>
                </div>
                <!-- <form action="#" class="header--search-form float--right" data-form="validate">
                    <input type="search" name="search" placeholder="Search..." class="header--search-control form-control" required />
                    <button type="submit" class="header--search-btn btn">
                        <i class="header--search-icon fa fa-search"></i>
                    </button>
                </form> -->
            </div>
        </div>
</header>
<script>
  let slideIndex = 0;
showSlides();

function showSlides() {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    slides[slideIndex-1].style.display = "block";  
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}

</script>

<!-- <div class="posts--filter-bar style--1 hidden-xs">
   <div class="container">
      <ul class="nav">
      @foreach($tags as $tag)
         <li>
            <a href="#"> <i class="{{ $tag->img }}"></i> <span>{{ $tag->name }}</span> </a>
         </li>
      @endforeach
      </ul>
   </div>
</div> -->