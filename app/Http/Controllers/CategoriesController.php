<?php

namespace App\Http\Controllers;

use App\Traits\CommonTraits;

use App\Models\Category;
use App\Models\Setting;
use App\Models\Page;
use App\Models\Module;
use App\Models\Specification;
use App\Models\SpecVlue;
use App\Models\Brand;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Crypt;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    use CommonTraits;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories = Category::where('parent', '0')->withCount('subCategories')->withCount('subSections')->withCount('catSpecifications')->get()->sortByDesc('id');
        $count = $categories->count();
        $pageDetails = Page::find(15);
        $moduleDetails = Module::find($pageDetails->module_id);
        return view('wbxadmin.categories.index', compact('categories','count','pageDetails','moduleDetails'));

    }

    public function specifications($id)
    {
        $id = Crypt::decrypt($id);
        $category =Category::find($id);
        $specifications = Specification::where('category_id', $id)->withCount('specVlues')->get()->sortByDesc('id');
        $count = $specifications->count();
        $pageDetails = Page::find(35);
        $moduleDetails = Module::find($pageDetails->module_id);
        // $breadcrumbs = Category::crumbsCategories($parent);
        return view('wbxadmin.categories.spec', compact('category','specifications','count','pageDetails','moduleDetails') );
    }

    public function subindex($parent)
    {
        $parent = Crypt::decrypt($parent);
        $categories = Category::where('parent', $parent)->withCount('subCategories')->withCount('subSections')->withCount('catSpecifications')->get()->sortByDesc('id');
        $count = $categories->count();
        $pageDetails = Page::find(15);
        $moduleDetails = Module::find($pageDetails->module_id);
        $parentDetails = Category::find($parent);
        // $breadcrumbs = Category::crumbsCategories($parent);
        $category = new Category;

// Call the non-static method on the instance
        
        $breadcrumbs = $category->crumbsCategories($parent);
        return view('wbxadmin.categories.sub', compact('categories','count','pageDetails','moduleDetails','parentDetails','breadcrumbs') );
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
        return view('wbxadmin.categories.create',compact('categories','count','settings','pageDetails','moduleDetails','CategoriesDropdownDetails'));
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
            // 'image'=>['required','max:2048','image'],
            'meta_title' => ['required', 'unique:categories,meta_title'],],
            [
                'name.required' => 'The category name field is required.',
                'meta_title.required' => 'The category title field is required.',
            ]);
        //store image to a variable
        if ($request->hasFile('img')) {
            $image = $request->file('img');
            $imageName = time() . '_' . 'CI' . '.' . $image->extension();
            $image->move(public_path('wx.images/categories'), $imageName);
            $category->img = $imageName;

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
        return view('wbxadmin.categories.index', compact('categories','count','pageDetails','moduleDetails') );
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
        $brands =Brand::all();
        $brandIds = explode(',', $category['brand']);
        $categoryBrands = Brand::whereIn('id', $brandIds)->pluck('id')->toArray();
        $subcategory = Category::where('parent', $id)->get();
        $pages = Page::where('module_id', $id)->get();
        $count = $pages->count();
        $settings = Setting::find(2);
        $pageDetails = Page::find(17);
        $specifications = Specification::where('category_id', $id)->get();
        $moduleDetails = Module::find($pageDetails->module_id);
        $CategoriesDropdownDetails = $this->getCategoriesDropdownDetails($category->parent);
        return view('wbxadmin.categories.edit', compact('category','brands','categoryBrands','specifications','subcategory','pages','count','settings','pageDetails','moduleDetails','CategoriesDropdownDetails') );
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
        $validatedData = $request->validate([
            'name' => ['required', Rule::unique('categories')->where(function ($query) use ($id) {
                return $query->where('id', '<>', $id);
            })],
            'meta_title' => ['required', Rule::unique('categories')->where(function ($query) use ($id) {
                return $query->where('id', '<>', $id);
            })],],
            [
                'name.required' => 'The category name field is required.',
                'meta_title.required' => 'The category title field is required.',
            ]);
        // update image
        
        if ($request->file('img')) {
            $image = $request->file('img');
            $oldImagePath = public_path('wx.images/categories') . '/' . $category->img;
            if (file_exists($oldImagePath) && $category->img != '') {
                unlink($oldImagePath);
            }
            $imageName = time() . '_' . 'CI' . '.' . $image->extension();
            $image->move(public_path('wx.images/categories'), $imageName);
            $category->img = $imageName;  
        }
        $category->name = $request->input('name');
        $category->meta_title = $request->input('meta_title');
        $category->meta_keyword = $request->input('meta_keyword');
        $category->meta_description = $request->input('meta_description');
        $category->link = $request->input('link');
        $brandIds = [];
        if ($request->input('selectBrands')) {
            foreach ($request->input('selectBrands') as $brand) {
                $brandIds[] = $brand;
            }
        }
        $brandString = implode(',', $brandIds);
        $category->brand = $brandString;
        $category->parent = $request->input('parent');
        $category->status = $request->input('status');
        $category->updated_at = now();
        $category->save();
        $id = Crypt::encrypt($id);
        return redirect()->route('categories.edit',$id);
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

    public function addSpec(Request $request){

        $request->validate([
            'name' => 'required',
        ]);
        $specification = new Specification();
        $specification->name = $request->input('name');
        $specification->description = $request->input('description');
        $specification->category_id = $request->input('category_id');
        $specification->status = $request->input('status');
        $id = $request->input('category_id');
        $specification->created_at = now();
        $specification->save();
        return redirect()->route('categories.specifications',Crypt::encrypt($id));

    }

    public function editSpec($id)
    {
        $id = Crypt::decrypt($id);
        $specification =Specification::find($id);
        $category = Category::find($specification->category_id);
        $pages = Page::where('module_id', $id)->get();
        $count = $pages->count();
        $settings = Setting::find(2);
        $pageDetails = Page::find(37);
        $moduleDetails = Module::find($pageDetails->module_id);
        return view('wbxadmin.categories.editspec', compact('category','specification','pages','count','settings','pageDetails','moduleDetails') );
    }

    public function updatespec(Request $request, $id)
    {
        $specification = Specification::find($id);
        $specification->name = $request->input('name');
        $specification->description = $request->input('description');
        $specification->status = $request->input('status');
        $specification->updated_at = now();
        $specification->save();
        $id = Crypt::encrypt($id);
        return redirect()->route('categories.editspec',$id);
    }


    

    public function deleteSpec($id){
        $specification = Specification::find($id);
        $category_id = $specification->category_id;
        $specification->delete();
        return redirect()->route('categories.edit',Crypt::encrypt($category_id));
    }

    public function specvaluesshow($id)
    {
        $id = Crypt::decrypt($id);
        $specifications =Specification::find($id);
        $category = Category::find($specifications->category_id);
        $specvalues = SpecVlue::where('specification_id', $id)->get()->sortByDesc('id');
        $pageDetails = Page::find(38);
        $moduleDetails = Module::find($pageDetails->module_id);
        return view('wbxadmin.categories.specvalues', compact('specvalues', 'category', 'specifications','pageDetails','moduleDetails') );
    }

    public function createSpecValues($id)
    {
        $id = Crypt::decrypt($id);
        $specification = Specification::find($id);
        $settings = Setting::find(2);
        $pageDetails = Page::find(39);
        $moduleDetails = Module::find($pageDetails->module_id);
        return view('wbxadmin.categories.createspecvalues',compact('specification','settings','pageDetails','moduleDetails'));
    }

    public function addSpecVal(Request $request){


        $request->validate([
            'name' => 'required',
        ]);

        $specification_value = new SpecVlue();
        $specification_value->specification_id = $request->input('specification');
        $specification_value->name = $request->input('name');
        $specification_value->description = $request->input('description');
        $specification_value->status = $request->input('status');
        $specification_value->created_at = now();
        $id = $request->input('specification');
        $specification_value->save();
        return redirect()->route('categories.specvalues',Crypt::encrypt($id));
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
        return view('wbxadmin.categories.editspecvalues', compact('specvalue','specification','pages','count','settings','pageDetails','moduleDetails') );
    }

    public function updatespecvalues(Request $request, $id)
    {
        $specvalue = SpecVlue::find($id);
        $specvalue->name = $request->input('name');
        $specvalue->description = $request->input('description');
        $specvalue->status = $request->input('status');
        $specvalue->updated_at = now();
        $specvalue->save();
        $id = Crypt::encrypt($id);
        return redirect()->route('categories.editspecvalue',$id);
    }

    public function deleteSpecVal($id){
        $specification_value = SpecVlue::find($id);
        $specification = Specification::find($specification_value->specification_id);
        $category_id = $specification->category_id;
        $specification_value->delete();
        return redirect()->route('categories.edit',Crypt::encrypt($category_id));
    }
}
