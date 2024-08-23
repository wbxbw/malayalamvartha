<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Module;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class BrandsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands=Brand::all();
        $pageDetails = Page::find(24);
        $moduleDetails = Module::find($pageDetails->module_id);
        return view('wbxadmin.brands.index', compact('pageDetails','moduleDetails','brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands=brand::all();
        $pageDetails = Page::find(24);
        $moduleDetails = Module::find($pageDetails->module_id);
        return view('wbxadmin.brands.create', compact('pageDetails','moduleDetails','brands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate image and name
        $request->validate([
            'name' => 'required',
           'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        //store data
        $brands = new Brand();
        $brands->name = $request->name;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path('wx.images/brands'), $imageName);
            $brands->image = $imageName;

        }
        $brands->save();
        return redirect()->route('brands.index')->with('success','Brand created successfully');
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

        $id =Crypt::decrypt($id);
        $brand=Brand::find($id);
        $pages = Page::where('module_id', $id)->get();
        $count = $pages->count();
        $pageDetails = Page::find(24);
        $moduleDetails = Module::find($pageDetails->module_id);
        return view('wbxadmin.brands.edit', compact('brand','pages','count','pageDetails','moduleDetails') );

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

        $request->validate([
            'name' => 'required',
        ]);
        //store data
        $brand = Brand::find($id);
        $brand->name = $request->name;

        if ($request->file('image')) {
            $image = $request->file('image');
            $oldImagePath = public_path('wx.images/brands') . '/' . $brand->image;
            if (file_exists($oldImagePath) && $brand->image != '') {
                unlink($oldImagePath);
            }
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path('wx.images/brands'), $imageName);
            $brand->image = $imageName;  
        }
        $brand->save();
        return redirect()->route('brands.index')->with('success','Brand updated successfully');
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
