<?php

namespace App;

use App\Transport;
use Illuminate\Database\Eloquent\Model;

class Bsmt extends Model
{
    protected $table = 'modelbsmt';
    
    protected $casts = [
          'vendor_id' => 'integer'  
        ];
        
    protected $fillable = ['vendor_id', 'modelnumber','modelimei'];
    
    public function bsmts() {
        return $this->belongsTo('App\VendorBsmt','vendor_id');
    }    
}
