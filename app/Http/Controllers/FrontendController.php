<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Banner;
use App\Models\Category;
use App\Models\Product;
use App\Models\OrderDetail;
use App\Models\Subcategory;
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

    /**
     *  Product Page 
     */
    public function products()
    {
        return view('frontend.products', ['products' => Product::latest()->simplePaginate(50)]);
    }
    /**
     *  Product by category 
     */
    public function productbycategory($id)
    {
        $cat = Category::find($id); 
        $products = Product::where('prod_cat_id', $id)->simplePaginate(50);

       return view('frontend.products', compact('cat', 'products'));
    }

    /**
     *  Sub Category Lists 
     */
    public function subCategories()
    {
        $subcats = Subcategory::all(); 
        $banner  = Banner::first();
        return view('frontend.subcategories', compact('subcats', 'banner'));
    }

// END    
}
