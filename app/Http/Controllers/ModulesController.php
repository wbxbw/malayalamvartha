<?php

namespace App\Http\Controllers;

use App\Traits\CommonTraits;

use App\Models\Module;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Carbon\Carbon;



class ModulesController extends Controller
{
    use CommonTraits;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modules = Module::all();
        $count = $modules->count();
        $pageDetails = Page::find(1);
        $moduleDetails = Module::find($pageDetails->module_id);
        // $moduleDetails = $this->getModuleDetails(1);
        return view('wbxadmin.modules.index', compact('modules','count','pageDetails','moduleDetails') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $modules = Module::all();
        $count = $modules->count();
        $pageDetails = Page::find(2);
        $moduleDetails = Module::find($pageDetails->module_id);
        return view('wbxadmin.modules.create',compact('modules','count','pageDetails','moduleDetails'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $module = new Module();
        $validatedData = $request->validate([
            'name' => ['required', 'unique:modules,name'],
            'title' => ['required', 'unique:modules,title'],],
            [
                'name.required' => 'The Module name field is required.',
                'title.required' => 'The Module title field is required.',
            ]);
        $module->name = $request->input('name');
        $module->title = $request->input('title');
        $module->icon = $request->input('icon');
        $module->image = $request->input('image');
        $module->order = '0';
        $module->status = "Y";
        $module->created_at = now();
        $module->save();
        $modules = Module::all();
        $count = $modules->count();
        return view('wbxadmin.modules.index', compact('modules','count') );
    }


    public function page_store(Request $request)
    {
        $page = new Page();
        $validatedData = $request->validate([
            'name' => ['required'],
            'title' => ['required'],],
            [
                'name.required' => 'The Page name field is required.',
                'title.required' => 'The Page title field is required.',
            ]);
        $page->module_id = $request->input('module_id');
        $mid = $request->input('module_id');
        $page->name = $request->input('name');
        $page->title = $request->input('title');
        $page->link = $request->input('link');
        if ($request->input('menu_display') != '') {
            $page->menu_display = $request->input('menu_display');
        }
        if ($request->input('menu_default') != '') {
            $page->menu_default = $request->input('menu_default');
        }
        if ($request->input('view') != '') {
            $page->view = $request->input('view');
        }
        if ($request->input('add') != '') {
            $page->add = $request->input('add');
        }
        if ($request->input('edit') != '') {
            $page->edit = $request->input('edit');
        }
        if ($request->input('delete') != '') {
            $page->delete = $request->input('delete');
        }
        $page->status = "Y";
        $page->created_at = now();
        $page->save();
        $module =Module::find($request->input('module_id'));
        $pages = Page::where('module_id', $request->input('module_id'))->get();
        $count = $pages->count();
        // return view('wbxadmin.modules.edit', compact('module','pages','count') );

        return redirect()->route('modules.edit',$mid);
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
        $module =Module::find($id);
        $pages = Page::where('module_id', $id)->get();
        $count = $pages->count();
        $pageDetails = Page::find(3);
        $moduleDetails = Module::find($pageDetails->module_id);
        return view('wbxadmin.modules.edit', compact('module','pages','count','pageDetails','moduleDetails') );

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
        $module = Module::find($id);
        $validatedData = $request->validate([
            'name' => ['required', Rule::unique('modules')->where(function ($query) use ($id) {
                return $query->where('id', '<>', $id);
            })],
            'title' => ['required', Rule::unique('modules')->where(function ($query) use ($id) {
                return $query->where('id', '<>', $id);
            })],],
            [
                'name.required' => 'The Module name field is required.',
                'title.required' => 'The Module title field is required.',
            ]);
        $module->name = $request->input('name');
        $module->title = $request->input('title');
        $module->icon = $request->input('icon');
        $module->image = $request->input('image');
        $module->order = $request->input('order');
        $module->status = $request->input('status');
        $module->updated_at = now();
        $module->save();
        return redirect()->route('modules.edit',$id);
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
