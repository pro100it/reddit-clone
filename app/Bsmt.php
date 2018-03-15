<?php

namespace App;

use App\Transport;
use Illuminate\Database\Eloquent\Model;

class Bsmt extends Model
{
    protected $table = 'modelbsmt';
    
    protected $casts = [
          'user_id' => 'integer'
        ];
    
    protected $fillable = ['model', 'modelnumber','modelimei'];
    
        
}
