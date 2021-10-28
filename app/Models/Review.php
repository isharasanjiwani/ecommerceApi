<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
Use App\Model\Product;

class Review extends Model
{
    use HasFactory;
    public $fillable = [
        'product_id',
        'review',
        'star'
    ];

    public function products(){
        return $this->belongsTo(Product::class);
    }
}
