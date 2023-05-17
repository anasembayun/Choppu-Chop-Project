<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Outlet extends Model
{
    use HasFactory;

    public function partners(){
        return $this->belongsTo('App\Models\Partner', 'partner_id', 'id');
    }
}
