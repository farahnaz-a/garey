@extends('layouts.frontend')

@section('title')
Garey Store for Electronics in Qatar | Checkout
@endsection

@section('content')
   <!--cart section-->
   <div class="kalles-section cart_page_section container mt__60">
    <div class="frm_cart_page check-out_calculator">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-7">
                <div class="checkout-section">
                    <h3 class="checkout-section__title" style="color : #861f3d !important;">Delivery details</h3>
                    <form action="{{ route('checkout.store') }}" method="POST">
                        @csrf
                    <div class="row">
                        <p class="checkout-section__field col-lg-6 col-12">
                            <label for="f-name">First name</label>
                            <input type="text" name="firstname_en" id="f-name" value="{{ Auth::user()->firstname_en ?? old('firstname_en') }}">
                            @error('firstname_en')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </p>
                        <p class="checkout-section__field col-lg-6 col-12">
                            <label for="l-name">Last name</label>
                            <input type="text" id="l-name" name="lastname_en" value="{{ Auth::user()->lastname_en ?? old('lastname_en') }}">
                            @error('lastname_en')
                            <small class="text-danger">{{ $message }}</small>
                             @enderror
                        </p>
                        {{-- <p class="checkout-section__field col-12">
                            <label for="address_country_ship_2">Country / Region *</label>
                            <select id="address_country_ship_2">
                                <option value="">---</option>
                                <option value="United States" selected="">United States</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="Italy">Italy</option>
                                <option value="Germany">Germany</option>
                                <option value="France">France</option>
                                <option value="Spain">Spain</option>
                                <option value="Australia">Australia</option>
                                <option value="Finland">Finland</option>
                                <option value="Austria">Austria</option>
                                <option value="Belgium">Belgium</option>
                                <option value="Brazil">Brazil</option>
                                <option value="Canada">Canada</option>
                                <option value="Chile">Chile</option>
                                <option value="Cuba">Cuba</option>
                                <option value="India">India</option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="Japan">Japan</option>
                            </select>
                        </p> --}}
                        <p class="checkout-section__field col-12">
                            <label for="address_01">Address *</label>
                            <input type="text" id="address_01"
                            @guest 
                            value="{{ old('address_one') }}" 
                            @endguest
                            @auth
                                @if(\App\Models\Order::where('user_id', Auth::id())->exists())
                                value="{{ \App\Models\Order::where('user_id', Auth::id())->first()->delivery_address ?? old('address_one') }}"
                                @else 
                                value="{{ old('address_one') }}"
                                @endif
                            @endauth
                            class="mb__20" name="address_one" placeholder="Enter your address (Area name, Zone#, Street#, Building#, Unit#)">
                            <input type="text" id="address_02" value="{{ old('delivery_note') }}" class="mb__20" name="delivery_note" placeholder="Optional (Any special notes for delivery?)">
                            @error('address_one')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                        </p>
                      
                        <p class="checkout-section__field col-12">
                            <label for="address_phone">Mobile number</label>
                            <input name="mobile_no" value="{{ Auth::user()->mobile_no ?? old('mobile_no') }}" type="text" id="address_phone"/>
                            @error('mobile_no')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                        </p>
                        <p class="checkout-section__field col-12">
                            <label for="address_amail">Email</label>
                            <input  type="email" name="email" required value="{{ Auth::user()->email ?? old('email') }}" id="address_amail"/>
                            @error('email')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                        </p>
                    </div>
                </div>

            </div>
            <div class="col-12 col-md-6 col-lg-5 mt__50 mb__80 mt-md-0 mb-md-0">
                <div class="order-review__wrapper">
                    <h3 class="order-review__title" style="color : #861f3d !important;">Your order</h3>
                    <div class="checkout-order-review">
                        <table class="checkout-review-order-table">
                            <thead>
                            <tr>
                                <th class="product-name">Product</th>
                                <th class="product-total">Subtotal</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach (cartItems() as $item)
                            <tr class="cart_item">
                                <td class="product-name">{{ $item->get_product->prod_title_en }}<strong class="product-quantity">× {{ $item->cart_amount }}</strong>
                                </td>
                                <td class="product-total"><span class="cart_price">QAR {{ $item->get_product->price }}.00</span></td>
                            </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr class="cart-subtotal cart_item">
                                <th>Subtotal</th>
                                <td><span style="font-size: 13px;" class="cart_price">QAR {{ cartTotal() }}.00</span></td>
                            </tr>
                            <tr class="cart_item">
                                <th>Delivery Fee</th>
                                <td><span class="cart_price">QAR {{ deliveryfee() }}</span></td>
                            </tr>
                            <tr class="order-total cart_item">
                                <th>Total</th>
                                <td><strong style="font-size: 12px;"><span class="cart_price amount">QAR {{ cartTotal() + deliveryfee() }}.00</span></strong></td>
                            </tr>
                            </tfoot>
                        </table>
                        <div class="checkout-payment">
                            <ul class="payment_methods">
                                 <li class="payment_method">
                                    <input id="payment_method_bacs" type="radio" class="input-radio" name="payment_method" value="bacs" checked="checked">
                                    <label for="payment_method_bacs">Cash on delivery</label>
                                    <div class="payment_box payment_method_bacs">
                                        <p>Delivery within (24 - 48)hrs.</p>
                                    </div>
                                </li>
                                {{-- <li class="payment_method">
                                    <input id="payment_method_stripe" type="radio" class="input-radio" name="payment_method" value="stripe">
                                    <label for="payment_method_stripe">
                                        Credit Card (Stripe)
                                        <img src="assets/images/shopping-cart/visa.svg" class="stripe-visa-icon stripe-icon" alt="Visa">
                                        <img src="assets/images/shopping-cart/mastercard.svg" class="stripe-mastercard-icon stripe-icon" alt="Mastercard">
                                        <img src="assets/images/shopping-cart/amex.svg" class="stripe-amex-icon stripe-icon" alt="American Express">
                                        <img src="assets/images/shopping-cart/discover.svg" class="stripe-discover-icon stripe-icon" alt="Discover">
                                        <img src="assets/images/shopping-cart/diners.svg" class="stripe-diners-icon stripe-icon" alt="Diners">
                                        <img src="assets/images/shopping-cart/jcb.svg" class="stripe-jcb-icon stripe-icon" alt="JCB">
                                    </label>
                                    <div class="payment_box payment_method_bacs dn">
                                        <p>Pay with your credit card via Stripe. TEST MODE ENABLED. In test mode, you can use the card number 4242424242424242 with any CVC and a valid expiration date or check the Testing Stripe documentation for more card numbers.</p>
                                        <div class="credit-card-form">
                                            <div class="form-row form-row-wide">
                                                <label for="stripe-card-element">Card Number<span class="required">*</span></label>
                                                <div class="stripe-card-group">
                                                    <input type="text" name="card-number" id="stripe-card-element" value="" placeholder="1234 1234 1234 1234">
                                                    <i class="stripe-credit-card-brand stripe-card-brand" alt="Credit Card"></i>
                                                </div>
                                            </div>
                                            <div class="form-row form-row-first">
                                                <label for="stripe-exp-element">Expiry Date *</label>
                                                <div class="stripe-card-group">
                                                    <input type="text" name="card-number" id="stripe-exp-element" value="" placeholder="MM/YY">
                                                </div>
                                            </div>
                                            <div class="form-row form-row-last">
                                                <label for="stripe-cvc-element">Card Code (CVC) *</label>
                                                <div class="stripe-card-group">
                                                    <input type="text" name="card-number" id="stripe-cvc-element" value="" placeholder="CVC">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li> --}}
                            </ul>
                            <p class="checkout-payment__policy-text">Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our <a href="#">privacy policy</a>.
                            </p>
                            <label class="checkout-payment__confirm-terms-and-conditions">
                                <input required type="checkbox" value="1" {{ (old('terms')) ? 'checked' : '' }} name="terms" id="terms">
                                <span>I have read and agreed to the website <a href="{{ route('frontend.terms') }}" class="terms-and-conditions-link">terms and conditions</a></span>&nbsp;<span class="required">*</span>
                            </label>
                            <input type="hidden" name="total_payable" value="{{ cartTotal() + deliveryfee() }}.00">
                            <button type="subit" class="button button_primary btn checkout-payment__btn-place-order">Place order now</button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end cart section-->
@endsection