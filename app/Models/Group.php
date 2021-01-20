<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Group extends Model
{
    use Notifiable;

    protected $fillable = [
        'name', 'description'
        ];

    public function users() { return $this->hasMany(User::class); }
}
