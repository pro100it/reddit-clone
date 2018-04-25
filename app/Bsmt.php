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
        
    protected $fillable = ['vendor_id', 'modelnumber','modelimei','statusbsmt_id'];
    
    public function vbsmts() {
        return $this->belongsTo('App\Vendor_Bsmt','vendor_id');
    }    

    public function sbsmts() {
    	return $this->belongsTo('App\BsmtStatus','statusbsmt_id');
    }
}
