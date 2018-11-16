<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;

class ClassAddress extends Model implements Auditable
{
    use SoftDeletes;
    use \OwenIt\Auditing\Auditable;

    protected $fillable = ['address_id' , 'class_addresses_type', 'class_addresses_id'];

    protected $hidden = [];

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

}
