<?php

namespace App\Http\Controllers;

use App\Traits\CommonTraits;


use App\Models\Product;
use App\Models\ProductImage;
use App\Models\Category;
use App\Models\Setting;
use App\Models\Page;
use App\Models\Module;
use App\Models\Brand;
use App\Models\ProductSpec;
use App\Models\Specification;
use App\Models\SpecVlue;
use App\Models\Tags;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class ProductsController extends Controller
{
    use CommonTraits;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = request()->input('category');
        if ($category != '') {
            $categorydet = Category::where('link', $category)->first();
            $products = Product::whereRaw("FIND_IN_SET($categorydet->id, category)")->with(['images' => function ($query) {
                $query->where('default_status', 'Y');
            }])->orderBy('order', 'asc')->get();
        }
        else {
        $products = Product::with(['images' => function ($query) {
            $query->where('default_status', 'Y');
        }])->orderBy('order', 'asc')->get();
        } 
        $count = $products->count();
        $pageDetails = Page::find(12);
        $moduleDetails = Module::find($pageDetails->module_id);
        foreach ($products as $product) {
            $categoryIds = explode(',', $product['category']);
            $categoryNames = Category::whereIn('id', $categoryIds)->pluck('name')->toArray();
            $product->categories = implode(', ', $categoryNames);
            $tags = Tags::whereRaw("FIND_IN_SET($product->id, product_id)")->pluck('name')->toArray();
            $product->tags = implode(', ', $tags);
        }
        return view('wbxadmin.products.index', compact('products','count','pageDetails','moduleDetails') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $tags = Tags::all();
        $settings = Setting::find(2);
        $pageDetails = Page::find(13);
        $moduleDetails = Module::find($pageDetails->module_id);
        $ProdCategoriesChkbox = $this->getProdCategoriesChkbox();
        return view('wbxadmin.products.create',compact('categories','tags','settings','pageDetails','moduleDetails','ProdCategoriesChkbox'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product();
        $validatedData = $request->validate([
            'name' => ['required', 'unique:products,name'],
            'link' => ['required', 'unique:products,link'],
            'meta_keyword' => ['required'],
            'meta_description' => ['required'],
            'long_description' => ['required'],
            'category' => ['required'],
            'images' => $request->input('news_type') === 'I' ? 'required|array|min:1' : 'nullable|array',
            'videos' => $request->input('news_type') === 'V' ? 'required|url|regex:/^https:\/\/(?:www\.)?youtube\.com\/watch\?v=[\w-]+$/' : 'nullable',
            'meta_title' => ['required', 'unique:products,meta_title'],],
            [
                'name.required' => 'The news name field is required.',
                'link.required' => 'The news slug field is required.',
                'category.required' => 'The news category should be selected.',
                'meta_title.required' => 'The product title field is required.',
            ]);
        $product->name = $request->input('name');
        $categoryIds = [];
        foreach ($request->input('category') as $category) {
            $categoryIds[] = $category;
        }
        $categoryString = implode(',', $categoryIds);
        $product->category = $categoryString;
        $product->brand = $request->input('brand');
        $product->meta_title = $request->input('meta_title');
        $product->meta_keyword = $request->input('meta_keyword');
        $product->meta_description = $request->input('meta_description');
        $product->short_description = $request->input('short_description');
        $product->long_description = $request->input('long_description');
        $product->link = $request->input('link');
        $product->ext_link = $request->input('ext_link');
        $product->price = $request->input('price');
        $product->discount = $request->input('discount');
        $product->news_type = $request->input('news_type');
        $product->availability = $request->input('availability');
        $product->unique_id = $request->input('unique_id');
        $product->order = "0";
        $product->status = "Y";
        $product->created_at = now();
        $product->save();
        $productId = $product->id;
        if ($request->input('news_type') == 'I') {
            if ($request->file('images')) 
            {
                foreach ($request->file('images') as $key => $image) {
                    $productimage = new ProductImage();
                    $imageName = time() . '_' . $key . '.' . $image->extension();
                    $image->move(public_path('img/articles/products'), $imageName);
                    $productimage->product_id = $productId;  
                    $productimage->image = $imageName;  
                    $productimage->type = 'I';  
                    $productimage->alt = $request->input('alt')[$key];
                    $productimage->ord = $request->input('order')[$key];
                    $productimage->default_status = ($key == '0') ? 'Y' : 'N';
                    $productimage->save();
                }
            }
        }
        elseif ($request->input('news_type') == 'V') {
            if ($request->input('videos')) 
            {
                $productimage = new ProductImage();
                $productimage->product_id = $productId;  
                $productimage->image = $request->input('videos');  
                $productimage->type = 'V';  
                $productimage->ord = '1';
                $productimage->default_status = 'Y';
                $productimage->save();
            }
        }
        if ($request->input('selectTags')) {
            foreach ($request->input('selectTags') as $tagId) {
                $tags = Tags::find($tagId);
                if ($tags) { 
                    $productIds = explode(',', $tags->product_id);
                    $newProductId = $productId; 
                    if (!in_array($newProductId, $productIds)) {
                        $productIds[] = $newProductId;
                        $tags->product_id = implode(',', $productIds);
                        $tags->save();
                    }
                }
            }
        }
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($category, $subcategory, $year, $month, $day, $slug)
    {
        // Retrieve the news item based on the parameters
        $newsItem = Product::where('category', $category)
            ->where('subcategory', $subcategory)
            ->whereYear('created_at', $year)
            ->whereMonth('created_at', $month)
            ->whereDay('created_at', $day)
            ->where('slug', $slug)
            ->firstOrFail();

        // Return the view with the news item
        return view('news.show', compact('newsItem'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $id = Crypt::decrypt($id);
        $product = Product::with('images')->find($id);
        $pages = Page::where('module_id', $id)->get();
        $tags = Tags::all();
        $images = ProductImage::where('product_id', $id)->get();
        $brands = Brand::all();
        $count = $pages->count();
        $categoryIds = explode(',', $product['category']);
        $specifications = Specification::with('specVlues')->whereIn('category_id', $categoryIds)->get();
        $settings = Setting::find(2);
        $pageDetails = Page::find(14);
        $moduleDetails = Module::find($pageDetails->module_id);
        $ProdCategoriesChkbox = $this->getProdCategoriesCheckedChkbox($id);
        $productSpec = ProductSpec::where('product_id',$id)->get();
        $productTags = Tags::whereRaw("FIND_IN_SET($id, product_id)")->get();
        return view('wbxadmin.products.edit', compact('product','images','productSpec','specifications','tags','productTags','brands','pages','count','settings','pageDetails','moduleDetails','ProdCategoriesChkbox') );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $validatedData = $request->validate([
            'name' => ['required', Rule::unique('products')->where(function ($query) use ($id) {
                return $query->where('id', '<>', $id);
            })],
            'link' => ['required', Rule::unique('products')->where(function ($query) use ($id) {
                return $query->where('id', '<>', $id);
            })],
            'meta_title' => ['required', Rule::unique('products')->where(function ($query) use ($id) {
                return $query->where('id', '<>', $id);
            })],
            'meta_keyword' => ['required'],
            'meta_description' => ['required'],
            'long_description' => ['required'],
            'category' => ['required'],],
            [
                'name.required' => 'The news name field is required.',
                'link.required' => 'The news slug field is required.',
                'category.required' => 'The news category should be selected.',
                'meta_title.required' => 'The product title field is required.',
            ]);
        $product->name = $request->input('name');
        $categoryIds = [];
        if ($request->input('category')) {
            foreach ($request->input('category') as $category) {
                $categoryIds[] = $category;
            }
        }
        $categoryString = implode(',', $categoryIds);
        $product->category = $categoryString;
        $product->brand = $request->input('brand');
        $product->meta_title = $request->input('meta_title');
        $product->meta_keyword = $request->input('meta_keyword');
        $product->meta_description = $request->input('meta_description');
        $product->short_description = $request->input('short_description');
        $product->long_description = $request->input('long_description');
        $product->link = $request->input('link');
        $product->ext_link = $request->input('ext_link');
        $product->price = $request->input('price');
        $product->discount = $request->input('discount');
        $product->stock = $request->input('stock');
        $product->availability = $request->input('availability');
        $product->unique_id = $request->input('unique_id');
        $product->status = $request->input('status');
        $product->updated_at = now();
        $product->save();
        if ($request->file('images')) 
        {
            foreach ($request->file('images') as $key => $image) {
                $productimage = new ProductImage();
                $imageName = time() . '_' . $key . '.' . $image->extension();
                $image->move(public_path('img/articles/products'), $imageName);
                $productimage->product_id = $id;  
                $productimage->image = $imageName;  
                $productimage->alt = $request->input('alt')[$key];
                $productimage->ord = $request->input('order')[$key];
                $productimage->save();
            }
        }
        if ($request->input('selectTags')) {
            foreach ($request->input('selectTags') as $tagId) {
                $tags = Tags::find($tagId);
                if ($tags) { 
                    $productIds = explode(',', $tags->product_id);
                    $newProductId = $id; 
                    if (!in_array($newProductId, $productIds)) {
                        $productIds[] = $newProductId;
                        $tags->product_id = implode(',', $productIds);
                        $tags->save();
                    }
                }
            }
        }

        
        $existingTags = Tags::all();

        $selectTags = $request->input('selectTags');

        // Check if selectTags is null or not an array
        if ($selectTags === null || !is_array($selectTags)) {
            // Remove the current product ID from all existing tags
            foreach ($existingTags as $existingTag) {
                $productIds = explode(',', $existingTag->product_id);
                $key = array_search($id, $productIds);
                if ($key !== false) {
                    unset($productIds[$key]);
                    $existingTag->product_id = implode(',', $productIds);
                    $existingTag->save();
                }
            }
        } else {
            // Process tags based on the selected ones
            foreach ($existingTags as $existingTag) {
                if (!in_array($existingTag->id, $selectTags)) {
                    $productIds = explode(',', $existingTag->product_id);
                    $key = array_search($id, $productIds);
                    if ($key !== false) {
                        unset($productIds[$key]);
                        $existingTag->product_id = implode(',', $productIds);
                        $existingTag->save();
                    }
                }
            }
        }
        
        // if ($request->has('selectOptions') && is_array($request->input('selectOptions'))) {
        //     foreach ($request->input('selectOptions') as $value) {
        //         $productspecs = ProductSpec::where('product_id', $id)->where('spec_value_id', $value)->get();
        //         if (count($productspecs) > 0) {
        //             continue;
        //         }
        //         $productspec = new ProductSpec();
        //         $productSpecValue = SpecVlue::find($value);
        //         $productSpecific = $productSpecValue->specification;
        //         $productspec->product_id = $id;
        //         $productspec->spec_id = $productSpecific->id;
        //         $productspec->spec_value_id = $productSpecValue->id;
        //         $productspec->spec = $productSpecific->name;
        //         $productspec->spec_value = $productSpecValue->name;
        //         $productspec->created_at = now();
        //         $productspec->save();
        //     }
        // }
        if ($request->has('selectOptions') && is_array($request->input('selectOptions'))) {
            $existingSpecValues = ProductSpec::where('product_id', $id)->pluck('spec_value_id')->toArray();
            foreach ($request->input('selectOptions') as $value) {
                if (!in_array($value, $existingSpecValues)) {
                    $productspec = new ProductSpec();
                    $productSpecValue = SpecVlue::find($value);
                    $productSpecific = $productSpecValue->specification;
                    $productspec->product_id = $id;
                    $productspec->spec_id = $productSpecific->id;
                    $productspec->spec_value_id = $productSpecValue->id;
                    $productspec->spec = $productSpecific->name;
                    $productspec->spec_value = $productSpecValue->name;
                    $productspec->created_at = now();
                    $productspec->save();
                }
            }
            $entriesToDelete = array_diff($existingSpecValues, $request->input('selectOptions'));
            if (!empty($entriesToDelete)) {
                ProductSpec::where('product_id', $id)
                           ->whereIn('spec_value_id', $entriesToDelete)
                           ->delete();
            }
        }
        else {
            ProductSpec::where('product_id', $id)->delete();
        }
        $id = Crypt::encrypt($id);
        return redirect()->route('products.edit',$id);
    }


    public function ImageUpdate(Request $request, $id)
    {
        $productimg = ProductImage::find($id);
        $productimages = ProductImage::where('product_id', $productimg->product_id)->get();
        $productimg->alt = $request->input('alt');
        if($request->file('images')){
            $image = $request->file('images');
            $oldImagePath = public_path('img/articles/products') . '/' . $productimg->image;
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            $imageName = time() .'.'. $image->extension();
            $image->move(public_path('img/articles/products'), $imageName);
            $productimg->image = $imageName;  
        }
        if($request->has('default_status') && $request->input('default_status')){
            foreach ($productimages as $pimage) {
                $productimgs = ProductImage::find($pimage->id);
                $productimgs->default_status = 'N';
                $productimgs->save();
            }
            $productimg->default_status = 'Y';
        }
        $productimg->updated_at = now();   
        $productimg->save();

        $id = Crypt::encrypt($productimg->product_id);
        return redirect()->route('products.edit',$id);

    }

    public function ImageDelete(Request $request, $id)
    {
        $sectionimg = ProductImage::find($id);
        $sec_id = $sectionimg->product_id;
        $oldImagePath = public_path('img/articles/products') . '/' . $sectionimg->image;
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
        $sectionimg->delete();
        $id = Crypt::encrypt($sec_id);
        return redirect()->route('products.edit',$id);
    }

    public function updateOrderNews(Request $request)
    {
        $order = $request->input('order');
        foreach ($order as $index => $contentId) {
            $product = Product::find($contentId);
            if ($product) {
                $product->order = $index + 1;
                $product->save();
            }
        }
        return back()->with('success', 'Order updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('products.index');
    }

    public function deleteProductImage($id)
    {
        $productImage = ProductImage::find($id);
        $productId = $productImage->product_id;
        $productImage->delete();
        $productId = Crypt::encrypt($productId);
        return redirect()->route('products.edit',$productId);
    }


}
