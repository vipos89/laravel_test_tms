<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable = ['name', 'logo', 'description', 'status', 'creation_year'];
    // public $incrementing = false;
    public $timestamps = false;

    use HasFactory;
}
