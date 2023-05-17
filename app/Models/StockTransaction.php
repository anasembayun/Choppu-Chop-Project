<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StockTransaction extends Model
{
    use HasFactory;

    public function materials(){
        return $this->belongsTo('App\Models\ProductMaterial', 'material_id', 'id');
    }

    public function outlets(){
        return $this->belongsTo('App\Models\Outlet', 'outlet_id', 'id');
    }
}
