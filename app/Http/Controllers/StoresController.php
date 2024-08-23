<?php

namespace App\Http\Controllers;

use App\Traits\CommonTraits;

use App\Models\Store;
use App\Models\Content;
use App\Models\ContentImage;
use App\Models\Setting;
use App\Models\Page;
use App\Models\Module;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class StoresController extends Controller
{
    use CommonTraits;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $stores = Store::all();
        $pageDetails = Page::find(44);
        $moduleDetails = Module::find($pageDetails->module_id);
        return view('wbxadmin.stores.index', compact('stores','pageDetails','moduleDetails') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function create()
    {
        $settings = Setting::find(2);
        $pageDetails = Page::find(45);
        $moduleDetails = Module::find($pageDetails->module_id);
        return view('wbxadmin.stores.create',compact('settings','pageDetails','moduleDetails'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $store = new Store();
        $store->name = $request->input('name');
        $store->address = $request->input('address');
        $store->contact = $request->input('contact');
        $store->description = $request->input('description');
        $store->location = $request->input('location');
        $store->status = "Y";
        $store->created_at = now();
        $store->save();
        return redirect()->route('stores.index');
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
        $store =Store::find($id);
        $pages = Page::where('module_id', $id)->get();
        $settings = Setting::find(2);
        $pageDetails = Page::find(20);
        $moduleDetails = Module::find($pageDetails->module_id);
        return view('wbxadmin.stores.edit', compact('store','pages','settings','pageDetails','moduleDetails') );
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
        $store = Store::find($id);
        $store->name = $request->input('name');
        $store->address = $request->input('address');
        $store->contact = $request->input('contact');
        $store->description = $request->input('description');
        $store->location = $request->input('location');
        $store->status = $request->input('status');
        $store->updated_at = now();
        $store->save();
        $id = Crypt::encrypt($id);
        return redirect()->route('stores.edit',$id);
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

