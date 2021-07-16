<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'product_categories'; 
    protected $guarded = [];

    public function getsubcategories()
    {
        return $this->hasMany('App\Models\Subcategory', 'cat_id', 'id');
    }
}
