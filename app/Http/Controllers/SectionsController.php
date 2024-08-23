<?php

namespace App\Http\Controllers;

use App\Models\Section;
use App\Models\Content;
use App\Models\Category;
use App\Models\ContentImage;
use App\Models\SectionImage;
use App\Models\Tags;
use App\Models\Setting;
use App\Models\Page;
use App\Models\Module;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class SectionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $parent = Crypt::decrypt($id);
        $contents = Section::where('content_id', $parent)->orderBy('order', 'asc')->get();
        $count = $contents->count();
        $pageDetails = Page::find(31);
        $moduleDetails = Module::find($pageDetails->module_id);
        $parentDetails = Content::find($parent);
        return view('wbxadmin.contents.section', compact('contents','count','pageDetails','moduleDetails','parentDetails') );
    }

    public function catsecindex($id)
    {
        $parent = Crypt::decrypt($id);
        $sections = Section::where('category_id', $parent)->orderBy('order', 'asc')->get();
        $count = $sections->count();
        $pageDetails = Page::find(41);
        $moduleDetails = Module::find($pageDetails->module_id);
        $parentDetails = Category::find($parent);
        return view('wbxadmin.categories.section', compact('sections','count','pageDetails','moduleDetails','parentDetails') );
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
        $tags = Tags::all();
        $settings = Setting::find(2);
        $pageDetails = Page::find(32);
        $moduleDetails = Module::find($pageDetails->module_id);
        $parentDetails = Content::find($parent);
        return view('wbxadmin.contents.sectioncreate',compact('settings','pageDetails','moduleDetails','parentDetails','tags'));
    }

    public function catseccreate()
    {
        $parent = request()->input('parent');
        if ($parent != '') {
            $parent = Crypt::decrypt($parent);
        }
        $settings = Setting::find(2);
        $pageDetails = Page::find(42);
        $moduleDetails = Module::find($pageDetails->module_id);
        $parentDetails = Category::find($parent);
        return view('wbxadmin.categories.sectioncreate',compact('settings','pageDetails','moduleDetails','parentDetails'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $section = new Section();
        $section->name = $request->input('name');
        $section->content_id = $request->input('content_id');
        $section->type = $request->input('type');
        $section->function_ret = $request->input('function_ret');
        $section->image_type = $request->input('image_type');
        $section->description = $request->input('description');
        $section->status = $request->input('status');
        $section->order = $section->id;
        $section->created_at = now();
        $section->save();
        $sectionId = $section->id;
        // image upload //
        if($request->file('images')){
            foreach ($request->file('images') as $key => $image) {
                $contentimage = new SectionImage();
                $imageName = time() . '_' . $key . '.' . $image->extension();
                $image->move(public_path('wx.images/contents/articles'), $imageName);
                $contentimage->section_id = $sectionId;  
                $contentimage->image = $imageName;  
                $contentimage->alt = $request->input('alt')[$key];  
                $contentimage->link = $request->input('link')[$key];  
                $contentimage->save();
            }
        }
        $parent = $section->content_id;
        $contents = Section::where('content_id', $parent)->get();
        $count = $contents->count();
        $pageDetails = Page::find(31);
        $moduleDetails = Module::find($pageDetails->module_id);
        $parentDetails = Content::find($parent);
        return view('wbxadmin.contents.section', compact('contents','count','pageDetails','moduleDetails','parentDetails') );

    }


    public function catsecstore(Request $request, $id)
    {
        $section = new Section();
        $section->name = $request->input('name');
        $section->category_id = $request->input('category_id');
        $section->type = $request->input('type');
        $section->image_type = $request->input('image_type');
        $section->function_ret = $request->input('function_ret');
        $section->description = $request->input('description');
        $section->status = $request->input('status');
        $section->order = $section->id;
        $section->created_at = now();
        $section->save();
        $sectionId = $section->id;
        // image upload //
        if($request->file('images')){
            foreach ($request->file('images') as $key => $image) {
                $contentimage = new SectionImage();
                $imageName = time() . '_' . $key . '.' . $image->extension();
                $image->move(public_path('wx.images/contents/articles'), $imageName);
                $contentimage->section_id = $sectionId;  
                $contentimage->image = $imageName;  
                $contentimage->alt = $request->input('alt')[$key];  
                $contentimage->link = $request->input('link')[$key];  
                $contentimage->save();
            }
        }
        $parent = $section->category_id;
        $sections = Section::where('category_id', $parent)->get();
        $count = $sections->count();
        $pageDetails = Page::find(41);
        $moduleDetails = Module::find($pageDetails->module_id);
        $parentDetails = Category::find($parent);
        return view('wbxadmin.categories.section', compact('sections','count','pageDetails','moduleDetails','parentDetails') );
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
        $section =Section::find($id);
        $pages = Page::where('module_id', $id)->get();
        $images = SectionImage::where('section_id', $id)->get();
        $count = $pages->count();
        $tags = Tags::all();
        $settings = Setting::find(2);
        $pageDetails = Page::find(33);
        $parentDetails = Content::find($section->content_id);
        $moduleDetails = Module::find($pageDetails->module_id);
        return view('wbxadmin.contents.sectionedit', compact('section','images','pages','count','settings','pageDetails','moduleDetails','parentDetails','tags') );
    }

    public function catsecedit($id)
    {
        $id = Crypt::decrypt($id);
        $section =Section::find($id);
        $pages = Page::where('module_id', $id)->get();
        $images = SectionImage::where('section_id', $id)->get();
        $count = $pages->count();
        $settings = Setting::find(2);
        $pageDetails = Page::find(33);
        $parentDetails = Category::find($section->category_id);
        $moduleDetails = Module::find($pageDetails->module_id);
        return view('wbxadmin.categories.sectionedit', compact('section','images','pages','count','settings','pageDetails','moduleDetails','parentDetails') );
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
        $section = Section::find($id);
        $section->name = $request->input('name');
        $section->type = $request->input('type');
        $section->function_ret = $request->input('function_ret');
        $section->image_type = $request->input('image_type');
        $section->description = $request->input('description');
        $section->status = $request->input('status');
        $section->updated_at = now();   
        $section->save();
        if($request->file('images')){
            foreach ($request->file('images') as $key => $image) {
                $contentimage = new SectionImage();
                $imageName = time() . '_' . $key . '.' . $image->extension();
                $image->move(public_path('wx.images/contents/articles'), $imageName);
                $contentimage->section_id = $id;  
                $contentimage->image = $imageName;  
                $contentimage->alt = $request->input('alt')[$key];  
                $contentimage->link = $request->input('link')[$key];  
                $contentimage->save();
            }
        }
        $id = Crypt::encrypt($id);
        return redirect()->route('contents.sectionedit',$id);
        // return view('wbxadmin.contents.sectionedit', compact('section','pages','count','settings','pageDetails','moduleDetails','parentDetails') );

    }

    public function updateOrder(Request $request)
    {
        $order = $request->input('order');
        foreach ($order as $index => $contentId) {
            $content = Section::find($contentId);
            if ($content) {
                $content->order = $index + 1;
                $content->save();
            }
        }
        return back()->with('success', 'Order updated successfully!');
    }

    public function catsecupdate(Request $request, $id)
    {
        $section = Section::find($id);
        $section->name = $request->input('name');
        $section->type = $request->input('type');
        $section->image_type = $request->input('image_type');
        $section->function_ret = $request->input('function_ret');
        $section->description = $request->input('description');
        $section->updated_at = now();   
        $section->save();
        if($request->file('images')){
            foreach ($request->file('images') as $key => $image) {
                $contentimage = new SectionImage();
                $imageName = time() . '_' . $key . '.' . $image->extension();
                $image->move(public_path('wx.images/contents/articles'), $imageName);
                $contentimage->section_id = $id;  
                $contentimage->image = $imageName;  
                $contentimage->alt = $request->input('alt')[$key];  
                $contentimage->link = $request->input('link')[$key];  
                $contentimage->save();
            }
        }
        $id = Crypt::encrypt($id);
        return redirect()->route('categories.sectionedit',$id);
        // return view('wbxadmin.contents.sectionedit', compact('section','pages','count','settings','pageDetails','moduleDetails','parentDetails') );

    }

    public function updateCatOrder(Request $request)
    {
        $order = $request->input('order');
        foreach ($order as $index => $contentId) {
            $content = Section::find($contentId);
            if ($content) {
                $content->order = $index + 1;
                $content->save();
            }
        }
        return back()->with('success', 'Order updated successfully!');
    }

    public function secImageUpdate(Request $request, $id)
    {
        $sectionimg = SectionImage::find($id);
        $sectionimg->link = $request->input('link');
        $sectionimg->alt = $request->input('alt');
        $sectionimg->updated_at = now();   
        if($request->file('images')){
            $image = $request->file('images');
            $oldImagePath = public_path('wx.images/contents/articles') . '/' . $sectionimg->image;
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            $imageName = time() .'.'. $image->extension();
            $image->move(public_path('wx.images/contents/articles'), $imageName);
            $sectionimg->image = $imageName;  
        }
        $sectionimg->save();

        $id = Crypt::encrypt($sectionimg->section_id);
        return redirect()->route('contents.sectionedit',$id);

    }

    public function secImageDelete(Request $request, $id)
    {
        $sectionimg = SectionImage::find($id);
        $sec_id = $sectionimg->section_id;
        $oldImagePath = public_path('wx.images/contents/articles') . '/' . $sectionimg->image;
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
        $sectionimg->delete();
        $id = Crypt::encrypt($sec_id);
        return redirect()->route('contents.sectionedit',$id);
    }

    public function secCatImageUpdate(Request $request, $id)
    {
        $sectionimg = SectionImage::find($id);
        $sectionimg->link = $request->input('link');
        $sectionimg->alt = $request->input('alt');
        $sectionimg->updated_at = now();   
        if($request->file('images')){
            $image = $request->file('images');
            $oldImagePath = public_path('wx.images/contents/articles') . '/' . $sectionimg->image;
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            $imageName = time() .'.'. $image->extension();
            $image->move(public_path('wx.images/contents/articles'), $imageName);
            $sectionimg->image = $imageName;  
        }
        $sectionimg->save();

        $id = Crypt::encrypt($sectionimg->section_id);
        return redirect()->route('categories.sectionedit',$id);

    }

    public function secCatImageDelete(Request $request, $id)
    {
        $sectionimg = SectionImage::find($id);
        $sec_id = $sectionimg->section_id;
        $oldImagePath = public_path('wx.images/contents/articles') . '/' . $sectionimg->image;
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
        $sectionimg->delete();
        $id = Crypt::encrypt($sec_id);
        return redirect()->route('categories.sectionedit',$id);
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
}
