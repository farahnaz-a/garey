@extends('layouts.frontend')

@section('title')
    {{ config('app.name') }} | {{ Auth::user()->name }}'s Dashboard
@endsection


@section('content')

    <div class="text-center">
        <h5 style="padding: 100px; margin: 0 auto;">Your order details will be here</h5>

        @if(session('message'))
        <div class="alert alert-success">
            {!! session('message') !!}
        </div>
        @endif
    </div>

   <div class="container">
       <div class="row">
          <div class="table table-responsive">
              <table class="table-striped table-bordered">
                  <tr>
                      
                     <th>Date</th>
                      <th>Order #</th>
                      <th>Products</th>
                      <th>Order Total</th>
                      <th>Delivery Fee</th>
                      <th>Total</th>
                      <th>Status</th>
                  </tr>
                  @foreach ($orders as $item)
                  <tr>
                      
                    <td>{{ $item->order_date }}</td>
                    <td>#{{ $item->id }}</td>
                    <td>
                        @php
                            $details = \App\Models\OrderDetail::where('order_id', $item->id)->get();
                            $flag = 1;
                        @endphp
                        @foreach ($details as $detail)
                           @php
                               $product = \App\Models\Product::where('id', $detail->prod_id)->first();
                           @endphp

                            <div class="float-left"><strong>{{ $flag }}.</strong> <a href="{{ route('frontend.productDetails', $product->id) }}">{{ $product->prod_title_en }}</a>  </div>       <div class="float-right"> qty. {{ $detail->qty }}</div> <br>
                        @php
                            $flag++;
                        @endphp
                        @endforeach
                         
                    </td>
                    <td>
                        QAR {{ $item->order_total }}
                    </td>
                    <td>QAR 20.00</td>
                    <td>QAR {{ $item->total_payable }}</td>
                    <td>{{ $item->status }}</td>
                </tr>

                  @endforeach
              </table>
          </div>
       </div>
   </div>

@endsection