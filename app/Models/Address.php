<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;


class Address extends Model
{
    use Notifiable;

    protected $fillable = [
        'street_name', 'apartment_number', 'country'
        ];


    public function users() { return $this->hasMany(User::class); }

    public function companies() { return $this->hasMany(Company::class); }

}
