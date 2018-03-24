<?php

namespace App;
use App\TrasportActive;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
   protected $table = 'customers';

   protected $fillable = ['customer'];

   public function transportsactive()
    {
        return $this->hasMany(TransportActive::class);
    }
}
