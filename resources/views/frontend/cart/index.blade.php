@extends('layouts.frontend')

@section('title')
Garey Store for Electronics in Qatar | Cart
@endsection

@section('content')
    
      <!--cart section-->
        <div class="kalles-section cart_page_section container mt__60">
            <form action="{{ route('cart.custom.update') }}" method="post" class="frm_cart_ajax_true frm_cart_page nt_js_cart pr oh ">
                    @csrf
                                                
                <div class="cart_header">
                    <div class="row al_center">
                        <div class="col-5">Product</div>
                        <div class="col-3 tc">Price</div>
                        <div class="col-2 tc">Quantity</div>
                        <div class="col-2 tc tr_md">Total</div>
                    </div>
                </div>
                <div class="cart_items js_cat_items">
                @foreach (cartItems() as $item)
                    <div class="cart_item js_cart_item">
                        <div class="ld_cart_bar"></div>
                        <div class="row al_center">
                            <div class="col-12 col-md-12 col-lg-5">
                                <div class="page_cart_info flex al_center">
                                    <a href="{{ route('frontend.productDetails', $item->get_product->id) }}">
                                        <img class="lazyload w__100 lz_op_ef" src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%201128%201439%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" data-src="{{ asset('web_images/products/thumb') }}/{{ $item->get_product->id }}.jpg" alt="">
                                    </a>
                                    <div class="mini_cart_body ml__15">
                                        <h5 class="mini_cart_title mg__0 mb__5"><a href="{{ route('frontend.productDetails', $item->get_product->id) }}">Cream women pants</a></h5>
                                        <div class="mini_cart_meta"><p class="cart_selling_plan"></p></div>
                                        <div class="mini_cart_tool mt__10">
                                            <a href="{{ route('cart.delete', $item->id) }}" ><span class="tt_txt">Remove this item</span>
                                                 Remove
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 col-lg-3 tc__ tc_lg">
                                <div class="cart_meta_prices price">
                                    <div class="cart_price">QAR {{ $item->get_product->price }}</div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 col-lg-2 tc mini_cart_actions">
                                <div class="quantity pr mr__10 qty__true">
                                    <input type="number" class="input-text qty text tc qty_cart_js" name="cart_amount[]" value="{{ $item->cart_amount }}">
                                    <div class="qty tc fs__14">
                                        <button type="button" class="plus db cb pa pd__0 pr__15 tr r__0">
                                            <i class="facl facl-plus"></i></button>
                                        <button type="button" class="minus db cb pa pd__0 pl__15 tl l__0 qty_1">
                                            <i class="facl facl-minus"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 col-lg-2 tc__ tr_lg">
                                <span class="cart-item-price fwm cd js_tt_price_it">QAR {{ $item->cart_amount * $item->get_product->price }}</span>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="id[]" value="{{ $item->id }}">
                    @endforeach
                </div>
                <div class="cart__footer mt__60">
                    <div class="row">
                        <div id="car" class="col-12 col-md-6 cart_actions tl_md tc order-md-2 order-2 mb__50" style="opacity: 0;">
                            <label for="CartSpecialInstructions_2" class="cart-note__label dib cd mb__10"><span class="txt_add_note ">Add Order Note</span><span class="txt_edit_note dn">Edit Order Note</span></label>
                            <textarea name="note" id="CartSpecialInstructions_2" class="cart-note__input" placeholder="How can we help you?"></textarea><label for="couponcode" class="cart-couponcode__label db cd mt__20 mb__10">Coupon:</label>
                            <p>Coupon code will work on checkout page</p>
                            <input type="text" name="discount" id="couponcode" value placeholder="Coupon code">
                        </div>
                        <div class="col-12 tr_md tc order-md-4 order-4 col-md-6">
                            <div class="total row in_flex fl_between al_center cd fs__18 tu">
                                <div class="col-auto"><strong>Subtotal:</strong></div>
                                <div class="col-auto tr js_cat_ttprice fs__20 fwm">
                                    <div class="cart_tot_price">QAR {{ cartTotal() }}</div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <p class="db txt_tax_ship mb__5">Delivery fee is calculated at checkout</p>
                            {{-- <p class="pr dib mb__5">
                                <input required type="checkbox" id="cart_agree_2" class="js_agree_ck mr__5" name="ck_lumise">
                                <label for="cart_agree_2">I agree with the terms and conditions.</label>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path d="M9 20l-7-7 3-3 4 4L19 4l3 3z"></path>
                                </svg>
                            </p> --}}
                            <button type="submit" class="btn_checkout button button_primary tu mt__10 mb__10 js_add_ld w__100">Update cart</button>
                        </form> <br>
                        <button type="submit" onclick="event.preventDefault();window.location = '{{ route('checkout.index') }}'" class="btn_checkout button button_primary tu mt__10 mb__10 js_add_ld w__100">Check out</button>
                            <div class="clearfix"></div>
                            <div class="cat_img_trust mt__10">
                                <img class="lz_op_ef lazyload w-50" src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20476%2052%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" data-src="assets/images/shopping-cart/cart_image.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <!--end cart section-->
@endsection


@section('custom-js')
<script>
    $(document).ready(function(){
      $('#applyCoupon').click(function(){
         var coupon_name = $('#couponName').val();
         window.location.href = "{{ url('/cart') }}" + "/" + coupon_name
      });
    });
 </script>    
@endsection