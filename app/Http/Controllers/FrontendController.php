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
            'newArrivals' => Product::where('status', 'active')->where('created_at', '>', Carbon::now()->subDays(30))->get(),
            'recommended' => Product::where('status', 'active')->where('display_as', 'recommended')->get(),
            'bestValues'  => Product::where('status', 'active')->where('display_as', 'best price')->get(),
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
        return view('frontend.products', [
            'products' => Product::where('status', 'active')->orderBy('id', 'desc')->simplePaginate(50),
            'brands' => DB::table('products')
                        ->select('manufacture_en', DB::raw('count(*) as total'))
                        ->groupBy('manufacture_en')
                        ->get(),
        
        ]);
    }
    /**
     *  Product by category 
     */
    public function productbycategory($id)
    {
        $cat = Category::find($id); 
        $products = Product::where('status', 'active')->where('prod_cat_id', $id)->simplePaginate(50);
        $brands = DB::table('products')
                ->select('manufacture_en', DB::raw('count(*) as total'))
                ->groupBy('manufacture_en')
                ->get();

       return view('frontend.products', compact('cat', 'products', 'brands'));
    }
    /**
     *  Product by category 
     */
    public function productbysubcategory($id)
    {
        $subcat = Subcategory::find($id);
        $cat = Category::find($subcat->cat_id); 
        $products = Product::where('status', 'active')->where('prod_subcat_id', $id)->simplePaginate(50);
        $brands = DB::table('products')
                ->select('manufacture_en', DB::raw('count(*) as total'))
                ->groupBy('manufacture_en')
                ->get();

       return view('frontend.products', compact('cat', 'products', 'brands'));
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

    /**
     *  Product Details 
     */
    public function productDetails($id)
    {
        $data = Product::find($id); 

        return view('frontend.details', compact('data'));

    }

    /**
     *  Search 
     */
    public function search()
    {
        $category = request()->product_type; 
        $query    = request()->q; 
        $cat = Category::where('cat_name_en', $category)->first(); 
        $brands = DB::table('products')
                ->select('manufacture_en', DB::raw('count(*) as total'))
                ->groupBy('manufacture_en')
                ->get();

        if($category == '*')
        {
            $products = Product::where('prod_title_en', 'LIKE', '%'.$query.'%')
                               ->simplePaginate(50);
            return view('frontend.products', compact('products', 'brands'));
        }
        else 
        {
            $products = Product::where('prod_cat_id', $cat->id)
                               ->where('prod_title_en', 'LIKE', '%'.$query.'%')
                               ->simplePaginate(50);
            return view('frontend.products', compact('products', 'brands'));
        }
    }

    public function filterSearch(Request $request)
    {
        $products = Product::where('manufacture_en', $request->brand)->get();
        $brands = DB::table('products')
                    ->select('manufacture_en', DB::raw('count(*) as total'))
                    ->groupBy('manufacture_en')
                    ->get();
        $view = view('includes.products', compact('products', 'brands')); 
        $result = $view->render();
        echo $result;
    }
    public function priceSearch(Request $request)
    {

     
        $input   = $request->price;
        $output  = str_replace('$', ' ', $request->price);
        $explode = explode('-', $output); 

        $min = $explode[0];
        $max = $explode[1];

        $products = Product::whereBetween('price', [$min, $max])->get();
        $brands = DB::table('products')
                    ->select('manufacture_en', DB::raw('count(*) as total'))
                    ->groupBy('manufacture_en')
                    ->get();
        $view = view('includes.products', compact('products', 'brands')); 
        $result = $view->render();
        echo $result;
    }

    public function lth()
    {
        $products = Product::where('status', 'active')->orderBy('price', 'asc')->simplePaginate(50);
        $brands = DB::table('products')
                        ->select('manufacture_en', DB::raw('count(*) as total'))
                        ->groupBy('manufacture_en')
                        ->get();
        $view = view('includes.products', compact('products', 'brands')); 
        $result = $view->render();
        echo $result;
    }
    public function htl()
    {
        $products = Product::where('status', 'active')->orderBy('price', 'desc')->simplePaginate(50);
        $brands = DB::table('products')
                        ->select('manufacture_en', DB::raw('count(*) as total'))
                        ->groupBy('manufacture_en')
                        ->get();
        $view = view('includes.products', compact('products', 'brands')); 
        $result = $view->render();
        echo $result;
    }
    public function otn()
    {
        $products = Product::where('status', 'active')->orderBy('id', 'asc')->simplePaginate(50);
        $brands = DB::table('products')
                        ->select('manufacture_en', DB::raw('count(*) as total'))
                        ->groupBy('manufacture_en')
                        ->get();
        $view = view('includes.products', compact('products', 'brands')); 
        $result = $view->render();
        echo $result;
    }
    public function nto()
    {
        $products = Product::where('status', 'active')->orderBy('id', 'desc')->simplePaginate(50);
        $brands = DB::table('products')
                        ->select('manufacture_en', DB::raw('count(*) as total'))
                        ->groupBy('manufacture_en')
                        ->get();
        $view = view('includes.products', compact('products', 'brands')); 
        $result = $view->render();
        echo $result;
    }

// END    
}
