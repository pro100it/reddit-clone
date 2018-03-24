<?php

namespace App;

use App\Transport;
use App\Customer;
use App\State;
use Illuminate\Database\Eloquent\Model;

class TransportActive extends Model
{
    protected $table = 'transport_active';

    protected $casts = [
        'customer_id'  => 'integer',
        'transport_id' => 'integer',
        'state_id'     => 'integer'
      ];

    protected $fillable = ['customer_id','transport_id','state_id'];

    public function transports() 
    {
        return $this->belongsTo('Transport','transport_id');
    }  

    public function customers()
    {
        return $this->belongsTo('Customer', 'customer_id');
    }

    public function states()
    {
        return $this->belongsTo('State','state_id');
    }

}
