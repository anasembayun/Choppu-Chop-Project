<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    use HasFactory;

    public function outlets(){
        return $this->hasMany('App\Models\Outlet', 'partner_id', 'id');
    }
}
