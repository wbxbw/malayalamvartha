<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Page;
use App\Models\Module;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\ProductSpec;
use App\Models\Brand;
use App\Models\Store;
use App\Models\Specification;
use App\Models\SpecVlue;
use App\Models\Tags;
use App\Models\Content;
use App\Models\ContentImage;
use App\Models\Blog;
use App\Models\BlogImage;
use App\Models\Section;
use App\Models\SectionImage;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;



class HomeController extends Controller
{
    public function index()
    {
        $tags = Tags::findOrFail(8);
        $productIds = explode(',', $tags->product_id);
        $homeBannerNews = Product::whereIn('id', $productIds)->with(['images' => function ($query) {
            $query->where('default_status', 'Y');
        }])->where('status', 'Y')->orderBy('order', 'asc')->get();
        $section = new Section;
        $editorsPick = $section->tagNews('Latest News', 4);
        $editorsPick0 = $section->tagNews2('Latest News', 4, 5);
        $editorsPick1 = $section->tagNews1('Latest News', 9, 5, 5);
        $editorsPick2 = $section->tagNews1('Latest News', 14, 5, 4);
        $politicsNews = $section->catNews('Politics', 4);
        $politicsNews2 = $section->catNews2('Politics', 4);
        $techNews = $section->catNews('Technology', 4);
        $categories = Category::where('parent', '0')->where('status', 'Y')->get();
        $news = Product::with('brandn')->with(['images' => function ($query) {
            $query->where('default_status', 'Y');
        }])->where('status', 'Y')->orderBy('order', 'asc')->take(4)->get();
        $contents = Content::where('name', 'Home Page')->first();
        $sections = Section::where('content_id', $contents->id)->orderBy('order', 'asc')->get();
        $homeSidebarSecAdsImages = SectionImage::where('section_id', '37' )->get();
        return view('welcome', compact('news','categories','homeBannerNews','editorsPick','editorsPick0','editorsPick1','editorsPick2','politicsNews','politicsNews2','techNews','sections','homeSidebarSecAdsImages'));
    }

    public function newsinglev1($link){
        $news = Product::where('link', $link)->first();
        $images = ProductImage::where('product_id', $news->id)->where('default_status', 'Y')->first();
        $categoryIds = explode(',', $news['category']);
        $categoryNames = Category::whereIn('id', $categoryIds)->where('parent', '0')->pluck('name')->toArray();
        $news->categories = implode(', ', $categoryNames);
        return view('newsinglev1', compact('news','images'));
    }

    public function newsinglev2($link){
        $category = Category::where('link', $link)->with('subCategories')->first();
        $id =  $category->id;
        $section = new Section;
        $editorsPick = $section->tagNews1('Latest News', 0, 5, 6);
        $politicsNews = $section->catNews('Politics', 4);
        $techNews = $section->catNews('Technology', 4);
        $catNews = $section->CategoryNewsWithSub($category->name, 4);
        $news = Product::whereRaw("FIND_IN_SET($id, category)")->with('brandn')->with(['images' => function ($query) {
            $query->where('default_status', 'Y');
        }])->where('status', 'Y')->get();
        $catnewstop = Product::whereRaw("FIND_IN_SET($id, category)")->with('brandn')->with(['images' => function ($query) {
            $query->where('default_status', 'Y');
        }])->where('status', 'Y')->first();
        return view('newsinglev2', compact('category','news','catNews','catnewstop','editorsPick','politicsNews','techNews'));
    }

    // public function categoryDetails($id){

    //     $category = Category::where('id', $id)->first();
    //     $specifications=Specification::where('category_id', $id)->get();
    //     return view('categoryDetails', compact('category','specifications') );
    // }
    
    public function blog($link){
        $contents = Blog::where('link', $link)->first();
        $blog = Blog::where('link', $link)->first();
        $images = BlogImage::where('content_id', $blog->id)->get();
        return view('blog', compact('contents','blog','images'));
    }

    // public function brandlist(){
    //     $contents = Content::find(1);
    //     return view ('brandlist', compact('contents'));
    // }
    
    // public function brandwiselisting(){
    //     $contents = Content::find(1);
    //     return view ('brandwiselisting', compact('contents'));
    // }

    // public function categorylisting(){
    //     $contents = Content::find(1);
    //     return view('categorylisting', compact('contents'));
    // }
    
    public function category($link){
        $contents = Category::where('link', $link)->first();
        $category = Category::where('link', $link)->first();
        $section = new Section();
        $homeBanners = $section->heroSlider(1);
        $sections = Section::where('category_id', $category->id)->orderBy('order', 'asc')->get();
        return view('category', compact('contents','category','sections','homeBanners'));
    }

    public function comparison(Request $request){
        $contents = Content::where('name', 'General Contents')->first();
        $productIds = $request->input('prd', []);
        $products = Product::whereIn('id', $productIds)->with(['images' => function ($query) {
            $query->where('default_status', 'Y');
        }])->get();
        $categoryIds = [];
        foreach ($products as $product) {
            $categoryIds = array_merge($categoryIds, explode(',', $product->category));
        }
        $categoryIds = array_unique($categoryIds);
        $specifications = Specification::whereIn('category_id', $categoryIds)->get();
        return view("comparison", compact('contents','products','specifications'));
    }

    // public function customersupport(){
    //     $contents = Content::find(1);
    //     return view('customersupport', compact('contents'));
    // }

    public function faq(){
        $contents = Content::find(1);
        return view('faq', compact('contents'));
    }

    public function generalcontent(){
        $contents = Content::find(1);
        return view('generalcontent', compact('contents'));
    }
    // public function productbuyinglisting(){
    //     $contents = Content::find(1);
    //     return view('productbuyinglisting', compact('contents'));
    // }
    
    public function productbuyingdetail($link){
        $contents = Category::where('link', $link)->first();
        $category = Category::where('link', $link)->first();
        $specifications = Specification::where('category_id', $category->id)->with('specVlues')->get()->sortByDesc('id');
        return view('productbuyingdetail', compact('contents','category','specifications'));
    }

    public function productdetail($link){
        $contents = Product::where('link', $link)->first();
        $products = Product::where('link', $link)->first();
        $images = ProductImage::where('product_id', $products->id)->get();
        $brand = Brand::where('id', $products->brand)->first();
        $stores = Store::all();
        $productspecs = ProductSpec::where('product_id', $products->id)->get();
        $productdet = new Product();
        $productrel = $productdet->productRelatedSlider($products->id);
        return view('productdetail', compact('contents','products','images','brand','stores','productspecs','productrel'));
    }

    public function productlist(Request $request, $link){

        // $products = Product::whereRaw("FIND_IN_SET($id, category)")->get();
        $contents = Category::where('link', $link)->first();
        $category = Category::where('link', $link)->first();
        $id =  $category->id;
        $selectedSpecValues = '';
        if ($request->input('spec_values')) {

            $selectedSpecValues = $request->input('spec_values');
            $productIds = ProductSpec::whereIn('spec_value_id', $selectedSpecValues)
                ->pluck('product_id')
                ->unique();
            $products = Product::whereIn('id', $productIds)->with('brandn')->with(['images' => function ($query) {
                    $query->where('default_status', 'Y');
                }])->get();
        }
        else {
            $products = Product::whereRaw("FIND_IN_SET($id, category)")->with('brandn')->with(['images' => function ($query) {
                $query->where('default_status', 'Y');
            }])->get();
        }
        $prcount =  $products->count();
        $specifications=Specification::where('category_id', $id)->get();
        // $specifications = Specification::with('specVlues')->whereIn('category_id', $id)->get();
        $count = $products->count();
        $pageDetails = Page::find(12);
        $moduleDetails = Module::find($pageDetails->module_id);
        return view('productlist', compact('products','prcount','contents','category','count','selectedSpecValues','pageDetails','moduleDetails','specifications') );

    }


    // public function productspeciality(){
    //     $contents = Content::find(1);
    //     return view('productspeciality', compact('contents'));
    // }

    public function guides(){
        $contents = Content::where('name', 'General Contents')->first();
        $categories = Category::where('status', 'Y')->where('bg_status', 'Y')->get()->sortByDesc('id');
        return view('guides', compact('categories','contents'));
    }

    public function searchresult(Request $request){
        $contents = Content::where('name', 'General Contents')->first();
        $srch = $request->input('srch_qry');
        $searchType = $request->input('search_type');
        $products = collect();
        if ($searchType == 'product') {
            $products = Product::where('name', 'LIKE', "%{$srch}%")->with('brandn')->with(['images' => function ($query) {
                $query->where('default_status', 'Y');
            }])->get();
        } else if ($searchType == 'category') {
            $category = Category::where('name', $srch)->first();
            $id =  $category->id;
            $products = Product::whereRaw("FIND_IN_SET($id, category)")->with('brandn')->with(['images' => function ($query) {
                $query->where('default_status', 'Y');
            }])->get();
        }
        $prcount =  $products->count();
        return view('searchresult', compact('contents','products','prcount','srch'));
    }

    // public function specialcatogery(){
    //     $contents = Content::find(1);
    //     return view('specialcatogery', compact('contents'));
    // }

    public function settings()
    {
        $settings = Setting::all();
        $count = $settings->count();
        $pageDetails = Page::find(4);
        $moduleDetails = Module::find($pageDetails->module_id);
        return view('wbxadmin.settings', compact('settings','count','pageDetails','moduleDetails') );
    }

    public function profile()
    {
        $settings = Setting::all();
        $count = $settings->count();
        $pageDetails = Page::find(11);
        $moduleDetails = Module::find($pageDetails->module_id);
        return view('wbxadmin.profile', compact('settings','count','pageDetails','moduleDetails') );
    }

    public function wbxadmin()
    {
        if (Auth::check()) 
        {
            $pageDetails = Page::find(30);
            $modules = Module::with('defaultPage')->get();
            if (auth()->user()->isSuperadmin()) {
                $modules = Module::where('status', 'Y')->with('defaultPage')->get();
            } 
            elseif (auth()->user()->isGeneralAdmin()) {
                $userModules = auth()->user()->userModules()->with('module')->where('status', 'Y')->get();
                $modules = $userModules->pluck('module');
            }
            return view('wbxadmin.dashboard',compact('pageDetails','modules'));
        }
        return view('auth.login');
    }

     // public function listadmin()
    // {
    //     return view('listadmin');
    // }



    // public function listadmin()
    // {
    //     return view('listadmin');
    // }

    
    // public function editadmin()
    // {
    //     return view('editadmin');
    // }
    // public function newadmin(){
        
    //     return view('newadmin');
    // }

    // public function permission(){

    //     return view('permission');
    // }
  
    // public function productlist()
    // {
    //     return view('productlist');
    // }

    // public function editproduct()
    // {
    //     return view('editproduct');
    // }

    // public function addproduct()
    // {
    //     return view('addproduct');
    // }

    // public function categorylist(){

    //     return view('categorylist');
    // }

    // public function editcategory(){
        
    //     return view('editcategory');
    // }

    // public function addcategory(){
        
    //     return view('addcategory');
    // }


    // public function listcontent(){
        
    //     return view('listcontent');
    // }
    
    // public function editcontent(){

    //     return view('editcontent');
    // }

    // public function addcontent(){

    //     return view('addcontent');
    // }

    // public function listblog(){

    //     return view('listblog');
    // }
    
    // public function editblog(){

    //     return view('editblog');
    // }

    // public function addblog(){

    //     return view('addblog');
    // }

    // public function listbrand(){

    //     return view('listbrand');
    // }
    
    // public function editbrand(){

    //     return view('editbrand');
    // }
        
    // public function addbrand(){

    //     return view('addbrand');
    // }


    

    // public function members()
    // {
    //     return view('members');
    // }

    // public function books()
    // {
    //     return view('books');
    // }

    // public function subscriptions()
    // {
    //     return view('subscriptions');
    // }

    public function issue()
    {
        $books = Book::all();
        $count = $books->count();
        $authors = Author::all();
        $books = Book::all();
        $categories = Category::all();
        $languages = Language::all();
        $publications = Publication::all();
        $members = Member::join('subscribers', 'members.id', '=', 'subscribers.subscriber_id')
        ->where('subscribers.status', '=', 'A')
        ->get();

        $subscribers = Subscriber::where('status', 'A');

        $borrowings = Member::join('borrowings', 'members.id', '=', 'borrowings.member_id')
        ->where('borrowings.issue_status', '=', 'Temperory')
        ->get();
        
        //$borrowings = Borrowing::where('issue_status', 'Temperory')->get();
        $borrowedbooks = BorrowedBook::all();
        return view('issue', compact('authors','categories','languages','publications','books','borrowings','borrowedbooks','members','subscribers') );
    }
}
