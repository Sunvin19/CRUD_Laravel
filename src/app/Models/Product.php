<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'description', 'price', 'stock'];
    protected $hidden = ['create_at', 'updated_at'];
    protected $guarded = ['id'];
}
