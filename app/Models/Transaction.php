<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    public function products(){
        return $this->belongsTo('App\Models\Product', 'product_id', 'id');
    }

    public function customers(){
        return $this->belongsTo('App\Models\Customer', 'customer_id', 'id');
    }
}
