<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Cart;
use App\Models\User;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Auth;

class CheckoutController extends Controller
{
   public function index()
   {
       return view('frontend.checkout.index');
   }

   public function store(Request $request)
   {
       $request->validate([
        'firstname_en' => 'required', 
        'lastname_en'  => 'required', 
        'address_one'  => 'required', 
        'mobile_no'    => 'required',
       ]);

       $userWithNumber = User::where('mobile_no', $request->mobile_no)->first();
       $userWithEmail  = User::where('email', $request->email)->first();
       if(Auth::check())
       {
        $order =  Order::create([
            'user_id'           => Auth::id(), 
            'order_total'       => cartTotal(), 
            'order_date'        => Carbon::now()->format('Y-m-d'),
            'delivery_note'     => $request->delivery_note,
            'status'            => 'RECEIVED',
            'delivery_address'  => $request->address_one. ' ' . $request->address_two . ' ' . $request->city . ',' . $request->zip,
            'delivery_fee'      => deliveryfee(), 
            'total_payable'     => $request->total_payable, 
            'created_at'        => Carbon::now(),

      ]); 

      foreach(cartItems() as $item)
      {
          OrderDetail::create([
              'prod_id'  => $item->get_product->id,
              'order_id' => $order->id,
              'qty'      => $item->cart_amount,
              'price'    => $item->get_product->price . '.00',
          ]);

          Cart::find($item->id)->delete();

        }
          if(!Auth::user()->mobile_no)
          {
              User::find(Auth::id())->update([
                'mobile_no' => $request->mobile_no,
              ]);
          }
        return redirect()->route('dashboard')->withMessage('Order Placed Succesfully!!!');

      
       }
       else
       {
        if($userWithEmail)
        {
                    $user = $userWithEmail;
                
                    $order =  Order::create([
                    'user_id'           => $user->id, 
                    'order_total'       => cartTotal(), 
                    'order_date'        => Carbon::now()->format('Y-m-d'),
                    'delivery_note'     => $request->delivery_note,
                    'status'            => 'RECEIVED',
                    'delivery_address'  => $request->address_one. ' ' . $request->address_two . ' ' . $request->city . ',' . $request->zip,
                    'delivery_fee'      => deliveryfee(), 
                    'total_payable'     => $request->total_payable, 
                    'created_at'        => Carbon::now(),
        
            ]); 
        
            foreach(cartItems() as $item)
            {
                OrderDetail::create([
                    'prod_id'  => $item->get_product->id,
                    'order_id' => $order->id,
                    'qty'      => $item->cart_amount,
                    'price'    => $item->get_product->price . '.00',
                ]);
        
                Cart::find($item->id)->delete();
            }
        
                Auth::login($user);

                if(!$user->mobile_no)
                {
                      $user->mobile_no = $request->mobile_no;
                      $user->save();
                }
            return redirect()->route('dashboard')->withMessage('Order Placed !! Looks like your number is already registered with our IOS and Android app. We have updated your email address to our system. Now you can login to our website with the same password you use on our apps. Thank you');


        }
        elseif($userWithNumber)
        {
            $user = $userWithNumber;
            $user->email = $request->email; 
            $user->save();
               $order =  Order::create([
                   'user_id'           => $user->id, 
                   'order_total'       => cartTotal(), 
                   'order_date'        => Carbon::now()->format('Y-m-d'),
                   'delivery_note'     => $request->delivery_note,
                   'status'            => 'RECEIVED',
                   'delivery_address'  => $request->address_one,
                   'delivery_fee'      => deliveryfee(), 
                   'total_payable'     => $request->total_payable, 
                   'created_at'        => Carbon::now(),
 
             ]); 
 
             foreach(cartItems() as $item)
             {
                 OrderDetail::create([
                     'prod_id'  => $item->get_product->id,
                     'order_id' => $order->id,
                     'qty'      => $item->cart_amount,
                     'price'    => $item->get_product->price . '.00',
                 ]);
 
                 Cart::find($item->id)->delete();
             }
 
             Auth::login($user);
 
             return redirect()->route('dashboard')->withMessage('Your order have been placed.');
        }
        else 
        {
           $user = User::create([
             'firstname_en' => $request->firstname_en,
             'lastname_en'  => $request->lastname_en, 
             'email'        => $request->email, 
             'mobile_no'    => $request->mobile_no, 
             'password'     => bcrypt($request->pass),
           ]);
 
            $order =  Order::create([
                   'user_id'           => $user->id, 
                   'order_total'       => cartTotal(), 
                   'order_date'        => Carbon::now()->format('Y-m-d'),
                   'delivery_note'     => $request->delivery_note,
                   'status'            => 'RECEIVED',
                   'delivery_address'  => $request->address_one. ' ' . $request->address_two . ' ' . $request->city . ',' . $request->zip,
                   'delivery_fee'      => deliveryfee(), 
                   'total_payable'     => $request->total_payable, 
                   'created_at'        => Carbon::now(),
 
             ]); 
 
             foreach(cartItems() as $item)
             {
                 OrderDetail::create([
                     'prod_id'  => $item->get_product->id,
                     'order_id' => $order->id,
                     'qty'      => $item->cart_amount,
                     'price'    => $item->get_product->price . '.00',
                 ]);
 
                 Cart::find($item->id)->delete();
             }
 
             Auth::login($user);
 
             return redirect()->route('dashboard')->withMessage('Thank you, Your order has been placed successfully. You may login to see your order status using'. "<br>". 'username: '. $request->email . "<br>" . 'password: '. $request->mobile_no);
 
        }
       }
       
   }
}
