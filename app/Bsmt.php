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
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function transports()
    {
        return $this->belongsTo(Transport::class);
    }
}
