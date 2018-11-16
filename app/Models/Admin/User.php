<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use OwenIt\Auditing\Contracts\Auditable;

class User extends Authenticatable implements Auditable
{
    use HasApiTokens, Notifiable, SoftDeletes;
    use \OwenIt\Auditing\Auditable;
    
    protected $fillable = ['name', 'email', 'password'];

    protected $hidden = ['password', 'remember_token'];
   
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];


    public function userInfo()
    {
        return $this->hasOne(UserInfo::class);
    }
   
}
