<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelTransport extends Model
{
    protected $table = 'model_transport';
        
    protected $fillable = ['model_name'];
}
