<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserEvent extends Model
{
    protected $table = 'user_events';

    protected $fillable = ['user_id', 'event_id'];

    public function event()
    {
        return $this->belongsTo('App\Event');
    }
}
