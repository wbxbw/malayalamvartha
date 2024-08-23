<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function userModules()
    {
        return $this->hasMany(UserModule::class);
    }
    public function userPages()
    {
        return $this->hasMany(UserPage::class);
    }

    public function hasModuleAccess($moduleId)
    {
        return $this->userModules()->where('module_id', $moduleId)->where('status', 'Y')->exists();
    }

    public function isSuperadmin()
    {
        return $this->type === 'WBXSUPERADMIN';
    }

    public function isGeneralAdmin()
    {
        return $this->type === 'General';
    }
}
