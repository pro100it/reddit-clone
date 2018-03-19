<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BsmtStatus extends Model
{
    protected $table = 'bsmtstatus';
                
    protected $fillable = ['status'];
}
