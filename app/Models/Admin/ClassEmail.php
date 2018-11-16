<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;

class ClassEmail extends Model implements Auditable
{
    use SoftDeletes;
    use \OwenIt\Auditing\Auditable;

    protected $fillable = ['email_id' , 'class_emails_type', 'class_emails_id'];

    protected $hidden = [];

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

}
