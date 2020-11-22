<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailOrder extends Model
{
    protected $guarded = [];
    protected $table = 'detail_order';
    
    public function order()
    {
        return $this->belongsTo('App\Order');
    }

    public function menu()
    {
        return $this->belongsTo('App\Menu', 'id_menu', 'id');
    }
}
