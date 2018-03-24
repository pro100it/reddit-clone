<?php

namespace App;

use App\TransportActive;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $fillable = ['name_state']; 

    public function transportsactive()
    {
        return $this->hasMany(TransportActive::class);
    }

}
