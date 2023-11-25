<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tourism extends Model
{
    use HasFactory;

    protected $fillable = [
        'tourism_name',
        'location',
        'image',
        'description',
        'link_gmaps',
    ];
}
