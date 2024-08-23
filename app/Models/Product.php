<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    
    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }

    public function productSpecs()
    {
        return $this->hasMany(ProductSpec::class);
    }

    public function brandn()
    {
        return $this->belongsTo(Brand::class, 'brand');
    }

    public function productRelatedSlider($id)
    {
        if ($id != 0) {
            $product = Product::findOrFail($id);
            $productCategories = explode(',', $product->category);
            $relatedProducts = Product::with(['images' => function ($query) {
                $query->where('default_status', 'Y');
            }])->where(function ($query) use ($productCategories, $id) {
                foreach ($productCategories as $category) {
                    $query->orWhereRaw("FIND_IN_SET($category, category)");
                }
            })->where('id', '!=', $id)->get();
            


            // $sectionimages = SectionImage::where('section_id', $id)->get();
            // $count = $sectionimages->count();
            if ($relatedProducts) {
            $slidersection = '<section class="sim-products container">
            <div class="row">
              <div class="col">
                <p class="main-heading">Best Seller</p>
              </div>
              <!--<div class="col" style="text-align: right;">
                <a href="#" class="product-link">View all</a>
              </div>--!>
            </div>
            <div class="owl-slider">
              <div id="deal-carousel" class="owl-carousel">';
                    foreach ($relatedProducts as $relatedProduct) {
                            $imagePath = url('img/articles/products/' . $relatedProduct->images->first()->image);
                            $reduced_price = ($relatedProduct->price * $relatedProduct->discount / 100);
                            $discounted_price = $relatedProduct->price - $reduced_price;
                            $slidersection .= '<a href="'.route('home.productdetail', ['id' => $relatedProduct->link]).'"><div class="product-card">
                            <div class="wish-container"><i class="bi bi-heart-fill product-card-wish"></i></div>
                            <div class="product-card-image">
                              <img
                                src="' . $imagePath . '"
                                alt="" />
                            </div>
                            </br>
                            <p class="product-card-name">'.$relatedProduct->name.'</p>
                          </div></a>';
                            }
            $slidersection .= '</div>
            </div>
          </section>';
            }
        }
        return $slidersection;
    }


    public function productRelatedSliderOld($id)
    {
        if ($id != 0) {
            $product = Product::findOrFail($id);
            $productCategories = explode(',', $product->category);
            $relatedProducts = Product::with(['images' => function ($query) {
                $query->where('default_status', 'Y');
            }])->where(function ($query) use ($productCategories, $id) {
                foreach ($productCategories as $category) {
                    $query->orWhereRaw("FIND_IN_SET($category, category)");
                }
            })->where('id', '!=', $id)->get();
            


            // $sectionimages = SectionImage::where('section_id', $id)->get();
            // $count = $sectionimages->count();
            if ($relatedProducts) {
            $slidersection = '<section class="sim-products container">
            <div class="row">
              <div class="col">
                <p class="main-heading">Best Seller</p>
              </div>
              <!--<div class="col" style="text-align: right;">
                <a href="#" class="product-link">View all</a>
              </div>--!>
            </div>
            <div class="owl-slider">
              <div id="deal-carousel" class="owl-carousel">';
                    foreach ($relatedProducts as $relatedProduct) {
                            $imagePath = url('img/articles/products/' . $relatedProduct->images->first()->image);
                            $reduced_price = ($relatedProduct->price * $relatedProduct->discount / 100);
                            $discounted_price = $relatedProduct->price - $reduced_price;
                            $slidersection .= '<a href="'.route('home.productdetail', ['id' => $relatedProduct->link]).'"><div class="product-card">
                            <div class="wish-container"><i class="bi bi-heart-fill product-card-wish"></i></div>
                            <div class="product-card-image">
                              <img
                                src="' . $imagePath . '"
                                alt="" />
                            </div>
                            <div class="off-row">';
                            if($relatedProduct->discount != 0 || $relatedProduct->discount != ''){
                            $slidersection .= '<div class="offer-capsule">
                                <p>'.$relatedProduct->discount.'% off</p>
                              </div>';
                            }
                              $slidersection .= '</div>
                            <div class="row">
                              <div class="col">
                                <p class="card-price">&#8377;'.number_format($discounted_price, 0, '.', ',').'</p>
                              </div>';
                              if($relatedProduct->discount != 0 || $relatedProduct->discount != ''){
                                $slidersection .= '<div class="col">
                                <p class="card-price strike">&#8377;'.number_format($relatedProduct->price, 0, '.', ',').'</p>
                              </div>';
                            }
                            $slidersection .= '</div>
                            <p class="product-card-name">'.$relatedProduct->name.'</p>
                          </div></a>';
                            }
            $slidersection .= '</div>
            </div>
          </section>';
            }
        }
        return $slidersection;
    }

    public function productTagSlider($id)
    {
        if ($id != 0) {
            $tags = Tags::findOrFail($id);
            $productIds = explode(',', $tags->product_id);
            $relatedProducts = Product::whereIn('id', $productIds)->with(['images' => function ($query) {
                $query->where('default_status', 'Y');
            }])->get();
            // $sectionimages = SectionImage::where('section_id', $id)->get();
            // $count = $sectionimages->count();
            if ($relatedProducts) {
            $slidersection = '<section class="sim-products container">
            <div class="row">
              <div class="col">
                <p class="main-heading">'.$tags->name.'</p>
              </div>
              <!--<div class="col" style="text-align: right;">
                <a href="#" class="product-link">View all</a>
              </div>--!>
            </div>
            <div class="owl-slider">
              <div id="deal-carousel" class="owl-carousel">';
                    foreach ($relatedProducts as $relatedProduct) {
                            $imagePath = url('img/articles/products/' . $relatedProduct->images->first()->image);
                            $reduced_price = ($relatedProduct->price * $relatedProduct->discount / 100);
                            $discounted_price = $relatedProduct->price - $reduced_price;
                            $slidersection .= '<a href="'.route('home.productdetail', ['id' => $relatedProduct->link]).'"><div class="product-card">
                            <div class="wish-container"><i class="bi bi-heart-fill product-card-wish"></i></div>
                            <div class="product-card-image">
                              <img
                                src="' . $imagePath . '"
                                alt="" />
                            </div>
                            <div class="off-row">';
                            if($relatedProduct->discount != 0 || $relatedProduct->discount != ''){
                            $slidersection .= '<div class="offer-capsule">
                                <p>'.$relatedProduct->discount.'% off</p>
                              </div>';
                            }
                              $slidersection .= '</div>
                            <div class="row">
                              <div class="col">
                                <p class="card-price">&#8377;'.number_format($discounted_price, 0, '.', ',').'</p>
                              </div>';
                              if($relatedProduct->discount != 0 || $relatedProduct->discount != ''){
                                $slidersection .= '<div class="col">
                                <p class="card-price strike">&#8377;'.number_format($relatedProduct->price, 0, '.', ',').'</p>
                              </div>';
                            }
                            $slidersection .= '</div>
                            <p class="product-card-name">'.$relatedProduct->name.'</p>
                          </div></a>';
                            }
            $slidersection .= '</div>
            </div>
          </section>';
            }
        }
        return $slidersection;
    }

    public function productTagSliderName($id)
    {
        if ($id != '') {
            $tags = Tags::where('name', $id)->first();
            $productIds = explode(',', $tags->product_id);
            $relatedProducts = Product::whereIn('id', $productIds)->with(['images' => function ($query) {
                $query->where('default_status', 'Y');
            }])->get();
            // $sectionimages = SectionImage::where('section_id', $id)->get();
            // $count = $sectionimages->count();
            if ($relatedProducts) {
            $slidersection = '<section class="sim-products container">
            <div class="row">
              <div class="col">
                <p class="main-heading">'.$tags->name.'</p>
              </div>
              <!--<div class="col" style="text-align: right;">
                <a href="#" class="product-link">View all</a>
              </div>--!>
            </div>
            <div class="owl-slider">
              <div id="deal-carousel" class="owl-carousel">';
                    foreach ($relatedProducts as $relatedProduct) {
                            $imagePath = url('img/articles/products/' . $relatedProduct->images->first()->image);
                            $reduced_price = ($relatedProduct->price * $relatedProduct->discount / 100);
                            $discounted_price = $relatedProduct->price - $reduced_price;
                            $slidersection .= '<a href="'.route('home.productdetail', ['id' => $relatedProduct->link]).'"><div class="product-card">
                            <div class="wish-container"><i class="bi bi-heart-fill product-card-wish"></i></div>
                            <div class="product-card-image">
                              <img
                                src="' . $imagePath . '"
                                alt="" />
                            </div>
                            <div class="off-row">';
                            if($relatedProduct->discount != 0 || $relatedProduct->discount != ''){
                            $slidersection .= '<div class="offer-capsule">
                                <p>'.$relatedProduct->discount.'% off</p>
                              </div>';
                            }
                              $slidersection .= '</div>
                            <div class="row">
                              <div class="col">
                                <p class="card-price">&#8377;'.number_format($discounted_price, 0, '.', ',').'</p>
                              </div>';
                              if($relatedProduct->discount != 0 || $relatedProduct->discount != ''){
                                $slidersection .= '<div class="col">
                                <p class="card-price strike">&#8377;'.number_format($relatedProduct->price, 0, '.', ',').'</p>
                              </div>';
                            }
                            $slidersection .= '</div>
                            <p class="product-card-name">'.$relatedProduct->name.'</p>
                          </div></a>';
                            }
            $slidersection .= '</div>
            </div>
          </section>';
            }
        }
        return $slidersection;
    }
}
