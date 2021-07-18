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