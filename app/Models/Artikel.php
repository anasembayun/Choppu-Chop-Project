<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'title',
        'author',
        'image',
        'desc',
    ];

    public function categories(){
        return $this->belongsTo('App\Models\Category', 'category_id', 'id');
    }
}
