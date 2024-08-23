<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SettingsController;

use App\Http\Controllers\ModulesController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\BrandsController;
use App\Http\Controllers\ContentsController;
use App\Http\Controllers\SectionsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\GuidesController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\StoresController;

use App\Http\Middleware\CheckModuleAccess;

 


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

// Website Routes
Route::get('/',[HomeController::class, 'index'])->name('home.index');
Route::get('/news/{id}',[HomeController::class, 'newsinglev1'])->name('home.newsinglev1');
Route::get('/{category}/{subcategory}/{year}/{month}/{day}/{slug}', [ProductsController::class, 'show'])->name('news.show');
Route::get('/Category/{id}',[HomeController::class, 'newsinglev2'])->name('home.newsinglev2');
Route::get('/blogs/{id}',[HomeController::class, 'blog'])->name('home.blog');
Route::get('/brandlist',[HomeController::class, 'brandlist'])->name('home.brandlist');
Route::get('/brandwiselisting',[HomeController::class, 'brandwiselisting'])->name('home.brandwiselisting');
Route::get('/customersupport',[HomeController::class, 'customersupport'])->name('home.customersupport');
Route::get('/faq',[HomeController::class, 'faq'])->name('home.faq');
Route::get('/generalcontent',[HomeController::class, 'generalcontent'])->name('home.generalcontent');
Route::get('/productbuyingdetail',[HomeController::class, 'productbuyingdetail'])->name('home.productbuyingdetail');
Route::get('/buying-guides',[HomeController::class, 'productbuyinglisting'])->name('home.productbuyinglisting');
Route::get('/buying-guide/{id}',[HomeController::class, 'productbuyingdetail'])->name('home.productbuyingdetail');
Route::get('/product/{id}',[HomeController::class, 'productdetail'])->name('home.productdetail');
Route::get('/products/{id}',[HomeController::class, 'productlist'])->name('home.productlist');
Route::get('/productspeciality',[HomeController::class, 'productspeciality'])->name('home.productspeciality');
Route::get('/guides',[HomeController::class, 'guides'])->name('home.guides');
Route::get('/specialcatogery',[HomeController::class, 'specialcatogery'])->name('home.specialcatogery');

Route::post('/products/{id}', [HomeController::class, 'productlist'])->name('filter.products');
Route::post('/searchresult',[HomeController::class, 'searchresult'])->name('home.searchresult');



Route::get('/dashboard',[HomeController::class, 'dashboard'])->name('home.dashboard');
Route::get('/settings',[HomeController::class, 'settings'])->name('settings');


// Admin Routes
Route::get('/wbxadmin',[HomeController::class, 'wbxadmin'])->name('wbxadmin');
Route::get('/wbxadmin/settings',[HomeController::class, 'settings'])->name('settings');
Route::get('/wbxadmin/profile',[HomeController::class, 'profile'])->name('profile');

Route::resource('/wbxadmin/users', UsersController::class)->middleware(['auth', CheckModuleAccess::class . ':3']);
Route::resource('/wbxadmin/modules', ModulesController::class)->middleware(['auth', CheckModuleAccess::class . ':1']);
Route::resource('/wbxadmin/blogs', BlogsController::class)->middleware(['auth', CheckModuleAccess::class . ':7']);
Route::resource('/wbxadmin/brands', BrandsController::class)->middleware(['auth', CheckModuleAccess::class . ':8']);
Route::resource('/wbxadmin/categories', CategoriesController::class)->middleware(['auth', CheckModuleAccess::class . ':5']);
Route::resource('/wbxadmin/contents', ContentsController::class)->middleware(['auth', CheckModuleAccess::class . ':6']);
Route::resource('/wbxadmin/guides', GuidesController::class)->middleware(['auth', CheckModuleAccess::class . ':9']);
Route::resource('/wbxadmin/products', ProductsController::class)->middleware(['auth', CheckModuleAccess::class . ':4']);
Route::resource('/wbxadmin/stores', StoresController::class)->middleware(['auth', CheckModuleAccess::class . ':10']);


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

Route::get('/category/{id}',[HomeController::class, 'category'])->name('home.categorypage');


Route::get('/categoryDetails/{id}',[HomeController::class, 'categoryDetails'])->name('home.categoryDetails');

Route::post('/wbxadmin/modules/{id}/edit', [ModulesController::class, 'page_store'])->name('modules.page_store');
Route::get('/wbxadmin/users/{id}/permission', [UsersController::class, 'permission'])->name('users.permission');
Route::put('/wbxadmin/users/{id}/permission', [UsersController::class, 'updatepermission'])->name('users.permissionupdate');
Route::get('/wbxadmin/users/{id}/reset', [UsersController::class, 'resetpassword'])->name('users.reset');
Route::put('/wbxadmin/users/{id}/reset', [UsersController::class, 'updatepassword'])->name('users.updatepassword');



Route::get('/wbxadmin/contents/sub/{id}', [ContentsController::class, 'subindex'])->name('contents.subindex');
Route::post('/wbxadmin/contents/sub/{id}', [ContentsController::class, 'subindex'])->name('contents.subindex');
Route::get('/wbxadmin/contents/sections/{id}', [SectionsController::class, 'index'])->name('contents.section');
Route::post('/wbxadmin/contents/sections/{id}', [SectionsController::class, 'index'])->name('contents.section');
Route::get('/wbxadmin/contents/section/create', [SectionsController::class, 'create'])->name('contents.sectioncreate');
Route::post('/wbxadmin/contents/section/create', [SectionsController::class, 'create'])->name('contents.sectioncreate');
Route::get('/wbxadmin/contents/section/{id}', [SectionsController::class, 'edit'])->name('contents.sectionedit');
Route::put('/wbxadmin/contents/section/{id}', [SectionsController::class, 'update'])->name('contents.sectionupdate');
Route::post('/wbxadmin/contents/sections/{id}', [SectionsController::class, 'store'])->name('contents.sectionstore');
Route::get('/wbxadmin/categories/sub/{id}', [CategoriesController::class, 'subindex'])->name('categories.subindex');
Route::post('/wbxadmin/categories/sub/{id}', [CategoriesController::class, 'subindex'])->name('categories.subindex');
Route::get('/wbxadmin/categories/spec/{id}', [CategoriesController::class, 'specifications'])->name('categories.specifications');
Route::get('/wbxadmin/categories/createspec/{id}', [CategoriesController::class, 'createSpec'])->name('categories.createspec');
Route::post('/wbxadmin/categories/addSpec', [CategoriesController::class, 'addSpec'])->name('categories.addspec');
Route::put('/wbxadmin/contents/section/{id}', [SectionsController::class, 'update'])->name('contents.sectionupdate');
Route::get('/wbxadmin/categories/editspec/{id}', [CategoriesController::class, 'editSpec'])->name('categories.editspec');
Route::put('/wbxadmin/categories/editspecs/{id}', [CategoriesController::class, 'updatespec'])->name('categories.updatespec');
Route::get('/wbxadmin/categories/editspecvalue/{id}', [CategoriesController::class, 'editSpecValue'])->name('categories.editspecvalue');
Route::put('/wbxadmin/categories/editspecvalue/{id}', [CategoriesController::class, 'updatespecvalues'])->name('categories.updatespecvalue');
Route::get('/wbxadmin/categories/sections/{id}', [SectionsController::class, 'catsecindex'])->name('categories.section');
Route::post('/wbxadmin/categories/sections/{id}', [SectionsController::class, 'catsecindex'])->name('categories.section');
Route::get('/wbxadmin/categories/section/create', [SectionsController::class, 'catseccreate'])->name('categories.sectioncreate');
Route::post('/wbxadmin/categories/section/create', [SectionsController::class, 'catseccreate'])->name('categories.sectioncreate');
Route::get('/wbxadmin/categories/section/{id}', [SectionsController::class, 'catsecedit'])->name('categories.sectionedit');
Route::put('/wbxadmin/categories/section/{id}', [SectionsController::class, 'catsecupdate'])->name('categories.sectionupdate');
Route::post('/wbxadmin/categories/sections/{id}', [SectionsController::class, 'catsecstore'])->name('categories.sectionstore');
Route::put('/wbxadmin/sections/image/{id}', [SectionsController::class, 'secImageUpdate'])->name('section.imageupdate');
Route::put('/wbxadmin/section/image/{id}', [SectionsController::class, 'secCatImageUpdate'])->name('category.imageupdate');
Route::get('/wbxadmin/sectiondel/image/{id}', [SectionsController::class, 'secImageDelete'])->name('section.imgdel');
Route::get('/wbxadmin/sectioncatdel/image/{id}', [SectionsController::class, 'secCatImageDelete'])->name('sectioncat.imgdel');

Route::post('/wbxadmin/contents/sections/', [SectionsController::class, 'updateOrder'])->name('updateOrderRoute');
Route::post('/wbxadmin/categories/sections/', [SectionsController::class, 'updateCatOrder'])->name('updateCatOrderRoute');
Route::post('/wbxadmin/products', [ProductsController::class, 'updateOrderNews'])->name('updateOrderNews');


Route::put('/wbxadmin/blog/image/{id}', [BlogsController::class, 'ImageUpdate'])->name('blog.imageupdate');
Route::get('/wbxadmin/blog/image/{id}', [BlogsController::class, 'ImageDelete'])->name('blog.imgdel');


Route::put('/wbxadmin/product/image/{id}', [ProductsController::class, 'ImageUpdate'])->name('product.imageupdate');
Route::get('/wbxadmin/product/image/{id}', [ProductsController::class, 'ImageDelete'])->name('product.imgdel');


Route::get('/wbxadmin/categories/specvalues/{id}', [CategoriesController::class, 'specvaluesshow'])->name('categories.specvalues');
Route::get('/wbxadmin/categories/createspecvalues/{id}', [CategoriesController::class, 'createSpecValues'])->name('categories.createvalues');
Route::post('/wbxadmin/categories/addSpecVal', [CategoriesController::class, 'addSpecVal'])->name('categories.addspecval');



Route::delete('/wbxadmin/products/{product_id}/edit', [ProductsController::class, 'deleteProductImage'])->name('product-images.delete');
Route::delete('/wbxadmin/products/', [ProductsController::class, 'destroy'])->name('product.delete');

Route::get('/wbxadmin/guides/sub/{id}', [GuidesController::class, 'subindex'])->name('guides.subindex');
Route::post('/wbxadmin/guides/sub/{id}', [GuidesController::class, 'subindex'])->name('guides.subindex');
Route::get('/wbxadmin/guides/spec/{id}', [GuidesController::class, 'specifications'])->name('guides.specifications');
Route::get('/wbxadmin/guides/createspec/{id}', [GuidesController::class, 'createSpec'])->name('guides.createspec');
Route::post('/wbxadmin/guides/addSpec', [GuidesController::class, 'addSpec'])->name('guides.addspec');
Route::put('/wbxadmin/guides/section/{id}', [GuidesController::class, 'update'])->name('guides.sectionupdate');
Route::get('/wbxadmin/guides/editspec/{id}', [GuidesController::class, 'editSpec'])->name('guides.editspec');
Route::put('/wbxadmin/guides/editspecs/{id}', [GuidesController::class, 'updatespec'])->name('guides.updatespec');
Route::get('/wbxadmin/guides/editspecvalue/{id}', [GuidesController::class, 'editSpecValue'])->name('guides.editspecvalue');
Route::put('/wbxadmin/guides/editspecvalue/{id}', [GuidesController::class, 'updatespecvalues'])->name('guides.updatespecvalue');
Route::get('/wbxadmin/guides/sections/{id}', [GuidesController::class, 'catsecindex'])->name('guides.section');
Route::post('/wbxadmin/guides/sections/{id}', [GuidesController::class, 'catsecindex'])->name('guides.section');
Route::get('/wbxadmin/guides/section/create', [GuidesController::class, 'catseccreate'])->name('guides.sectioncreate');
Route::post('/wbxadmin/guides/section/create', [GuidesController::class, 'catseccreate'])->name('guides.sectioncreate');
Route::get('/wbxadmin/guides/section/{id}', [GuidesController::class, 'catsecedit'])->name('guides.sectionedit');
Route::put('/wbxadmin/guides/section/{id}', [GuidesController::class, 'catsecupdate'])->name('guides.sectionupdate');
Route::post('/wbxadmin/guides/sections/{id}', [GuidesController::class, 'catsecstore'])->name('guides.sectionstore');
Route::get('/wbxadmin/guides/specvalues/{id}', [GuidesController::class, 'specvaluesshow'])->name('guides.specvalues');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
