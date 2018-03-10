<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bsmt extends Model
{
    protected $table = 'modelbsmt';
    
    protected $fillable = [
        'model', 'modelnumber', 'modelimei',
    ];

    public function transports()
    {
        return $this->hasMany(Transport::class);
    }
}
