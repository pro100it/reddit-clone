<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Transport extends Model {

    protected $table = 'transports';

    protected $casts = [
          'user_id' => 'integer',
          'bsmt_id' => 'integer'  
        ];

    protected $fillable = ['model', 'govnumber','bsmt_id'];

    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }

    public function bsmts() {
        return $this->belongsTo('App\Bsmt','bsmt_id');
    }

    public function wasCreatedBy($user)
    {
        if( is_null($user) ) {
            return false;
        }

        return $this->user_id === $user->id;
    }
}
