<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Contract extends Model
{
    use Notifiable;

    protected $fillable = [
        'title', 'description', 'contract_duration'
        ];

        public function user() { return $this->belongsTo(User::class); }

        public function devices() { return $this->hasMany(Device::class); }
}
