<?php 

function categories()
{
    return \App\Models\Category::all();
}

function prod()
{
    return \App\Models\Product::latest()->take(8)->get();
}