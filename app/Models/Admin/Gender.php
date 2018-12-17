<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;


class Gender extends Model implements Auditable
{
    use SoftDeletes;
    use \OwenIt\Auditing\Auditable;

    protected $fillable = ['name'];

    protected $hidden = [];

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    public function userInfos()
    {
        return $this->hasMany(userInfo::class);
    }
}
