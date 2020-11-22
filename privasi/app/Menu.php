<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $guarded = [];

    public function kategori_()
    {
        return $this->belongsTo('App\Kategori', 'kategori', 'id');
    }
}
