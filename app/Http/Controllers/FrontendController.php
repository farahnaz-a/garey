<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Banner;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    /**
     *  Home Page 
     */
    public function index()
    {
        return view('frontend.index', [
            'banner'      => Banner::first(),
            'newArrivals' => Product::where('created_at', '>', Carbon::now()->subDays(30))->get(),
            'recommended' => Product::where('display_as', 'recommended')->get(),
            'bestValues'  => Product::where('display_as', 'best price')->get(),
            'bestSellers' => Product::orderBy('total_orders', 'desc')->get(),
        ]);
    }

// END    
}
