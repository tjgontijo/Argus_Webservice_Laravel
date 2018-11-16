<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;

class UserInfo extends Model implements Auditable
{
    use SoftDeletes;
    use \OwenIt\Auditing\Auditable;

    protected $fillable = ['cpf', 'rg', 'dt_birth', 'user_id', 'gender_id', 'breed_id', 'orientation_id'];

    protected $hidden = [];

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
    
    public function breed()
    {
        return $this->belongsTo(Breed::class);
    }
    public function gender()
    {
        return $this->belongsTo(Gender::class);
    }
    public function orientation()
    {
        return $this->belongsTo(Orientation::class);
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
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
