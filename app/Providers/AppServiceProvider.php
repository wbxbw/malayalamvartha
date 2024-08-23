<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Setting;
use App\Models\Module;
use App\Models\Product;
use App\Models\Tags;
use App\Models\Category;
use App\Models\Content;
use App\Models\Section;
use App\Models\SectionImage;
use App\Models\Page;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('wbxadmin.sidebar', function ($view) {
            if (auth()->user()->isSuperadmin()) {
                $modules = Module::where('status', 'Y')->get();
                $pages = Page::where('status', 'Y')->where('menu_display', 'Y')->get();
            } 
            elseif (auth()->user()->isGeneralAdmin()) {
                $userModules = auth()->user()->userModules()->with('module')->where('status', 'Y')->get();
                $modules = $userModules->pluck('module');
                $userPages = auth()->user()->userPages()->with(['page' => function ($query) {
                    $query->where('menu_display', 'Y');
                    }])->where('status', 'Y')->where('page_view', 'Y')->get();
                $pages = $userPages->pluck('page');
            }
            // $pages = Page::where('status', 'Y')->where('menu_display', 'Y')->get();
            $categories = Category::where('status', 'Y')->where('parent', '0')->get();
            $view->with('categories', $categories);
            $view->with('modules', $modules);
            $view->with('pages', $pages);
        });
        view()->composer('wbxadmin.head', function ($view) {
            $settings = Setting::find(4);
            $view->with('setting', $settings);
        });
        view()->composer('wbxadmin.footer', function ($view) {
            $settings_admin = Setting::find(1);
            $settings_site = Setting::find(2);
            $view->with('admin_panel', $settings_admin);
            $view->with('website_url', $settings_site);
        });
        view()->composer('wbxadmin.footer', function ($view) {
            $settings_admin = Setting::find(1);
            $settings_site = Setting::find(2);
            $view->with('admin_panel', $settings_admin);
            $view->with('website_url', $settings_site);
        });

        view()->composer('header', function ($view) {
            $categories = Category::where('status', 'Y')->where('parent', '0')->take(9)->get();
            $tags = Tags::where('menu_status', 'Y')->get();
            // $headerConAds = Content::where('name', 'Header Ads')->where('status', 'Y')->get();
            $headerSecAds = Section::where('name', 'Top Slider Ads')->where('status', 'Y')->first();
            $headerSecAdsImages = SectionImage::where('section_id', $headerSecAds->id )->get();
            $menu = Content::where('name', 'Menu')->first();
            $menucontents = Section::where('content_id', $menu->id)->where('status', 'Y')->orderBy('order', 'asc')->get();
            $view->with('categories', $categories);
            $view->with('tags', $tags);
            $view->with('headerSecAdsImages', $headerSecAdsImages);
            $view->with('menucontents', $menucontents);
        });

        
    }
}
