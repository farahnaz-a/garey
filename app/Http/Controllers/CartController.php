<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Cart;
use App\Models\Coupon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class CartController extends Controller
{

    public function index($coupon_name = "")
    {
        if(cartTotal() > 0)
        {
            if($coupon_name != "")
            {
              if(Coupon::where('coupon_name', $coupon_name)->exists())
              {
               if(Coupon::where('coupon_name', $coupon_name)->first()->valid_till >= Carbon::now()->format('Y-m-d'))
               {
                 $coupon_name;
                 $coupon_discount = Coupon::where('coupon_name', $coupon_name)->first();
                 return view('frontend.cart.index', compact('coupon_name', 'coupon_discount'));
               }
               else 
               {
                return redirect()->route('cart.index')->withSuccess('Coupon is Expired');
               }
              }
              else 
              {
               return redirect()->route('cart.index')->withSuccess('Coupon is invalid');
              }
            }
            else
            {
              return view('frontend.cart.index');
            }
        }
        else 
        {
          return redirect('/')->withSuccess('You do not have any products on cart');
        }
    }

    public function store(Request $request)
    {
 
       
        if(Cart::where('ip_address', $request->ip())->where('product_id', $request->product_id)->exists())
        {
          Cart::where('ip_address', $request->ip())->where('product_id', $request->product_id)->increment('cart_amount', $request->cart_amount);
          // return back()->withCartopen('Product Updated to Cart');
          $carts = CartItems();
          $subtotal = cartTotal();
          $view = view('includes.cartloop', compact('carts', 'subtotal')); 
          $data = $view->render();
          $total = cartCount();
          return response()->json(['carts' => $data, 'total' => $total, 'subtotal' => $subtotal]);

        }
        else
        {
          Cart::insert([
            'ip_address'  => $request->ip(),
            'cart_amount' => $request->cart_amount,
            'product_id'  => $request->product_id,
            'created_at'  => Carbon::now(),
          ]);
          $carts = CartItems();
          $subtotal = cartTotal();
          $view = view('includes.cartloop', compact('carts', 'subtotal')); 
          $data = $view->render();
          $total = cartCount();
         
          return response()->json(['carts' => $data, 'total' => $total, 'subtotal' => $subtotal]);
        }

    }

    public function delete($cart_id)
    {
      Cart::find($cart_id)->delete();
      $carts = CartItems();
      $subtotal = cartTotal();
      $view = view('includes.cartloop', compact('carts', 'subtotal')); 
      $data = $view->render();
      $total = cartCount();
     
      return response()->json(['carts' => $data, 'total' => $total, 'subtotal' => $subtotal]);
    }
    // public function destroy($id)
    // {
    //   Cart::find($id)->delete();
     
    //   return back()->withCartopen('done');
    // }

    public function cartUpdate(Request $request)
    {

      foreach ($request->id as $key => $id) {
        Cart::find($id)->update([
          'cart_amount' => $request->cart_amount[$key],
        ]);
      }
        return back()->withSuccess('Cart Updated');
    }
}
