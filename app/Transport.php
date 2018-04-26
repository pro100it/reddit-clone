<?php

namespace App;

use App\Bsmt;
use App\TransportActive;
use App\ModelTransport;

use Illuminate\Database\Eloquent\Model;
use App\Events\TransportStatusChanged;

class Transport extends Model {

    protected $table = 'transports';

    protected $casts = [
          'user_id' => 'integer',
          'bsmt_id' => 'integer'
         // 'customer_id' => 'integer'
        ];

    protected $fillable = ['model_name_id', 'gov_number','bsmt_id'];

    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }

    public function bsmts() {
        return $this->belongsTo('App\Bsmt','bsmt_id');
    }
    
    public function transportsactive()
    {
        return $this->hasMany(TransportActive::class);
    }
    //public function customers() {
    //    return $this->belongsTo('App\Customer','customer_id');
    //}

    public function modeltransports() {
        return $this->belongsTo('App\ModelTransport','model_name_id');
    }
    
    public function wasCreatedBy($user)
    {
        if( is_null($user) ) {
            return false;
        }

        return $this->user_id === $user->id;
    }
}
