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
use Artisan;

class FrontendController extends Controller
{
    /**
     *  Home Page 
     */
    public function index()
    {
        Artisan::call('route:clear');
        return view('frontend.index', [
            
            'banner'      => Banner::inRandomOrder()->first(),
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
     *  Product Type   
     */
    public function productType($type)
    {
       if($type == 'best-seller')
       {
        $products = OrderDetail::with('get_product_info')
                                    ->select('prod_id', DB::raw('count(*) as total'))
                                    ->groupBy('prod_id')
                                    // ->where('created_at', '>', Carbon::now()->subDays(30) )
                                    ->orderBy('total', 'desc')
                                    ->simplePaginate(50);

        $brands = DB::table('products')
                      ->select('manufacture_en', DB::raw('count(*) as total'))
                      ->groupBy('manufacture_en')
                      ->get();

         return view('frontend.products', compact('products', 'brands', 'type'));
       }
       elseif($type == 'best-value')
       {
            $products = Product::where('status', 'active')->where('display_as', 'best price')->simplePaginate(50);

            $brands = DB::table('products')
                        ->select('manufacture_en', DB::raw('count(*) as total'))
                        ->groupBy('manufacture_en')
                        ->get();

            return view('frontend.products', compact('products', 'brands', 'type'));

       }
       elseif($type == 'new-arrival')
       {
          $products = Product::where('status', 'active')->where('created_at', '>', Carbon::now()->subDays(30))->simplePaginate(50);
          $brands = DB::table('products')
                      ->select('manufacture_en', DB::raw('count(*) as total'))
                      ->groupBy('manufacture_en')
                      ->get();
  
                return view('frontend.products', compact('products', 'brands', 'type'));
       }
       elseif($type == 'recommended')
       {
          $products = Product::where('status', 'active')->where('display_as', 'recommended')->simplePaginate(50);
          $brands = DB::table('products')
                      ->select('manufacture_en', DB::raw('count(*) as total'))
                      ->groupBy('manufacture_en')
                      ->get();
  
                return view('frontend.products', compact('products', 'brands', 'type'));          
          
       }
       else 
       {
            return redirect()->route('frontend.products');
       }

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

       return view('frontend.products', compact('cat', 'subcat', 'products', 'brands'));
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
        $keywords = explode(' ', $query);
        $cat = Category::where('cat_name_en', $category)->first(); 
        $brands = DB::table('products')
                ->select('manufacture_en', DB::raw('count(*) as total'))
                ->groupBy('manufacture_en')
                ->get();

        if($category == '*')
        {
            // $products = Product::where('prod_title_en', 'LIKE', '%'.$query.'%')
            //                    ->simplePaginate(50);

            $products = Product::where(function ($query) use ($keywords) {
                foreach ($keywords as $keyword) {
                   $query->Where('prod_title_en', 'LIKE', "%$keyword%");
                }
            })->simplePaginate(50);
            return view('frontend.products', compact('products', 'brands'));
        }
        else 
        {
            $products = Product::where(function ($query) use ($keywords) {
                foreach ($keywords as $keyword) {
                    $query->Where('prod_title_en', 'LIKE', "%$keyword%");
                    }
                })->simplePaginate(50);
            return view('frontend.products', compact('products', 'brands'));
        }
    }

    public function filterSearch(Request $request)
    {
        $products = Product::where('manufacture_en', $request->brand)->get();
        $brands = DB::table('products')
                    ->select('manufacture_en', DB::raw('count(*) as total'))
                    ->groupBy('manufacture_en')
                    ->simplePaginate(50);
        $view = view('includes.products', compact('products', 'brands')); 
        $result = $view->render();
        echo $result;
    }
    public function priceSearch(Request $request)
    {

     
        $input   = $request->price;
        $output  = str_replace('>', ' ', $request->price);
        $explode = explode('-', $output); 

        $min = $explode[0];
        $max = $explode[1];

        $products = Product::whereBetween('price', [$min, $max])->get();
        $brands = DB::table('products')
                    ->select('manufacture_en', DB::raw('count(*) as total'))
                    ->groupBy('manufacture_en')
                    ->simplePaginate(50);
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

    /**
     *  Contact page 
     */
    public function contact()
    {
       return view('frontend.contact');
    }

    /**
     *  Terms & Conditions
     */
    public function terms()
    {
       return view('frontend.terms');
    }

    /**
     *  Faq 
     */
    public function faqs()
    {
        return view('frontend.faqs'); 
    }

    /**
     *  About us 
     */
    public function about()
    {
        return view('frontend.about');
    }

// END    
}
