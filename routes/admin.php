<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SettingsController;

use App\Http\Controllers\ModulesController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\BrandsController;
use App\Http\Controllers\ContentsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\GuidesController;
use App\Http\Controllers\ProductsController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[HomeController::class, 'index'])->name('index');
Route::get('/dashboard',[HomeController::class, 'dashboard'])->name('home.dashboard');
Route::get('/settings',[HomeController::class, 'settings'])->name('settings');
Route::get('/wbxadmin',[HomeController::class, 'wbxadmin'])->name('wbxadmin');
Route::get('/wbxadmin/settings',[HomeController::class, 'settings'])->name('settings');
Route::get('/wbxadmin/profile',[HomeController::class, 'profile'])->name('profile');

Route::resource('/wbxadmin/users', UsersController::class)->middleware('auth');
Route::resource('/wbxadmin/modules', ModulesController::class)->middleware('auth');
Route::resource('/wbxadmin/blogs', BlogsController::class)->middleware('auth');
Route::resource('/wbxadmin/brands', BrandsController::class)->middleware('auth');
Route::resource('/wbxadmin/categories', CategoriesController::class)->middleware('auth');
Route::resource('/wbxadmin/contents', ContentsController::class)->middleware('auth');
Route::resource('/wbxadmin/guides', GuidesController::class)->middleware('auth');
Route::resource('/wbxadmin/products', ProductsController::class)->middleware('auth');


// Route::resource('books', BooksController::class);

Route::get('/listadmin',[HomeController::class, 'listadmin'])->name('home.listadmin');
Route::get('/editadmin',[HomeController::class, 'editadmin'])->name('home.editadmin');
Route::get('/newadmin',[HomeController::class, 'newadmin'])->name('home.newadmin');
Route::get('/permission',[HomeController::class, 'permission'])->name('home.permission');
Route::get('/productlist',[HomeController::class, 'productlist'])->name('home.productlist');
Route::get('/editproduct',[HomeController::class, 'editproduct'])->name('home.editproduct');
Route::get('/categorylist',[HomeController::class, 'categorylist'])->name('home.categorylist');
Route::get('/editcategory',[HomeController::class, 'editcategory'])->name('home.editcategory');
Route::get('/addcategory',[HomeController::class, 'addcategory'])->name('home.addcategory');
Route::get('/listcontent',[HomeController::class, 'listcontent'])->name('home.listcontent');
Route::get('/editcontent',[HomeController::class, 'editcontent'])->name('home.editcontent');
Route::get('/addcontent',[HomeController::class, 'addcontent'])->name('home.addcontent');
Route::get('/listblog',[HomeController::class, 'listblog'])->name('home.listblog');
Route::get('/editblog',[HomeController::class, 'editblog'])->name('home.editblog');
Route::get('/addblog',[HomeController::class, 'addblog'])->name('home.addblog');
Route::get('/listbrand',[HomeController::class, 'listbrand'])->name('home.listbrand');
Route::get('/editbrand',[HomeController::class, 'editbrand'])->name('home.editbrand');
Route::get('/addbrand',[HomeController::class, 'addbrand'])->name('home.addbrand');
Route::get('/addproduct',[HomeController::class, 'addproduct'])->name('home.addproduct');


// Route::get('/wbxadmin',[HomeController::class, 'addproduct'])->name('admin.dashboard');

Route::post('/wbxadmin/modules/{id}/edit', [ModulesController::class, 'page_store'])->name('modules.page_store');

Route::get('/wbxadmin/contents/sub/{id}', [ContentsController::class, 'subindex'])->name('contents.subindex');
Route::post('/wbxadmin/contents/sub/{id}', [ContentsController::class, 'subindex'])->name('contents.subindex');
Route::get('/wbxadmin/categories/sub/{id}', [CategoriesController::class, 'subindex'])->name('categories.subindex');
Route::post('/wbxadmin/categories/sub/{id}', [CategoriesController::class, 'subindex'])->name('categories.subindex');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
