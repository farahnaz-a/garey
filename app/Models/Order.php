<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders'; 
    protected $guarded = []; 
    public function ordered_by()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }

    public function get_order_list()
    {
        return $this->hasMany('App\Models\OrderDetail', 'order_id', 'id');
    }
}
