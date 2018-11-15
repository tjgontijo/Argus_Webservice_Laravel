<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;


class Phone extends Model implements Auditable
{
    use SoftDeletes;
    use \OwenIt\Auditing\Auditable;

    protected $fillable = ['number', 'phone_type_id'];

    protected $hidden = [];

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    public function phoneType()
    {
        return $this->belongsTo(PhoneType::class);
    }
    public function users()
    {
        return $this->belongsToMany(User::class, 'user_phones', 'user_id', 'phone_id')->using(UserPhone::class);
    }
}
