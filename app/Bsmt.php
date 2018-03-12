<?php

namespace App;

use App\Transport;
use Illuminate\Database\Eloquent\Model;

class Bsmt extends Model
{   
    protected $table = 'modelbsmt';
    
    public function transport()
    {
        return $this->belongsTo(Transport::class);
    }
}
