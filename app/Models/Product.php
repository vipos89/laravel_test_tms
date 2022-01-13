<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $timestamps = false;
    protected $fillable = ['name', 'price', 'img', 'status', 'content', 'brand_id'];

    use HasFactory;

    public function brand(){
        return $this->belongsTo(Brand::class);
    }
}
