<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DateTime;

class Section extends Model
{
    use HasFactory;

    public function subSections()
    {
        return $this->hasMany(Section::class, 'parent', 'id');
    }

    public function images()
    {
        return $this->hasMany(SectionImage::class);
    }

    public function crumbsSections($id)
    {
        $breadcrubs = '';
        if ($id != 0) {
            $content = Section::find($id);
            if ($content && $content->id != 0) {
                $breadcrubs = $content->name . '/' . $breadcrubs;
                $contentlevel1 = Section::find($content->parent);
                if ($contentlevel1 && $contentlevel1->id != 0) {
                    $breadcrubs = $contentlevel1->name . '/ ' . $breadcrubs;
                    $contentlevel2 = Section::find($contentlevel1->parent);
                    if ($contentlevel2 && $contentlevel2->id != 0) {
                        $breadcrubs = $contentlevel2->name . '/ ' . $breadcrubs;
                    }
                }
            }
        }
        $breadcrubs = 'List Sections/ '. rtrim($breadcrubs, '/');
        return $breadcrubs;
    }

    public function textSection($id)
    {
        if ($id != 0) {
            $section = Section::find($id);
            $sectionimages = SectionImage::where('section_id', $id)->get();
            $count = $sectionimages->count();
            if ($section && $section->id != 0) {
            $slidersection = $section->description;
            }
        }
        return $slidersection;
    }

    public function heroSlider($id)
    {
        if ($id != 0) {
            $section = Section::find($id);
            $sectionimages = SectionImage::where('section_id', $id)->get();
            $count = $sectionimages->count();
            if ($section && $section->id != 0) {
            $slidersection = '<section class="container-fluid p-0">
                <div id="carouselExampleDark'.$section->id.'" class="carousel carousel-dark slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">';
                    for ($i=0; $i < $count; $i++) { 
                    $activeButton = $i === 0 ? 'active' : '';
                    $slidersection .= '<button type="button" data-bs-target="#carouselExampleDark'.$section->id.'" data-bs-slide-to="' . $i . '" class="carousel-button ' . $activeButton . '"
                        aria-current="true" aria-label="Slide ' . $i . '"></button>';
                    }
            $slidersection .= '</div>
                        <div class="carousel-inner">';  
                    foreach ($sectionimages as $key => $sectionimage) {
                            $activeClass = $key === 0 ? 'active' : '';
                            $imagePath = url('wx.images/contents/articles/' . $sectionimage->image);
                            $slidersection .= '<a href="'.$sectionimage->link.'"><div class="carousel-item ' . $activeClass . ' carousel-banner" data-bs-interval="10000">
                                <img src="' . $imagePath . '" class="carousel-banner-img d-block w-100">
                            </div></a>';
                            }
            $slidersection .= '</div>
                                 </div>
                            </section>';
            }
        }
        return $slidersection;
    }


    public function tagNews($id, $count)
    {
        if ($id != '') {
            $tags = Tags::where('name', $id)->first();
            $productIds = explode(',', $tags->product_id);
            $relatedProducts = Product::whereIn('id', $productIds)->with(['images' => function ($query) {
                $query->where('default_status', 'Y');
            }])->where('status', 'Y')->orderBy('order', 'asc')->take($count)->get();
            if ($relatedProducts) {
            $slidersection = '<div class="col-lg-3 col-md-3 first-col">
               <div class="banner-tittle" data-ajax="tab">
                  <h2 class="h4">'.$tags->name.'</h2>
               </div>
               <div class="post--items post--items-3" data-ajax-content="outer">
                  <ul class="nav" data-ajax-content="inner">';
                    foreach ($relatedProducts as $relatedProduct) {
                            $newstime = $this->formatNewsTime($relatedProduct->created_at);
                            $imagePath = url('img/articles/products/' . $relatedProduct->images->first()->image);
                            $categoryIds = explode(',', $relatedProduct['category']);
                            $categoryNames = Category::whereIn('id', $categoryIds)->pluck('name')->toArray();
                            $relatedProduct->categories = implode(', ', $categoryNames);
                            $slidersection .= '<li>
                        <div class="post--item post--layout-3">
                           <div class="post--img">
                              <a href="'.route('home.newsinglev1', ['id' => $relatedProduct->link]).'" class="small-img-news">
                              <!-- <img src="'.$imagePath.'" alt=""> --!>
                              </a> 
                              <div class="post--info">
                                 <div class="title">
                                    <h3 class="h4"><a href="'.route('home.newsinglev1', ['id' => $relatedProduct->link]).'" class="layou_text">'.$relatedProduct->name.'</a></h3>
                                 </div>
                                 <ul class="nav meta mt-5">
                                    <li><a href="#">'.$relatedProduct->categories.'</a></li>
                                    <li><a href="#">'.$newstime.'</a></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </li>';
                            }
            $slidersection .= '</ul>
                <hr>
             <!-- <div class="click-link">
                <a href="#">More News</a></div> --!>
               </div>
            </div>';
            }
        }
        return $slidersection;
    }

    public function tagNews1($id, $skip, $count, $width)
    {
        if ($id != '') {
            $tags = Tags::where('name', $id)->first();
            $productIds = explode(',', $tags->product_id);
            $relatedProducts = Product::whereIn('id', $productIds)->with(['images' => function ($query) {
                $query->where('default_status', 'Y');
            }])->where('status', 'Y')->orderBy('order', 'asc')->skip($skip)->take($count)->get();
            if ($relatedProducts) {
            $slidersection = '<div class="col-lg-'.$width.' col-md-'.$width.' first-col">
               <div class="post--items post--items-3" data-ajax-content="outer">
                  <ul class="nav" data-ajax-content="inner">';
                    foreach ($relatedProducts as $relatedProduct) {
                            $newstime = $this->formatNewsTime($relatedProduct->created_at);
                            $imagePath = url('img/articles/products/' . $relatedProduct->images->first()->image);
                            $categoryIds = explode(',', $relatedProduct['category']);
                            $categoryNames = Category::whereIn('id', $categoryIds)->pluck('name')->toArray();
                            $relatedProduct->categories = implode(', ', $categoryNames);
                            $slidersection .= '<li>
                        <div class="post--item post--layout-3">
                           <div class="post--img">
                              <a href="'.route('home.newsinglev1', ['id' => $relatedProduct->link]).'" class="small-img-news"><img src="'.$imagePath.'" alt=""></a> 
                              <div class="post--info">
                                 <div class="title">
                                    <h3 class="h4"><a href="'.route('home.newsinglev1', ['id' => $relatedProduct->link]).'" class="layou_text">'.$relatedProduct->name.'</a></h3>
                                 </div>
                                 <ul class="nav meta mt-5">
                                    <li><a href="#">'.$relatedProduct->categories.'</a></li>
                                    <li><a href="#">'.$newstime.'</a></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </li>';
                            }
            $slidersection .= '</ul>
               </div>
            </div>';
            }
        }
        return $slidersection;
    }

    public function tagNews2($id, $skip, $count)
    {
        if ($id != '') {
            $tags = Tags::where('name', $id)->first();
            $productIds = explode(',', $tags->product_id);
            $relatedProducts = Product::whereIn('id', $productIds)->with(['images' => function ($query) {
                $query->where('default_status', 'Y');
            }])->where('status', 'Y')->orderBy('order', 'asc')->skip($skip)->take($count)->get();
            if ($relatedProducts) {
            $slidersection = '<div class="col-lg-3 col-md-3 first-col">
               <div class="post--items post--items-3" data-ajax-content="outer">
                  <ul class="nav" data-ajax-content="inner">';
                    foreach ($relatedProducts as $relatedProduct) {
                            $newstime = $this->formatNewsTime($relatedProduct->created_at);
                            $imagePath = url('img/articles/products/' . $relatedProduct->images->first()->image);
                            $categoryIds = explode(',', $relatedProduct['category']);
                            $categoryNames = Category::whereIn('id', $categoryIds)->pluck('name')->toArray();
                            $relatedProduct->categories = implode(', ', $categoryNames);
                            $slidersection .= '<li>
                        <div class="post--item post--layout-3">
                           <div class="post--img">
                              <div class="post--info">
                                 <div class="title">
                                    <h3 class="h4"><a href="'.route('home.newsinglev1', ['id' => $relatedProduct->link]).'" class="layou_text">'.$relatedProduct->name.'</a></h3>
                                 </div>
                                 <ul class="nav meta mt-5">
                                    <li><a href="#">'.$relatedProduct->categories.'</a></li>
                                    <li><a href="#">'.$newstime.'</a></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </li>';
                            }
            $slidersection .= '</ul>
               </div>
            </div>';
            }
        }
        return $slidersection;
    }

    private function formatNewsTime($time)
    {
        $publishedTime = new DateTime($time);
        $now = new DateTime();

        $diff = $now->diff($publishedTime);
        $daysDiff = $diff->days;

        if ($daysDiff === 0) {
            return 'Today ' . $publishedTime->format('h:i A');
        } elseif ($daysDiff === 1) {
            return 'Yesterday ' . $publishedTime->format('h:i A');
        } else {
            return $publishedTime->format('d-m-Y');
        }
    }

    public function catNews($id, $count)
    {
        if ($id != '') {
            $category = Category::where('name', $id)->first();
            $catid =  $category->id;
            $tags = Tags::where('name', 'Category Top')->first();
            $productIds = explode(',', $tags->product_id);
            $topRelatedProducts = Product::whereRaw("FIND_IN_SET($catid, category)")->whereIn('id', $productIds)->with(['images' => function ($query) {
                $query->where('default_status', 'Y');
            }])->where('status', 'Y')->orderBy('order', 'asc')->get();
            $relatedProducts = Product::whereRaw("FIND_IN_SET($catid, category)")->whereNotIn('id', $productIds)->with('brandn')->with(['images' => function ($query) {
                $query->where('default_status', 'Y');
            }])->where('status', 'Y')->orderBy('order', 'asc')->take($count)->get();
            if ($relatedProducts) {
            $slidersection = '<div class="col-md-6 pbottom--30">
               <div class="post--items-title" data-ajax="tab">
                  <h2 class="h4">'.$category->name.'</h2>
               </div>
               <div class="post--items post--items-3" data-ajax-content="outer">
                  <ul class="nav" data-ajax-content="inner">';
                  if ($topRelatedProducts) {
                    foreach ($topRelatedProducts as $relatedProduct) {
                      $newstime = $this->formatNewsTime($relatedProduct->created_at);
                      $imagePath = url('img/articles/products/' . $relatedProduct->images->first()->image);
                      $slidersection .= '
                        <li>
                          <div class="post--item post--layout-1">
                              <div class="post--img">
                                <a href="'.route('home.newsinglev1', ['id' => $relatedProduct->link]).'" class="thumb"><img src="'.$imagePath.'" alt=""></a> <a href="'.route('home.newsinglev1', ['id' => $relatedProduct->link]).'" class="cat">Top News</a> <a href="'.route('home.newsinglev1', ['id' => $relatedProduct->link]).'" class="icon"><i class="fa fa-heart-o"></i></a> 
                                <div class="post--info">
                                    <ul class="nav meta">
                                      <li><a href="#">'.$newstime.'</a></li>
                                    </ul>
                                    <div class="title">
                                      <h3 class="h4"><a href="'.route('home.newsinglev1', ['id' => $relatedProduct->link]).'" class="layou_text">'.$relatedProduct->name.'</a></h3>
                                    </div>
                                </div>
                              </div>
                          </div>
                        </li>';} }
                    foreach ($relatedProducts as $relatedProduct) {
                            $newstime = $this->formatNewsTime($relatedProduct->created_at);
                            $imagePath = url('img/articles/products/' . $relatedProduct->images->first()->image);
                            $slidersection .= '<li>
                        <div class="post--item post--layout-3">
                           <div class="post--img">
                           <div class="small-img-news">
                           <a href="'.route('home.newsinglev1', ['id' => $relatedProduct->link]).'" class="small-img-news"><img src="'.$imagePath.'" alt=""></a> 

                           </div>
                              <div class="post--info">
                                 <div class="title">
                                    <h3 class="h4"><a href="'.route('home.newsinglev1', ['id' => $relatedProduct->link]).'" class="layou_text">'.$relatedProduct->name.'</a></h3>
                                 </div>
                                 <ul class="nav meta mt-5">
                                    <li><a href="#">'.$category->name.'</a></li>
                                    <li><a href="#">'.$newstime.'</a></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </li>';
                            }
            $slidersection .= '</ul>
                <div class="click-link">
                <a href="'.route('home.newsinglev2', ['id' => $category->link]).'">More News</a></div>
               </div>
            </div>';
            }
        }
        return $slidersection;
    }   

    public function catNews2($id, $count)
    {
        if ($id != '') {
            $category = Category::where('name', $id)->first();
            $catid =  $category->id;
            $tags = Tags::where('name', 'Category Top')->first();
            $productIds = explode(',', $tags->product_id);
            $topRelatedProducts = Product::whereRaw("FIND_IN_SET($catid, category)")->whereIn('id', $productIds)->with(['images' => function ($query) {
                $query->where('default_status', 'Y');
            }])->where('status', 'Y')->orderBy('order', 'asc')->get();
            $relatedProducts = Product::whereRaw("FIND_IN_SET($catid, category)")->whereNotIn('id', $productIds)->with('brandn')->with(['images' => function ($query) {
                $query->where('default_status', 'Y');
            }])->where('status', 'Y')->orderBy('order', 'asc')->take($count)->get();
            if ($relatedProducts) {
            $slidersection = '<div class="col-md-12">
                     <div class="post--items-title" data-ajax="tab">
                        <h2 class="h4">'.$category->name.'</h2>
                     </div>
                     <div class="post--items post--items-2" data-ajax-content="outer">
                        <ul class="nav row" data-ajax-content="inner">';
                  if ($topRelatedProducts) {
                    foreach ($topRelatedProducts as $relatedProduct) {
                      $newstime = $this->formatNewsTime($relatedProduct->created_at);
                      $imagePath = url('img/articles/products/' . $relatedProduct->images->first()->image);
                      $slidersection .= '
                           <li class="col-md-6">
                              <div class="post--item post--layout-2">
                                 <div class="post--img">
                                    <a href="'.route('home.newsinglev1', ['id' => $relatedProduct->link]).'" class="large-img-news"><img src="'.$imagePath.'" alt=""></a> <a href="#" class="cat">Business</a> <a href="#" class="icon"><i class="fa fa-star-o"></i></a> 
                                    <div class="post--info">
                                       <ul class="nav meta">
                                          <li><a href="#">'.$category->name.'</a></li>
                                          <li><a href="#">'.$newstime.'</a></li>
                                       </ul>
                                       <div class="title">
                                          <h3 class="h4"><a href="'.route('home.newsinglev1', ['id' => $relatedProduct->link]).'" class="layou_text">'.$relatedProduct->name.'</a></h3>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </li>';} }
                      $slidersection .= '<li class="col-md-6">
                              <ul class="nav row">';
                    foreach ($relatedProducts as $index => $relatedProduct) {
                            $newstime = $this->formatNewsTime($relatedProduct->created_at);
                            $imagePath = url('img/articles/products/' . $relatedProduct->images->first()->image);
                            if($index % 2 == 0 && $index > 1){
                                 $slidersection .= '<li class="col-xs-12">
                                    <hr class="divider">
                                 </li>';}
                            $slidersection .= '
                                 <li class="col-xs-6">
                                    <div class="post--item post--layout-2">
                                       <div class="post--img">
                                          <a href="'.route('home.newsinglev1', ['id' => $relatedProduct->link]).'" class="pol-img-news"><img src="'.$imagePath.'" alt=""></a> 
                                          <div class="post--info">
                                             <ul class="nav meta">
                                                <li><a href="#">'.$category->name.'</a></li>
                                                <li><a href="#">'.$newstime.'</a></li>
                                             </ul>
                                             <div class="title">
                                                <h3 class="h4"><a href="'.route('home.newsinglev1', ['id' => $relatedProduct->link]).'" class="layou_text">'.$relatedProduct->name.'</a></h3>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </li>';
                            }
            $slidersection .= '
                              </ul>
                           </li>';
                            
            $slidersection .= '</ul>
                     </div>
                  </div>';
            }
        }
        return $slidersection;
    }

    public function catNewsSub($id, $count)
    {
        if ($id != '') {
            $category = Category::where('name', $id)->first();
            $catid =  $category->id;
            $tags = Tags::where('name', 'Category Top')->first();
            $productIds = explode(',', $tags->product_id);
            $topRelatedProducts = Product::whereRaw("FIND_IN_SET($catid, category)")->whereIn('id', $productIds)->with(['images' => function ($query) {
                $query->where('default_status', 'Y');
            }])->where('status', 'Y')->orderBy('order', 'asc')->get();
            $relatedProducts = Product::whereRaw("FIND_IN_SET($catid, category)")->whereNotIn('id', $productIds)->with('brandn')->with(['images' => function ($query) {
                $query->where('default_status', 'Y');
            }])->where('status', 'Y')->orderBy('order', 'asc')->take($count)->get();
            if ($relatedProducts) {
            $slidersection = '<div class="col-md-12">
                     <div class="post--items-title" data-ajax="tab">
                        <h2 class="h4">'.$category->name.'</h2>
                     </div>
                     <div class="post--items post--items-2" data-ajax-content="outer">
                        <ul class="nav row" data-ajax-content="inner">';
                  if ($topRelatedProducts) {
                    foreach ($topRelatedProducts as $relatedProduct) {
                      $newstime = $this->formatNewsTime($relatedProduct->created_at);
                      $imagePath = url('img/articles/products/' . $relatedProduct->images->first()->image);
                      $slidersection .= '
                           <li class="col-md-6">
                              <div class="post--item post--layout-2">
                                 <div class="post--img">
                                    <a href="'.route('home.newsinglev1', ['id' => $relatedProduct->link]).'" class="large-img-news"><img src="'.$imagePath.'" alt=""></a> <a href="#" class="cat">Business</a> <a href="#" class="icon"><i class="fa fa-star-o"></i></a> 
                                    <div class="post--info">
                                       <ul class="nav meta">
                                          <li><a href="#">'.$category->name.'</a></li>
                                          <li><a href="#">'.$newstime.'</a></li>
                                       </ul>
                                       <div class="title">
                                          <h3 class="h4"><a href="'.route('home.newsinglev1', ['id' => $relatedProduct->link]).'" class="layou_text">'.$relatedProduct->name.'</a></h3>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </li>';} }
                      $slidersection .= '<li class="col-md-6">
                              <ul class="nav row">';
                    foreach ($relatedProducts as $index => $relatedProduct) {
                            $newstime = $this->formatNewsTime($relatedProduct->created_at);
                            $imagePath = url('img/articles/products/' . $relatedProduct->images->first()->image);
                            if($index % 2 == 0 && $index > 1){
                                 $slidersection .= '<li class="col-xs-12">
                                    <hr class="divider">
                                 </li>';}
                            $slidersection .= '
                                 <li class="col-xs-6">
                                    <div class="post--item post--layout-2">
                                       <div class="post--img">
                                          <a href="'.route('home.newsinglev1', ['id' => $relatedProduct->link]).'" class="pol-img-news"><img src="'.$imagePath.'" alt=""></a> 
                                          <div class="post--info">
                                             <ul class="nav meta">
                                                <li><a href="#">'.$category->name.'</a></li>
                                                <li><a href="#">'.$newstime.'</a></li>
                                             </ul>
                                             <div class="title">
                                                <h3 class="h4"><a href="'.route('home.newsinglev1', ['id' => $relatedProduct->link]).'" class="layou_text">'.$relatedProduct->name.'</a></h3>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </li>';
                            }
            $slidersection .= '
                              </ul>
                           </li>';
                            
            $slidersection .= '</ul>
                     </div>
                  </div>';
            }
        }
        return $slidersection;
    }

    public function CategoryNewsWithSub($id)
    {
        if ($id != '') {
            $category = Category::where('name', $id)->with('subCategories')->first();
            $catid =  $category->id;
            $allNews = Product::whereRaw("FIND_IN_SET($catid, category)")->with(['images' => function ($query) {
                $query->where('default_status', 'Y');
            }])->where('status', 'Y')->orderBy('order', 'asc')->get();
            $totalCount = $allNews->count();
            $firstProduct = $allNews->slice(0, 1);
            $nextFourProducts = $allNews->slice(1, 4);
            $remainingProducts = $allNews->slice(5);
            $halfCount = $remainingProducts->count() % 2 == 0 ? $remainingProducts->count() / 2 : ($remainingProducts->count() - 1) / 2;
            $thirdDivProducts = $remainingProducts->slice(0, $halfCount);
            $fourthDivProducts = $remainingProducts->slice($halfCount);
            if ($nextFourProducts) {
            $slidersection = '<div class="col-md-12">
                     <div class="post--items-title" data-ajax="tab">
                        <h2 class="h4">'.$category->name.'</h2>
                     </div>
                     <div class="post--items post--items-2" data-ajax-content="outer">
                        <ul class="nav row" data-ajax-content="inner">';
                  if ($firstProduct) {
                    foreach ($firstProduct as $relatedProduct) {
                      $newstime = $this->formatNewsTime($relatedProduct->created_at);
                      $imagePath = url('img/articles/products/' . $relatedProduct->images->first()->image);
                      $slidersection .= '
                           <li class="col-md-6">
                              <div class="post--item post--layout-2">
                                 <div class="post--img">
                                    <a href="'.route('home.newsinglev1', ['id' => $relatedProduct->link]).'" class="large-img-news"><img src="'.$imagePath.'" alt=""></a> 
                                    <div class="post--info">
                                       <ul class="nav meta">
                                          <li><a href="#">'.$category->name.'</a></li>
                                          <li><a href="#">'.$newstime.'</a></li>
                                       </ul>
                                       <div class="title">
                                          <h3 class="h4"><a href="'.route('home.newsinglev1', ['id' => $relatedProduct->link]).'" class="layou_text">'.$relatedProduct->name.'</a></h3>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </li>';} }
                      $slidersection .= '<li class="col-md-6">
                              <ul class="nav row">';
                    foreach ($nextFourProducts as $index => $relatedProduct) {
                            $newstime = $this->formatNewsTime($relatedProduct->created_at);
                            $imagePath = url('img/articles/products/' . $relatedProduct->images->first()->image);
                            if($index % 2 == 1 && $index > 1){
                                 $slidersection .= '<li class="col-xs-12">
                                    <hr class="divider">
                                 </li>';}
                            $slidersection .= '
                                 <li class="col-xs-6">
                                    <div class="post--item post--layout-2">
                                       <div class="post--img">
                                          <a href="'.route('home.newsinglev1', ['id' => $relatedProduct->link]).'" class="pol-img-news"><img src="'.$imagePath.'" alt=""></a> 
                                          <div class="post--info">
                                             <ul class="nav meta">
                                                <li><a href="#">'.$category->name.'</a></li>
                                                <li><a href="#">'.$newstime.'</a></li>
                                             </ul>
                                             <div class="title">
                                                <h3 class="h4"><a href="'.route('home.newsinglev1', ['id' => $relatedProduct->link]).'" class="layou_text">'.$relatedProduct->name.'</a></h3>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </li>';
                            }
            $slidersection .= '
                              </ul>
                           </li>';
                            
            $slidersection .= '</ul>
                     </div>
                  </div>';
            }
            $slidersection .= '<li class="col-lg-12 col-md-12 col-xs-12">
                                    <hr class="divider">
                                 </li>';
            if ($thirdDivProducts) {
               $slidersection .= '<div class="col-lg-6 col-md-6 first-col">
                  <div class="post--items post--items-3" data-ajax-content="outer">
                     <ul class="nav" data-ajax-content="inner">';
                       foreach ($thirdDivProducts as $relatedProduct) {
                               $newstime = $this->formatNewsTime($relatedProduct->created_at);
                               $imagePath = url('img/articles/products/' . $relatedProduct->images->first()->image);
                               $categoryIds = explode(',', $relatedProduct['category']);
                               $categoryNames = Category::whereIn('id', $categoryIds)->pluck('name')->toArray();
                               $relatedProduct->categories = implode(', ', $categoryNames);
                               $slidersection .= '<li>
                           <div class="post--item post--layout-3">
                              <div class="post--img">
                                 <a href="'.route('home.newsinglev1', ['id' => $relatedProduct->link]).'" class="small-img-news"><img src="'.$imagePath.'" alt=""></a> 
                                 <div class="post--info">
                                    <div class="title">
                                       <h3 class="h4"><a href="'.route('home.newsinglev1', ['id' => $relatedProduct->link]).'" class="layou_text">'.$relatedProduct->name.'</a></h3>
                                    </div>
                                    <ul class="nav meta mt-5">
                                       <li><a href="#">'.$relatedProduct->categories.'</a></li>
                                       <li><a href="#">'.$newstime.'</a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </li>';
                               }
               $slidersection .= '</ul>
                  </div>
               </div>';
            }
            if ($fourthDivProducts) {
               $slidersection .= '<div class="col-lg-6 col-md-6 first-col">
                  <div class="post--items post--items-3" data-ajax-content="outer">
                     <ul class="nav" data-ajax-content="inner">';
                       foreach ($fourthDivProducts as $relatedProduct) {
                               $newstime = $this->formatNewsTime($relatedProduct->created_at);
                               $imagePath = url('img/articles/products/' . $relatedProduct->images->first()->image);
                               $categoryIds = explode(',', $relatedProduct['category']);
                               $categoryNames = Category::whereIn('id', $categoryIds)->pluck('name')->toArray();
                               $relatedProduct->categories = implode(', ', $categoryNames);
                               $slidersection .= '<li>
                           <div class="post--item post--layout-3">
                              <div class="post--img">
                                 <a href="'.route('home.newsinglev1', ['id' => $relatedProduct->link]).'" class="small-img-news"><img src="'.$imagePath.'" alt=""></a> 
                                 <div class="post--info">
                                    <div class="title">
                                       <h3 class="h4"><a href="'.route('home.newsinglev1', ['id' => $relatedProduct->link]).'" class="layou_text">'.$relatedProduct->name.'</a></h3>
                                    </div>
                                    <ul class="nav meta mt-5">
                                       <li><a href="#">'.$relatedProduct->categories.'</a></li>
                                       <li><a href="#">'.$newstime.'</a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </li>';
                               }
               $slidersection .= '</ul>
                  </div>
               </div>';
            }
        }
        return $slidersection;
    }

    public function catNewsList($id, $skip, $count, $width)
    {
        if ($id != '') {
            $category = Category::where('name', $id)->with('subCategories')->first();
            $catid =  $category->id;
            $relatedProducts = Product::whereRaw("FIND_IN_SET($catid, category)")->with('brandn')->with(['images' => function ($query) {
               $query->where('default_status', 'Y');
            }])->where('status', 'Y')->orderBy('order', 'asc')->skip($skip)->take(4)->get();
            if ($relatedProducts) {
            $slidersection = '<div class="col-lg-'.$width.' col-md-'.$width.' first-col">
               <div class="post--items post--items-3" data-ajax-content="outer">
                  <ul class="nav" data-ajax-content="inner">';
                    foreach ($relatedProducts as $relatedProduct) {
                            $newstime = $this->formatNewsTime($relatedProduct->created_at);
                            $imagePath = url('img/articles/products/' . $relatedProduct->images->first()->image);
                            $categoryIds = explode(',', $relatedProduct['category']);
                            $categoryNames = Category::whereIn('id', $categoryIds)->pluck('name')->toArray();
                            $relatedProduct->categories = implode(', ', $categoryNames);
                            $slidersection .= '<li>
                        <div class="post--item post--layout-3">
                           <div class="post--img">
                              <a href="'.route('home.newsinglev1', ['id' => $relatedProduct->link]).'" class="small-img-news"><img src="'.$imagePath.'" alt=""></a> 
                              <div class="post--info">
                                 <div class="title">
                                    <h3 class="h4"><a href="'.route('home.newsinglev1', ['id' => $relatedProduct->link]).'" class="layou_text">'.$relatedProduct->name.'</a></h3>
                                 </div>
                                 <ul class="nav meta mt-5">
                                    <li><a href="#">'.$relatedProduct->categories.'</a></li>
                                    <li><a href="#">'.$newstime.'</a></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </li>';
                            }
            $slidersection .= '</ul>
               </div>
            </div>';
            }
        }
        return $slidersection;
    }


    


    public function newsSection()
    {
      $blogs = Blog::orderBy('updated_at', 'desc')->take(4)->get();
      $slidersection = '<section>
    <div class="container">
    <h4><b>Latest News</b></h4>
        <div class="row">';
        foreach ($blogs as $key => $blog) {
          $blogimages = BlogImage::where('content_id', $blog->id)->first();
          $imagePath = url('wx.images/blogs/articles/' . $blogimages->image);
          $slidersection .= '<div class="col-lg-3 col-sm-12 col-md-6">
                <a href="blogs/'.$blog->link.'">
                    <div class="card border-0">
                        <img src="'.$imagePath.'" alt="Camera 1 Pro">
                        <div class="news-content mt-4">
                            <h6>'.$blog->name.'</h6>
                            <p>'.substr($blog->short_description, 0, 80).'...</p>
                            <div class="date_name mt-3">
                                <p>'.date("F j, Y", strtotime($blog->updated_at)).'</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>';

        }
          
                  $slidersection .= '</div>
        </div>
        </section>';
        return $slidersection;
    }

    public function brandList($id,$cid)
    {
        if ($id != 0) {
            $section = Section::find($id);
            $category = Category::find($cid);
            $brandIds = explode(',', $category['brand']);
            $categoryBrands = Brand::whereIn('id', $brandIds)->get();
            if ($section && $section->id != 0) {
            $slidersection = '<section class="container">
            <div class="row g-2">';
                foreach ($categoryBrands as $key => $categoryBrand) {
                        $imagePath = url('wx.images/brands/' . $categoryBrand->image);
                        $slidersection .= '<div class="col-lg-2 col-md-4 col-6">
            <div class="brands">
                    <div class="brand-image">
                        <a href="#"><img src="'.$imagePath.'" alt=""></a>
                    </div>
                    <div class="brand-name">
                        <h4>'.$categoryBrand->name.'</h4>
                    </div>
                </div>
            </div>';
                                        }
                        $slidersection .= '</div>
  </section>';
            }
        }
        return $slidersection;
    }
}
