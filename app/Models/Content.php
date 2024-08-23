<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;

    public function subContents()
    {
        return $this->hasMany(Content::class, 'parent', 'id');
    }

    public function subSections()
    {
        return $this->hasMany(Section::class, 'content_id');
    }

    public function crumbsContents($id)
    {
        $breadcrubs = '';
        if ($id != 0) {
            $content = Content::find($id);
            if ($content && $content->id != 0) {
                $breadcrubs = $content->name . '/' . $breadcrubs;
                $contentlevel1 = Content::find($content->parent);
                if ($contentlevel1 && $contentlevel1->id != 0) {
                    $breadcrubs = $contentlevel1->name . '/ ' . $breadcrubs;
                    $contentlevel2 = Content::find($contentlevel1->parent);
                    if ($contentlevel2 && $contentlevel2->id != 0) {
                        $breadcrubs = $contentlevel2->name . '/ ' . $breadcrubs;
                    }
                }
            }
        }
        $breadcrubs = 'List Contents/ '. rtrim($breadcrubs, '/');
        return $breadcrubs;
    }
  
}
