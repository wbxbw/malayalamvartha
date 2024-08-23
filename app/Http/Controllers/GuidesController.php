<?php

namespace App\Http\Controllers;

use App\Traits\CommonTraits;

use App\Models\Guide;
use App\Models\Category;
use App\Models\Setting;
use App\Models\Page;
use App\Models\Module;
use App\Models\Specification;
use App\Models\SpecVlue;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Crypt;

use Illuminate\Http\Request;

class GuidesController extends Controller
{
    use CommonTraits;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::where('parent', '0')->withCount('subCategories')->withCount('subSections')->withCount('catSpecifications')->get()->sortByDesc('id');
        $guides = Guide::all()->sortByDesc('id');
        $pageDetails = Page::find(27);
        $moduleDetails = Module::find($pageDetails->module_id);
        return view('wbxadmin.guides.index', compact('categories','guides','pageDetails','moduleDetails'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function specifications($id)
    {
        $id = Crypt::decrypt($id);
        $category =Category::find($id);
        $specifications = Specification::where('category_id', $id)->withCount('specVlues')->get()->sortByDesc('id');
        $count = $specifications->count();
        $pageDetails = Page::find(35);
        $moduleDetails = Module::find($pageDetails->module_id);
        // $breadcrumbs = Category::crumbsCategories($parent);
        return view('wbxadmin.guides.spec', compact('category','specifications','count','pageDetails','moduleDetails') );
    }

    public function subindex($parent)
    {
        $parent = Crypt::decrypt($parent);
        $categories = Category::where('parent', $parent)->withCount('subCategories')->withCount('catSpecifications')->get()->sortByDesc('id');
        $count = $categories->count();
        $pageDetails = Page::find(15);
        $moduleDetails = Module::find($pageDetails->module_id);
        $parentDetails = Category::find($parent);
        $category = new Category;
        $breadcrumbs = $category->crumbsCategories($parent);
        return view('wbxadmin.guides.sub', compact('categories','count','pageDetails','moduleDetails','parentDetails','breadcrumbs') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parent = request()->input('parent');
        if ($parent != '') {
            $parent = Crypt::decrypt($parent);
        }
        $categories = Category::all();
        $count = $categories->count();
        $settings = Setting::find(2);
        $pageDetails = Page::find(16);
        $moduleDetails = Module::find($pageDetails->module_id);
        $CategoriesDropdownDetails = $this->getCategoriesDropdownDetails($parent);
        return view('wbxadmin.guides.create',compact('categories','count','settings','pageDetails','moduleDetails','CategoriesDropdownDetails'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $category = new Category();
        $validatedData = $request->validate([
            'name' => ['required', 'unique:categories,name'],
            'image'=>['required','max:2048','image'],
            'meta_title' => ['required', 'unique:categories,meta_title'],],
            [
                'name.required' => 'The category name field is required.',
                'meta_title.required' => 'The category title field is required.',
            ]);
        //store image to a variable
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = $image->storeAs('category', $image->getClientOriginalName(),'public');
            $category->image = $image_name;
        }
        $category->name = $request->input('name');
        $category->meta_title = $request->input('meta_title');
        $category->meta_keyword = $request->input('meta_keyword');
        $category->meta_description = $request->input('meta_description');
        $category->link = $request->input('link');
        $category->parent = $request->input('parent');
        $category->status = $request->input('status');
        $category->created_at = now();
        $category->save();
        $categories = Category::where('parent', '0')->withCount('subCategories')->get()->sortByDesc('id');
        $count = $categories->count();
        $pageDetails = Page::find(15);
        $moduleDetails = Module::find($pageDetails->module_id);
        return view('wbxadmin.guides.index', compact('categories','count','pageDetails','moduleDetails') );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $category =Category::find($id);
        $subcategory = Category::where('parent', $id)->get();
        $pages = Page::where('module_id', $id)->get();
        $count = $pages->count();
        $settings = Setting::find(2);
        $pageDetails = Page::find(17);
        $specifications = Specification::where('category_id', $id)->get();
        $moduleDetails = Module::find($pageDetails->module_id);
        $CategoriesDropdownDetails = $this->getCategoriesDropdownDetails($category->parent);
        return view('wbxadmin.guides.edit', compact('category','specifications','subcategory','pages','count','settings','pageDetails','moduleDetails','CategoriesDropdownDetails') );
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
        $category = Category::find($id);
        $category->bg_status = $request->input('bg_status');
        $category->bg_title = $request->input('bg_title');
        $category->bg_keywords = $request->input('bg_keywords');
        $category->bg_description = $request->input('bg_description');
        if ($request->file('img')) {
            $image = $request->file('img');
            $oldImagePath = public_path('wx.images/categories') . '/' . $category->bg_banner;
            if (file_exists($oldImagePath) && $category->bg_banner != '') {
                unlink($oldImagePath);
            }
            $imageName = time() . '_' . 'GI' . '.' . $image->extension();
            $image->move(public_path('wx.images/categories'), $imageName);
            $category->bg_banner = $imageName;  
        }
        $category->save();
        $id = Crypt::encrypt($id);
        return redirect()->route('guides.edit',$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function createSpec($id)
    {
        $id = Crypt::decrypt($id);
        $category = Category::find($id);
        $settings = Setting::find(2);
        $pageDetails = Page::find(36);
        $moduleDetails = Module::find($pageDetails->module_id);
        return view('wbxadmin.categories.createspec',compact('category','settings','pageDetails','moduleDetails'));
    }


   

    public function specvaluesshow($id)
    {
        $id = Crypt::decrypt($id);
        $specifications =Specification::find($id);
        $category = Category::find($specifications->category_id);
        $specvalues = SpecVlue::where('specification_id', $id)->get()->sortByDesc('id');
        $pageDetails = Page::find(38);
        $moduleDetails = Module::find($pageDetails->module_id);
        return view('wbxadmin.guides.specvalues', compact('specvalues', 'category', 'specifications','pageDetails','moduleDetails') );
    }


    public function editSpecValue($id)
    {
        $id = Crypt::decrypt($id);
        $specvalue =SpecVlue::find($id);
        $specification = Specification::find($specvalue->specification_id);
        $pages = Page::where('module_id', $id)->get();
        $count = $pages->count();
        $settings = Setting::find(2);
        $pageDetails = Page::find(40);
        $moduleDetails = Module::find($pageDetails->module_id);
        return view('wbxadmin.guides.editspecvalues', compact('specvalue','specification','pages','count','settings','pageDetails','moduleDetails') );
    }

    public function updatespecvalues(Request $request, $id)
    {
        $specvalue = SpecVlue::find($id);
        // $specvalue->name = $request->input('name');
        $specvalue->bg_description = $request->input('bg_description');
        // $specvalue->status = $request->input('status');
        // $specvalue->updated_at = now();
        $specvalue->save();
        $id = Crypt::encrypt($id);
        return redirect()->route('guides.editspecvalue',$id);
    }

}
