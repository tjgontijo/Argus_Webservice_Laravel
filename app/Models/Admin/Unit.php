<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;


class Unit extends Model implements Auditable

{
    use SoftDeletes;
    use \OwenIt\Auditing\Auditable;

    protected $fillable = ['id', 'shortName', 'name', 'isTeach'];

    protected $hidden = [];

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    public function typeUnit() 
	{
		return $this->belongsTo(TypeUnit::class);
	}
    public function emails()
    {
        return $this->morthToMany(Email::class, 'class_emails');
    }
    public function phones()
    {
        return $this->morthToMany(Phone::class, 'class_phones');
    }
    public function addresses()
    {
        return $this->morthToMany(Address::class, 'class_addresses');
    }
}
