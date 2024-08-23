<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;

    public function defaultPage()
    {
        return $this->hasOne(Page::class)->where('menu_default', 'y');
    }
    
    public function pages()
    {
        return $this->hasMany(Page::class);
    }

    public function userModules()
    {
        return $this->hasMany(UserModule::class);
    }
}
