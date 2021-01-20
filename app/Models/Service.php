<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Service extends Model
{
    use Notifiable;

    protected $fillable = [
        'name', 'description'
        ];

    public function tickets() { return $this->hasMany(Ticket::class); }
}
