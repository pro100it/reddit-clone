<?php

namespace App;

use App\User;
use App\Bsmt;
use Illuminate\Database\Eloquent\Model;

class Transport extends Model {

    protected $table = 'transports';

    protected $casts = [
          'user_id' => 'integer'
        ];


    protected $fillable = ['model', 'govnumber','blockbsmt_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function bsmts() {
        return $this->hasMany();
    }

    public function wasCreatedBy($user)
    {
        if( is_null($user) ) {
            return false;
        }

        return $this->user_id === $user->id;
    }
}
