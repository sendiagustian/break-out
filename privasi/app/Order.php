<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //

    protected $guarded = [];
    
    public function detail_order()
    {
        return $this->hasMany('App\DetailOrder', 'id_order', 'id');
    }

    public function meja()
    {
        return $this->belongsTo('App\User', 'id_meja', 'id');
    }

    public function transaksi()
    {
        return $this->hasOne('App\Transaksi', 'id_order', 'id');
    }
}
