<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Auth;

class CustomerController extends Controller
{
  /**
   *  Constructor
   */
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function index()
  {
      return view('customer.dashboard', ['orders' => Order::where('user_id', Auth::id())->get()]);
  }

// END  
}
