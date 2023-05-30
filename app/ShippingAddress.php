<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShippingAddress extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function province()
    {
        return $this->belongsTo('App\province', 'province_id');
    }
    public function kota()
    {
        return $this->belongsTo('App\kota', 'kota_id');
    }
   
}
