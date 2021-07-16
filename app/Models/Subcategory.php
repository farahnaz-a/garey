<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;

    protected $table = 'product_subcategories';
    protected $guarded = []; 

    public function getcategory()
    {
        return $this->belongsTo('App\Models\Category', 'cat_id', 'id');
    }

    public function getproducts()
    {
        return $this->hasMany('App\Models\Product', 'prod_subcat_id', 'id');
    }
}
