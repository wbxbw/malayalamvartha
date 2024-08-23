<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogImage;
use App\Models\Setting;
use App\Models\Page;
use App\Models\Module;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $blogs = Blog::where('parent', '0')->withCount('subContents')->withCount('subSections')->get();
        $contents = Blog::where('parent', '0')->get();
        $count = $contents->count();
        $pageDetails = Page::find(21);
        $moduleDetails = Module::find($pageDetails->module_id);
        return view('wbxadmin.blogs.index', compact('contents','count','pageDetails','moduleDetails') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $settings = Setting::find(2);
        $pageDetails = Page::find(22);
        $moduleDetails = Module::find($pageDetails->module_id);
        return view('wbxadmin.blogs.create',compact('settings','pageDetails','moduleDetails'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $content = new Blog();
        $validatedData = $request->validate([
            'name' => ['required', 'unique:blogs,name'],
            'meta_title' => ['required', 'unique:blogs,meta_title'],],
            [
                'name.required' => 'The blog name field is required.',
                'meta_title.required' => 'The blog title field is required.',
            ]);
        $content->name = $request->input('name');
        $content->meta_title = $request->input('meta_title');
        $content->meta_keyword = $request->input('meta_keyword');
        $content->meta_description = $request->input('meta_description');
        $content->link = $request->input('link');
        $content->short_description = $request->input('short_description');
        $content->long_description = $request->input('long_description');
        $content->parent = '0';
        $content->status = $request->input('status');
        $content->order = '0';
        $content->menu_display = "Y";
        $content->created_at = now();
        $content->save();
        $contentId = $content->id;
        // image upload //
        if ($request->file('images')) 
        {
            foreach ($request->file('images') as $key => $image) {
                $contentimage = new BlogImage();
                $imageName = time() . '_' . $key . '.' . $image->extension();
                $image->move(public_path('wx.images/blogs/articles'), $imageName);
                $contentimage->content_id = $contentId;  
                $contentimage->image = $imageName;  
                $contentimage->alt = $request->input('alt')[$key];
                $contentimage->ord = $request->input('order')[$key];  
                $contentimage->save();
            }
        }
        return redirect()->route('blogs.index');
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
        $content =Blog::find($id);
        $pages = Page::where('module_id', $id)->get();
        $images = BlogImage::where('content_id', $id)->get();
        $count = $pages->count();
        $settings = Setting::find(2);
        $pageDetails = Page::find(23);
        $moduleDetails = Module::find($pageDetails->module_id);
        return view('wbxadmin.blogs.edit', compact('content','pages','count','settings','images','pageDetails','moduleDetails') );
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
        $content = Blog::find($id);
        $images = BlogImage::where('content_id', $id)->get();
        $validatedData = $request->validate([
            'name' => ['required', Rule::unique('blogs')->where(function ($query) use ($id) {
                return $query->where('id', '<>', $id);
            })],
            'meta_title' => ['required', Rule::unique('blogs')->where(function ($query) use ($id) {
                return $query->where('id', '<>', $id);
            })],],
            [
                'name.required' => 'The blog name field is required.',
                'meta_title.required' => 'The blog title field is required.',
            ]);
        $content->name = $request->input('name');
        $content->meta_title = $request->input('meta_title');
        $content->meta_keyword = $request->input('meta_keyword');
        $content->meta_description = $request->input('meta_description');
        $content->link = $request->input('link');
        $content->short_description = $request->input('short_description');
        $content->long_description = $request->input('long_description');
        $content->status = $request->input('status');
        $content->updated_at = now();
        $content->save();
        if ($request->hasFile('images')) 
        {
            foreach ($request->file('images') as $key => $image) {
                $contentimage = new BlogImage();
                $imageName = time() . '_' . $key . '.' . $image->extension();
                $image->move(public_path('wx.images/blogs/articles'), $imageName);
                $contentimage->content_id = $id;  
                $contentimage->image = $imageName;  
                $contentimage->alt = $request->input('alt')[$key];
                $contentimage->ord = $request->input('order')[$key];  
                $contentimage->save();
            }
        }
        $id = Crypt::encrypt($id);
        return redirect()->route('blogs.edit',$id);
    }

    public function ImageUpdate(Request $request, $id)
    {
        $productimg = BlogImage::find($id);
        $productimages = BlogImage::where('content_id', $productimg->content_id)->get();
        $productimg->alt = $request->input('alt');
        if($request->file('images')){
            $image = $request->file('images');
            $oldImagePath = public_path('wx.images/blogs/articles') . '/' . $productimg->image;
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            $imageName = time() .'.'. $image->extension();
            $image->move(public_path('wx.images/blogs/articles'), $imageName);
            $productimg->image = $imageName;  
        }
        $productimg->updated_at = now();   
        $productimg->save();
        $id = Crypt::encrypt($productimg->content_id);
        return redirect()->route('blogs.edit',$id);

    }

    public function ImageDelete(Request $request, $id)
    {
        $sectionimg = BlogImage::find($id);
        $sec_id = $sectionimg->content_id;
        $oldImagePath = public_path('wx.images/blogs/articles') . '/' . $sectionimg->image;
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
        $sectionimg->delete();
        $id = Crypt::encrypt($sec_id);
        return redirect()->route('blogs.edit',$id);
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
