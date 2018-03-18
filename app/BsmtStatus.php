<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BsmtStatus extends Model
{
    protected $table = 'statusbsmt';
    
    protected $casts = [
          'statusbsmt_id' => 'integer'  
        ];
        
    protected $fillable = ['status'];
}
