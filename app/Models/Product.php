<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $guarded = [];

    public function getsubcat()
    {
        return $this->belongsTo('App\Models\Subcategory', 'sub_cat_id', 'id');
    }
}
