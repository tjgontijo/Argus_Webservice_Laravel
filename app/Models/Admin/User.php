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
    
    protected $fillable = ['name', 'email', 'password', 'cpf', 'rg', 'dt_birth', 'gender_id', 'breed_id', 'orientation_id'];

    protected $hidden = ['password', 'remember_token'];
   
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
   
}
