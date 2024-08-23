<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function subCategories()
    {
        return $this->hasMany(Category::class, 'parent', 'id');
    }

    public function subSections()
    {
        return $this->hasMany(Section::class, 'category_id');
    }

    public function catSpecifications()
    {
        return $this->hasMany(Specification::class);
    }

    public function crumbsCategories($id)
    {
        $breadcrubs = '';
        if ($id != 0) {
            $category = Category::find($id);
            if ($category && $category->id != 0) {
                $breadcrubs = $category->name . '/' . $breadcrubs;
                $categorylevel1 = Category::find($category->parent);
                if ($categorylevel1 && $categorylevel1->id != 0) {
                    $breadcrubs = $categorylevel1->name . '/ ' . $breadcrubs;
                    $categorylevel2 = Category::find($categorylevel1->parent);
                    if ($categorylevel2 && $categorylevel2->id != 0) {
                        $breadcrubs = $categorylevel2->name . '/ ' . $breadcrubs;
                    }
                }
            }
        }
        $breadcrubs = 'List Categories/ '. rtrim($breadcrubs, '/');
        return $breadcrubs;
    }
}
