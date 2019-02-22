<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;

class Address extends Model implements Auditable
{
    use SoftDeletes;
    use \OwenIt\Auditing\Auditable;

    protected $fillable = ['cep', 'complement', 'number', 'address', 'district', 'city', 'state', 'adress_type_id'];

    protected $hidden = [];

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    public function addressType()
    {
        return $this->belongsTo(AddressType::class);
    }
    public function users()
    {
        return $this->morphedByMany(User::class, 'class_addresses');
    }
    public function units()
    {
        return $this->morphedByMany(Unit::class, 'class_emails');
    }

}
