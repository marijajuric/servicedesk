<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Company extends Model
{
    use Notifiable;

    protected $fillable = [
        'name', 'OIB'
        ];

    public function users() { return $this->hasMany(User::class); }


    public function address() { return $this->belongsTo(Address::class); }
}
