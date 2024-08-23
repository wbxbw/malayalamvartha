<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Models\Page;
use App\Models\Module;
use App\Models\UserModule;
use App\Models\UserPage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Crypt;



class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::where('type', 'General')->get();
        $count = $users->count();
        $pageDetails = Page::find(5);
        $moduleDetails = Module::find($pageDetails->module_id);
        return view('wbxadmin.users.index', compact('users','count','pageDetails','moduleDetails') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        $count = $users->count();
        $pageDetails = Page::find(6);
        $moduleDetails = Module::find($pageDetails->module_id);
        return view('wbxadmin.users.create',compact('users','count','pageDetails','moduleDetails'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User();
        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'unique:users,phone', 'digits:10'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],],
            [
                'name.required' => 'The name field is required.',
                'email.required' => 'The email is required.',
                'email.unique' => 'The email id has already exists with another user.',
                'phone.required' => 'The phone field is required.',
                'phone.unique' => 'The phone number has already exists with another user.',
                'phone.digits' => 'The phone number must be 10 digits.',
            ]);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->password = Hash::make($request->password);
        $user->status = $request->input('status');
        $user->type = 'General';
        $user->created_at = now();
        $user->save();
        $userId = $user->id;
        $modules = Module::all();
        $pages = Page::all();
        foreach ($modules as $module) {
            $usermodule = new UserModule();
            $usermodule->user_id = $userId;
            $usermodule->module_id = $module->id;
            $usermodule->status = 'N';
            $usermodule->created_at = now();
            $usermodule->save();
        }
        foreach ($pages as $page) {
            $userpage = new UserPage();
            $userpage->user_id = $userId;
            $userpage->module_id = $page->module_id;
            $userpage->page_id = $page->id;
            $userpage->created_at = now();
            $userpage->save();
        }
        return redirect()->route('users.index');
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
        $user =User::find($id);
        $pageDetails = Page::find(7);
        $moduleDetails = Module::find($pageDetails->module_id);
        return view('wbxadmin.users.edit', compact('user','pageDetails','moduleDetails') );
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
        $user = User::find($id);
        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', Rule::unique('users')->where(function ($query) use ($id) {
                return $query->where('id', '<>', $id);
            })],
            'phone' => ['required', Rule::unique('users')->where(function ($query) use ($id) {
                return $query->where('id', '<>', $id);
            }), 'digits:10'],],
            [
                'name.required' => 'The name field is required.',
                'email.required' => 'The email field is required.',
                'email.unique' => 'The email id has already exists with another user.',
                'phone.required' => 'The phone field is required.',
                'phone.unique' => 'The phone number has already exists with another user.',
                'phone.digits' => 'The phone number must be 10 digits.',
            ]);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->status = $request->input('status');
        $user->password = Hash::make($request->password);
        $user->updated_at = now();
        $user->save();
        $id = Crypt::encrypt($id);
        return redirect()->route('users.edit', $id);
    }

    public function permission($id)
    {
        $id = Crypt::decrypt($id);
        $userModules = UserModule::where('user_id', $id)->whereNotIn('module_id', [1, 2])->with('module')->get();
        // $userPages = UserPage::where('user_id', $id)->with('page')->get();
        $user =User::find($id);
        $pageDetails = Page::find(34);
        $moduleDetails = Module::find($pageDetails->module_id);
        return view('wbxadmin.users.permission', compact('user','pageDetails','moduleDetails','userModules') );
    }

    public function updatepermission(Request $request, $id)
    {
        $user = User::find($id);
        $userPages = UserPage::where('user_id', $id)->get();
        $userModules = UserModule::where('user_id', $id)->get();
        // user module permission update
        foreach ($userModules as $userModule) {
            $usermodule = UserModule::find($userModule->id);
            $status = $request->input('module_id_'.$userModule->id);
            if ($status == 'Y') {
                $usermodule->status = 'Y';
            }
            else
            {
                $usermodule->status = 'N';
            }
            $usermodule->save();
        }
        // user page permission update
        foreach ($userPages as $userPage) {
            $userpage = UserPage::find($userPage->id);
            $view = $request->input('view_'.$userPage->id);
            $add = $request->input('add_'.$userPage->id);
            $edit = $request->input('edit_'.$userPage->id);
            $delete = $request->input('delete_'.$userPage->id);
            if ($view == 'Y') {
                $userpage->page_view = 'Y';
            }
            else
            {
                $userpage->page_view = 'N';
            }
            if ($add == 'Y') {
                $userpage->page_add = 'Y';
            }
            else
            {
                $userpage->page_add = 'N';
            }
            if ($edit == 'Y') {
                $userpage->page_edit = 'Y';
            }
            else
            {
                $userpage->page_edit = 'N';
            }
            if ($delete == 'Y') {
                $userpage->page_delete = 'Y';
            }
            else
            {
                $userpage->page_delete = 'N';
            }
            $userpage->save();
        }
        $id = Crypt::encrypt($id);
        return redirect()->route('users.permission',$id);
    }

    public function resetpassword($id)
    {
        $id = Crypt::decrypt($id);
        $user =User::find($id);
        $pageDetails = Page::find(8);
        $moduleDetails = Module::find($pageDetails->module_id);
        return view('wbxadmin.users.reset', compact('user','pageDetails','moduleDetails') );
    }

    public function updatepassword(Request $request, $id)
    {
        $user = User::find($id);
        $validatedData = $request->validate([
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ], [
            'password.required' => 'The password field is required.',
            'password.confirmed' => 'The password confirmation does not match.',
            'password.min' => 'The password must be at least :min characters.',
        ]);
        $user->password = Hash::make($request->password);
        $user->save();
        $id = Crypt::encrypt($id);
        return redirect()->route('users.reset',$id);
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
