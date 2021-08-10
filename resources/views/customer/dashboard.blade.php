@extends('layouts.frontend')

@section('title')
    {{ config('app.name') }} | {{ Auth::user()->name }}'s Dashboard
@endsection


@section('content')
                <!-- breadcrumb -->
                <div class="bgbl pt__20 pb__20 lh__1">
                    <div class="container">
                        <div class="row al_center">
                            <div class="col">
                                 <nav class="sp-breadcrumb">
                                    <a href="{{ url('/') }}">Home</a>
                                    {{-- <i class="facl facl-angle-right"></i> --}}
                                    <i class="facl facl-angle-right"></i>Login
                                    <i class="facl facl-angle-right"></i>
                                    <a href="{{ route('dashboard') }}">My Account</a>
                                </nav> 
                            </div>
                          {{--  <div class="col-auto flex al_center">
                                <a href="product-detail-layout-01.html" class="pl__5 pr__5 fs__18 cd chp ttip_nt tooltip_bottom_left"><i class="las la-angle-left"></i><span class="tt_txt">Cream women pants</span></a>
                                <a href="product-detail-layout-01.html" class="pl__5 pr__5 fs__20 cd chp ttip_nt tooltip_bottom_left"><i class="fwb iccl iccl-grid fs__15"></i><span class="tt_txt">Back to New Arrival</span></a>
                                <a href="product-detail-layout-01.html" class="pl__5 pr__5 fs__18 cd chp ttip_nt tooltip_bottom_left"><i class="las la-angle-right"></i><span class="tt_txt">Short Sleeved Hoodie</span></a>
                            </div>   --}}
                        </div>
                    </div>
                </div>
                <!-- end breadcrumb -->
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