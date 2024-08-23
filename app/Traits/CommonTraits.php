<?php

namespace App\Traits;

use App\Models\Module;
use App\Models\Page;
use App\Models\Content;
use App\Models\Category;
use App\Models\Product;


trait CommonTraits
{
    public function getModuleDetails($id)
    {
        $module = Module::find($id);
        $page = Module::find($id);
        $html = '<div class="row g-4 align-items-center">
                    <div class="col">
                        <nav class="mb-2" aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-sa-simple">
                            <li class="breadcrumb-item">
                            <a href="'.route("wbxadmin").'">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">'. $module->name .'</li>
                        </ol>
                    </nav>
                    <h1 class="h3 m-0">Administrator</h1>
                    </div>
                    <div class="col-auto d-flex">
                    <a href="app-customer.html" class="btn btn-primary">New Administrator</a>
                    </div>
                </div>';
        return $html;
    }


    public function getContentsDropdownDetails($parent)
    {
        $contents = Content::where('parent', '0')->get();
        $html = '';
        $selectindex = '';
        $select = '';
        if ($parent == 0) { $selectindex = ' selected'; }
        $html = '<option value="0" '.$selectindex.'>Parent Page</option>';
        foreach ($contents as $content) {
            if ($content->id == $parent) { $select = ' selected'; } else { $select = '';}
            $html = $html . '<option value="'. $content->id .'"'.$select.'>'. $content->name .'</option>';
            $subcontents = Content::where('parent', $content->id)->get();
            foreach ($subcontents as $subcontent) {
                if ($subcontent->id == $parent) { $select = ' selected'; } else { $select = '';}
                $html = $html . '<option value="'. $subcontent->id .'"'.$select.'>&nbsp&nbsp - '. $subcontent->name .'</option>';
            }
        }
        return $html;
    }
    public function getSubContentsCount($id)
    {
        return Content::where('parent', $id)->count();
    }

    public function getCategoriesDropdownDetails($parent)
    {
        $categories = Category::where('parent', '0')->get();
        $html = '';
        $selectindex = '';
        $select = '';
        if ($parent == 0) { $selectindex = ' selected'; }
        $html = '<option value="0" '.$selectindex.'>Parent Category</option>';
        foreach ($categories as $category) {
            if ($category->id == $parent) { $select = ' selected'; } else { $select = '';}
            $html = $html . '<option value="'. $category->id .'"'.$select.'>'. $category->name .'</option>';
            $subcategories = Category::where('parent', $category->id)->get();
            foreach ($subcategories as $subcategory) {
                if ($subcategory->id == $parent) { $select = ' selected'; } else { $select = '';}
                $html = $html . '<option value="'. $subcategory->id .'"'.$select.'>&nbsp&nbsp - '. $subcategory->name .'</option>';
            }
        }
        return $html;
    }


    public function getProdCategoriesChkbox()
    {
        $selectedCategories = old('category', []);
        $categories = Category::where('parent', '0')->get();
        $html = '';
        $selectindex = '';
        $select = '';
        foreach ($categories as $category) {
            $isChecked = in_array($category->id, $selectedCategories) ? 'checked' : '';
            $html .= '<label class="form-check collapse1">
                <input type="checkbox" name="category[]" class="form-check-input" value="'. $category->id .'" '.$isChecked.'>
                <span class="form-check-label">'. $category->name .'</span>
            </label>';
            
            $subcategories = Category::where('parent', $category->id)->get();
            foreach ($subcategories as $subcategory) {
                $isChecked = in_array($subcategory->id, $selectedCategories) ? 'checked' : '';
                $html .= '<label class="form-check collapse1" style="margin-left:20px;">
                    <input type="checkbox" name="category[]" class="form-check-input" value="'. $subcategory->id .'" '.$isChecked.'>
                    <span class="form-check-label">'. $subcategory->name .'</span>
                </label>';
                
                $subcategories1 = Category::where('parent', $subcategory->id)->get();
                foreach ($subcategories1 as $subcategory1) {
                    $isChecked = in_array($subcategory1->id, $selectedCategories) ? 'checked' : '';
                    $html .= '<label class="form-check collapse1" style="margin-left:40px;">
                        <input type="checkbox" name="category[]" class="form-check-input" value="'. $subcategory1->id .'" '.$isChecked.'>
                        <span class="form-check-label">'. $subcategory1->name .'</span>
                    </label>';
                    
                    $subcategories2 = Category::where('parent', $subcategory1->id)->get();
                    foreach ($subcategories2 as $subcategory2) {
                        $isChecked = in_array($subcategory2->id, $selectedCategories) ? 'checked' : '';
                        $html .= '<label class="form-check collapse1" style="margin-left:60px;">
                            <input type="checkbox" name="category[]" class="form-check-input" value="'. $subcategory2->id .'" '.$isChecked.'>
                            <span class="form-check-label">'. $subcategory2->name .'</span>
                        </label>';
                        
                        $subcategories3 = Category::where('parent', $subcategory2->id)->get();
                        foreach ($subcategories3 as $subcategory3) {
                            $isChecked = in_array($subcategory3->id, $selectedCategories) ? 'checked' : '';
                            $html .= '<label class="form-check collapse1" style="margin-left:60px;">
                                <input type="checkbox" name="category[]" class="form-check-input" value="'. $subcategory3->id .'" '.$isChecked.'>
                                <span class="form-check-label">'. $subcategory3->name .'</span>
                            </label>';
                        }
                    }
                }
            }
        }
        
        return $html;
    }



    public function getProdCategoriesCheckedChkbox($id)
    {
        $product = Product::find($id);
        // $selectedCategories = explode(',', $product->category);
        $selectedCategories = old('category', explode(',', $product->category));
        $categories = Category::where('parent', '0')->get();
        $html = '';
        $selectindex = '';
        $select = '';
        foreach ($categories as $category) {
            $isChecked = in_array($category->id, $selectedCategories) ? 'checked' : '';
            $html .= '<label class="form-check collapse1">
                <input type="checkbox" name="category[]" class="form-check-input" value="'. $category->id .'" '.$isChecked.'>
                <span class="form-check-label">'. $category->name .'</span>
            </label>';
            $subcategories = Category::where('parent', $category->id)->get();
            foreach ($subcategories as $subcategory) {
                $isChecked = in_array($subcategory->id, $selectedCategories) ? 'checked' : '';
                $html .= '<label class="form-check collapse1" style="margin-left:20px;">
                    <input type="checkbox" name="category[]" class="form-check-input" value="'. $subcategory->id .'" '.$isChecked.'>
                    <span class="form-check-label">'. $subcategory->name .'</span>
                </label>';
                $subcategories1 = Category::where('parent', $subcategory->id)->get();
                foreach ($subcategories1 as $subcategory1) {
                    $isChecked = in_array($subcategory1->id, $selectedCategories) ? 'checked' : '';
                    $html .= '<label class="form-check collapse1" style="margin-left:40px;">
                        <input type="checkbox" name="category[]" class="form-check-input" value="'. $subcategory1->id .'" '.$isChecked.'>
                        <span class="form-check-label">'. $subcategory1->name .'</span>
                    </label>';
                    $subcategories2 = Category::where('parent', $subcategory1->id)->get();
                    foreach ($subcategories2 as $subcategory2) {
                        $isChecked = in_array($subcategory2->id, $selectedCategories) ? 'checked' : '';
                        $html .= '<label class="form-check collapse1" style="margin-left:60px;">
                            <input type="checkbox" name="category[]" class="form-check-input" value="'. $subcategory2->id .'" '.$isChecked.'>
                            <span class="form-check-label">'. $subcategory2->name .'</span>
                        </label>';
                        $subcategories3 = Category::where('parent', $subcategory2->id)->get();
                        foreach ($subcategories3 as $subcategory3) {
                            $isChecked = in_array($subcategory3->id, $selectedCategories) ? 'checked' : '';
                            $html .= '<label class="form-check collapse1" style="margin-left:60px;">
                                <input type="checkbox" name="category[]" class="form-check-input" value="'. $subcategory3->id .'" '.$isChecked.'>
                                <span class="form-check-label">'. $subcategory3->name .'</span>
                            </label>';
                        }
                    }
                }
            }
        }
        return $html;
    }
}

?>