<?php

namespace App\Http\Controllers;

use App\Traits\CommonTraits;

use App\Models\Content;
use App\Models\ContentImage;
use App\Models\Setting;
use App\Models\Page;
use App\Models\Module;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class ContentsController extends Controller
{
    use CommonTraits;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $contents = Content::where('parent', '0')->withCount('subContents')->withCount('subSections')->get();
        $count = $contents->count();
        $pageDetails = Page::find(18);
        $moduleDetails = Module::find($pageDetails->module_id);
        return view('wbxadmin.contents.index', compact('contents','count','pageDetails','moduleDetails') );
    }

    public function subindex($parent)
    {   
        $parent = Crypt::decrypt($parent);
        $contents = Content::where('parent', $parent)->withCount('subContents')->withCount('subSections')->get();
        $count = $contents->count();
        $pageDetails = Page::find(18);
        $moduleDetails = Module::find($pageDetails->module_id);
        $parentDetails = Content::find($parent);
        $content = new Content;
        $breadcrumbs = $content->crumbsContents($parent);
        return view('wbxadmin.contents.sub', compact('contents','count','pageDetails','moduleDetails','parentDetails','breadcrumbs') );
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
        $contents = Content::all();
        $count = $contents->count();
        $settings = Setting::find(2);
        $pageDetails = Page::find(19);
        $moduleDetails = Module::find($pageDetails->module_id);
        $ContentsDropdownDetails = $this->getContentsDropdownDetails($parent);
        return view('wbxadmin.contents.create',compact('contents','count','settings','pageDetails','moduleDetails','ContentsDropdownDetails'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $content = new Content();
        $validatedData = $request->validate([
            'name' => ['required', 'unique:contents,name'],
            'meta_title' => ['required', 'unique:contents,meta_title'],],
            [
                'name.required' => 'The content name field is required.',
                'meta_title.required' => 'The content title field is required.',
            ]);
        $content->name = $request->input('name');
        $content->meta_title = $request->input('meta_title');
        $content->meta_keyword = $request->input('meta_keyword');
        $content->meta_description = $request->input('meta_description');
        $content->link = $request->input('link');
        $content->short_description = $request->input('short_description');
        $content->long_description = $request->input('long_description');
        $content->parent = $request->input('parent');
        $content->status = $request->input('status');
        $content->order = '0';
        $content->menu_display = "Y";
        // $content->status = "Y";
        $content->created_at = now();
        $content->save();
        $contentId = $content->id;
        // image upload //
        if ($request->file('images')) 
        {
            foreach ($request->file('images') as $key => $image) {
                $contentimage = new ContentImage();
                $imageName = time() . '_' . $key . '.' . $image->extension();
                $image->move(public_path('wx.images/contents/articles'), $imageName);
                $contentimage->content_id = $contentId;  
                $contentimage->image = $imageName;  
                $contentimage->alt = $request->input('alt')[$key];
                $contentimage->ord = $request->input('order')[$key];  
                $contentimage->save();
            }
        }
        return redirect()->route('contents.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($link)
    {
        $contents = Content::where('link', $link)->where('type', 'page')->get();
        if (!$contents) {
            abort(404);
        }
        else {
            return view('welcome', ['contents' => $contents]);
        }
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
        $content =Content::find($id);
        $pages = Page::where('module_id', $id)->get();
        $images = ContentImage::where('content_id', $id)->get();
        $count = $pages->count();
        $settings = Setting::find(2);
        $pageDetails = Page::find(20);
        $moduleDetails = Module::find($pageDetails->module_id);
        $ContentsDropdownDetails = $this->getContentsDropdownDetails($content->parent);
        return view('wbxadmin.contents.edit', compact('content','pages','count','settings','images','pageDetails','moduleDetails','ContentsDropdownDetails') );
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
        $content = Content::find($id);
        $images = ContentImage::where('content_id', $id)->get();
        $validatedData = $request->validate([
            'name' => ['required', Rule::unique('contents')->where(function ($query) use ($id) {
                return $query->where('id', '<>', $id);
            })],
            'meta_title' => ['required', Rule::unique('contents')->where(function ($query) use ($id) {
                return $query->where('id', '<>', $id);
            })],],
            [
                'name.required' => 'The content name field is required.',
                'meta_title.required' => 'The content title field is required.',
            ]);
        $content->name = $request->input('name');
        $content->meta_title = $request->input('meta_title');
        $content->meta_keyword = $request->input('meta_keyword');
        $content->meta_description = $request->input('meta_description');
        $content->link = $request->input('link');
        $content->short_description = $request->input('short_description');
        $content->long_description = $request->input('long_description');
        $content->parent = $request->input('parent');
        $content->status = $request->input('status');
        // $content->menu_display = $request->input('menu_display');
        // $content->order = $request->input('order');
        // $content->status = $request->input('status');
        $content->updated_at = now();
        $content->save();
        if ($request->hasFile('images')) 
        {
            // foreach ($images as $image) {
            //     $oldImagePath = public_path('wx.images/contents/articles') . '/' . $image->image;
            //     if (file_exists($oldImagePath)) {
            //         unlink($oldImagePath);
            //     }
            //     $image->delete();
            // }
            foreach ($request->file('images') as $key => $image) {
                $contentimage = new ContentImage();
                $imageName = time() . '_' . $key . '.' . $image->extension();
                $image->move(public_path('wx.images/contents/articles'), $imageName);
                $contentimage->content_id = $id;  
                $contentimage->image = $imageName;  
                $contentimage->alt = $request->input('alt')[$key];
                $contentimage->ord = $request->input('order')[$key];  
                $contentimage->save();
            }
        }
        $id = Crypt::encrypt($id);
        return redirect()->route('contents.edit',$id);
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
