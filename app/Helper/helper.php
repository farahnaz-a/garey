<?php 

function categories()
{
    return \App\Models\Category::all();
}

function prod()
{
    return \App\Models\Product::latest()->take(8)->get();
}

function subcategories()
{
    return \App\Models\Subcategory::all();
}

function subcatbycat($id)
{
    return \App\Models\Subcategory::where('cat_id', $id)->get();
}

function youmaylike($id)
{
    return \App\Models\Product::where('status', 'active')->where('prod_cat_id', $id)->orderBy('id', 'desc')->get();
}

function cartItems()
{
  return App\Models\Cart::where('ip_address', request()->ip())->get();
}

function cartTotal()
{
    cartItems();
    $sub_total = 0;
    foreach(cartItems() as $item)
    {
     
        $product_price = App\Models\Product::find($item->product_id)->price ;
        $sub_total = $sub_total + ($item->cart_amount * $product_price);
    }
    return $sub_total;
}

function cartCount()
{
   return App\Models\Cart::where('ip_address', request()->ip())->get()->count();
}

function deliveryfee()
{
    return App\Models\Setting::first()->delivery_fee;
}

function products()
{
    return \App\Models\Product::latest()->get();
}