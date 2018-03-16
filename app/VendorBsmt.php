<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VendorBsmt extends Model
{
    protected $table = 'vendorbsmt';
        
    protected $fillable = ['vendorname'];
}
