<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Banner;
use App\Models\Product;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
            'bestSellers' => OrderDetail::with('get_product_info')
                                        ->select('prod_id', DB::raw('count(*) as total'))
                                        ->groupBy('prod_id')
                                        // ->where('created_at', '>', Carbon::now()->subDays(30) )
                                        ->orderBy('total', 'desc')
                                        ->take(8)
                                        ->get(),
        ]);
    }

// END    
}
