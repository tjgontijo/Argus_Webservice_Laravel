<?php

namespace App\Models\Admin;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use Notifiable;
    protected $fillable = [
        'name', 'description', 'local', 'dt_event', 'courtesies', 'benefits'
    ];
}
