<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;


class Course extends Model implements Auditable

{
    use SoftDeletes;
    use \OwenIt\Auditing\Auditable;

    //
}
