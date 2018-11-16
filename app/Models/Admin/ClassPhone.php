<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;

class ClassPhone extends Model implements Auditable
{
    use SoftDeletes;
    use \OwenIt\Auditing\Auditable;

    protected $fillable = ['phone_id' , 'class_phones_type', 'class_phones_id'];

    protected $hidden = [];

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

}
