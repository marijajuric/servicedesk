<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Ticket extends Model
{
    use Notifiable;

    protected $fillable = [
        'title', 'description', 'status'
        ];

    public function notes() { return $this->hasMany(Note::class); }


    public function service() { return $this->belongsTo(Service::class); }
    public function user() { return $this->belongsTo(User::class); }
}
