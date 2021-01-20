<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Device extends Model
{
    use Notifiable;

    protected $fillable = [
        'type', 'description', 'serial_number'
        ];

    public function contract() { return $this->belongsTo(Contract::class); }
}
